<?php
// application/controllers/admin/IndexController.class.php

class IndexController extends Controller {

    public function mainAction() {
        include CURR_VIEW_PATH . 'main.php';
    }

    public function indexAction() {
        $repositoryModel = new RepositoryModel('repositories');
        $repositories = $repositoryModel->repositories();

        include CURR_VIEW_PATH . 'index.php';

        $data = self::curl('https://api.github.com/search/repositories?q=language:php&sort=stars&order=desc');

        var_dump($data);
    }

    public function menuAction() {
        include CURR_VIEW_PATH . 'menu.php';
    }

    public function topAction() {
        include CURR_VIEW_PATH . 'top.php';
    }

    public function footerAction() {
        include CURR_VIEW_PATH . 'footer.php';
    }

    public static function curl($url) {
        $handle = curl_init();

        curl_setopt_array($handle, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
        ]);

        $data = curl_exec($handle);

        curl_close($handle);

        return json_decode($data, true);
    }
}