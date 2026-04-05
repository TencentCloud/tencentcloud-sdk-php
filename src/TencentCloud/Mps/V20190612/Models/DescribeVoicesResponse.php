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
 * DescribeVoices返回参数结构体
 *
 * @method integer getErrorCode() 获取<p>错误码，成功时返回0</p>
 * @method void setErrorCode(integer $ErrorCode) 设置<p>错误码，成功时返回0</p>
 * @method string getMsg() 获取<p>错误信息，成功时返回success</p>
 * @method void setMsg(string $Msg) 设置<p>错误信息，成功时返回success</p>
 * @method array getVoices() 获取<p>可用音色列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoices(array $Voices) 设置<p>可用音色列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVoicesResponse extends AbstractModel
{
    /**
     * @var integer <p>错误码，成功时返回0</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>错误信息，成功时返回success</p>
     */
    public $Msg;

    /**
     * @var array <p>可用音色列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Voices;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ErrorCode <p>错误码，成功时返回0</p>
     * @param string $Msg <p>错误信息，成功时返回success</p>
     * @param array $Voices <p>可用音色列表</p>
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

        if (array_key_exists("Voices",$param) and $param["Voices"] !== null) {
            $this->Voices = [];
            foreach ($param["Voices"] as $key => $value){
                $obj = new VoiceInfo();
                $obj->deserialize($value);
                array_push($this->Voices, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
