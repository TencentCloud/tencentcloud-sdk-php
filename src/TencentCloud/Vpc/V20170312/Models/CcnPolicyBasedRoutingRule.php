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
 * 云联网策略路由匹配规则
 *
 * @method string getPolicyBasedRoutingNextHopId() 获取<p>策略路由下一跳ID</p>
 * @method void setPolicyBasedRoutingNextHopId(string $PolicyBasedRoutingNextHopId) 设置<p>策略路由下一跳ID</p>
 * @method string getInstanceType() 获取<p>实例类型[VPC,DIRECTCONNECT,VPNGW]</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型[VPC,DIRECTCONNECT,VPNGW]</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getSourceCidrBlock() 获取<p>源地址CIDR</p>
 * @method void setSourceCidrBlock(string $SourceCidrBlock) 设置<p>源地址CIDR</p>
 * @method string getDestinationCidrBlock() 获取<p>目的地址CIDR</p>
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置<p>目的地址CIDR</p>
 * @method integer getPriority() 获取<p>优先级</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getPolicyBasedRoutingRuleId() 获取<p>策略路由匹配策略ID</p>
 * @method void setPolicyBasedRoutingRuleId(string $PolicyBasedRoutingRuleId) 设置<p>策略路由匹配策略ID</p>
 * @method string getDestinationInstanceType() 获取<p>目的端实例ID</p><p>枚举值：</p><ul><li>VPC： 私有网络</li></ul>
 * @method void setDestinationInstanceType(string $DestinationInstanceType) 设置<p>目的端实例ID</p><p>枚举值：</p><ul><li>VPC： 私有网络</li></ul>
 * @method string getDestinationInstanceId() 获取<p>目的端实例ID</p>
 * @method void setDestinationInstanceId(string $DestinationInstanceId) 设置<p>目的端实例ID</p>
 */
class CcnPolicyBasedRoutingRule extends AbstractModel
{
    /**
     * @var string <p>策略路由下一跳ID</p>
     */
    public $PolicyBasedRoutingNextHopId;

    /**
     * @var string <p>实例类型[VPC,DIRECTCONNECT,VPNGW]</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>源地址CIDR</p>
     */
    public $SourceCidrBlock;

    /**
     * @var string <p>目的地址CIDR</p>
     */
    public $DestinationCidrBlock;

    /**
     * @var integer <p>优先级</p>
     */
    public $Priority;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>策略路由匹配策略ID</p>
     */
    public $PolicyBasedRoutingRuleId;

    /**
     * @var string <p>目的端实例ID</p><p>枚举值：</p><ul><li>VPC： 私有网络</li></ul>
     */
    public $DestinationInstanceType;

    /**
     * @var string <p>目的端实例ID</p>
     */
    public $DestinationInstanceId;

    /**
     * @param string $PolicyBasedRoutingNextHopId <p>策略路由下一跳ID</p>
     * @param string $InstanceType <p>实例类型[VPC,DIRECTCONNECT,VPNGW]</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $SourceCidrBlock <p>源地址CIDR</p>
     * @param string $DestinationCidrBlock <p>目的地址CIDR</p>
     * @param integer $Priority <p>优先级</p>
     * @param string $Description <p>描述</p>
     * @param string $PolicyBasedRoutingRuleId <p>策略路由匹配策略ID</p>
     * @param string $DestinationInstanceType <p>目的端实例ID</p><p>枚举值：</p><ul><li>VPC： 私有网络</li></ul>
     * @param string $DestinationInstanceId <p>目的端实例ID</p>
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
        if (array_key_exists("PolicyBasedRoutingNextHopId",$param) and $param["PolicyBasedRoutingNextHopId"] !== null) {
            $this->PolicyBasedRoutingNextHopId = $param["PolicyBasedRoutingNextHopId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SourceCidrBlock",$param) and $param["SourceCidrBlock"] !== null) {
            $this->SourceCidrBlock = $param["SourceCidrBlock"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PolicyBasedRoutingRuleId",$param) and $param["PolicyBasedRoutingRuleId"] !== null) {
            $this->PolicyBasedRoutingRuleId = $param["PolicyBasedRoutingRuleId"];
        }

        if (array_key_exists("DestinationInstanceType",$param) and $param["DestinationInstanceType"] !== null) {
            $this->DestinationInstanceType = $param["DestinationInstanceType"];
        }

        if (array_key_exists("DestinationInstanceId",$param) and $param["DestinationInstanceId"] !== null) {
            $this->DestinationInstanceId = $param["DestinationInstanceId"];
        }
    }
}
