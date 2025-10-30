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
 * CreateDataBackfillPlan请求参数结构体
 *
 * @method string getProjectId() 获取所属项目Id
 * @method void setProjectId(string $ProjectId) 设置所属项目Id
 * @method array getTaskIds() 获取补录任务集合
 * @method void setTaskIds(array $TaskIds) 设置补录任务集合
 * @method array getDataBackfillRangeList() 获取补录任务的数据时间配置
 * @method void setDataBackfillRangeList(array $DataBackfillRangeList) 设置补录任务的数据时间配置
 * @method string getTimeZone() 获取时区，默认UTC+8
 * @method void setTimeZone(string $TimeZone) 设置时区，默认UTC+8
 * @method string getDataBackfillPlanName() 获取数据补录计划名称，不填则由系统随机生成一串字符
 * @method void setDataBackfillPlanName(string $DataBackfillPlanName) 设置数据补录计划名称，不填则由系统随机生成一串字符
 * @method string getCheckParentType() 获取检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查,默认NONE不检查
 * @method void setCheckParentType(string $CheckParentType) 设置检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查,默认NONE不检查
 * @method boolean getSkipEventListening() 获取补录是否忽略事件依赖,默认true
 * @method void setSkipEventListening(boolean $SkipEventListening) 设置补录是否忽略事件依赖,默认true
 * @method string getRedefineSelfWorkflowDependency() 获取自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖
 * @method void setRedefineSelfWorkflowDependency(string $RedefineSelfWorkflowDependency) 设置自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖
 * @method integer getRedefineParallelNum() 获取自定义实例运行并发度, 如果不配置，则使用任务原有自依赖
 * @method void setRedefineParallelNum(integer $RedefineParallelNum) 设置自定义实例运行并发度, 如果不配置，则使用任务原有自依赖
 * @method string getSchedulerResourceGroupId() 获取调度资源组id，为空则表示使用任务原有调度执行资源组
 * @method void setSchedulerResourceGroupId(string $SchedulerResourceGroupId) 设置调度资源组id，为空则表示使用任务原有调度执行资源组
 * @method string getIntegrationResourceGroupId() 获取集成任务资源组id，为空则表示使用任务原有调度执行资源组
 * @method void setIntegrationResourceGroupId(string $IntegrationResourceGroupId) 设置集成任务资源组id，为空则表示使用任务原有调度执行资源组
 * @method array getRedefineParamList() 获取自定义参数，可以重新指定任务的参数，方便补录实例执行新的逻辑
 * @method void setRedefineParamList(array $RedefineParamList) 设置自定义参数，可以重新指定任务的参数，方便补录实例执行新的逻辑
 * @method string getDataTimeOrder() 获取补录是实例数据时间顺序，生效必须满足2个条件:
1. 必须同周期任务
2. 优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行
 
可选值
- NORMAL: 不设置
- ORDER: 顺序
- REVERSE: 逆序
不设置默认为NORMAL
 * @method void setDataTimeOrder(string $DataTimeOrder) 设置补录是实例数据时间顺序，生效必须满足2个条件:
1. 必须同周期任务
2. 优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行
 
可选值
- NORMAL: 不设置
- ORDER: 顺序
- REVERSE: 逆序
不设置默认为NORMAL
 * @method string getRedefineCycleType() 获取补录实例重新生成周期，如果设置会重新指定补录任务实例的生成周期，目前只会将天实例转换成每月1号生成的实例
* MONTH_CYCLE: 月
 * @method void setRedefineCycleType(string $RedefineCycleType) 设置补录实例重新生成周期，如果设置会重新指定补录任务实例的生成周期，目前只会将天实例转换成每月1号生成的实例
* MONTH_CYCLE: 月
 */
class CreateDataBackfillPlanRequest extends AbstractModel
{
    /**
     * @var string 所属项目Id
     */
    public $ProjectId;

    /**
     * @var array 补录任务集合
     */
    public $TaskIds;

    /**
     * @var array 补录任务的数据时间配置
     */
    public $DataBackfillRangeList;

    /**
     * @var string 时区，默认UTC+8
     */
    public $TimeZone;

    /**
     * @var string 数据补录计划名称，不填则由系统随机生成一串字符
     */
    public $DataBackfillPlanName;

    /**
     * @var string 检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查,默认NONE不检查
     */
    public $CheckParentType;

    /**
     * @var boolean 补录是否忽略事件依赖,默认true
     */
    public $SkipEventListening;

    /**
     * @var string 自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖
     */
    public $RedefineSelfWorkflowDependency;

