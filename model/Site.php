<?php

namespace model;

class Site
{
    private $users = [];
    private $loggedUser = null;

    private $news = [];

    function __construct()
    {
        $this->users[] = new Admin("admin", "123"); //il faut un admin pour commencer
        $this->users[] = new Guest("guest", ""); //il faut un admin pour commencer
        $this->news[] = "première nouvelle";
        $this->news[] = "seconde nouvelle";
        $this->news[] = "trosième nouvelle";
        $this->loggedUser = $this->users[0];
    }

    /**
     * @param $nom
     * @param $password
     * @return bool
     */
    function login($nom, $password="")
    {
        foreach ($this->users as $user) {
            if ($user->getName() == $nom && $user->getPassword() == $password) { //ou new User($nom, $password)==$user
                $this->loggedUser = $user;
                return true;
            }
        }
        return false;
    }

    function logout()
    {
       $this->loggedUser->logout();
        $this->loggedUser = null;
    }

    /**
     * @param $nom
     * @param $password
     * @param $type
     * @return bool
     */
    function addUser($nom, $password, $type)
    {
        if ($this->loggedUser->can("admin")) {
            $user = $this->createUser($nom, $password, $type);
            if ($user !=false && !in_array($user, $this->users)) {
                $this->users[] = $user;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }
//
//    function removeUser($nom)
//    {
//        if ($this->loggedUser->can("admin")) {
//            $user = $this->getUser($nom);
//
//            if (!in_array($user, $this->users)) {
//                $this->removeUser($user);
//                return true;
//            } else {
//                return "user doesn't exist";
//            }
//        } else {
//            return false;
//        }
//    }

    function getSiteNews()
    {
        if ($this->loggedUser !=null && $this->loggedUser->can("guest")) {
            return $this->news;
        } else {
            return false;
        }
    }

    function addSiteNews($news)
    {
        if ($this->loggedUser->can("user")) {
            $this->news[] = $news;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $nom
     * @param $password
     * @param $type
     * @return false|Admin|User
     */
    private function createUser($nom, $password, $type)
    {
        return $type == "guest" ? false :  // un seul guest
            ($type == "user" ? new User($nom, $password) :
                ($type == "admin" ? new Admin($nom, $password) : false));
    }

    /**
     * @param $nom
     * @return false|mixed
     */
    private function getUser($nom)
    {
        foreach ($this->users as $user) {
            if ($user->nom == $nom) {
                return $user;
            }
        }
        return false;
        return array_filter()[0]; // on retourne le premier. Normalement on devrait vérifier l'unicité
    }

    /**
     * @param null $user
     * @return void
     */
//    public function removeUser(null $user): void
//    {
//        $this->users = array_splice($this->users, array_search($user, $this->users), 1);
//    }
}