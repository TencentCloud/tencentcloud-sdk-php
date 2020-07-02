<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * ModifyAutoScalingGroup请求参数结构体
 *
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
 * @method array getTerminationPolicies() 获取销毁策略，目前长度上限为1。取值包括 OLDEST_INSTANCE 和 NEWEST_INSTANCE。
<br><li> OLDEST_INSTANCE 优先销毁伸缩组中最旧的实例。
<br><li> NEWEST_INSTANCE，优先销毁伸缩组中最新的实例。
 * @method void setTerminationPolicies(array $TerminationPolicies) 设置销毁策略，目前长度上限为1。取值包括 OLDEST_INSTANCE 和 NEWEST_INSTANCE。
<br><li> OLDEST_INSTANCE 优先销毁伸缩组中最旧的实例。
<br><li> NEWEST_INSTANCE，优先销毁伸缩组中最新的实例。
 * @method string getVpcId() 获取VPC ID，基础网络则填空字符串。修改为具体VPC ID时，需指定相应的SubnetIds；修改为基础网络时，需指定相应的Zones。
 * @method void setVpcId(string $VpcId) 设置VPC ID，基础网络则填空字符串。修改为具体VPC ID时，需指定相应的SubnetIds；修改为基础网络时，需指定相应的Zones。
 * @method array getZones() 获取可用区列表
 * @method void setZones(array $Zones) 设置可用区列表
 * @method string getRetryPolicy() 获取重试策略，取值包括 IMMEDIATE_RETRY、 INCREMENTAL_INTERVALS、NO_RETRY，默认取值为 IMMEDIATE_RETRY。
<br><li> IMMEDIATE_RETRY，立即重试，在较短时间内快速重试，连续失败超过一定次数（5次）后不再重试。
<br><li> INCREMENTAL_INTERVALS，间隔递增重试，随着连续失败次数的增加，重试间隔逐渐增大，重试间隔从秒级到1天不等。
<br><li> NO_RETRY，不进行重试，直到再次收到用户调用或者告警信息后才会重试。
 * @method void setRetryPolicy(string $RetryPolicy) 设置重试策略，取值包括 IMMEDIATE_RETRY、 INCREMENTAL_INTERVALS、NO_RETRY，默认取值为 IMMEDIATE_RETRY。
<br><li> IMMEDIATE_RETRY，立即重试，在较短时间内快速重试，连续失败超过一定次数（5次）后不再重试。
<br><li> INCREMENTAL_INTERVALS，间隔递增重试，随着连续失败次数的增加，重试间隔逐渐增大，重试间隔从秒级到1天不等。
<br><li> NO_RETRY，不进行重试，直到再次收到用户调用或者告警信息后才会重试。
 * @method string getZonesCheckPolicy() 获取可用区校验策略，取值包括 ALL 和 ANY，默认取值为ANY。在伸缩组实际变更资源相关字段时（启动配置、可用区、子网）发挥作用。
<br><li> ALL，所有可用区（Zone）或子网（SubnetId）都可用则通过校验，否则校验报错。
<br><li> ANY，存在任何一个可用区（Zone）或子网（SubnetId）可用则通过校验，否则校验报错。

可用区或子网不可用的常见原因包括该可用区CVM实例类型售罄、该可用区CBS云盘售罄、该可用区配额不足、该子网IP不足等。
如果 Zones/SubnetIds 中可用区或者子网不存在，则无论 ZonesCheckPolicy 采用何种取值，都会校验报错。
 * @method void setZonesCheckPolicy(string $ZonesCheckPolicy) 设置可用区校验策略，取值包括 ALL 和 ANY，默认取值为ANY。在伸缩组实际变更资源相关字段时（启动配置、可用区、子网）发挥作用。
<br><li> ALL，所有可用区（Zone）或子网（SubnetId）都可用则通过校验，否则校验报错。
<br><li> ANY，存在任何一个可用区（Zone）或子网（SubnetId）可用则通过校验，否则校验报错。

可用区或子网不可用的常见原因包括该可用区CVM实例类型售罄、该可用区CBS云盘售罄、该可用区配额不足、该子网IP不足等。
如果 Zones/SubnetIds 中可用区或者子网不存在，则无论 ZonesCheckPolicy 采用何种取值，都会校验报错。
 * @method ServiceSettings getServiceSettings() 获取服务设置，包括云监控不健康替换等服务设置。
 * @method void setServiceSettings(ServiceSettings $ServiceSettings) 设置服务设置，包括云监控不健康替换等服务设置。
 * @method integer getIpv6AddressCount() 获取实例具有IPv6地址数量的配置，取值包括0、1。
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置实例具有IPv6地址数量的配置，取值包括0、1。
 * @method string getMultiZoneSubnetPolicy() 获取多可用区/子网策略，取值包括 PRIORITY 和 EQUALITY。
