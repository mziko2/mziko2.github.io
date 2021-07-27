<?php
    # registration.php
    
    error_reporting( E_ALL );
    ini_set( 'display_errors', 1 );

    
    if( $_SERVER['REQUEST_METHOD']=='_GET' && isset( $_POST['message'] ) ){
        ob_clean();
        
        $lb="\r\n";
        
        $recipient='ziko.mirza1921@gmail.com';
        $message=$_POST['message'];
        $subject='This is a test';
        $headers=array(
            'From: webmaster@example.com',
            'Reply-To: webmaster@example.com',
            'Cc: joe.bloggs@example.com'
        );
        
        $status=mail( $recipient, $subject, $message, implode( $lb, $headers ) ;
        exit( header( sprintf('Location: index.html?mailsent=%s', $status ) ) );
    }
?>
