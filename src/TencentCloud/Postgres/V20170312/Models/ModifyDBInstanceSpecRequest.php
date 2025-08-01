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
 * ModifyDBInstanceSpec请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID，形如：postgres-6bwgamo3。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如：postgres-6bwgamo3。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method integer getMemory() 获取修改后的实例内存大小，单位GiB。
 * @method void setMemory(integer $Memory) 设置修改后的实例内存大小，单位GiB。
 * @method integer getStorage() 获取修改后的实例磁盘大小，单位GiB。该参数的设置步长为10。
 * @method void setStorage(integer $Storage) 设置修改后的实例磁盘大小，单位GiB。该参数的设置步长为10。
 * @method integer getAutoVoucher() 获取是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
 * @method array getVoucherIds() 获取代金券ID列表，目前仅支持指定一张代金券。
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表，目前仅支持指定一张代金券。
 * @method integer getActivityId() 获取活动ID。
 * @method void setActivityId(integer $ActivityId) 设置活动ID。
 * @method integer getSwitchTag() 获取指定实例配置完成变更后的切换时间。
<li>0：立即切换 </li>
<li>1：指定时间切换</li>
<li>2：维护时间窗口内</li>切换
默认值：0 
 * @method void setSwitchTag(integer $SwitchTag) 设置指定实例配置完成变更后的切换时间。
<li>0：立即切换 </li>
<li>1：指定时间切换</li>
<li>2：维护时间窗口内</li>切换
默认值：0 
 * @method string getSwitchStartTime() 获取切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。
 * @method string getSwitchEndTime() 获取切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。
 * @method integer getCpu() 获取修改后的实例CPU大小，单位Core。不填写该参数时，默认根据Memory确定Cpu大小。如Memory为2，支持的规格有1核2GiB，则不传入Cpu时，Cpu默认为1。
 * @method void setCpu(integer $Cpu) 设置修改后的实例CPU大小，单位Core。不填写该参数时，默认根据Memory确定Cpu大小。如Memory为2，支持的规格有1核2GiB，则不传入Cpu时，Cpu默认为1。
 */
class ModifyDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如：postgres-6bwgamo3。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var integer 修改后的实例内存大小，单位GiB。
     */
    public $Memory;

    /**
     * @var integer 修改后的实例磁盘大小，单位GiB。该参数的设置步长为10。
     */
    public $Storage;

    /**
     * @var integer 是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表，目前仅支持指定一张代金券。
     */
    public $VoucherIds;

    /**
     * @var integer 活动ID。
     */
    public $ActivityId;

    /**
     * @var integer 指定实例配置完成变更后的切换时间。
<li>0：立即切换 </li>
<li>1：指定时间切换</li>
<li>2：维护时间窗口内</li>切换
默认值：0 
     */
    public $SwitchTag;

    /**
     * @var string 切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。
     */
    public $SwitchStartTime;

    /**
     * @var string 切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。
     */
    public $SwitchEndTime;

    /**
     * @var integer 修改后的实例CPU大小，单位Core。不填写该参数时，默认根据Memory确定Cpu大小。如Memory为2，支持的规格有1核2GiB，则不传入Cpu时，Cpu默认为1。
     */
    public $Cpu;

    /**
     * @param string $DBInstanceId 实例ID，形如：postgres-6bwgamo3。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param integer $Memory 修改后的实例内存大小，单位GiB。
     * @param integer $Storage 修改后的实例磁盘大小，单位GiB。该参数的设置步长为10。
     * @param integer $AutoVoucher 是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
     * @param array $VoucherIds 代金券ID列表，目前仅支持指定一张代金券。
     * @param integer $ActivityId 活动ID。
     * @param integer $SwitchTag 指定实例配置完成变更后的切换时间。
<li>0：立即切换 </li>
<li>1：指定时间切换</li>
<li>2：维护时间窗口内</li>切换
默认值：0 
     * @param string $SwitchStartTime 切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。
     * @param string $SwitchEndTime 切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。
     * @param integer $Cpu 修改后的实例CPU大小，单位Core。不填写该参数时，默认根据Memory确定Cpu大小。如Memory为2，支持的规格有1核2GiB，则不传入Cpu时，Cpu默认为1。
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}
