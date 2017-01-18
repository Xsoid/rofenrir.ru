<?php
namespace app\ext;

use yii\web\ViewAction;
use yii\helpers\Markdown;

class MarkdownAction extends ViewAction {

    protected function render($viewName)
    {
        $filePath = $this->controller->getViewPath() . DIRECTORY_SEPARATOR . $viewName . '.md';

        $markdownText = file_get_contents($filePath);
        $content = Markdown::process($markdownText, 'extra'); // use markdown extra

        return $this->controller->renderContent($content);
    }
}