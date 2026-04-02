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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextTranslate请求参数结构体
 *
 * @method string getSourceText() 获取<p>待翻译的文本，文本统一使用utf-8格式编码，非utf-8格式编码字符会翻译失败，请传入有效文本，html标记等非常规翻译文本可能会翻译失败。单次请求的文本长度需要低于6000字符。</p>
 * @method void setSourceText(string $SourceText) 设置<p>待翻译的文本，文本统一使用utf-8格式编码，非utf-8格式编码字符会翻译失败，请传入有效文本，html标记等非常规翻译文本可能会翻译失败。单次请求的文本长度需要低于6000字符。</p>
 * @method string getSource() 获取<p>源语言，支持：<br>zh：简体中文<br>zh-TW：繁体中文<br>en：英语<br>ja：日语<br>ko：韩语<br>fr：法语<br>es：西班牙语<br>it：意大利语<br>de：德语<br>tr：土耳其语<br>ru：俄语<br>pt：葡萄牙语<br>vi：越南语<br>id：印尼语<br>th：泰语<br>ms：马来西亚语<br>ar：阿拉伯语<br>hi：印地语</p>
 * @method void setSource(string $Source) 设置<p>源语言，支持：<br>zh：简体中文<br>zh-TW：繁体中文<br>en：英语<br>ja：日语<br>ko：韩语<br>fr：法语<br>es：西班牙语<br>it：意大利语<br>de：德语<br>tr：土耳其语<br>ru：俄语<br>pt：葡萄牙语<br>vi：越南语<br>id：印尼语<br>th：泰语<br>ms：马来西亚语<br>ar：阿拉伯语<br>hi：印地语</p>
 * @method string getTarget() 获取<p>目标语言，各源语言的目标语言支持列表如下</p><li> zh（简体中文）：zh-TW（繁体中文）、en（英语）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）</li><li>zh-TW（繁体中文）：zh（简体中文）、en（英语）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）</li><li>en（英语）：zh（中文）、zh-TW（繁体中文）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）、hi（印地语）</li><li>ja（日语）：zh（中文）、zh-TW（繁体中文）、en（英语）、ko（韩语）</li><li>ko（韩语）：zh（中文）、zh-TW（繁体中文）、en（英语）、ja（日语）</li><li>fr（法语）：zh（中文）、zh-TW（繁体中文）、en（英语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>es（西班牙语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>it（意大利语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>de（德语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>tr（土耳其语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、ru（俄语）、pt（葡萄牙语）</li><li>ru（俄语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、pt（葡萄牙语）</li><li>pt（葡萄牙语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）</li><li>vi（越南语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>id（印尼语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>th（泰语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>ms（马来语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>ar（阿拉伯语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>hi（印地语）：en（英语）</li>
 * @method void setTarget(string $Target) 设置<p>目标语言，各源语言的目标语言支持列表如下</p><li> zh（简体中文）：zh-TW（繁体中文）、en（英语）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）</li><li>zh-TW（繁体中文）：zh（简体中文）、en（英语）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）</li><li>en（英语）：zh（中文）、zh-TW（繁体中文）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）、hi（印地语）</li><li>ja（日语）：zh（中文）、zh-TW（繁体中文）、en（英语）、ko（韩语）</li><li>ko（韩语）：zh（中文）、zh-TW（繁体中文）、en（英语）、ja（日语）</li><li>fr（法语）：zh（中文）、zh-TW（繁体中文）、en（英语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>es（西班牙语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>it（意大利语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>de（德语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>tr（土耳其语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、ru（俄语）、pt（葡萄牙语）</li><li>ru（俄语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、pt（葡萄牙语）</li><li>pt（葡萄牙语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）</li><li>vi（越南语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>id（印尼语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>th（泰语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>ms（马来语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>ar（阿拉伯语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>hi（印地语）：en（英语）</li>
 * @method integer getProjectId() 获取<p>项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0</p>
 * @method string getUntranslatedText() 获取<p>用来标记不希望被翻译的文本内容，如句子中的特殊符号、人名、地名等；每次请求只支持配置一个不被翻译的单词；仅支持配置人名、地名等名词，不要配置动词或短语，否则会影响翻译结果。</p>
 * @method void setUntranslatedText(string $UntranslatedText) 设置<p>用来标记不希望被翻译的文本内容，如句子中的特殊符号、人名、地名等；每次请求只支持配置一个不被翻译的单词；仅支持配置人名、地名等名词，不要配置动词或短语，否则会影响翻译结果。</p>
 * @method array getTermRepoIDList() 获取<p>需要使用的术语库列表，通过 <a href="https://cloud.tencent.com/document/product/551/107926">术语库操作指南</a> 自行创建术语库获取。</p>
 * @method void setTermRepoIDList(array $TermRepoIDList) 设置<p>需要使用的术语库列表，通过 <a href="https://cloud.tencent.com/document/product/551/107926">术语库操作指南</a> 自行创建术语库获取。</p>
 * @method array getSentRepoIDList() 获取<p>需要使用的例句库列表，通过 <a href="https://cloud.tencent.com/document/product/551/107927">例句库操作指南</a> 自行创建例句库获取。</p>
 * @method void setSentRepoIDList(array $SentRepoIDList) 设置<p>需要使用的例句库列表，通过 <a href="https://cloud.tencent.com/document/product/551/107927">例句库操作指南</a> 自行创建例句库获取。</p>
 */
