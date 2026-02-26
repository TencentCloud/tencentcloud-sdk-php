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
 * 查询云联网策略路由匹配规则
 *
 * @method string getPolicyBasedRoutingNextHopId() 获取策略路由下一跳ID
 * @method void setPolicyBasedRoutingNextHopId(string $PolicyBasedRoutingNextHopId) 设置策略路由下一跳ID
 * @method string getInstanceType() 获取实例类型[VPC,DIRECTCONNECT,VPNGW]
 * @method void setInstanceType(string $InstanceType) 设置实例类型[VPC,DIRECTCONNECT,VPNGW]
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getSourceCidrBlock() 获取源地址CIDR
 * @method void setSourceCidrBlock(string $SourceCidrBlock) 设置源地址CIDR
 * @method string getDestinationCidrBlock() 获取目的地址CIDR
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置目的地址CIDR
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getPolicyBasedRoutingRuleId() 获取策略路由匹配策略ID
 * @method void setPolicyBasedRoutingRuleId(string $PolicyBasedRoutingRuleId) 设置策略路由匹配策略ID
 */
class CcnPolicyBasedRoutingRule extends AbstractModel
{
    /**
     * @var string 策略路由下一跳ID
     */
    public $PolicyBasedRoutingNextHopId;

    /**
     * @var string 实例类型[VPC,DIRECTCONNECT,VPNGW]
     */
    public $InstanceType;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 源地址CIDR
     */
    public $SourceCidrBlock;

    /**
     * @var string 目的地址CIDR
     */
    public $DestinationCidrBlock;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 策略路由匹配策略ID
     */
    public $PolicyBasedRoutingRuleId;

    /**
     * @param string $PolicyBasedRoutingNextHopId 策略路由下一跳ID
     * @param string $InstanceType 实例类型[VPC,DIRECTCONNECT,VPNGW]
     * @param string $InstanceId 实例ID
     * @param string $SourceCidrBlock 源地址CIDR
     * @param string $DestinationCidrBlock 目的地址CIDR
     * @param integer $Priority 优先级
     * @param string $Description 描述
     * @param string $PolicyBasedRoutingRuleId 策略路由匹配策略ID
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
    }
}
