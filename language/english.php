<?php
    function lang( $phrase ){
        static $lang =array (
            //home page
            'CATEGORIES'=>'Categories',
            'HOME'=>'Home',
            'ABOUT US'=>'about us',
            'CONTACT US'=>'contact us',
            'CART'=>'cart:',
            'ITEMS'=>'Members',
            'STATISTICS'=>'Statistics',
            'LOGS'=>'Logs',
            'MEMBERS'=>'members'
            

            //settings
        );
        return $lang[$phrase];
    }