<?php

declare(strict_types=1);

/**
 * Generate one English HTML and PDF evaluation digest per course.
 *
 * Run from the project directory:
 *   php export_evaluatierapporten.php --year=2026
 *   php export_evaluatierapporten.php --year=2026 --output-dir=exports
 */

require_once __DIR__ . '/connections/PDO_connect.php';
require_once __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = getopt('', array('year:', 'output-dir::'));
$year = isset($options['year']) ? (int) $options['year'] : (int) date('Y');
$outputDirectory = isset($options['output-dir']) && $options['output-dir'] !== false
    ? (string) $options['output-dir']
    : __DIR__ . DIRECTORY_SEPARATOR . 'exports';

if ($year < 2006 || $year > (int) date('Y')) {
    throw new InvalidArgumentException('The year must be between 2006 and the current year.');
}

if (!class_exists(Dompdf::class)) {
    throw new RuntimeException('Dompdf is missing. Run "composer install" first.');
}

$reports = array(
    array('title' => 'Publicity', 'score' => 'publiciteit', 'comment' => 'publiciteit_tx', 'extra' => 'naam_aanbrenger'),
    array('title' => 'Website', 'score' => 'website', 'comment' => 'website_tx'),
    array('title' => 'Information in advance', 'score' => 'info_vooraf', 'comment' => 'info_vooraf_tx'),
    array('title' => 'Course price', 'score' => 'prijs', 'comment' => 'prijs_tx'),
    array('title' => 'Duration', 'score' => 'duur', 'comment' => 'duur_tx'),
    array('title' => 'Decisive factors', 'score' => 'belangrijk', 'comment' => 'belangrijk_tx'),
    array('title' => 'Chamber music programme', 'score' => 'kamermuziek', 'comment' => 'kamermuziek_tx'),
    array('title' => 'Coaching chamber music', 'score' => 'coaching_kamermuziek', 'comment' => 'coaching_kamermuziek_tx'),
    array('title' => 'Tutti programme', 'score' => 'tutti', 'comment' => 'tutti_tx'),
    array('title' => 'Coaching tutti', 'score' => 'coaching_tutti', 'comment' => 'coaching_tutti_tx'),
    array('title' => 'Musical and technical level', 'score' => 'niveau', 'comment' => 'niveau_tx'),
    array('title' => 'Individual lessons', 'score' => 'indiv_lessen', 'comment' => 'indiv_lessen_tx'),
    array('title' => 'Playing solo with the orchestra', 'score' => 'solo_spelen', 'comment' => 'solo_spelen_tx'),
    array('title' => 'Preparation of parts', 'score' => 'professionaliteit', 'comment' => 'professionaliteit_tx'),
    array('title' => 'Accommodation', 'score' => 'accommodatie', 'comment' => 'accommodatie_tx', 'extra' => 'acc_name'),
    array('title' => 'Classrooms', 'score' => 'werkruimte', 'comment' => 'werkruimte_tx'),
    array('title' => 'Meals', 'score' => 'maaltijden', 'comment' => 'maaltijden_tx'),
    array('title' => 'Information at the venue', 'score' => 'info_terplekke', 'comment' => 'info_terplekke_tx'),
    array('title' => 'Daily programme', 'score' => 'dagindeling', 'comment' => 'dagindeling_tx'),
    array('title' => 'Workload', 'score' => 'zwaarte', 'comment' => 'zwaarte_tx'),
    array('title' => 'Group size', 'score' => 'groepsgrootte', 'comment' => 'groepsgrootte_tx'),
    array('title' => 'General wishes', 'comment' => 'alg_wensen'),
    array('title' => 'Repertoire wishes', 'comment' => 'rep_wensen'),
    array('title' => 'Differences with other summer schools', 'comment' => 'verschillen'),
    array('title' => 'Marks given and improvements for La Pellegrina', 'score' => 'cijfer_LP', 'comment' => 'cijfer_LP_tx'),
    array('title' => 'Quotes', 'comment' => 'citaat'),
    array('title' => 'Dirkjan Horringa (baroque)', 'course' => 2, 'score' => 'Horringa1', 'comment' => 'Horringa1_tx'),
    array('title' => 'Femke Huizinga', 'course' => 2, 'score' => 'Huizinga', 'comment' => 'Huizinga_tx'),
    array('title' => 'Hanna Lindeijer', 'course' => 2, 'score' => 'Lindeijer', 'comment' => 'Lindeijer_tx'),
    array('title' => 'Ricardo Rodriguez Miranda', 'course' => 2, 'score' => 'Rodriguez', 'comment' => 'Rodriguez_tx'),
    array('title' => 'Mitchell Sandler (baroque)', 'course' => 2, 'score' => 'Sandler1', 'comment' => 'Sandler1_tx'),
    array('title' => 'Edoardo Valorz', 'course' => 2, 'score' => 'Valorz', 'comment' => 'Valorz_tx'),
    array('title' => 'Assistants (baroque)', 'course' => 2, 'score' => 'ass_2', 'comment' => 'ass_2_tx'),
    array('title' => 'Martina Bernaskova (romantic)', 'course' => 1, 'score' => 'Bernaskova3', 'comment' => 'Bernaskova3_tx'),
    array('title' => 'Petr Bernasek', 'course' => 1, 'score' => 'BernasekP', 'comment' => 'BernasekP_tx'),
    array('title' => 'Pavel Horejsi', 'course' => 1, 'score' => 'Horejsi', 'comment' => 'Horejsi_tx'),
    array('title' => 'Dirkjan Horringa (romantic)', 'course' => 1, 'score' => 'Horringa3', 'comment' => 'Horringa3_tx'),
    array('title' => 'Libor Novacek', 'course' => 1, 'score' => 'Novacek', 'comment' => 'Novacek_tx'),
    array('title' => 'Mitchell Sandler (romantic)', 'course' => 1, 'score' => 'Sandler3', 'comment' => 'Sandler3_tx'),
    array('title' => 'Rudolf Sternadel', 'course' => 1, 'score' => 'Sternadel', 'comment' => 'Sternadel_tx'),
    array('title' => 'Jitka Vlasankova', 'course' => 1, 'score' => 'Vlasankova', 'comment' => 'Vlasankova_tx'),
    array('title' => 'Assistants (romantic)', 'course' => 1, 'score' => 'ass_3', 'comment' => 'ass_3_tx'),
);