<br><li> PRIORITY，按照可用区/子网列表的顺序，作为优先级来尝试创建实例，如果优先级最高的可用区/子网可以创建成功，则总在该可用区/子网创建。
<br><li> EQUALITY：每次选择当前实例数最少的可用区/子网进行扩容，使得每个可用区/子网都有机会发生扩容，多次扩容出的实例会打散到多个可用区/子网。

与本策略相关的注意点：
<br><li> 当伸缩组为基础网络时，本策略适用于多可用区；当伸缩组为VPC网络时，本策略适用于多子网，此时不再考虑可用区因素，例如四个子网ABCD，其中ABC处于可用区1，D处于可用区2，此时考虑子网ABCD进行排序，而不考虑可用区1、2。
<br><li> 本策略适用于多可用区/子网，不适用于启动配置的多机型。多机型按照优先级策略进行选择。
<br><li> 创建实例时，先保证多机型的策略，后保证多可用区/子网的策略。例如多机型A、B，多子网1、2、3（按照PRIORITY策略），会按照A1、A2、A3、B1、B2、B3 进行尝试，如果A1售罄，会尝试A2（而非B1）。
<br><li> 无论使用哪种策略，单次伸缩活动总是优先保持使用一种具体配置（机型 * 可用区/子网）。
 * @method void setMultiZoneSubnetPolicy(string $MultiZoneSubnetPolicy) 设置多可用区/子网策略，取值包括 PRIORITY 和 EQUALITY。
<br><li> PRIORITY，按照可用区/子网列表的顺序，作为优先级来尝试创建实例，如果优先级最高的可用区/子网可以创建成功，则总在该可用区/子网创建。
<br><li> EQUALITY：每次选择当前实例数最少的可用区/子网进行扩容，使得每个可用区/子网都有机会发生扩容，多次扩容出的实例会打散到多个可用区/子网。

与本策略相关的注意点：
<br><li> 当伸缩组为基础网络时，本策略适用于多可用区；当伸缩组为VPC网络时，本策略适用于多子网，此时不再考虑可用区因素，例如四个子网ABCD，其中ABC处于可用区1，D处于可用区2，此时考虑子网ABCD进行排序，而不考虑可用区1、2。
<br><li> 本策略适用于多可用区/子网，不适用于启动配置的多机型。多机型按照优先级策略进行选择。
<br><li> 创建实例时，先保证多机型的策略，后保证多可用区/子网的策略。例如多机型A、B，多子网1、2、3（按照PRIORITY策略），会按照A1、A2、A3、B1、B2、B3 进行尝试，如果A1售罄，会尝试A2（而非B1）。
<br><li> 无论使用哪种策略，单次伸缩活动总是优先保持使用一种具体配置（机型 * 可用区/子网）。
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
     * @var array 销毁策略，目前长度上限为1。取值包括 OLDEST_INSTANCE 和 NEWEST_INSTANCE。
<br><li> OLDEST_INSTANCE 优先销毁伸缩组中最旧的实例。
<br><li> NEWEST_INSTANCE，优先销毁伸缩组中最新的实例。
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
     * @var string 重试策略，取值包括 IMMEDIATE_RETRY、 INCREMENTAL_INTERVALS、NO_RETRY，默认取值为 IMMEDIATE_RETRY。
