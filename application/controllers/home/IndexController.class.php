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

    public function updateAction() {
        $repositoryModel = new RepositoryModel('repositories');

        $repositoryModel->updateTable();

        $this->redirect('/', 'Redirecting...');
    }

    // menuAction :: void -> void
    public function menuAction() {
        include CURR_VIEW_PATH . 'menu.php';
    }

    // headerAction :: void -> void
    public function headerAction() {
        include CURR_VIEW_PATH . 'header.php';
    }

    // footerAction :: void -> void
    public function footerAction() {
        include CURR_VIEW_PATH . 'footer.php';
    }
}