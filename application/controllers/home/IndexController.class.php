<?php
// application/controllers/admin/IndexController.class.php

class IndexController extends Controller {

    // build :: void -> void
    public function build($path, $model) {
        ob_start();
        $this->headerAction();
        $this->menuAction();
        include $path;
        $this->footerAction();
        return ob_get_clean();
    }

    // indexAction :: void -> void
    public function indexAction() {
        $repositoryModel = new RepositoryModel('repositories');

        if (array_key_exists('id', $_REQUEST)) {
            $repository = $repositoryModel->fromId($_REQUEST['id']);
            echo $this->build(CURR_VIEW_PATH . 'single.php', $repository);
        } else {
            $repositories = $repositoryModel->repositories();
            echo $this->build(CURR_VIEW_PATH . 'main.php', $repositories);
        }
    }

    // menuAction :: void -> void
    public function menuAction() {
        include CURR_VIEW_PATH . 'menu.php';
    }

    // headerAction :: void -> void
    public function headerAction() {
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