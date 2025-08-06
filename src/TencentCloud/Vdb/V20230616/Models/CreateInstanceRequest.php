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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstance请求参数结构体
 *
 * @method string getVpcId() 获取私有网络 ID。
 * @method void setVpcId(string $VpcId) 设置私有网络 ID。
 * @method string getSubnetId() 获取私有网络 VPC 的子网 ID。
 * @method void setSubnetId(string $SubnetId) 设置私有网络 VPC 的子网 ID。
 * @method integer getPayMode() 获取指定实例计费方式。
- 0：按量付费。
- 1：包年包月。
 * @method void setPayMode(integer $PayMode) 设置指定实例计费方式。
- 0：按量付费。
- 1：包年包月。
 * @method string getInstanceName() 获取设置实例名称。仅支持长度不超过 60 的中文/英文/数字/-/_。
 * @method void setInstanceName(string $InstanceName) 设置设置实例名称。仅支持长度不超过 60 的中文/英文/数字/-/_。
 * @method array getSecurityGroupIds() 获取安全组 ID。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组 ID。
 * @method integer getPayPeriod() 获取若计费方式为包年包月，指定包年包月续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
 * @method void setPayPeriod(integer $PayPeriod) 设置若计费方式为包年包月，指定包年包月续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
 * @method integer getAutoRenew() 获取若为包年包月计费，需指定是否开启自动续费。
- 0：不开启自动续费。
- 1：开启自动续费。
 * @method void setAutoRenew(integer $AutoRenew) 设置若为包年包月计费，需指定是否开启自动续费。
- 0：不开启自动续费。
- 1：开启自动续费。
 * @method string getParams() 获取实例额外参数，通过json提交。
 * @method void setParams(string $Params) 设置实例额外参数，通过json提交。
 * @method array getResourceTags() 获取以数组形式列出标签信息。
 * @method void setResourceTags(array $ResourceTags) 设置以数组形式列出标签信息。
 * @method string getProject() 获取指定实例所属项目 ID。
 * @method void setProject(string $Project) 设置指定实例所属项目 ID。
 * @method integer getProductType() 获取产品版本，0-标准版，1-容量增强版
 * @method void setProductType(integer $ProductType) 设置产品版本，0-标准版，1-容量增强版
 * @method string getInstanceType() 获取实例类型。
- base：免费测试版。
- single：单机版。
- cluster：高可用版。
 * @method void setInstanceType(string $InstanceType) 设置实例类型。
- base：免费测试版。
- single：单机版。
- cluster：高可用版。
 * @method string getMode() 获取实例类型为高可用版，需指定可用区选项。
- two：两可用区。
- three：三可用区。
 * @method void setMode(string $Mode) 设置实例类型为高可用版，需指定可用区选项。
- two：两可用区。
- three：三可用区。
 * @method integer getGoodsNum() 获取购买实例数量。
 * @method void setGoodsNum(integer $GoodsNum) 设置购买实例数量。
 * @method string getNetworkType() 获取网络类型。
VPC或TCS
 * @method void setNetworkType(string $NetworkType) 设置网络类型。
