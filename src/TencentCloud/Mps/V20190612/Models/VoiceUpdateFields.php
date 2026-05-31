<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音色更新字段
 *
 * @method string getName() 获取<p>音色名</p>
 * @method void setName(string $Name) 设置<p>音色名</p>
 * @method string getDescription() 获取<p>音色描述</p>
 * @method void setDescription(string $Description) 设置<p>音色描述</p>
 * @method string getGender() 获取<p>性别</p><p>枚举值：</p><ul><li>male： 男</li><li>female： 女</li><li>unknown： 未知</li></ul>
 * @method void setGender(string $Gender) 设置<p>性别</p><p>枚举值：</p><ul><li>male： 男</li><li>female： 女</li><li>unknown： 未知</li></ul>
 * @method string getAge() 获取<p>年龄</p><p>枚举值：</p><ul><li>child： 儿童</li><li>teenager： 少年</li><li>youth： 青年</li><li>middle_aged： 中年</li><li>senior： 老年</li><li>unknown： 未知</li></ul>
 * @method void setAge(string $Age) 设置<p>年龄</p><p>枚举值：</p><ul><li>child： 儿童</li><li>teenager： 少年</li><li>youth： 青年</li><li>middle_aged： 中年</li><li>senior： 老年</li><li>unknown： 未知</li></ul>
 * @method array getLanguages() 获取<p>语言</p>
 * @method void setLanguages(array $Languages) 设置<p>语言</p>
 * @method array getLabels() 获取<p>标签</p>
 * @method void setLabels(array $Labels) 设置<p>标签</p>
 * @method array getScenes() 获取<p>场景</p>
 * @method void setScenes(array $Scenes) 设置<p>场景</p>
 * @method string getAudioUrl() 获取<p>试听音频</p>
 * @method void setAudioUrl(string $AudioUrl) 设置<p>试听音频</p>
 */
class VoiceUpdateFields extends AbstractModel
{
    /**
     * @var string <p>音色名</p>
     */
    public $Name;

    /**
     * @var string <p>音色描述</p>
     */
    public $Description;

    /**
     * @var string <p>性别</p><p>枚举值：</p><ul><li>male： 男</li><li>female： 女</li><li>unknown： 未知</li></ul>
     */
    public $Gender;

    /**
     * @var string <p>年龄</p><p>枚举值：</p><ul><li>child： 儿童</li><li>teenager： 少年</li><li>youth： 青年</li><li>middle_aged： 中年</li><li>senior： 老年</li><li>unknown： 未知</li></ul>
     */
    public $Age;

    /**
     * @var array <p>语言</p>
     */
    public $Languages;

    /**
     * @var array <p>标签</p>
     */
    public $Labels;

    /**
     * @var array <p>场景</p>
     */
    public $Scenes;

    /**
     * @var string <p>试听音频</p>
     */
    public $AudioUrl;

    /**
     * @param string $Name <p>音色名</p>
     * @param string $Description <p>音色描述</p>
     * @param string $Gender <p>性别</p><p>枚举值：</p><ul><li>male： 男</li><li>female： 女</li><li>unknown： 未知</li></ul>
     * @param string $Age <p>年龄</p><p>枚举值：</p><ul><li>child： 儿童</li><li>teenager： 少年</li><li>youth： 青年</li><li>middle_aged： 中年</li><li>senior： 老年</li><li>unknown： 未知</li></ul>
     * @param array $Languages <p>语言</p>
     * @param array $Labels <p>标签</p>
     * @param array $Scenes <p>场景</p>
     * @param string $AudioUrl <p>试听音频</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Languages",$param) and $param["Languages"] !== null) {
            $this->Languages = $param["Languages"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }
    }
}
