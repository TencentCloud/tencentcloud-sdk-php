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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSpecs返回参数结构体
 *
 * @method array getHybridNodeSpecs() 获取<p>对等节点售卖规格列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHybridNodeSpecs(array $HybridNodeSpecs) 设置<p>对等节点售卖规格列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServerlessCcuSpec() 获取<p>svls节点售卖规格列表</p>
 * @method void setServerlessCcuSpec(array $ServerlessCcuSpec) 设置<p>svls节点售卖规格列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSpecsResponse extends AbstractModel
{
    /**
     * @var array <p>对等节点售卖规格列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HybridNodeSpecs;

    /**
     * @var array <p>svls节点售卖规格列表</p>
     */
    public $ServerlessCcuSpec;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $HybridNodeSpecs <p>对等节点售卖规格列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServerlessCcuSpec <p>svls节点售卖规格列表</p>
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
        if (array_key_exists("HybridNodeSpecs",$param) and $param["HybridNodeSpecs"] !== null) {
            $this->HybridNodeSpecs = [];
            foreach ($param["HybridNodeSpecs"] as $key => $value){
                $obj = new StorageNodeSpec();
                $obj->deserialize($value);
                array_push($this->HybridNodeSpecs, $obj);
            }
        }

        if (array_key_exists("ServerlessCcuSpec",$param) and $param["ServerlessCcuSpec"] !== null) {
            $this->ServerlessCcuSpec = [];
            foreach ($param["ServerlessCcuSpec"] as $key => $value){
                $obj = new ServerlessCcu();
                $obj->deserialize($value);
                array_push($this->ServerlessCcuSpec, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
