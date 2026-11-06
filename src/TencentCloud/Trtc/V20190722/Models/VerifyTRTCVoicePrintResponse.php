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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyTRTCVoicePrint返回参数结构体
 *
 * @method string getVoicePrintId() 获取被验证的目标声纹 ID
 * @method void setVoicePrintId(string $VoicePrintId) 设置被验证的目标声纹 ID
 * @method string getSpeakerId() 获取注册时写入的业务方 SpeakerId（以服务端记录为准）
 * @method void setSpeakerId(string $SpeakerId) 设置注册时写入的业务方 SpeakerId（以服务端记录为准）
 * @method string getScore() 获取相似度分值（字符串形式，保留两位小数，范围约 0~100，越大越相似）
 * @method void setScore(string $Score) 设置相似度分值（字符串形式，保留两位小数，范围约 0~100，越大越相似）
 * @method integer getDecision() 获取服务端阈值判决结果，0=不通过，1=通过（默认阈值 60 分，由服务端统一维护）
 * @method void setDecision(integer $Decision) 设置服务端阈值判决结果，0=不通过，1=通过（默认阈值 60 分，由服务端统一维护）
 * @method string getMessage() 获取结果描述，成功时为 voiceprint verify success
 * @method void setMessage(string $Message) 设置结果描述，成功时为 voiceprint verify success
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyTRTCVoicePrintResponse extends AbstractModel
{
    /**
     * @var string 被验证的目标声纹 ID
     */
    public $VoicePrintId;

    /**
     * @var string 注册时写入的业务方 SpeakerId（以服务端记录为准）
     */
    public $SpeakerId;

    /**
     * @var string 相似度分值（字符串形式，保留两位小数，范围约 0~100，越大越相似）
     */
    public $Score;

    /**
     * @var integer 服务端阈值判决结果，0=不通过，1=通过（默认阈值 60 分，由服务端统一维护）
     */
    public $Decision;

    /**
     * @var string 结果描述，成功时为 voiceprint verify success
     */
    public $Message;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VoicePrintId 被验证的目标声纹 ID
     * @param string $SpeakerId 注册时写入的业务方 SpeakerId（以服务端记录为准）
     * @param string $Score 相似度分值（字符串形式，保留两位小数，范围约 0~100，越大越相似）
     * @param integer $Decision 服务端阈值判决结果，0=不通过，1=通过（默认阈值 60 分，由服务端统一维护）
     * @param string $Message 结果描述，成功时为 voiceprint verify success
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
        if (array_key_exists("VoicePrintId",$param) and $param["VoicePrintId"] !== null) {
            $this->VoicePrintId = $param["VoicePrintId"];
        }

        if (array_key_exists("SpeakerId",$param) and $param["SpeakerId"] !== null) {
            $this->SpeakerId = $param["SpeakerId"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Decision",$param) and $param["Decision"] !== null) {
            $this->Decision = $param["Decision"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
