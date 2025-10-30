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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEngineNodeSpec返回参数结构体
 *
 * @method array getDriverSpec() 获取driver可用的规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDriverSpec(array $DriverSpec) 设置driver可用的规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExecutorSpec() 获取executor可用的规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorSpec(array $ExecutorSpec) 设置executor可用的规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEngineNodeSpecResponse extends AbstractModel
{
    /**
     * @var array driver可用的规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DriverSpec;

    /**
     * @var array executor可用的规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorSpec;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DriverSpec driver可用的规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExecutorSpec executor可用的规格
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
        if (array_key_exists("DriverSpec",$param) and $param["DriverSpec"] !== null) {
            $this->DriverSpec = [];
            foreach ($param["DriverSpec"] as $key => $value){
                $obj = new SpecInfo();
                $obj->deserialize($value);
                array_push($this->DriverSpec, $obj);
            }
        }

        if (array_key_exists("ExecutorSpec",$param) and $param["ExecutorSpec"] !== null) {
            $this->ExecutorSpec = [];
            foreach ($param["ExecutorSpec"] as $key => $value){
                $obj = new SpecInfo();
                $obj->deserialize($value);
                array_push($this->ExecutorSpec, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