    /**
     * @var integer 自定义实例运行并发度, 如果不配置，则使用任务原有自依赖
     */
    public $RedefineParallelNum;

    /**
     * @var string 调度资源组id，为空则表示使用任务原有调度执行资源组
     */
    public $SchedulerResourceGroupId;

    /**
     * @var string 集成任务资源组id，为空则表示使用任务原有调度执行资源组
     */
    public $IntegrationResourceGroupId;

    /**
     * @var array 自定义参数，可以重新指定任务的参数，方便补录实例执行新的逻辑
     */
    public $RedefineParamList;

    /**
     * @var string 补录是实例数据时间顺序，生效必须满足2个条件:
1. 必须同周期任务
2. 优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行
 
可选值
- NORMAL: 不设置
- ORDER: 顺序
- REVERSE: 逆序
不设置默认为NORMAL
     */
    public $DataTimeOrder;

    /**
     * @var string 补录实例重新生成周期，如果设置会重新指定补录任务实例的生成周期，目前只会将天实例转换成每月1号生成的实例
* MONTH_CYCLE: 月
     */
    public $RedefineCycleType;

    /**
     * @param string $ProjectId 所属项目Id
     * @param array $TaskIds 补录任务集合
     * @param array $DataBackfillRangeList 补录任务的数据时间配置
     * @param string $TimeZone 时区，默认UTC+8
     * @param string $DataBackfillPlanName 数据补录计划名称，不填则由系统随机生成一串字符
     * @param string $CheckParentType 检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查,默认NONE不检查
     * @param boolean $SkipEventListening 补录是否忽略事件依赖,默认true
     * @param string $RedefineSelfWorkflowDependency 自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖
     * @param integer $RedefineParallelNum 自定义实例运行并发度, 如果不配置，则使用任务原有自依赖
     * @param string $SchedulerResourceGroupId 调度资源组id，为空则表示使用任务原有调度执行资源组
     * @param string $IntegrationResourceGroupId 集成任务资源组id，为空则表示使用任务原有调度执行资源组
     * @param array $RedefineParamList 自定义参数，可以重新指定任务的参数，方便补录实例执行新的逻辑
     * @param string $DataTimeOrder 补录是实例数据时间顺序，生效必须满足2个条件:
1. 必须同周期任务
2. 优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行
 
可选值
- NORMAL: 不设置
- ORDER: 顺序
- REVERSE: 逆序
不设置默认为NORMAL
     * @param string $RedefineCycleType 补录实例重新生成周期，如果设置会重新指定补录任务实例的生成周期，目前只会将天实例转换成每月1号生成的实例
* MONTH_CYCLE: 月
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

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("DataBackfillPlanName",$param) and $param["DataBackfillPlanName"] !== null) {
            $this->DataBackfillPlanName = $param["DataBackfillPlanName"];
        }

        if (array_key_exists("CheckParentType",$param) and $param["CheckParentType"] !== null) {
            $this->CheckParentType = $param["CheckParentType"];
        }

        if (array_key_exists("SkipEventListening",$param) and $param["SkipEventListening"] !== null) {
            $this->SkipEventListening = $param["SkipEventListening"];
        }

        if (array_key_exists("RedefineSelfWorkflowDependency",$param) and $param["RedefineSelfWorkflowDependency"] !== null) {
            $this->RedefineSelfWorkflowDependency = $param["RedefineSelfWorkflowDependency"];
        }

        if (array_key_exists("RedefineParallelNum",$param) and $param["RedefineParallelNum"] !== null) {
            $this->RedefineParallelNum = $param["RedefineParallelNum"];
        }

        if (array_key_exists("SchedulerResourceGroupId",$param) and $param["SchedulerResourceGroupId"] !== null) {
            $this->SchedulerResourceGroupId = $param["SchedulerResourceGroupId"];
        }

        if (array_key_exists("IntegrationResourceGroupId",$param) and $param["IntegrationResourceGroupId"] !== null) {
            $this->IntegrationResourceGroupId = $param["IntegrationResourceGroupId"];
        }

        if (array_key_exists("RedefineParamList",$param) and $param["RedefineParamList"] !== null) {
            $this->RedefineParamList = [];
            foreach ($param["RedefineParamList"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->RedefineParamList, $obj);
            }
        }

        if (array_key_exists("DataTimeOrder",$param) and $param["DataTimeOrder"] !== null) {
            $this->DataTimeOrder = $param["DataTimeOrder"];
        }

        if (array_key_exists("RedefineCycleType",$param) and $param["RedefineCycleType"] !== null) {
            $this->RedefineCycleType = $param["RedefineCycleType"];
        }
    }
}
