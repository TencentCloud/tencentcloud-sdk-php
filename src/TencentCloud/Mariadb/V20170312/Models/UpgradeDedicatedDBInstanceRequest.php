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
 * @method string getInstanceId() 获取待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例获得。
 * @method void setInstanceId(string $InstanceId) 设置待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例获得。
 * @method integer getMemory() 获取内存大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs
 查询实例规格获得。
 * @method void setMemory(integer $Memory) 设置内存大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs
 查询实例规格获得。
 * @method integer getStorage() 获取存储空间大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
 * @method void setStorage(integer $Storage) 设置存储空间大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
 * @method integer getSwitchAutoRetry() 获取错过切换时间窗口时，是否自动重试一次，0-否，1-是
 * @method void setSwitchAutoRetry(integer $SwitchAutoRetry) 设置错过切换时间窗口时，是否自动重试一次，0-否，1-是
 * @method string getSwitchStartTime() 获取切换时间窗口开始时间
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置切换时间窗口开始时间
 * @method string getSwitchEndTime() 获取切换时间窗口结束时间
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置切换时间窗口结束时间
 */
class UpgradeDedicatedDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例获得。
     */
    public $InstanceId;

    /**
     * @var integer 内存大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs
 查询实例规格获得。
     */
    public $Memory;

    /**
     * @var integer 存储空间大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
     */
    public $Storage;

    /**
     * @var integer 错过切换时间窗口时，是否自动重试一次，0-否，1-是
     */
    public $SwitchAutoRetry;

    /**
     * @var string 切换时间窗口开始时间
     */
    public $SwitchStartTime;

    /**
     * @var string 切换时间窗口结束时间
     */
    public $SwitchEndTime;

    /**
     * @param string $InstanceId 待升级的实例ID。形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例获得。
     * @param integer $Memory 内存大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs
 查询实例规格获得。
     * @param integer $Storage 存储空间大小，单位：GB，可以通过 DescribeFenceDBInstanceSpecs
 查询实例规格获得不同内存大小对应的磁盘规格下限和上限。
     * @param integer $SwitchAutoRetry 错过切换时间窗口时，是否自动重试一次，0-否，1-是
     * @param string $SwitchStartTime 切换时间窗口开始时间
     * @param string $SwitchEndTime 切换时间窗口结束时间
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
    }
}
