<?php
$app->get(
    '/noticias/{id}',
    function ($request, $response, $args) {
        $sth = $this->db->prepare("SELECT * FROM `noticias` WHERE id=:id");
        $sth->execute([':id' => $args['id']]);
        $todos = $sth->fetchObject();
        return $this->response->withJson($todos);
    }
);

$app->get(
    '/ultimasnoticias',
    function ($request, $response, $args) {
        $sth = $this->db->prepare("SELECT * FROM `noticias` ORDER BY id DESC LIMIT 3");
        $sth->execute();
        $todos = $sth->fetchAll();
        return $this->response->withJson($todos);
    }
);
