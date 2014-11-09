<?php
        class DbQuery {
                public static function setDBEnv() {
                        return array(
                                'driver'    => 'mysql',
                                'host'      => 'bjsas.cexpludqu9kf.us-west-2.rds.amazonaws.com',
                                'database'  => 'bjsaccountingsystem',
                                'username'  => 'bjsadmin',
                                'password'  => 'Start99%',
                                'port'      => '3306',
                                'charset'   => 'utf8',
                                'collation' => 'utf8_unicode_ci',
                                'prefix'    => ''
                        );
                }
        }
