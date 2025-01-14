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
 * 补录计划
 *
 * @method string getPlanId() 获取补录计划ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlanId(string $PlanId) 设置补录计划ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMakeName() 获取补录计划名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMakeName(string $MakeName) 设置补录计划名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCheckParent() 获取补录是否检查父任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckParent(boolean $CheckParent) 设置补录是否检查父任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSameSelfDependType() 获取是否使用任务原有自依赖配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSameSelfDependType(boolean $SameSelfDependType) 设置是否使用任务原有自依赖配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParallelNum() 获取并行度，在SameSelfDependType为false时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParallelNum(integer $ParallelNum) 设置并行度，在SameSelfDependType为false时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSameCycle() 获取补录实例生成周期是否修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSameCycle(boolean $SameCycle) 设置补录实例生成周期是否修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceTaskCycle() 获取调度周期转换方式-原始周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceTaskCycle(string $SourceTaskCycle) 设置调度周期转换方式-原始周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetTaskCycle() 获取调度周期转换方式-目标周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTaskCycle(string $TargetTaskCycle) 设置调度周期转换方式-目标周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetTaskAction() 获取调度周期转换方式-目标周期类型指定时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTaskAction(integer $TargetTaskAction) 设置调度周期转换方式-目标周期类型指定时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMapParamList() 获取补录实例自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMapParamList(array $MapParamList) 设置补录实例自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorId() 获取创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorId(string $CreatorId) 设置创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskIdList() 获取补录任务ID集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskIdList(array $TaskIdList) 设置补录任务ID集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMakeDatetimeList() 获取补录计划日期范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMakeDatetimeList(array $MakeDatetimeList) 设置补录计划日期范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取补录计划说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置补录计划说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerResourceGroup() 获取补录指定的调度资源组（ID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerResourceGroup(string $SchedulerResourceGroup) 设置补录指定的调度资源组（ID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerResourceGroupName() 获取补录指定的调度资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerResourceGroupName(string $SchedulerResourceGroupName) 设置补录指定的调度资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntegrationResourceGroup() 获取补录指定的集成资源组（ID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntegrationResourceGroup(string $IntegrationResourceGroup) 设置补录指定的集成资源组（ID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntegrationResourceGroupName() 获取补录指定的集成资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntegrationResourceGroupName(string $IntegrationResourceGroupName) 设置补录指定的集成资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskCount() 获取补录计划任务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCount(integer $TaskCount) 设置补录计划任务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompletePercent() 获取补录计划实例完成百分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompletePercent(integer $CompletePercent) 设置补录计划实例完成百分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessPercent() 获取补录计划实例成功百分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessPercent(integer $SuccessPercent) 设置补录计划实例成功百分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckParentType() 获取补录检查父任务类型。取值范围：
<li> NONE: 全部不检查 </li>
<li> ALL: 检查全部上游父任务 </li>
<li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckParentType(string $CheckParentType) 设置补录检查父任务类型。取值范围：
<li> NONE: 全部不检查 </li>
<li> ALL: 检查全部上游父任务 </li>
<li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSameSelfWorkflowDependType() 获取是否和原任务保持相同工作流自依赖属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSameSelfWorkflowDependType(boolean $SameSelfWorkflowDependType) 设置是否和原任务保持相同工作流自依赖属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfWorkflowDependency() 获取工作流自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfWorkflowDependency(string $SelfWorkflowDependency) 设置工作流自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMakeDataTimeOrder() 获取补录时间顺序
NORMAL： 正常
ORDER ： 按照实例时间顺序执行
REVERSE： 实例数据时间逆序
 * @method void setMakeDataTimeOrder(string $MakeDataTimeOrder) 设置补录时间顺序
NORMAL： 正常
ORDER ： 按照实例时间顺序执行
REVERSE： 实例数据时间逆序
 */
class MakePlanOpsDto extends AbstractModel
{
    /**
     * @var string 补录计划ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlanId;

    /**
     * @var string 补录计划名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MakeName;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var boolean 补录是否检查父任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckParent;

    /**
     * @var boolean 是否使用任务原有自依赖配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SameSelfDependType;

    /**
     * @var integer 并行度，在SameSelfDependType为false时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParallelNum;

    /**
     * @var boolean 补录实例生成周期是否修改
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SameCycle;

    /**
     * @var string 调度周期转换方式-原始周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceTaskCycle;

    /**
     * @var string 调度周期转换方式-目标周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTaskCycle;

    /**
     * @var integer 调度周期转换方式-目标周期类型指定时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTaskAction;

    /**
     * @var array 补录实例自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MapParamList;

    /**
     * @var string 创建人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorId;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var array 补录任务ID集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskIdList;

    /**
     * @var array 补录计划日期范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MakeDatetimeList;

    /**
     * @var string 补录计划说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 补录指定的调度资源组（ID）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerResourceGroup;

    /**
     * @var string 补录指定的调度资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerResourceGroupName;

    /**
     * @var string 补录指定的集成资源组（ID）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntegrationResourceGroup;

    /**
     * @var string 补录指定的集成资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntegrationResourceGroupName;

    /**
     * @var integer 补录计划任务数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCount;

    /**
     * @var integer 补录计划实例完成百分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompletePercent;

    /**
     * @var integer 补录计划实例成功百分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessPercent;

    /**
     * @var string 补录检查父任务类型。取值范围：
<li> NONE: 全部不检查 </li>
<li> ALL: 检查全部上游父任务 </li>
<li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckParentType;

    /**
     * @var boolean 是否和原任务保持相同工作流自依赖属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SameSelfWorkflowDependType;

    /**
     * @var string 工作流自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfWorkflowDependency;

    /**
     * @var string 补录时间顺序
NORMAL： 正常
ORDER ： 按照实例时间顺序执行
REVERSE： 实例数据时间逆序
     */
    public $MakeDataTimeOrder;

    /**
     * @param string $PlanId 补录计划ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MakeName 补录计划名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CheckParent 补录是否检查父任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SameSelfDependType 是否使用任务原有自依赖配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ParallelNum 并行度，在SameSelfDependType为false时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SameCycle 补录实例生成周期是否修改
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceTaskCycle 调度周期转换方式-原始周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetTaskCycle 调度周期转换方式-目标周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetTaskAction 调度周期转换方式-目标周期类型指定时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MapParamList 补录实例自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorId 创建人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskIdList 补录任务ID集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MakeDatetimeList 补录计划日期范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 补录计划说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerResourceGroup 补录指定的调度资源组（ID）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerResourceGroupName 补录指定的调度资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntegrationResourceGroup 补录指定的集成资源组（ID）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntegrationResourceGroupName 补录指定的集成资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskCount 补录计划任务数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompletePercent 补录计划实例完成百分数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessPercent 补录计划实例成功百分数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckParentType 补录检查父任务类型。取值范围：
<li> NONE: 全部不检查 </li>
<li> ALL: 检查全部上游父任务 </li>
<li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SameSelfWorkflowDependType 是否和原任务保持相同工作流自依赖属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfWorkflowDependency 工作流自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MakeDataTimeOrder 补录时间顺序
NORMAL： 正常
ORDER ： 按照实例时间顺序执行
REVERSE： 实例数据时间逆序
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
    }
}