class TextTranslateRequest extends AbstractModel
{
    /**
     * @var string <p>待翻译的文本，文本统一使用utf-8格式编码，非utf-8格式编码字符会翻译失败，请传入有效文本，html标记等非常规翻译文本可能会翻译失败。单次请求的文本长度需要低于6000字符。</p>
     */
    public $SourceText;

    /**
     * @var string <p>源语言，支持：<br>zh：简体中文<br>zh-TW：繁体中文<br>en：英语<br>ja：日语<br>ko：韩语<br>fr：法语<br>es：西班牙语<br>it：意大利语<br>de：德语<br>tr：土耳其语<br>ru：俄语<br>pt：葡萄牙语<br>vi：越南语<br>id：印尼语<br>th：泰语<br>ms：马来西亚语<br>ar：阿拉伯语<br>hi：印地语</p>
     */
    public $Source;

    /**
     * @var string <p>目标语言，各源语言的目标语言支持列表如下</p><li> zh（简体中文）：zh-TW（繁体中文）、en（英语）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）</li><li>zh-TW（繁体中文）：zh（简体中文）、en（英语）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）</li><li>en（英语）：zh（中文）、zh-TW（繁体中文）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）、hi（印地语）</li><li>ja（日语）：zh（中文）、zh-TW（繁体中文）、en（英语）、ko（韩语）</li><li>ko（韩语）：zh（中文）、zh-TW（繁体中文）、en（英语）、ja（日语）</li><li>fr（法语）：zh（中文）、zh-TW（繁体中文）、en（英语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>es（西班牙语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>it（意大利语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>de（德语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>tr（土耳其语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、ru（俄语）、pt（葡萄牙语）</li><li>ru（俄语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、pt（葡萄牙语）</li><li>pt（葡萄牙语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）</li><li>vi（越南语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>id（印尼语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>th（泰语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>ms（马来语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>ar（阿拉伯语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>hi（印地语）：en（英语）</li>
     */
    public $Target;

    /**
     * @var integer <p>项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0</p>
     */
    public $ProjectId;

    /**
     * @var string <p>用来标记不希望被翻译的文本内容，如句子中的特殊符号、人名、地名等；每次请求只支持配置一个不被翻译的单词；仅支持配置人名、地名等名词，不要配置动词或短语，否则会影响翻译结果。</p>
     */
    public $UntranslatedText;

    /**
     * @var array <p>需要使用的术语库列表，通过 <a href="https://cloud.tencent.com/document/product/551/107926">术语库操作指南</a> 自行创建术语库获取。</p>
     */
    public $TermRepoIDList;

