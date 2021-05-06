<?php
require_once ('functions.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");
header("Content-Type: application/json; charset=UTF-8");

$arr = array (
      
    // Every array will be converted
    // to an object
    array(
        "id" => 1,
        "title" => "Unlocking Android", 
        "description" => "Unlocking Android: A Developer's Guide provides concise, hands-on instruction for the Android operating system and development tools. This book teaches important architectural concepts in a straightforward writing style and builds on this with practical and useful examples throughout.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg",
        "pageCount" => 416,
        "category" => "mobile"
    ),
    array(
        "id" => 2,
        "title" => "Android in Action, Second Edition", 
        "description" => "Android in Action, Second Edition is a comprehensive tutorial for Android developers. Taking you far beyond \"Hello Android,\" this fast-paced book puts you in the driver's seat as you learn important architectural concepts and implementation strategies. You'll master the SDK, build WebKit apps using HTML 5, and even learn to extend or replace Android's built-in features by building useful and intriguing examples. ", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson2.jpg",
        "pageCount" => 592,
        "category" => "java"
    ),
    array(
        "id" => 3,
        "title" => "Specification by Example", 
        "description" => "tada", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/adzic.jpg",
        "pageCount" => 0,
        "category" => "software"
    ),
    array(
        "id" => 4,
        "title" => "Flex 3 in Action", 
        "description" => "Book description", 
        "image" => "New web applications require engaging user-friendly interfaces and the cooler, the better.",
        "pageCount" => 576,
        "category" => "internet"
    ),
    array(
        "id" => 5,
        "title" => "Flex 4 in Action", 
        "description" => "Using Flex, you can create high-quality, effective, and interactive Rich Internet Applications (RIAs) quickly and easily.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ahmed2.jpg",
        "pageCount" => 600,
        "category" => "internet"
    ),
    array(
        "id" => 6,
        "title" => "Collective Intelligence in Action", 
        "description" => "Book description", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/alag.jpg",
        "pageCount" => 425,
        "category" => "internet"
    ),
    array(
        "id" => 7,
        "title" => "Zend Framework in Action", 
        "description" => "Zend Framework in Action is a comprehensive tutorial that shows how to use the Zend Framework to create web-based applications and web services.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/allen.jpg",
        "pageCount" => 432,
        "category" => "java"
    ),
    array(
        "id" => 8,
        "title" => "Flex on Java", 
        "description" => "A beautifully written book that is a must have for every Java Developer.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/allmon.jpg",
        "pageCount" => 265,
        "category" => "java"
    ),
    array(
        "id" => 9,
        "title" => "Griffon in Action", 
        "description" => "Griffon in Action is a comprehensive tutorial written for Java developers who want a more productive approach to UI development.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/almiray.jpg",
        "pageCount" => 375,
        "category" => "java"
    ),
    array(
        "id" => 10,
        "title" => "OSGi in Depth", 
        "description" => "Enterprise OSGi shows a Java developer how to develop to the OSGi Service Platform Enterprise specification, an emerging Java-based technology for developing modular enterprise applications.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/alves.jpg",
        "pageCount" => 325,
        "category" => "java"
    ),
    array(
        "id" => 11,
        "title" => "Flexible Rails", 
        "description" => "Flexible Rails created a standard to which I hold other technical books.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/armstrong.jpg",
        "pageCount" => 592,
        "category" => "software"
    ),
    array(
        "id" => 12,
        "title" => "Hello! Flex 4", 
        "description" => "Hello! Flex 4 progresses through 26 self-contained examples selected so you can progressively master Flex.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/armstrong3.jpg",
        "pageCount" => 258,
        "category" => "internet"
    ),
    array(
        "id" => 13,
        "title" => "Coffeehouse", 
        "description" => "Coffeehouse is an anthology of stories, poems and essays originally published on the World Wide Web.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/asher.jpg",
        "pageCount" => 316,
        "category" => "software"
    ),
    array(
        "id" => 14,
        "title" => "Team Foundation Server 2008 in Action", 
        "description" => "In complex software projects, managing the development process can be as critical to success as writing the code itself.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/azher.jpg",
        "pageCount" => 344,
        "category" => "mobile"
    ),
    array(
        "id" => 15,
        "title" => "Brownfield Application Development in .NET", 
        "description" => "Brownfield Application Development in .Net shows you how to approach legacy applications with the state-of-the-art concepts, patterns, and tools you've learned to apply to new projects.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/baley.jpg",
        "pageCount" => 550,
        "category" => "java"
    ),
    array(
        "id" => 16,
        "title" => "MongoDB in Action", 
        "description" => "MongoDB In Action is a comprehensive guide to MongoDB for application developers.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/banker.jpg",
        "pageCount" => 0,
        "category" => "software"
    ),
    array(
        "id" => 17,
        "title" => "Jaguar Development with PowerBuilder 7", 
        "description" => "Jaguar Development with PowerBuilder 7 is the definitive guide to distributed application development with PowerBuilder.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/barlotta2.jpg",
        "pageCount" => 504,
        "category" => "internet"
    ),
    array(
        "id" => 18,
        "title" => "Taming Jaguar", 
        "description" => "Taming Jaguar is part of the PowerBuilder Developer's series, which includes Distributed Application Development with PowerBuilder 6 and Jaguar Development with PowerBuilder 7.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/barlotta3.jpg",
        "pageCount" => 362,
        "category" => "java"
    ),
    array(
        "id" => 19,
        "title" => "3D User Interfaces with Java 3D", 
        "description" => "3D User Interfaces with Java 3D is a practical guide for providing next-generation applications with 3D user interfaces for manipulation of in-scene objects.", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/barrilleaux.jpg",
        "pageCount" => 520,
        "category" => "java"
    ),
    array(
        "id" => 20,
        "title" => "Hibernate in Action", 
        "description" => "2005 Best Java Book!\" -- Java Developer's Journal", 
        "image" => "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/bauer.jpg",
        "pageCount" => 400,
        "category" => "internet"
    )

);


$json = json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
 


?>