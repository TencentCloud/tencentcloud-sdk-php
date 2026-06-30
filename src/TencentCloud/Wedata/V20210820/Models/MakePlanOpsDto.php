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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 补录计划
 *
 * @method string getPlanId() 获取<p>补录计划ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlanId(string $PlanId) 设置<p>补录计划ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMakeName() 获取<p>补录计划名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMakeName(string $MakeName) 设置<p>补录计划名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCheckParent() 获取<p>补录是否检查父任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckParent(boolean $CheckParent) 设置<p>补录是否检查父任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSameSelfDependType() 获取<p>是否使用任务原有自依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSameSelfDependType(boolean $SameSelfDependType) 设置<p>是否使用任务原有自依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParallelNum() 获取<p>并行度，在SameSelfDependType为false时生效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParallelNum(integer $ParallelNum) 设置<p>并行度，在SameSelfDependType为false时生效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSameCycle() 获取<p>补录实例生成周期是否修改</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSameCycle(boolean $SameCycle) 设置<p>补录实例生成周期是否修改</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceTaskCycle() 获取<p>调度周期转换方式-原始周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceTaskCycle(string $SourceTaskCycle) 设置<p>调度周期转换方式-原始周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetTaskCycle() 获取<p>调度周期转换方式-目标周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTaskCycle(string $TargetTaskCycle) 设置<p>调度周期转换方式-目标周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetTaskAction() 获取<p>调度周期转换方式-目标周期类型指定时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTaskAction(integer $TargetTaskAction) 设置<p>调度周期转换方式-目标周期类型指定时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMapParamList() 获取<p>补录实例自定义参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMapParamList(array $MapParamList) 设置<p>补录实例自定义参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMakeExtList() 获取<p>补录扩展属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMakeExtList(array $MakeExtList) 设置<p>补录扩展属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorId() 获取<p>创建人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorId(string $CreatorId) 设置<p>创建人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskIdList() 获取<p>补录任务ID集合</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskIdList(array $TaskIdList) 设置<p>补录任务ID集合</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMakeDatetimeList() 获取<p>补录计划日期范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMakeDatetimeList(array $MakeDatetimeList) 设置<p>补录计划日期范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取<p>补录计划说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置<p>补录计划说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerResourceGroup() 获取<p>补录指定的调度资源组（ID）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerResourceGroup(string $SchedulerResourceGroup) 设置<p>补录指定的调度资源组（ID）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerResourceGroupName() 获取<p>补录指定的调度资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerResourceGroupName(string $SchedulerResourceGroupName) 设置<p>补录指定的调度资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntegrationResourceGroup() 获取<p>补录指定的集成资源组（ID）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntegrationResourceGroup(string $IntegrationResourceGroup) 设置<p>补录指定的集成资源组（ID）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntegrationResourceGroupName() 获取<p>补录指定的集成资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntegrationResourceGroupName(string $IntegrationResourceGroupName) 设置<p>补录指定的集成资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskCount() 获取<p>补录计划任务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCount(integer $TaskCount) 设置<p>补录计划任务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompletePercent() 获取<p>补录计划实例完成百分数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompletePercent(integer $CompletePercent) 设置<p>补录计划实例完成百分数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessPercent() 获取<p>补录计划实例成功百分数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessPercent(integer $SuccessPercent) 设置<p>补录计划实例成功百分数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckParentType() 获取<p>补录检查父任务类型。取值范围：</p><li> NONE: 全部不检查 </li><li> ALL: 检查全部上游父任务 </li><li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckParentType(string $CheckParentType) 设置<p>补录检查父任务类型。取值范围：</p><li> NONE: 全部不检查 </li><li> ALL: 检查全部上游父任务 </li><li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSameSelfWorkflowDependType() 获取<p>是否和原任务保持相同工作流自依赖属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSameSelfWorkflowDependType(boolean $SameSelfWorkflowDependType) 设置<p>是否和原任务保持相同工作流自依赖属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfWorkflowDependency() 获取<p>工作流自依赖类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfWorkflowDependency(string $SelfWorkflowDependency) 设置<p>工作流自依赖类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMakeDataTimeOrder() 获取<p>补录时间顺序<br>NORMAL： 正常<br>ORDER ： 按照实例时间顺序执行<br>REVERSE： 实例数据时间逆序</p>
 * @method void setMakeDataTimeOrder(string $MakeDataTimeOrder) 设置<p>补录时间顺序<br>NORMAL： 正常<br>ORDER ： 按照实例时间顺序执行<br>REVERSE： 实例数据时间逆序</p>
 * @method string getScheduleTimeZone() 获取<p>补录时间范围的时区</p>
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>补录时间范围的时区</p>
 * @method string getAppParam() 获取<p>执行应用参数</p>
 * @method void setAppParam(string $AppParam) 设置<p>执行应用参数</p>
 * @method string getTimeType() 获取<p>补录计划时间范围的类型：<br>DATA_TIME：实例数据时间；SCHEDULE_TIME 计划调度时间</p>
 * @method void setTimeType(string $TimeType) 设置<p>补录计划时间范围的类型：<br>DATA_TIME：实例数据时间；SCHEDULE_TIME 计划调度时间</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method integer getFailurePercent() 获取<p>失败百分比</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailurePercent(integer $FailurePercent) 设置<p>失败百分比</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MakePlanAlarmRule getAlarmRule() 获取<p>补录计划的告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmRule(MakePlanAlarmRule $AlarmRule) 设置<p>补录计划的告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunType() 获取<p>运行类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunType(integer $RunType) 设置<p>运行类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunDateTime() 获取<p>定时运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunDateTime(string $RunDateTime) 设置<p>定时运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunScheduleTimeZone() 获取<p>定时补录计划 或者 指定时间段补录 执行时间点的时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunScheduleTimeZone(string $RunScheduleTimeZone) 设置<p>定时补录计划 或者 指定时间段补录 执行时间点的时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunScheduleRangeStartTime() 获取<p>指定时间段补录开始时间</p><p>参数格式：00:00 - 23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunScheduleRangeStartTime(string $RunScheduleRangeStartTime) 设置<p>指定时间段补录开始时间</p><p>参数格式：00:00 - 23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunScheduleRangeEndTime() 获取<p>指定时间段补录结束时间</p><p>参数格式：00:00 - 23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunScheduleRangeEndTime(string $RunScheduleRangeEndTime) 设置<p>指定时间段补录结束时间</p><p>参数格式：00:00 - 23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRunScheduleRangeWeekDays() 获取<p>指定时间段补录生效日，星期一到星期日，1-7</p><p>枚举值：</p><ul><li>星期一： 1</li><li>星期二： 2</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunScheduleRangeWeekDays(array $RunScheduleRangeWeekDays) 设置<p>指定时间段补录生效日，星期一到星期日，1-7</p><p>枚举值：</p><ul><li>星期一： 1</li><li>星期二： 2</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MakePlanOpsDto extends AbstractModel
{
    /**
     * @var string <p>补录计划ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlanId;

    /**
     * @var string <p>补录计划名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MakeName;

    /**
     * @var string <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var boolean <p>补录是否检查父任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckParent;

    /**
     * @var boolean <p>是否使用任务原有自依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SameSelfDependType;

    /**
     * @var integer <p>并行度，在SameSelfDependType为false时生效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParallelNum;

    /**
     * @var boolean <p>补录实例生成周期是否修改</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SameCycle;

    /**
     * @var string <p>调度周期转换方式-原始周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceTaskCycle;

    /**
     * @var string <p>调度周期转换方式-目标周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTaskCycle;

    /**
     * @var integer <p>调度周期转换方式-目标周期类型指定时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTaskAction;

    /**
     * @var array <p>补录实例自定义参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MapParamList;

    /**
     * @var array <p>补录扩展属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MakeExtList;

    /**
     * @var string <p>创建人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorId;

    /**
     * @var string <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var array <p>补录任务ID集合</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskIdList;

    /**
     * @var array <p>补录计划日期范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MakeDatetimeList;

    /**
     * @var string <p>补录计划说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string <p>补录指定的调度资源组（ID）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerResourceGroup;

    /**
     * @var string <p>补录指定的调度资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerResourceGroupName;

    /**
     * @var string <p>补录指定的集成资源组（ID）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntegrationResourceGroup;

    /**
     * @var string <p>补录指定的集成资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntegrationResourceGroupName;

    /**
     * @var integer <p>补录计划任务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCount;

    /**
     * @var integer <p>补录计划实例完成百分数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompletePercent;

    /**
     * @var integer <p>补录计划实例成功百分数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessPercent;

    /**
     * @var string <p>补录检查父任务类型。取值范围：</p><li> NONE: 全部不检查 </li><li> ALL: 检查全部上游父任务 </li><li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckParentType;

    /**
     * @var boolean <p>是否和原任务保持相同工作流自依赖属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SameSelfWorkflowDependType;

    /**
     * @var string <p>工作流自依赖类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfWorkflowDependency;

    /**
     * @var string <p>补录时间顺序<br>NORMAL： 正常<br>ORDER ： 按照实例时间顺序执行<br>REVERSE： 实例数据时间逆序</p>
     */
    public $MakeDataTimeOrder;

    /**
     * @var string <p>补录时间范围的时区</p>
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>执行应用参数</p>
     */
    public $AppParam;

    /**
     * @var string <p>补录计划时间范围的类型：<br>DATA_TIME：实例数据时间；SCHEDULE_TIME 计划调度时间</p>
     */
    public $TimeType;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>失败百分比</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailurePercent;

    /**
     * @var MakePlanAlarmRule <p>补录计划的告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmRule;

    /**
     * @var integer <p>运行类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunType;

    /**
     * @var string <p>定时运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunDateTime;

    /**
     * @var string <p>定时补录计划 或者 指定时间段补录 执行时间点的时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunScheduleTimeZone;

    /**
     * @var string <p>指定时间段补录开始时间</p><p>参数格式：00:00 - 23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunScheduleRangeStartTime;

    /**
     * @var string <p>指定时间段补录结束时间</p><p>参数格式：00:00 - 23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunScheduleRangeEndTime;

    /**
     * @var array <p>指定时间段补录生效日，星期一到星期日，1-7</p><p>枚举值：</p><ul><li>星期一： 1</li><li>星期二： 2</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunScheduleRangeWeekDays;

    /**
     * @param string $PlanId <p>补录计划ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MakeName <p>补录计划名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CheckParent <p>补录是否检查父任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SameSelfDependType <p>是否使用任务原有自依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ParallelNum <p>并行度，在SameSelfDependType为false时生效</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SameCycle <p>补录实例生成周期是否修改</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceTaskCycle <p>调度周期转换方式-原始周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetTaskCycle <p>调度周期转换方式-目标周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetTaskAction <p>调度周期转换方式-目标周期类型指定时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MapParamList <p>补录实例自定义参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MakeExtList <p>补录扩展属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorId <p>创建人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskIdList <p>补录任务ID集合</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MakeDatetimeList <p>补录计划日期范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark <p>补录计划说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerResourceGroup <p>补录指定的调度资源组（ID）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerResourceGroupName <p>补录指定的调度资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntegrationResourceGroup <p>补录指定的集成资源组（ID）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntegrationResourceGroupName <p>补录指定的集成资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskCount <p>补录计划任务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompletePercent <p>补录计划实例完成百分数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessPercent <p>补录计划实例成功百分数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckParentType <p>补录检查父任务类型。取值范围：</p><li> NONE: 全部不检查 </li><li> ALL: 检查全部上游父任务 </li><li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SameSelfWorkflowDependType <p>是否和原任务保持相同工作流自依赖属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfWorkflowDependency <p>工作流自依赖类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MakeDataTimeOrder <p>补录时间顺序<br>NORMAL： 正常<br>ORDER ： 按照实例时间顺序执行<br>REVERSE： 实例数据时间逆序</p>
     * @param string $ScheduleTimeZone <p>补录时间范围的时区</p>
     * @param string $AppParam <p>执行应用参数</p>
     * @param string $TimeType <p>补录计划时间范围的类型：<br>DATA_TIME：实例数据时间；SCHEDULE_TIME 计划调度时间</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param integer $FailurePercent <p>失败百分比</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MakePlanAlarmRule $AlarmRule <p>补录计划的告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunType <p>运行类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunDateTime <p>定时运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunScheduleTimeZone <p>定时补录计划 或者 指定时间段补录 执行时间点的时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunScheduleRangeStartTime <p>指定时间段补录开始时间</p><p>参数格式：00:00 - 23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunScheduleRangeEndTime <p>指定时间段补录结束时间</p><p>参数格式：00:00 - 23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RunScheduleRangeWeekDays <p>指定时间段补录生效日，星期一到星期日，1-7</p><p>枚举值：</p><ul><li>星期一： 1</li><li>星期二： 2</li></ul>
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("MakeName",$param) and $param["MakeName"] !== null) {
            $this->MakeName = $param["MakeName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CheckParent",$param) and $param["CheckParent"] !== null) {
            $this->CheckParent = $param["CheckParent"];
        }

        if (array_key_exists("SameSelfDependType",$param) and $param["SameSelfDependType"] !== null) {
            $this->SameSelfDependType = $param["SameSelfDependType"];
        }

        if (array_key_exists("ParallelNum",$param) and $param["ParallelNum"] !== null) {
            $this->ParallelNum = $param["ParallelNum"];
        }

        if (array_key_exists("SameCycle",$param) and $param["SameCycle"] !== null) {
            $this->SameCycle = $param["SameCycle"];
        }

        if (array_key_exists("SourceTaskCycle",$param) and $param["SourceTaskCycle"] !== null) {
            $this->SourceTaskCycle = $param["SourceTaskCycle"];
        }

        if (array_key_exists("TargetTaskCycle",$param) and $param["TargetTaskCycle"] !== null) {
            $this->TargetTaskCycle = $param["TargetTaskCycle"];
        }

        if (array_key_exists("TargetTaskAction",$param) and $param["TargetTaskAction"] !== null) {
            $this->TargetTaskAction = $param["TargetTaskAction"];
        }

        if (array_key_exists("MapParamList",$param) and $param["MapParamList"] !== null) {
            $this->MapParamList = [];
            foreach ($param["MapParamList"] as $key => $value){
                $obj = new StrToStrMap();
                $obj->deserialize($value);
                array_push($this->MapParamList, $obj);
            }
        }

        if (array_key_exists("MakeExtList",$param) and $param["MakeExtList"] !== null) {
            $this->MakeExtList = [];
            foreach ($param["MakeExtList"] as $key => $value){
                $obj = new StrToStrMap();
                $obj->deserialize($value);
                array_push($this->MakeExtList, $obj);
            }
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("MakeDatetimeList",$param) and $param["MakeDatetimeList"] !== null) {
            $this->MakeDatetimeList = [];
            foreach ($param["MakeDatetimeList"] as $key => $value){
                $obj = new CreateMakeDatetimeInfo();
                $obj->deserialize($value);
                array_push($this->MakeDatetimeList, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SchedulerResourceGroup",$param) and $param["SchedulerResourceGroup"] !== null) {
            $this->SchedulerResourceGroup = $param["SchedulerResourceGroup"];
        }

        if (array_key_exists("SchedulerResourceGroupName",$param) and $param["SchedulerResourceGroupName"] !== null) {
            $this->SchedulerResourceGroupName = $param["SchedulerResourceGroupName"];
        }

        if (array_key_exists("IntegrationResourceGroup",$param) and $param["IntegrationResourceGroup"] !== null) {
            $this->IntegrationResourceGroup = $param["IntegrationResourceGroup"];
        }

        if (array_key_exists("IntegrationResourceGroupName",$param) and $param["IntegrationResourceGroupName"] !== null) {
            $this->IntegrationResourceGroupName = $param["IntegrationResourceGroupName"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("CompletePercent",$param) and $param["CompletePercent"] !== null) {
            $this->CompletePercent = $param["CompletePercent"];
        }

        if (array_key_exists("SuccessPercent",$param) and $param["SuccessPercent"] !== null) {
            $this->SuccessPercent = $param["SuccessPercent"];
        }

        if (array_key_exists("CheckParentType",$param) and $param["CheckParentType"] !== null) {
            $this->CheckParentType = $param["CheckParentType"];
        }

        if (array_key_exists("SameSelfWorkflowDependType",$param) and $param["SameSelfWorkflowDependType"] !== null) {
            $this->SameSelfWorkflowDependType = $param["SameSelfWorkflowDependType"];
        }

        if (array_key_exists("SelfWorkflowDependency",$param) and $param["SelfWorkflowDependency"] !== null) {
            $this->SelfWorkflowDependency = $param["SelfWorkflowDependency"];
        }

        if (array_key_exists("MakeDataTimeOrder",$param) and $param["MakeDataTimeOrder"] !== null) {
            $this->MakeDataTimeOrder = $param["MakeDataTimeOrder"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("AppParam",$param) and $param["AppParam"] !== null) {
            $this->AppParam = $param["AppParam"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FailurePercent",$param) and $param["FailurePercent"] !== null) {
            $this->FailurePercent = $param["FailurePercent"];
        }

        if (array_key_exists("AlarmRule",$param) and $param["AlarmRule"] !== null) {
            $this->AlarmRule = new MakePlanAlarmRule();
            $this->AlarmRule->deserialize($param["AlarmRule"]);
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("RunDateTime",$param) and $param["RunDateTime"] !== null) {
            $this->RunDateTime = $param["RunDateTime"];
        }

        if (array_key_exists("RunScheduleTimeZone",$param) and $param["RunScheduleTimeZone"] !== null) {
            $this->RunScheduleTimeZone = $param["RunScheduleTimeZone"];
        }

        if (array_key_exists("RunScheduleRangeStartTime",$param) and $param["RunScheduleRangeStartTime"] !== null) {
            $this->RunScheduleRangeStartTime = $param["RunScheduleRangeStartTime"];
        }

        if (array_key_exists("RunScheduleRangeEndTime",$param) and $param["RunScheduleRangeEndTime"] !== null) {
            $this->RunScheduleRangeEndTime = $param["RunScheduleRangeEndTime"];
        }

        if (array_key_exists("RunScheduleRangeWeekDays",$param) and $param["RunScheduleRangeWeekDays"] !== null) {
            $this->RunScheduleRangeWeekDays = $param["RunScheduleRangeWeekDays"];
        }
    }
}
