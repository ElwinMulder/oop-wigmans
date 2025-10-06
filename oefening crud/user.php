<?php
class User {
    private $conn;

    // Database verbinden
    public function dbConnect() {
        $servername = "localhost";
        $username = "root";   // pas aan als nodig
        $password = "";       // pas aan als nodig
        $dbname = "Login";    // je database naam

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database connectie mislukt: " . $e->getMessage();
        }
    }

    // Registreren
    public function registerUser($name, $email, $password) {
        $this->dbConnect();

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO User (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        try {
            $stmt->execute();
            echo "<p style='color:green;'>Registratie succesvol! Je kunt nu inloggen.</p>";
        } catch (PDOException $e) {
            echo "<p style='color:red;'>Fout bij registreren: " . $e->getMessage() . "</p>";
        }
    }

    // Inloggen
    public function loginUser($email, $password) {
        $this->dbConnect();
    
        $sql = "SELECT * FROM User WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($password, $user['password'])) {
            session_start(); // Start sessie
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
    
            // Stuur gebruiker door naar homepagina
            header("Location: home.php");
            exit;
        } else {
            echo "<p style='color:red;'>Ongeldige inloggegevens.</p>";
        }
    }
}
?>
