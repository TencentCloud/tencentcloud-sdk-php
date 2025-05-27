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
 * CreateOpsMakePlan请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getMakeName() 获取补录计划名称
 * @method void setMakeName(string $MakeName) 设置补录计划名称
 * @method array getTaskIdList() 获取补录任务集合
 * @method void setTaskIdList(array $TaskIdList) 设置补录任务集合
 * @method array getMakeDatetimeList() 获取补录计划日期范围
 * @method void setMakeDatetimeList(array $MakeDatetimeList) 设置补录计划日期范围
 * @method string getProjectIdent() 获取项目标识
 * @method void setProjectIdent(string $ProjectIdent) 设置项目标识
 * @method boolean getCheckParent() 获取补录是否检查父任务状态，默认不检查。不推荐使用，后续会废弃，推荐使用 CheckParentType。
 * @method void setCheckParent(boolean $CheckParent) 设置补录是否检查父任务状态，默认不检查。不推荐使用，后续会废弃，推荐使用 CheckParentType。
 * @method string getCheckParentType() 获取补录检查父任务类型。取值范围：
<li> NONE: 全部不检查 </li>
<li> ALL: 检查全部上游父任务 </li>
<li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
 * @method void setCheckParentType(string $CheckParentType) 设置补录检查父任务类型。取值范围：
<li> NONE: 全部不检查 </li>
<li> ALL: 检查全部上游父任务 </li>
<li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getSelfDependence() 获取已弃用。任务自依赖类型：parallel（并行），serial（无序串行），orderly（有序串行）
 * @method void setSelfDependence(string $SelfDependence) 设置已弃用。任务自依赖类型：parallel（并行），serial（无序串行），orderly（有序串行）
 * @method integer getParallelNum() 获取并行度
 * @method void setParallelNum(integer $ParallelNum) 设置并行度
 * @method boolean getSameCycle() 获取补录实例生成周期是否和原周期相同，默认为true
 * @method void setSameCycle(boolean $SameCycle) 设置补录实例生成周期是否和原周期相同，默认为true
 * @method string getTargetTaskCycle() 获取补录实例目标周期类型
 * @method void setTargetTaskCycle(string $TargetTaskCycle) 设置补录实例目标周期类型
 * @method integer getTargetTaskAction() 获取补录实例目标周期类型指定时间
 * @method void setTargetTaskAction(integer $TargetTaskAction) 设置补录实例目标周期类型指定时间
 * @method array getMapParamList() 获取补录实例自定义参数
 * @method void setMapParamList(array $MapParamList) 设置补录实例自定义参数
 * @method string getCreatorId() 获取创建人id
 * @method void setCreatorId(string $CreatorId) 设置创建人id
 * @method string getCreator() 获取创建人
 * @method void setCreator(string $Creator) 设置创建人
 * @method string getRemark() 获取补录计划说明
 * @method void setRemark(string $Remark) 设置补录计划说明
 * @method boolean getSameSelfDependType() 获取是否使用任务原有自依赖配置，默认为true
 * @method void setSameSelfDependType(boolean $SameSelfDependType) 设置是否使用任务原有自依赖配置，默认为true
 * @method string getSourceTaskCycle() 获取补录实例原始周期类型
 * @method void setSourceTaskCycle(string $SourceTaskCycle) 设置补录实例原始周期类型
 * @method string getSchedulerResourceGroup() 获取补录指定的调度资源组（ID） 为空则表示使用任务原有调度执行资源组
 * @method void setSchedulerResourceGroup(string $SchedulerResourceGroup) 设置补录指定的调度资源组（ID） 为空则表示使用任务原有调度执行资源组
 * @method string getIntegrationResourceGroup() 获取补录指定的集成资源组（ID） 为空则表示使用任务原有集成执行资源组
 * @method void setIntegrationResourceGroup(string $IntegrationResourceGroup) 设置补录指定的集成资源组（ID） 为空则表示使用任务原有集成执行资源组
 * @method string getSchedulerResourceGroupName() 获取补录指定的调度资源组名称 为空则表示使用任务原有调度执行资源组
 * @method void setSchedulerResourceGroupName(string $SchedulerResourceGroupName) 设置补录指定的调度资源组名称 为空则表示使用任务原有调度执行资源组
 * @method string getIntegrationResourceGroupName() 获取补录指定的集成资源组名称 为空则表示使用任务原有集成执行资源组
 * @method void setIntegrationResourceGroupName(string $IntegrationResourceGroupName) 设置补录指定的集成资源组名称 为空则表示使用任务原有集成执行资源组
 * @method array getMakeExtList() 获取补录扩展属性
 * @method void setMakeExtList(array $MakeExtList) 设置补录扩展属性
 * @method boolean getSameSelfWorkflowDependType() 获取补录扩展属性
 * @method void setSameSelfWorkflowDependType(boolean $SameSelfWorkflowDependType) 设置补录扩展属性
 * @method string getSelfWorkflowDependency() 获取补录扩展属性
 * @method void setSelfWorkflowDependency(string $SelfWorkflowDependency) 设置补录扩展属性
 * @method string getMakeType() 获取任务 TASK； 项目： PROJECT
 * @method void setMakeType(string $MakeType) 设置任务 TASK； 项目： PROJECT
 * @method string getStatusList() 获取任务状态
 * @method void setStatusList(string $StatusList) 设置任务状态
 * @method string getMakeCheckEventType() 获取补录是否跳过事件检查
 * @method void setMakeCheckEventType(string $MakeCheckEventType) 设置补录是否跳过事件检查
 */
class CreateOpsMakePlanRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 补录计划名称
     */
    public $MakeName;

    /**
     * @var array 补录任务集合
     */
    public $TaskIdList;

    /**
     * @var array 补录计划日期范围
     */
    public $MakeDatetimeList;

    /**
     * @var string 项目标识
     */
    public $ProjectIdent;

    /**
     * @var boolean 补录是否检查父任务状态，默认不检查。不推荐使用，后续会废弃，推荐使用 CheckParentType。
     */
    public $CheckParent;

    /**
     * @var string 补录检查父任务类型。取值范围：
<li> NONE: 全部不检查 </li>
<li> ALL: 检查全部上游父任务 </li>
<li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
     */
    public $CheckParentType;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 已弃用。任务自依赖类型：parallel（并行），serial（无序串行），orderly（有序串行）
     */
    public $SelfDependence;

    /**
     * @var integer 并行度
     */
    public $ParallelNum;

    /**
     * @var boolean 补录实例生成周期是否和原周期相同，默认为true
     */
    public $SameCycle;

    /**
     * @var string 补录实例目标周期类型
     */
    public $TargetTaskCycle;

    /**
     * @var integer 补录实例目标周期类型指定时间
     */
    public $TargetTaskAction;

    /**
     * @var array 补录实例自定义参数
     */
    public $MapParamList;

    /**
     * @var string 创建人id
     */
    public $CreatorId;

    /**
     * @var string 创建人
     */
    public $Creator;

    /**
     * @var string 补录计划说明
     */
    public $Remark;

    /**
     * @var boolean 是否使用任务原有自依赖配置，默认为true
     */
    public $SameSelfDependType;

    /**
     * @var string 补录实例原始周期类型
     */
    public $SourceTaskCycle;

    /**
     * @var string 补录指定的调度资源组（ID） 为空则表示使用任务原有调度执行资源组
     */
    public $SchedulerResourceGroup;

    /**
     * @var string 补录指定的集成资源组（ID） 为空则表示使用任务原有集成执行资源组
     */
    public $IntegrationResourceGroup;

    /**
     * @var string 补录指定的调度资源组名称 为空则表示使用任务原有调度执行资源组
     */
    public $SchedulerResourceGroupName;

    /**
     * @var string 补录指定的集成资源组名称 为空则表示使用任务原有集成执行资源组
     */
    public $IntegrationResourceGroupName;

    /**
     * @var array 补录扩展属性
     */
    public $MakeExtList;

    /**
     * @var boolean 补录扩展属性
     */
    public $SameSelfWorkflowDependType;

    /**
     * @var string 补录扩展属性
     */
    public $SelfWorkflowDependency;

    /**
     * @var string 任务 TASK； 项目： PROJECT
     */
    public $MakeType;

    /**
     * @var string 任务状态
     */
    public $StatusList;

    /**
     * @var string 补录是否跳过事件检查
     */
    public $MakeCheckEventType;

    /**
     * @param string $ProjectId 项目id
     * @param string $MakeName 补录计划名称
     * @param array $TaskIdList 补录任务集合
     * @param array $MakeDatetimeList 补录计划日期范围
     * @param string $ProjectIdent 项目标识
     * @param boolean $CheckParent 补录是否检查父任务状态，默认不检查。不推荐使用，后续会废弃，推荐使用 CheckParentType。
     * @param string $CheckParentType 补录检查父任务类型。取值范围：
<li> NONE: 全部不检查 </li>
<li> ALL: 检查全部上游父任务 </li>
<li> MAKE_SCOPE: 只在（当前补录计划）选中任务中检查 </li>
     * @param string $ProjectName 项目名称
     * @param string $SelfDependence 已弃用。任务自依赖类型：parallel（并行），serial（无序串行），orderly（有序串行）
     * @param integer $ParallelNum 并行度
     * @param boolean $SameCycle 补录实例生成周期是否和原周期相同，默认为true
     * @param string $TargetTaskCycle 补录实例目标周期类型
     * @param integer $TargetTaskAction 补录实例目标周期类型指定时间
     * @param array $MapParamList 补录实例自定义参数
     * @param string $CreatorId 创建人id
     * @param string $Creator 创建人
     * @param string $Remark 补录计划说明
     * @param boolean $SameSelfDependType 是否使用任务原有自依赖配置，默认为true
     * @param string $SourceTaskCycle 补录实例原始周期类型
     * @param string $SchedulerResourceGroup 补录指定的调度资源组（ID） 为空则表示使用任务原有调度执行资源组
     * @param string $IntegrationResourceGroup 补录指定的集成资源组（ID） 为空则表示使用任务原有集成执行资源组
     * @param string $SchedulerResourceGroupName 补录指定的调度资源组名称 为空则表示使用任务原有调度执行资源组
     * @param string $IntegrationResourceGroupName 补录指定的集成资源组名称 为空则表示使用任务原有集成执行资源组
     * @param array $MakeExtList 补录扩展属性
     * @param boolean $SameSelfWorkflowDependType 补录扩展属性
     * @param string $SelfWorkflowDependency 补录扩展属性
     * @param string $MakeType 任务 TASK； 项目： PROJECT
     * @param string $StatusList 任务状态
     * @param string $MakeCheckEventType 补录是否跳过事件检查
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("MakeName",$param) and $param["MakeName"] !== null) {
            $this->MakeName = $param["MakeName"];
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

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("CheckParent",$param) and $param["CheckParent"] !== null) {
            $this->CheckParent = $param["CheckParent"];
        }

        if (array_key_exists("CheckParentType",$param) and $param["CheckParentType"] !== null) {
            $this->CheckParentType = $param["CheckParentType"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("SelfDependence",$param) and $param["SelfDependence"] !== null) {
            $this->SelfDependence = $param["SelfDependence"];
        }

        if (array_key_exists("ParallelNum",$param) and $param["ParallelNum"] !== null) {
            $this->ParallelNum = $param["ParallelNum"];
        }

        if (array_key_exists("SameCycle",$param) and $param["SameCycle"] !== null) {
            $this->SameCycle = $param["SameCycle"];
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SameSelfDependType",$param) and $param["SameSelfDependType"] !== null) {
            $this->SameSelfDependType = $param["SameSelfDependType"];
        }

        if (array_key_exists("SourceTaskCycle",$param) and $param["SourceTaskCycle"] !== null) {
            $this->SourceTaskCycle = $param["SourceTaskCycle"];
        }

        if (array_key_exists("SchedulerResourceGroup",$param) and $param["SchedulerResourceGroup"] !== null) {
            $this->SchedulerResourceGroup = $param["SchedulerResourceGroup"];
        }

        if (array_key_exists("IntegrationResourceGroup",$param) and $param["IntegrationResourceGroup"] !== null) {
            $this->IntegrationResourceGroup = $param["IntegrationResourceGroup"];
        }

        if (array_key_exists("SchedulerResourceGroupName",$param) and $param["SchedulerResourceGroupName"] !== null) {
            $this->SchedulerResourceGroupName = $param["SchedulerResourceGroupName"];
        }

        if (array_key_exists("IntegrationResourceGroupName",$param) and $param["IntegrationResourceGroupName"] !== null) {
            $this->IntegrationResourceGroupName = $param["IntegrationResourceGroupName"];
        }

        if (array_key_exists("MakeExtList",$param) and $param["MakeExtList"] !== null) {
            $this->MakeExtList = [];
            foreach ($param["MakeExtList"] as $key => $value){
                $obj = new StrToStrMap();
                $obj->deserialize($value);
                array_push($this->MakeExtList, $obj);
            }
        }

        if (array_key_exists("SameSelfWorkflowDependType",$param) and $param["SameSelfWorkflowDependType"] !== null) {
            $this->SameSelfWorkflowDependType = $param["SameSelfWorkflowDependType"];
        }

        if (array_key_exists("SelfWorkflowDependency",$param) and $param["SelfWorkflowDependency"] !== null) {
            $this->SelfWorkflowDependency = $param["SelfWorkflowDependency"];
        }

        if (array_key_exists("MakeType",$param) and $param["MakeType"] !== null) {
            $this->MakeType = $param["MakeType"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("MakeCheckEventType",$param) and $param["MakeCheckEventType"] !== null) {
            $this->MakeCheckEventType = $param["MakeCheckEventType"];
        }
    }
}
