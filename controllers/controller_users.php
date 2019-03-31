<?php


// CRUD Operation

class cont_user
{

    public static function newUser($email, $vorname, $nachname, $passwort)
    {
        // ...  Möglich Validierungen hinzuzufügen, z.B. dass nur bestimmte Attribute erwartet und verarbeitet werden
        // Beispiel

        $sql = "INSERT INTO MyGuests (email, vorname, nachname, passwort)
                VALUES ($email, $vorname, $nachname, $passwort)";

        // Zu klären: Hier muss eine Verbindung mit dem Connection Object aus dem database-File aufgebaut werden.
        // Werden Pakete in PHP exportiert? (Wie z.B. bei JavaScript?)
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    }

    public static function updateUser($email, $vorname, $nachname, $passwort)
    {
        // ...
    }

    public static function deleteUser($id) {
        // ...
    }

    public static function show($id) {
        // ...
    }

}
?>