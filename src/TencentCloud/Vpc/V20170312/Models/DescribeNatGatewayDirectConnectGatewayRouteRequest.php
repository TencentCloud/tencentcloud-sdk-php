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
 * DescribeNatGatewayDirectConnectGatewayRoute请求参数结构体
 *
 * @method string getNatGatewayId() 获取nat的唯一标识
 * @method void setNatGatewayId(string $NatGatewayId) 设置nat的唯一标识
 * @method string getVpcId() 获取vpc的唯一标识
 * @method void setVpcId(string $VpcId) 设置vpc的唯一标识
 * @method integer getLimit() 获取0到200之间
 * @method void setLimit(integer $Limit) 设置0到200之间
 * @method integer getOffset() 获取大于0
 * @method void setOffset(integer $Offset) 设置大于0
 */
class DescribeNatGatewayDirectConnectGatewayRouteRequest extends AbstractModel
{
    /**
     * @var string nat的唯一标识
     */
    public $NatGatewayId;

    /**
     * @var string vpc的唯一标识
     */
    public $VpcId;

    /**
     * @var integer 0到200之间
     */
    public $Limit;

    /**
     * @var integer 大于0
     */
    public $Offset;

    /**
     * @param string $NatGatewayId nat的唯一标识
     * @param string $VpcId vpc的唯一标识
     * @param integer $Limit 0到200之间
     * @param integer $Offset 大于0
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
