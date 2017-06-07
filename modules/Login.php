<?php
require_once("model/User.php");
require_once("config.php");

class Login {

  private $nik;
  private $pass;
  private $user;

  function __construct($nik, $pass){
    $this->nik = $nik;
    $this->pass = $pass;
  } 

  function auth(){
    $auth = NOT_REGISTERED;
    $ldapconfig['host'] = 'merahputih.telkom.co.id';
    $ldapconfig['authrealm'] = 'User Telkom POINT';
    if($this->nik != "" && $this->pass != ""){
      $ds = @ldap_connect($ldapconfig['host']);
      $r = @ldap_search( $ds, " ", 'uid=' . $this->nik);
      if($r){
        $result = @ldap_get_entries( $ds, $r);
        if(isset($result[0])){
          $auth = WRONG_PASSWORD;
          if(@ldap_bind( $ds, $result[0]['dn'], $this->pass)){
            $auth = $result[0]['cn'][0]."#un&mail#".$result[0]['mail'][0];
          }
        }
      } else {
        $auth = NOT_CONNECTED;
      }
    }
    return $auth;
  }

  function getUser(){
    return new User($this->nik);
  }
}
?>