<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        $phrase = "To be or not to be";
        $integer = 30;
        $decimal = 3.53;
        $booleanVariable = true; //true or false
        null; //no value

//        echo "hello";

        $characterName = "Lily";
        $shoes = "little feets";
        $characterAge = "5";
        $favoriteThing = "pets";
        $obsession = "buns";

        echo "My name is $characterName.<br>";
        echo "I have $shoes.<br>";
        echo "I am $characterAge years old.<br>";
        echo "I love $favoriteThing and Dad.<br>";
        echo "I am obsessed with $obsession.<br>";


        //Strings
        echo "These are all strings in plain text <br>";
        //Store string inside a variable
        $exampleofString = "These are all strings in plain text <br>";
        echo $exampleofString;
        //String with lower case text
        echo strtolower($exampleofString);
        //String with upper case text
        echo strtoupper($exampleofString);
        //Shows what character is in this position
        //echo $exampleofString[7];
        //Modify individual characters
        $exampleofString[0] = "S";
        //String Replace
        $stringReplace = "This is how you replace a word in a string <br>";
        echo str_replace("This", "Here", $stringReplace);

        //Sub string
        echo substr($exampleofString, 14);


        ?>

    </body>
</html>

