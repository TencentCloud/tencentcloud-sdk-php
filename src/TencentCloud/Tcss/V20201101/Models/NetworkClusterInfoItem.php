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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络集群资产返回的结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getClusterName() 获取集群名字
 * @method void setClusterName(string $ClusterName) 设置集群名字
 * @method string getClusterVersion() 获取集群版本
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本
 * @method string getClusterOs() 获取集群操作系统
 * @method void setClusterOs(string $ClusterOs) 设置集群操作系统
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method string getRegion() 获取集群区域
 * @method void setRegion(string $Region) 设置集群区域
 * @method string getNetworkPolicyPlugin() 获取集群网络插件
 * @method void setNetworkPolicyPlugin(string $NetworkPolicyPlugin) 设置集群网络插件
 * @method string getClusterStatus() 获取集群状态
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态
 * @method integer getTotalRuleCount() 获取总策略数量
 * @method void setTotalRuleCount(integer $TotalRuleCount) 设置总策略数量
 * @method integer getEnableRuleCount() 获取已开启策略数量
 * @method void setEnableRuleCount(integer $EnableRuleCount) 设置已开启策略数量
 * @method string getNetworkPolicyPluginStatus() 获取集群网络插件状态，正常：Running 不正常：Error
 * @method void setNetworkPolicyPluginStatus(string $NetworkPolicyPluginStatus) 设置集群网络插件状态，正常：Running 不正常：Error
 * @method string getNetworkPolicyPluginError() 获取集群网络插件错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkPolicyPluginError(string $NetworkPolicyPluginError) 设置集群网络插件错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class NetworkClusterInfoItem extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 集群名字
     */
    public $ClusterName;

    /**
     * @var string 集群版本
     */
    public $ClusterVersion;

    /**
     * @var string 集群操作系统
     */
    public $ClusterOs;

    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var string 集群区域
     */
    public $Region;

    /**
     * @var string 集群网络插件
     */
    public $NetworkPolicyPlugin;

    /**
     * @var string 集群状态
     */
    public $ClusterStatus;

    /**
     * @var integer 总策略数量
     */
    public $TotalRuleCount;

    /**
     * @var integer 已开启策略数量
     */
    public $EnableRuleCount;

    /**
     * @var string 集群网络插件状态，正常：Running 不正常：Error
     */
    public $NetworkPolicyPluginStatus;

    /**
     * @var string 集群网络插件错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkPolicyPluginError;

    /**
     * @param string $ClusterId 集群id
     * @param string $ClusterName 集群名字
     * @param string $ClusterVersion 集群版本
     * @param string $ClusterOs 集群操作系统
     * @param string $ClusterType 集群类型
     * @param string $Region 集群区域
     * @param string $NetworkPolicyPlugin 集群网络插件
     * @param string $ClusterStatus 集群状态
     * @param integer $TotalRuleCount 总策略数量
     * @param integer $EnableRuleCount 已开启策略数量
     * @param string $NetworkPolicyPluginStatus 集群网络插件状态，正常：Running 不正常：Error
     * @param string $NetworkPolicyPluginError 集群网络插件错误信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterOs",$param) and $param["ClusterOs"] !== null) {
            $this->ClusterOs = $param["ClusterOs"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("NetworkPolicyPlugin",$param) and $param["NetworkPolicyPlugin"] !== null) {
            $this->NetworkPolicyPlugin = $param["NetworkPolicyPlugin"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("TotalRuleCount",$param) and $param["TotalRuleCount"] !== null) {
            $this->TotalRuleCount = $param["TotalRuleCount"];
        }

        if (array_key_exists("EnableRuleCount",$param) and $param["EnableRuleCount"] !== null) {
            $this->EnableRuleCount = $param["EnableRuleCount"];
        }

        if (array_key_exists("NetworkPolicyPluginStatus",$param) and $param["NetworkPolicyPluginStatus"] !== null) {
            $this->NetworkPolicyPluginStatus = $param["NetworkPolicyPluginStatus"];
        }

        if (array_key_exists("NetworkPolicyPluginError",$param) and $param["NetworkPolicyPluginError"] !== null) {
            $this->NetworkPolicyPluginError = $param["NetworkPolicyPluginError"];
        }
    }
}
