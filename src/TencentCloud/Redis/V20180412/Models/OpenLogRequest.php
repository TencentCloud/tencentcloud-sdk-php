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
 * OpenLog请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method string getLogType() 获取<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method void setLogType(string $LogType) 设置<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method string getLogSubType() 获取<p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写命令。</li><li>read： 读命令。</li><li>all： 读写命令。</li></ul>
 * @method void setLogSubType(string $LogSubType) 设置<p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写命令。</li><li>read： 读命令。</li><li>all： 读写命令。</li></ul>
 * @method integer getLogExpireDay() 获取<p>日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7：  7 天</li><li>30： 30 天</li></ul><p>默认值：7</p>
 * @method void setLogExpireDay(integer $LogExpireDay) 设置<p>日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7：  7 天</li><li>30： 30 天</li></ul><p>默认值：7</p>
 * @method integer getHighLogExpireDay() 获取<p>高频日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li></ul><p>默认值：7</p>
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置<p>高频日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li></ul><p>默认值：7</p>
 * @method integer getDegradeStrategy() 获取<p>日志降级策略阈值。当实例 P99 延迟达到该阈值后，系统将自动丢弃审计日志数据，以优先保障业务可用性。</p><ul><li>单位：毫秒。</li><li>默认值：500。</li><li>取值范围：[300, 1000]。</li></ul>
 * @method void setDegradeStrategy(integer $DegradeStrategy) 设置<p>日志降级策略阈值。当实例 P99 延迟达到该阈值后，系统将自动丢弃审计日志数据，以优先保障业务可用性。</p><ul><li>单位：毫秒。</li><li>默认值：500。</li><li>取值范围：[300, 1000]。</li></ul>
 */
class OpenLogRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     */
    public $LogType;

    /**
     * @var string <p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写命令。</li><li>read： 读命令。</li><li>all： 读写命令。</li></ul>
     */
    public $LogSubType;

    /**
     * @var integer <p>日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7：  7 天</li><li>30： 30 天</li></ul><p>默认值：7</p>
     */
    public $LogExpireDay;

    /**
     * @var integer <p>高频日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li></ul><p>默认值：7</p>
     */
    public $HighLogExpireDay;

    /**
     * @var integer <p>日志降级策略阈值。当实例 P99 延迟达到该阈值后，系统将自动丢弃审计日志数据，以优先保障业务可用性。</p><ul><li>单位：毫秒。</li><li>默认值：500。</li><li>取值范围：[300, 1000]。</li></ul>
     */
    public $DegradeStrategy;

    /**
     * @param string $InstanceId <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param string $LogType <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     * @param string $LogSubType <p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写命令。</li><li>read： 读命令。</li><li>all： 读写命令。</li></ul>
     * @param integer $LogExpireDay <p>日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7：  7 天</li><li>30： 30 天</li></ul><p>默认值：7</p>
     * @param integer $HighLogExpireDay <p>高频日志有效期, 单位：天。</p><p>枚举值：</p><ul><li>7： 7天</li></ul><p>默认值：7</p>
     * @param integer $DegradeStrategy <p>日志降级策略阈值。当实例 P99 延迟达到该阈值后，系统将自动丢弃审计日志数据，以优先保障业务可用性。</p><ul><li>单位：毫秒。</li><li>默认值：500。</li><li>取值范围：[300, 1000]。</li></ul>
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogSubType",$param) and $param["LogSubType"] !== null) {
            $this->LogSubType = $param["LogSubType"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }

        if (array_key_exists("DegradeStrategy",$param) and $param["DegradeStrategy"] !== null) {
            $this->DegradeStrategy = $param["DegradeStrategy"];
        }
    }
}
