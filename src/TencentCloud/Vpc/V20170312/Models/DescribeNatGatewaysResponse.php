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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatGateways返回参数结构体
 *
 * @method array getNatGatewaySet() 获取NAT网关对象数组。
 * @method void setNatGatewaySet(array $NatGatewaySet) 设置NAT网关对象数组。
 * @method integer getTotalCount() 获取符合条件的NAT网关对象个数。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的NAT网关对象个数。
 * @method string getVerboseLevel() 获取输出信息详细程度，DETAIL代表输出实例所有信息；COMPACT代表不输出NAT规则和自定义路由，输出实例基本信息、特性开关和EIP信息；SIMPLE代表仅输出实例基本信息和特性开关
 * @method void setVerboseLevel(string $VerboseLevel) 设置输出信息详细程度，DETAIL代表输出实例所有信息；COMPACT代表不输出NAT规则和自定义路由，输出实例基本信息、特性开关和EIP信息；SIMPLE代表仅输出实例基本信息和特性开关
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNatGatewaysResponse extends AbstractModel
{
    /**
     * @var array NAT网关对象数组。
     */
    public $NatGatewaySet;

    /**
     * @var integer 符合条件的NAT网关对象个数。
     */
    public $TotalCount;

    /**
     * @var string 输出信息详细程度，DETAIL代表输出实例所有信息；COMPACT代表不输出NAT规则和自定义路由，输出实例基本信息、特性开关和EIP信息；SIMPLE代表仅输出实例基本信息和特性开关
     */
    public $VerboseLevel;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $NatGatewaySet NAT网关对象数组。
     * @param integer $TotalCount 符合条件的NAT网关对象个数。
     * @param string $VerboseLevel 输出信息详细程度，DETAIL代表输出实例所有信息；COMPACT代表不输出NAT规则和自定义路由，输出实例基本信息、特性开关和EIP信息；SIMPLE代表仅输出实例基本信息和特性开关
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
        if (array_key_exists("NatGatewaySet",$param) and $param["NatGatewaySet"] !== null) {
            $this->NatGatewaySet = [];
            foreach ($param["NatGatewaySet"] as $key => $value){
                $obj = new NatGateway();
                $obj->deserialize($value);
                array_push($this->NatGatewaySet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("VerboseLevel",$param) and $param["VerboseLevel"] !== null) {
            $this->VerboseLevel = $param["VerboseLevel"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
