<?php
// application/controllers/admin/IndexController.class.php

class IndexController extends Controller {

    // indexAction :: void -> void
    public function indexAction() {
        $repositoryModel = new RepositoryModel('repositories');
        $repositories = $repositoryModel->repositories();

        include CURR_VIEW_PATH . 'index.php';

        $repositoryModel->updateTable();
    }

    // menuAction :: void -> void
    public function menuAction() {
        include CURR_VIEW_PATH . 'menu.php';
    }

    // topAction :: void -> void
    public function topAction() {
        include CURR_VIEW_PATH . 'top.php';
    }

    // footerAction :: void -> void
    public function footerAction() {
        include CURR_VIEW_PATH . 'footer.php';
    }

    // curl :: string -> [string => string]
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