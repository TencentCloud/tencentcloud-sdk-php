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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHealthCheckPolicies返回参数结构体
 *
 * @method array getHealthCheckPolicies() 获取健康检测策略数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckPolicies(array $HealthCheckPolicies) 设置健康检测策略数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取数组总数目
 * @method void setTotalCount(integer $TotalCount) 设置数组总数目
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeHealthCheckPoliciesResponse extends AbstractModel
{
    /**
     * @var array 健康检测策略数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckPolicies;

    /**
     * @var integer 数组总数目
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $HealthCheckPolicies 健康检测策略数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 数组总数目
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
        if (array_key_exists("HealthCheckPolicies",$param) and $param["HealthCheckPolicies"] !== null) {
            $this->HealthCheckPolicies = [];
            foreach ($param["HealthCheckPolicies"] as $key => $value){
                $obj = new HealthCheckPolicy();
                $obj->deserialize($value);
                array_push($this->HealthCheckPolicies, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