$courses = array(
    1 => 'Dvorak\'s Bridal Shirt',
    2 => 'Baroque in Central Europe',
);
$table = 'evaluatie_' . $year;
$columns = array('naam', 'cursus');
foreach ($reports as $report) {
    foreach (array('score', 'comment', 'extra') as $key) {
        if (isset($report[$key])) $columns[] = $report[$key];
    }
}
$columns = array_values(array_unique($columns));
$quotedColumns = implode(', ', array_map(static function (string $column): string {
    if (!preg_match('/^[A-Za-z0-9_]+$/', $column)) {
        throw new RuntimeException('Invalid report column: ' . $column);
    }
    return '`' . $column . '`';
}, $columns));

$check = $db->query("SHOW TABLES LIKE " . $db->quote($table));
if ($check === false || $check->fetchColumn() === false) {
    throw new RuntimeException("Evaluation table {$table} does not exist.");
}

if (!is_dir($outputDirectory) && !mkdir($outputDirectory, 0775, true) && !is_dir($outputDirectory)) {
    throw new RuntimeException('Cannot create output directory: ' . $outputDirectory);
}

foreach ($courses as $courseNumber => $courseTitle) {
    $courseReports = array_values(array_filter($reports, static function (array $report) use ($courseNumber): bool {
        return !isset($report['course']) || $report['course'] === $courseNumber;
    }));
    $statement = $db->query("SELECT {$quotedColumns} FROM `{$table}` WHERE `cursus` = " . (int) $courseNumber . " ORDER BY `index`");
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    $html = buildDocument($year, $courseNumber, $courseTitle, $courseReports, $rows);
    $baseName = 'evaluation-course-' . $courseNumber . '-' . $year;
    file_put_contents($outputDirectory . DIRECTORY_SEPARATOR . $baseName . '.html', $html);

    $dompdfOptions = new Options();
    $dompdfOptions->set('defaultFont', 'DejaVu Sans');
    $dompdfOptions->set('isRemoteEnabled', false);
    $dompdf = new Dompdf($dompdfOptions);
    $dompdf->loadHtml($html, 'UTF-8');
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    file_put_contents($outputDirectory . DIRECTORY_SEPARATOR . $baseName . '.pdf', $dompdf->output());

    fwrite(STDOUT, sprintf("Course %d: %d submissions, %s.html, %s.pdf\n", $courseNumber, count($rows), $baseName, $baseName));
}

