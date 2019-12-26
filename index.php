<?php

    require 'vendor/autoload.php';

 


    use Aws\S3\S3Client;

    use Aws\Exception\AwsException;

    echo ' cargo ...';
    // Enter copied or downloaded access ID and secret key here
    $ID = 'idAws';
    $SECRET = 'secretAws';
    
    //Create a S3Client
    $s3 = new Aws\S3\S3Client([
        // 'profile' => 'default',
        'version' => 'latest',
        'region'  => 'us-east-2',
        'credentials' => [
            'key' => $ID,
            'secret' => $SECRET,
    ]
    ]);

    //Listing all S3 Bucket
    $buckets = $s3->listBuckets();
    foreach ($buckets['Buckets'] as $bucket) {
        echo $bucket['Name'] . "\n";
    }

?>