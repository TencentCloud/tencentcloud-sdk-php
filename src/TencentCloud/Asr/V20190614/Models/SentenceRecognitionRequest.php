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
 * SentenceRecognition请求参数结构体
 *
 * @method string getEngSerViceType() 获取引擎模型类型。
电话场景：
• 8k_zh：中文电话通用；
• 8k_en：英文电话通用；

非电话场景：
• 16k_zh：中文通用；
• 16k_zh-PY：中英粤;
• 16k_zh_medical：中文医疗；
• 16k_en：英语；
• 16k_yue：粤语；
• 16k_ja：日语；
• 16k_ko：韩语；
• 16k_vi：越南语；
• 16k_ms：马来语；
• 16k_id：印度尼西亚语；
• 16k_fil：菲律宾语；
• 16k_th：泰语；
• 16k_pt：葡萄牙语；
• 16k_tr：土耳其语；
• 16k_ar：阿拉伯语；
• 16k_es：西班牙语；
• 16k_hi：印地语；
• 16k_fr：法语；
• 16k_de：德语；
• 16k_zh_dialect：多方言，支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
 * @method void setEngSerViceType(string $EngSerViceType) 设置引擎模型类型。
电话场景：
• 8k_zh：中文电话通用；
• 8k_en：英文电话通用；

非电话场景：
• 16k_zh：中文通用；
• 16k_zh-PY：中英粤;
• 16k_zh_medical：中文医疗；
• 16k_en：英语；
• 16k_yue：粤语；
• 16k_ja：日语；
• 16k_ko：韩语；
• 16k_vi：越南语；
• 16k_ms：马来语；
• 16k_id：印度尼西亚语；
• 16k_fil：菲律宾语；
• 16k_th：泰语；
• 16k_pt：葡萄牙语；
• 16k_tr：土耳其语；
• 16k_ar：阿拉伯语；
• 16k_es：西班牙语；
• 16k_hi：印地语；
• 16k_fr：法语；
• 16k_de：德语；
• 16k_zh_dialect：多方言，支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
 * @method integer getSourceType() 获取语音数据来源。0：语音 URL；1：语音数据（post body）。
 * @method void setSourceType(integer $SourceType) 设置语音数据来源。0：语音 URL；1：语音数据（post body）。
 * @method string getVoiceFormat() 获取识别音频的音频格式，支持wav、pcm、ogg-opus、speex、silk、mp3、m4a、aac、amr。
 * @method void setVoiceFormat(string $VoiceFormat) 设置识别音频的音频格式，支持wav、pcm、ogg-opus、speex、silk、mp3、m4a、aac、amr。
 * @method integer getProjectId() 获取腾讯云项目 ID，废弃参数，填写0即可。
 * @method void setProjectId(integer $ProjectId) 设置腾讯云项目 ID，废弃参数，填写0即可。
 * @method integer getSubServiceType() 获取子服务类型。2： 一句话识别。
 * @method void setSubServiceType(integer $SubServiceType) 设置子服务类型。2： 一句话识别。
 * @method string getUrl() 获取语音的URL地址，需要公网环境浏览器可下载。当 SourceType 值为 0时须填写该字段，为 1 时不填。音频时长不能超过60s，音频文件大小不能超过3MB。

