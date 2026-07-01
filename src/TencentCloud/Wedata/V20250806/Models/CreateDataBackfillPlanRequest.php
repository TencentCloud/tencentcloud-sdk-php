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
 * @method string getProjectId() 获取<p>所属项目Id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>所属项目Id</p>
 * @method array getTaskIds() 获取<p>补录任务集合</p>
 * @method void setTaskIds(array $TaskIds) 设置<p>补录任务集合</p>
 * @method array getDataBackfillRangeList() 获取<p>补录任务的数据时间配置</p>
 * @method void setDataBackfillRangeList(array $DataBackfillRangeList) 设置<p>补录任务的数据时间配置</p>
 * @method string getTimeZone() 获取<p>时区，默认UTC+8</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>时区，默认UTC+8</p>
 * @method string getDataBackfillPlanName() 获取<p>数据补录计划名称，不填则由系统随机生成一串字符</p>
 * @method void setDataBackfillPlanName(string $DataBackfillPlanName) 设置<p>数据补录计划名称，不填则由系统随机生成一串字符</p>
 * @method string getCheckParentType() 获取<p>检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查,默认NONE不检查</p>
 * @method void setCheckParentType(string $CheckParentType) 设置<p>检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查,默认NONE不检查</p>
 * @method boolean getSkipEventListening() 获取<p>补录是否忽略事件依赖,默认true</p>
 * @method void setSkipEventListening(boolean $SkipEventListening) 设置<p>补录是否忽略事件依赖,默认true</p>
 * @method string getRedefineSelfWorkflowDependency() 获取<p>自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖</p>
 * @method void setRedefineSelfWorkflowDependency(string $RedefineSelfWorkflowDependency) 设置<p>自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖</p>
 * @method integer getRedefineParallelNum() 获取<p>自定义实例运行并发度, 如果不配置，则使用任务原有自依赖</p>
 * @method void setRedefineParallelNum(integer $RedefineParallelNum) 设置<p>自定义实例运行并发度, 如果不配置，则使用任务原有自依赖</p>
 * @method string getSchedulerResourceGroupId() 获取<p>调度资源组id，为空则表示使用任务原有调度执行资源组</p>
 * @method void setSchedulerResourceGroupId(string $SchedulerResourceGroupId) 设置<p>调度资源组id，为空则表示使用任务原有调度执行资源组</p>
 * @method string getIntegrationResourceGroupId() 获取<p>集成任务资源组id，为空则表示使用任务原有调度执行资源组</p>
 * @method void setIntegrationResourceGroupId(string $IntegrationResourceGroupId) 设置<p>集成任务资源组id，为空则表示使用任务原有调度执行资源组</p>
 * @method array getRedefineParamList() 获取<p>自定义参数，可以重新指定任务的参数，方便补录实例执行新的逻辑</p>
 * @method void setRedefineParamList(array $RedefineParamList) 设置<p>自定义参数，可以重新指定任务的参数，方便补录实例执行新的逻辑</p>
 * @method string getDataTimeOrder() 获取<p>补录是实例数据时间顺序，生效必须满足2个条件:</p><ol><li>必须同周期任务</li><li>优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行</li></ol><p>可选值</p><ul><li>NORMAL: 不设置</li><li>ORDER: 顺序</li><li>REVERSE: 逆序<br>不设置默认为NORMAL</li></ul>
 * @method void setDataTimeOrder(string $DataTimeOrder) 设置<p>补录是实例数据时间顺序，生效必须满足2个条件:</p><ol><li>必须同周期任务</li><li>优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行</li></ol><p>可选值</p><ul><li>NORMAL: 不设置</li><li>ORDER: 顺序</li><li>REVERSE: 逆序<br>不设置默认为NORMAL</li></ul>
 * @method string getRedefineCycleType() 获取<p>补录实例重新生成周期，如果设置会重新指定补录任务实例的生成周期，目前只会将天实例转换成每月1号生成的实例</p><ul><li>MONTH_CYCLE: 月</li></ul>
 * @method void setRedefineCycleType(string $RedefineCycleType) 设置<p>补录实例重新生成周期，如果设置会重新指定补录任务实例的生成周期，目前只会将天实例转换成每月1号生成的实例</p><ul><li>MONTH_CYCLE: 月</li></ul>
 * @method array getComputeConfigMappings() 获取<p>存算配置映射列表，对应页面“存算引擎配置”</p>
 * @method void setComputeConfigMappings(array $ComputeConfigMappings) 设置<p>存算配置映射列表，对应页面“存算引擎配置”</p>
 */
class CreateDataBackfillPlanRequest extends AbstractModel
{
    /**
     * @var string <p>所属项目Id</p>
     */
    public $ProjectId;

    /**
     * @var array <p>补录任务集合</p>
     */
    public $TaskIds;

