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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeSmallVersion请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getCurrentRedisVersion() 获取当前redis版本
 * @method void setCurrentRedisVersion(string $CurrentRedisVersion) 设置当前redis版本
 * @method string getUpgradeRedisVersion() 获取可升级的redis版本
 * @method void setUpgradeRedisVersion(string $UpgradeRedisVersion) 设置可升级的redis版本
 * @method integer getInstanceTypeUpgradeNow() 获取1-立即升级   0-维护时间窗口升级
 * @method void setInstanceTypeUpgradeNow(integer $InstanceTypeUpgradeNow) 设置1-立即升级   0-维护时间窗口升级
 */
class UpgradeSmallVersionRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 当前redis版本
     */
    public $CurrentRedisVersion;

    /**
     * @var string 可升级的redis版本
     */
    public $UpgradeRedisVersion;

    /**
     * @var integer 1-立即升级   0-维护时间窗口升级
     */
    public $InstanceTypeUpgradeNow;

    /**
     * @param string $InstanceId 实例ID
     * @param string $CurrentRedisVersion 当前redis版本
     * @param string $UpgradeRedisVersion 可升级的redis版本
     * @param integer $InstanceTypeUpgradeNow 1-立即升级   0-维护时间窗口升级
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
