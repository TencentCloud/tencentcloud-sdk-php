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
 * @method string getEngineModelType() 获取引擎模型类型

电话通讯场景引擎：
**注意：电话通讯场景，请务必使用以下8k引擎**
• 8k_zh：中文电话通讯；
• 8k_en：英文电话通讯；
如您有电话通讯场景识别需求，但发现需求语种仅支持16k，可将8k音频传入下方16k引擎，亦能获取识别结果。但**16k引擎并非基于电话通讯数据训练，无法承诺此种调用方式的识别效果，需由您自行验证识别结果是否可用**

通用场景引擎：
**注意：除电话通讯场景以外的其它识别场景，请务必使用以下16k引擎**
• 16k_zh：中文普通话通用引擎，支持中文普通话和少量英语，使用丰富的中文普通话语料训练，覆盖场景广泛，适用于除电话通讯外的所有中文普通话识别场景；
• 16k_zh-PY：中英粤混合引擎，使用一个引擎同时识别中文普通话、英语、粤语三个语言;
• 16k_zh_dialect：中文普通话+多方言混合引擎，除普通话外支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
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
• 16k_zh_medical：中文医疗引擎
 * @method void setEngineModelType(string $EngineModelType) 设置引擎模型类型

电话通讯场景引擎：
**注意：电话通讯场景，请务必使用以下8k引擎**
• 8k_zh：中文电话通讯；
• 8k_en：英文电话通讯；
如您有电话通讯场景识别需求，但发现需求语种仅支持16k，可将8k音频传入下方16k引擎，亦能获取识别结果。但**16k引擎并非基于电话通讯数据训练，无法承诺此种调用方式的识别效果，需由您自行验证识别结果是否可用**

通用场景引擎：
**注意：除电话通讯场景以外的其它识别场景，请务必使用以下16k引擎**
• 16k_zh：中文普通话通用引擎，支持中文普通话和少量英语，使用丰富的中文普通话语料训练，覆盖场景广泛，适用于除电话通讯外的所有中文普通话识别场景；
• 16k_zh-PY：中英粤混合引擎，使用一个引擎同时识别中文普通话、英语、粤语三个语言;
• 16k_zh_dialect：中文普通话+多方言混合引擎，除普通话外支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
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
• 16k_zh_medical：中文医疗引擎
 * @method integer getChannelNum() 获取识别声道数
1：单声道（16k音频仅支持单声道，**请勿**设置为双声道）；
2：双声道（仅支持8k电话音频，且双声道应分别为通话双方）

注意：
• 16k音频：仅支持单声道识别，**需设置ChannelNum=1**；
• 8k电话音频：支持单声道、双声道识别，**建议设置ChannelNum=2，即双声道**。双声道能够物理区分说话人、避免说话双方重叠产生的识别错误，能达到最好的说话人分离效果和识别效果。设置双声道后，将自动区分说话人，因此**无需再开启说话人分离功能**，相关参数（**SpeakerDiarization、SpeakerNumber**）使用默认值即可
 * @method void setChannelNum(integer $ChannelNum) 设置识别声道数
1：单声道（16k音频仅支持单声道，**请勿**设置为双声道）；
2：双声道（仅支持8k电话音频，且双声道应分别为通话双方）

注意：
• 16k音频：仅支持单声道识别，**需设置ChannelNum=1**；
• 8k电话音频：支持单声道、双声道识别，**建议设置ChannelNum=2，即双声道**。双声道能够物理区分说话人、避免说话双方重叠产生的识别错误，能达到最好的说话人分离效果和识别效果。设置双声道后，将自动区分说话人，因此**无需再开启说话人分离功能**，相关参数（**SpeakerDiarization、SpeakerNumber**）使用默认值即可
 * @method integer getResTextFormat() 获取识别结果返回样式
0：基础识别结果（仅包含有效人声时间戳，无词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)）；
1：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值，**不含标点**）；
2：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点）；
3：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），且识别结果按标点符号分段，**适用字幕场景**；
4：**【增值付费功能】**基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），且识别结果按nlp语义分段，**适用会议、庭审记录转写等场景**，仅支持8k_zh/16k_zh引擎
5：**【增值付费功能】**基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），并输出口语转书面语转写结果，该结果去除语气词、重复词、精简冗余表达，并修正发言人口误，实现口语转书面语的效果，**适用于线上、线下会议直接总结为书面会议纪要的场景**，仅支持8k_zh/16k_zh引擎

