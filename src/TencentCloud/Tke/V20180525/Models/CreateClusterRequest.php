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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster请求参数结构体
 *
 * @method string getClusterType() 获取<p>集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。</p>
 * @method ClusterCIDRSettings getClusterCIDRSettings() 获取<p>集群容器网络配置信息</p>
 * @method void setClusterCIDRSettings(ClusterCIDRSettings $ClusterCIDRSettings) 设置<p>集群容器网络配置信息</p>
 * @method array getRunInstancesForNode() 获取<p>CVM创建透传参数，json化字符串格式，详见<a href="https://cloud.tencent.com/document/product/213/15730">CVM创建实例</a>接口。总机型(包括地域)数量不超过10个，相同机型(地域)购买多台机器可以通过设置参数中RunInstances中InstanceCount来实现。</p>
 * @method void setRunInstancesForNode(array $RunInstancesForNode) 设置<p>CVM创建透传参数，json化字符串格式，详见<a href="https://cloud.tencent.com/document/product/213/15730">CVM创建实例</a>接口。总机型(包括地域)数量不超过10个，相同机型(地域)购买多台机器可以通过设置参数中RunInstances中InstanceCount来实现。</p>
 * @method ClusterBasicSettings getClusterBasicSettings() 获取<p>集群的基本配置信息</p>
 * @method void setClusterBasicSettings(ClusterBasicSettings $ClusterBasicSettings) 设置<p>集群的基本配置信息</p>
 * @method ClusterAdvancedSettings getClusterAdvancedSettings() 获取<p>集群高级配置信息</p>
 * @method void setClusterAdvancedSettings(ClusterAdvancedSettings $ClusterAdvancedSettings) 设置<p>集群高级配置信息</p>
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取<p>节点高级配置信息</p>
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置<p>节点高级配置信息</p>
 * @method array getExistedInstancesForNode() 获取<p>已存在实例的配置信息。所有实例必须在同一个VPC中，最大数量不超过 50，不支持添加竞价实例。</p>
 * @method void setExistedInstancesForNode(array $ExistedInstancesForNode) 设置<p>已存在实例的配置信息。所有实例必须在同一个VPC中，最大数量不超过 50，不支持添加竞价实例。</p>
 * @method array getInstanceDataDiskMountSettings() 获取<p>CVM类型和其对应的数据盘挂载配置信息</p>
 * @method void setInstanceDataDiskMountSettings(array $InstanceDataDiskMountSettings) 设置<p>CVM类型和其对应的数据盘挂载配置信息</p>
 * @method array getExtensionAddons() 获取<p>需要安装的扩展组件信息</p>
 * @method void setExtensionAddons(array $ExtensionAddons) 设置<p>需要安装的扩展组件信息</p>
 * @method string getCdcId() 获取<p>本地专用集群Id</p>
 * @method void setCdcId(string $CdcId) 设置<p>本地专用集群Id</p>
 * @method array getDisableAddons() 获取<p>屏蔽安装指定Addon组件，填写相应的AddonName</p>
 * @method void setDisableAddons(array $DisableAddons) 设置<p>屏蔽安装指定Addon组件，填写相应的AddonName</p>
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string <p>集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。</p>
     */
    public $ClusterType;

    /**
     * @var ClusterCIDRSettings <p>集群容器网络配置信息</p>
     */
    public $ClusterCIDRSettings;

    /**
     * @var array <p>CVM创建透传参数，json化字符串格式，详见<a href="https://cloud.tencent.com/document/product/213/15730">CVM创建实例</a>接口。总机型(包括地域)数量不超过10个，相同机型(地域)购买多台机器可以通过设置参数中RunInstances中InstanceCount来实现。</p>
     */
    public $RunInstancesForNode;

    /**
     * @var ClusterBasicSettings <p>集群的基本配置信息</p>
     */
    public $ClusterBasicSettings;

    /**
     * @var ClusterAdvancedSettings <p>集群高级配置信息</p>
     */
    public $ClusterAdvancedSettings;

    /**
     * @var InstanceAdvancedSettings <p>节点高级配置信息</p>
     */
    public $InstanceAdvancedSettings;

    /**
     * @var array <p>已存在实例的配置信息。所有实例必须在同一个VPC中，最大数量不超过 50，不支持添加竞价实例。</p>
     */
    public $ExistedInstancesForNode;

    /**
     * @var array <p>CVM类型和其对应的数据盘挂载配置信息</p>
     */
    public $InstanceDataDiskMountSettings;

    /**
     * @var array <p>需要安装的扩展组件信息</p>
     */
    public $ExtensionAddons;

    /**
     * @var string <p>本地专用集群Id</p>
     */
    public $CdcId;

    /**
     * @var array <p>屏蔽安装指定Addon组件，填写相应的AddonName</p>
     */
    public $DisableAddons;

    /**
     * @param string $ClusterType <p>集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。</p>
     * @param ClusterCIDRSettings $ClusterCIDRSettings <p>集群容器网络配置信息</p>
     * @param array $RunInstancesForNode <p>CVM创建透传参数，json化字符串格式，详见<a href="https://cloud.tencent.com/document/product/213/15730">CVM创建实例</a>接口。总机型(包括地域)数量不超过10个，相同机型(地域)购买多台机器可以通过设置参数中RunInstances中InstanceCount来实现。</p>
     * @param ClusterBasicSettings $ClusterBasicSettings <p>集群的基本配置信息</p>
     * @param ClusterAdvancedSettings $ClusterAdvancedSettings <p>集群高级配置信息</p>
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings <p>节点高级配置信息</p>
     * @param array $ExistedInstancesForNode <p>已存在实例的配置信息。所有实例必须在同一个VPC中，最大数量不超过 50，不支持添加竞价实例。</p>
     * @param array $InstanceDataDiskMountSettings <p>CVM类型和其对应的数据盘挂载配置信息</p>
     * @param array $ExtensionAddons <p>需要安装的扩展组件信息</p>
     * @param string $CdcId <p>本地专用集群Id</p>
     * @param array $DisableAddons <p>屏蔽安装指定Addon组件，填写相应的AddonName</p>
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
        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterCIDRSettings",$param) and $param["ClusterCIDRSettings"] !== null) {
            $this->ClusterCIDRSettings = new ClusterCIDRSettings();
            $this->ClusterCIDRSettings->deserialize($param["ClusterCIDRSettings"]);
        }

        if (array_key_exists("RunInstancesForNode",$param) and $param["RunInstancesForNode"] !== null) {
            $this->RunInstancesForNode = [];
            foreach ($param["RunInstancesForNode"] as $key => $value){
                $obj = new RunInstancesForNode();
                $obj->deserialize($value);
                array_push($this->RunInstancesForNode, $obj);
            }
        }

        if (array_key_exists("ClusterBasicSettings",$param) and $param["ClusterBasicSettings"] !== null) {
            $this->ClusterBasicSettings = new ClusterBasicSettings();
            $this->ClusterBasicSettings->deserialize($param["ClusterBasicSettings"]);
        }

        if (array_key_exists("ClusterAdvancedSettings",$param) and $param["ClusterAdvancedSettings"] !== null) {
            $this->ClusterAdvancedSettings = new ClusterAdvancedSettings();
            $this->ClusterAdvancedSettings->deserialize($param["ClusterAdvancedSettings"]);
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("ExistedInstancesForNode",$param) and $param["ExistedInstancesForNode"] !== null) {
            $this->ExistedInstancesForNode = [];
            foreach ($param["ExistedInstancesForNode"] as $key => $value){
                $obj = new ExistedInstancesForNode();
                $obj->deserialize($value);
                array_push($this->ExistedInstancesForNode, $obj);
            }
        }

        if (array_key_exists("InstanceDataDiskMountSettings",$param) and $param["InstanceDataDiskMountSettings"] !== null) {
            $this->InstanceDataDiskMountSettings = [];
            foreach ($param["InstanceDataDiskMountSettings"] as $key => $value){
                $obj = new InstanceDataDiskMountSetting();
                $obj->deserialize($value);
                array_push($this->InstanceDataDiskMountSettings, $obj);
            }
        }

        if (array_key_exists("ExtensionAddons",$param) and $param["ExtensionAddons"] !== null) {
            $this->ExtensionAddons = [];
            foreach ($param["ExtensionAddons"] as $key => $value){
                $obj = new ExtensionAddon();
                $obj->deserialize($value);
                array_push($this->ExtensionAddons, $obj);
            }
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("DisableAddons",$param) and $param["DisableAddons"] !== null) {
            $this->DisableAddons = $param["DisableAddons"];
        }
    }
}
