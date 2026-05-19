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
 * 音色属性
 *
 * @method string getName() 获取<p>音色名</p>
 * @method void setName(string $Name) 设置<p>音色名</p>
 * @method string getDescription() 获取<p>音色描述</p>
 * @method void setDescription(string $Description) 设置<p>音色描述</p>
 * @method string getGender() 获取<p>性别</p><p>枚举值：</p><ul><li>male： 男性</li><li>female： 女性</li><li>unknown： 未知</li></ul>
 * @method void setGender(string $Gender) 设置<p>性别</p><p>枚举值：</p><ul><li>male： 男性</li><li>female： 女性</li><li>unknown： 未知</li></ul>
 * @method string getAge() 获取<p>年龄</p><p>枚举值：</p><ul><li>child： 儿童</li><li>teenager： 少年</li><li>youth： 青年</li><li>middle_aged： 中年</li><li>senior： 老年</li><li>unknown： 未知</li></ul>
 * @method void setAge(string $Age) 设置<p>年龄</p><p>枚举值：</p><ul><li>child： 儿童</li><li>teenager： 少年</li><li>youth： 青年</li><li>middle_aged： 中年</li><li>senior： 老年</li><li>unknown： 未知</li></ul>
 * @method array getLanguages() 获取<p>语言，当前支持：<br>zh 中文 (Chinese)<br>en 英语 (English)<br>ja 日语 (Japanese)<br>de 德语 (German)<br>fr 法语 (French)<br>ko 韩语 (Korean)<br>ru 俄语 (Russian)<br>uk 乌克兰语 (Ukrainian)<br>pt 葡萄牙语 (Portuguese)<br>it 意大利语 (Italian)<br>es 西班牙语 (Spanish)<br>id 印度尼西亚语 (Indonesian)<br>nl 荷兰语 (Dutch)<br>tr 土耳其语 (Turkish)<br>fil 菲律宾语 (Filipino)<br>ms 马来语 (Malay)<br>el 希腊语 (Greek)<br>fi 芬兰语 (Finnish)<br>hr 克罗地亚语 (Croatian)<br>sk 斯洛伐克语 (Slovak)<br>pl 波兰语 (Polish)<br>sv 瑞典语 (Swedish)<br>hi 印地语 (Hindi)<br>bg 保加利亚语 (Bulgarian)<br>ro 罗马尼亚语 (Romanian)<br>ar 阿拉伯语 (Arabic)<br>cs 捷克语 (Czech)<br>da 丹麦语 (Danish)<br>ta 泰米尔语 (Tamil)<br>hun 匈牙利语（Hungarian）<br>vi 越南语（Vietnamese）<br>no 挪威语（Norwegian）<br>yue 粤语（Cantonese）<br>th 泰语（Thai）<br>he 希伯来语（Hebrew）<br>ca 加泰罗尼亚语（Catalan）<br>nn 尼诺斯克语（Nynorsk）<br>af 阿非利卡语（Afrikaans）<br>fa 波斯语（Persian）<br>sl 斯洛文尼亚语（Slovenian）</p>
 * @method void setLanguages(array $Languages) 设置<p>语言，当前支持：<br>zh 中文 (Chinese)<br>en 英语 (English)<br>ja 日语 (Japanese)<br>de 德语 (German)<br>fr 法语 (French)<br>ko 韩语 (Korean)<br>ru 俄语 (Russian)<br>uk 乌克兰语 (Ukrainian)<br>pt 葡萄牙语 (Portuguese)<br>it 意大利语 (Italian)<br>es 西班牙语 (Spanish)<br>id 印度尼西亚语 (Indonesian)<br>nl 荷兰语 (Dutch)<br>tr 土耳其语 (Turkish)<br>fil 菲律宾语 (Filipino)<br>ms 马来语 (Malay)<br>el 希腊语 (Greek)<br>fi 芬兰语 (Finnish)<br>hr 克罗地亚语 (Croatian)<br>sk 斯洛伐克语 (Slovak)<br>pl 波兰语 (Polish)<br>sv 瑞典语 (Swedish)<br>hi 印地语 (Hindi)<br>bg 保加利亚语 (Bulgarian)<br>ro 罗马尼亚语 (Romanian)<br>ar 阿拉伯语 (Arabic)<br>cs 捷克语 (Czech)<br>da 丹麦语 (Danish)<br>ta 泰米尔语 (Tamil)<br>hun 匈牙利语（Hungarian）<br>vi 越南语（Vietnamese）<br>no 挪威语（Norwegian）<br>yue 粤语（Cantonese）<br>th 泰语（Thai）<br>he 希伯来语（Hebrew）<br>ca 加泰罗尼亚语（Catalan）<br>nn 尼诺斯克语（Nynorsk）<br>af 阿非利卡语（Afrikaans）<br>fa 波斯语（Persian）<br>sl 斯洛文尼亚语（Slovenian）</p>
 * @method array getLabels() 获取<p>标签</p>
 * @method void setLabels(array $Labels) 设置<p>标签</p>
 * @method array getScenes() 获取<p>使用场景</p>
 * @method void setScenes(array $Scenes) 设置<p>使用场景</p>
 */
