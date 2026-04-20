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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentInstances返回参数结构体
 *
 * @method integer getTotalCount() 获取查询结果总数量
 * @method void setTotalCount(integer $TotalCount) 设置查询结果总数量
 * @method array getItems() 获取<p>智能体实例列表</p>
 * @method void setItems(array $Items) 设置<p>智能体实例列表</p>
 * @method array getStatusCounts() 获取<p>无</p>
 * @method void setStatusCounts(array $StatusCounts) 设置<p>无</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentInstancesResponse extends AbstractModel
{
    /**
     * @var integer 查询结果总数量
     */
    public $TotalCount;

    /**
     * @var array <p>智能体实例列表</p>
     */
    public $Items;

    /**
     * @var array <p>无</p>
     */
    public $StatusCounts;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 查询结果总数量
     * @param array $Items <p>智能体实例列表</p>
     * @param array $StatusCounts <p>无</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new AgentInstance();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("StatusCounts",$param) and $param["StatusCounts"] !== null) {
            $this->StatusCounts = [];
            foreach ($param["StatusCounts"] as $key => $value){
                $obj = new StatusItem();
                $obj->deserialize($value);
                array_push($this->StatusCounts, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
