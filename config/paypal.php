<?php
return array(
    // set your paypal credential
    'client_id' => 'AYT-Wzh_Q_Ug9ptGZ6W5TgQU6xTEkdoFy5V-nRGh5I26lNp2I-eSHETvD9VchKb2P5xLRC9e6KafnBti',
    'secret' => 'EJ9-z3-BHi_EeHEIfgPcOwuoxUdiHc-dc6JA9Z93lgJ6N12rH3Zn3T_gCu-NGaFM-ht6U3g4YD5-cKwB',
    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);