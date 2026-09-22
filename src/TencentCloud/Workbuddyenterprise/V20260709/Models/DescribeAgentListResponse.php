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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentList返回参数结构体
 *
 * @method integer getTotalCount() 获取符合条件的 Agent 总数
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的 Agent 总数
 * @method array getAgentSet() 获取Agent 列表（分页后）；元素含 A2A / 公网 API 访问开关与地址、创建人 UIN、绑定的企业账号 ID
 * @method void setAgentSet(array $AgentSet) 设置Agent 列表（分页后）；元素含 A2A / 公网 API 访问开关与地址、创建人 UIN、绑定的企业账号 ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentListResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的 Agent 总数
     */
    public $TotalCount;

    /**
     * @var array Agent 列表（分页后）；元素含 A2A / 公网 API 访问开关与地址、创建人 UIN、绑定的企业账号 ID
     */
    public $AgentSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 符合条件的 Agent 总数
     * @param array $AgentSet Agent 列表（分页后）；元素含 A2A / 公网 API 访问开关与地址、创建人 UIN、绑定的企业账号 ID
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

        if (array_key_exists("AgentSet",$param) and $param["AgentSet"] !== null) {
            $this->AgentSet = [];
            foreach ($param["AgentSet"] as $key => $value){
                $obj = new AgentItem();
                $obj->deserialize($value);
                array_push($this->AgentSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
