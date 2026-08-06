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
 * @method string getDBInstanceId() 获取<p>实例ID，形如：postgres-6bwgamo3。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID，形如：postgres-6bwgamo3。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method integer getMemory() 获取<p>修改后的实例内存大小，单位GB。</p>
 * @method void setMemory(integer $Memory) 设置<p>修改后的实例内存大小，单位GB。</p>
 * @method integer getStorage() 获取<p>修改后的实例磁盘大小，单位GB。该参数的设置步长为10。</p>
 * @method void setStorage(integer $Storage) 设置<p>修改后的实例磁盘大小，单位GB。该参数的设置步长为10。</p>
 * @method integer getAutoVoucher() 获取<p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
 * @method array getVoucherIds() 获取<p>代金券ID列表，目前仅支持指定一张代金券。</p>
 * @method void setVoucherIds(array $VoucherIds) 设置<p>代金券ID列表，目前仅支持指定一张代金券。</p>
 * @method integer getActivityId() 获取<p>活动ID。</p>
 * @method void setActivityId(integer $ActivityId) 设置<p>活动ID。</p>
 * @method integer getSwitchTag() 获取<p>指定实例配置完成变更后的切换时间。</p><li>0：立即切换 </li><li>1：指定时间切换</li><li>2：维护时间窗口内</li>切换默认值：0
 * @method void setSwitchTag(integer $SwitchTag) 设置<p>指定实例配置完成变更后的切换时间。</p><li>0：立即切换 </li><li>1：指定时间切换</li><li>2：维护时间窗口内</li>切换默认值：0
 * @method string getSwitchStartTime() 获取<p>切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。</p>
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置<p>切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。</p>
 * @method string getSwitchEndTime() 获取<p>切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。</p>
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置<p>切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。</p>
 * @method integer getCpu() 获取<p>修改后的实例CPU大小，单位Core。不填写该参数时，默认根据Memory确定Cpu大小。如Memory为2，支持的规格有1核2GB，则不传入Cpu时，Cpu默认为1。</p>
 * @method void setCpu(integer $Cpu) 设置<p>修改后的实例CPU大小，单位Core。不填写该参数时，默认根据Memory确定Cpu大小。如Memory为2，支持的规格有1核2GB，则不传入Cpu时，Cpu默认为1。</p>
 * @method array getSyncModifyParams() 获取<p>变配时同步修改的参数列表</p>
 * @method void setSyncModifyParams(array $SyncModifyParams) 设置<p>变配时同步修改的参数列表</p>
 */
class ModifyDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID，形如：postgres-6bwgamo3。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     */
    public $DBInstanceId;

    /**
     * @var integer <p>修改后的实例内存大小，单位GB。</p>
     */
    public $Memory;

    /**
     * @var integer <p>修改后的实例磁盘大小，单位GB。该参数的设置步长为10。</p>
     */
    public $Storage;

    /**
     * @var integer <p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
     */
    public $AutoVoucher;

    /**
     * @var array <p>代金券ID列表，目前仅支持指定一张代金券。</p>
     */
    public $VoucherIds;

    /**
     * @var integer <p>活动ID。</p>
     */
    public $ActivityId;

    /**
     * @var integer <p>指定实例配置完成变更后的切换时间。</p><li>0：立即切换 </li><li>1：指定时间切换</li><li>2：维护时间窗口内</li>切换默认值：0
     */
    public $SwitchTag;

    /**
     * @var string <p>切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。</p>
     */
    public $SwitchStartTime;

    /**
     * @var string <p>切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。</p>
     */
    public $SwitchEndTime;

    /**
     * @var integer <p>修改后的实例CPU大小，单位Core。不填写该参数时，默认根据Memory确定Cpu大小。如Memory为2，支持的规格有1核2GB，则不传入Cpu时，Cpu默认为1。</p>
     */
    public $Cpu;

    /**
     * @var array <p>变配时同步修改的参数列表</p>
     */
    public $SyncModifyParams;

    /**
     * @param string $DBInstanceId <p>实例ID，形如：postgres-6bwgamo3。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     * @param integer $Memory <p>修改后的实例内存大小，单位GB。</p>
     * @param integer $Storage <p>修改后的实例磁盘大小，单位GB。该参数的设置步长为10。</p>
     * @param integer $AutoVoucher <p>是否自动使用代金券：</p><li>0：否</li><li>1：是</li>默认值：0
     * @param array $VoucherIds <p>代金券ID列表，目前仅支持指定一张代金券。</p>
     * @param integer $ActivityId <p>活动ID。</p>
     * @param integer $SwitchTag <p>指定实例配置完成变更后的切换时间。</p><li>0：立即切换 </li><li>1：指定时间切换</li><li>2：维护时间窗口内</li>切换默认值：0
     * @param string $SwitchStartTime <p>切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。</p>
     * @param string $SwitchEndTime <p>切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。</p>
     * @param integer $Cpu <p>修改后的实例CPU大小，单位Core。不填写该参数时，默认根据Memory确定Cpu大小。如Memory为2，支持的规格有1核2GB，则不传入Cpu时，Cpu默认为1。</p>
     * @param array $SyncModifyParams <p>变配时同步修改的参数列表</p>
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

        if (array_key_exists("SyncModifyParams",$param) and $param["SyncModifyParams"] !== null) {
            $this->SyncModifyParams = [];
            foreach ($param["SyncModifyParams"] as $key => $value){
                $obj = new ParamEntry();
                $obj->deserialize($value);
                array_push($this->SyncModifyParams, $obj);
            }
        }
    }
}
