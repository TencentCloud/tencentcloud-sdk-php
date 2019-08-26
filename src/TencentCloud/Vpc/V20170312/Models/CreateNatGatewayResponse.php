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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getNatGatewaySet() 获取NAT网关对象数组。
 * @method void setNatGatewaySet(array $NatGatewaySet) 设置NAT网关对象数组。
 * @method integer getTotalCount() 获取符合条件的 NAT网关对象数量。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的 NAT网关对象数量。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *CreateNatGateway返回参数结构体
 */
class CreateNatGatewayResponse extends AbstractModel
{
    /**
     * @var array NAT网关对象数组。
     */
    public $NatGatewaySet;

    /**
     * @var integer 符合条件的 NAT网关对象数量。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param array $NatGatewaySet NAT网关对象数组。
     * @param integer $TotalCount 符合条件的 NAT网关对象数量。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
