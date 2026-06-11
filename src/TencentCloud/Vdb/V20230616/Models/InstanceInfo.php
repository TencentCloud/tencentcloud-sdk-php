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
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getName() 获取<p>实例自定义名称。</p>
 * @method void setName(string $Name) 设置<p>实例自定义名称。</p>
 * @method integer getAppId() 获取<p>用户APPID。</p>
 * @method void setAppId(integer $AppId) 设置<p>用户APPID。</p>
 * @method string getRegion() 获取<p>地域。</p>
 * @method void setRegion(string $Region) 设置<p>地域。</p>
 * @method string getZone() 获取<p>可用区。</p>
 * @method void setZone(string $Zone) 设置<p>可用区。</p>
 * @method string getProduct() 获取<p>产品。</p>
 * @method void setProduct(string $Product) 设置<p>产品。</p>
 * @method array getNetworks() 获取<p>网络信息。</p>
 * @method void setNetworks(array $Networks) 设置<p>网络信息。</p>
 * @method integer getShardNum() 获取<p>分片信息。</p>
 * @method void setShardNum(integer $ShardNum) 设置<p>分片信息。</p>
 * @method integer getReplicaNum() 获取<p>副本数。</p>
 * @method void setReplicaNum(integer $ReplicaNum) 设置<p>副本数。</p>
 * @method float getCpu() 获取<p>CPU.</p>
 * @method void setCpu(float $Cpu) 设置<p>CPU.</p>
 * @method float getMemory() 获取<p>内存。</p>
 * @method void setMemory(float $Memory) 设置<p>内存。</p>
 * @method integer getDisk() 获取<p>磁盘。</p>
 * @method void setDisk(integer $Disk) 设置<p>磁盘。</p>
 * @method float getHealthScore() 获取<p>健康得分。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthScore(float $HealthScore) 设置<p>健康得分。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarning() 获取<p>异常告警。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarning(integer $Warning) 设置<p>异常告警。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProject() 获取<p>所属项目。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProject(string $Project) 设置<p>所属项目。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceTags() 获取<p>所属标签。</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>所属标签。</p>
 * @method string getCreatedAt() 获取<p>创建时间。</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间。</p>
 * @method string getStatus() 获取<p>资源状态。</p>
 * @method void setStatus(string $Status) 设置<p>资源状态。</p>
 * @method string getEngineName() 获取<p>引擎名称。</p>
 * @method void setEngineName(string $EngineName) 设置<p>引擎名称。</p>
 * @method string getEngineVersion() 获取<p>引擎版本。</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>引擎版本。</p>
 * @method string getApiVersion() 获取<p>api版本</p>
 * @method void setApiVersion(string $ApiVersion) 设置<p>api版本</p>
 * @method integer getPayMode() 获取<p>计费模式。</p>
 * @method void setPayMode(integer $PayMode) 设置<p>计费模式。</p>
 * @method string getExtend() 获取<p>差异化扩展信息, json格式。</p>
 * @method void setExtend(string $Extend) 设置<p>差异化扩展信息, json格式。</p>
 * @method string getExpiredAt() 获取<p>过期时间。</p>
 * @method void setExpiredAt(string $ExpiredAt) 设置<p>过期时间。</p>
 * @method boolean getIsNoExpired() 获取<p>是否不过期(永久)。</p>
 * @method void setIsNoExpired(boolean $IsNoExpired) 设置<p>是否不过期(永久)。</p>
 * @method integer getProductType() 获取<p>产品版本，0-标准版，1-容量增强版</p>
 * @method void setProductType(integer $ProductType) 设置<p>产品版本，0-标准版，1-容量增强版</p>
 * @method string getInstanceType() 获取<p>实例类型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型</p>
 * @method string getNodeType() 获取<p>节点类型</p>
 * @method void setNodeType(string $NodeType) 设置<p>节点类型</p>
 * @method string getWanAddress() 获取<p>外网地址。</p>
 * @method void setWanAddress(string $WanAddress) 设置<p>外网地址。</p>
 * @method string getIsolateAt() 获取<p>隔离时间</p>
 * @method void setIsolateAt(string $IsolateAt) 设置<p>隔离时间</p>
 * @method integer getAutoRenew() 获取<p>是否自动续费。0: 不自动续费(可以支持特权不停服)；1:自动续费；2:到期不续费.</p>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>是否自动续费。0: 不自动续费(可以支持特权不停服)；1:自动续费；2:到期不续费.</p>
 * @method integer getTaskStatus() 获取<p>任务状态：0-无任务；1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中</p>
 * @method void setTaskStatus(integer $TaskStatus) 设置<p>任务状态：0-无任务；1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中</p>
 * @method array getSecurityGroupIds() 获取<p>绑定的安全组id</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>绑定的安全组id</p>
 * @method string getUpgradeVersion() 获取<p>可升级版本号</p>
 * @method void setUpgradeVersion(string $UpgradeVersion) 设置<p>可升级版本号</p>
 * @method boolean getIsInternal() 获取<p>是否为内部实例</p>
 * @method void setIsInternal(boolean $IsInternal) 设置<p>是否为内部实例</p>
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例自定义名称。</p>
     */
    public $Name;

    /**
     * @var integer <p>用户APPID。</p>
     */
    public $AppId;

    /**
     * @var string <p>地域。</p>
     */
    public $Region;

    /**
     * @var string <p>可用区。</p>
     */
    public $Zone;

    /**
     * @var string <p>产品。</p>
     */
    public $Product;

    /**
     * @var array <p>网络信息。</p>
     */
    public $Networks;

    /**
     * @var integer <p>分片信息。</p>
     */
    public $ShardNum;

    /**
     * @var integer <p>副本数。</p>
     */
    public $ReplicaNum;

    /**
     * @var float <p>CPU.</p>
     */
    public $Cpu;

    /**
     * @var float <p>内存。</p>
     */
    public $Memory;

    /**
     * @var integer <p>磁盘。</p>
     */
    public $Disk;

    /**
     * @var float <p>健康得分。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $HealthScore;

    /**
     * @var integer <p>异常告警。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Warning;

    /**
     * @var string <p>所属项目。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Project;

    /**
     * @var array <p>所属标签。</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>资源状态。</p>
     */
    public $Status;

    /**
     * @var string <p>引擎名称。</p>
     */
    public $EngineName;

    /**
     * @var string <p>引擎版本。</p>
     */
    public $EngineVersion;

    /**
     * @var string <p>api版本</p>
     */
    public $ApiVersion;

    /**
     * @var integer <p>计费模式。</p>
     */
    public $PayMode;

    /**
     * @var string <p>差异化扩展信息, json格式。</p>
     */
    public $Extend;

    /**
     * @var string <p>过期时间。</p>
     */
    public $ExpiredAt;

    /**
     * @var boolean <p>是否不过期(永久)。</p>
     */
    public $IsNoExpired;

    /**
     * @var integer <p>产品版本，0-标准版，1-容量增强版</p>
     */
    public $ProductType;

    /**
     * @var string <p>实例类型</p>
     */
    public $InstanceType;

    /**
     * @var string <p>节点类型</p>
     */
    public $NodeType;

    /**
     * @var string <p>外网地址。</p>
     */
    public $WanAddress;

    /**
     * @var string <p>隔离时间</p>
     */
    public $IsolateAt;

    /**
     * @var integer <p>是否自动续费。0: 不自动续费(可以支持特权不停服)；1:自动续费；2:到期不续费.</p>
     */
    public $AutoRenew;

    /**
     * @var integer <p>任务状态：0-无任务；1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中</p>
     */
    public $TaskStatus;

    /**
     * @var array <p>绑定的安全组id</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>可升级版本号</p>
     */
    public $UpgradeVersion;

    /**
     * @var boolean <p>是否为内部实例</p>
     */
    public $IsInternal;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $Name <p>实例自定义名称。</p>
     * @param integer $AppId <p>用户APPID。</p>
     * @param string $Region <p>地域。</p>
     * @param string $Zone <p>可用区。</p>
     * @param string $Product <p>产品。</p>
     * @param array $Networks <p>网络信息。</p>
     * @param integer $ShardNum <p>分片信息。</p>
     * @param integer $ReplicaNum <p>副本数。</p>
     * @param float $Cpu <p>CPU.</p>
     * @param float $Memory <p>内存。</p>
     * @param integer $Disk <p>磁盘。</p>
     * @param float $HealthScore <p>健康得分。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Warning <p>异常告警。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Project <p>所属项目。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceTags <p>所属标签。</p>
     * @param string $CreatedAt <p>创建时间。</p>
     * @param string $Status <p>资源状态。</p>
     * @param string $EngineName <p>引擎名称。</p>
     * @param string $EngineVersion <p>引擎版本。</p>
     * @param string $ApiVersion <p>api版本</p>
     * @param integer $PayMode <p>计费模式。</p>
     * @param string $Extend <p>差异化扩展信息, json格式。</p>
     * @param string $ExpiredAt <p>过期时间。</p>
     * @param boolean $IsNoExpired <p>是否不过期(永久)。</p>
     * @param integer $ProductType <p>产品版本，0-标准版，1-容量增强版</p>
     * @param string $InstanceType <p>实例类型</p>
     * @param string $NodeType <p>节点类型</p>
     * @param string $WanAddress <p>外网地址。</p>
     * @param string $IsolateAt <p>隔离时间</p>
     * @param integer $AutoRenew <p>是否自动续费。0: 不自动续费(可以支持特权不停服)；1:自动续费；2:到期不续费.</p>
     * @param integer $TaskStatus <p>任务状态：0-无任务；1-待执行任务；2-密钥更新中；3-网络变更中；4-参数变更中；5-embedding变更中；6-ai套件变更中；7-滚动升级中；8-纵向扩容中；9-纵向缩容中；10-横向扩容中；11-横向缩容中</p>
     * @param array $SecurityGroupIds <p>绑定的安全组id</p>
     * @param string $UpgradeVersion <p>可升级版本号</p>
     * @param boolean $IsInternal <p>是否为内部实例</p>
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

        if (array_key_exists("UpgradeVersion",$param) and $param["UpgradeVersion"] !== null) {
            $this->UpgradeVersion = $param["UpgradeVersion"];
        }

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }
    }
}