注意：推荐使用 [腾讯云COS](https://cloud.tencent.com/document/product/436/38484) 来存储音频、生成URL并提交请求，此种方式会走内网下载音频，极大降低整体请求时延；并且不会产生外网和流量下行费用，可节约成本（COS桶权限需要设置公有读私有写，或URL设置时效访问签名）
 * @method void setUrl(string $Url) 设置语音的URL地址，需要公网环境浏览器可下载。当 SourceType 值为 0时须填写该字段，为 1 时不填。音频时长不能超过60s，音频文件大小不能超过3MB。

注意：推荐使用 [腾讯云COS](https://cloud.tencent.com/document/product/436/38484) 来存储音频、生成URL并提交请求，此种方式会走内网下载音频，极大降低整体请求时延；并且不会产生外网和流量下行费用，可节约成本（COS桶权限需要设置公有读私有写，或URL设置时效访问签名）
 * @method string getUsrAudioKey() 获取废弃参数，填写任意字符串即可。
 * @method void setUsrAudioKey(string $UsrAudioKey) 设置废弃参数，填写任意字符串即可。
 * @method string getData() 获取语音数据，当SourceType 值为1（本地语音数据上传）时必须填写，当SourceType 值为0（语音 URL上传）可不写。要使用base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。音频时长不能超过60s，音频文件大小不能超过3MB（Base64后）。
 * @method void setData(string $Data) 设置语音数据，当SourceType 值为1（本地语音数据上传）时必须填写，当SourceType 值为0（语音 URL上传）可不写。要使用base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。音频时长不能超过60s，音频文件大小不能超过3MB（Base64后）。
 * @method integer getDataLen() 获取数据长度，单位为字节。当 SourceType 值为1（本地语音数据上传）时必须填写，当 SourceType 值为0（语音 URL上传）可不写（此数据长度为数据未进行base64编码时的数据长度）。
 * @method void setDataLen(integer $DataLen) 设置数据长度，单位为字节。当 SourceType 值为1（本地语音数据上传）时必须填写，当 SourceType 值为0（语音 URL上传）可不写（此数据长度为数据未进行base64编码时的数据长度）。
 * @method integer getWordInfo() 获取是否显示词级别时间戳。0：不显示；1：显示，不包含标点时间戳，2：显示，包含标点时间戳。默认值为 0。
 * @method void setWordInfo(integer $WordInfo) 设置是否显示词级别时间戳。0：不显示；1：显示，不包含标点时间戳，2：显示，包含标点时间戳。默认值为 0。
 * @method integer getFilterDirty() 获取是否过滤脏词（目前支持中文普通话引擎）。0：不过滤脏词；1：过滤脏词；2：将脏词替换为 * 。默认值为 0。
 * @method void setFilterDirty(integer $FilterDirty) 设置是否过滤脏词（目前支持中文普通话引擎）。0：不过滤脏词；1：过滤脏词；2：将脏词替换为 * 。默认值为 0。
 * @method integer getFilterModal() 获取是否过滤语气词（目前支持中文普通话引擎）。0：不过滤语气词；1：部分过滤；2：严格过滤 。默认值为 0。
 * @method void setFilterModal(integer $FilterModal) 设置是否过滤语气词（目前支持中文普通话引擎）。0：不过滤语气词；1：部分过滤；2：严格过滤 。默认值为 0。
 * @method integer getFilterPunc() 获取是否过滤标点符号（目前支持中文普通话引擎）。 0：不过滤，1：过滤句末标点，2：过滤所有标点。默认值为 0。
 * @method void setFilterPunc(integer $FilterPunc) 设置是否过滤标点符号（目前支持中文普通话引擎）。 0：不过滤，1：过滤句末标点，2：过滤所有标点。默认值为 0。
 * @method integer getConvertNumMode() 获取是否进行阿拉伯数字智能转换。0：不转换，直接输出中文数字，1：根据场景智能转换为阿拉伯数字。默认值为1。
 * @method void setConvertNumMode(integer $ConvertNumMode) 设置是否进行阿拉伯数字智能转换。0：不转换，直接输出中文数字，1：根据场景智能转换为阿拉伯数字。默认值为1。
 * @method string getHotwordId() 获取热词id。用于调用对应的热词表，如果在调用语音识别服务时，不进行单独的热词id设置，自动生效默认热词；如果进行了单独的热词id设置，那么将生效单独设置的热词id。
 * @method void setHotwordId(string $HotwordId) 设置热词id。用于调用对应的热词表，如果在调用语音识别服务时，不进行单独的热词id设置，自动生效默认热词；如果进行了单独的热词id设置，那么将生效单独设置的热词id。
 * @method string getCustomizationId() 获取自学习模型 id。如设置了该参数，将生效对应的自学习模型。
 * @method void setCustomizationId(string $CustomizationId) 设置自学习模型 id。如设置了该参数，将生效对应的自学习模型。
 * @method integer getReinforceHotword() 获取热词增强功能。1:开启后（仅支持8k_zh,16k_zh），将开启同音替换功能，同音字、词在热词中配置。举例：热词配置“蜜制”并开启增强功能后，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。
 * @method void setReinforceHotword(integer $ReinforceHotword) 设置热词增强功能。1:开启后（仅支持8k_zh,16k_zh），将开启同音替换功能，同音字、词在热词中配置。举例：热词配置“蜜制”并开启增强功能后，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。
 * @method string getHotwordList() 获取临时热词表：该参数用于提升识别准确率。
单个热词限制："热词|权重"，单个热词不超过30个字符（最多10个汉字），权重1-11或者100，如：“腾讯云|5” 或 “ASR|11”；
临时热词表限制：多个热词用英文逗号分割，最多支持128个热词，如：“腾讯云|10,语音识别|5,ASR|11”；
参数 hotword_list（临时热词表） 与 hotword_id（热词表） 区别：
hotword_id：热词表。需要先在控制台或接口创建热词表，获得对应hotword_id传入参数来使用热词功能；
hotword_list：临时热词表。每次请求时直接传入临时热词表来使用热词功能，云端不保留临时热词表。适用于有极大量热词需求的用户；
注意：
• 如果同时传入了 hotword_id 和 hotword_list，会优先使用 hotword_list；
• 热词权重设置为11时，当前热词将升级为超级热词，建议仅将重要且必须生效的热词设置到11，设置过多权重为11的热词将影响整体字准率。
• 热词权重设置为100时，当前热词开启热词增强同音替换功能（仅支持8k_zh,16k_zh），举例：热词配置“蜜制|100”时，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。建议仅将重要且必须生效的热词设置到100，设置过多权重为100的热词将影响整体字准率。
 * @method void setHotwordList(string $HotwordList) 设置临时热词表：该参数用于提升识别准确率。
单个热词限制："热词|权重"，单个热词不超过30个字符（最多10个汉字），权重1-11或者100，如：“腾讯云|5” 或 “ASR|11”；
临时热词表限制：多个热词用英文逗号分割，最多支持128个热词，如：“腾讯云|10,语音识别|5,ASR|11”；
参数 hotword_list（临时热词表） 与 hotword_id（热词表） 区别：
hotword_id：热词表。需要先在控制台或接口创建热词表，获得对应hotword_id传入参数来使用热词功能；
hotword_list：临时热词表。每次请求时直接传入临时热词表来使用热词功能，云端不保留临时热词表。适用于有极大量热词需求的用户；
注意：
• 如果同时传入了 hotword_id 和 hotword_list，会优先使用 hotword_list；
• 热词权重设置为11时，当前热词将升级为超级热词，建议仅将重要且必须生效的热词设置到11，设置过多权重为11的热词将影响整体字准率。
• 热词权重设置为100时，当前热词开启热词增强同音替换功能（仅支持8k_zh,16k_zh），举例：热词配置“蜜制|100”时，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。建议仅将重要且必须生效的热词设置到100，设置过多权重为100的热词将影响整体字准率。
 * @method integer getInputSampleRate() 获取支持pcm格式的8k音频在与引擎采样率不匹配的情况下升采样到16k后识别，能有效提升识别准确率。仅支持：8000。如：传入 8000 ，则pcm音频采样率为8k，当引擎选用16k_zh， 那么该8k采样率的pcm音频可以在16k_zh引擎下正常识别。 注：此参数仅适用于pcm格式音频，不传入值将维持默认状态，即默认调用的引擎采样率等于pcm音频采样率。
 * @method void setInputSampleRate(integer $InputSampleRate) 设置支持pcm格式的8k音频在与引擎采样率不匹配的情况下升采样到16k后识别，能有效提升识别准确率。仅支持：8000。如：传入 8000 ，则pcm音频采样率为8k，当引擎选用16k_zh， 那么该8k采样率的pcm音频可以在16k_zh引擎下正常识别。 注：此参数仅适用于pcm格式音频，不传入值将维持默认状态，即默认调用的引擎采样率等于pcm音频采样率。
 */
class SentenceRecognitionRequest extends AbstractModel
{
    /**
     * @var string 引擎模型类型。
电话场景：
• 8k_zh：中文电话通用；
• 8k_en：英文电话通用；

非电话场景：
• 16k_zh：中文通用；
• 16k_zh-PY：中英粤;
• 16k_zh_medical：中文医疗；
• 16k_en：英语；
• 16k_yue：粤语；
• 16k_ja：日语；
• 16k_ko：韩语；
• 16k_vi：越南语；
• 16k_ms：马来语；
• 16k_id：印度尼西亚语；
• 16k_fil：菲律宾语；
• 16k_th：泰语；
• 16k_pt：葡萄牙语；
• 16k_tr：土耳其语；
• 16k_ar：阿拉伯语；
• 16k_es：西班牙语；
• 16k_hi：印地语；
• 16k_fr：法语；
• 16k_de：德语；
• 16k_zh_dialect：多方言，支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
     */
    public $EngSerViceType;

    /**
     * @var integer 语音数据来源。0：语音 URL；1：语音数据（post body）。
     */
    public $SourceType;

    /**
     * @var string 识别音频的音频格式，支持wav、pcm、ogg-opus、speex、silk、mp3、m4a、aac、amr。
     */
    public $VoiceFormat;

    /**
     * @var integer 腾讯云项目 ID，废弃参数，填写0即可。
     * @deprecated
     */
    public $ProjectId;

    /**
     * @var integer 子服务类型。2： 一句话识别。
     * @deprecated
     */
    public $SubServiceType;

    /**
     * @var string 语音的URL地址，需要公网环境浏览器可下载。当 SourceType 值为 0时须填写该字段，为 1 时不填。音频时长不能超过60s，音频文件大小不能超过3MB。

注意：推荐使用 [腾讯云COS](https://cloud.tencent.com/document/product/436/38484) 来存储音频、生成URL并提交请求，此种方式会走内网下载音频，极大降低整体请求时延；并且不会产生外网和流量下行费用，可节约成本（COS桶权限需要设置公有读私有写，或URL设置时效访问签名）
     */
    public $Url;

    /**
     * @var string 废弃参数，填写任意字符串即可。
     * @deprecated
     */
    public $UsrAudioKey;

    /**
     * @var string 语音数据，当SourceType 值为1（本地语音数据上传）时必须填写，当SourceType 值为0（语音 URL上传）可不写。要使用base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。音频时长不能超过60s，音频文件大小不能超过3MB（Base64后）。
     */
    public $Data;

    /**
     * @var integer 数据长度，单位为字节。当 SourceType 值为1（本地语音数据上传）时必须填写，当 SourceType 值为0（语音 URL上传）可不写（此数据长度为数据未进行base64编码时的数据长度）。
     */
    public $DataLen;

    /**
     * @var integer 是否显示词级别时间戳。0：不显示；1：显示，不包含标点时间戳，2：显示，包含标点时间戳。默认值为 0。
     */
    public $WordInfo;

    /**
     * @var integer 是否过滤脏词（目前支持中文普通话引擎）。0：不过滤脏词；1：过滤脏词；2：将脏词替换为 * 。默认值为 0。
     */
    public $FilterDirty;

    /**
     * @var integer 是否过滤语气词（目前支持中文普通话引擎）。0：不过滤语气词；1：部分过滤；2：严格过滤 。默认值为 0。
     */
    public $FilterModal;

    /**
     * @var integer 是否过滤标点符号（目前支持中文普通话引擎）。 0：不过滤，1：过滤句末标点，2：过滤所有标点。默认值为 0。
     */
    public $FilterPunc;

    /**
     * @var integer 是否进行阿拉伯数字智能转换。0：不转换，直接输出中文数字，1：根据场景智能转换为阿拉伯数字。默认值为1。
     */
    public $ConvertNumMode;

    /**
     * @var string 热词id。用于调用对应的热词表，如果在调用语音识别服务时，不进行单独的热词id设置，自动生效默认热词；如果进行了单独的热词id设置，那么将生效单独设置的热词id。
     */
    public $HotwordId;

    /**
     * @var string 自学习模型 id。如设置了该参数，将生效对应的自学习模型。
     */
    public $CustomizationId;

    /**
     * @var integer 热词增强功能。1:开启后（仅支持8k_zh,16k_zh），将开启同音替换功能，同音字、词在热词中配置。举例：热词配置“蜜制”并开启增强功能后，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。
     * @deprecated
     */
    public $ReinforceHotword;

    /**
     * @var string 临时热词表：该参数用于提升识别准确率。
单个热词限制："热词|权重"，单个热词不超过30个字符（最多10个汉字），权重1-11或者100，如：“腾讯云|5” 或 “ASR|11”；
临时热词表限制：多个热词用英文逗号分割，最多支持128个热词，如：“腾讯云|10,语音识别|5,ASR|11”；
参数 hotword_list（临时热词表） 与 hotword_id（热词表） 区别：
hotword_id：热词表。需要先在控制台或接口创建热词表，获得对应hotword_id传入参数来使用热词功能；
hotword_list：临时热词表。每次请求时直接传入临时热词表来使用热词功能，云端不保留临时热词表。适用于有极大量热词需求的用户；
注意：
• 如果同时传入了 hotword_id 和 hotword_list，会优先使用 hotword_list；
• 热词权重设置为11时，当前热词将升级为超级热词，建议仅将重要且必须生效的热词设置到11，设置过多权重为11的热词将影响整体字准率。
• 热词权重设置为100时，当前热词开启热词增强同音替换功能（仅支持8k_zh,16k_zh），举例：热词配置“蜜制|100”时，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。建议仅将重要且必须生效的热词设置到100，设置过多权重为100的热词将影响整体字准率。
     */
    public $HotwordList;

    /**
     * @var integer 支持pcm格式的8k音频在与引擎采样率不匹配的情况下升采样到16k后识别，能有效提升识别准确率。仅支持：8000。如：传入 8000 ，则pcm音频采样率为8k，当引擎选用16k_zh， 那么该8k采样率的pcm音频可以在16k_zh引擎下正常识别。 注：此参数仅适用于pcm格式音频，不传入值将维持默认状态，即默认调用的引擎采样率等于pcm音频采样率。
     */
    public $InputSampleRate;

    /**
     * @param string $EngSerViceType 引擎模型类型。
电话场景：
• 8k_zh：中文电话通用；
• 8k_en：英文电话通用；

非电话场景：
• 16k_zh：中文通用；
• 16k_zh-PY：中英粤;
• 16k_zh_medical：中文医疗；
• 16k_en：英语；
• 16k_yue：粤语；
• 16k_ja：日语；
• 16k_ko：韩语；
• 16k_vi：越南语；
• 16k_ms：马来语；
• 16k_id：印度尼西亚语；
• 16k_fil：菲律宾语；
• 16k_th：泰语；
• 16k_pt：葡萄牙语；
• 16k_tr：土耳其语；
• 16k_ar：阿拉伯语；
• 16k_es：西班牙语；
• 16k_hi：印地语；
• 16k_fr：法语；
• 16k_de：德语；
• 16k_zh_dialect：多方言，支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
     * @param integer $SourceType 语音数据来源。0：语音 URL；1：语音数据（post body）。
     * @param string $VoiceFormat 识别音频的音频格式，支持wav、pcm、ogg-opus、speex、silk、mp3、m4a、aac、amr。
     * @param integer $ProjectId 腾讯云项目 ID，废弃参数，填写0即可。
     * @param integer $SubServiceType 子服务类型。2： 一句话识别。
     * @param string $Url 语音的URL地址，需要公网环境浏览器可下载。当 SourceType 值为 0时须填写该字段，为 1 时不填。音频时长不能超过60s，音频文件大小不能超过3MB。

注意：推荐使用 [腾讯云COS](https://cloud.tencent.com/document/product/436/38484) 来存储音频、生成URL并提交请求，此种方式会走内网下载音频，极大降低整体请求时延；并且不会产生外网和流量下行费用，可节约成本（COS桶权限需要设置公有读私有写，或URL设置时效访问签名）
     * @param string $UsrAudioKey 废弃参数，填写任意字符串即可。
     * @param string $Data 语音数据，当SourceType 值为1（本地语音数据上传）时必须填写，当SourceType 值为0（语音 URL上传）可不写。要使用base64编码(采用python语言时注意读取文件应该为string而不是byte，以byte格式读取后要decode()。编码后的数据不可带有回车换行符)。音频时长不能超过60s，音频文件大小不能超过3MB（Base64后）。
     * @param integer $DataLen 数据长度，单位为字节。当 SourceType 值为1（本地语音数据上传）时必须填写，当 SourceType 值为0（语音 URL上传）可不写（此数据长度为数据未进行base64编码时的数据长度）。
     * @param integer $WordInfo 是否显示词级别时间戳。0：不显示；1：显示，不包含标点时间戳，2：显示，包含标点时间戳。默认值为 0。
     * @param integer $FilterDirty 是否过滤脏词（目前支持中文普通话引擎）。0：不过滤脏词；1：过滤脏词；2：将脏词替换为 * 。默认值为 0。
     * @param integer $FilterModal 是否过滤语气词（目前支持中文普通话引擎）。0：不过滤语气词；1：部分过滤；2：严格过滤 。默认值为 0。
     * @param integer $FilterPunc 是否过滤标点符号（目前支持中文普通话引擎）。 0：不过滤，1：过滤句末标点，2：过滤所有标点。默认值为 0。
     * @param integer $ConvertNumMode 是否进行阿拉伯数字智能转换。0：不转换，直接输出中文数字，1：根据场景智能转换为阿拉伯数字。默认值为1。
     * @param string $HotwordId 热词id。用于调用对应的热词表，如果在调用语音识别服务时，不进行单独的热词id设置，自动生效默认热词；如果进行了单独的热词id设置，那么将生效单独设置的热词id。
     * @param string $CustomizationId 自学习模型 id。如设置了该参数，将生效对应的自学习模型。
     * @param integer $ReinforceHotword 热词增强功能。1:开启后（仅支持8k_zh,16k_zh），将开启同音替换功能，同音字、词在热词中配置。举例：热词配置“蜜制”并开启增强功能后，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。
     * @param string $HotwordList 临时热词表：该参数用于提升识别准确率。
单个热词限制："热词|权重"，单个热词不超过30个字符（最多10个汉字），权重1-11或者100，如：“腾讯云|5” 或 “ASR|11”；
临时热词表限制：多个热词用英文逗号分割，最多支持128个热词，如：“腾讯云|10,语音识别|5,ASR|11”；
参数 hotword_list（临时热词表） 与 hotword_id（热词表） 区别：
hotword_id：热词表。需要先在控制台或接口创建热词表，获得对应hotword_id传入参数来使用热词功能；
hotword_list：临时热词表。每次请求时直接传入临时热词表来使用热词功能，云端不保留临时热词表。适用于有极大量热词需求的用户；
注意：
• 如果同时传入了 hotword_id 和 hotword_list，会优先使用 hotword_list；
• 热词权重设置为11时，当前热词将升级为超级热词，建议仅将重要且必须生效的热词设置到11，设置过多权重为11的热词将影响整体字准率。
• 热词权重设置为100时，当前热词开启热词增强同音替换功能（仅支持8k_zh,16k_zh），举例：热词配置“蜜制|100”时，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。建议仅将重要且必须生效的热词设置到100，设置过多权重为100的热词将影响整体字准率。
     * @param integer $InputSampleRate 支持pcm格式的8k音频在与引擎采样率不匹配的情况下升采样到16k后识别，能有效提升识别准确率。仅支持：8000。如：传入 8000 ，则pcm音频采样率为8k，当引擎选用16k_zh， 那么该8k采样率的pcm音频可以在16k_zh引擎下正常识别。 注：此参数仅适用于pcm格式音频，不传入值将维持默认状态，即默认调用的引擎采样率等于pcm音频采样率。
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
        if (array_key_exists("EngSerViceType",$param) and $param["EngSerViceType"] !== null) {
            $this->EngSerViceType = $param["EngSerViceType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("VoiceFormat",$param) and $param["VoiceFormat"] !== null) {
            $this->VoiceFormat = $param["VoiceFormat"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SubServiceType",$param) and $param["SubServiceType"] !== null) {
            $this->SubServiceType = $param["SubServiceType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("UsrAudioKey",$param) and $param["UsrAudioKey"] !== null) {
            $this->UsrAudioKey = $param["UsrAudioKey"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("DataLen",$param) and $param["DataLen"] !== null) {
            $this->DataLen = $param["DataLen"];
        }

        if (array_key_exists("WordInfo",$param) and $param["WordInfo"] !== null) {
            $this->WordInfo = $param["WordInfo"];
        }

        if (array_key_exists("FilterDirty",$param) and $param["FilterDirty"] !== null) {
            $this->FilterDirty = $param["FilterDirty"];
        }

        if (array_key_exists("FilterModal",$param) and $param["FilterModal"] !== null) {
            $this->FilterModal = $param["FilterModal"];
        }

        if (array_key_exists("FilterPunc",$param) and $param["FilterPunc"] !== null) {
            $this->FilterPunc = $param["FilterPunc"];
        }

        if (array_key_exists("ConvertNumMode",$param) and $param["ConvertNumMode"] !== null) {
            $this->ConvertNumMode = $param["ConvertNumMode"];
        }

        if (array_key_exists("HotwordId",$param) and $param["HotwordId"] !== null) {
            $this->HotwordId = $param["HotwordId"];
        }

        if (array_key_exists("CustomizationId",$param) and $param["CustomizationId"] !== null) {
            $this->CustomizationId = $param["CustomizationId"];
        }

        if (array_key_exists("ReinforceHotword",$param) and $param["ReinforceHotword"] !== null) {
            $this->ReinforceHotword = $param["ReinforceHotword"];
        }

        if (array_key_exists("HotwordList",$param) and $param["HotwordList"] !== null) {
            $this->HotwordList = $param["HotwordList"];
        }

        if (array_key_exists("InputSampleRate",$param) and $param["InputSampleRate"] !== null) {
            $this->InputSampleRate = $param["InputSampleRate"];
        }
    }
}
