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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextEmbellish请求参数结构体
 *
 * @method string getText() 获取待润色的文本。中文文本长度需<=50字符；英文文本长度需<=30个单词。
 * @method void setText(string $Text) 设置待润色的文本。中文文本长度需<=50字符；英文文本长度需<=30个单词。
 * @method string getSourceLang() 获取待润色文本的语言类型，支持语言如下：
zh：中文
en：英文
 * @method void setSourceLang(string $SourceLang) 设置待润色文本的语言类型，支持语言如下：
zh：中文
en：英文
 * @method integer getNumber() 获取返回润色结果的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
 * @method void setNumber(integer $Number) 设置返回润色结果的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
 * @method string getStyle() 获取控制润色类型，类型如下：
both：同时返回改写和扩写
expansion：扩写
rewriting：改写
m2a：从现代文改写为古文
a2m：从古文改写为现代文
默认为both。
 * @method void setStyle(string $Style) 设置控制润色类型，类型如下：
both：同时返回改写和扩写
expansion：扩写
rewriting：改写
m2a：从现代文改写为古文
a2m：从古文改写为现代文
默认为both。
 */
class TextEmbellishRequest extends AbstractModel
{
    /**
     * @var string 待润色的文本。中文文本长度需<=50字符；英文文本长度需<=30个单词。
     */
    public $Text;

    /**
     * @var string 待润色文本的语言类型，支持语言如下：
zh：中文
en：英文
     */
    public $SourceLang;

    /**
     * @var integer 返回润色结果的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
     */
    public $Number;

    /**
     * @var string 控制润色类型，类型如下：
both：同时返回改写和扩写
expansion：扩写
rewriting：改写
m2a：从现代文改写为古文
a2m：从古文改写为现代文
默认为both。
     */
    public $Style;

    /**
     * @param string $Text 待润色的文本。中文文本长度需<=50字符；英文文本长度需<=30个单词。
     * @param string $SourceLang 待润色文本的语言类型，支持语言如下：
zh：中文
en：英文
     * @param integer $Number 返回润色结果的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
     * @param string $Style 控制润色类型，类型如下：
both：同时返回改写和扩写
expansion：扩写
rewriting：改写
m2a：从现代文改写为古文
a2m：从古文改写为现代文
默认为both。
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("SourceLang",$param) and $param["SourceLang"] !== null) {
            $this->SourceLang = $param["SourceLang"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }
    }
}
