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
 * FileTranslate请求参数结构体
 *
 * @method string getSource() 获取源语言，支持
zh：简体中文
zh-HK：繁体中文
zh-TW：繁体中文
zh-TR：繁体中文
en：英语
ar：阿拉伯语
de：德语
es：西班牙语
fr：法语
it：意大利语
ja：日语
pt：葡萄牙语
ru：俄语
ko：韩语
tr：土耳其语
vi：越南语
th：泰语
 * @method void setSource(string $Source) 设置源语言，支持
zh：简体中文
zh-HK：繁体中文
zh-TW：繁体中文
zh-TR：繁体中文
en：英语
ar：阿拉伯语
de：德语
es：西班牙语
fr：法语
it：意大利语
ja：日语
pt：葡萄牙语
ru：俄语
ko：韩语
tr：土耳其语
vi：越南语
th：泰语
 * @method string getTarget() 获取目标语言，各源语言的目标语言支持列表如下
zh（简体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-HK（繁体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-TW（繁体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-TR（繁体中文）:en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
en（英语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
ar（阿拉伯语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
de（德语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
es（西班牙语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）、fr（法语）
fr（法语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）、es（西班牙语）
it（意大利语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ja（日语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
pt（葡萄牙语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ru（俄语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ko（韩语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
tr（土耳其语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
vi（越南语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
th（泰语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
 * @method void setTarget(string $Target) 设置目标语言，各源语言的目标语言支持列表如下