<br><li> IMMEDIATE_RETRY，立即重试，在较短时间内快速重试，连续失败超过一定次数（5次）后不再重试。
<br><li> INCREMENTAL_INTERVALS，间隔递增重试，随着连续失败次数的增加，重试间隔逐渐增大，重试间隔从秒级到1天不等。
<br><li> NO_RETRY，不进行重试，直到再次收到用户调用或者告警信息后才会重试。
     */
    public $RetryPolicy;

    /**
     * @var string 可用区校验策略，取值包括 ALL 和 ANY，默认取值为ANY。在伸缩组实际变更资源相关字段时（启动配置、可用区、子网）发挥作用。
<br><li> ALL，所有可用区（Zone）或子网（SubnetId）都可用则通过校验，否则校验报错。
<br><li> ANY，存在任何一个可用区（Zone）或子网（SubnetId）可用则通过校验，否则校验报错。

可用区或子网不可用的常见原因包括该可用区CVM实例类型售罄、该可用区CBS云盘售罄、该可用区配额不足、该子网IP不足等。
如果 Zones/SubnetIds 中可用区或者子网不存在，则无论 ZonesCheckPolicy 采用何种取值，都会校验报错。
     */
    public $ZonesCheckPolicy;

    /**
     * @var ServiceSettings 服务设置，包括云监控不健康替换等服务设置。
     */
    public $ServiceSettings;

    /**
     * @var integer 实例具有IPv6地址数量的配置，取值包括0、1。
     */
    public $Ipv6AddressCount;

    /**
     * @var string 多可用区/子网策略，取值包括 PRIORITY 和 EQUALITY。
<br><li> PRIORITY，按照可用区/子网列表的顺序，作为优先级来尝试创建实例，如果优先级最高的可用区/子网可以创建成功，则总在该可用区/子网创建。
<br><li> EQUALITY：每次选择当前实例数最少的可用区/子网进行扩容，使得每个可用区/子网都有机会发生扩容，多次扩容出的实例会打散到多个可用区/子网。

与本策略相关的注意点：
<br><li> 当伸缩组为基础网络时，本策略适用于多可用区；当伸缩组为VPC网络时，本策略适用于多子网，此时不再考虑可用区因素，例如四个子网ABCD，其中ABC处于可用区1，D处于可用区2，此时考虑子网ABCD进行排序，而不考虑可用区1、2。
<br><li> 本策略适用于多可用区/子网，不适用于启动配置的多机型。多机型按照优先级策略进行选择。
<br><li> 创建实例时，先保证多机型的策略，后保证多可用区/子网的策略。例如多机型A、B，多子网1、2、3（按照PRIORITY策略），会按照A1、A2、A3、B1、B2、B3 进行尝试，如果A1售罄，会尝试A2（而非B1）。
<br><li> 无论使用哪种策略，单次伸缩活动总是优先保持使用一种具体配置（机型 * 可用区/子网）。
     */
    public $MultiZoneSubnetPolicy;

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
     * @param array $TerminationPolicies 销毁策略，目前长度上限为1。取值包括 OLDEST_INSTANCE 和 NEWEST_INSTANCE。
<br><li> OLDEST_INSTANCE 优先销毁伸缩组中最旧的实例。
<br><li> NEWEST_INSTANCE，优先销毁伸缩组中最新的实例。
     * @param string $VpcId VPC ID，基础网络则填空字符串。修改为具体VPC ID时，需指定相应的SubnetIds；修改为基础网络时，需指定相应的Zones。
     * @param array $Zones 可用区列表
     * @param string $RetryPolicy 重试策略，取值包括 IMMEDIATE_RETRY、 INCREMENTAL_INTERVALS、NO_RETRY，默认取值为 IMMEDIATE_RETRY。
<br><li> IMMEDIATE_RETRY，立即重试，在较短时间内快速重试，连续失败超过一定次数（5次）后不再重试。
<br><li> INCREMENTAL_INTERVALS，间隔递增重试，随着连续失败次数的增加，重试间隔逐渐增大，重试间隔从秒级到1天不等。
<br><li> NO_RETRY，不进行重试，直到再次收到用户调用或者告警信息后才会重试。
     * @param string $ZonesCheckPolicy 可用区校验策略，取值包括 ALL 和 ANY，默认取值为ANY。在伸缩组实际变更资源相关字段时（启动配置、可用区、子网）发挥作用。
<br><li> ALL，所有可用区（Zone）或子网（SubnetId）都可用则通过校验，否则校验报错。
<br><li> ANY，存在任何一个可用区（Zone）或子网（SubnetId）可用则通过校验，否则校验报错。

可用区或子网不可用的常见原因包括该可用区CVM实例类型售罄、该可用区CBS云盘售罄、该可用区配额不足、该子网IP不足等。
如果 Zones/SubnetIds 中可用区或者子网不存在，则无论 ZonesCheckPolicy 采用何种取值，都会校验报错。
     * @param ServiceSettings $ServiceSettings 服务设置，包括云监控不健康替换等服务设置。
     * @param integer $Ipv6AddressCount 实例具有IPv6地址数量的配置，取值包括0、1。
     * @param string $MultiZoneSubnetPolicy 多可用区/子网策略，取值包括 PRIORITY 和 EQUALITY。
