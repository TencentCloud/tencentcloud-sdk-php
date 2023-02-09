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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRecTask请求参数结构体
 *
 * @method string getEngineModelType() 获取引擎模型类型。注意：非电话场景请务必使用16k的引擎。
电话场景：
• 8k_en：电话 8k 英语；
• 8k_zh：电话 8k 中文普通话通用；
非电话场景：
• 16k_zh：16k 中文普通话通用；
• 16k_zh_video：16k 音视频领域；
• 16k_en：16k 英语；
• 16k_ca：16k 粤语；
• 16k_ja：16k 日语；
• 16k_zh_edu 中文教育；
• 16k_en_edu 英文教育；
• 16k_zh_medical  医疗；
• 16k_th 泰语；
• 16k_zh-PY 中英粤;
• 16k_zh_dialect：多方言，支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
 * @method void setEngineModelType(string $EngineModelType) 设置引擎模型类型。注意：非电话场景请务必使用16k的引擎。
电话场景：
• 8k_en：电话 8k 英语；
• 8k_zh：电话 8k 中文普通话通用；
非电话场景：
• 16k_zh：16k 中文普通话通用；
• 16k_zh_video：16k 音视频领域；
• 16k_en：16k 英语；
• 16k_ca：16k 粤语；
• 16k_ja：16k 日语；
• 16k_zh_edu 中文教育；
• 16k_en_edu 英文教育；
• 16k_zh_medical  医疗；
• 16k_th 泰语；
• 16k_zh-PY 中英粤;
• 16k_zh_dialect：多方言，支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
 * @method integer getChannelNum() 获取识别声道数。1：单声道（非电话场景，直接选择单声道即可，忽略音频声道数）；2：双声道（仅支持8k_zh电话场景，双声道应分别对应通话双方）。注意：双声道的电话音频已物理分离说话人，无需再开启说话人分离功能。
 * @method void setChannelNum(integer $ChannelNum) 设置识别声道数。1：单声道（非电话场景，直接选择单声道即可，忽略音频声道数）；2：双声道（仅支持8k_zh电话场景，双声道应分别对应通话双方）。注意：双声道的电话音频已物理分离说话人，无需再开启说话人分离功能。
 * @method integer getResTextFormat() 获取识别结果返回形式。0： 识别结果文本(含分段时间戳)； 1：词级别粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)(不含标点，含语速值)；2：词级别粒度的详细识别结果（包含标点、语速值）；3: 标点符号分段，包含每段时间戳，特别适用于字幕场景（包含词级时间、标点、语速值）。
 * @method void setResTextFormat(integer $ResTextFormat) 设置识别结果返回形式。0： 识别结果文本(含分段时间戳)； 1：词级别粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)(不含标点，含语速值)；2：词级别粒度的详细识别结果（包含标点、语速值）；3: 标点符号分段，包含每段时间戳，特别适用于字幕场景（包含词级时间、标点、语速值）。
 * @method integer getSourceType() 获取语音数据来源。0：语音 URL；1：语音数据（post body）。
 * @method void setSourceType(integer $SourceType) 设置语音数据来源。0：语音 URL；1：语音数据（post body）。
 * @method integer getSpeakerDiarization() 获取是否开启说话人分离，0：不开启，1：开启(仅支持8k_zh，16k_zh，16k_zh_video，单声道音频)，默认值为 0。
注意：8k电话场景建议使用双声道来区分通话双方，设置ChannelNum=2即可，不用开启说话人分离。
 * @method void setSpeakerDiarization(integer $SpeakerDiarization) 设置是否开启说话人分离，0：不开启，1：开启(仅支持8k_zh，16k_zh，16k_zh_video，单声道音频)，默认值为 0。
注意：8k电话场景建议使用双声道来区分通话双方，设置ChannelNum=2即可，不用开启说话人分离。
 * @method integer getSpeakerNumber() 获取说话人分离人数（需配合开启说话人分离使用），取值范围：0-10，0代表自动分离（目前仅支持≤6个人），1-10代表指定说话人数分离。默认值为 0。
