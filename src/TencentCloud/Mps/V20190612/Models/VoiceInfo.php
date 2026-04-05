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
 * 音色信息
 *
 * @method string getVoiceId() 获取<p>音色ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色ID</p>
 * @method string getName() 获取<p>音色名</p>
 * @method void setName(string $Name) 设置<p>音色名</p>
 * @method string getDescription() 获取<p>音色描述信息</p>
 * @method void setDescription(string $Description) 设置<p>音色描述信息</p>
 * @method string getCategory() 获取<p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li></ul>
 * @method void setCategory(string $Category) 设置<p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li></ul>
 * @method string getGender() 获取<p>性别</p><p>枚举值：</p><ul><li>male： 男</li><li>famale： 女</li></ul>
 * @method void setGender(string $Gender) 设置<p>性别</p><p>枚举值：</p><ul><li>male： 男</li><li>famale： 女</li></ul>
 * @method array getLanguages() 获取<p>支持语种列表</p><p>如：en</p>
 * @method void setLanguages(array $Languages) 设置<p>支持语种列表</p><p>如：en</p>
 * @method string getAudioUrl() 获取<p>试听音频URL</p>
 * @method void setAudioUrl(string $AudioUrl) 设置<p>试听音频URL</p>
 * @method array getLabels() 获取<p>标签列表</p><p>如：温柔</p>
 * @method void setLabels(array $Labels) 设置<p>标签列表</p><p>如：温柔</p>
 * @method array getScenes() 获取<p>推荐场景</p><p>如：教育</p>
 * @method void setScenes(array $Scenes) 设置<p>推荐场景</p><p>如：教育</p>
 */
class VoiceInfo extends AbstractModel
{
    /**
     * @var string <p>音色ID</p>
     */
    public $VoiceId;

    /**
     * @var string <p>音色名</p>
     */
    public $Name;

    /**
     * @var string <p>音色描述信息</p>
     */
    public $Description;

    /**
     * @var string <p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li></ul>
     */
    public $Category;

    /**
     * @var string <p>性别</p><p>枚举值：</p><ul><li>male： 男</li><li>famale： 女</li></ul>
     */
    public $Gender;

    /**
     * @var array <p>支持语种列表</p><p>如：en</p>
     */
    public $Languages;

    /**
     * @var string <p>试听音频URL</p>
     */
    public $AudioUrl;

    /**
     * @var array <p>标签列表</p><p>如：温柔</p>
     */
    public $Labels;

    /**
     * @var array <p>推荐场景</p><p>如：教育</p>
     */
    public $Scenes;

    /**
     * @param string $VoiceId <p>音色ID</p>
     * @param string $Name <p>音色名</p>
     * @param string $Description <p>音色描述信息</p>
     * @param string $Category <p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li></ul>
     * @param string $Gender <p>性别</p><p>枚举值：</p><ul><li>male： 男</li><li>famale： 女</li></ul>
     * @param array $Languages <p>支持语种列表</p><p>如：en</p>
     * @param string $AudioUrl <p>试听音频URL</p>
     * @param array $Labels <p>标签列表</p><p>如：温柔</p>
     * @param array $Scenes <p>推荐场景</p><p>如：教育</p>
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
        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Languages",$param) and $param["Languages"] !== null) {
            $this->Languages = $param["Languages"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }
    }
}
