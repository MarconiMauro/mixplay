<?php

namespace Controller;

use Slim\Container;
use PDO;
use PDOException;

class MoviesController
{
    private $request;
    private $response;
    private $db;

    public function __construct(Container $container)
    {
        $this->request = $container->get('request');
        $this->response = $container->get('response');
        $this->db = $container->get('db');
    }

    public function index()
    {
        try{
            $sql = 'select * from movies';
            $stmt = $this->$db->prepare($sql);
            $stmt->execute();

            return $this->response->withJson($stmt->fetchAll(PDO::FETCH_ASSOC));

        } catch (PDOException $e) {
            return $this->response->withJson(['error' => $e->getMessage()]);
        }
    }

    public function show()
    {
        try{
            
            //Prepared statements
            $sql = 'select * from movies where id = ? and available = ?';

            $stmt = $this->db->prepare($sql);

            $stmt->bindValue(1, 10);
            $stmt->bindValue(2, true);

            $stmt->execute();
            return $this->response->withJson($stmt->fetch(PDO::FETCH_ORI_FIRST));

        } catch (PDOException $e) {
            return $this->response->withJson(['error' => $e->getMessage()]);
        }
    }

    public function create()
    {
        return $this->response->withJson(['id' => 'create']); 
    }

    public function edit()
    {
        return $this->response->withJson(['id' => 'edit']); 
    }

    public function replace()
    {
        return $this->response->withJson(['id' => 'replace']); 
    }

    public function delete()
    {
        return $this->response->withJson(['id' => 'delete']); 
    }
}
