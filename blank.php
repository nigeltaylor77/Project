


public function getuserbyname($username){
    
    $sql="SELECT count (*) FROM adminuser WHERE username=:username";
    $stmt = $this->db->prepare($sql);
    $stmt->bindparam(':username', $username);
    $stmt->execute();
    $result= $stmt->fetch();
    return $result;
}



$result = $this->getuserbyname($username);
        if($result['num'] > 0){
        
            return false;
        } else{