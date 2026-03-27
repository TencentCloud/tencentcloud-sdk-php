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
 * ModifyLog请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method string getLogType() 获取<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志</li></ul>
 * @method void setLogType(string $LogType) 设置<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志</li></ul>
 * @method string getLogSubType() 获取<p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写命令</li><li>read： 读命令</li><li>all： 全部命令</li></ul>
 * @method void setLogSubType(string $LogSubType) 设置<p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写命令</li><li>read： 读命令</li><li>all： 全部命令</li></ul>
 * @method integer getLogExpireDay() 获取<p>日志过期时间，单位：天。</p><p>枚举值：</p><ul><li>7：  7 天</li><li>30： 30 天</li></ul>
 * @method void setLogExpireDay(integer $LogExpireDay) 设置<p>日志过期时间，单位：天。</p><p>枚举值：</p><ul><li>7：  7 天</li><li>30： 30 天</li></ul>
 * @method integer getHighLogExpireDay() 获取<p>高频日志过期时间，单位：天。</p><p>枚举值：</p><ul><li>7： 7 天</li></ul><p>默认值： 7</p>
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置<p>高频日志过期时间，单位：天。</p><p>枚举值：</p><ul><li>7： 7 天</li></ul><p>默认值： 7</p>
 * @method integer getDegradeStrategy() 获取<p>降级策略，单位：毫秒，实例P99达到降级策略后，审计数据自动丢弃，优先保障业务的可用性，默认值：500毫秒。</p><p>取值范围：[300, 1000]</p>
 * @method void setDegradeStrategy(integer $DegradeStrategy) 设置<p>降级策略，单位：毫秒，实例P99达到降级策略后，审计数据自动丢弃，优先保障业务的可用性，默认值：500毫秒。</p><p>取值范围：[300, 1000]</p>
 */
class ModifyLogRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志</li></ul>
     */
    public $LogType;

    /**
     * @var string <p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写命令</li><li>read： 读命令</li><li>all： 全部命令</li></ul>
     */
    public $LogSubType;

    /**
     * @var integer <p>日志过期时间，单位：天。</p><p>枚举值：</p><ul><li>7：  7 天</li><li>30： 30 天</li></ul>
     */
    public $LogExpireDay;

    /**
     * @var integer <p>高频日志过期时间，单位：天。</p><p>枚举值：</p><ul><li>7： 7 天</li></ul><p>默认值： 7</p>
     */
    public $HighLogExpireDay;

    /**
     * @var integer <p>降级策略，单位：毫秒，实例P99达到降级策略后，审计数据自动丢弃，优先保障业务的可用性，默认值：500毫秒。</p><p>取值范围：[300, 1000]</p>
     */
    public $DegradeStrategy;

    /**
     * @param string $InstanceId <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param string $LogType <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志</li></ul>
     * @param string $LogSubType <p>日志子类型。</p><p>枚举值：</p><ul><li>write： 写命令</li><li>read： 读命令</li><li>all： 全部命令</li></ul>
     * @param integer $LogExpireDay <p>日志过期时间，单位：天。</p><p>枚举值：</p><ul><li>7：  7 天</li><li>30： 30 天</li></ul>
     * @param integer $HighLogExpireDay <p>高频日志过期时间，单位：天。</p><p>枚举值：</p><ul><li>7： 7 天</li></ul><p>默认值： 7</p>
     * @param integer $DegradeStrategy <p>降级策略，单位：毫秒，实例P99达到降级策略后，审计数据自动丢弃，优先保障业务的可用性，默认值：500毫秒。</p><p>取值范围：[300, 1000]</p>
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
