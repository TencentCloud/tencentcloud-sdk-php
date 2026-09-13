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
 * 工作流任务信息。 注意：本结构同时用于入参（CreateWorkflow / UpdateWorkflow）与出参（GetWorkflow）， 其中 CreateTime / UpdateTime / CreateUserUin 为系统生成字段，仅在出参中有值， 入参传值不生效（服务端忽略且不报错）。
 *
 * @method array getParamList() 获取任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamList(array $ParamList) 设置任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependOnList() 获取任务依赖
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependOnList(array $DependOnList) 设置任务依赖
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskType getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(TaskType $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取资源组ID，可通过资源组相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组ID，可通过资源组相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmBrief getAlarm() 获取任务告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarm(AlarmBrief $Alarm) 设置任务告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method MonitorMetricBrief getMonitorMetric() 获取监控指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorMetric(MonitorMetricBrief $MonitorMetric) 设置监控指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskRetryStrategy getTaskRetryStrategy() 获取任务重试策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskRetryStrategy(TaskRetryStrategy $TaskRetryStrategy) 设置任务重试策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependOnRunCondition() 获取<p>任依赖运行条件</p><ul><li>ALL_SUCCESS: 全部成功：所有上游依赖任务均已执行并成功</li><li>ONE_SUCCESS: 至少一个成功：至少有一个上游依赖任务成功</li><li>NONE_FAILED: 目前没有失败：没有依赖任务失败，并且至少有一个依赖任务在运行中</li><li>ALL_DONE: 全部完成：所有上游依赖任务均已执行并完成（无论成功或失败</li><li>ONE_FAILED: 至少一个失败：至少有一个上游依赖任务失败</li><li>ALL_FAILED: 全部失败：所有上游依赖任务都失败</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li><li>ADVANCED:运行条件为高级模式时配置</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependOnRunCondition(string $DependOnRunCondition) 设置<p>任依赖运行条件</p><ul><li>ALL_SUCCESS: 全部成功：所有上游依赖任务均已执行并成功</li><li>ONE_SUCCESS: 至少一个成功：至少有一个上游依赖任务成功</li><li>NONE_FAILED: 目前没有失败：没有依赖任务失败，并且至少有一个依赖任务在运行中</li><li>ALL_DONE: 全部完成：所有上游依赖任务均已执行并完成（无论成功或失败</li><li>ONE_FAILED: 至少一个失败：至少有一个上游依赖任务失败</li><li>ALL_FAILED: 全部失败：所有上游依赖任务都失败</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li><li>ADVANCED:运行条件为高级模式时配置</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedDependencyConfig getAdvancedDependencyConfig() 获取<p>任务高级运行参数，当DependOnRunCondition为ADVANCED时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedDependencyConfig(AdvancedDependencyConfig $AdvancedDependencyConfig) 设置<p>任务高级运行参数，当DependOnRunCondition为ADVANCED时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkflowTask getInnerTask() 获取<p>内嵌任务（FOR_EACH任务的子任务）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerTask(WorkflowTask $InnerTask) 设置<p>内嵌任务（FOR_EACH任务的子任务）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，单位：毫秒时间戳。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，单位：毫秒时间戳。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间，单位：毫秒时间戳。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，单位：毫秒时间戳。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人UIN。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人UIN。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowTask extends AbstractModel
{
    /**
     * @var array 任务参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamList;

    /**
     * @var array 任务依赖
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependOnList;

    /**
     * @var string 任务ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 资源组ID，可通过资源组相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var string 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var AlarmBrief 任务告警
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alarm;

    /**
     * @var MonitorMetricBrief 监控指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorMetric;

    /**
     * @var TaskRetryStrategy 任务重试策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskRetryStrategy;

    /**
     * @var string <p>任依赖运行条件</p><ul><li>ALL_SUCCESS: 全部成功：所有上游依赖任务均已执行并成功</li><li>ONE_SUCCESS: 至少一个成功：至少有一个上游依赖任务成功</li><li>NONE_FAILED: 目前没有失败：没有依赖任务失败，并且至少有一个依赖任务在运行中</li><li>ALL_DONE: 全部完成：所有上游依赖任务均已执行并完成（无论成功或失败</li><li>ONE_FAILED: 至少一个失败：至少有一个上游依赖任务失败</li><li>ALL_FAILED: 全部失败：所有上游依赖任务都失败</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li><li>ADVANCED:运行条件为高级模式时配置</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependOnRunCondition;

    /**
     * @var float 任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float 任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var AdvancedDependencyConfig <p>任务高级运行参数，当DependOnRunCondition为ADVANCED时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedDependencyConfig;

    /**
     * @var WorkflowTask <p>内嵌任务（FOR_EACH任务的子任务）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerTask;

    /**
     * @var string 创建时间，单位：毫秒时间戳。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间，单位：毫秒时间戳。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 创建人UIN。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @param array $ParamList 任务参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependOnList 任务依赖
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskType $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId 资源组ID，可通过资源组相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmBrief $Alarm 任务告警
注意：此字段可能返回 null，表示取不到有效值。
     * @param MonitorMetricBrief $MonitorMetric 监控指标
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskRetryStrategy $TaskRetryStrategy 任务重试策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependOnRunCondition <p>任依赖运行条件</p><ul><li>ALL_SUCCESS: 全部成功：所有上游依赖任务均已执行并成功</li><li>ONE_SUCCESS: 至少一个成功：至少有一个上游依赖任务成功</li><li>NONE_FAILED: 目前没有失败：没有依赖任务失败，并且至少有一个依赖任务在运行中</li><li>ALL_DONE: 全部完成：所有上游依赖任务均已执行并完成（无论成功或失败</li><li>ONE_FAILED: 至少一个失败：至少有一个上游依赖任务失败</li><li>ALL_FAILED: 全部失败：所有上游依赖任务都失败</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li><li>ADVANCED:运行条件为高级模式时配置</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate 任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate 任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedDependencyConfig $AdvancedDependencyConfig <p>任务高级运行参数，当DependOnRunCondition为ADVANCED时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkflowTask $InnerTask <p>内嵌任务（FOR_EACH任务的子任务）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，单位：毫秒时间戳。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间，单位：毫秒时间戳。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人UIN。出参专用，系统生成，入参传值不生效
【已废弃】服务端忽略传入值，不报错。
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
        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("DependOnList",$param) and $param["DependOnList"] !== null) {
            $this->DependOnList = [];
            foreach ($param["DependOnList"] as $key => $value){
                $obj = new DependOnBrief();
                $obj->deserialize($value);
                array_push($this->DependOnList, $obj);
            }
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = new TaskType();
            $this->TaskType->deserialize($param["TaskType"]);
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Alarm",$param) and $param["Alarm"] !== null) {
            $this->Alarm = new AlarmBrief();
            $this->Alarm->deserialize($param["Alarm"]);
        }

        if (array_key_exists("MonitorMetric",$param) and $param["MonitorMetric"] !== null) {
            $this->MonitorMetric = new MonitorMetricBrief();
            $this->MonitorMetric->deserialize($param["MonitorMetric"]);
        }

        if (array_key_exists("TaskRetryStrategy",$param) and $param["TaskRetryStrategy"] !== null) {
            $this->TaskRetryStrategy = new TaskRetryStrategy();
            $this->TaskRetryStrategy->deserialize($param["TaskRetryStrategy"]);
        }

        if (array_key_exists("DependOnRunCondition",$param) and $param["DependOnRunCondition"] !== null) {
            $this->DependOnRunCondition = $param["DependOnRunCondition"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("AdvancedDependencyConfig",$param) and $param["AdvancedDependencyConfig"] !== null) {
            $this->AdvancedDependencyConfig = new AdvancedDependencyConfig();
            $this->AdvancedDependencyConfig->deserialize($param["AdvancedDependencyConfig"]);
        }

        if (array_key_exists("InnerTask",$param) and $param["InnerTask"] !== null) {
            $this->InnerTask = new WorkflowTask();
            $this->InnerTask->deserialize($param["InnerTask"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }
    }
}
