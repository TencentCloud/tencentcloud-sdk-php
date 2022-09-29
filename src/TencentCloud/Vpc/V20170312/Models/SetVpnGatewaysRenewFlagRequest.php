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
 * SetVpnGatewaysRenewFlag请求参数结构体
 *
 * @method array getVpnGatewayIds() 获取VPNGW字符型ID列表
 * @method void setVpnGatewayIds(array $VpnGatewayIds) 设置VPNGW字符型ID列表
 * @method integer getAutoRenewFlag() 获取自动续费标记[0, 1, 2]
0表示默认状态(初始状态)， 1表示自动续费，2表示明确不自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记[0, 1, 2]
0表示默认状态(初始状态)， 1表示自动续费，2表示明确不自动续费
 * @method string getType() 获取VPNGW类型['IPSEC', 'SSL']
 * @method void setType(string $Type) 设置VPNGW类型['IPSEC', 'SSL']
 */
class SetVpnGatewaysRenewFlagRequest extends AbstractModel
{
    /**
     * @var array VPNGW字符型ID列表
     */
    public $VpnGatewayIds;

    /**
     * @var integer 自动续费标记[0, 1, 2]
0表示默认状态(初始状态)， 1表示自动续费，2表示明确不自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string VPNGW类型['IPSEC', 'SSL']
     */
    public $Type;

    /**
     * @param array $VpnGatewayIds VPNGW字符型ID列表
     * @param integer $AutoRenewFlag 自动续费标记[0, 1, 2]
0表示默认状态(初始状态)， 1表示自动续费，2表示明确不自动续费
     * @param string $Type VPNGW类型['IPSEC', 'SSL']
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
        if (array_key_exists("VpnGatewayIds",$param) and $param["VpnGatewayIds"] !== null) {
            $this->VpnGatewayIds = $param["VpnGatewayIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
