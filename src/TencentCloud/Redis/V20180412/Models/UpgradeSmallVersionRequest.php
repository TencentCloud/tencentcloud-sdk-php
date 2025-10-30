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
 * UpgradeSmallVersion请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method string getCurrentRedisVersion() 获取当前 Redis 小版本。小版本信息，请参见[升级实例版本](https://cloud.tencent.com/document/product/239/46457)。
 * @method void setCurrentRedisVersion(string $CurrentRedisVersion) 设置当前 Redis 小版本。小版本信息，请参见[升级实例版本](https://cloud.tencent.com/document/product/239/46457)。
 * @method string getUpgradeRedisVersion() 获取升级后的 Redis 小版本。小版本信息，请参见[升级实例版本](https://cloud.tencent.com/document/product/239/46457)。
 * @method void setUpgradeRedisVersion(string $UpgradeRedisVersion) 设置升级后的 Redis 小版本。小版本信息，请参见[升级实例版本](https://cloud.tencent.com/document/product/239/46457)。
 * @method integer getInstanceTypeUpgradeNow() 获取指定是否立即升级。
- 1：立即升级。
- 0：维护时间窗口升级。
 * @method void setInstanceTypeUpgradeNow(integer $InstanceTypeUpgradeNow) 设置指定是否立即升级。
- 1：立即升级。
- 0：维护时间窗口升级。
 */
class UpgradeSmallVersionRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 当前 Redis 小版本。小版本信息，请参见[升级实例版本](https://cloud.tencent.com/document/product/239/46457)。
     */
    public $CurrentRedisVersion;

    /**
     * @var string 升级后的 Redis 小版本。小版本信息，请参见[升级实例版本](https://cloud.tencent.com/document/product/239/46457)。
     */
    public $UpgradeRedisVersion;

    /**
     * @var integer 指定是否立即升级。
- 1：立即升级。
- 0：维护时间窗口升级。
     */
    public $InstanceTypeUpgradeNow;

    /**
     * @param string $InstanceId 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     * @param string $CurrentRedisVersion 当前 Redis 小版本。小版本信息，请参见[升级实例版本](https://cloud.tencent.com/document/product/239/46457)。
     * @param string $UpgradeRedisVersion 升级后的 Redis 小版本。小版本信息，请参见[升级实例版本](https://cloud.tencent.com/document/product/239/46457)。
     * @param integer $InstanceTypeUpgradeNow 指定是否立即升级。
- 1：立即升级。
- 0：维护时间窗口升级。
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

        if (array_key_exists("CurrentRedisVersion",$param) and $param["CurrentRedisVersion"] !== null) {
            $this->CurrentRedisVersion = $param["CurrentRedisVersion"];
        }

        if (array_key_exists("UpgradeRedisVersion",$param) and $param["UpgradeRedisVersion"] !== null) {
            $this->UpgradeRedisVersion = $param["UpgradeRedisVersion"];
        }

        if (array_key_exists("InstanceTypeUpgradeNow",$param) and $param["InstanceTypeUpgradeNow"] !== null) {
            $this->InstanceTypeUpgradeNow = $param["InstanceTypeUpgradeNow"];
        }
    }
}