注意：
如果传入参数值4，需确保账号已购买[语义分段资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值4，将[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)**
如果传入参数值5，需确保账号已购买[口语转书面语资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值5，将自动计费[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)**
 * @method void setResTextFormat(integer $ResTextFormat) 设置识别结果返回样式
0：基础识别结果（仅包含有效人声时间戳，无词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)）；
1：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值，**不含标点**）；
2：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点）；
3：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），且识别结果按标点符号分段，**适用字幕场景**；
4：**【增值付费功能】**基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），且识别结果按nlp语义分段，**适用会议、庭审记录转写等场景**，仅支持8k_zh/16k_zh引擎
5：**【增值付费功能】**基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），并输出口语转书面语转写结果，该结果去除语气词、重复词、精简冗余表达，并修正发言人口误，实现口语转书面语的效果，**适用于线上、线下会议直接总结为书面会议纪要的场景**，仅支持8k_zh/16k_zh引擎

注意：
如果传入参数值4，需确保账号已购买[语义分段资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值4，将[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)**
如果传入参数值5，需确保账号已购买[口语转书面语资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值5，将自动计费[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)**
 * @method integer getSourceType() 获取音频数据来源
0：音频URL；
1：音频数据（post body）
 * @method void setSourceType(integer $SourceType) 设置音频数据来源
0：音频URL；
1：音频数据（post body）
 * @method string getData() 获取音频数据base64编码
**当 SourceType 值为 1 时须填写该字段，为 0 时不需要填写**

注意：音频数据要小于5MB（含）
 * @method void setData(string $Data) 设置音频数据base64编码
**当 SourceType 值为 1 时须填写该字段，为 0 时不需要填写**

注意：音频数据要小于5MB（含）
 * @method integer getDataLen() 获取数据长度（此数据长度为数据未进行base64编码时的长度）
 * @method void setDataLen(integer $DataLen) 设置数据长度（此数据长度为数据未进行base64编码时的长度）
 * @method string getUrl() 获取音频URL的地址（需要公网环境浏览器可下载）
**当 SourceType 值为 0 时须填写该字段，为 1 时不需要填写**

注意：
1. 请确保录音文件时长在5个小时（含）之内，否则可能识别失败；
2. 请保证文件的下载速度，否则可能下载失败
 * @method void setUrl(string $Url) 设置音频URL的地址（需要公网环境浏览器可下载）
**当 SourceType 值为 0 时须填写该字段，为 1 时不需要填写**

注意：
1. 请确保录音文件时长在5个小时（含）之内，否则可能识别失败；
2. 请保证文件的下载速度，否则可能下载失败
 * @method string getCallbackUrl() 获取回调 URL
用户自行搭建的用于接收识别结果的服务URL
回调格式和内容详见：[录音识别回调说明](https://cloud.tencent.com/document/product/1093/52632)

注意：
如果用户使用轮询方式获取识别结果，则无需提交该参数
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调 URL
用户自行搭建的用于接收识别结果的服务URL
回调格式和内容详见：[录音识别回调说明](https://cloud.tencent.com/document/product/1093/52632)

注意：
如果用户使用轮询方式获取识别结果，则无需提交该参数
 * @method integer getSpeakerDiarization() 获取是否开启说话人分离
0：不开启；
1：开启（仅支持以下引擎：8k_zh/16k_zh/16k_ms/16k_en/16k_id，且ChannelNum=1时可用）；
默认值为 0

注意：
8k双声道电话音频请按 **ChannelNum 识别声道数** 的参数描述使用默认值
 * @method void setSpeakerDiarization(integer $SpeakerDiarization) 设置是否开启说话人分离
0：不开启；
1：开启（仅支持以下引擎：8k_zh/16k_zh/16k_ms/16k_en/16k_id，且ChannelNum=1时可用）；
默认值为 0

注意：
8k双声道电话音频请按 **ChannelNum 识别声道数** 的参数描述使用默认值
 * @method integer getSpeakerNumber() 获取说话人分离人数
**需配合开启说话人分离使用，不开启无效**，取值范围：0-10
0：自动分离（最多分离出20个人）；
1-10：指定人数分离；
默认值为 0
 * @method void setSpeakerNumber(integer $SpeakerNumber) 设置说话人分离人数
**需配合开启说话人分离使用，不开启无效**，取值范围：0-10
0：自动分离（最多分离出20个人）；
1-10：指定人数分离；
默认值为 0
 * @method string getHotwordId() 获取热词表id
如不设置该参数，将自动生效默认热词表；
如设置该参数，将生效对应id的热词表；
点击这里查看[热词表配置方法](https://cloud.tencent.com/document/product/1093/40996)
 * @method void setHotwordId(string $HotwordId) 设置热词表id
如不设置该参数，将自动生效默认热词表；
如设置该参数，将生效对应id的热词表；
点击这里查看[热词表配置方法](https://cloud.tencent.com/document/product/1093/40996)
 * @method integer getReinforceHotword() 获取热词增强功能（目前仅支持8k_zh/16k_zh引擎）
1：开启热词增强功能

注意：热词增强功能开启后，将对传入的热词表id开启同音替换功能，可以在这里查看[热词表配置方法](https://cloud.tencent.com/document/product/1093/40996)。效果举例：在热词表中配置“蜜制”一词，并开启增强功能，与“蜜制”（mìzhì）同音同调的“秘制”（mìzhì）的识别结果会被强制替换成“蜜制”。**建议客户根据实际的业务需求开启该功能**
 * @method void setReinforceHotword(integer $ReinforceHotword) 设置热词增强功能（目前仅支持8k_zh/16k_zh引擎）
1：开启热词增强功能

注意：热词增强功能开启后，将对传入的热词表id开启同音替换功能，可以在这里查看[热词表配置方法](https://cloud.tencent.com/document/product/1093/40996)。效果举例：在热词表中配置“蜜制”一词，并开启增强功能，与“蜜制”（mìzhì）同音同调的“秘制”（mìzhì）的识别结果会被强制替换成“蜜制”。**建议客户根据实际的业务需求开启该功能**
 * @method string getCustomizationId() 获取自学习定制模型 id
如设置了该参数，将生效对应id的自学习定制模型；
点击这里查看[自学习定制模型配置方法](https://cloud.tencent.com/document/product/1093/38416)
 * @method void setCustomizationId(string $CustomizationId) 设置自学习定制模型 id
如设置了该参数，将生效对应id的自学习定制模型；
点击这里查看[自学习定制模型配置方法](https://cloud.tencent.com/document/product/1093/38416)
 * @method integer getEmotionRecognition() 获取**【增值付费功能】**情绪识别能力（目前仅支持16k_zh）
0：不开启；
1：开启情绪识别，但不在文本展示情绪标签；
2：开启情绪识别，并且在文本展示情绪标签（**该功能需要设置ResTextFormat 大于0**）
默认值为0
支持的情绪分类为：高兴、伤心、愤怒

注意：
1. **本功能为增值服务**，需将参数设置为1或2时方可按对应方式生效；
2. 如果传入参数值1或2，需确保账号已购买[情绪识别资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值1或2，将[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)）**；
3. 参数设置为0时，无需购买资源包，也不会消耗情绪识别对应资源
 * @method void setEmotionRecognition(integer $EmotionRecognition) 设置**【增值付费功能】**情绪识别能力（目前仅支持16k_zh）
0：不开启；
1：开启情绪识别，但不在文本展示情绪标签；
2：开启情绪识别，并且在文本展示情绪标签（**该功能需要设置ResTextFormat 大于0**）
默认值为0
支持的情绪分类为：高兴、伤心、愤怒

注意：
1. **本功能为增值服务**，需将参数设置为1或2时方可按对应方式生效；
2. 如果传入参数值1或2，需确保账号已购买[情绪识别资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值1或2，将[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)）**；
3. 参数设置为0时，无需购买资源包，也不会消耗情绪识别对应资源
 * @method integer getEmotionalEnergy() 获取情绪能量值
取值为音量分贝值/10，取值范围：[1,10]，值越高情绪越强烈
0：不开启；
1：开启；
默认值为0
 * @method void setEmotionalEnergy(integer $EmotionalEnergy) 设置情绪能量值
取值为音量分贝值/10，取值范围：[1,10]，值越高情绪越强烈
0：不开启；
1：开启；
默认值为0
 * @method integer getConvertNumMode() 获取阿拉伯数字智能转换（目前仅支持8k_zh/16k_zh引擎）
0：不转换，直接输出中文数字；
1：根据场景智能转换为阿拉伯数字；
3：打开数学相关数字转换（如：阿尔法转写为α）；
默认值为 1
 * @method void setConvertNumMode(integer $ConvertNumMode) 设置阿拉伯数字智能转换（目前仅支持8k_zh/16k_zh引擎）
0：不转换，直接输出中文数字；
1：根据场景智能转换为阿拉伯数字；
3：打开数学相关数字转换（如：阿尔法转写为α）；
默认值为 1
 * @method integer getFilterDirty() 获取脏词过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤脏词；
1：过滤脏词；
2：将脏词替换为 * ；
默认值为 0
 * @method void setFilterDirty(integer $FilterDirty) 设置脏词过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤脏词；
1：过滤脏词；
2：将脏词替换为 * ；
默认值为 0
 * @method integer getFilterPunc() 获取标点符号过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤标点；
1：过滤句末标点；
2：过滤所有标点；
默认值为 0
 * @method void setFilterPunc(integer $FilterPunc) 设置标点符号过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤标点；
1：过滤句末标点；
2：过滤所有标点；
默认值为 0
 * @method integer getFilterModal() 获取语气词过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤语气词；
1：过滤部分语气词；
2：严格过滤语气词；
默认值为 0
 * @method void setFilterModal(integer $FilterModal) 设置语气词过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤语气词；
1：过滤部分语气词；
2：严格过滤语气词；
默认值为 0
 * @method integer getSentenceMaxLength() 获取单标点最多字数
**可控制单行字幕最大字数，适用于字幕生成场景**，取值范围：[6，40]
0：不开启该功能；
默认值为0

注意：需设置ResTextFormat为3，解析返回的ResultDetail列表，通过结构中FinalSentence获取单个标点断句结果
 * @method void setSentenceMaxLength(integer $SentenceMaxLength) 设置单标点最多字数
**可控制单行字幕最大字数，适用于字幕生成场景**，取值范围：[6，40]
0：不开启该功能；
默认值为0

注意：需设置ResTextFormat为3，解析返回的ResultDetail列表，通过结构中FinalSentence获取单个标点断句结果
 * @method string getExtra() 获取附加参数**（该参数无意义，忽略即可）**
 * @method void setExtra(string $Extra) 设置附加参数**（该参数无意义，忽略即可）**
 */
class CreateRecTaskRequest extends AbstractModel
{
    /**
     * @var string 引擎模型类型

电话通讯场景引擎：
**注意：电话通讯场景，请务必使用以下8k引擎**
• 8k_zh：中文电话通讯；
• 8k_en：英文电话通讯；
如您有电话通讯场景识别需求，但发现需求语种仅支持16k，可将8k音频传入下方16k引擎，亦能获取识别结果。但**16k引擎并非基于电话通讯数据训练，无法承诺此种调用方式的识别效果，需由您自行验证识别结果是否可用**

通用场景引擎：
**注意：除电话通讯场景以外的其它识别场景，请务必使用以下16k引擎**
• 16k_zh：中文普通话通用引擎，支持中文普通话和少量英语，使用丰富的中文普通话语料训练，覆盖场景广泛，适用于除电话通讯外的所有中文普通话识别场景；
• 16k_zh-PY：中英粤混合引擎，使用一个引擎同时识别中文普通话、英语、粤语三个语言;
• 16k_zh_dialect：中文普通话+多方言混合引擎，除普通话外支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
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
• 16k_zh_medical：中文医疗引擎
     */
    public $EngineModelType;

    /**
     * @var integer 识别声道数
1：单声道（16k音频仅支持单声道，**请勿**设置为双声道）；
2：双声道（仅支持8k电话音频，且双声道应分别为通话双方）

注意：
• 16k音频：仅支持单声道识别，**需设置ChannelNum=1**；
• 8k电话音频：支持单声道、双声道识别，**建议设置ChannelNum=2，即双声道**。双声道能够物理区分说话人、避免说话双方重叠产生的识别错误，能达到最好的说话人分离效果和识别效果。设置双声道后，将自动区分说话人，因此**无需再开启说话人分离功能**，相关参数（**SpeakerDiarization、SpeakerNumber**）使用默认值即可
     */
    public $ChannelNum;

    /**
     * @var integer 识别结果返回样式
0：基础识别结果（仅包含有效人声时间戳，无词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)）；
1：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值，**不含标点**）；
2：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点）；
3：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），且识别结果按标点符号分段，**适用字幕场景**；
4：**【增值付费功能】**基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），且识别结果按nlp语义分段，**适用会议、庭审记录转写等场景**，仅支持8k_zh/16k_zh引擎
5：**【增值付费功能】**基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），并输出口语转书面语转写结果，该结果去除语气词、重复词、精简冗余表达，并修正发言人口误，实现口语转书面语的效果，**适用于线上、线下会议直接总结为书面会议纪要的场景**，仅支持8k_zh/16k_zh引擎

注意：
如果传入参数值4，需确保账号已购买[语义分段资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值4，将[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)**
如果传入参数值5，需确保账号已购买[口语转书面语资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值5，将自动计费[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)**
     */
    public $ResTextFormat;

    /**
     * @var integer 音频数据来源
0：音频URL；
1：音频数据（post body）
     */
    public $SourceType;

    /**
     * @var string 音频数据base64编码
**当 SourceType 值为 1 时须填写该字段，为 0 时不需要填写**

注意：音频数据要小于5MB（含）
     */
    public $Data;

    /**
     * @var integer 数据长度（此数据长度为数据未进行base64编码时的长度）
     */
    public $DataLen;

    /**
     * @var string 音频URL的地址（需要公网环境浏览器可下载）
**当 SourceType 值为 0 时须填写该字段，为 1 时不需要填写**

注意：
1. 请确保录音文件时长在5个小时（含）之内，否则可能识别失败；
2. 请保证文件的下载速度，否则可能下载失败
     */
    public $Url;

    /**
     * @var string 回调 URL
用户自行搭建的用于接收识别结果的服务URL
回调格式和内容详见：[录音识别回调说明](https://cloud.tencent.com/document/product/1093/52632)

注意：
如果用户使用轮询方式获取识别结果，则无需提交该参数
     */
    public $CallbackUrl;

    /**
     * @var integer 是否开启说话人分离
0：不开启；
1：开启（仅支持以下引擎：8k_zh/16k_zh/16k_ms/16k_en/16k_id，且ChannelNum=1时可用）；
默认值为 0

注意：
8k双声道电话音频请按 **ChannelNum 识别声道数** 的参数描述使用默认值
     */
    public $SpeakerDiarization;

    /**
     * @var integer 说话人分离人数
**需配合开启说话人分离使用，不开启无效**，取值范围：0-10
0：自动分离（最多分离出20个人）；
1-10：指定人数分离；
默认值为 0
     */
    public $SpeakerNumber;

    /**
     * @var string 热词表id
如不设置该参数，将自动生效默认热词表；
如设置该参数，将生效对应id的热词表；
点击这里查看[热词表配置方法](https://cloud.tencent.com/document/product/1093/40996)
     */
    public $HotwordId;

    /**
     * @var integer 热词增强功能（目前仅支持8k_zh/16k_zh引擎）
1：开启热词增强功能

注意：热词增强功能开启后，将对传入的热词表id开启同音替换功能，可以在这里查看[热词表配置方法](https://cloud.tencent.com/document/product/1093/40996)。效果举例：在热词表中配置“蜜制”一词，并开启增强功能，与“蜜制”（mìzhì）同音同调的“秘制”（mìzhì）的识别结果会被强制替换成“蜜制”。**建议客户根据实际的业务需求开启该功能**
     */
    public $ReinforceHotword;

    /**
     * @var string 自学习定制模型 id
如设置了该参数，将生效对应id的自学习定制模型；
点击这里查看[自学习定制模型配置方法](https://cloud.tencent.com/document/product/1093/38416)
     */
    public $CustomizationId;

    /**
     * @var integer **【增值付费功能】**情绪识别能力（目前仅支持16k_zh）
0：不开启；
1：开启情绪识别，但不在文本展示情绪标签；
2：开启情绪识别，并且在文本展示情绪标签（**该功能需要设置ResTextFormat 大于0**）
默认值为0
支持的情绪分类为：高兴、伤心、愤怒

注意：
1. **本功能为增值服务**，需将参数设置为1或2时方可按对应方式生效；
2. 如果传入参数值1或2，需确保账号已购买[情绪识别资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值1或2，将[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)）**；
3. 参数设置为0时，无需购买资源包，也不会消耗情绪识别对应资源
     */
    public $EmotionRecognition;

    /**
     * @var integer 情绪能量值
取值为音量分贝值/10，取值范围：[1,10]，值越高情绪越强烈
0：不开启；
1：开启；
默认值为0
     */
    public $EmotionalEnergy;

    /**
     * @var integer 阿拉伯数字智能转换（目前仅支持8k_zh/16k_zh引擎）
0：不转换，直接输出中文数字；
1：根据场景智能转换为阿拉伯数字；
3：打开数学相关数字转换（如：阿尔法转写为α）；
默认值为 1
     */
    public $ConvertNumMode;

    /**
     * @var integer 脏词过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤脏词；
1：过滤脏词；
2：将脏词替换为 * ；
默认值为 0
     */
    public $FilterDirty;

    /**
     * @var integer 标点符号过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤标点；
1：过滤句末标点；
2：过滤所有标点；
默认值为 0
     */
    public $FilterPunc;

    /**
     * @var integer 语气词过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤语气词；
1：过滤部分语气词；
2：严格过滤语气词；
默认值为 0
     */
    public $FilterModal;

    /**
     * @var integer 单标点最多字数
**可控制单行字幕最大字数，适用于字幕生成场景**，取值范围：[6，40]
0：不开启该功能；
默认值为0

注意：需设置ResTextFormat为3，解析返回的ResultDetail列表，通过结构中FinalSentence获取单个标点断句结果
     */
    public $SentenceMaxLength;

    /**
     * @var string 附加参数**（该参数无意义，忽略即可）**
     */
    public $Extra;

    /**
     * @param string $EngineModelType 引擎模型类型

电话通讯场景引擎：
**注意：电话通讯场景，请务必使用以下8k引擎**
• 8k_zh：中文电话通讯；
• 8k_en：英文电话通讯；
如您有电话通讯场景识别需求，但发现需求语种仅支持16k，可将8k音频传入下方16k引擎，亦能获取识别结果。但**16k引擎并非基于电话通讯数据训练，无法承诺此种调用方式的识别效果，需由您自行验证识别结果是否可用**

通用场景引擎：
**注意：除电话通讯场景以外的其它识别场景，请务必使用以下16k引擎**
• 16k_zh：中文普通话通用引擎，支持中文普通话和少量英语，使用丰富的中文普通话语料训练，覆盖场景广泛，适用于除电话通讯外的所有中文普通话识别场景；
• 16k_zh-PY：中英粤混合引擎，使用一个引擎同时识别中文普通话、英语、粤语三个语言;
• 16k_zh_dialect：中文普通话+多方言混合引擎，除普通话外支持23种方言（上海话、四川话、武汉话、贵阳话、昆明话、西安话、郑州话、太原话、兰州话、银川话、西宁话、南京话、合肥话、南昌话、长沙话、苏州话、杭州话、济南话、天津话、石家庄话、黑龙江话、吉林话、辽宁话）；
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
• 16k_zh_medical：中文医疗引擎
     * @param integer $ChannelNum 识别声道数
1：单声道（16k音频仅支持单声道，**请勿**设置为双声道）；
2：双声道（仅支持8k电话音频，且双声道应分别为通话双方）

注意：
• 16k音频：仅支持单声道识别，**需设置ChannelNum=1**；
• 8k电话音频：支持单声道、双声道识别，**建议设置ChannelNum=2，即双声道**。双声道能够物理区分说话人、避免说话双方重叠产生的识别错误，能达到最好的说话人分离效果和识别效果。设置双声道后，将自动区分说话人，因此**无需再开启说话人分离功能**，相关参数（**SpeakerDiarization、SpeakerNumber**）使用默认值即可
     * @param integer $ResTextFormat 识别结果返回样式
0：基础识别结果（仅包含有效人声时间戳，无词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)）；
1：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值，**不含标点**）；
2：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点）；
3：基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），且识别结果按标点符号分段，**适用字幕场景**；
4：**【增值付费功能】**基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），且识别结果按nlp语义分段，**适用会议、庭审记录转写等场景**，仅支持8k_zh/16k_zh引擎
5：**【增值付费功能】**基础识别结果之上，增加词粒度的[详细识别结果](https://cloud.tencent.com/document/api/1093/37824#SentenceDetail)（包含词级别时间戳、语速值和标点），并输出口语转书面语转写结果，该结果去除语气词、重复词、精简冗余表达，并修正发言人口误，实现口语转书面语的效果，**适用于线上、线下会议直接总结为书面会议纪要的场景**，仅支持8k_zh/16k_zh引擎

注意：
如果传入参数值4，需确保账号已购买[语义分段资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值4，将[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)**
如果传入参数值5，需确保账号已购买[口语转书面语资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值5，将自动计费[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)**
     * @param integer $SourceType 音频数据来源
0：音频URL；
1：音频数据（post body）
     * @param string $Data 音频数据base64编码
**当 SourceType 值为 1 时须填写该字段，为 0 时不需要填写**

注意：音频数据要小于5MB（含）
     * @param integer $DataLen 数据长度（此数据长度为数据未进行base64编码时的长度）
     * @param string $Url 音频URL的地址（需要公网环境浏览器可下载）
**当 SourceType 值为 0 时须填写该字段，为 1 时不需要填写**

注意：
1. 请确保录音文件时长在5个小时（含）之内，否则可能识别失败；
2. 请保证文件的下载速度，否则可能下载失败
     * @param string $CallbackUrl 回调 URL
用户自行搭建的用于接收识别结果的服务URL
回调格式和内容详见：[录音识别回调说明](https://cloud.tencent.com/document/product/1093/52632)

注意：
如果用户使用轮询方式获取识别结果，则无需提交该参数
     * @param integer $SpeakerDiarization 是否开启说话人分离
0：不开启；
1：开启（仅支持以下引擎：8k_zh/16k_zh/16k_ms/16k_en/16k_id，且ChannelNum=1时可用）；
默认值为 0

注意：
8k双声道电话音频请按 **ChannelNum 识别声道数** 的参数描述使用默认值
     * @param integer $SpeakerNumber 说话人分离人数
**需配合开启说话人分离使用，不开启无效**，取值范围：0-10
0：自动分离（最多分离出20个人）；
1-10：指定人数分离；
默认值为 0
     * @param string $HotwordId 热词表id
如不设置该参数，将自动生效默认热词表；
如设置该参数，将生效对应id的热词表；
点击这里查看[热词表配置方法](https://cloud.tencent.com/document/product/1093/40996)
     * @param integer $ReinforceHotword 热词增强功能（目前仅支持8k_zh/16k_zh引擎）
1：开启热词增强功能

注意：热词增强功能开启后，将对传入的热词表id开启同音替换功能，可以在这里查看[热词表配置方法](https://cloud.tencent.com/document/product/1093/40996)。效果举例：在热词表中配置“蜜制”一词，并开启增强功能，与“蜜制”（mìzhì）同音同调的“秘制”（mìzhì）的识别结果会被强制替换成“蜜制”。**建议客户根据实际的业务需求开启该功能**
     * @param string $CustomizationId 自学习定制模型 id
如设置了该参数，将生效对应id的自学习定制模型；
点击这里查看[自学习定制模型配置方法](https://cloud.tencent.com/document/product/1093/38416)
     * @param integer $EmotionRecognition **【增值付费功能】**情绪识别能力（目前仅支持16k_zh）
0：不开启；
1：开启情绪识别，但不在文本展示情绪标签；
2：开启情绪识别，并且在文本展示情绪标签（**该功能需要设置ResTextFormat 大于0**）
默认值为0
支持的情绪分类为：高兴、伤心、愤怒

注意：
1. **本功能为增值服务**，需将参数设置为1或2时方可按对应方式生效；
2. 如果传入参数值1或2，需确保账号已购买[情绪识别资源包](https://cloud.tencent.com/document/product/1093/35686#97ae4aa0-29a0-4066-9f07-ccaf8856a16b)，或账号开启后付费；**若当前账号已开启后付费功能，并传入参数值1或2，将[自动计费](https://cloud.tencent.com/document/product/1093/35686#d912167d-ffd5-41a9-8b1c-2e89845a6852)）**；
3. 参数设置为0时，无需购买资源包，也不会消耗情绪识别对应资源
     * @param integer $EmotionalEnergy 情绪能量值
取值为音量分贝值/10，取值范围：[1,10]，值越高情绪越强烈
0：不开启；
1：开启；
默认值为0
     * @param integer $ConvertNumMode 阿拉伯数字智能转换（目前仅支持8k_zh/16k_zh引擎）
0：不转换，直接输出中文数字；
1：根据场景智能转换为阿拉伯数字；
3：打开数学相关数字转换（如：阿尔法转写为α）；
默认值为 1
     * @param integer $FilterDirty 脏词过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤脏词；
1：过滤脏词；
2：将脏词替换为 * ；
默认值为 0
     * @param integer $FilterPunc 标点符号过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤标点；
1：过滤句末标点；
2：过滤所有标点；
默认值为 0
     * @param integer $FilterModal 语气词过滤（目前仅支持8k_zh/16k_zh引擎）
0：不过滤语气词；
1：过滤部分语气词；
2：严格过滤语气词；
默认值为 0
     * @param integer $SentenceMaxLength 单标点最多字数
**可控制单行字幕最大字数，适用于字幕生成场景**，取值范围：[6，40]
0：不开启该功能；
默认值为0

注意：需设置ResTextFormat为3，解析返回的ResultDetail列表，通过结构中FinalSentence获取单个标点断句结果
     * @param string $Extra 附加参数**（该参数无意义，忽略即可）**
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

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("DataLen",$param) and $param["DataLen"] !== null) {
            $this->DataLen = $param["DataLen"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("SpeakerDiarization",$param) and $param["SpeakerDiarization"] !== null) {
            $this->SpeakerDiarization = $param["SpeakerDiarization"];
        }

        if (array_key_exists("SpeakerNumber",$param) and $param["SpeakerNumber"] !== null) {
            $this->SpeakerNumber = $param["SpeakerNumber"];
        }

        if (array_key_exists("HotwordId",$param) and $param["HotwordId"] !== null) {
            $this->HotwordId = $param["HotwordId"];
        }

        if (array_key_exists("ReinforceHotword",$param) and $param["ReinforceHotword"] !== null) {
            $this->ReinforceHotword = $param["ReinforceHotword"];
        }

        if (array_key_exists("CustomizationId",$param) and $param["CustomizationId"] !== null) {
            $this->CustomizationId = $param["CustomizationId"];
        }

        if (array_key_exists("EmotionRecognition",$param) and $param["EmotionRecognition"] !== null) {
            $this->EmotionRecognition = $param["EmotionRecognition"];
        }

        if (array_key_exists("EmotionalEnergy",$param) and $param["EmotionalEnergy"] !== null) {
            $this->EmotionalEnergy = $param["EmotionalEnergy"];
        }

        if (array_key_exists("ConvertNumMode",$param) and $param["ConvertNumMode"] !== null) {
            $this->ConvertNumMode = $param["ConvertNumMode"];
        }

        if (array_key_exists("FilterDirty",$param) and $param["FilterDirty"] !== null) {
            $this->FilterDirty = $param["FilterDirty"];
        }

        if (array_key_exists("FilterPunc",$param) and $param["FilterPunc"] !== null) {
            $this->FilterPunc = $param["FilterPunc"];
        }

        if (array_key_exists("FilterModal",$param) and $param["FilterModal"] !== null) {
            $this->FilterModal = $param["FilterModal"];
        }

        if (array_key_exists("SentenceMaxLength",$param) and $param["SentenceMaxLength"] !== null) {
            $this->SentenceMaxLength = $param["SentenceMaxLength"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