VPC或TCS
 * @method string getTemplateId() 获取实例所应用的参数模板 ID。
 * @method void setTemplateId(string $TemplateId) 设置实例所应用的参数模板 ID。
 * @method array getComponents() 获取组件具体设置列表。
 * @method void setComponents(array $Components) 设置组件具体设置列表。
 * @method string getZone() 获取实例类型为高可用版，通过该参数指定主可用区。
 * @method void setZone(string $Zone) 设置实例类型为高可用版，通过该参数指定主可用区。
 * @method array getSlaveZones() 获取实例类型为高可用版，通过该参数指定备可用区。
 * @method void setSlaveZones(array $SlaveZones) 设置实例类型为高可用版，通过该参数指定备可用区。
 * @method boolean getIsNoExpired() 获取是否长期有效
 * @method void setIsNoExpired(boolean $IsNoExpired) 设置是否长期有效
 * @method string getEngineName() 获取引擎名称，业务自定义。
 * @method void setEngineName(string $EngineName) 设置引擎名称，业务自定义。
 * @method string getEngineVersion() 获取引擎版本，业务自定义。
 * @method void setEngineVersion(string $EngineVersion) 设置引擎版本，业务自定义。
 * @method string getBrief() 获取实例描述。
 * @method void setBrief(string $Brief) 设置实例描述。
 * @method string getChief() 获取负责人信息。
 * @method void setChief(string $Chief) 设置负责人信息。
 * @method string getDBA() 获取DBA人员信息
 * @method void setDBA(string $DBA) 设置DBA人员信息
 * @method string getNodeType() 获取指定实例的节点类型。具体信息，请参见[选择节点类型](https://cloud.tencent.com/document/product/1709/113399)。
- compute：计费型。
- normal：标准型。
- store：存储型。
 * @method void setNodeType(string $NodeType) 设置指定实例的节点类型。具体信息，请参见[选择节点类型](https://cloud.tencent.com/document/product/1709/113399)。
- compute：计费型。
- normal：标准型。
- store：存储型。
 * @method integer getCpu() 获取指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。
- 计算型： 1、2、4、8、16、24、32。
- 标准型： 1、2、4、8、12、16。
- 存储型： 1、2、4、6、8。
 * @method void setCpu(integer $Cpu) 设置指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。
- 计算型： 1、2、4、8、16、24、32。
- 标准型： 1、2、4、8、12、16。
- 存储型： 1、2、4、6、8。
 * @method integer getMemory() 获取指定实例所需的内存大小。单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 * @method void setMemory(integer $Memory) 设置指定实例所需的内存大小。单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 * @method integer getDiskSize() 获取指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 * @method void setDiskSize(integer $DiskSize) 设置指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 * @method integer getWorkerNodeNum() 获取指定实例所需配置的节点数量。选择方法，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 * @method void setWorkerNodeNum(integer $WorkerNodeNum) 设置指定实例所需配置的节点数量。选择方法，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 私有网络 ID。
     */
    public $VpcId;

    /**
     * @var string 私有网络 VPC 的子网 ID。
     */
    public $SubnetId;

    /**
     * @var integer 指定实例计费方式。
- 0：按量付费。
- 1：包年包月。
     */
    public $PayMode;

    /**
     * @var string 设置实例名称。仅支持长度不超过 60 的中文/英文/数字/-/_。
     */
    public $InstanceName;

    /**
     * @var array 安全组 ID。
     */
    public $SecurityGroupIds;

    /**
     * @var integer 若计费方式为包年包月，指定包年包月续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
     */
    public $PayPeriod;

    /**
     * @var integer 若为包年包月计费，需指定是否开启自动续费。
- 0：不开启自动续费。
- 1：开启自动续费。
     */
    public $AutoRenew;

    /**
     * @var string 实例额外参数，通过json提交。
     */
    public $Params;

    /**
     * @var array 以数组形式列出标签信息。
     */
    public $ResourceTags;

    /**
     * @var string 指定实例所属项目 ID。
     * @deprecated
     */
    public $Project;

    /**
     * @var integer 产品版本，0-标准版，1-容量增强版
     */
    public $ProductType;

    /**
     * @var string 实例类型。
- base：免费测试版。
- single：单机版。
- cluster：高可用版。
     */
    public $InstanceType;

    /**
     * @var string 实例类型为高可用版，需指定可用区选项。
- two：两可用区。
- three：三可用区。
     */
    public $Mode;

    /**
     * @var integer 购买实例数量。
     */
    public $GoodsNum;

    /**
     * @var string 网络类型。
VPC或TCS
     * @deprecated
     */
    public $NetworkType;

    /**
     * @var string 实例所应用的参数模板 ID。
     * @deprecated
     */
    public $TemplateId;

    /**
     * @var array 组件具体设置列表。
     * @deprecated
     */
    public $Components;

    /**
     * @var string 实例类型为高可用版，通过该参数指定主可用区。
     * @deprecated
     */
    public $Zone;

    /**
     * @var array 实例类型为高可用版，通过该参数指定备可用区。
     * @deprecated
     */
    public $SlaveZones;

    /**
     * @var boolean 是否长期有效
     * @deprecated
     */
    public $IsNoExpired;

    /**
     * @var string 引擎名称，业务自定义。
     * @deprecated
     */
    public $EngineName;

    /**
     * @var string 引擎版本，业务自定义。
     * @deprecated
     */
    public $EngineVersion;

    /**
     * @var string 实例描述。
     * @deprecated
     */
    public $Brief;

    /**
     * @var string 负责人信息。
     * @deprecated
     */
    public $Chief;

    /**
     * @var string DBA人员信息
     * @deprecated
     */
    public $DBA;

    /**
     * @var string 指定实例的节点类型。具体信息，请参见[选择节点类型](https://cloud.tencent.com/document/product/1709/113399)。
- compute：计费型。
- normal：标准型。
- store：存储型。
     * @deprecated
     */
    public $NodeType;

    /**
     * @var integer 指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。
- 计算型： 1、2、4、8、16、24、32。
- 标准型： 1、2、4、8、12、16。
- 存储型： 1、2、4、6、8。
     */
    public $Cpu;

    /**
     * @var integer 指定实例所需的内存大小。单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     */
    public $Memory;

    /**
     * @var integer 指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     */
    public $DiskSize;

    /**
     * @var integer 指定实例所需配置的节点数量。选择方法，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     */
    public $WorkerNodeNum;

    /**
     * @param string $VpcId 私有网络 ID。
     * @param string $SubnetId 私有网络 VPC 的子网 ID。
     * @param integer $PayMode 指定实例计费方式。
- 0：按量付费。
- 1：包年包月。
     * @param string $InstanceName 设置实例名称。仅支持长度不超过 60 的中文/英文/数字/-/_。
     * @param array $SecurityGroupIds 安全组 ID。
     * @param integer $PayPeriod 若计费方式为包年包月，指定包年包月续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
     * @param integer $AutoRenew 若为包年包月计费，需指定是否开启自动续费。
- 0：不开启自动续费。
- 1：开启自动续费。
     * @param string $Params 实例额外参数，通过json提交。
     * @param array $ResourceTags 以数组形式列出标签信息。
     * @param string $Project 指定实例所属项目 ID。
     * @param integer $ProductType 产品版本，0-标准版，1-容量增强版
     * @param string $InstanceType 实例类型。
- base：免费测试版。
- single：单机版。
- cluster：高可用版。
     * @param string $Mode 实例类型为高可用版，需指定可用区选项。
- two：两可用区。
- three：三可用区。
     * @param integer $GoodsNum 购买实例数量。
     * @param string $NetworkType 网络类型。
VPC或TCS
     * @param string $TemplateId 实例所应用的参数模板 ID。
     * @param array $Components 组件具体设置列表。
     * @param string $Zone 实例类型为高可用版，通过该参数指定主可用区。
     * @param array $SlaveZones 实例类型为高可用版，通过该参数指定备可用区。
     * @param boolean $IsNoExpired 是否长期有效
     * @param string $EngineName 引擎名称，业务自定义。
     * @param string $EngineVersion 引擎版本，业务自定义。
     * @param string $Brief 实例描述。
     * @param string $Chief 负责人信息。
     * @param string $DBA DBA人员信息
     * @param string $NodeType 指定实例的节点类型。具体信息，请参见[选择节点类型](https://cloud.tencent.com/document/product/1709/113399)。
- compute：计费型。
- normal：标准型。
- store：存储型。
     * @param integer $Cpu 指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。
- 计算型： 1、2、4、8、16、24、32。
- 标准型： 1、2、4、8、12、16。
- 存储型： 1、2、4、6、8。
     * @param integer $Memory 指定实例所需的内存大小。单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     * @param integer $DiskSize 指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
     * @param integer $WorkerNodeNum 指定实例所需配置的节点数量。选择方法，请参见[配置规格（选型）](https://cloud.tencent.com/document/product/1709/113399)。
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("PayPeriod",$param) and $param["PayPeriod"] !== null) {
            $this->PayPeriod = $param["PayPeriod"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = $param["Project"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new CreateInstancesComponent();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = $param["SlaveZones"];
        }

        if (array_key_exists("IsNoExpired",$param) and $param["IsNoExpired"] !== null) {
            $this->IsNoExpired = $param["IsNoExpired"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Brief",$param) and $param["Brief"] !== null) {
            $this->Brief = $param["Brief"];
        }

        if (array_key_exists("Chief",$param) and $param["Chief"] !== null) {
            $this->Chief = $param["Chief"];
        }

        if (array_key_exists("DBA",$param) and $param["DBA"] !== null) {
            $this->DBA = $param["DBA"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("WorkerNodeNum",$param) and $param["WorkerNodeNum"] !== null) {
            $this->WorkerNodeNum = $param["WorkerNodeNum"];
        }
    }
}
