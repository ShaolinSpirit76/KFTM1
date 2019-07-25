<?php
//class User qui hérite de DataBase.php (DB)
class User extends DB{

    public $id;
    public $firstName;
    public $lastName;
    public $birthDate;
    public $picture;
    public $mail;
    public $phoneNumber;
    public $login;
    public $password;
    public $status;
    public $studentCourse;
    public $teacherCourse;
    public $groupAge;
    public $studentYear;
    public $childBelt;
    public $studentBelt;
    public $teacherRank;
    public $presentation;
    public $verification;

    public function __construct(){
        //On récupere le constructeur de la page DataBase.php qui est le parent de la class User
        parent::__construct();
 }
    public function addUser(){
        $query = 'INSERT INTO `KFTM_USERS`(`firstName`, `lastName`, `birthDate`, `picture`, `mail`, `phoneNumber`, `login`, `password`, `status`, 
        `studentCourse`, `teacherCourse`, `groupAge`, `studentYear`, `childBelt`, `studentBelt`, `teacherRank`, `presentation`) VALUES (:firstName, :lastName, :birthDate, :picture, :mail, :phoneNumber, :login, :password, :status, :studentCourse, :teacherCourse, :groupAge, :studentYear, :childBelt, :studentBelt, :teacherRank, :presentation)';
        // création de la variable $addUser qui nous a permis de préparer la requête
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $addUser->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $addUser->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR); 
        $addUser->bindValue(':picture', $this->picture, PDO::PARAM_STR); 
        $addUser->bindValue(':mail', $this->mail, PDO::PARAM_STR); 
        $addUser->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR); 
        $addUser->bindValue(':login', $this->login, PDO::PARAM_STR);
        $addUser->bindValue(':password', $this->password, PDO::PARAM_STR);
        $addUser->bindValue(':status', $this->status, PDO::PARAM_STR);
        $addUser->bindValue(':studentCourse', $this->studentCourse, PDO::PARAM_STR);
        $addUser->bindValue(':teacherCourse', $this->teacherCourse, PDO::PARAM_STR);
        $addUser->bindValue(':groupAge', $this->groupAge, PDO::PARAM_STR);
        $addUser->bindValue(':studentYear', $this->studentYear, PDO::PARAM_STR);
        $addUser->bindValue(':childBelt', $this->childBelt, PDO::PARAM_STR);
        $addUser->bindValue(':studentBelt', $this->studentBelt, PDO::PARAM_STR);
        $addUser->bindValue(':teacherRank', $this->teacherRank, PDO::PARAM_STR);
        $addUser->bindValue(':presentation', $this->presentation, PDO::PARAM_STR);
        // $addUser->bindValue(':verification', $this->verification, PDO::PARAM_INT);            
        if($addUser->execute()){
            return true;
        }
    }


    public function connectionUser() {
        $query = 'SELECT * FROM `KFTM_USERS` WHERE mail = :mail';
        $connectUser = $this->db->prepare($query);
        $connectUser->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        if($connectUser->execute()):
            $connectUserResult = $connectUser->fetch(PDO::FETCH_OBJ);
            return $connectUserResult;
        endif;
    }

    
     public function displayUser(){
        $query = 'SELECT * FROM `KFTM_USERS`';
        $selectUser = $this->db->prepare($query);
        $selectUser->execute();
        $displayUsers=$selectUser->fetchAll(PDO::FETCH_ASSOC);
        return $displayUsers;
     }
     
public function updateUsers(){
   $updateUser = "UPDATE `KFTM_USERS` SET lastname = :lastName, firstname = :firstName, birthdate = :birthDate, picture = :picture, mail = :mail, phoneNumber = :phoneNumber, login = :login, password = :password, status = :status, studentCourse = :studentCourse, teacherCourse = :teacherCourse, groupAge = :groupAge, studentYear = :studentYear, childBelt = :childBelt, studentBelt = :studentBelt, teacherRank = :teacherRank, presentation = :presentation WHERE id = :id";

    $updateUser->bindValue(':id', $this->id, PDO::PARAM_INT);
        $updateUser->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $updateUser->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $updateUser->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR); 
        $updateUser->bindValue(':picture', $this->picture, PDO::PARAM_STR); 
        $updateUser->bindValue(':mail', $this->mail, PDO::PARAM_STR); 
        $updateUser->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR); 
        $updateUser->bindValue(':login', $this->login, PDO::PARAM_STR);
        $updateUser->bindValue(':password', $this->password, PDO::PARAM_STR);
        $updateUser->bindValue(':status', $this->status, PDO::PARAM_STR);
        $updateUser->bindValue(':studentCourse', $this->studentCourse, PDO::PARAM_STR);
        $updateUser->bindValue(':teacherCourse', $this->teacherCourse, PDO::PARAM_STR);
        $updateUser->bindValue(':groupAge', $this->groupAge, PDO::PARAM_STR);
        $updateUser->bindValue(':studentYear', $this->studentYear, PDO::PARAM_STR);
        $updateUser->bindValue(':childBelt', $this->childBelt, PDO::PARAM_STR);
        $updateUser->bindValue(':studentBelt', $this->studentBelt, PDO::PARAM_STR);
        $updateUser->bindValue(':teacherRank', $this->teacherRank, PDO::PARAM_STR);
        $updateUser->bindValue(':presentation', $this->presentation, PDO::PARAM_STR);

        if($updateUser->execute()){
            return true;
        }
}
//     $modifRequest = "SELECT * FROM `KFTM_USERS` WHERE id = :id";
// // on récupère l'id et on le lie
//     $modifRequest->bindValue(':id', $_GET['id'], PDO::PARAM_STR);


//     // On exécute notre requête préparée
//     $modifRequest->execute();
// }
     
     public function deleteUser(){
        $query = 'DELETE FROM `KFTM_USERS` WHERE id=:id';
        $deleteUser=$this->db->prepare($query);
        $deleteUser->bindValue(':id', $this->id, PDO::PARAM_INT);
        if($deleteUser->execute()){
           return true;
        }

     }
}