function buildDocument(int $year, int $courseNumber, string $courseTitle, array $reports, array $rows): string
{
    $html = '<!doctype html><html lang="en"><head><meta charset="utf-8">';
    $html .= '<title>Evaluation report - ' . e($courseTitle) . ' - ' . $year . '</title>';
    $html .= '<style>' . css() . '</style></head><body>';
    $html .= '<h1>Evaluation report</h1><h2>Course ' . $courseNumber . ': ' . e($courseTitle) . '</h2>';
    $html .= '<p class="metadata">Year: ' . $year . ' | Submissions: ' . count($rows) . '</p>';
    $html .= '<div class="toc"><h2>Contents</h2><ol>';
    foreach ($reports as $index => $report) {
        $html .= '<li><a href="#chapter-' . ($index + 1) . '">' . e($report['title']) . '</a></li>';
    }
    $html .= '</ol></div>';

    foreach ($reports as $index => $report) {
        $html .= '<section class="chapter" id="chapter-' . ($index + 1) . '">';
        $html .= '<h2>Chapter ' . ($index + 1) . ': ' . e($report['title']) . '</h2>';
        $html .= renderReport($report, $rows);
        $html .= '</section>';
    }
    return $html . '</body></html>';
}

function renderReport(array $report, array $rows): string
{
    $responses = array();
    foreach ($rows as $row) {
        $score = isset($report['score']) ? trim((string) ($row[$report['score']] ?? '')) : '';
        $comment = isset($report['comment']) ? trim((string) ($row[$report['comment']] ?? '')) : '';
        $extra = isset($report['extra']) ? trim((string) ($row[$report['extra']] ?? '')) : '';
        if ($score === '' && $comment === '' && $extra === '') continue;
        $responses[] = array('name' => (string) ($row['naam'] ?? ''), 'score' => $score, 'comment' => $comment, 'extra' => $extra);
    }

    $html = '<p class="metadata">Responses: ' . count($responses);
    if (isset($report['score'])) {
        $numeric = array();
        foreach ($responses as $response) {
            if ($response['score'] !== '' && is_numeric($response['score'])) $numeric[] = (float) $response['score'];
        }
        if ($numeric) $html .= ' | Average: ' . number_format(array_sum($numeric) / count($numeric), 2);
    }
    $html .= '</p>';
    if (!$responses) return $html . '<p>No responses for this course.</p>';

    $html .= '<table><thead><tr><th>Name</th>';
    if (isset($report['extra']) && $report['extra'] === 'acc_name') $html .= '<th>Accommodation</th>';
    if (isset($report['score'])) $html .= '<th class="score">Mark</th>';
    if (isset($report['extra']) && $report['extra'] !== 'acc_name') $html .= '<th>Referee</th>';
    $html .= '<th>Remarks</th></tr></thead><tbody>';
    foreach ($responses as $response) {
        $html .= '<tr><td>' . e($response['name']) . '</td>';
        if (isset($report['extra']) && $report['extra'] === 'acc_name') $html .= '<td>' . e($response['extra']) . '</td>';
        if (isset($report['score'])) $html .= '<td class="score">' . e($response['score']) . '</td>';
        if (isset($report['extra']) && $report['extra'] !== 'acc_name') $html .= '<td>' . e($response['extra']) . '</td>';
        $html .= '<td>' . nl2br(e($response['comment'])) . '</td></tr>';
    }
    return $html . '</tbody></table>';
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function css(): string
{
    return 'body{font-family:DejaVu Sans,sans-serif;color:#222;font-size:10pt;line-height:1.35}'
        . 'h1{font-size:24pt;margin-top:20mm}h2{font-size:16pt;color:#174a5b}'
        . '.metadata{color:#555}.toc{page-break-after:always}.toc li{margin:3px 0}'
        . '.chapter{page-break-before:always}.chapter:first-of-type{page-break-before:avoid}'
        . 'table{width:100%;border-collapse:collapse;table-layout:fixed;margin-top:8pt}'
        . 'th,td{border:0.5pt solid #777;padding:4pt;vertical-align:top;overflow-wrap:break-word}'
        . 'th{background:#d9eef2;text-align:left}.score{width:10%;text-align:center}'
        . 'td:nth-child(1){width:22%}';
}
