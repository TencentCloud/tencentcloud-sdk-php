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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调度实例详情
 *
 * @method string getInstanceKey() 获取实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceKey(string $InstanceKey) 设置实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceState() 获取**实例状态**

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceState(integer $InstanceState) 设置**实例状态**

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLifeRoundNum() 获取生命周期编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeRoundNum(integer $LifeRoundNum) 设置生命周期编号
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
 * @method array getLifeCycleDetailList() 获取**实例生命周期列表**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeCycleDetailList(array $LifeCycleDetailList) 设置**实例生命周期列表**
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeFileName() 获取**实例代码文件**
该文件内容为当次执行实例运行使用的代码，仅部分任务支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeFileName(string $CodeFileName) 设置**实例代码文件**
该文件内容为当次执行实例运行使用的代码，仅部分任务支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionJobId() 获取**下发执行ID**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionJobId(string $ExecutionJobId) 设置**下发执行ID**
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerIp() 获取日志所在执行节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerIp(string $BrokerIp) 设置日志所在执行节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginFileName() 获取日志文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginFileName(string $OriginFileName) 设置日志文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogType() 获取**实例日志类型**

- run: 运行; 
- kill: 终止
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogType(string $LogType) 设置**实例日志类型**

- run: 运行; 
- kill: 终止
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCostTime() 获取耗费时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostTime(string $CostTime) 设置耗费时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceLifeCycleVO extends AbstractModel
{
    /**
     * @var string 实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceKey;

    /**
     * @var integer **实例状态**

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceState;

    /**
     * @var integer 生命周期编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeRoundNum;

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
     * @var array **实例生命周期列表**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeCycleDetailList;

    /**
     * @var string **实例代码文件**
该文件内容为当次执行实例运行使用的代码，仅部分任务支持
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeFileName;

    /**
     * @var string **下发执行ID**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionJobId;

    /**
     * @var string 日志所在执行节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerIp;

    /**
     * @var string 日志文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginFileName;

    /**
     * @var string **实例日志类型**

- run: 运行; 
- kill: 终止
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogType;

    /**
     * @var string 耗费时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostTime;

    /**
     * @param string $InstanceKey 实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceState **实例状态**

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LifeRoundNum 生命周期编号
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
     * @param array $LifeCycleDetailList **实例生命周期列表**
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeFileName **实例代码文件**
该文件内容为当次执行实例运行使用的代码，仅部分任务支持
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionJobId **下发执行ID**
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerIp 日志所在执行节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginFileName 日志文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogType **实例日志类型**

- run: 运行; 
- kill: 终止
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CostTime 耗费时间
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

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("LifeRoundNum",$param) and $param["LifeRoundNum"] !== null) {
            $this->LifeRoundNum = $param["LifeRoundNum"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("LifeCycleDetailList",$param) and $param["LifeCycleDetailList"] !== null) {
            $this->LifeCycleDetailList = [];
            foreach ($param["LifeCycleDetailList"] as $key => $value){
                $obj = new InstanceLifeDetailDto();
                $obj->deserialize($value);
                array_push($this->LifeCycleDetailList, $obj);
            }
        }

        if (array_key_exists("CodeFileName",$param) and $param["CodeFileName"] !== null) {
            $this->CodeFileName = $param["CodeFileName"];
        }

        if (array_key_exists("ExecutionJobId",$param) and $param["ExecutionJobId"] !== null) {
            $this->ExecutionJobId = $param["ExecutionJobId"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }
    }
}
