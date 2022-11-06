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
namespace TencentCloud\Soe\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TransmitOralProcessWithInit请求参数结构体
 *
 * @method integer getSeqId() 获取流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义，当IsLongLifeSession不为1且为非流式模式时无意义。
注意：序号上限为3000，不能超过上限。
 * @method void setSeqId(integer $SeqId) 设置流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义，当IsLongLifeSession不为1且为非流式模式时无意义。
注意：序号上限为3000，不能超过上限。
 * @method integer getIsEnd() 获取是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义。
 * @method void setIsEnd(integer $IsEnd) 设置是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义。
 * @method integer getVoiceFileType() 获取语音文件类型
1: raw/pcm
2: wav
3: mp3
4: speex
语音文件格式目前仅支持 16k 采样率 16bit 编码单声道，如有不一致可能导致评估不准确或失败。
[音频上传格式](https://cloud.tencent.com/document/product/884/56132)
 * @method void setVoiceFileType(integer $VoiceFileType) 设置语音文件类型
1: raw/pcm
2: wav
3: mp3
4: speex
语音文件格式目前仅支持 16k 采样率 16bit 编码单声道，如有不一致可能导致评估不准确或失败。
[音频上传格式](https://cloud.tencent.com/document/product/884/56132)
 * @method integer getVoiceEncodeType() 获取语音编码类型
1:pcm
 * @method void setVoiceEncodeType(integer $VoiceEncodeType) 设置语音编码类型
1:pcm
 * @method string getUserVoiceData() 获取当前语音数据, 编码格式要求为BASE64且必须保证分片帧完整（16bit的数据必须保证音频长度为偶数）。格式要求参考[音频上传格式](https://cloud.tencent.com/document/product/884/56132)
流式模式下需要将语音数据进行分片处理，参考：[分片大小设置](https://cloud.tencent.com/document/product/884/78985#.E5.88.86.E7.89.87.E5.A4.A7.E5.B0.8F.E8.AE.BE.E7.BD.AE.E4.B8.BA.E5.A4.9A.E5.A4.A7.E6.AF.94.E8.BE.83.E5.90.88.E9.80.82.3F)
如何进行流式分片参考：[流式测试](https://cloud.tencent.com/document/product/884/78824#.E6.B5.81.E5.BC.8F.E8.AF.84.E6.B5.8B)
 * @method void setUserVoiceData(string $UserVoiceData) 设置当前语音数据, 编码格式要求为BASE64且必须保证分片帧完整（16bit的数据必须保证音频长度为偶数）。格式要求参考[音频上传格式](https://cloud.tencent.com/document/product/884/56132)
流式模式下需要将语音数据进行分片处理，参考：[分片大小设置](https://cloud.tencent.com/document/product/884/78985#.E5.88.86.E7.89.87.E5.A4.A7.E5.B0.8F.E8.AE.BE.E7.BD.AE.E4.B8.BA.E5.A4.9A.E5.A4.A7.E6.AF.94.E8.BE.83.E5.90.88.E9.80.82.3F)
如何进行流式分片参考：[流式测试](https://cloud.tencent.com/document/product/884/78824#.E6.B5.81.E5.BC.8F.E8.AF.84.E6.B5.8B)
 * @method string getSessionId() 获取语音段唯一标识，一段完整语音使用一个SessionId，不同语音段的评测需要使用不同的SessionId。一般使用uuid(通用唯一识别码)来作为它的值，要尽量保证SessionId的唯一性。
 * @method void setSessionId(string $SessionId) 设置语音段唯一标识，一段完整语音使用一个SessionId，不同语音段的评测需要使用不同的SessionId。一般使用uuid(通用唯一识别码)来作为它的值，要尽量保证SessionId的唯一性。
 * @method string getRefText() 获取被评估语音对应的文本，仅支持中文和英文。
句子模式下不超过个 30 单词或者中文文字，段落模式不超过 120 单词或者中文文字，中文评估使用 utf-8 编码，自由说模式RefText可以不填。
关于RefText的文本键入要求，请参考[评测模式介绍](https://cloud.tencent.com/document/product/884/56131)。
如需要在评测模式下使用自定义注音（支持中英文），可以通过设置「TextMode」参数实现，设置方式请参考[音素标注](https://cloud.tencent.com/document/product/884/33698)。
 * @method void setRefText(string $RefText) 设置被评估语音对应的文本，仅支持中文和英文。
句子模式下不超过个 30 单词或者中文文字，段落模式不超过 120 单词或者中文文字，中文评估使用 utf-8 编码，自由说模式RefText可以不填。
关于RefText的文本键入要求，请参考[评测模式介绍](https://cloud.tencent.com/document/product/884/56131)。
如需要在评测模式下使用自定义注音（支持中英文），可以通过设置「TextMode」参数实现，设置方式请参考[音素标注](https://cloud.tencent.com/document/product/884/33698)。
 * @method integer getWorkMode() 获取语音输入模式
0：流式分片
1：非流式一次性评估
推荐使用流式分片传输。
 * @method void setWorkMode(integer $WorkMode) 设置语音输入模式
0：流式分片
1：非流式一次性评估
推荐使用流式分片传输。
 * @method integer getEvalMode() 获取评测模式
0：单词/单字模式（中文评测模式下为单字模式）
1：句子模式
2：段落模式
3：自由说模式
4：单词音素纠错模式
5：情景评测模式
6：句子多分支评测模式
7：单词实时评测模式
8：拼音评测模式
关于每种评测模式的详细介绍，以及适用场景，请参考[评测模式介绍](https://cloud.tencent.com/document/product/884/56131)。
 * @method void setEvalMode(integer $EvalMode) 设置评测模式
0：单词/单字模式（中文评测模式下为单字模式）
1：句子模式
2：段落模式
3：自由说模式
4：单词音素纠错模式
5：情景评测模式
6：句子多分支评测模式
7：单词实时评测模式
8：拼音评测模式
关于每种评测模式的详细介绍，以及适用场景，请参考[评测模式介绍](https://cloud.tencent.com/document/product/884/56131)。
 * @method float getScoreCoeff() 获取评价苛刻指数。取值为[1.0 - 4.0]范围内的浮点数，用于平滑不同年龄段的分数。
1.0：适用于最小年龄段用户，一般对应儿童应用场景；
4.0：适用于最高年龄段用户，一般对应成人严格打分场景。
苛刻度影响范围参考：[苛刻度影响范围](https://cloud.tencent.com/document/product/884/78824#.E8.8B.9B.E5.88.BB.E5.BA.A6)
 * @method void setScoreCoeff(float $ScoreCoeff) 设置评价苛刻指数。取值为[1.0 - 4.0]范围内的浮点数，用于平滑不同年龄段的分数。
1.0：适用于最小年龄段用户，一般对应儿童应用场景；
4.0：适用于最高年龄段用户，一般对应成人严格打分场景。
苛刻度影响范围参考：[苛刻度影响范围](https://cloud.tencent.com/document/product/884/78824#.E8.8B.9B.E5.88.BB.E5.BA.A6)
 * @method string getSoeAppId() 获取业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，新的 SoeAppId 可以在[控制台](https://console.cloud.tencent.com/soe)【应用管理】下新建。如果没有新建SoeAppId，请勿填入该参数，否则会报欠费错误。使用指南：[业务应用](https://cloud.tencent.com/document/product/884/78824#.E4.B8.9A.E5.8A.A1.E5.BA.94.E7.94.A8)
 * @method void setSoeAppId(string $SoeAppId) 设置业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，新的 SoeAppId 可以在[控制台](https://console.cloud.tencent.com/soe)【应用管理】下新建。如果没有新建SoeAppId，请勿填入该参数，否则会报欠费错误。使用指南：[业务应用](https://cloud.tencent.com/document/product/884/78824#.E4.B8.9A.E5.8A.A1.E5.BA.94.E7.94.A8)
 * @method integer getStorageMode() 获取音频存储模式，此参数已废弃，无需设置，设置与否都默认为0不存储；
注：有存储需求的用户建议自行存储至腾讯云COS[对象存储](https://cloud.tencent.com/product/cos)使用。
 * @method void setStorageMode(integer $StorageMode) 设置音频存储模式，此参数已废弃，无需设置，设置与否都默认为0不存储；
注：有存储需求的用户建议自行存储至腾讯云COS[对象存储](https://cloud.tencent.com/product/cos)使用。
 * @method integer getSentenceInfoEnabled() 获取输出断句中间结果标识
0：不输出（默认）
1：输出，通过设置该参数
可以在评估过程中的分片传输请求中，返回已经评估断句的中间结果，中间结果可用于客户端 UI 更新，输出结果为TransmitOralProcessWithInit请求返回结果 SentenceInfoSet 字段。
 * @method void setSentenceInfoEnabled(integer $SentenceInfoEnabled) 设置输出断句中间结果标识
0：不输出（默认）
1：输出，通过设置该参数
可以在评估过程中的分片传输请求中，返回已经评估断句的中间结果，中间结果可用于客户端 UI 更新，输出结果为TransmitOralProcessWithInit请求返回结果 SentenceInfoSet 字段。
 * @method integer getServerType() 获取评估语言
0：英文（默认）
1：中文
 * @method void setServerType(integer $ServerType) 设置评估语言
0：英文（默认）
1：中文
 * @method integer getIsAsync() 获取异步模式标识
0：同步模式（默认）
1：异步模式（一般情况不建议使用异步模式，如需使用参考：[异步轮询](https://cloud.tencent.com/document/product/884/78824#.E7.BB.93.E6.9E.9C.E6.9F.A5.E8.AF.A2)）
可选值参考[服务模式](https://cloud.tencent.com/document/product/884/33697)。
 * @method void setIsAsync(integer $IsAsync) 设置异步模式标识
0：同步模式（默认）
1：异步模式（一般情况不建议使用异步模式，如需使用参考：[异步轮询](https://cloud.tencent.com/document/product/884/78824#.E7.BB.93.E6.9E.9C.E6.9F.A5.E8.AF.A2)）
可选值参考[服务模式](https://cloud.tencent.com/document/product/884/33697)。
 * @method integer getIsQuery() 获取查询标识，当该参数为1时，该请求为查询请求，请求返回该 Session 评估结果。
 * @method void setIsQuery(integer $IsQuery) 设置查询标识，当该参数为1时，该请求为查询请求，请求返回该 Session 评估结果。
 * @method integer getTextMode() 获取输入文本模式
0: 普通文本（默认）
1：[音素结构](https://cloud.tencent.com/document/product/884/33698)文本
 * @method void setTextMode(integer $TextMode) 设置输入文本模式
0: 普通文本（默认）
1：[音素结构](https://cloud.tencent.com/document/product/884/33698)文本
 * @method string getKeyword() 获取主题词和关键词
 * @method void setKeyword(string $Keyword) 设置主题词和关键词
 */
class TransmitOralProcessWithInitRequest extends AbstractModel
{
    /**
     * @var integer 流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义，当IsLongLifeSession不为1且为非流式模式时无意义。
注意：序号上限为3000，不能超过上限。
     */
    public $SeqId;

    /**
     * @var integer 是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义。
     */
    public $IsEnd;

    /**
     * @var integer 语音文件类型
1: raw/pcm
2: wav
3: mp3
4: speex
语音文件格式目前仅支持 16k 采样率 16bit 编码单声道，如有不一致可能导致评估不准确或失败。
[音频上传格式](https://cloud.tencent.com/document/product/884/56132)
     */
    public $VoiceFileType;

    /**
     * @var integer 语音编码类型
1:pcm
     */
    public $VoiceEncodeType;

    /**
     * @var string 当前语音数据, 编码格式要求为BASE64且必须保证分片帧完整（16bit的数据必须保证音频长度为偶数）。格式要求参考[音频上传格式](https://cloud.tencent.com/document/product/884/56132)
流式模式下需要将语音数据进行分片处理，参考：[分片大小设置](https://cloud.tencent.com/document/product/884/78985#.E5.88.86.E7.89.87.E5.A4.A7.E5.B0.8F.E8.AE.BE.E7.BD.AE.E4.B8.BA.E5.A4.9A.E5.A4.A7.E6.AF.94.E8.BE.83.E5.90.88.E9.80.82.3F)
如何进行流式分片参考：[流式测试](https://cloud.tencent.com/document/product/884/78824#.E6.B5.81.E5.BC.8F.E8.AF.84.E6.B5.8B)
     */
    public $UserVoiceData;

    /**
     * @var string 语音段唯一标识，一段完整语音使用一个SessionId，不同语音段的评测需要使用不同的SessionId。一般使用uuid(通用唯一识别码)来作为它的值，要尽量保证SessionId的唯一性。
     */
    public $SessionId;

    /**
     * @var string 被评估语音对应的文本，仅支持中文和英文。
句子模式下不超过个 30 单词或者中文文字，段落模式不超过 120 单词或者中文文字，中文评估使用 utf-8 编码，自由说模式RefText可以不填。
关于RefText的文本键入要求，请参考[评测模式介绍](https://cloud.tencent.com/document/product/884/56131)。
如需要在评测模式下使用自定义注音（支持中英文），可以通过设置「TextMode」参数实现，设置方式请参考[音素标注](https://cloud.tencent.com/document/product/884/33698)。
     */
    public $RefText;

    /**
     * @var integer 语音输入模式
0：流式分片
1：非流式一次性评估
推荐使用流式分片传输。
     */
    public $WorkMode;

    /**
     * @var integer 评测模式
0：单词/单字模式（中文评测模式下为单字模式）
1：句子模式
2：段落模式
3：自由说模式
4：单词音素纠错模式
5：情景评测模式
6：句子多分支评测模式
7：单词实时评测模式
8：拼音评测模式
关于每种评测模式的详细介绍，以及适用场景，请参考[评测模式介绍](https://cloud.tencent.com/document/product/884/56131)。
     */
    public $EvalMode;

    /**
     * @var float 评价苛刻指数。取值为[1.0 - 4.0]范围内的浮点数，用于平滑不同年龄段的分数。
1.0：适用于最小年龄段用户，一般对应儿童应用场景；
4.0：适用于最高年龄段用户，一般对应成人严格打分场景。
苛刻度影响范围参考：[苛刻度影响范围](https://cloud.tencent.com/document/product/884/78824#.E8.8B.9B.E5.88.BB.E5.BA.A6)
     */
    public $ScoreCoeff;

    /**
     * @var string 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，新的 SoeAppId 可以在[控制台](https://console.cloud.tencent.com/soe)【应用管理】下新建。如果没有新建SoeAppId，请勿填入该参数，否则会报欠费错误。使用指南：[业务应用](https://cloud.tencent.com/document/product/884/78824#.E4.B8.9A.E5.8A.A1.E5.BA.94.E7.94.A8)
     */
    public $SoeAppId;

    /**
     * @var integer 音频存储模式，此参数已废弃，无需设置，设置与否都默认为0不存储；
注：有存储需求的用户建议自行存储至腾讯云COS[对象存储](https://cloud.tencent.com/product/cos)使用。
     */
    public $StorageMode;

    /**
     * @var integer 输出断句中间结果标识
0：不输出（默认）
1：输出，通过设置该参数
可以在评估过程中的分片传输请求中，返回已经评估断句的中间结果，中间结果可用于客户端 UI 更新，输出结果为TransmitOralProcessWithInit请求返回结果 SentenceInfoSet 字段。
     */
    public $SentenceInfoEnabled;

    /**
     * @var integer 评估语言
0：英文（默认）
1：中文
     */
    public $ServerType;

    /**
     * @var integer 异步模式标识
0：同步模式（默认）
1：异步模式（一般情况不建议使用异步模式，如需使用参考：[异步轮询](https://cloud.tencent.com/document/product/884/78824#.E7.BB.93.E6.9E.9C.E6.9F.A5.E8.AF.A2)）
可选值参考[服务模式](https://cloud.tencent.com/document/product/884/33697)。
     */
    public $IsAsync;

    /**
     * @var integer 查询标识，当该参数为1时，该请求为查询请求，请求返回该 Session 评估结果。
     */
    public $IsQuery;

    /**
     * @var integer 输入文本模式
0: 普通文本（默认）
1：[音素结构](https://cloud.tencent.com/document/product/884/33698)文本
     */
    public $TextMode;

    /**
     * @var string 主题词和关键词
     */
    public $Keyword;

    /**
     * @param integer $SeqId 流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义，当IsLongLifeSession不为1且为非流式模式时无意义。
注意：序号上限为3000，不能超过上限。
     * @param integer $IsEnd 是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义。
     * @param integer $VoiceFileType 语音文件类型
1: raw/pcm
2: wav
3: mp3
4: speex
语音文件格式目前仅支持 16k 采样率 16bit 编码单声道，如有不一致可能导致评估不准确或失败。
[音频上传格式](https://cloud.tencent.com/document/product/884/56132)
     * @param integer $VoiceEncodeType 语音编码类型
1:pcm
     * @param string $UserVoiceData 当前语音数据, 编码格式要求为BASE64且必须保证分片帧完整（16bit的数据必须保证音频长度为偶数）。格式要求参考[音频上传格式](https://cloud.tencent.com/document/product/884/56132)
流式模式下需要将语音数据进行分片处理，参考：[分片大小设置](https://cloud.tencent.com/document/product/884/78985#.E5.88.86.E7.89.87.E5.A4.A7.E5.B0.8F.E8.AE.BE.E7.BD.AE.E4.B8.BA.E5.A4.9A.E5.A4.A7.E6.AF.94.E8.BE.83.E5.90.88.E9.80.82.3F)
如何进行流式分片参考：[流式测试](https://cloud.tencent.com/document/product/884/78824#.E6.B5.81.E5.BC.8F.E8.AF.84.E6.B5.8B)
     * @param string $SessionId 语音段唯一标识，一段完整语音使用一个SessionId，不同语音段的评测需要使用不同的SessionId。一般使用uuid(通用唯一识别码)来作为它的值，要尽量保证SessionId的唯一性。
     * @param string $RefText 被评估语音对应的文本，仅支持中文和英文。
句子模式下不超过个 30 单词或者中文文字，段落模式不超过 120 单词或者中文文字，中文评估使用 utf-8 编码，自由说模式RefText可以不填。
关于RefText的文本键入要求，请参考[评测模式介绍](https://cloud.tencent.com/document/product/884/56131)。
如需要在评测模式下使用自定义注音（支持中英文），可以通过设置「TextMode」参数实现，设置方式请参考[音素标注](https://cloud.tencent.com/document/product/884/33698)。
     * @param integer $WorkMode 语音输入模式
0：流式分片
1：非流式一次性评估
推荐使用流式分片传输。
     * @param integer $EvalMode 评测模式
0：单词/单字模式（中文评测模式下为单字模式）
1：句子模式
2：段落模式
3：自由说模式
4：单词音素纠错模式
5：情景评测模式
6：句子多分支评测模式
7：单词实时评测模式
8：拼音评测模式
关于每种评测模式的详细介绍，以及适用场景，请参考[评测模式介绍](https://cloud.tencent.com/document/product/884/56131)。
     * @param float $ScoreCoeff 评价苛刻指数。取值为[1.0 - 4.0]范围内的浮点数，用于平滑不同年龄段的分数。
1.0：适用于最小年龄段用户，一般对应儿童应用场景；
4.0：适用于最高年龄段用户，一般对应成人严格打分场景。
苛刻度影响范围参考：[苛刻度影响范围](https://cloud.tencent.com/document/product/884/78824#.E8.8B.9B.E5.88.BB.E5.BA.A6)
     * @param string $SoeAppId 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，新的 SoeAppId 可以在[控制台](https://console.cloud.tencent.com/soe)【应用管理】下新建。如果没有新建SoeAppId，请勿填入该参数，否则会报欠费错误。使用指南：[业务应用](https://cloud.tencent.com/document/product/884/78824#.E4.B8.9A.E5.8A.A1.E5.BA.94.E7.94.A8)
     * @param integer $StorageMode 音频存储模式，此参数已废弃，无需设置，设置与否都默认为0不存储；
注：有存储需求的用户建议自行存储至腾讯云COS[对象存储](https://cloud.tencent.com/product/cos)使用。
     * @param integer $SentenceInfoEnabled 输出断句中间结果标识
0：不输出（默认）
1：输出，通过设置该参数
可以在评估过程中的分片传输请求中，返回已经评估断句的中间结果，中间结果可用于客户端 UI 更新，输出结果为TransmitOralProcessWithInit请求返回结果 SentenceInfoSet 字段。
     * @param integer $ServerType 评估语言
0：英文（默认）
1：中文
     * @param integer $IsAsync 异步模式标识
0：同步模式（默认）
1：异步模式（一般情况不建议使用异步模式，如需使用参考：[异步轮询](https://cloud.tencent.com/document/product/884/78824#.E7.BB.93.E6.9E.9C.E6.9F.A5.E8.AF.A2)）
可选值参考[服务模式](https://cloud.tencent.com/document/product/884/33697)。
     * @param integer $IsQuery 查询标识，当该参数为1时，该请求为查询请求，请求返回该 Session 评估结果。
     * @param integer $TextMode 输入文本模式
0: 普通文本（默认）
1：[音素结构](https://cloud.tencent.com/document/product/884/33698)文本
     * @param string $Keyword 主题词和关键词
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
        if (array_key_exists("SeqId",$param) and $param["SeqId"] !== null) {
            $this->SeqId = $param["SeqId"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }

        if (array_key_exists("VoiceFileType",$param) and $param["VoiceFileType"] !== null) {
            $this->VoiceFileType = $param["VoiceFileType"];
        }

        if (array_key_exists("VoiceEncodeType",$param) and $param["VoiceEncodeType"] !== null) {
            $this->VoiceEncodeType = $param["VoiceEncodeType"];
        }

        if (array_key_exists("UserVoiceData",$param) and $param["UserVoiceData"] !== null) {
            $this->UserVoiceData = $param["UserVoiceData"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RefText",$param) and $param["RefText"] !== null) {
            $this->RefText = $param["RefText"];
        }

        if (array_key_exists("WorkMode",$param) and $param["WorkMode"] !== null) {
            $this->WorkMode = $param["WorkMode"];
        }

        if (array_key_exists("EvalMode",$param) and $param["EvalMode"] !== null) {
            $this->EvalMode = $param["EvalMode"];
        }

        if (array_key_exists("ScoreCoeff",$param) and $param["ScoreCoeff"] !== null) {
            $this->ScoreCoeff = $param["ScoreCoeff"];
        }

        if (array_key_exists("SoeAppId",$param) and $param["SoeAppId"] !== null) {
            $this->SoeAppId = $param["SoeAppId"];
        }

        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("SentenceInfoEnabled",$param) and $param["SentenceInfoEnabled"] !== null) {
            $this->SentenceInfoEnabled = $param["SentenceInfoEnabled"];
        }

        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
        }

        if (array_key_exists("IsAsync",$param) and $param["IsAsync"] !== null) {
            $this->IsAsync = $param["IsAsync"];
        }

        if (array_key_exists("IsQuery",$param) and $param["IsQuery"] !== null) {
            $this->IsQuery = $param["IsQuery"];
        }

        if (array_key_exists("TextMode",$param) and $param["TextMode"] !== null) {
            $this->TextMode = $param["TextMode"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
