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
 * SyncDubbing返回参数结构体
 *
 * @method integer getErrorCode() 获取错误码，成功时返回0
 * @method void setErrorCode(integer $ErrorCode) 设置错误码，成功时返回0
 * @method string getMsg() 获取错误信息，成功时返回success
 * @method void setMsg(string $Msg) 设置错误信息，成功时返回success
 * @method string getAudioData() 获取合成音频的base64编码，wav格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioData(string $AudioData) 设置合成音频的base64编码，wav格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVoiceId() 获取克隆的音色Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceId(string $VoiceId) 设置克隆的音色Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SyncDubbingResponse extends AbstractModel
{
    /**
     * @var integer 错误码，成功时返回0
     */
    public $ErrorCode;

    /**
     * @var string 错误信息，成功时返回success
     */
    public $Msg;

    /**
     * @var string 合成音频的base64编码，wav格式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioData;

    /**
     * @var string 克隆的音色Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ErrorCode 错误码，成功时返回0
     * @param string $Msg 错误信息，成功时返回success
     * @param string $AudioData 合成音频的base64编码，wav格式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VoiceId 克隆的音色Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
