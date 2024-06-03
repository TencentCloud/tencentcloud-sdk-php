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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息，用于实例列表
 *
 * @method string getInstanceId() 获取实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取实例自定义名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置实例自定义名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户APPID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户APPID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProduct() 获取产品。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProduct(string $Product) 设置产品。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetworks() 获取网络信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworks(array $Networks) 设置网络信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShardNum() 获取分片信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardNum(integer $ShardNum) 设置分片信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicaNum() 获取副本数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaNum(integer $ReplicaNum) 设置副本数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpu() 获取CPU.
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(float $Cpu) 设置CPU.
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemory() 获取内存。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(float $Memory) 设置内存。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDisk() 获取磁盘。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisk(integer $Disk) 设置磁盘。
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTags(array $ResourceTags) 设置所属标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取资源状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置资源状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineName() 获取引擎名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineName(string $EngineName) 设置引擎名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineVersion() 获取引擎版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineVersion(string $EngineVersion) 设置引擎版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取计费模式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置计费模式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtend() 获取差异化扩展信息, json格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtend(string $Extend) 设置差异化扩展信息, json格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredAt() 获取过期时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredAt(string $ExpiredAt) 设置过期时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsNoExpired() 获取是否不过期(永久)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNoExpired(boolean $IsNoExpired) 设置是否不过期(永久)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanAddress() 获取外网地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanAddress(string $WanAddress) 设置外网地址。
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string 实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例自定义名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 用户APPID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 地域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 可用区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 产品。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Product;

    /**
     * @var array 网络信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Networks;

    /**
     * @var integer 分片信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardNum;

    /**
     * @var integer 副本数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaNum;

    /**
     * @var float CPU.
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var float 内存。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var integer 磁盘。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disk;

    /**
     * @var float 健康得分。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthScore;

    /**
     * @var integer 异常告警。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Warning;

    /**
     * @var string 所属项目。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Project;

    /**
     * @var array 所属标签。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTags;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 资源状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 引擎名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineName;

    /**
     * @var string 引擎版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineVersion;

    /**
     * @var integer 计费模式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var string 差异化扩展信息, json格式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extend;

    /**
     * @var string 过期时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredAt;

    /**
     * @var boolean 是否不过期(永久)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNoExpired;

    /**
     * @var string 外网地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanAddress;

    /**
     * @param string $InstanceId 实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 实例自定义名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户APPID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Product 产品。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Networks 网络信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShardNum 分片信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplicaNum 副本数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Cpu CPU.
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Memory 内存。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Disk 磁盘。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $HealthScore 健康得分。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Warning 异常告警。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Project 所属项目。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceTags 所属标签。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 资源状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineName 引擎名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineVersion 引擎版本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode 计费模式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extend 差异化扩展信息, json格式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredAt 过期时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsNoExpired 是否不过期(永久)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanAddress 外网地址。
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

        if (array_key_exists("WanAddress",$param) and $param["WanAddress"] !== null) {
            $this->WanAddress = $param["WanAddress"];
        }
    }
}
