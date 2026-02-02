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
 * SyncDubbing请求参数结构体
 *
 * @method string getText() 获取合成文本，语音合成时必填，文本长度不超过2000字符
 * @method void setText(string $Text) 设置合成文本，语音合成时必填，文本长度不超过2000字符
 * @method string getTextLang() 获取文本语言，不填默认中文。
当前支持语言：
zh	中文 (Chinese)
en	英语 (English)
ja	日语 (Japanese)
de	德语 (German)
fr	法语 (French)
ko	韩语 (Korean)
ru	俄语 (Russian)
uk	乌克兰语 (Ukrainian)
pt	葡萄牙语 (Portuguese)
it	意大利语 (Italian)
es	西班牙语 (Spanish)
id	印度尼西亚语 (Indonesian)
nl	荷兰语 (Dutch)
tr	土耳其语 (Turkish)
fil	菲律宾语 (Filipino)
ms	马来语 (Malay)
el	希腊语 (Greek)
fi	芬兰语 (Finnish)
hr	克罗地亚语 (Croatian)
sk	斯洛伐克语 (Slovak)
pl	波兰语 (Polish)
sv	瑞典语 (Swedish)
hi	印地语 (Hindi)
bg	保加利亚语 (Bulgarian)
ro	罗马尼亚语 (Romanian)
ar	阿拉伯语 (Arabic)
cs	捷克语 (Czech)
da	丹麦语 (Danish)
ta	泰米尔语 (Tamil)
hun	匈牙利语（Hungarian）
vi	越南语（Vietnamese）
no	挪威语（Norwegian）
yue	粤语（Cantonese）
th	泰语（Thai）
he	希伯来语（Hebrew）
ca	加泰罗尼亚语（Catalan）
nn	尼诺斯克语（Nynorsk）
af	阿非利卡语（Afrikaans）
fa	波斯语（Persian）
sl	斯洛文尼亚语（Slovenian）

 * @method void setTextLang(string $TextLang) 设置文本语言，不填默认中文。
当前支持语言：
zh	中文 (Chinese)
en	英语 (English)
ja	日语 (Japanese)
de	德语 (German)
fr	法语 (French)
ko	韩语 (Korean)
ru	俄语 (Russian)
uk	乌克兰语 (Ukrainian)
pt	葡萄牙语 (Portuguese)
it	意大利语 (Italian)
es	西班牙语 (Spanish)
id	印度尼西亚语 (Indonesian)
nl	荷兰语 (Dutch)
tr	土耳其语 (Turkish)
fil	菲律宾语 (Filipino)
ms	马来语 (Malay)
el	希腊语 (Greek)
fi	芬兰语 (Finnish)
hr	克罗地亚语 (Croatian)
sk	斯洛伐克语 (Slovak)
pl	波兰语 (Polish)
sv	瑞典语 (Swedish)
hi	印地语 (Hindi)
bg	保加利亚语 (Bulgarian)
ro	罗马尼亚语 (Romanian)
ar	阿拉伯语 (Arabic)
cs	捷克语 (Czech)
da	丹麦语 (Danish)
ta	泰米尔语 (Tamil)
hun	匈牙利语（Hungarian）
vi	越南语（Vietnamese）
no	挪威语（Norwegian）
yue	粤语（Cantonese）
th	泰语（Thai）
he	希伯来语（Hebrew）
ca	加泰罗尼亚语（Catalan）
nn	尼诺斯克语（Nynorsk）
af	阿非利卡语（Afrikaans）
fa	波斯语（Persian）
sl	斯洛文尼亚语（Slovenian）

 * @method string getVoiceId() 获取音色Id，指定音色合成时填写，支持系统音色和克隆音色。
 * @method void setVoiceId(string $VoiceId) 设置音色Id，指定音色合成时填写，支持系统音色和克隆音色。
 * @method string getAudioData() 获取克隆音频base64编码。
 * @method void setAudioData(string $AudioData) 设置克隆音频base64编码。
 * @method string getAudioLang() 获取克隆音频语言，默认中文。
当前支持语言同TextLang
 * @method void setAudioLang(string $AudioLang) 设置克隆音频语言，默认中文。
当前支持语言同TextLang
 * @method string getExtParam() 获取扩展参数，json字符串
 * @method void setExtParam(string $ExtParam) 设置扩展参数，json字符串
 */
class SyncDubbingRequest extends AbstractModel
{
    /**
     * @var string 合成文本，语音合成时必填，文本长度不超过2000字符
     */
    public $Text;

