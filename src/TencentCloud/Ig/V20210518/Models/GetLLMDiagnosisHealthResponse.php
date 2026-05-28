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
namespace TencentCloud\Ig\V20210518\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetLLMDiagnosisHealth返回参数结构体
 *
 * @method integer getCode() 获取<p>错误码，0成功，非0失败</p>
 * @method void setCode(integer $Code) 设置<p>错误码，0成功，非0失败</p>
 * @method string getMessage() 获取<p>错误信息</p>
 * @method void setMessage(string $Message) 设置<p>错误信息</p>
 * @method LLMDiagnosisHealthData getData() 获取<p>返回数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(LLMDiagnosisHealthData $Data) 设置<p>返回数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 */
class GetLLMDiagnosisHealthResponse extends AbstractModel
{
    /**
     * @var integer <p>错误码，0成功，非0失败</p>
     */
    public $Code;

    /**
     * @var string <p>错误信息</p>
     */
    public $Message;

    /**
     * @var LLMDiagnosisHealthData <p>返回数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
     */
    public $RequestId;

    /**
     * @param integer $Code <p>错误码，0成功，非0失败</p>
     * @param string $Message <p>错误信息</p>
     * @param LLMDiagnosisHealthData $Data <p>返回数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new LLMDiagnosisHealthData();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
