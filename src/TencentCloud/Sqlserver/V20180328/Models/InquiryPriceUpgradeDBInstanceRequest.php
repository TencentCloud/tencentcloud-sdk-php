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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceUpgradeDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID，形如mssql-njj2mtpl</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID，形如mssql-njj2mtpl</p>
 * @method integer getMemory() 获取<p>实例升级后的内存大小，单位GB，其值不能比当前实例内存小</p>
 * @method void setMemory(integer $Memory) 设置<p>实例升级后的内存大小，单位GB，其值不能比当前实例内存小</p>
 * @method integer getStorage() 获取<p>实例升级后的磁盘大小，单位GB，其值不能比当前实例磁盘小</p>
 * @method void setStorage(integer $Storage) 设置<p>实例升级后的磁盘大小，单位GB，其值不能比当前实例磁盘小</p>
 * @method integer getCpu() 获取<p>实例升级后的CPU核心数，其值不能比当前实例CPU小</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例升级后的CPU核心数，其值不能比当前实例CPU小</p>
 * @method integer getThroughputPerformance() 获取<p>额外磁盘 IO 吞吐量</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置<p>额外磁盘 IO 吞吐量</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
 */
class InquiryPriceUpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID，形如mssql-njj2mtpl</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>实例升级后的内存大小，单位GB，其值不能比当前实例内存小</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例升级后的磁盘大小，单位GB，其值不能比当前实例磁盘小</p>
     */
    public $Storage;

    /**
     * @var integer <p>实例升级后的CPU核心数，其值不能比当前实例CPU小</p>
     */
    public $Cpu;

    /**
     * @var integer <p>额外磁盘 IO 吞吐量</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
     */
    public $ThroughputPerformance;

    /**
     * @param string $InstanceId <p>实例ID，形如mssql-njj2mtpl</p>
     * @param integer $Memory <p>实例升级后的内存大小，单位GB，其值不能比当前实例内存小</p>
     * @param integer $Storage <p>实例升级后的磁盘大小，单位GB，其值不能比当前实例磁盘小</p>
     * @param integer $Cpu <p>实例升级后的CPU核心数，其值不能比当前实例CPU小</p>
     * @param integer $ThroughputPerformance <p>额外磁盘 IO 吞吐量</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
