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
 * DescribeVoices请求参数结构体
 *
 * @method string getVoiceId() 获取<p>音色ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色ID</p>
 * @method string getVoiceType() 获取<p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li><li>clone： 克隆音色</li><li>design： 设计音色</li><li>all： 所有音色（默认）</li></ul>
 * @method void setVoiceType(string $VoiceType) 设置<p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li><li>clone： 克隆音色</li><li>design： 设计音色</li><li>all： 所有音色（默认）</li></ul>
 * @method string getVoiceName() 获取<p>音色名</p>
 * @method void setVoiceName(string $VoiceName) 设置<p>音色名</p>
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
 * @method string getExtParam() 获取<p>扩展参数，json字符串</p><p>其他筛选条件voiceName String 音色名，模糊匹配labels Array of String 标签，匹配包含这些标签的音色</p>
 * @method void setExtParam(string $ExtParam) 设置<p>扩展参数，json字符串</p><p>其他筛选条件voiceName String 音色名，模糊匹配labels Array of String 标签，匹配包含这些标签的音色</p>
 */
class DescribeVoicesRequest extends AbstractModel
{
    /**
     * @var string <p>音色ID</p>
     */
    public $VoiceId;

    /**
     * @var string <p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li><li>clone： 克隆音色</li><li>design： 设计音色</li><li>all： 所有音色（默认）</li></ul>
     */
    public $VoiceType;

    /**
     * @var string <p>音色名</p>
     */
    public $VoiceName;

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
     * @var string <p>扩展参数，json字符串</p><p>其他筛选条件voiceName String 音色名，模糊匹配labels Array of String 标签，匹配包含这些标签的音色</p>
     */
    public $ExtParam;

    /**
     * @param string $VoiceId <p>音色ID</p>
     * @param string $VoiceType <p>音色类别</p><p>枚举值：</p><ul><li>system： 系统音色</li><li>clone： 克隆音色</li><li>design： 设计音色</li><li>all： 所有音色（默认）</li></ul>
     * @param string $VoiceName <p>音色名</p>
     * @param string $Description <p>音色描述</p>
     * @param string $Gender <p>性别</p><p>枚举值：</p><ul><li>male： 男</li><li>female： 女</li><li>unknown： 未知</li></ul>
     * @param string $Age <p>年龄</p><p>枚举值：</p><ul><li>child： 儿童</li><li>teenager： 少年</li><li>youth： 青年</li><li>middle_aged： 中年</li><li>senior： 老年</li><li>unknown： 未知</li></ul>
     * @param array $Languages <p>语言</p>
     * @param array $Labels <p>标签</p>
     * @param array $Scenes <p>场景</p>
     * @param string $ExtParam <p>扩展参数，json字符串</p><p>其他筛选条件voiceName String 音色名，模糊匹配labels Array of String 标签，匹配包含这些标签的音色</p>
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

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
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

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
