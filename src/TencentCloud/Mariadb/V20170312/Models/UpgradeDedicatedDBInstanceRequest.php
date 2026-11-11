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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDedicatedDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例获得。</p>
 * @method integer getMemory() 获取<p>内存大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs<br> 查询实例规格获得。</p>
 * @method void setMemory(integer $Memory) 设置<p>内存大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs<br> 查询实例规格获得。</p>
 * @method integer getStorage() 获取<p>存储空间大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs<br> 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。</p>
 * @method void setStorage(integer $Storage) 设置<p>存储空间大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs<br> 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。</p>
 * @method integer getSwitchAutoRetry() 获取<p>错过切换时间窗口时，是否自动重试一次，0-否，1-是</p>
 * @method void setSwitchAutoRetry(integer $SwitchAutoRetry) 设置<p>错过切换时间窗口时，是否自动重试一次，0-否，1-是</p>
 * @method string getSwitchStartTime() 获取<p>切换时间窗口开始时间</p>
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置<p>切换时间窗口开始时间</p>
 * @method string getSwitchEndTime() 获取<p>切换时间窗口结束时间</p>
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置<p>切换时间窗口结束时间</p>
 * @method string getMasterHostId() 获取<p>主节点的机器id，类似svr-xxx</p>
 * @method void setMasterHostId(string $MasterHostId) 设置<p>主节点的机器id，类似svr-xxx</p>
 * @method array getSlaveHostIds() 获取<p>备节点的机器id组，类似[svr-xxx1, svr-xxx2]</p>
 * @method void setSlaveHostIds(array $SlaveHostIds) 设置<p>备节点的机器id组，类似[svr-xxx1, svr-xxx2]</p>
 */
class UpgradeDedicatedDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例获得。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>内存大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs<br> 查询实例规格获得。</p>
     */
    public $Memory;

    /**
     * @var integer <p>存储空间大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs<br> 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。</p>
     */
    public $Storage;

    /**
     * @var integer <p>错过切换时间窗口时，是否自动重试一次，0-否，1-是</p>
     */
    public $SwitchAutoRetry;

    /**
     * @var string <p>切换时间窗口开始时间</p>
     */
    public $SwitchStartTime;

    /**
     * @var string <p>切换时间窗口结束时间</p>
     */
    public $SwitchEndTime;

    /**
     * @var string <p>主节点的机器id，类似svr-xxx</p>
     */
    public $MasterHostId;

    /**
     * @var array <p>备节点的机器id组，类似[svr-xxx1, svr-xxx2]</p>
     */
    public $SlaveHostIds;

    /**
     * @param string $InstanceId <p>待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例获得。</p>
     * @param integer $Memory <p>内存大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs<br> 查询实例规格获得。</p>
     * @param integer $Storage <p>存储空间大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs<br> 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。</p>
     * @param integer $SwitchAutoRetry <p>错过切换时间窗口时，是否自动重试一次，0-否，1-是</p>
     * @param string $SwitchStartTime <p>切换时间窗口开始时间</p>
     * @param string $SwitchEndTime <p>切换时间窗口结束时间</p>
     * @param string $MasterHostId <p>主节点的机器id，类似svr-xxx</p>
     * @param array $SlaveHostIds <p>备节点的机器id组，类似[svr-xxx1, svr-xxx2]</p>
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

        if (array_key_exists("SwitchAutoRetry",$param) and $param["SwitchAutoRetry"] !== null) {
            $this->SwitchAutoRetry = $param["SwitchAutoRetry"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }

        if (array_key_exists("MasterHostId",$param) and $param["MasterHostId"] !== null) {
            $this->MasterHostId = $param["MasterHostId"];
        }

        if (array_key_exists("SlaveHostIds",$param) and $param["SlaveHostIds"] !== null) {
            $this->SlaveHostIds = $param["SlaveHostIds"];
        }
    }
}
