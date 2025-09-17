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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecondLevelBackupInfo请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。请登录 [Redis 控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。请登录 [Redis 控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method integer getBackupTimestamp() 获取秒级备份时间戳。
- 设置范围：支持7天内任意秒级时间点。
-  时间戳格式：Unix 时间戳。
 * @method void setBackupTimestamp(integer $BackupTimestamp) 设置秒级备份时间戳。
- 设置范围：支持7天内任意秒级时间点。
-  时间戳格式：Unix 时间戳。
 */
class DescribeSecondLevelBackupInfoRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。请登录 [Redis 控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 秒级备份时间戳。
- 设置范围：支持7天内任意秒级时间点。
-  时间戳格式：Unix 时间戳。
     */
    public $BackupTimestamp;

    /**
     * @param string $InstanceId 指定实例 ID。请登录 [Redis 控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     * @param integer $BackupTimestamp 秒级备份时间戳。
- 设置范围：支持7天内任意秒级时间点。
-  时间戳格式：Unix 时间戳。
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

        if (array_key_exists("BackupTimestamp",$param) and $param["BackupTimestamp"] !== null) {
            $this->BackupTimestamp = $param["BackupTimestamp"];
        }
    }
}
