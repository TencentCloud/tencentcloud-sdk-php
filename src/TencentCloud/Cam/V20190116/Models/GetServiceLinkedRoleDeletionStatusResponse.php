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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServiceLinkedRoleDeletionStatus返回参数结构体
 *
 * @method string getStatus() 获取状态：NOT_STARTED，IN_PROGRESS，SUCCEEDED，FAILED
 * @method void setStatus(string $Status) 设置状态：NOT_STARTED，IN_PROGRESS，SUCCEEDED，FAILED
 * @method string getReason() 获取失败原因
 * @method void setReason(string $Reason) 设置失败原因
 * @method string getServiceType() 获取服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetServiceLinkedRoleDeletionStatusResponse extends AbstractModel
{
    /**
     * @var string 状态：NOT_STARTED，IN_PROGRESS，SUCCEEDED，FAILED
     */
    public $Status;

    /**
     * @var string 失败原因
     */
    public $Reason;

    /**
     * @var string 服务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @var string 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 状态：NOT_STARTED，IN_PROGRESS，SUCCEEDED，FAILED
     * @param string $Reason 失败原因
     * @param string $ServiceType 服务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 服务名称
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
