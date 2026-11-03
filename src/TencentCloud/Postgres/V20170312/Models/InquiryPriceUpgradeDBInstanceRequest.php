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
 * @method integer getStorage() 获取<p>实例的磁盘大小，单位GB</p>
 * @method void setStorage(integer $Storage) 设置<p>实例的磁盘大小，单位GB</p>
 * @method integer getMemory() 获取<p>实例的内存大小，单位GB</p>
 * @method void setMemory(integer $Memory) 设置<p>实例的内存大小，单位GB</p>
 * @method string getDBInstanceId() 获取<p>实例ID，形如postgres-hez4fh0v。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID，形如postgres-hez4fh0v。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method string getInstanceChargeType() 获取<p>实例计费类型。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例计费类型。</p>
 * @method integer getCpu() 获取<p>实例的Cpu大小，单位Core。<br>不传入此参数时，默认根据Memory确定的售卖规格所对应的Cpu进行设置。如Memory为2，支持的售卖规格有1核2GiB，则不传入Cpu时，Cpu默认为1。</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例的Cpu大小，单位Core。<br>不传入此参数时，默认根据Memory确定的售卖规格所对应的Cpu进行设置。如Memory为2，支持的售卖规格有1核2GiB，则不传入Cpu时，Cpu默认为1。</p>
 */
class InquiryPriceUpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer <p>实例的磁盘大小，单位GB</p>
     */
    public $Storage;

    /**
     * @var integer <p>实例的内存大小，单位GB</p>
     */
    public $Memory;

    /**
     * @var string <p>实例ID，形如postgres-hez4fh0v。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>实例计费类型。</p>
     * @deprecated
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>实例的Cpu大小，单位Core。<br>不传入此参数时，默认根据Memory确定的售卖规格所对应的Cpu进行设置。如Memory为2，支持的售卖规格有1核2GiB，则不传入Cpu时，Cpu默认为1。</p>
     */
    public $Cpu;

    /**
     * @param integer $Storage <p>实例的磁盘大小，单位GB</p>
     * @param integer $Memory <p>实例的内存大小，单位GB</p>
     * @param string $DBInstanceId <p>实例ID，形如postgres-hez4fh0v。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     * @param string $InstanceChargeType <p>实例计费类型。</p>
     * @param integer $Cpu <p>实例的Cpu大小，单位Core。<br>不传入此参数时，默认根据Memory确定的售卖规格所对应的Cpu进行设置。如Memory为2，支持的售卖规格有1核2GiB，则不传入Cpu时，Cpu默认为1。</p>
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
