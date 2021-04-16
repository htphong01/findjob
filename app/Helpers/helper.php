<?php 
    function pluralize( $count, $text )
    {
        return $count . ( ( $count == 1 ) ? ( " $text" ) : ( " ${text}" ) );
    }
    
    function ago( $datetime )
    {
        $interval = date_create('now')->diff( $datetime );
        $suffix = ( $interval->invert ? ' trước' : '' );
        if ( $v = $interval->y >= 1 ) return pluralize( $interval->y, 'năm' ) . $suffix;
        if ( $v = $interval->m >= 1 ) return pluralize( $interval->m, 'tháng' ) . $suffix;
        if ( $v = $interval->d >= 1 ) return pluralize( $interval->d, 'ngày' ) . $suffix;
        if ( $v = $interval->h >= 1 ) return pluralize( $interval->h, 'giờ' ) . $suffix;
        if ( $v = $interval->i >= 1 ) return pluralize( $interval->i, 'phút' ) . $suffix;
        return pluralize( $interval->s, 'giây' ) . $suffix;
    }

?>