注：话者分离目前是beta版本，请根据您的需要谨慎使用
 * @method void setSpeakerNumber(integer $SpeakerNumber) 设置说话人分离人数（需配合开启说话人分离使用），取值范围：0-10，0代表自动分离（目前仅支持≤6个人），1-10代表指定说话人数分离。默认值为 0。
注：话者分离目前是beta版本，请根据您的需要谨慎使用
 * @method string getCallbackUrl() 获取回调 URL，用户自行搭建的用于接收识别结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。回调格式&内容详见：[录音识别回调说明](https://cloud.tencent.com/document/product/1093/52632)
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调 URL，用户自行搭建的用于接收识别结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。回调格式&内容详见：[录音识别回调说明](https://cloud.tencent.com/document/product/1093/52632)
 * @method string getUrl() 获取语音的URL地址，需要公网环境浏览器可下载。当 SourceType 值为 0 时须填写该字段，为 1 时不需要填写。注意：请确保录音文件时长在5个小时之内，否则可能识别失败。请保证文件的下载速度，否则可能下载失败。
 * @method void setUrl(string $Url) 设置语音的URL地址，需要公网环境浏览器可下载。当 SourceType 值为 0 时须填写该字段，为 1 时不需要填写。注意：请确保录音文件时长在5个小时之内，否则可能识别失败。请保证文件的下载速度，否则可能下载失败。
 * @method string getData() 获取语音数据base64编码，当SourceType 值为1时必须填写，为0可不写。音频数据要小于5MB。
 * @method void setData(string $Data) 设置语音数据base64编码，当SourceType 值为1时必须填写，为0可不写。音频数据要小于5MB。
 * @method integer getDataLen() 获取数据长度，非必填（此数据长度为数据未进行base64编码时的数据长度）。
 * @method void setDataLen(integer $DataLen) 设置数据长度，非必填（此数据长度为数据未进行base64编码时的数据长度）。
 * @method integer getConvertNumMode() 获取是否进行阿拉伯数字智能转换（目前支持中文普通话引擎）。0：不转换，直接输出中文数字，1：根据场景智能转换为阿拉伯数字，3: 打开数学相关数字转换。默认值为 1。
 * @method void setConvertNumMode(integer $ConvertNumMode) 设置是否进行阿拉伯数字智能转换（目前支持中文普通话引擎）。0：不转换，直接输出中文数字，1：根据场景智能转换为阿拉伯数字，3: 打开数学相关数字转换。默认值为 1。
 * @method integer getFilterDirty() 获取是否过滤脏词（目前支持中文普通话引擎）。0：不过滤脏词；1：过滤脏词；2：将脏词替换为 * 。默认值为 0。
 * @method void setFilterDirty(integer $FilterDirty) 设置是否过滤脏词（目前支持中文普通话引擎）。0：不过滤脏词；1：过滤脏词；2：将脏词替换为 * 。默认值为 0。
 * @method string getHotwordId() 获取热词表id。如不设置该参数，自动生效默认热词表；如设置了该参数，那么将生效对应的热词表。
 * @method void setHotwordId(string $HotwordId) 设置热词表id。如不设置该参数，自动生效默认热词表；如设置了该参数，那么将生效对应的热词表。
 * @method string getCustomizationId() 获取自学习模型 id。如设置了该参数，将生效对应的自学习模型。
 * @method void setCustomizationId(string $CustomizationId) 设置自学习模型 id。如设置了该参数，将生效对应的自学习模型。
 * @method string getExtra() 获取附加参数(该参数无意义，忽略即可)
 * @method void setExtra(string $Extra) 设置附加参数(该参数无意义，忽略即可)
 * @method integer getFilterPunc() 获取是否过滤标点符号（目前支持中文普通话引擎）。 0：不过滤，1：过滤句末标点，2：过滤所有标点。默认值为 0。
 * @method void setFilterPunc(integer $FilterPunc) 设置是否过滤标点符号（目前支持中文普通话引擎）。 0：不过滤，1：过滤句末标点，2：过滤所有标点。默认值为 0。
 * @method integer getFilterModal() 获取是否过滤语气词（目前支持中文普通话引擎）。0：不过滤语气词；1：部分过滤；2：严格过滤 。默认值为 0。
 * @method void setFilterModal(integer $FilterModal) 设置是否过滤语气词（目前支持中文普通话引擎）。0：不过滤语气词；1：部分过滤；2：严格过滤 。默认值为 0。
 * @method integer getEmotionalEnergy() 获取情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。0:不开启，1:开启
 * @method void setEmotionalEnergy(integer $EmotionalEnergy) 设置情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。0:不开启，1:开启
 * @method integer getReinforceHotword() 获取热词增强功能。1:开启后（仅支持8k_zh,16k_zh），将开启同音替换功能，同音字、词在热词中配置。举例：热词配置“蜜制”并开启增强功能后，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。
 * @method void setReinforceHotword(integer $ReinforceHotword) 设置热词增强功能。1:开启后（仅支持8k_zh,16k_zh），将开启同音替换功能，同音字、词在热词中配置。举例：热词配置“蜜制”并开启增强功能后，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。
 * @method integer getSentenceMaxLength() 获取单标点最多字数，取值范围：[6，40]。默认为0，不开启该功能。该参数可用于字幕生成场景，控制单行字幕最大字数（设置ResTextFormat为3，解析返回的ResultDetail列表，通过结构中FinalSentence获取单个标点断句结果）。
 * @method void setSentenceMaxLength(integer $SentenceMaxLength) 设置单标点最多字数，取值范围：[6，40]。默认为0，不开启该功能。该参数可用于字幕生成场景，控制单行字幕最大字数（设置ResTextFormat为3，解析返回的ResultDetail列表，通过结构中FinalSentence获取单个标点断句结果）。
 * @method integer getEmotionRecognition() 获取情绪识别能力(目前支持16k_zh) 默认为0，不开启。 1：开启情绪识别但是不会在文本展示“情绪标签”， 2：开启情绪识别并且在文本展示“情绪标签”。（该功能需要设置ResTextFormat 大于0）
注意：本功能为增值服务，购买对应套餐包后，将参数设置为1或2时方可按对应方式生效，并消耗套餐包对应资源。参数设置为0时无需购买套餐包，也不会消耗对应资源。
 * @method void setEmotionRecognition(integer $EmotionRecognition) 设置情绪识别能力(目前支持16k_zh) 默认为0，不开启。 1：开启情绪识别但是不会在文本展示“情绪标签”， 2：开启情绪识别并且在文本展示“情绪标签”。（该功能需要设置ResTextFormat 大于0）
注意：本功能为增值服务，购买对应套餐包后，将参数设置为1或2时方可按对应方式生效，并消耗套餐包对应资源。参数设置为0时无需购买套餐包，也不会消耗对应资源。
 */
class CreateRecTaskRequest extends AbstractModel
{
    /**
     * @var string 引擎模型类型。注意：非电话场景请务必使用16k的引擎。
电话场景：
• 8k_en：电话 8k 英语；
• 8k_zh：电话 8k 中文普通话通用；
非电话场景：
• 16k_zh：16k 中文普通话通用；
• 16k_zh_video：16k 音视频领域；
• 16k_en：16k 英语；
• 16k_ca：16k 粤语；
• 16k_ja：16k 日语；
• 16k_zh_edu 中文教育；
• 16k_en_edu 英文教育；
• 16k_zh_medical  医疗；
• 16k_th 泰语；
• 16k_zh-PY 中英粤;
• 16k_zh_dialect：多方言，支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
     */
    public $EngineModelType;

    /**
     * @var integer 识别声道数。1：单声道（非电话场景，直接选择单声道即可，忽略音频声道数）；2：双声道（仅支持8k_zh电话场景，双声道应分别对应通话双方）。注意：双声道的电话音频已物理分离说话人，无需再开启说话人分离功能。
     */
    public $ChannelNum;

    /**
     * @var integer 识别结果返回形式。0： 识别结果文本(含分段时间戳)； 1：词级别粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)(不含标点，含语速值)；2：词级别粒度的详细识别结果（包含标点、语速值）；3: 标点符号分段，包含每段时间戳，特别适用于字幕场景（包含词级时间、标点、语速值）。
     */
    public $ResTextFormat;

    /**
     * @var integer 语音数据来源。0：语音 URL；1：语音数据（post body）。
     */
    public $SourceType;

    /**
     * @var integer 是否开启说话人分离，0：不开启，1：开启(仅支持8k_zh，16k_zh，16k_zh_video，单声道音频)，默认值为 0。
注意：8k电话场景建议使用双声道来区分通话双方，设置ChannelNum=2即可，不用开启说话人分离。
     */
    public $SpeakerDiarization;

    /**
     * @var integer 说话人分离人数（需配合开启说话人分离使用），取值范围：0-10，0代表自动分离（目前仅支持≤6个人），1-10代表指定说话人数分离。默认值为 0。
注：话者分离目前是beta版本，请根据您的需要谨慎使用
     */
    public $SpeakerNumber;

    /**
     * @var string 回调 URL，用户自行搭建的用于接收识别结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。回调格式&内容详见：[录音识别回调说明](https://cloud.tencent.com/document/product/1093/52632)
     */
    public $CallbackUrl;

    /**
     * @var string 语音的URL地址，需要公网环境浏览器可下载。当 SourceType 值为 0 时须填写该字段，为 1 时不需要填写。注意：请确保录音文件时长在5个小时之内，否则可能识别失败。请保证文件的下载速度，否则可能下载失败。
     */
    public $Url;

    /**
     * @var string 语音数据base64编码，当SourceType 值为1时必须填写，为0可不写。音频数据要小于5MB。
     */
    public $Data;

    /**
     * @var integer 数据长度，非必填（此数据长度为数据未进行base64编码时的数据长度）。
     */
    public $DataLen;

    /**
     * @var integer 是否进行阿拉伯数字智能转换（目前支持中文普通话引擎）。0：不转换，直接输出中文数字，1：根据场景智能转换为阿拉伯数字，3: 打开数学相关数字转换。默认值为 1。
     */
    public $ConvertNumMode;

    /**
     * @var integer 是否过滤脏词（目前支持中文普通话引擎）。0：不过滤脏词；1：过滤脏词；2：将脏词替换为 * 。默认值为 0。
     */
    public $FilterDirty;

    /**
     * @var string 热词表id。如不设置该参数，自动生效默认热词表；如设置了该参数，那么将生效对应的热词表。
     */
    public $HotwordId;

    /**
     * @var string 自学习模型 id。如设置了该参数，将生效对应的自学习模型。
     */
    public $CustomizationId;

    /**
     * @var string 附加参数(该参数无意义，忽略即可)
     */
    public $Extra;

    /**
     * @var integer 是否过滤标点符号（目前支持中文普通话引擎）。 0：不过滤，1：过滤句末标点，2：过滤所有标点。默认值为 0。
     */
    public $FilterPunc;

    /**
     * @var integer 是否过滤语气词（目前支持中文普通话引擎）。0：不过滤语气词；1：部分过滤；2：严格过滤 。默认值为 0。
     */
    public $FilterModal;

    /**
     * @var integer 情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。0:不开启，1:开启
     */
    public $EmotionalEnergy;

    /**
     * @var integer 热词增强功能。1:开启后（仅支持8k_zh,16k_zh），将开启同音替换功能，同音字、词在热词中配置。举例：热词配置“蜜制”并开启增强功能后，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。
     */
    public $ReinforceHotword;

    /**
     * @var integer 单标点最多字数，取值范围：[6，40]。默认为0，不开启该功能。该参数可用于字幕生成场景，控制单行字幕最大字数（设置ResTextFormat为3，解析返回的ResultDetail列表，通过结构中FinalSentence获取单个标点断句结果）。
     */
    public $SentenceMaxLength;

    /**
     * @var integer 情绪识别能力(目前支持16k_zh) 默认为0，不开启。 1：开启情绪识别但是不会在文本展示“情绪标签”， 2：开启情绪识别并且在文本展示“情绪标签”。（该功能需要设置ResTextFormat 大于0）
注意：本功能为增值服务，购买对应套餐包后，将参数设置为1或2时方可按对应方式生效，并消耗套餐包对应资源。参数设置为0时无需购买套餐包，也不会消耗对应资源。
     */
    public $EmotionRecognition;

    /**
     * @param string $EngineModelType 引擎模型类型。注意：非电话场景请务必使用16k的引擎。
电话场景：
• 8k_en：电话 8k 英语；
• 8k_zh：电话 8k 中文普通话通用；
非电话场景：
• 16k_zh：16k 中文普通话通用；
• 16k_zh_video：16k 音视频领域；
• 16k_en：16k 英语；
• 16k_ca：16k 粤语；
• 16k_ja：16k 日语；
• 16k_zh_edu 中文教育；
• 16k_en_edu 英文教育；
• 16k_zh_medical  医疗；
• 16k_th 泰语；
• 16k_zh-PY 中英粤;
• 16k_zh_dialect：多方言，支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
     * @param integer $ChannelNum 识别声道数。1：单声道（非电话场景，直接选择单声道即可，忽略音频声道数）；2：双声道（仅支持8k_zh电话场景，双声道应分别对应通话双方）。注意：双声道的电话音频已物理分离说话人，无需再开启说话人分离功能。
     * @param integer $ResTextFormat 识别结果返回形式。0： 识别结果文本(含分段时间戳)； 1：词级别粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)(不含标点，含语速值)；2：词级别粒度的详细识别结果（包含标点、语速值）；3: 标点符号分段，包含每段时间戳，特别适用于字幕场景（包含词级时间、标点、语速值）。
     * @param integer $SourceType 语音数据来源。0：语音 URL；1：语音数据（post body）。
     * @param integer $SpeakerDiarization 是否开启说话人分离，0：不开启，1：开启(仅支持8k_zh，16k_zh，16k_zh_video，单声道音频)，默认值为 0。
注意：8k电话场景建议使用双声道来区分通话双方，设置ChannelNum=2即可，不用开启说话人分离。
     * @param integer $SpeakerNumber 说话人分离人数（需配合开启说话人分离使用），取值范围：0-10，0代表自动分离（目前仅支持≤6个人），1-10代表指定说话人数分离。默认值为 0。
注：话者分离目前是beta版本，请根据您的需要谨慎使用
     * @param string $CallbackUrl 回调 URL，用户自行搭建的用于接收识别结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。回调格式&内容详见：[录音识别回调说明](https://cloud.tencent.com/document/product/1093/52632)
     * @param string $Url 语音的URL地址，需要公网环境浏览器可下载。当 SourceType 值为 0 时须填写该字段，为 1 时不需要填写。注意：请确保录音文件时长在5个小时之内，否则可能识别失败。请保证文件的下载速度，否则可能下载失败。
     * @param string $Data 语音数据base64编码，当SourceType 值为1时必须填写，为0可不写。音频数据要小于5MB。
     * @param integer $DataLen 数据长度，非必填（此数据长度为数据未进行base64编码时的数据长度）。
     * @param integer $ConvertNumMode 是否进行阿拉伯数字智能转换（目前支持中文普通话引擎）。0：不转换，直接输出中文数字，1：根据场景智能转换为阿拉伯数字，3: 打开数学相关数字转换。默认值为 1。
     * @param integer $FilterDirty 是否过滤脏词（目前支持中文普通话引擎）。0：不过滤脏词；1：过滤脏词；2：将脏词替换为 * 。默认值为 0。
     * @param string $HotwordId 热词表id。如不设置该参数，自动生效默认热词表；如设置了该参数，那么将生效对应的热词表。
     * @param string $CustomizationId 自学习模型 id。如设置了该参数，将生效对应的自学习模型。
     * @param string $Extra 附加参数(该参数无意义，忽略即可)
     * @param integer $FilterPunc 是否过滤标点符号（目前支持中文普通话引擎）。 0：不过滤，1：过滤句末标点，2：过滤所有标点。默认值为 0。
     * @param integer $FilterModal 是否过滤语气词（目前支持中文普通话引擎）。0：不过滤语气词；1：部分过滤；2：严格过滤 。默认值为 0。
     * @param integer $EmotionalEnergy 情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。0:不开启，1:开启
     * @param integer $ReinforceHotword 热词增强功能。1:开启后（仅支持8k_zh,16k_zh），将开启同音替换功能，同音字、词在热词中配置。举例：热词配置“蜜制”并开启增强功能后，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。
     * @param integer $SentenceMaxLength 单标点最多字数，取值范围：[6，40]。默认为0，不开启该功能。该参数可用于字幕生成场景，控制单行字幕最大字数（设置ResTextFormat为3，解析返回的ResultDetail列表，通过结构中FinalSentence获取单个标点断句结果）。
     * @param integer $EmotionRecognition 情绪识别能力(目前支持16k_zh) 默认为0，不开启。 1：开启情绪识别但是不会在文本展示“情绪标签”， 2：开启情绪识别并且在文本展示“情绪标签”。（该功能需要设置ResTextFormat 大于0）
注意：本功能为增值服务，购买对应套餐包后，将参数设置为1或2时方可按对应方式生效，并消耗套餐包对应资源。参数设置为0时无需购买套餐包，也不会消耗对应资源。
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
        if (array_key_exists("EngineModelType",$param) and $param["EngineModelType"] !== null) {
            $this->EngineModelType = $param["EngineModelType"];
        }

        if (array_key_exists("ChannelNum",$param) and $param["ChannelNum"] !== null) {
            $this->ChannelNum = $param["ChannelNum"];
        }

        if (array_key_exists("ResTextFormat",$param) and $param["ResTextFormat"] !== null) {
            $this->ResTextFormat = $param["ResTextFormat"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SpeakerDiarization",$param) and $param["SpeakerDiarization"] !== null) {
            $this->SpeakerDiarization = $param["SpeakerDiarization"];
        }

        if (array_key_exists("SpeakerNumber",$param) and $param["SpeakerNumber"] !== null) {
            $this->SpeakerNumber = $param["SpeakerNumber"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("DataLen",$param) and $param["DataLen"] !== null) {
            $this->DataLen = $param["DataLen"];
        }

        if (array_key_exists("ConvertNumMode",$param) and $param["ConvertNumMode"] !== null) {
            $this->ConvertNumMode = $param["ConvertNumMode"];
        }

        if (array_key_exists("FilterDirty",$param) and $param["FilterDirty"] !== null) {
            $this->FilterDirty = $param["FilterDirty"];
        }

        if (array_key_exists("HotwordId",$param) and $param["HotwordId"] !== null) {
            $this->HotwordId = $param["HotwordId"];
        }

        if (array_key_exists("CustomizationId",$param) and $param["CustomizationId"] !== null) {
            $this->CustomizationId = $param["CustomizationId"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("FilterPunc",$param) and $param["FilterPunc"] !== null) {
            $this->FilterPunc = $param["FilterPunc"];
        }

        if (array_key_exists("FilterModal",$param) and $param["FilterModal"] !== null) {
            $this->FilterModal = $param["FilterModal"];
        }

        if (array_key_exists("EmotionalEnergy",$param) and $param["EmotionalEnergy"] !== null) {
            $this->EmotionalEnergy = $param["EmotionalEnergy"];
        }

        if (array_key_exists("ReinforceHotword",$param) and $param["ReinforceHotword"] !== null) {
            $this->ReinforceHotword = $param["ReinforceHotword"];
        }

        if (array_key_exists("SentenceMaxLength",$param) and $param["SentenceMaxLength"] !== null) {
            $this->SentenceMaxLength = $param["SentenceMaxLength"];
        }

        if (array_key_exists("EmotionRecognition",$param) and $param["EmotionRecognition"] !== null) {
            $this->EmotionRecognition = $param["EmotionRecognition"];
        }
    }
}
