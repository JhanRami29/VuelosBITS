<?php
    class Vista extends Controllers{
        
        function login(){
            require VW . DF . "head.html";
            $this->view->render($this, "login");
            require VW . DF . "footer.html";
        }
        
        function viewUser(){
            require VW . DF . "mainH.html";
            $this->view->render($this, "viewUser");
            require VW . DF . "footer.html";
        }

        function viewReception(){
            require VW . DF . "mainH.html";
            $this->view->render($this, "viewReception");
            require VW . DF . "footer.html";
        }

        function viewRecervation(){
            require VW . DF . "mainH.html";
            $this->view->render($this, "reservation");
            require VW . DF . "footer.html";
        }
    }