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
 * @method string getVpcId() 获取<p>私有网络 ID。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络 ID。</p>
 * @method string getSubnetId() 获取<p>私有网络 VPC 的子网 ID。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络 VPC 的子网 ID。</p>
 * @method integer getPayMode() 获取<p>指定实例计费方式。</p><ul><li>0：按量付费。</li><li>1：包年包月。</li></ul>
 * @method void setPayMode(integer $PayMode) 设置<p>指定实例计费方式。</p><ul><li>0：按量付费。</li><li>1：包年包月。</li></ul>
 * @method string getInstanceName() 获取<p>设置实例名称。仅支持长度不超过 60 的中文/英文/数字/-/_。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>设置实例名称。仅支持长度不超过 60 的中文/英文/数字/-/_。</p>
 * @method array getSecurityGroupIds() 获取<p>安全组 ID。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组 ID。</p>
 * @method integer getPayPeriod() 获取<p>若计费方式为包年包月，指定包年包月续费的时长。</p><ul><li>单位：月。</li><li>取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。</li></ul>
 * @method void setPayPeriod(integer $PayPeriod) 设置<p>若计费方式为包年包月，指定包年包月续费的时长。</p><ul><li>单位：月。</li><li>取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。</li></ul>
 * @method integer getAutoRenew() 获取<p>若为包年包月计费，需指定是否开启自动续费。</p><ul><li>0：不开启自动续费。</li><li>1：开启自动续费。</li></ul>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>若为包年包月计费，需指定是否开启自动续费。</p><ul><li>0：不开启自动续费。</li><li>1：开启自动续费。</li></ul>
 * @method string getParams() 获取<p>实例额外参数，通过json提交。</p>
 * @method void setParams(string $Params) 设置<p>实例额外参数，通过json提交。</p>
 * @method array getResourceTags() 获取<p>以数组形式列出标签信息。</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>以数组形式列出标签信息。</p>
 * @method string getProject() 获取<p>指定实例所属项目 ID。</p>
 * @method void setProject(string $Project) 设置<p>指定实例所属项目 ID。</p>
 * @method integer getProductType() 获取<p>产品版本，0-标准版，1-容量增强版</p>
 * @method void setProductType(integer $ProductType) 设置<p>产品版本，0-标准版，1-容量增强版</p>
 * @method string getInstanceType() 获取<p>实例类型。</p><ul><li>base：免费测试版。</li><li>single：单机版。</li><li>cluster：高可用版。</li></ul>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型。</p><ul><li>base：免费测试版。</li><li>single：单机版。</li><li>cluster：高可用版。</li></ul>
 * @method string getMode() 获取<p>实例类型为高可用版，需指定可用区选项。</p><ul><li>two：两可用区。</li><li>three：三可用区。</li></ul>
 * @method void setMode(string $Mode) 设置<p>实例类型为高可用版，需指定可用区选项。</p><ul><li>two：两可用区。</li><li>three：三可用区。</li></ul>
 * @method integer getGoodsNum() 获取<p>购买实例数量。</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>购买实例数量。</p>
 * @method string getNetworkType() 获取<p>网络类型。<br>VPC或TCS</p>
 * @method void setNetworkType(string $NetworkType) 设置<p>网络类型。<br>VPC或TCS</p>
 * @method string getTemplateId() 获取<p>实例所应用的参数模板 ID。</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>实例所应用的参数模板 ID。</p>
 * @method array getComponents() 获取<p>组件具体设置列表。</p>
 * @method void setComponents(array $Components) 设置<p>组件具体设置列表。</p>
 * @method string getZone() 获取<p>实例类型为高可用版，通过该参数指定主可用区。</p>
 * @method void setZone(string $Zone) 设置<p>实例类型为高可用版，通过该参数指定主可用区。</p>
 * @method array getSlaveZones() 获取<p>实例类型为高可用版，通过该参数指定备可用区。</p>
 * @method void setSlaveZones(array $SlaveZones) 设置<p>实例类型为高可用版，通过该参数指定备可用区。</p>
 * @method boolean getIsNoExpired() 获取<p>是否长期有效</p>
 * @method void setIsNoExpired(boolean $IsNoExpired) 设置<p>是否长期有效</p>
 * @method string getEngineName() 获取<p>引擎名称，业务自定义。</p>
 * @method void setEngineName(string $EngineName) 设置<p>引擎名称，业务自定义。</p>
 * @method string getEngineVersion() 获取<p>引擎版本，业务自定义。</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>引擎版本，业务自定义。</p>
 * @method string getBrief() 获取<p>实例描述。</p>
 * @method void setBrief(string $Brief) 设置<p>实例描述。</p>
 * @method string getChief() 获取<p>负责人信息。</p>
 * @method void setChief(string $Chief) 设置<p>负责人信息。</p>
 * @method string getDBA() 获取<p>DBA人员信息</p>
 * @method void setDBA(string $DBA) 设置<p>DBA人员信息</p>
 * @method string getNodeType() 获取<p>指定实例的节点类型。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">选择节点类型</a>。</p><ul><li>compute：计费型。</li><li>normal：标准型。</li><li>store：存储型。</li></ul>
 * @method void setNodeType(string $NodeType) 设置<p>指定实例的节点类型。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">选择节点类型</a>。</p><ul><li>compute：计费型。</li><li>normal：标准型。</li><li>store：存储型。</li></ul>
 * @method integer getCpu() 获取<p>指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。</p><ul><li>计算型： 1、2、4、8、16、24、32。</li><li>标准型： 1、2、4、8、12、16。</li><li>存储型： 1、2、4、6、8。</li></ul>
 * @method void setCpu(integer $Cpu) 设置<p>指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。</p><ul><li>计算型： 1、2、4、8、16、24、32。</li><li>标准型： 1、2、4、8、12、16。</li><li>存储型： 1、2、4、6、8。</li></ul>
 * @method integer getMemory() 获取<p>指定实例所需的内存大小。单位：GB。选择具体规格，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
 * @method void setMemory(integer $Memory) 设置<p>指定实例所需的内存大小。单位：GB。选择具体规格，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
 * @method integer getDiskSize() 获取<p>指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
 * @method integer getWorkerNodeNum() 获取<p>指定实例所需配置的节点数量。选择方法，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
 * @method void setWorkerNodeNum(integer $WorkerNodeNum) 设置<p>指定实例所需配置的节点数量。选择方法，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
 * @method boolean getEnableEncryption() 获取<p>是否开启磁盘数据存储加密（仅 CBS 数据盘生效，需落在 VECTORDB_DISK_ENCRYPT_REGION 白名单地域，默认 false 不开启）</p><p>默认值：true</p>
 * @method void setEnableEncryption(boolean $EnableEncryption) 设置<p>是否开启磁盘数据存储加密（仅 CBS 数据盘生效，需落在 VECTORDB_DISK_ENCRYPT_REGION 白名单地域，默认 false 不开启）</p><p>默认值：true</p>
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>私有网络 ID。</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络 VPC 的子网 ID。</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>指定实例计费方式。</p><ul><li>0：按量付费。</li><li>1：包年包月。</li></ul>
     */
    public $PayMode;

    /**
     * @var string <p>设置实例名称。仅支持长度不超过 60 的中文/英文/数字/-/_。</p>
     */
    public $InstanceName;

    /**
     * @var array <p>安全组 ID。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var integer <p>若计费方式为包年包月，指定包年包月续费的时长。</p><ul><li>单位：月。</li><li>取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。</li></ul>
     */
    public $PayPeriod;

    /**
     * @var integer <p>若为包年包月计费，需指定是否开启自动续费。</p><ul><li>0：不开启自动续费。</li><li>1：开启自动续费。</li></ul>
     */
    public $AutoRenew;

    /**
     * @var string <p>实例额外参数，通过json提交。</p>
     */
    public $Params;

    /**
     * @var array <p>以数组形式列出标签信息。</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>指定实例所属项目 ID。</p>
     * @deprecated
     */
    public $Project;

    /**
     * @var integer <p>产品版本，0-标准版，1-容量增强版</p>
     */
    public $ProductType;

    /**
     * @var string <p>实例类型。</p><ul><li>base：免费测试版。</li><li>single：单机版。</li><li>cluster：高可用版。</li></ul>
     */
    public $InstanceType;

    /**
     * @var string <p>实例类型为高可用版，需指定可用区选项。</p><ul><li>two：两可用区。</li><li>three：三可用区。</li></ul>
     */
    public $Mode;

    /**
     * @var integer <p>购买实例数量。</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>网络类型。<br>VPC或TCS</p>
     * @deprecated
     */
    public $NetworkType;

    /**
     * @var string <p>实例所应用的参数模板 ID。</p>
     * @deprecated
     */
    public $TemplateId;

    /**
     * @var array <p>组件具体设置列表。</p>
     * @deprecated
     */
    public $Components;

    /**
     * @var string <p>实例类型为高可用版，通过该参数指定主可用区。</p>
     * @deprecated
     */
    public $Zone;

    /**
     * @var array <p>实例类型为高可用版，通过该参数指定备可用区。</p>
     * @deprecated
     */
    public $SlaveZones;

    /**
     * @var boolean <p>是否长期有效</p>
     * @deprecated
     */
    public $IsNoExpired;

    /**
     * @var string <p>引擎名称，业务自定义。</p>
     * @deprecated
     */
    public $EngineName;

    /**
     * @var string <p>引擎版本，业务自定义。</p>
     * @deprecated
     */
    public $EngineVersion;

    /**
     * @var string <p>实例描述。</p>
     * @deprecated
     */
    public $Brief;

    /**
     * @var string <p>负责人信息。</p>
     * @deprecated
     */
    public $Chief;

    /**
     * @var string <p>DBA人员信息</p>
     * @deprecated
     */
    public $DBA;

    /**
     * @var string <p>指定实例的节点类型。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">选择节点类型</a>。</p><ul><li>compute：计费型。</li><li>normal：标准型。</li><li>store：存储型。</li></ul>
     * @deprecated
     */
    public $NodeType;

    /**
     * @var integer <p>指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。</p><ul><li>计算型： 1、2、4、8、16、24、32。</li><li>标准型： 1、2、4、8、12、16。</li><li>存储型： 1、2、4、6、8。</li></ul>
     */
    public $Cpu;

    /**
     * @var integer <p>指定实例所需的内存大小。单位：GB。选择具体规格，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
     */
    public $Memory;

    /**
     * @var integer <p>指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
     */
    public $DiskSize;

    /**
     * @var integer <p>指定实例所需配置的节点数量。选择方法，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
     */
    public $WorkerNodeNum;

    /**
     * @var boolean <p>是否开启磁盘数据存储加密（仅 CBS 数据盘生效，需落在 VECTORDB_DISK_ENCRYPT_REGION 白名单地域，默认 false 不开启）</p><p>默认值：true</p>
     */
    public $EnableEncryption;

    /**
     * @param string $VpcId <p>私有网络 ID。</p>
     * @param string $SubnetId <p>私有网络 VPC 的子网 ID。</p>
     * @param integer $PayMode <p>指定实例计费方式。</p><ul><li>0：按量付费。</li><li>1：包年包月。</li></ul>
     * @param string $InstanceName <p>设置实例名称。仅支持长度不超过 60 的中文/英文/数字/-/_。</p>
     * @param array $SecurityGroupIds <p>安全组 ID。</p>
     * @param integer $PayPeriod <p>若计费方式为包年包月，指定包年包月续费的时长。</p><ul><li>单位：月。</li><li>取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。</li></ul>
     * @param integer $AutoRenew <p>若为包年包月计费，需指定是否开启自动续费。</p><ul><li>0：不开启自动续费。</li><li>1：开启自动续费。</li></ul>
     * @param string $Params <p>实例额外参数，通过json提交。</p>
     * @param array $ResourceTags <p>以数组形式列出标签信息。</p>
     * @param string $Project <p>指定实例所属项目 ID。</p>
     * @param integer $ProductType <p>产品版本，0-标准版，1-容量增强版</p>
     * @param string $InstanceType <p>实例类型。</p><ul><li>base：免费测试版。</li><li>single：单机版。</li><li>cluster：高可用版。</li></ul>
     * @param string $Mode <p>实例类型为高可用版，需指定可用区选项。</p><ul><li>two：两可用区。</li><li>three：三可用区。</li></ul>
     * @param integer $GoodsNum <p>购买实例数量。</p>
     * @param string $NetworkType <p>网络类型。<br>VPC或TCS</p>
     * @param string $TemplateId <p>实例所应用的参数模板 ID。</p>
     * @param array $Components <p>组件具体设置列表。</p>
     * @param string $Zone <p>实例类型为高可用版，通过该参数指定主可用区。</p>
     * @param array $SlaveZones <p>实例类型为高可用版，通过该参数指定备可用区。</p>
     * @param boolean $IsNoExpired <p>是否长期有效</p>
     * @param string $EngineName <p>引擎名称，业务自定义。</p>
     * @param string $EngineVersion <p>引擎版本，业务自定义。</p>
     * @param string $Brief <p>实例描述。</p>
     * @param string $Chief <p>负责人信息。</p>
     * @param string $DBA <p>DBA人员信息</p>
     * @param string $NodeType <p>指定实例的节点类型。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">选择节点类型</a>。</p><ul><li>compute：计费型。</li><li>normal：标准型。</li><li>store：存储型。</li></ul>
     * @param integer $Cpu <p>指定实例所需的 CPU 核数。实例类型不同，支持的 CPU 核数存在差异。</p><ul><li>计算型： 1、2、4、8、16、24、32。</li><li>标准型： 1、2、4、8、12、16。</li><li>存储型： 1、2、4、6、8。</li></ul>
     * @param integer $Memory <p>指定实例所需的内存大小。单位：GB。选择具体规格，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
     * @param integer $DiskSize <p>指定实例所需的磁盘大小，单位：GB。选择具体规格，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
     * @param integer $WorkerNodeNum <p>指定实例所需配置的节点数量。选择方法，请参见<a href="https://cloud.tencent.com/document/product/1709/113399">配置规格（选型）</a>。</p>
     * @param boolean $EnableEncryption <p>是否开启磁盘数据存储加密（仅 CBS 数据盘生效，需落在 VECTORDB_DISK_ENCRYPT_REGION 白名单地域，默认 false 不开启）</p><p>默认值：true</p>
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

        if (array_key_exists("EnableEncryption",$param) and $param["EnableEncryption"] !== null) {
            $this->EnableEncryption = $param["EnableEncryption"];
        }
    }
}
