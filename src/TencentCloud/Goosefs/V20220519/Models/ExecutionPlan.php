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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行时间
 *
 * @method string getExecuteMode() 获取<p>执行类型</p><p>枚举值：</p><ul><li>scheduled： 指定时间执行</li><li>periodic： 周期执行</li></ul>
 * @method void setExecuteMode(string $ExecuteMode) 设置<p>执行类型</p><p>枚举值：</p><ul><li>scheduled： 指定时间执行</li><li>periodic： 周期执行</li></ul>
 * @method string getExecuteAt() 获取<p>任务执行时间</p><p>参数格式：2026-07-23 08:30</p><p>入参限制：只有立即执行或者指定时间执行时设置，周期执行不需要设置</p><p>默认值：当前时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteAt(string $ExecuteAt) 设置<p>任务执行时间</p><p>参数格式：2026-07-23 08:30</p><p>入参限制：只有立即执行或者指定时间执行时设置，周期执行不需要设置</p><p>默认值：当前时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExecutePeriodAttribute getExecutePeriod() 获取<p>周期执行的时间设置</p><p>入参限制：选择周期执行时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutePeriod(ExecutePeriodAttribute $ExecutePeriod) 设置<p>周期执行的时间设置</p><p>入参限制：选择周期执行时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitTime() 获取<p>任务等待时间</p><p>取值范围：[1, 500]</p><p>单位：H</p><p>默认值：12</p><p>任务执行的等待时间，超过时间任务未启动，自动取消</p>
 * @method void setWaitTime(integer $WaitTime) 设置<p>任务等待时间</p><p>取值范围：[1, 500]</p><p>单位：H</p><p>默认值：12</p><p>任务执行的等待时间，超过时间任务未启动，自动取消</p>
 */
class ExecutionPlan extends AbstractModel
{
    /**
     * @var string <p>执行类型</p><p>枚举值：</p><ul><li>scheduled： 指定时间执行</li><li>periodic： 周期执行</li></ul>
     */
    public $ExecuteMode;

    /**
     * @var string <p>任务执行时间</p><p>参数格式：2026-07-23 08:30</p><p>入参限制：只有立即执行或者指定时间执行时设置，周期执行不需要设置</p><p>默认值：当前时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteAt;

    /**
     * @var ExecutePeriodAttribute <p>周期执行的时间设置</p><p>入参限制：选择周期执行时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutePeriod;

    /**
     * @var integer <p>任务等待时间</p><p>取值范围：[1, 500]</p><p>单位：H</p><p>默认值：12</p><p>任务执行的等待时间，超过时间任务未启动，自动取消</p>
     */
    public $WaitTime;

    /**
     * @param string $ExecuteMode <p>执行类型</p><p>枚举值：</p><ul><li>scheduled： 指定时间执行</li><li>periodic： 周期执行</li></ul>
     * @param string $ExecuteAt <p>任务执行时间</p><p>参数格式：2026-07-23 08:30</p><p>入参限制：只有立即执行或者指定时间执行时设置，周期执行不需要设置</p><p>默认值：当前时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExecutePeriodAttribute $ExecutePeriod <p>周期执行的时间设置</p><p>入参限制：选择周期执行时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitTime <p>任务等待时间</p><p>取值范围：[1, 500]</p><p>单位：H</p><p>默认值：12</p><p>任务执行的等待时间，超过时间任务未启动，自动取消</p>
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
        if (array_key_exists("ExecuteMode",$param) and $param["ExecuteMode"] !== null) {
            $this->ExecuteMode = $param["ExecuteMode"];
        }

        if (array_key_exists("ExecuteAt",$param) and $param["ExecuteAt"] !== null) {
            $this->ExecuteAt = $param["ExecuteAt"];
        }

        if (array_key_exists("ExecutePeriod",$param) and $param["ExecutePeriod"] !== null) {
            $this->ExecutePeriod = new ExecutePeriodAttribute();
            $this->ExecutePeriod->deserialize($param["ExecutePeriod"]);
        }

        if (array_key_exists("WaitTime",$param) and $param["WaitTime"] !== null) {
            $this->WaitTime = $param["WaitTime"];
        }
    }
}
