<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_ai_plugin', get_string('pluginname', 'local_ai_plugin'));

    $settings->add(new admin_setting_configtext(
        'local_ai_plugin/apikey',
        get_string('apikey', 'local_ai_plugin'),
        get_string('apikey_desc', 'local_ai_plugin'),
        ''
    ));

    $ADMIN->add('localplugins', $settings);
}
