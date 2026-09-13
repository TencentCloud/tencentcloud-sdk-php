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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务重试策略
 *
 * @method integer getMaxRetryTimes() 获取最多重试次数，默认3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) 设置最多重试次数，默认3
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryBetweenWaitTime() 获取重试之间等待时间，默认5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryBetweenWaitTime(integer $RetryBetweenWaitTime) 设置重试之间等待时间，默认5
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRetryBetweenWaitTimeUnit() 获取重试之间等待时间单位
毫秒：MILLISECOND秒：SECOND分钟（默认）：MINUTE小时：HOUR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryBetweenWaitTimeUnit(string $RetryBetweenWaitTimeUnit) 设置重试之间等待时间单位
毫秒：MILLISECOND秒：SECOND分钟（默认）：MINUTE小时：HOUR
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTaskRunFailureRetrySwitch() 获取任务运行失败时重试开关，默认为true
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskRunFailureRetrySwitch(boolean $TaskRunFailureRetrySwitch) 设置任务运行失败时重试开关，默认为true
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTaskRunTimeoutRetrySwitch() 获取任务运行超时时重试开关，默认为false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskRunTimeoutRetrySwitch(boolean $TaskRunTimeoutRetrySwitch) 设置任务运行超时时重试开关，默认为false
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskRetryStrategy extends AbstractModel
{
    /**
     * @var integer 最多重试次数，默认3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRetryTimes;

    /**
     * @var integer 重试之间等待时间，默认5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryBetweenWaitTime;

    /**
     * @var string 重试之间等待时间单位
毫秒：MILLISECOND秒：SECOND分钟（默认）：MINUTE小时：HOUR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryBetweenWaitTimeUnit;

    /**
     * @var boolean 任务运行失败时重试开关，默认为true
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskRunFailureRetrySwitch;

    /**
     * @var boolean 任务运行超时时重试开关，默认为false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskRunTimeoutRetrySwitch;

    /**
     * @param integer $MaxRetryTimes 最多重试次数，默认3
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryBetweenWaitTime 重试之间等待时间，默认5
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RetryBetweenWaitTimeUnit 重试之间等待时间单位
毫秒：MILLISECOND秒：SECOND分钟（默认）：MINUTE小时：HOUR
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TaskRunFailureRetrySwitch 任务运行失败时重试开关，默认为true
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TaskRunTimeoutRetrySwitch 任务运行超时时重试开关，默认为false
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("RetryBetweenWaitTime",$param) and $param["RetryBetweenWaitTime"] !== null) {
            $this->RetryBetweenWaitTime = $param["RetryBetweenWaitTime"];
        }

        if (array_key_exists("RetryBetweenWaitTimeUnit",$param) and $param["RetryBetweenWaitTimeUnit"] !== null) {
            $this->RetryBetweenWaitTimeUnit = $param["RetryBetweenWaitTimeUnit"];
        }

        if (array_key_exists("TaskRunFailureRetrySwitch",$param) and $param["TaskRunFailureRetrySwitch"] !== null) {
            $this->TaskRunFailureRetrySwitch = $param["TaskRunFailureRetrySwitch"];
        }

        if (array_key_exists("TaskRunTimeoutRetrySwitch",$param) and $param["TaskRunTimeoutRetrySwitch"] !== null) {
            $this->TaskRunTimeoutRetrySwitch = $param["TaskRunTimeoutRetrySwitch"];
        }
    }
}
