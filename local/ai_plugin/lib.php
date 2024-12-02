<?php
defined('MOODLE_INTERNAL') || die();

function local_ai_plugin_collect_logs() {
    global $DB;
    $logs = $DB->get_records('logstore_standard_log');
    return $logs;
}