class VoiceProfile extends AbstractModel
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
     * @var string <p>性别</p><p>枚举值：</p><ul><li>male： 男性</li><li>female： 女性</li><li>unknown： 未知</li></ul>
     */
    public $Gender;

    /**
     * @var string <p>年龄</p><p>枚举值：</p><ul><li>child： 儿童</li><li>teenager： 少年</li><li>youth： 青年</li><li>middle_aged： 中年</li><li>senior： 老年</li><li>unknown： 未知</li></ul>
     */
    public $Age;

    /**
     * @var array <p>语言，当前支持：<br>zh 中文 (Chinese)<br>en 英语 (English)<br>ja 日语 (Japanese)<br>de 德语 (German)<br>fr 法语 (French)<br>ko 韩语 (Korean)<br>ru 俄语 (Russian)<br>uk 乌克兰语 (Ukrainian)<br>pt 葡萄牙语 (Portuguese)<br>it 意大利语 (Italian)<br>es 西班牙语 (Spanish)<br>id 印度尼西亚语 (Indonesian)<br>nl 荷兰语 (Dutch)<br>tr 土耳其语 (Turkish)<br>fil 菲律宾语 (Filipino)<br>ms 马来语 (Malay)<br>el 希腊语 (Greek)<br>fi 芬兰语 (Finnish)<br>hr 克罗地亚语 (Croatian)<br>sk 斯洛伐克语 (Slovak)<br>pl 波兰语 (Polish)<br>sv 瑞典语 (Swedish)<br>hi 印地语 (Hindi)<br>bg 保加利亚语 (Bulgarian)<br>ro 罗马尼亚语 (Romanian)<br>ar 阿拉伯语 (Arabic)<br>cs 捷克语 (Czech)<br>da 丹麦语 (Danish)<br>ta 泰米尔语 (Tamil)<br>hun 匈牙利语（Hungarian）<br>vi 越南语（Vietnamese）<br>no 挪威语（Norwegian）<br>yue 粤语（Cantonese）<br>th 泰语（Thai）<br>he 希伯来语（Hebrew）<br>ca 加泰罗尼亚语（Catalan）<br>nn 尼诺斯克语（Nynorsk）<br>af 阿非利卡语（Afrikaans）<br>fa 波斯语（Persian）<br>sl 斯洛文尼亚语（Slovenian）</p>
     */
    public $Languages;

    /**
     * @var array <p>标签</p>
     */
    public $Labels;

    /**
     * @var array <p>使用场景</p>
     */
    public $Scenes;

    /**
     * @param string $Name <p>音色名</p>
     * @param string $Description <p>音色描述</p>
     * @param string $Gender <p>性别</p><p>枚举值：</p><ul><li>male： 男性</li><li>female： 女性</li><li>unknown： 未知</li></ul>
     * @param string $Age <p>年龄</p><p>枚举值：</p><ul><li>child： 儿童</li><li>teenager： 少年</li><li>youth： 青年</li><li>middle_aged： 中年</li><li>senior： 老年</li><li>unknown： 未知</li></ul>
     * @param array $Languages <p>语言，当前支持：<br>zh 中文 (Chinese)<br>en 英语 (English)<br>ja 日语 (Japanese)<br>de 德语 (German)<br>fr 法语 (French)<br>ko 韩语 (Korean)<br>ru 俄语 (Russian)<br>uk 乌克兰语 (Ukrainian)<br>pt 葡萄牙语 (Portuguese)<br>it 意大利语 (Italian)<br>es 西班牙语 (Spanish)<br>id 印度尼西亚语 (Indonesian)<br>nl 荷兰语 (Dutch)<br>tr 土耳其语 (Turkish)<br>fil 菲律宾语 (Filipino)<br>ms 马来语 (Malay)<br>el 希腊语 (Greek)<br>fi 芬兰语 (Finnish)<br>hr 克罗地亚语 (Croatian)<br>sk 斯洛伐克语 (Slovak)<br>pl 波兰语 (Polish)<br>sv 瑞典语 (Swedish)<br>hi 印地语 (Hindi)<br>bg 保加利亚语 (Bulgarian)<br>ro 罗马尼亚语 (Romanian)<br>ar 阿拉伯语 (Arabic)<br>cs 捷克语 (Czech)<br>da 丹麦语 (Danish)<br>ta 泰米尔语 (Tamil)<br>hun 匈牙利语（Hungarian）<br>vi 越南语（Vietnamese）<br>no 挪威语（Norwegian）<br>yue 粤语（Cantonese）<br>th 泰语（Thai）<br>he 希伯来语（Hebrew）<br>ca 加泰罗尼亚语（Catalan）<br>nn 尼诺斯克语（Nynorsk）<br>af 阿非利卡语（Afrikaans）<br>fa 波斯语（Persian）<br>sl 斯洛文尼亚语（Slovenian）</p>
     * @param array $Labels <p>标签</p>
     * @param array $Scenes <p>使用场景</p>
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
    }
}
