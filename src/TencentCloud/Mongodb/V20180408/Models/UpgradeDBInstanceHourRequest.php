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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstanceHour请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cmgo-iga0****
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cmgo-iga0****
 * @method integer getMemory() 获取升级后的内存大小，单位：GB
 * @method void setMemory(integer $Memory) 设置升级后的内存大小，单位：GB
 * @method integer getVolume() 获取升级后的硬盘大小，单位：GB
 * @method void setVolume(integer $Volume) 设置升级后的硬盘大小，单位：GB
 * @method integer getOplogSize() 获取升级后oplog的大小，单位：GB，默认为磁盘空间的10%，允许设置的最小值为磁盘的10%，最大值为磁盘的90%
 * @method void setOplogSize(integer $OplogSize) 设置升级后oplog的大小，单位：GB，默认为磁盘空间的10%，允许设置的最小值为磁盘的10%，最大值为磁盘的90%
 */
class UpgradeDBInstanceHourRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cmgo-iga0****
     */
    public $InstanceId;

    /**
     * @var integer 升级后的内存大小，单位：GB
     */
    public $Memory;

    /**
     * @var integer 升级后的硬盘大小，单位：GB
     */
    public $Volume;

    /**
     * @var integer 升级后oplog的大小，单位：GB，默认为磁盘空间的10%，允许设置的最小值为磁盘的10%，最大值为磁盘的90%
     */
    public $OplogSize;

    /**
     * @param string $InstanceId 实例ID，格式如：cmgo-iga0****
     * @param integer $Memory 升级后的内存大小，单位：GB
     * @param integer $Volume 升级后的硬盘大小，单位：GB
     * @param integer $OplogSize 升级后oplog的大小，单位：GB，默认为磁盘空间的10%，允许设置的最小值为磁盘的10%，最大值为磁盘的90%
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

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("OplogSize",$param) and $param["OplogSize"] !== null) {
            $this->OplogSize = $param["OplogSize"];
        }
    }
}
