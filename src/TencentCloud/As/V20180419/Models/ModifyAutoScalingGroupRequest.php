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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAutoScalingGroupId() 获取伸缩组ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID
 * @method string getAutoScalingGroupName() 获取伸缩组名称，在您账号中必须唯一。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超55个字节。
 * @method void setAutoScalingGroupName(string $AutoScalingGroupName) 设置伸缩组名称，在您账号中必须唯一。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超55个字节。
 * @method integer getDefaultCooldown() 获取默认冷却时间，单位秒，默认值为300
 * @method void setDefaultCooldown(integer $DefaultCooldown) 设置默认冷却时间，单位秒，默认值为300
 * @method integer getDesiredCapacity() 获取期望实例数，大小介于最小实例数和最大实例数之间
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置期望实例数，大小介于最小实例数和最大实例数之间
 * @method string getLaunchConfigurationId() 获取启动配置ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置启动配置ID
 * @method integer getMaxSize() 获取最大实例数，取值范围为0-2000。
 * @method void setMaxSize(integer $MaxSize) 设置最大实例数，取值范围为0-2000。
 * @method integer getMinSize() 获取最小实例数，取值范围为0-2000。
 * @method void setMinSize(integer $MinSize) 设置最小实例数，取值范围为0-2000。
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method array getSubnetIds() 获取子网ID列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID列表
 * @method array getTerminationPolicies() 获取销毁策略，目前长度上限为1
 * @method void setTerminationPolicies(array $TerminationPolicies) 设置销毁策略，目前长度上限为1
 * @method string getVpcId() 获取VPC ID，基础网络则填空字符串。修改为具体VPC ID时，需指定相应的SubnetIds；修改为基础网络时，需指定相应的Zones。
 * @method void setVpcId(string $VpcId) 设置VPC ID，基础网络则填空字符串。修改为具体VPC ID时，需指定相应的SubnetIds；修改为基础网络时，需指定相应的Zones。
 * @method array getZones() 获取可用区列表
 * @method void setZones(array $Zones) 设置可用区列表
 */

/**
 *ModifyAutoScalingGroup请求参数结构体
 */
class ModifyAutoScalingGroupRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string 伸缩组名称，在您账号中必须唯一。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超55个字节。
     */
    public $AutoScalingGroupName;

    /**
     * @var integer 默认冷却时间，单位秒，默认值为300
     */
    public $DefaultCooldown;

    /**
     * @var integer 期望实例数，大小介于最小实例数和最大实例数之间
     */
    public $DesiredCapacity;

    /**
     * @var string 启动配置ID
     */
    public $LaunchConfigurationId;

    /**
     * @var integer 最大实例数，取值范围为0-2000。
     */
    public $MaxSize;

    /**
     * @var integer 最小实例数，取值范围为0-2000。
     */
    public $MinSize;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var array 子网ID列表
     */
    public $SubnetIds;

    /**
     * @var array 销毁策略，目前长度上限为1
     */
    public $TerminationPolicies;

    /**
     * @var string VPC ID，基础网络则填空字符串。修改为具体VPC ID时，需指定相应的SubnetIds；修改为基础网络时，需指定相应的Zones。
     */
    public $VpcId;

    /**
     * @var array 可用区列表
     */
    public $Zones;
    /**
     * @param string $AutoScalingGroupId 伸缩组ID
     * @param string $AutoScalingGroupName 伸缩组名称，在您账号中必须唯一。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超55个字节。
     * @param integer $DefaultCooldown 默认冷却时间，单位秒，默认值为300
     * @param integer $DesiredCapacity 期望实例数，大小介于最小实例数和最大实例数之间
     * @param string $LaunchConfigurationId 启动配置ID
     * @param integer $MaxSize 最大实例数，取值范围为0-2000。
     * @param integer $MinSize 最小实例数，取值范围为0-2000。
     * @param integer $ProjectId 项目ID
     * @param array $SubnetIds 子网ID列表
     * @param array $TerminationPolicies 销毁策略，目前长度上限为1
     * @param string $VpcId VPC ID，基础网络则填空字符串。修改为具体VPC ID时，需指定相应的SubnetIds；修改为基础网络时，需指定相应的Zones。
     * @param array $Zones 可用区列表
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("AutoScalingGroupName",$param) and $param["AutoScalingGroupName"] !== null) {
            $this->AutoScalingGroupName = $param["AutoScalingGroupName"];
        }

        if (array_key_exists("DefaultCooldown",$param) and $param["DefaultCooldown"] !== null) {
            $this->DefaultCooldown = $param["DefaultCooldown"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("TerminationPolicies",$param) and $param["TerminationPolicies"] !== null) {
            $this->TerminationPolicies = $param["TerminationPolicies"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }
    }
}
