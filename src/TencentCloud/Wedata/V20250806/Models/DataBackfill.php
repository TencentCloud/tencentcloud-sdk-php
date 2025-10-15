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
 * 补录计划详情
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getDataBackfillPlanId() 获取数据补录计划id
 * @method void setDataBackfillPlanId(string $DataBackfillPlanId) 设置数据补录计划id
 * @method string getDataBackfillPlanName() 获取数据补录计划名称
 * @method void setDataBackfillPlanName(string $DataBackfillPlanName) 设置数据补录计划名称
 * @method array getTaskIds() 获取补录任务集合
 * @method void setTaskIds(array $TaskIds) 设置补录任务集合
 * @method array getDataBackfillRangeList() 获取补录任务的数据配置列表
 * @method void setDataBackfillRangeList(array $DataBackfillRangeList) 设置补录任务的数据配置列表
 * @method string getCheckParentType() 获取检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckParentType(string $CheckParentType) 设置检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSkipEventListening() 获取补录是否忽略事件依赖	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkipEventListening(boolean $SkipEventListening) 设置补录是否忽略事件依赖	
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRedefineParallelNum() 获取自定义实例运行并发度, 返回为null或者不返回，则表示任务原有自依赖
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedefineParallelNum(integer $RedefineParallelNum) 设置自定义实例运行并发度, 返回为null或者不返回，则表示任务原有自依赖
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedefineSelfWorkflowDependency() 获取自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedefineSelfWorkflowDependency(string $RedefineSelfWorkflowDependency) 设置自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerResourceGroupId() 获取调度资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerResourceGroupId(string $SchedulerResourceGroupId) 设置调度资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntegrationResourceGroupId() 获取集成资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntegrationResourceGroupId(string $IntegrationResourceGroupId) 设置集成资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedefineCycleType() 获取补录自定义的生成周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedefineCycleType(string $RedefineCycleType) 设置补录自定义的生成周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRedefineParamList() 获取自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedefineParamList(array $RedefineParamList) 设置自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取补录任务的执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置补录任务的执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取补录任务的执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置补录任务的执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建用户id
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建用户id
 * @method integer getCompletePercent() 获取补录计划实例完成百分数
 * @method void setCompletePercent(integer $CompletePercent) 设置补录计划实例完成百分数
 * @method integer getSuccessPercent() 获取补录计划实例成功百分数
 * @method void setSuccessPercent(integer $SuccessPercent) 设置补录计划实例成功百分数
 * @method string getDataTimeOrder() 获取补录是实例数据时间顺序，生效必须满足2个条件:1. 必须同周期任务2. 优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行 可选值- NORMAL: 不设置- ORDER: 顺序- REVERSE: 逆序不设置默认为NORMAL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataTimeOrder(string $DataTimeOrder) 设置补录是实例数据时间顺序，生效必须满足2个条件:1. 必须同周期任务2. 优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行 可选值- NORMAL: 不设置- ORDER: 顺序- REVERSE: 逆序不设置默认为NORMAL
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataBackfill extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 数据补录计划id
     */
    public $DataBackfillPlanId;

    /**
     * @var string 数据补录计划名称
     */
    public $DataBackfillPlanName;

    /**
     * @var array 补录任务集合
     */
    public $TaskIds;

    /**
     * @var array 补录任务的数据配置列表
     */
    public $DataBackfillRangeList;

    /**
     * @var string 检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckParentType;

    /**
     * @var boolean 补录是否忽略事件依赖	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkipEventListening;

    /**
     * @var integer 自定义实例运行并发度, 返回为null或者不返回，则表示任务原有自依赖
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedefineParallelNum;

    /**
     * @var string 自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedefineSelfWorkflowDependency;

    /**
     * @var string 调度资源组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerResourceGroupId;

    /**
     * @var string 集成资源组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntegrationResourceGroupId;

    /**
     * @var string 补录自定义的生成周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedefineCycleType;

    /**
     * @var array 自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedefineParamList;

    /**
     * @var string 补录任务的执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 补录任务的执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 创建用户id
     */
    public $CreateUserUin;

    /**
     * @var integer 补录计划实例完成百分数
     */
    public $CompletePercent;

    /**
     * @var integer 补录计划实例成功百分数
     */
    public $SuccessPercent;

    /**
     * @var string 补录是实例数据时间顺序，生效必须满足2个条件:1. 必须同周期任务2. 优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行 可选值- NORMAL: 不设置- ORDER: 顺序- REVERSE: 逆序不设置默认为NORMAL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataTimeOrder;

    /**
     * @param string $ProjectId 项目Id
     * @param string $DataBackfillPlanId 数据补录计划id
     * @param string $DataBackfillPlanName 数据补录计划名称
     * @param array $TaskIds 补录任务集合
     * @param array $DataBackfillRangeList 补录任务的数据配置列表
     * @param string $CheckParentType 检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SkipEventListening 补录是否忽略事件依赖	
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RedefineParallelNum 自定义实例运行并发度, 返回为null或者不返回，则表示任务原有自依赖
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedefineSelfWorkflowDependency 自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerResourceGroupId 调度资源组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntegrationResourceGroupId 集成资源组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedefineCycleType 补录自定义的生成周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RedefineParamList 自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 补录任务的执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 补录任务的执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建用户id
     * @param integer $CompletePercent 补录计划实例完成百分数
     * @param integer $SuccessPercent 补录计划实例成功百分数
     * @param string $DataTimeOrder 补录是实例数据时间顺序，生效必须满足2个条件:1. 必须同周期任务2. 优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行 可选值- NORMAL: 不设置- ORDER: 顺序- REVERSE: 逆序不设置默认为NORMAL
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DataBackfillPlanId",$param) and $param["DataBackfillPlanId"] !== null) {
            $this->DataBackfillPlanId = $param["DataBackfillPlanId"];
        }

        if (array_key_exists("DataBackfillPlanName",$param) and $param["DataBackfillPlanName"] !== null) {
            $this->DataBackfillPlanName = $param["DataBackfillPlanName"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("DataBackfillRangeList",$param) and $param["DataBackfillRangeList"] !== null) {
            $this->DataBackfillRangeList = [];
            foreach ($param["DataBackfillRangeList"] as $key => $value){
                $obj = new DataBackfillRange();
                $obj->deserialize($value);
                array_push($this->DataBackfillRangeList, $obj);
            }
        }

        if (array_key_exists("CheckParentType",$param) and $param["CheckParentType"] !== null) {
            $this->CheckParentType = $param["CheckParentType"];
        }

        if (array_key_exists("SkipEventListening",$param) and $param["SkipEventListening"] !== null) {
            $this->SkipEventListening = $param["SkipEventListening"];
        }

        if (array_key_exists("RedefineParallelNum",$param) and $param["RedefineParallelNum"] !== null) {
            $this->RedefineParallelNum = $param["RedefineParallelNum"];
        }

        if (array_key_exists("RedefineSelfWorkflowDependency",$param) and $param["RedefineSelfWorkflowDependency"] !== null) {
            $this->RedefineSelfWorkflowDependency = $param["RedefineSelfWorkflowDependency"];
        }

        if (array_key_exists("SchedulerResourceGroupId",$param) and $param["SchedulerResourceGroupId"] !== null) {
            $this->SchedulerResourceGroupId = $param["SchedulerResourceGroupId"];
        }

        if (array_key_exists("IntegrationResourceGroupId",$param) and $param["IntegrationResourceGroupId"] !== null) {
            $this->IntegrationResourceGroupId = $param["IntegrationResourceGroupId"];
        }

        if (array_key_exists("RedefineCycleType",$param) and $param["RedefineCycleType"] !== null) {
            $this->RedefineCycleType = $param["RedefineCycleType"];
        }

        if (array_key_exists("RedefineParamList",$param) and $param["RedefineParamList"] !== null) {
            $this->RedefineParamList = [];
            foreach ($param["RedefineParamList"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->RedefineParamList, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("CompletePercent",$param) and $param["CompletePercent"] !== null) {
            $this->CompletePercent = $param["CompletePercent"];
        }

        if (array_key_exists("SuccessPercent",$param) and $param["SuccessPercent"] !== null) {
            $this->SuccessPercent = $param["SuccessPercent"];
        }

        if (array_key_exists("DataTimeOrder",$param) and $param["DataTimeOrder"] !== null) {
            $this->DataTimeOrder = $param["DataTimeOrder"];
        }
    }
}