zh（简体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-HK（繁体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-TW（繁体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-TR（繁体中文）:en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
en（英语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
ar（阿拉伯语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
de（德语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
es（西班牙语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）、fr（法语）
fr（法语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）、es（西班牙语）
it（意大利语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ja（日语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
pt（葡萄牙语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ru（俄语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ko（韩语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
tr（土耳其语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
vi（越南语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
th（泰语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
 * @method string getDocumentType() 获取文档类型：可支持以下几种(pdf,docx,pptx,xlsx,txt,xml,html,markdown,properties)
 * @method void setDocumentType(string $DocumentType) 设置文档类型：可支持以下几种(pdf,docx,pptx,xlsx,txt,xml,html,markdown,properties)
 * @method integer getSourceType() 获取数据来源，0：url，1：直接传文件编码后数据
 * @method void setSourceType(integer $SourceType) 设置数据来源，0：url，1：直接传文件编码后数据
 * @method string getUrl() 获取需要翻译文件url，URL长度不能超过1000字符。文件限制如下：docx/xIsx/html/markdown文件不超过800万字符，doc/pdf/pptx文件不超过300页，txt/po文件不超过10MB，pdf/docx/pptx/xlsx不超过40MB
 * @method void setUrl(string $Url) 设置需要翻译文件url，URL长度不能超过1000字符。文件限制如下：docx/xIsx/html/markdown文件不超过800万字符，doc/pdf/pptx文件不超过300页，txt/po文件不超过10MB，pdf/docx/pptx/xlsx不超过40MB
 * @method string getBasicDocumentType() 获取原始文档类型。该参数为高级参数，请留空，如需使用，请与工作人员确认后再使用。
 * @method void setBasicDocumentType(string $BasicDocumentType) 设置原始文档类型。该参数为高级参数，请留空，如需使用，请与工作人员确认后再使用。
 * @method string getCallbackUrl() 获取回调url，URL长度不能超过256字符。文件大于10MB或字符较多时，建议采用回调方式；回调时，所有内容会放入 Body 中，具体请参见[文件翻译回调说明](https://cloud.tencent.com/document/product/551/91138)。
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调url，URL长度不能超过256字符。文件大于10MB或字符较多时，建议采用回调方式；回调时，所有内容会放入 Body 中，具体请参见[文件翻译回调说明](https://cloud.tencent.com/document/product/551/91138)。
 * @method string getData() 获取文件数据，当SourceType 值为1时必须填写，为0可不写。要base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。数据要小于5MB。
 * @method void setData(string $Data) 设置文件数据，当SourceType 值为1时必须填写，为0可不写。要base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。数据要小于5MB。
 */
class FileTranslateRequest extends AbstractModel
{
    /**
     * @var string 源语言，支持
zh：简体中文
zh-HK：繁体中文
zh-TW：繁体中文
zh-TR：繁体中文
en：英语
ar：阿拉伯语
de：德语
es：西班牙语
fr：法语
it：意大利语
ja：日语
pt：葡萄牙语
ru：俄语
ko：韩语
tr：土耳其语
vi：越南语
th：泰语
     */
    public $Source;

    /**
     * @var string 目标语言，各源语言的目标语言支持列表如下
zh（简体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-HK（繁体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-TW（繁体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-TR（繁体中文）:en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
en（英语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
ar（阿拉伯语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
de（德语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
es（西班牙语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）、fr（法语）
fr（法语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）、es（西班牙语）
it（意大利语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ja（日语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
pt（葡萄牙语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ru（俄语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ko（韩语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
tr（土耳其语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
vi（越南语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
th（泰语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
     */
    public $Target;

    /**
     * @var string 文档类型：可支持以下几种(pdf,docx,pptx,xlsx,txt,xml,html,markdown,properties)
     */
    public $DocumentType;

    /**
     * @var integer 数据来源，0：url，1：直接传文件编码后数据
     */
    public $SourceType;

    /**
     * @var string 需要翻译文件url，URL长度不能超过1000字符。文件限制如下：docx/xIsx/html/markdown文件不超过800万字符，doc/pdf/pptx文件不超过300页，txt/po文件不超过10MB，pdf/docx/pptx/xlsx不超过40MB
     */
    public $Url;

    /**
     * @var string 原始文档类型。该参数为高级参数，请留空，如需使用，请与工作人员确认后再使用。
     */
    public $BasicDocumentType;

    /**
     * @var string 回调url，URL长度不能超过256字符。文件大于10MB或字符较多时，建议采用回调方式；回调时，所有内容会放入 Body 中，具体请参见[文件翻译回调说明](https://cloud.tencent.com/document/product/551/91138)。
     */
    public $CallbackUrl;

    /**
     * @var string 文件数据，当SourceType 值为1时必须填写，为0可不写。要base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。数据要小于5MB。
     */
    public $Data;

    /**
     * @param string $Source 源语言，支持
zh：简体中文
zh-HK：繁体中文
zh-TW：繁体中文
zh-TR：繁体中文
en：英语
ar：阿拉伯语
de：德语
es：西班牙语
fr：法语
it：意大利语
ja：日语
pt：葡萄牙语
ru：俄语
ko：韩语
tr：土耳其语
vi：越南语
th：泰语
     * @param string $Target 目标语言，各源语言的目标语言支持列表如下
zh（简体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-HK（繁体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-TW（繁体中文）：en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
zh-TR（繁体中文）:en（英语）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
en（英语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、ar（阿拉伯语）、de（德语）、es（西班牙语）、fr（法语）、it（意大利语）、ja（日语）、pt（葡萄牙语）、ru（俄语）、ko（韩语）、tr（土耳其语）、vi（越南语）、th（泰语）
ar（阿拉伯语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
de（德语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
es（西班牙语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）、fr（法语）
fr（法语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）、es（西班牙语）
it（意大利语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ja（日语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
pt（葡萄牙语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ru（俄语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
ko（韩语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
tr（土耳其语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
vi（越南语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
th（泰语）：zh（简体中文）、zh-HK（繁体中文）、zh-TW（繁体中文）、zh-TR（繁体中文）、en（英语）
     * @param string $DocumentType 文档类型：可支持以下几种(pdf,docx,pptx,xlsx,txt,xml,html,markdown,properties)
     * @param integer $SourceType 数据来源，0：url，1：直接传文件编码后数据
     * @param string $Url 需要翻译文件url，URL长度不能超过1000字符。文件限制如下：docx/xIsx/html/markdown文件不超过800万字符，doc/pdf/pptx文件不超过300页，txt/po文件不超过10MB，pdf/docx/pptx/xlsx不超过40MB
     * @param string $BasicDocumentType 原始文档类型。该参数为高级参数，请留空，如需使用，请与工作人员确认后再使用。
     * @param string $CallbackUrl 回调url，URL长度不能超过256字符。文件大于10MB或字符较多时，建议采用回调方式；回调时，所有内容会放入 Body 中，具体请参见[文件翻译回调说明](https://cloud.tencent.com/document/product/551/91138)。
     * @param string $Data 文件数据，当SourceType 值为1时必须填写，为0可不写。要base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。数据要小于5MB。
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("DocumentType",$param) and $param["DocumentType"] !== null) {
            $this->DocumentType = $param["DocumentType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BasicDocumentType",$param) and $param["BasicDocumentType"] !== null) {
            $this->BasicDocumentType = $param["BasicDocumentType"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
