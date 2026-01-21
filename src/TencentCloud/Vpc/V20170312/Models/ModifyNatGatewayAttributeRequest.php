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
 * ModifyNatGatewayAttribute请求参数结构体
 *
 * @method string getNatGatewayId() 获取NAT网关的ID，形如：`nat-df45454`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关的ID，形如：`nat-df45454`。
 * @method string getNatGatewayName() 获取NAT网关的名称，形如：`test_nat`，边界值：[1,60] 字符。
 * @method void setNatGatewayName(string $NatGatewayName) 设置NAT网关的名称，形如：`test_nat`，边界值：[1,60] 字符。
 * @method integer getInternetMaxBandwidthOut() 获取NAT网关最大外网出带宽(单位:Mbps)，边界值：[0,50000]。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置NAT网关最大外网出带宽(单位:Mbps)，边界值：[0,50000]。
 * @method boolean getModifySecurityGroup() 获取是否修改NAT网关绑定的安全组。
 * @method void setModifySecurityGroup(boolean $ModifySecurityGroup) 设置是否修改NAT网关绑定的安全组。
 * @method array getSecurityGroupIds() 获取NAT网关绑定的安全组列表，最终状态，空列表表示删除所有安全组，形如: `['sg-1n232323', 'sg-o4242424']`
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置NAT网关绑定的安全组列表，最终状态，空列表表示删除所有安全组，形如: `['sg-1n232323', 'sg-o4242424']`
 * @method boolean getDeletionProtectionEnabled() 获取NAT实例是否开启删除保护
 * @method void setDeletionProtectionEnabled(boolean $DeletionProtectionEnabled) 设置NAT实例是否开启删除保护
 * @method boolean getPublicAddressAffinity() 获取同一个内网地址通过NAT网关访问同一个目的IP时，是否使用固定的弹性公网IP。默认为true，使用固定IP；false代表使用随机IP。当前适用于标准型NAT网关。
 * @method void setPublicAddressAffinity(boolean $PublicAddressAffinity) 设置同一个内网地址通过NAT网关访问同一个目的IP时，是否使用固定的弹性公网IP。默认为true，使用固定IP；false代表使用随机IP。当前适用于标准型NAT网关。
 */
class ModifyNatGatewayAttributeRequest extends AbstractModel
{
    /**
     * @var string NAT网关的ID，形如：`nat-df45454`。
     */
    public $NatGatewayId;

    /**
     * @var string NAT网关的名称，形如：`test_nat`，边界值：[1,60] 字符。
     */
    public $NatGatewayName;

    /**
     * @var integer NAT网关最大外网出带宽(单位:Mbps)，边界值：[0,50000]。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean 是否修改NAT网关绑定的安全组。
     */
    public $ModifySecurityGroup;

    /**
     * @var array NAT网关绑定的安全组列表，最终状态，空列表表示删除所有安全组，形如: `['sg-1n232323', 'sg-o4242424']`
     */
    public $SecurityGroupIds;

    /**
     * @var boolean NAT实例是否开启删除保护
     */
    public $DeletionProtectionEnabled;

    /**
     * @var boolean 同一个内网地址通过NAT网关访问同一个目的IP时，是否使用固定的弹性公网IP。默认为true，使用固定IP；false代表使用随机IP。当前适用于标准型NAT网关。
     */
    public $PublicAddressAffinity;

    /**
     * @param string $NatGatewayId NAT网关的ID，形如：`nat-df45454`。
     * @param string $NatGatewayName NAT网关的名称，形如：`test_nat`，边界值：[1,60] 字符。
     * @param integer $InternetMaxBandwidthOut NAT网关最大外网出带宽(单位:Mbps)，边界值：[0,50000]。
     * @param boolean $ModifySecurityGroup 是否修改NAT网关绑定的安全组。
     * @param array $SecurityGroupIds NAT网关绑定的安全组列表，最终状态，空列表表示删除所有安全组，形如: `['sg-1n232323', 'sg-o4242424']`
     * @param boolean $DeletionProtectionEnabled NAT实例是否开启删除保护
     * @param boolean $PublicAddressAffinity 同一个内网地址通过NAT网关访问同一个目的IP时，是否使用固定的弹性公网IP。默认为true，使用固定IP；false代表使用随机IP。当前适用于标准型NAT网关。
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

        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("ModifySecurityGroup",$param) and $param["ModifySecurityGroup"] !== null) {
            $this->ModifySecurityGroup = $param["ModifySecurityGroup"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("DeletionProtectionEnabled",$param) and $param["DeletionProtectionEnabled"] !== null) {
            $this->DeletionProtectionEnabled = $param["DeletionProtectionEnabled"];
        }

        if (array_key_exists("PublicAddressAffinity",$param) and $param["PublicAddressAffinity"] !== null) {
            $this->PublicAddressAffinity = $param["PublicAddressAffinity"];
        }
    }
}
