<?php
    function lang( $phrase ){
        static $lang =array (
            'masseage' => ' أهلا',
            'masool'   => 'المسؤل'
        );
        return $lang[$phrase];
    }
   