<br><li> PRIORITY，按照可用区/子网列表的顺序，作为优先级来尝试创建实例，如果优先级最高的可用区/子网可以创建成功，则总在该可用区/子网创建。
<br><li> EQUALITY：每次选择当前实例数最少的可用区/子网进行扩容，使得每个可用区/子网都有机会发生扩容，多次扩容出的实例会打散到多个可用区/子网。

与本策略相关的注意点：
<br><li> 当伸缩组为基础网络时，本策略适用于多可用区；当伸缩组为VPC网络时，本策略适用于多子网，此时不再考虑可用区因素，例如四个子网ABCD，其中ABC处于可用区1，D处于可用区2，此时考虑子网ABCD进行排序，而不考虑可用区1、2。
<br><li> 本策略适用于多可用区/子网，不适用于启动配置的多机型。多机型按照优先级策略进行选择。
<br><li> 创建实例时，先保证多机型的策略，后保证多可用区/子网的策略。例如多机型A、B，多子网1、2、3（按照PRIORITY策略），会按照A1、A2、A3、B1、B2、B3 进行尝试，如果A1售罄，会尝试A2（而非B1）。
<br><li> 无论使用哪种策略，单次伸缩活动总是优先保持使用一种具体配置（机型 * 可用区/子网）。
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
        if (array_key_exists('AutoScalingGroupId',$param) and $param['AutoScalingGroupId'] !== null) {
            $this->AutoScalingGroupId = $param['AutoScalingGroupId'];
        }

        if (array_key_exists('AutoScalingGroupName',$param) and $param['AutoScalingGroupName'] !== null) {
            $this->AutoScalingGroupName = $param['AutoScalingGroupName'];
        }

        if (array_key_exists('DefaultCooldown',$param) and $param['DefaultCooldown'] !== null) {
            $this->DefaultCooldown = $param['DefaultCooldown'];
        }

        if (array_key_exists('DesiredCapacity',$param) and $param['DesiredCapacity'] !== null) {
            $this->DesiredCapacity = $param['DesiredCapacity'];
        }

        if (array_key_exists('LaunchConfigurationId',$param) and $param['LaunchConfigurationId'] !== null) {
            $this->LaunchConfigurationId = $param['LaunchConfigurationId'];
        }

        if (array_key_exists('MaxSize',$param) and $param['MaxSize'] !== null) {
            $this->MaxSize = $param['MaxSize'];
        }

        if (array_key_exists('MinSize',$param) and $param['MinSize'] !== null) {
            $this->MinSize = $param['MinSize'];
        }

        if (array_key_exists('ProjectId',$param) and $param['ProjectId'] !== null) {
            $this->ProjectId = $param['ProjectId'];
        }

        if (array_key_exists('SubnetIds',$param) and $param['SubnetIds'] !== null) {
            $this->SubnetIds = $param['SubnetIds'];
        }

        if (array_key_exists('TerminationPolicies',$param) and $param['TerminationPolicies'] !== null) {
            $this->TerminationPolicies = $param['TerminationPolicies'];
        }

        if (array_key_exists('VpcId',$param) and $param['VpcId'] !== null) {
            $this->VpcId = $param['VpcId'];
        }

        if (array_key_exists('Zones',$param) and $param['Zones'] !== null) {
            $this->Zones = $param['Zones'];
        }

        if (array_key_exists('RetryPolicy',$param) and $param['RetryPolicy'] !== null) {
            $this->RetryPolicy = $param['RetryPolicy'];
        }

        if (array_key_exists('ZonesCheckPolicy',$param) and $param['ZonesCheckPolicy'] !== null) {
            $this->ZonesCheckPolicy = $param['ZonesCheckPolicy'];
        }

        if (array_key_exists('ServiceSettings',$param) and $param['ServiceSettings'] !== null) {
            $this->ServiceSettings = new ServiceSettings();
            $this->ServiceSettings->deserialize($param['ServiceSettings']);
        }

        if (array_key_exists('Ipv6AddressCount',$param) and $param['Ipv6AddressCount'] !== null) {
            $this->Ipv6AddressCount = $param['Ipv6AddressCount'];
        }

        if (array_key_exists('MultiZoneSubnetPolicy',$param) and $param['MultiZoneSubnetPolicy'] !== null) {
            $this->MultiZoneSubnetPolicy = $param['MultiZoneSubnetPolicy'];
        }
    }
}
