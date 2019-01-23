<?php
    class PsrException extends Exception{
        public function __construct($message, $code, Exception $previous = null){
            parent::__construct($message, $code, $previous);
        }
    }

    class BadRequest extends PsrException{
        public function __construct(){
            parent::__construct('Bad Request', 400);
        }
    }

    class InternalServerError extends PsrException{
        public function __construct(){
            parent::__construct('Internal Server Error', 500);
        }
    }

    class NotFound extends PsrException{
        public function __construct(){
            parent::__construct('Not Found', 404);
        }
    }

    class Unauthorized extends PsrException{
        public function __construct(){
            parent::__construct('Unauthorized', 401);
        }
    }
