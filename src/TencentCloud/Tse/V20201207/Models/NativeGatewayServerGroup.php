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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关分组信息
 *
 * @method string getGroupId() 获取云原生网关分组唯一id
 * @method void setGroupId(string $GroupId) 设置云原生网关分组唯一id
 * @method string getName() 获取分组名
 * @method void setName(string $Name) 设置分组名
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() 获取节点规格、节点数信息
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) 设置节点规格、节点数信息
 * @method string getStatus() 获取网关分组状态。
 * @method void setStatus(string $Status) 设置网关分组状态。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getIsFirstGroup() 获取是否是默认分组。
0：否。
1：是。
 * @method void setIsFirstGroup(integer $IsFirstGroup) 设置是否是默认分组。
0：否。
1：是。
 * @method CloudNativeAPIGatewayStrategy getBindingStrategy() 获取关联策略信息
 * @method void setBindingStrategy(CloudNativeAPIGatewayStrategy $BindingStrategy) 设置关联策略信息
 * @method string getGatewayId() 获取网关实例 id
 * @method void setGatewayId(string $GatewayId) 设置网关实例 id
 * @method integer getInternetMaxBandwidthOut() 获取带宽
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置带宽
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getSubnetIds() 获取子网id
 * @method void setSubnetIds(string $SubnetIds) 设置子网id
 * @method integer getDefaultWeight() 获取分组默认权重
 * @method void setDefaultWeight(integer $DefaultWeight) 设置分组默认权重
 * @method integer getElasticNumber() 获取弹性节点
 * @method void setElasticNumber(integer $ElasticNumber) 设置弹性节点
 * @method boolean getSupportTOA() 获取是否支持TOA
 * @method void setSupportTOA(boolean $SupportTOA) 设置是否支持TOA
 * @method boolean getSupportIPV6() 获取是否支持IPV6
 * @method void setSupportIPV6(boolean $SupportIPV6) 设置是否支持IPV6
 */
class NativeGatewayServerGroup extends AbstractModel
{
    /**
     * @var string 云原生网关分组唯一id
     */
    public $GroupId;

    /**
     * @var string 分组名
     */
    public $Name;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @var CloudNativeAPIGatewayNodeConfig 节点规格、节点数信息
     */
    public $NodeConfig;

    /**
     * @var string 网关分组状态。
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 是否是默认分组。
0：否。
1：是。
     */
    public $IsFirstGroup;

    /**
     * @var CloudNativeAPIGatewayStrategy 关联策略信息
     */
    public $BindingStrategy;

    /**
     * @var string 网关实例 id
     */
    public $GatewayId;

    /**
     * @var integer 带宽
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 子网id
     */
    public $SubnetIds;

    /**
     * @var integer 分组默认权重
     */
    public $DefaultWeight;

    /**
     * @var integer 弹性节点
     */
    public $ElasticNumber;

    /**
     * @var boolean 是否支持TOA
     */
    public $SupportTOA;

    /**
     * @var boolean 是否支持IPV6
     */
    public $SupportIPV6;

    /**
     * @param string $GroupId 云原生网关分组唯一id
     * @param string $Name 分组名
     * @param string $Description 描述信息
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig 节点规格、节点数信息
     * @param string $Status 网关分组状态。
     * @param string $CreateTime 创建时间
     * @param integer $IsFirstGroup 是否是默认分组。
0：否。
1：是。
     * @param CloudNativeAPIGatewayStrategy $BindingStrategy 关联策略信息
     * @param string $GatewayId 网关实例 id
     * @param integer $InternetMaxBandwidthOut 带宽
     * @param string $ModifyTime 修改时间
     * @param string $SubnetIds 子网id
     * @param integer $DefaultWeight 分组默认权重
     * @param integer $ElasticNumber 弹性节点
     * @param boolean $SupportTOA 是否支持TOA
     * @param boolean $SupportIPV6 是否支持IPV6
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsFirstGroup",$param) and $param["IsFirstGroup"] !== null) {
            $this->IsFirstGroup = $param["IsFirstGroup"];
        }

        if (array_key_exists("BindingStrategy",$param) and $param["BindingStrategy"] !== null) {
            $this->BindingStrategy = new CloudNativeAPIGatewayStrategy();
            $this->BindingStrategy->deserialize($param["BindingStrategy"]);
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("DefaultWeight",$param) and $param["DefaultWeight"] !== null) {
            $this->DefaultWeight = $param["DefaultWeight"];
        }

        if (array_key_exists("ElasticNumber",$param) and $param["ElasticNumber"] !== null) {
            $this->ElasticNumber = $param["ElasticNumber"];
        }

        if (array_key_exists("SupportTOA",$param) and $param["SupportTOA"] !== null) {
            $this->SupportTOA = $param["SupportTOA"];
        }

        if (array_key_exists("SupportIPV6",$param) and $param["SupportIPV6"] !== null) {
            $this->SupportIPV6 = $param["SupportIPV6"];
        }
    }
}