    /**
     * @var array <p>需要使用的例句库列表，通过 <a href="https://cloud.tencent.com/document/product/551/107927">例句库操作指南</a> 自行创建例句库获取。</p>
     */
    public $SentRepoIDList;

    /**
     * @param string $SourceText <p>待翻译的文本，文本统一使用utf-8格式编码，非utf-8格式编码字符会翻译失败，请传入有效文本，html标记等非常规翻译文本可能会翻译失败。单次请求的文本长度需要低于6000字符。</p>
     * @param string $Source <p>源语言，支持：<br>zh：简体中文<br>zh-TW：繁体中文<br>en：英语<br>ja：日语<br>ko：韩语<br>fr：法语<br>es：西班牙语<br>it：意大利语<br>de：德语<br>tr：土耳其语<br>ru：俄语<br>pt：葡萄牙语<br>vi：越南语<br>id：印尼语<br>th：泰语<br>ms：马来西亚语<br>ar：阿拉伯语<br>hi：印地语</p>
     * @param string $Target <p>目标语言，各源语言的目标语言支持列表如下</p><li> zh（简体中文）：zh-TW（繁体中文）、en（英语）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）</li><li>zh-TW（繁体中文）：zh（简体中文）、en（英语）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）</li><li>en（英语）：zh（中文）、zh-TW（繁体中文）、ja（日语）、ko（韩语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）、vi（越南语）、id（印尼语）、th（泰语）、ms（马来语）、ar（阿拉伯语）、hi（印地语）</li><li>ja（日语）：zh（中文）、zh-TW（繁体中文）、en（英语）、ko（韩语）</li><li>ko（韩语）：zh（中文）、zh-TW（繁体中文）、en（英语）、ja（日语）</li><li>fr（法语）：zh（中文）、zh-TW（繁体中文）、en（英语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>es（西班牙语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>it（意大利语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、de（德语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>de（德语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、tr（土耳其语）、ru（俄语）、pt（葡萄牙语）</li><li>tr（土耳其语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、ru（俄语）、pt（葡萄牙语）</li><li>ru（俄语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、pt（葡萄牙语）</li><li>pt（葡萄牙语）：zh（中文）、zh-TW（繁体中文）、en（英语）、fr（法语）、es（西班牙语）、it（意大利语）、de（德语）、tr（土耳其语）、ru（俄语）</li><li>vi（越南语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>id（印尼语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>th（泰语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>ms（马来语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>ar（阿拉伯语）：zh（中文）、zh-TW（繁体中文）、en（英语）</li><li>hi（印地语）：en（英语）</li>
     * @param integer $ProjectId <p>项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0</p>
     * @param string $UntranslatedText <p>用来标记不希望被翻译的文本内容，如句子中的特殊符号、人名、地名等；每次请求只支持配置一个不被翻译的单词；仅支持配置人名、地名等名词，不要配置动词或短语，否则会影响翻译结果。</p>
     * @param array $TermRepoIDList <p>需要使用的术语库列表，通过 <a href="https://cloud.tencent.com/document/product/551/107926">术语库操作指南</a> 自行创建术语库获取。</p>
     * @param array $SentRepoIDList <p>需要使用的例句库列表，通过 <a href="https://cloud.tencent.com/document/product/551/107927">例句库操作指南</a> 自行创建例句库获取。</p>
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
        if (array_key_exists("SourceText",$param) and $param["SourceText"] !== null) {
            $this->SourceText = $param["SourceText"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UntranslatedText",$param) and $param["UntranslatedText"] !== null) {
            $this->UntranslatedText = $param["UntranslatedText"];
        }

        if (array_key_exists("TermRepoIDList",$param) and $param["TermRepoIDList"] !== null) {
            $this->TermRepoIDList = $param["TermRepoIDList"];
        }

        if (array_key_exists("SentRepoIDList",$param) and $param["SentRepoIDList"] !== null) {
            $this->SentRepoIDList = $param["SentRepoIDList"];
        }
    }
}
