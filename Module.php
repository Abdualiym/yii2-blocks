<?php

namespace abdualiym\block;


/**
 * Class Module
 * @package abdualiym\block
 * @property string $storageRoot
 * @property string $storageHost
 * @property array $thumbs
 * @property array $languages
 */
class Module extends \yii\base\Module
{

    public $storageRoot;
    public $storageHost;
    public $thumbs;
    public $languages;

    public function init()
    {
        parent::init();
        $this->setupLanguages();
    }


    private function setupLanguages()
    {
        if (!in_array($this->languages, $this->dataKeys())) {
            throw new \RuntimeException('Language key is invalid. Current support keys range is ' . json_encode($this->dataKeys()));
        }


    }

    public function dataKeys()
    {
        return [0, 1, 2, 3];
    }
}
