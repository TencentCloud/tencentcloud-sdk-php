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
 * 实例信息，用于实例列表
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getName() 获取实例自定义名称。
 * @method void setName(string $Name) 设置实例自定义名称。
 * @method integer getAppId() 获取用户APPID。
 * @method void setAppId(integer $AppId) 设置用户APPID。
 * @method string getRegion() 获取地域。
 * @method void setRegion(string $Region) 设置地域。
 * @method string getZone() 获取可用区。
 * @method void setZone(string $Zone) 设置可用区。
 * @method string getProduct() 获取产品。
 * @method void setProduct(string $Product) 设置产品。
 * @method array getNetworks() 获取网络信息。
 * @method void setNetworks(array $Networks) 设置网络信息。
 * @method integer getShardNum() 获取分片信息。
 * @method void setShardNum(integer $ShardNum) 设置分片信息。
 * @method integer getReplicaNum() 获取副本数。
 * @method void setReplicaNum(integer $ReplicaNum) 设置副本数。
 * @method float getCpu() 获取CPU.
 * @method void setCpu(float $Cpu) 设置CPU.
 * @method float getMemory() 获取内存。
 * @method void setMemory(float $Memory) 设置内存。
 * @method integer getDisk() 获取磁盘。
 * @method void setDisk(integer $Disk) 设置磁盘。
 * @method float getHealthScore() 获取健康得分。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthScore(float $HealthScore) 设置健康得分。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarning() 获取异常告警。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarning(integer $Warning) 设置异常告警。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProject() 获取所属项目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProject(string $Project) 设置所属项目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceTags() 获取所属标签。
 * @method void setResourceTags(array $ResourceTags) 设置所属标签。
 * @method string getCreatedAt() 获取创建时间。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间。
 * @method string getStatus() 获取资源状态。
 * @method void setStatus(string $Status) 设置资源状态。
 * @method string getEngineName() 获取引擎名称。
 * @method void setEngineName(string $EngineName) 设置引擎名称。
 * @method string getEngineVersion() 获取引擎版本。
 * @method void setEngineVersion(string $EngineVersion) 设置引擎版本。
 * @method string getApiVersion() 获取api版本
 * @method void setApiVersion(string $ApiVersion) 设置api版本
 * @method integer getPayMode() 获取计费模式。
 * @method void setPayMode(integer $PayMode) 设置计费模式。
 * @method string getExtend() 获取差异化扩展信息, json格式。
 * @method void setExtend(string $Extend) 设置差异化扩展信息, json格式。
 * @method string getExpiredAt() 获取过期时间。
 * @method void setExpiredAt(string $ExpiredAt) 设置过期时间。
 * @method boolean getIsNoExpired() 获取是否不过期(永久)。
 * @method void setIsNoExpired(boolean $IsNoExpired) 设置是否不过期(永久)。
 * @method integer getProductType() 获取产品版本，0-标准版，1-容量增强版
 * @method void setProductType(integer $ProductType) 设置产品版本，0-标准版，1-容量增强版
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getNodeType() 获取节点类型
 * @method void setNodeType(string $NodeType) 设置节点类型
 * @method string getWanAddress() 获取外网地址。
 * @method void setWanAddress(string $WanAddress) 设置外网地址。
 * @method string getIsolateAt() 获取隔离时间
 * @method void setIsolateAt(string $IsolateAt) 设置隔离时间
 * @method integer getAutoRenew() 获取是否自动续费。0: 不自动续费(可以支持特权不停服)；1:自动续费；2:到期不续费.
 * @method void setAutoRenew(integer $AutoRenew) 设置是否自动续费。0: 不自动续费(可以支持特权不停服)；1:自动续费；2:到期不续费.
 * @method integer getTaskStatus() 获取任务状态：0-无任务；1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态：0-无任务；1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中
 * @method array getSecurityGroupIds() 获取绑定的安全组id
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置绑定的安全组id
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 实例自定义名称。
     */
    public $Name;

    /**
     * @var integer 用户APPID。
     */
    public $AppId;

    /**
     * @var string 地域。
     */
    public $Region;

    /**
     * @var string 可用区。
     */
    public $Zone;

    /**
     * @var string 产品。
     */
    public $Product;

    /**
     * @var array 网络信息。
     */
    public $Networks;

    /**
     * @var integer 分片信息。
     */
    public $ShardNum;

    /**
     * @var integer 副本数。
     */
    public $ReplicaNum;

    /**
     * @var float CPU.
     */
    public $Cpu;

    /**
     * @var float 内存。
     */
    public $Memory;

    /**
     * @var integer 磁盘。
     */
    public $Disk;

    /**
     * @var float 健康得分。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $HealthScore;

    /**
     * @var integer 异常告警。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Warning;

    /**
     * @var string 所属项目。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Project;

    /**
     * @var array 所属标签。
     */
    public $ResourceTags;

    /**
     * @var string 创建时间。
     */
    public $CreatedAt;

    /**
     * @var string 资源状态。
     */
    public $Status;

    /**
     * @var string 引擎名称。
     */
    public $EngineName;

    /**
     * @var string 引擎版本。
     */
    public $EngineVersion;

    /**
     * @var string api版本
     */
    public $ApiVersion;

    /**
     * @var integer 计费模式。
     */
    public $PayMode;

    /**
     * @var string 差异化扩展信息, json格式。
     */
    public $Extend;

    /**
     * @var string 过期时间。
     */
    public $ExpiredAt;

    /**
     * @var boolean 是否不过期(永久)。
     */
    public $IsNoExpired;

    /**
     * @var integer 产品版本，0-标准版，1-容量增强版
     */
    public $ProductType;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 节点类型
     */
    public $NodeType;

    /**
     * @var string 外网地址。
     */
    public $WanAddress;

    /**
     * @var string 隔离时间
     */
    public $IsolateAt;

    /**
     * @var integer 是否自动续费。0: 不自动续费(可以支持特权不停服)；1:自动续费；2:到期不续费.
     */
    public $AutoRenew;

    /**
     * @var integer 任务状态：0-无任务；1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中
     */
    public $TaskStatus;

    /**
     * @var array 绑定的安全组id
     */
    public $SecurityGroupIds;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $Name 实例自定义名称。
     * @param integer $AppId 用户APPID。
     * @param string $Region 地域。
     * @param string $Zone 可用区。
     * @param string $Product 产品。
     * @param array $Networks 网络信息。
     * @param integer $ShardNum 分片信息。
     * @param integer $ReplicaNum 副本数。
     * @param float $Cpu CPU.
     * @param float $Memory 内存。
     * @param integer $Disk 磁盘。
     * @param float $HealthScore 健康得分。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Warning 异常告警。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Project 所属项目。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceTags 所属标签。
     * @param string $CreatedAt 创建时间。
     * @param string $Status 资源状态。
     * @param string $EngineName 引擎名称。
     * @param string $EngineVersion 引擎版本。
     * @param string $ApiVersion api版本
     * @param integer $PayMode 计费模式。
     * @param string $Extend 差异化扩展信息, json格式。
     * @param string $ExpiredAt 过期时间。
     * @param boolean $IsNoExpired 是否不过期(永久)。
     * @param integer $ProductType 产品版本，0-标准版，1-容量增强版
     * @param string $InstanceType 实例类型
     * @param string $NodeType 节点类型
     * @param string $WanAddress 外网地址。
     * @param string $IsolateAt 隔离时间
     * @param integer $AutoRenew 是否自动续费。0: 不自动续费(可以支持特权不停服)；1:自动续费；2:到期不续费.
     * @param integer $TaskStatus 任务状态：0-无任务；1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中
     * @param array $SecurityGroupIds 绑定的安全组id
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Networks",$param) and $param["Networks"] !== null) {
            $this->Networks = [];
            foreach ($param["Networks"] as $key => $value){
                $obj = new Network();
                $obj->deserialize($value);
                array_push($this->Networks, $obj);
            }
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("HealthScore",$param) and $param["HealthScore"] !== null) {
            $this->HealthScore = $param["HealthScore"];
        }

        if (array_key_exists("Warning",$param) and $param["Warning"] !== null) {
            $this->Warning = $param["Warning"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = $param["Project"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("ApiVersion",$param) and $param["ApiVersion"] !== null) {
            $this->ApiVersion = $param["ApiVersion"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Extend",$param) and $param["Extend"] !== null) {
            $this->Extend = $param["Extend"];
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }

        if (array_key_exists("IsNoExpired",$param) and $param["IsNoExpired"] !== null) {
            $this->IsNoExpired = $param["IsNoExpired"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("WanAddress",$param) and $param["WanAddress"] !== null) {
            $this->WanAddress = $param["WanAddress"];
        }

        if (array_key_exists("IsolateAt",$param) and $param["IsolateAt"] !== null) {
            $this->IsolateAt = $param["IsolateAt"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
