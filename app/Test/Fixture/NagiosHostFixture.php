<?php

/**
 * NagiosHost Fixture
 */
class NagiosHostFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = [
        'host_id'                           => ['type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'],
        'instance_id'                       => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false, 'key' => 'index'],
        'config_type'                       => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'host_object_id'                    => ['type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false, 'key' => 'index'],
        'alias'                             => ['type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'display_name'                      => ['type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'address'                           => ['type' => 'string', 'null' => false, 'length' => 128, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'check_command_object_id'           => ['type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false],
        'check_command_args'                => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'eventhandler_command_object_id'    => ['type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false],
        'eventhandler_command_args'         => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'notification_timeperiod_object_id' => ['type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false],
        'check_timeperiod_object_id'        => ['type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false],
        'failure_prediction_options'        => ['type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'check_interval'                    => ['type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false],
        'retry_interval'                    => ['type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false],
        'max_check_attempts'                => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'first_notification_delay'          => ['type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false],
        'notification_interval'             => ['type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false],
        'notify_on_down'                    => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'notify_on_unreachable'             => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'notify_on_recovery'                => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'notify_on_flapping'                => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'notify_on_downtime'                => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'stalk_on_up'                       => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'stalk_on_down'                     => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'stalk_on_unreachable'              => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'flap_detection_enabled'            => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'flap_detection_on_up'              => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'flap_detection_on_down'            => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'flap_detection_on_unreachable'     => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'low_flap_threshold'                => ['type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false],
        'high_flap_threshold'               => ['type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false],
        'process_performance_data'          => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'freshness_checks_enabled'          => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'freshness_threshold'               => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8, 'unsigned' => false],
        'passive_checks_enabled'            => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'event_handler_enabled'             => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'active_checks_enabled'             => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'retain_status_information'         => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'retain_nonstatus_information'      => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'notifications_enabled'             => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'obsess_over_host'                  => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'failure_prediction_enabled'        => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'notes'                             => ['type' => 'string', 'null' => false, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'notes_url'                         => ['type' => 'string', 'null' => false, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'action_url'                        => ['type' => 'string', 'null' => false, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'icon_image'                        => ['type' => 'string', 'null' => false, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'icon_image_alt'                    => ['type' => 'string', 'null' => false, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'vrml_image'                        => ['type' => 'string', 'null' => false, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'statusmap_image'                   => ['type' => 'string', 'null' => false, 'collate' => 'utf8_swedish_ci', 'charset' => 'utf8'],
        'have_2d_coords'                    => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'x_2d'                              => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'y_2d'                              => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'have_3d_coords'                    => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6, 'unsigned' => false],
        'x_3d'                              => ['type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false],
        'y_3d'                              => ['type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false],
        'z_3d'                              => ['type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false],
        'importance'                        => ['type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false],
        'indexes'                           => [
            'PRIMARY'        => ['column' => 'host_id', 'unique' => 1],
            'instance_id'    => ['column' => ['instance_id', 'config_type', 'host_object_id'], 'unique' => 1],
            'host_object_id' => ['column' => 'host_object_id', 'unique' => 0]
        ],
        'tableParameters'                   => ['charset' => 'utf8', 'collate' => 'utf8_swedish_ci', 'engine' => 'InnoDB', 'comment' => 'Host definitions']
    ];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'host_id'                           => 1,
            'instance_id'                       => 1,
            'config_type'                       => 1,
            'host_object_id'                    => 1,
            'alias'                             => 'Lorem ipsum dolor sit amet',
            'display_name'                      => 'Lorem ipsum dolor sit amet',
            'address'                           => 'Lorem ipsum dolor sit amet',
            'check_command_object_id'           => 1,
            'check_command_args'                => 'Lorem ipsum dolor sit amet',
            'eventhandler_command_object_id'    => 1,
            'eventhandler_command_args'         => 'Lorem ipsum dolor sit amet',
            'notification_timeperiod_object_id' => 1,
            'check_timeperiod_object_id'        => 1,
            'failure_prediction_options'        => 'Lorem ipsum dolor sit amet',
            'check_interval'                    => 1,
            'retry_interval'                    => 1,
            'max_check_attempts'                => 1,
            'first_notification_delay'          => 1,
            'notification_interval'             => 1,
            'notify_on_down'                    => 1,
            'notify_on_unreachable'             => 1,
            'notify_on_recovery'                => 1,
            'notify_on_flapping'                => 1,
            'notify_on_downtime'                => 1,
            'stalk_on_up'                       => 1,
            'stalk_on_down'                     => 1,
            'stalk_on_unreachable'              => 1,
            'flap_detection_enabled'            => 1,
            'flap_detection_on_up'              => 1,
            'flap_detection_on_down'            => 1,
            'flap_detection_on_unreachable'     => 1,
            'low_flap_threshold'                => 1,
            'high_flap_threshold'               => 1,
            'process_performance_data'          => 1,
            'freshness_checks_enabled'          => 1,
            'freshness_threshold'               => 1,
            'passive_checks_enabled'            => 1,
            'event_handler_enabled'             => 1,
            'active_checks_enabled'             => 1,
            'retain_status_information'         => 1,
            'retain_nonstatus_information'      => 1,
            'notifications_enabled'             => 1,
            'obsess_over_host'                  => 1,
            'failure_prediction_enabled'        => 1,
            'notes'                             => 'Lorem ipsum dolor sit amet',
            'notes_url'                         => 'Lorem ipsum dolor sit amet',
            'action_url'                        => 'Lorem ipsum dolor sit amet',
            'icon_image'                        => 'Lorem ipsum dolor sit amet',
            'icon_image_alt'                    => 'Lorem ipsum dolor sit amet',
            'vrml_image'                        => 'Lorem ipsum dolor sit amet',
            'statusmap_image'                   => 'Lorem ipsum dolor sit amet',
            'have_2d_coords'                    => 1,
            'x_2d'                              => 1,
            'y_2d'                              => 1,
            'have_3d_coords'                    => 1,
            'x_3d'                              => 1,
            'y_3d'                              => 1,
            'z_3d'                              => 1,
            'importance'                        => 1
        ],
    ];

}
