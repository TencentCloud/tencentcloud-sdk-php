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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 洞察结果项
 *
 * @method string getID() 获取当Type为HIVE时，是Hive查询ID，当Type为MAPREDUCE，SPARK，TEZ时则是YarnAppID
 * @method void setID(string $ID) 设置当Type为HIVE时，是Hive查询ID，当Type为MAPREDUCE，SPARK，TEZ时则是YarnAppID
 * @method string getType() 获取洞察应用的类型，HIVE,SPARK,MAPREDUCE,TEZ
 * @method void setType(string $Type) 设置洞察应用的类型，HIVE,SPARK,MAPREDUCE,TEZ
 * @method string getRuleID() 获取洞察规则ID
HIVE-ScanManyMeta:元数据扫描过多
HIVE-ScanManyPartition:大表扫描
HIVE-SlowCompile:编译耗时过长
HIVE-UnSuitableConfig:不合理参数
MAPREDUCE-MapperDataSkew:Map数据倾斜
MAPREDUCE-MapperMemWaste:MapMemory资源浪费
MAPREDUCE-MapperSlowTask:Map慢Task
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded:峰值内存超限
MAPREDUCE-ReducerDataSkew:Reduce数据倾斜
MAPREDUCE-ReducerMemWaste:ReduceMemory资源浪费
MAPREDUCE-ReducerSlowTask:Reduce慢Task
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay:调度延迟
SPARK-CpuWaste:CPU资源浪费
SPARK-DataSkew:数据倾斜
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded:峰值内存超限
SPARK-MemWaste:Memory资源浪费
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew:调度倾斜
SPARK-SlowTask:慢Task
TEZ-DataSkew:数据倾斜
TEZ-MapperDataSkew:Map数据倾斜
TEZ-ReducerDataSkew:Reduce数据倾斜
TEZ-TezMemWaste:Memory资源浪费
TEZ-TezSlowTask:慢Task
TEZ-TezTaskGC:TasksGC
 * @method void setRuleID(string $RuleID) 设置洞察规则ID