    /**
     * @var array <p>补录任务的数据时间配置</p>
     */
    public $DataBackfillRangeList;

    /**
     * @var string <p>时区，默认UTC+8</p>
     */
    public $TimeZone;

    /**
     * @var string <p>数据补录计划名称，不填则由系统随机生成一串字符</p>
     */
    public $DataBackfillPlanName;

    /**
     * @var string <p>检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查,默认NONE不检查</p>
     */
    public $CheckParentType;

    /**
     * @var boolean <p>补录是否忽略事件依赖,默认true</p>
     */
    public $SkipEventListening;

    /**
     * @var string <p>自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖</p>
     */
    public $RedefineSelfWorkflowDependency;

    /**
     * @var integer <p>自定义实例运行并发度, 如果不配置，则使用任务原有自依赖</p>
     */
    public $RedefineParallelNum;

    /**
     * @var string <p>调度资源组id，为空则表示使用任务原有调度执行资源组</p>
     */
    public $SchedulerResourceGroupId;

    /**
     * @var string <p>集成任务资源组id，为空则表示使用任务原有调度执行资源组</p>
     */
    public $IntegrationResourceGroupId;

    /**
     * @var array <p>自定义参数，可以重新指定任务的参数，方便补录实例执行新的逻辑</p>
     */
    public $RedefineParamList;

    /**
     * @var string <p>补录是实例数据时间顺序，生效必须满足2个条件:</p><ol><li>必须同周期任务</li><li>优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行</li></ol><p>可选值</p><ul><li>NORMAL: 不设置</li><li>ORDER: 顺序</li><li>REVERSE: 逆序<br>不设置默认为NORMAL</li></ul>
     */
    public $DataTimeOrder;

    /**
     * @var string <p>补录实例重新生成周期，如果设置会重新指定补录任务实例的生成周期，目前只会将天实例转换成每月1号生成的实例</p><ul><li>MONTH_CYCLE: 月</li></ul>
     */
    public $RedefineCycleType;

    /**
     * @var array <p>存算配置映射列表，对应页面“存算引擎配置”</p>
     */
    public $ComputeConfigMappings;

    /**
     * @param string $ProjectId <p>所属项目Id</p>
     * @param array $TaskIds <p>补录任务集合</p>
     * @param array $DataBackfillRangeList <p>补录任务的数据时间配置</p>
     * @param string $TimeZone <p>时区，默认UTC+8</p>
     * @param string $DataBackfillPlanName <p>数据补录计划名称，不填则由系统随机生成一串字符</p>
     * @param string $CheckParentType <p>检查父任务类型，取值范围：- NONE-全部不检查- ALL-检查全部上游父任务- MAKE_SCOPE-只在（当前补录计划）选中任务中检查,默认NONE不检查</p>
     * @param boolean $SkipEventListening <p>补录是否忽略事件依赖,默认true</p>
     * @param string $RedefineSelfWorkflowDependency <p>自定义的工作流自依赖，yes或者no；如果不配置，则使用工作流原有自依赖</p>
     * @param integer $RedefineParallelNum <p>自定义实例运行并发度, 如果不配置，则使用任务原有自依赖</p>
     * @param string $SchedulerResourceGroupId <p>调度资源组id，为空则表示使用任务原有调度执行资源组</p>
     * @param string $IntegrationResourceGroupId <p>集成任务资源组id，为空则表示使用任务原有调度执行资源组</p>
     * @param array $RedefineParamList <p>自定义参数，可以重新指定任务的参数，方便补录实例执行新的逻辑</p>
     * @param string $DataTimeOrder <p>补录是实例数据时间顺序，生效必须满足2个条件:</p><ol><li>必须同周期任务</li><li>优先按依赖关系执行，无依赖关系影响的情况下按配置执行顺序执行</li></ol><p>可选值</p><ul><li>NORMAL: 不设置</li><li>ORDER: 顺序</li><li>REVERSE: 逆序<br>不设置默认为NORMAL</li></ul>
     * @param string $RedefineCycleType <p>补录实例重新生成周期，如果设置会重新指定补录任务实例的生成周期，目前只会将天实例转换成每月1号生成的实例</p><ul><li>MONTH_CYCLE: 月</li></ul>
     * @param array $ComputeConfigMappings <p>存算配置映射列表，对应页面“存算引擎配置”</p>
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

        if (array_key_exists("ComputeConfigMappings",$param) and $param["ComputeConfigMappings"] !== null) {
            $this->ComputeConfigMappings = [];
            foreach ($param["ComputeConfigMappings"] as $key => $value){
                $obj = new ComputeConfigMapping();
                $obj->deserialize($value);
                array_push($this->ComputeConfigMappings, $obj);
            }
        }
    }
}
