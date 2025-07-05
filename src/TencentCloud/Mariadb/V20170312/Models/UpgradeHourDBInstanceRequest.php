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
 * UpgradeHourDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getMemory() 获取内存大小，单位：GB
 * @method void setMemory(integer $Memory) 设置内存大小，单位：GB
 * @method integer getStorage() 获取存储大小，单位：GB
 * @method void setStorage(integer $Storage) 设置存储大小，单位：GB
 * @method string getSwitchStartTime() 获取切换开始时间，格式如: "2019-12-12 07:00:00"。开始时间必须在当前时间一个小时以后，3天以内。
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置切换开始时间，格式如: "2019-12-12 07:00:00"。开始时间必须在当前时间一个小时以后，3天以内。
 * @method string getSwitchEndTime() 获取切换结束时间,  格式如: "2019-12-12 07:15:00"，结束时间必须大于开始时间。
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置切换结束时间,  格式如: "2019-12-12 07:15:00"，结束时间必须大于开始时间。
 * @method integer getSwitchAutoRetry() 获取是否自动重试。 0：不自动重试  1：自动重试
 * @method void setSwitchAutoRetry(integer $SwitchAutoRetry) 设置是否自动重试。 0：不自动重试  1：自动重试
 * @method array getZones() 获取变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区
 * @method void setZones(array $Zones) 设置变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区
 */
class UpgradeHourDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 内存大小，单位：GB
     */
    public $Memory;

    /**
     * @var integer 存储大小，单位：GB
     */
    public $Storage;

    /**
     * @var string 切换开始时间，格式如: "2019-12-12 07:00:00"。开始时间必须在当前时间一个小时以后，3天以内。
     */
    public $SwitchStartTime;

    /**
     * @var string 切换结束时间,  格式如: "2019-12-12 07:15:00"，结束时间必须大于开始时间。
     */
    public $SwitchEndTime;

    /**
     * @var integer 是否自动重试。 0：不自动重试  1：自动重试
     */
    public $SwitchAutoRetry;

    /**
     * @var array 变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区
     */
    public $Zones;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $Memory 内存大小，单位：GB
     * @param integer $Storage 存储大小，单位：GB
     * @param string $SwitchStartTime 切换开始时间，格式如: "2019-12-12 07:00:00"。开始时间必须在当前时间一个小时以后，3天以内。
     * @param string $SwitchEndTime 切换结束时间,  格式如: "2019-12-12 07:15:00"，结束时间必须大于开始时间。
     * @param integer $SwitchAutoRetry 是否自动重试。 0：不自动重试  1：自动重试
     * @param array $Zones 变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区
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

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }

        if (array_key_exists("SwitchAutoRetry",$param) and $param["SwitchAutoRetry"] !== null) {
            $this->SwitchAutoRetry = $param["SwitchAutoRetry"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }
    }
}
