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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceUpgradeDBInstance请求参数结构体
 *
 * @method integer getStorage() 获取实例的磁盘大小，单位GB
 * @method void setStorage(integer $Storage) 设置实例的磁盘大小，单位GB
 * @method integer getMemory() 获取实例的内存大小，单位GB
 * @method void setMemory(integer $Memory) 设置实例的内存大小，单位GB
 * @method string getDBInstanceId() 获取实例ID，形如postgres-hez4fh0v。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-hez4fh0v。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getInstanceChargeType() 获取实例计费类型。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型。
 * @method integer getCpu() 获取实例的Cpu大小，单位Core。
不传入此参数时，默认根据Memory确定的售卖规格所对应的Cpu进行设置。如Memory为2，支持的售卖规格有1核2GiB，则不传入Cpu时，Cpu默认为1。
 * @method void setCpu(integer $Cpu) 设置实例的Cpu大小，单位Core。
不传入此参数时，默认根据Memory确定的售卖规格所对应的Cpu进行设置。如Memory为2，支持的售卖规格有1核2GiB，则不传入Cpu时，Cpu默认为1。
 */
class InquiryPriceUpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer 实例的磁盘大小，单位GB
     */
    public $Storage;

    /**
     * @var integer 实例的内存大小，单位GB
     */
    public $Memory;

    /**
     * @var string 实例ID，形如postgres-hez4fh0v。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 实例计费类型。
     * @deprecated
     */
    public $InstanceChargeType;

    /**
     * @var integer 实例的Cpu大小，单位Core。
不传入此参数时，默认根据Memory确定的售卖规格所对应的Cpu进行设置。如Memory为2，支持的售卖规格有1核2GiB，则不传入Cpu时，Cpu默认为1。
     */
    public $Cpu;

    /**
     * @param integer $Storage 实例的磁盘大小，单位GB
     * @param integer $Memory 实例的内存大小，单位GB
     * @param string $DBInstanceId 实例ID，形如postgres-hez4fh0v。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $InstanceChargeType 实例计费类型。
     * @param integer $Cpu 实例的Cpu大小，单位Core。
不传入此参数时，默认根据Memory确定的售卖规格所对应的Cpu进行设置。如Memory为2，支持的售卖规格有1核2GiB，则不传入Cpu时，Cpu默认为1。
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
        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}
