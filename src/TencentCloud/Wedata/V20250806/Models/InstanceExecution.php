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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调度实例详情
 *
 * @method string getInstanceKey() 获取实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceKey(string $InstanceKey) 设置实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLifeRoundNum() 获取**实例生命周期编号，标识实例的某一次执行**

例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeRoundNum(integer $LifeRoundNum) 设置**实例生命周期编号，标识实例的某一次执行**

例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceState() 获取**实例状态**
- WAIT_EVENT: 等待事件
- WAIT_UPSTREAM: 等待上游
- WAIT_RUN: 等待运行
- RUNNING: 运行中
- SKIP_RUNNING: 跳过运行
- FAILED_RETRY: 失败重试
- EXPIRED: 失败
- COMPLETED: 成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceState(string $InstanceState) 设置**实例状态**
- WAIT_EVENT: 等待事件
- WAIT_UPSTREAM: 等待上游
- WAIT_RUN: 等待运行
- RUNNING: 运行中
- SKIP_RUNNING: 跳过运行
- FAILED_RETRY: 失败重试
- EXPIRED: 失败
- COMPLETED: 成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunType() 获取**实例运行触发类型**

- RERUN 表示重跑
- ADDITION 表示补录
- PERIODIC 表示周期
- APERIODIC 表示非周期
- RERUN_SKIP_RUN 表示重跑 - 空跑
- ADDITION_SKIP_RUN 表示补录 - 空跑
- PERIODIC_SKIP_RUN 表示周期 - 空跑
- APERIODIC_SKIP_RUN 表示非周期 - 空跑
- MANUAL_TRIGGER 表示手动触发
- RERUN_MANUAL_TRIGGER 表示手动触发 - 重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunType(string $RunType) 设置**实例运行触发类型**

- RERUN 表示重跑
- ADDITION 表示补录
- PERIODIC 表示周期
- APERIODIC 表示非周期
- RERUN_SKIP_RUN 表示重跑 - 空跑
- ADDITION_SKIP_RUN 表示补录 - 空跑
- PERIODIC_SKIP_RUN 表示周期 - 空跑
- APERIODIC_SKIP_RUN 表示非周期 - 空跑
- MANUAL_TRIGGER 表示手动触发
- RERUN_MANUAL_TRIGGER 表示手动触发 - 重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTries() 获取失败重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTries(integer $Tries) 设置失败重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExecutionPhaseList() 获取**实例执行生命周期列表**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionPhaseList(array $ExecutionPhaseList) 设置**实例执行生命周期列表**
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCostTime() 获取耗费时间, 单位ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostTime(integer $CostTime) 设置耗费时间, 单位ms
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceExecution extends AbstractModel
{
    /**
     * @var string 实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceKey;

    /**
     * @var integer **实例生命周期编号，标识实例的某一次执行**

例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeRoundNum;

    /**
     * @var string **实例状态**
- WAIT_EVENT: 等待事件
- WAIT_UPSTREAM: 等待上游
- WAIT_RUN: 等待运行
- RUNNING: 运行中
- SKIP_RUNNING: 跳过运行
- FAILED_RETRY: 失败重试
- EXPIRED: 失败
- COMPLETED: 成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceState;

    /**
     * @var string **实例运行触发类型**

- RERUN 表示重跑
- ADDITION 表示补录
- PERIODIC 表示周期
- APERIODIC 表示非周期
- RERUN_SKIP_RUN 表示重跑 - 空跑
- ADDITION_SKIP_RUN 表示补录 - 空跑
- PERIODIC_SKIP_RUN 表示周期 - 空跑
- APERIODIC_SKIP_RUN 表示非周期 - 空跑
- MANUAL_TRIGGER 表示手动触发
- RERUN_MANUAL_TRIGGER 表示手动触发 - 重跑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunType;

    /**
     * @var integer 失败重试次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tries;

    /**
     * @var array **实例执行生命周期列表**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionPhaseList;

    /**
     * @var integer 耗费时间, 单位ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostTime;

    /**
     * @param string $InstanceKey 实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LifeRoundNum **实例生命周期编号，标识实例的某一次执行**

例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceState **实例状态**
- WAIT_EVENT: 等待事件
- WAIT_UPSTREAM: 等待上游
- WAIT_RUN: 等待运行
- RUNNING: 运行中
- SKIP_RUNNING: 跳过运行
- FAILED_RETRY: 失败重试
- EXPIRED: 失败
- COMPLETED: 成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunType **实例运行触发类型**

- RERUN 表示重跑
- ADDITION 表示补录
- PERIODIC 表示周期
- APERIODIC 表示非周期
- RERUN_SKIP_RUN 表示重跑 - 空跑
- ADDITION_SKIP_RUN 表示补录 - 空跑
- PERIODIC_SKIP_RUN 表示周期 - 空跑
- APERIODIC_SKIP_RUN 表示非周期 - 空跑
- MANUAL_TRIGGER 表示手动触发
- RERUN_MANUAL_TRIGGER 表示手动触发 - 重跑
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Tries 失败重试次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExecutionPhaseList **实例执行生命周期列表**
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CostTime 耗费时间, 单位ms
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("LifeRoundNum",$param) and $param["LifeRoundNum"] !== null) {
            $this->LifeRoundNum = $param["LifeRoundNum"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("ExecutionPhaseList",$param) and $param["ExecutionPhaseList"] !== null) {
            $this->ExecutionPhaseList = [];
            foreach ($param["ExecutionPhaseList"] as $key => $value){
                $obj = new InstanceExecutionPhase();
                $obj->deserialize($value);
                array_push($this->ExecutionPhaseList, $obj);
            }
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }
    }
}