HIVE-ScanManyMeta:元数据扫描过多
HIVE-ScanManyPartition:大表扫描
HIVE-SlowCompile:编译耗时过长
HIVE-UnSuitableConfig:不合理参数
MAPREDUCE-MapperDataSkew:Map数据倾斜
MAPREDUCE-MapperMemWaste:MapMemory资源浪费
MAPREDUCE-MapperSlowTask:Map慢Task
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded:峰值内存超限
MAPREDUCE-ReducerDataSkew:Reduce数据倾斜
MAPREDUCE-ReducerMemWaste:ReduceMemory资源浪费
MAPREDUCE-ReducerSlowTask:Reduce慢Task
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay:调度延迟
SPARK-CpuWaste:CPU资源浪费
SPARK-DataSkew:数据倾斜
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded:峰值内存超限
SPARK-MemWaste:Memory资源浪费
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew:调度倾斜
SPARK-SlowTask:慢Task
TEZ-DataSkew:数据倾斜
TEZ-MapperDataSkew:Map数据倾斜
TEZ-ReducerDataSkew:Reduce数据倾斜
TEZ-TezMemWaste:Memory资源浪费
TEZ-TezSlowTask:慢Task
TEZ-TezTaskGC:TasksGC
 * @method string getRuleName() 获取洞察规则名字，可参考RuleID的说明
 * @method void setRuleName(string $RuleName) 设置洞察规则名字，可参考RuleID的说明
 * @method string getRuleExplain() 获取洞察规则解释
 * @method void setRuleExplain(string $RuleExplain) 设置洞察规则解释
 * @method string getDetail() 获取详情
 * @method void setDetail(string $Detail) 设置详情
 * @method string getSuggestion() 获取建议信息
 * @method void setSuggestion(string $Suggestion) 设置建议信息
 * @method integer getValue() 获取洞察异常衡量值，同类型的洞察项越大越严重，不同类型的洞察项无对比意义
 * @method void setValue(integer $Value) 设置洞察异常衡量值，同类型的洞察项越大越严重，不同类型的洞察项无对比意义
 * @method string getScheduleTaskExecID() 获取调度任务执行ID
 * @method void setScheduleTaskExecID(string $ScheduleTaskExecID) 设置调度任务执行ID
 * @method string getScheduleFlowName() 获取调度流，DAG
 * @method void setScheduleFlowName(string $ScheduleFlowName) 设置调度流，DAG
 * @method string getScheduleTaskName() 获取调度flow中的某个task节点
 * @method void setScheduleTaskName(string $ScheduleTaskName) 设置调度flow中的某个task节点
 * @method string getJobConf() 获取Yarn任务的部分核心配置
 * @method void setJobConf(string $JobConf) 设置Yarn任务的部分核心配置
 * @method string getContext() 获取洞察结构化信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContext(string $Context) 设置洞察结构化信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class InsightResult extends AbstractModel
{
    /**
     * @var string 当Type为HIVE时，是Hive查询ID，当Type为MAPREDUCE，SPARK，TEZ时则是YarnAppID
     */
    public $ID;

    /**
     * @var string 洞察应用的类型，HIVE,SPARK,MAPREDUCE,TEZ
     */
    public $Type;

    /**
     * @var string 洞察规则ID
HIVE-ScanManyMeta:元数据扫描过多
HIVE-ScanManyPartition:大表扫描
HIVE-SlowCompile:编译耗时过长
HIVE-UnSuitableConfig:不合理参数
MAPREDUCE-MapperDataSkew:Map数据倾斜
MAPREDUCE-MapperMemWaste:MapMemory资源浪费
MAPREDUCE-MapperSlowTask:Map慢Task
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded:峰值内存超限
MAPREDUCE-ReducerDataSkew:Reduce数据倾斜
MAPREDUCE-ReducerMemWaste:ReduceMemory资源浪费
MAPREDUCE-ReducerSlowTask:Reduce慢Task
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay:调度延迟
SPARK-CpuWaste:CPU资源浪费
SPARK-DataSkew:数据倾斜
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded:峰值内存超限
SPARK-MemWaste:Memory资源浪费
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew:调度倾斜
SPARK-SlowTask:慢Task
TEZ-DataSkew:数据倾斜
TEZ-MapperDataSkew:Map数据倾斜
TEZ-ReducerDataSkew:Reduce数据倾斜
TEZ-TezMemWaste:Memory资源浪费
TEZ-TezSlowTask:慢Task
TEZ-TezTaskGC:TasksGC
     */
    public $RuleID;

    /**
     * @var string 洞察规则名字，可参考RuleID的说明
     */
    public $RuleName;

    /**
     * @var string 洞察规则解释
     */
    public $RuleExplain;

    /**
     * @var string 详情
     */
    public $Detail;

    /**
     * @var string 建议信息
     */
    public $Suggestion;

    /**
     * @var integer 洞察异常衡量值，同类型的洞察项越大越严重，不同类型的洞察项无对比意义
     */
    public $Value;

    /**
     * @var string 调度任务执行ID
     */
    public $ScheduleTaskExecID;

    /**
     * @var string 调度流，DAG
     */
    public $ScheduleFlowName;

    /**
     * @var string 调度flow中的某个task节点
     */
    public $ScheduleTaskName;

    /**
     * @var string Yarn任务的部分核心配置
     */
    public $JobConf;

    /**
     * @var string 洞察结构化信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Context;

    /**
     * @param string $ID 当Type为HIVE时，是Hive查询ID，当Type为MAPREDUCE，SPARK，TEZ时则是YarnAppID
     * @param string $Type 洞察应用的类型，HIVE,SPARK,MAPREDUCE,TEZ
     * @param string $RuleID 洞察规则ID
HIVE-ScanManyMeta:元数据扫描过多
HIVE-ScanManyPartition:大表扫描
HIVE-SlowCompile:编译耗时过长
HIVE-UnSuitableConfig:不合理参数
MAPREDUCE-MapperDataSkew:Map数据倾斜
MAPREDUCE-MapperMemWaste:MapMemory资源浪费
MAPREDUCE-MapperSlowTask:Map慢Task
MAPREDUCE-MapperTaskGC:MapperTaskGC
MAPREDUCE-MemExceeded:峰值内存超限
MAPREDUCE-ReducerDataSkew:Reduce数据倾斜
MAPREDUCE-ReducerMemWaste:ReduceMemory资源浪费
MAPREDUCE-ReducerSlowTask:Reduce慢Task
MAPREDUCE-ReducerTaskGC:ReducerTaskGC
MAPREDUCE-SchedulingDelay:调度延迟
SPARK-CpuWaste:CPU资源浪费
SPARK-DataSkew:数据倾斜
SPARK-ExecutorGC:ExecutorGC
SPARK-MemExceeded:峰值内存超限
SPARK-MemWaste:Memory资源浪费
SPARK-ScheduleOverhead:ScheduleOverhead
SPARK-ScheduleSkew:调度倾斜
SPARK-SlowTask:慢Task
TEZ-DataSkew:数据倾斜
TEZ-MapperDataSkew:Map数据倾斜
TEZ-ReducerDataSkew:Reduce数据倾斜
TEZ-TezMemWaste:Memory资源浪费
TEZ-TezSlowTask:慢Task
TEZ-TezTaskGC:TasksGC
     * @param string $RuleName 洞察规则名字，可参考RuleID的说明
     * @param string $RuleExplain 洞察规则解释
     * @param string $Detail 详情
     * @param string $Suggestion 建议信息
     * @param integer $Value 洞察异常衡量值，同类型的洞察项越大越严重，不同类型的洞察项无对比意义
     * @param string $ScheduleTaskExecID 调度任务执行ID
     * @param string $ScheduleFlowName 调度流，DAG
     * @param string $ScheduleTaskName 调度flow中的某个task节点
     * @param string $JobConf Yarn任务的部分核心配置
     * @param string $Context 洞察结构化信息
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleExplain",$param) and $param["RuleExplain"] !== null) {
            $this->RuleExplain = $param["RuleExplain"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ScheduleTaskExecID",$param) and $param["ScheduleTaskExecID"] !== null) {
            $this->ScheduleTaskExecID = $param["ScheduleTaskExecID"];
        }

        if (array_key_exists("ScheduleFlowName",$param) and $param["ScheduleFlowName"] !== null) {
            $this->ScheduleFlowName = $param["ScheduleFlowName"];
        }

        if (array_key_exists("ScheduleTaskName",$param) and $param["ScheduleTaskName"] !== null) {
            $this->ScheduleTaskName = $param["ScheduleTaskName"];
        }

        if (array_key_exists("JobConf",$param) and $param["JobConf"] !== null) {
            $this->JobConf = $param["JobConf"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