    /**
     * @var string 文本语言，不填默认中文。
当前支持语言：
zh	中文 (Chinese)
en	英语 (English)
ja	日语 (Japanese)
de	德语 (German)
fr	法语 (French)
ko	韩语 (Korean)
ru	俄语 (Russian)
uk	乌克兰语 (Ukrainian)
pt	葡萄牙语 (Portuguese)
it	意大利语 (Italian)
es	西班牙语 (Spanish)
id	印度尼西亚语 (Indonesian)
nl	荷兰语 (Dutch)
tr	土耳其语 (Turkish)
fil	菲律宾语 (Filipino)
ms	马来语 (Malay)
el	希腊语 (Greek)
fi	芬兰语 (Finnish)
hr	克罗地亚语 (Croatian)
sk	斯洛伐克语 (Slovak)
pl	波兰语 (Polish)
sv	瑞典语 (Swedish)
hi	印地语 (Hindi)
bg	保加利亚语 (Bulgarian)
ro	罗马尼亚语 (Romanian)
ar	阿拉伯语 (Arabic)
cs	捷克语 (Czech)
da	丹麦语 (Danish)
ta	泰米尔语 (Tamil)
hun	匈牙利语（Hungarian）
vi	越南语（Vietnamese）
no	挪威语（Norwegian）
yue	粤语（Cantonese）
th	泰语（Thai）
he	希伯来语（Hebrew）
ca	加泰罗尼亚语（Catalan）
nn	尼诺斯克语（Nynorsk）
af	阿非利卡语（Afrikaans）
fa	波斯语（Persian）
sl	斯洛文尼亚语（Slovenian）

     */
    public $TextLang;

    /**
     * @var string 音色Id，指定音色合成时填写，支持系统音色和克隆音色。
     */
    public $VoiceId;

    /**
     * @var string 克隆音频base64编码。
     */
    public $AudioData;

    /**
     * @var string 克隆音频语言，默认中文。
当前支持语言同TextLang
     */
    public $AudioLang;

    /**
     * @var string 扩展参数，json字符串
     */
    public $ExtParam;

    /**
     * @param string $Text 合成文本，语音合成时必填，文本长度不超过2000字符
     * @param string $TextLang 文本语言，不填默认中文。
当前支持语言：
zh	中文 (Chinese)
en	英语 (English)
ja	日语 (Japanese)
de	德语 (German)
fr	法语 (French)
ko	韩语 (Korean)
ru	俄语 (Russian)
uk	乌克兰语 (Ukrainian)
pt	葡萄牙语 (Portuguese)
it	意大利语 (Italian)
es	西班牙语 (Spanish)
id	印度尼西亚语 (Indonesian)
nl	荷兰语 (Dutch)
tr	土耳其语 (Turkish)
fil	菲律宾语 (Filipino)
ms	马来语 (Malay)
el	希腊语 (Greek)
fi	芬兰语 (Finnish)
hr	克罗地亚语 (Croatian)
sk	斯洛伐克语 (Slovak)
pl	波兰语 (Polish)
sv	瑞典语 (Swedish)
hi	印地语 (Hindi)
bg	保加利亚语 (Bulgarian)
ro	罗马尼亚语 (Romanian)
ar	阿拉伯语 (Arabic)
cs	捷克语 (Czech)
da	丹麦语 (Danish)
ta	泰米尔语 (Tamil)
hun	匈牙利语（Hungarian）
vi	越南语（Vietnamese）
no	挪威语（Norwegian）
yue	粤语（Cantonese）
th	泰语（Thai）
he	希伯来语（Hebrew）
ca	加泰罗尼亚语（Catalan）
nn	尼诺斯克语（Nynorsk）
af	阿非利卡语（Afrikaans）
fa	波斯语（Persian）
sl	斯洛文尼亚语（Slovenian）

     * @param string $VoiceId 音色Id，指定音色合成时填写，支持系统音色和克隆音色。
     * @param string $AudioData 克隆音频base64编码。
     * @param string $AudioLang 克隆音频语言，默认中文。
当前支持语言同TextLang
     * @param string $ExtParam 扩展参数，json字符串
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

        if (array_key_exists("TextLang",$param) and $param["TextLang"] !== null) {
            $this->TextLang = $param["TextLang"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("AudioLang",$param) and $param["AudioLang"] !== null) {
            $this->AudioLang = $param["AudioLang"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
