<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * TextWriting请求参数结构体
 *
 * @method string getText() 获取待续写的句子，文本统一使用utf-8格式编码，长度不超过200字符。
 * @method void setText(string $Text) 设置待续写的句子，文本统一使用utf-8格式编码，长度不超过200字符。
 * @method string getSourceLang() 获取待续写文本的语言类型，支持语言如下：
zh：中文
en：英文
 * @method void setSourceLang(string $SourceLang) 设置待续写文本的语言类型，支持语言如下：
zh：中文
en：英文
 * @method integer getNumber() 获取返回续写结果的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
 * @method void setNumber(integer $Number) 设置返回续写结果的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
 * @method string getDomain() 获取指定续写领域，支持领域如下：
general：通用领域，支持中英文补全
academic：学术领域，仅支持英文补全
默认为general（通用领域）。
 * @method void setDomain(string $Domain) 设置指定续写领域，支持领域如下：
general：通用领域，支持中英文补全
academic：学术领域，仅支持英文补全
默认为general（通用领域）。
 * @method string getStyle() 获取指定续写风格，支持风格如下：
science_fiction：科幻
military_history：军事
xuanhuan_wuxia：武侠
urban_officialdom：职场
默认为xuanhuan_wuxia（武侠）。
 * @method void setStyle(string $Style) 设置指定续写风格，支持风格如下：
science_fiction：科幻
military_history：军事
xuanhuan_wuxia：武侠
urban_officialdom：职场
默认为xuanhuan_wuxia（武侠）。
 */
class TextWritingRequest extends AbstractModel
{
    /**
     * @var string 待续写的句子，文本统一使用utf-8格式编码，长度不超过200字符。
     */
    public $Text;

    /**
     * @var string 待续写文本的语言类型，支持语言如下：
zh：中文
en：英文
     */
    public $SourceLang;

    /**
     * @var integer 返回续写结果的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
     */
    public $Number;

    /**
     * @var string 指定续写领域，支持领域如下：
general：通用领域，支持中英文补全
academic：学术领域，仅支持英文补全
默认为general（通用领域）。
     */
    public $Domain;

    /**
     * @var string 指定续写风格，支持风格如下：
science_fiction：科幻
military_history：军事
xuanhuan_wuxia：武侠
urban_officialdom：职场
默认为xuanhuan_wuxia（武侠）。
     */
    public $Style;

    /**
     * @param string $Text 待续写的句子，文本统一使用utf-8格式编码，长度不超过200字符。
     * @param string $SourceLang 待续写文本的语言类型，支持语言如下：
zh：中文
en：英文
     * @param integer $Number 返回续写结果的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
     * @param string $Domain 指定续写领域，支持领域如下：
general：通用领域，支持中英文补全
academic：学术领域，仅支持英文补全
默认为general（通用领域）。
     * @param string $Style 指定续写风格，支持风格如下：
science_fiction：科幻
military_history：军事
xuanhuan_wuxia：武侠
urban_officialdom：职场
默认为xuanhuan_wuxia（武侠）。
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }
    }
}
