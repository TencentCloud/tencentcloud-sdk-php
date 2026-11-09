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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method boolean getDryRun() 获取<p>是否仅做预检查，不实际执行变配。true: 仅返回变配计划和预检查结果；false: 实际执行变配（默认）</p>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否仅做预检查，不实际执行变配。true: 仅返回变配计划和预检查结果；false: 实际执行变配（默认）</p>
 * @method integer getHybridNodeCpu() 获取<p>对等节点CPU核数，不传则保持当前值不变</p>
 * @method void setHybridNodeCpu(integer $HybridNodeCpu) 设置<p>对等节点CPU核数，不传则保持当前值不变</p>
 * @method integer getHybridNodeMem() 获取<p>对等节点内存大小，单位GB，不传则保持当前值不变</p>
 * @method void setHybridNodeMem(integer $HybridNodeMem) 设置<p>对等节点内存大小，单位GB，不传则保持当前值不变</p>
 * @method integer getHybridNodeNum() 获取<p>对等节点数量，不传则保持当前值不变</p>
 * @method void setHybridNodeNum(integer $HybridNodeNum) 设置<p>对等节点数量，不传则保持当前值不变</p>
 * @method integer getDisk() 获取<p>对等节点磁盘容量，单位GB，不传则保持当前值不变</p>
 * @method void setDisk(integer $Disk) 设置<p>对等节点磁盘容量，单位GB，不传则保持当前值不变</p>
 * @method string getStorageType() 获取<p>存储类型，可选值：CLOUD_HSSD（增强型SSD云硬盘）、CLOUD_TCS（本地盘）、CLOUD_BSSD（通用型SSD云硬盘），不传则保持当前值不变</p>
 * @method void setStorageType(string $StorageType) 设置<p>存储类型，可选值：CLOUD_HSSD（增强型SSD云硬盘）、CLOUD_TCS（本地盘）、CLOUD_BSSD（通用型SSD云硬盘），不传则保持当前值不变</p>
 * @method string getSpecCode() 获取<p>规格编码，如 4c8g、16c32g 等</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>规格编码，如 4c8g、16c32g 等</p>
 * @method array getZones() 获取<p>目标可用区列表，不传则保持当前值不变</p>
 * @method void setZones(array $Zones) 设置<p>目标可用区列表，不传则保持当前值不变</p>
 * @method integer getAZMode() 获取<p>可用区模式，1: 单可用区，3: 多可用区主AZ模式</p>
 * @method void setAZMode(integer $AZMode) 设置<p>可用区模式，1: 单可用区，3: 多可用区主AZ模式</p>
 * @method string getPrimaryAZ() 获取<p>主可用区，AZMode传3时生效</p>
 * @method void setPrimaryAZ(string $PrimaryAZ) 设置<p>主可用区，AZMode传3时生效</p>
 * @method integer getFullReplications() 获取<p>全功能型副本数，取值范围1-3</p>
 * @method void setFullReplications(integer $FullReplications) 设置<p>全功能型副本数，取值范围1-3</p>
 */
class ModifyDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>是否仅做预检查，不实际执行变配。true: 仅返回变配计划和预检查结果；false: 实际执行变配（默认）</p>
     */
    public $DryRun;

    /**
     * @var integer <p>对等节点CPU核数，不传则保持当前值不变</p>
     */
    public $HybridNodeCpu;

    /**
     * @var integer <p>对等节点内存大小，单位GB，不传则保持当前值不变</p>
     */
    public $HybridNodeMem;

    /**
     * @var integer <p>对等节点数量，不传则保持当前值不变</p>
     */
    public $HybridNodeNum;

    /**
     * @var integer <p>对等节点磁盘容量，单位GB，不传则保持当前值不变</p>
     */
    public $Disk;

    /**
     * @var string <p>存储类型，可选值：CLOUD_HSSD（增强型SSD云硬盘）、CLOUD_TCS（本地盘）、CLOUD_BSSD（通用型SSD云硬盘），不传则保持当前值不变</p>
     */
    public $StorageType;

    /**
     * @var string <p>规格编码，如 4c8g、16c32g 等</p>
     */
    public $SpecCode;

    /**
     * @var array <p>目标可用区列表，不传则保持当前值不变</p>
     */
    public $Zones;

    /**
     * @var integer <p>可用区模式，1: 单可用区，3: 多可用区主AZ模式</p>
     */
    public $AZMode;

    /**
     * @var string <p>主可用区，AZMode传3时生效</p>
     */
    public $PrimaryAZ;

    /**
     * @var integer <p>全功能型副本数，取值范围1-3</p>
     */
    public $FullReplications;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param boolean $DryRun <p>是否仅做预检查，不实际执行变配。true: 仅返回变配计划和预检查结果；false: 实际执行变配（默认）</p>
     * @param integer $HybridNodeCpu <p>对等节点CPU核数，不传则保持当前值不变</p>
     * @param integer $HybridNodeMem <p>对等节点内存大小，单位GB，不传则保持当前值不变</p>
     * @param integer $HybridNodeNum <p>对等节点数量，不传则保持当前值不变</p>
     * @param integer $Disk <p>对等节点磁盘容量，单位GB，不传则保持当前值不变</p>
     * @param string $StorageType <p>存储类型，可选值：CLOUD_HSSD（增强型SSD云硬盘）、CLOUD_TCS（本地盘）、CLOUD_BSSD（通用型SSD云硬盘），不传则保持当前值不变</p>
     * @param string $SpecCode <p>规格编码，如 4c8g、16c32g 等</p>
     * @param array $Zones <p>目标可用区列表，不传则保持当前值不变</p>
     * @param integer $AZMode <p>可用区模式，1: 单可用区，3: 多可用区主AZ模式</p>
     * @param string $PrimaryAZ <p>主可用区，AZMode传3时生效</p>
     * @param integer $FullReplications <p>全功能型副本数，取值范围1-3</p>
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

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("HybridNodeCpu",$param) and $param["HybridNodeCpu"] !== null) {
            $this->HybridNodeCpu = $param["HybridNodeCpu"];
        }

        if (array_key_exists("HybridNodeMem",$param) and $param["HybridNodeMem"] !== null) {
            $this->HybridNodeMem = $param["HybridNodeMem"];
        }

        if (array_key_exists("HybridNodeNum",$param) and $param["HybridNodeNum"] !== null) {
            $this->HybridNodeNum = $param["HybridNodeNum"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("AZMode",$param) and $param["AZMode"] !== null) {
            $this->AZMode = $param["AZMode"];
        }

        if (array_key_exists("PrimaryAZ",$param) and $param["PrimaryAZ"] !== null) {
            $this->PrimaryAZ = $param["PrimaryAZ"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }
    }
}
