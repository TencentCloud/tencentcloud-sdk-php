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
 * RefreshDirectConnectGatewayRouteToNatGateway请求参数结构体
 *
 * @method string getVpcId() 获取vpc的ID
 * @method void setVpcId(string $VpcId) 设置vpc的ID
 * @method string getNatGatewayId() 获取NAT网关ID
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关ID
 * @method boolean getDryRun() 获取是否是预刷新；True:是， False:否
 * @method void setDryRun(boolean $DryRun) 设置是否是预刷新；True:是， False:否
 */
class RefreshDirectConnectGatewayRouteToNatGatewayRequest extends AbstractModel
{
    /**
     * @var string vpc的ID
     */
    public $VpcId;

    /**
     * @var string NAT网关ID
     */
    public $NatGatewayId;

    /**
     * @var boolean 是否是预刷新；True:是， False:否
     */
    public $DryRun;

    /**
     * @param string $VpcId vpc的ID
     * @param string $NatGatewayId NAT网关ID
     * @param boolean $DryRun 是否是预刷新；True:是， False:否
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
