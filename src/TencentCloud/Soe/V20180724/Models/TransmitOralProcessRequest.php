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
 * @method integer getSeqId() 获取流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义，非流式模式下无意义
 * @method void setSeqId(integer $SeqId) 设置流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义，非流式模式下无意义
 * @method integer getIsEnd() 获取是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义
 * @method void setIsEnd(integer $IsEnd) 设置是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义
 * @method integer getVoiceFileType() 获取语音文件类型 	1:raw, 2:wav, 3:mp3(mp3格式目前仅支持16k采样率16bit编码单声道)
 * @method void setVoiceFileType(integer $VoiceFileType) 设置语音文件类型 	1:raw, 2:wav, 3:mp3(mp3格式目前仅支持16k采样率16bit编码单声道)
 * @method integer getVoiceEncodeType() 获取语音编码类型	1:pcm
 * @method void setVoiceEncodeType(integer $VoiceEncodeType) 设置语音编码类型	1:pcm
 * @method string getUserVoiceData() 获取当前数据包数据, 流式模式下数据包大小可以按需设置，数据包大小必须 >= 4K，编码格式要求为BASE64。
 * @method void setUserVoiceData(string $UserVoiceData) 设置当前数据包数据, 流式模式下数据包大小可以按需设置，数据包大小必须 >= 4K，编码格式要求为BASE64。
 * @method string getSessionId() 获取语音段唯一标识，一个完整语音一个SessionId
 * @method void setSessionId(string $SessionId) 设置语音段唯一标识，一个完整语音一个SessionId
 * @method string getSoeAppId() 获取业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，需要结合[控制台](https://console.cloud.tencent.com/soe)使用。
 * @method void setSoeAppId(string $SoeAppId) 设置业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，需要结合[控制台](https://console.cloud.tencent.com/soe)使用。
 */

/**
 *TransmitOralProcess请求参数结构体
 */
class TransmitOralProcessRequest extends AbstractModel
{
    /**
     * @var integer 流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义，非流式模式下无意义
     */
    public $SeqId;

    /**
     * @var integer 是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义
     */
    public $IsEnd;

    /**
     * @var integer 语音文件类型 	1:raw, 2:wav, 3:mp3(mp3格式目前仅支持16k采样率16bit编码单声道)
     */
    public $VoiceFileType;

    /**
     * @var integer 语音编码类型	1:pcm
     */
    public $VoiceEncodeType;

    /**
     * @var string 当前数据包数据, 流式模式下数据包大小可以按需设置，数据包大小必须 >= 4K，编码格式要求为BASE64。
     */
    public $UserVoiceData;

    /**
     * @var string 语音段唯一标识，一个完整语音一个SessionId
     */
    public $SessionId;

    /**
     * @var string 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，需要结合[控制台](https://console.cloud.tencent.com/soe)使用。
     */
    public $SoeAppId;
    /**
     * @param integer $SeqId 流式数据包的序号，从1开始，当IsEnd字段为1后后续序号无意义，非流式模式下无意义
     * @param integer $IsEnd 是否传输完毕标志，若为0表示未完毕，若为1则传输完毕开始评估，非流式模式下无意义
     * @param integer $VoiceFileType 语音文件类型 	1:raw, 2:wav, 3:mp3(mp3格式目前仅支持16k采样率16bit编码单声道)
     * @param integer $VoiceEncodeType 语音编码类型	1:pcm
     * @param string $UserVoiceData 当前数据包数据, 流式模式下数据包大小可以按需设置，数据包大小必须 >= 4K，编码格式要求为BASE64。
     * @param string $SessionId 语音段唯一标识，一个完整语音一个SessionId
     * @param string $SoeAppId 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，需要结合[控制台](https://console.cloud.tencent.com/soe)使用。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("SoeAppId",$param) and $param["SoeAppId"] !== null) {
            $this->SoeAppId = $param["SoeAppId"];
        }
    }
}
