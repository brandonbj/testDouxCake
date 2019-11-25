<?php
return array(
    // set your paypal credential
    'client_id' => 'AbNx79DMhgSUEVn5T3pHjSYnAsnRTSVJFuBC39_gwNFAjG9uT_2FyoFScoohWPjiPEpFk5FGhmRQv1-U',
    'secret' => 'EEP1z9hQ9f8tXAmKEihmQeSI33rDxS3avKFQqWb0rJhUea9OGFrQ58o4i6chLcelqS7MRLZiz-nGNmkq',
 
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