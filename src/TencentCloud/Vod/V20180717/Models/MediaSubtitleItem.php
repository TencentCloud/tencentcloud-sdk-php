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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字幕信息。
 *
 * @method string getId() 获取字幕的唯一标识。
 * @method void setId(string $Id) 设置字幕的唯一标识。
 * @method string getName() 获取字幕名字。
 * @method void setName(string $Name) 设置字幕名字。
 * @method string getLanguage() 获取字幕语言。常见的取值如下：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>vi：越南语；</li>
<li>ms：马来语；</li>
<li>th：泰语；</li>
<li>pt：葡萄牙语；</li>
<li>tr：土耳其语；</li>
<li>ar：阿拉伯语；</li>
<li>es：西班牙语；</li>
<li>hi：印地语；</li>
<li>fr：法语。</li>
其他取值参考 [RFC5646](https://tools.ietf.org/html/rfc5646)
 * @method void setLanguage(string $Language) 设置字幕语言。常见的取值如下：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>vi：越南语；</li>
<li>ms：马来语；</li>
<li>th：泰语；</li>
<li>pt：葡萄牙语；</li>
<li>tr：土耳其语；</li>
<li>ar：阿拉伯语；</li>
<li>es：西班牙语；</li>
<li>hi：印地语；</li>
<li>fr：法语。</li>
其他取值参考 [RFC5646](https://tools.ietf.org/html/rfc5646)
 * @method string getFormat() 获取字幕格式。取值范围如下：
<li>vtt</li>
 * @method void setFormat(string $Format) 设置字幕格式。取值范围如下：
<li>vtt</li>
 * @method string getUrl() 获取字幕 URL。
 * @method void setUrl(string $Url) 设置字幕 URL。
 * @method string getSource() 获取字幕来源，取值范围：
<li>UserUploaded：用户上传；</li>
<li>AIRecognition：AI 识别，通过语音识别或语音翻译生成。</li>
 * @method void setSource(string $Source) 设置字幕来源，取值范围：
<li>UserUploaded：用户上传；</li>
<li>AIRecognition：AI 识别，通过语音识别或语音翻译生成。</li>
 */
class MediaSubtitleItem extends AbstractModel
{
    /**
     * @var string 字幕的唯一标识。
     */
    public $Id;

    /**
     * @var string 字幕名字。
     */
    public $Name;

    /**
     * @var string 字幕语言。常见的取值如下：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>vi：越南语；</li>
<li>ms：马来语；</li>
<li>th：泰语；</li>
<li>pt：葡萄牙语；</li>
<li>tr：土耳其语；</li>
<li>ar：阿拉伯语；</li>
<li>es：西班牙语；</li>
<li>hi：印地语；</li>
<li>fr：法语。</li>
其他取值参考 [RFC5646](https://tools.ietf.org/html/rfc5646)
     */
    public $Language;

    /**
     * @var string 字幕格式。取值范围如下：
<li>vtt</li>
     */
    public $Format;

    /**
     * @var string 字幕 URL。
     */
    public $Url;

    /**
     * @var string 字幕来源，取值范围：
<li>UserUploaded：用户上传；</li>
<li>AIRecognition：AI 识别，通过语音识别或语音翻译生成。</li>
     */
    public $Source;

    /**
     * @param string $Id 字幕的唯一标识。
     * @param string $Name 字幕名字。
     * @param string $Language 字幕语言。常见的取值如下：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>vi：越南语；</li>
<li>ms：马来语；</li>
<li>th：泰语；</li>
<li>pt：葡萄牙语；</li>
<li>tr：土耳其语；</li>
<li>ar：阿拉伯语；</li>
<li>es：西班牙语；</li>
<li>hi：印地语；</li>
<li>fr：法语。</li>
其他取值参考 [RFC5646](https://tools.ietf.org/html/rfc5646)
     * @param string $Format 字幕格式。取值范围如下：
<li>vtt</li>
     * @param string $Url 字幕 URL。
     * @param string $Source 字幕来源，取值范围：
<li>UserUploaded：用户上传；</li>
<li>AIRecognition：AI 识别，通过语音识别或语音翻译生成。</li>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
