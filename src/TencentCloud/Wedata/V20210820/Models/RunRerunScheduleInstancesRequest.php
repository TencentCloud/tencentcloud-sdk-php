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
 * RunRerunScheduleInstances请求参数结构体
 *
 * @method array getInstances() 获取实例列表
 * @method void setInstances(array $Instances) 设置实例列表
 * @method boolean getCheckFather() 获取检查父任务类型, true: 检查父任务; false: 不检查父任务 
 * @method void setCheckFather(boolean $CheckFather) 设置检查父任务类型, true: 检查父任务; false: 不检查父任务 
 * @method string getRerunType() 获取重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子 
 * @method void setRerunType(string $RerunType) 设置重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子 
 * @method string getDependentWay() 获取实例依赖方式, 1: 自依赖; 2: 任务依赖; 3: 自依赖及父子依赖 
 * @method void setDependentWay(string $DependentWay) 设置实例依赖方式, 1: 自依赖; 2: 任务依赖; 3: 自依赖及父子依赖 
 * @method boolean getSkipEventListening() 获取重跑忽略事件监听与否 
 * @method void setSkipEventListening(boolean $SkipEventListening) 设置重跑忽略事件监听与否 
 * @method string getSonInstanceType() 获取下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
 * @method void setSonInstanceType(string $SonInstanceType) 设置下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
 * @method InstanceApiOpsRequest getSearchCondition() 获取查询条件
 * @method void setSearchCondition(InstanceApiOpsRequest $SearchCondition) 设置查询条件
 * @method string getOptType() 获取访问类型
 * @method void setOptType(string $OptType) 设置访问类型
 * @method string getOperatorName() 获取操作者名称
 * @method void setOperatorName(string $OperatorName) 设置操作者名称
 * @method string getOperatorId() 获取操作者id
 * @method void setOperatorId(string $OperatorId) 设置操作者id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getProjectIdent() 获取项目标志
 * @method void setProjectIdent(string $ProjectIdent) 设置项目标志
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method integer getPageIndex() 获取索引页码
 * @method void setPageIndex(integer $PageIndex) 设置索引页码
 * @method integer getPageSize() 获取页面大小
 * @method void setPageSize(integer $PageSize) 设置页面大小
 * @method integer getCount() 获取数据总数
 * @method void setCount(integer $Count) 设置数据总数
 * @method ProjectBaseInfoOpsRequest getRequestBaseInfo() 获取基础请求信息
 * @method void setRequestBaseInfo(ProjectBaseInfoOpsRequest $RequestBaseInfo) 设置基础请求信息
 * @method boolean getIsCount() 获取是否计算总数
 * @method void setIsCount(boolean $IsCount) 设置是否计算总数
 * @method boolean getAsyncMode() 获取是否异步模式
 * @method void setAsyncMode(boolean $AsyncMode) 设置是否异步模式
 * @method string getCheckParentType() 获取是否检查上游任务： ALL（全部）、 MAKE_SCOPE（选中）、NONE （全部不检查）
 * @method void setCheckParentType(string $CheckParentType) 设置是否检查上游任务： ALL（全部）、 MAKE_SCOPE（选中）、NONE （全部不检查）
 * @method boolean getSameSelfDependType() 获取任务原有自依赖配置 true（是）、false（否）
 * @method void setSameSelfDependType(boolean $SameSelfDependType) 设置任务原有自依赖配置 true（是）、false（否）
 * @method integer getParallelNum() 获取实例运行并发度
 * @method void setParallelNum(integer $ParallelNum) 设置实例运行并发度
 * @method boolean getSameSelfWorkflowDependType() 获取任务原有自依赖配置 true（是）、false（否）
 * @method void setSameSelfWorkflowDependType(boolean $SameSelfWorkflowDependType) 设置任务原有自依赖配置 true（是）、false（否）
 * @method string getSelfWorkflowDependency() 获取代表重新指定 的  是 或者 否  yes、 no
 * @method void setSelfWorkflowDependency(string $SelfWorkflowDependency) 设置代表重新指定 的  是 或者 否  yes、 no
 * @method integer getDataTimeOrder() 获取运行实例数据时间排序 0---正常  1--正序  2 – 逆序
 * @method void setDataTimeOrder(integer $DataTimeOrder) 设置运行实例数据时间排序 0---正常  1--正序  2 – 逆序
 * @method string getReDoParams() 获取重跑参数
 * @method void setReDoParams(string $ReDoParams) 设置重跑参数
 */
class RunRerunScheduleInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例列表
     */
    public $Instances;

    /**
     * @var boolean 检查父任务类型, true: 检查父任务; false: 不检查父任务 
     */
    public $CheckFather;

    /**
     * @var string 重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子 
     */
    public $RerunType;

    /**
     * @var string 实例依赖方式, 1: 自依赖; 2: 任务依赖; 3: 自依赖及父子依赖 
     */
    public $DependentWay;

    /**
     * @var boolean 重跑忽略事件监听与否 
     */
    public $SkipEventListening;

    /**
     * @var string 下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
     */
    public $SonInstanceType;

    /**
     * @var InstanceApiOpsRequest 查询条件
     */
    public $SearchCondition;

    /**
     * @var string 访问类型
     */
    public $OptType;

    /**
     * @var string 操作者名称
     */
    public $OperatorName;

    /**
     * @var string 操作者id
     */
    public $OperatorId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 项目标志
     */
    public $ProjectIdent;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var integer 索引页码
     */
    public $PageIndex;

    /**
     * @var integer 页面大小
     */
    public $PageSize;

    /**
     * @var integer 数据总数
     */
    public $Count;

    /**
     * @var ProjectBaseInfoOpsRequest 基础请求信息
     */
    public $RequestBaseInfo;

    /**
     * @var boolean 是否计算总数
     */
    public $IsCount;

    /**
     * @var boolean 是否异步模式
     */
    public $AsyncMode;

    /**
     * @var string 是否检查上游任务： ALL（全部）、 MAKE_SCOPE（选中）、NONE （全部不检查）
     */
    public $CheckParentType;

    /**
     * @var boolean 任务原有自依赖配置 true（是）、false（否）
     */
    public $SameSelfDependType;

    /**
     * @var integer 实例运行并发度
     */
    public $ParallelNum;

    /**
     * @var boolean 任务原有自依赖配置 true（是）、false（否）
     */
    public $SameSelfWorkflowDependType;

    /**
     * @var string 代表重新指定 的  是 或者 否  yes、 no
     */
    public $SelfWorkflowDependency;

    /**
     * @var integer 运行实例数据时间排序 0---正常  1--正序  2 – 逆序
     */
    public $DataTimeOrder;

    /**
     * @var string 重跑参数
     */
    public $ReDoParams;

    /**
     * @param array $Instances 实例列表
     * @param boolean $CheckFather 检查父任务类型, true: 检查父任务; false: 不检查父任务 
     * @param string $RerunType 重跑类型, 1: 自身; 3: 孩子; 2: 自身以及孩子 
     * @param string $DependentWay 实例依赖方式, 1: 自依赖; 2: 任务依赖; 3: 自依赖及父子依赖 
     * @param boolean $SkipEventListening 重跑忽略事件监听与否 
     * @param string $SonInstanceType 下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
     * @param InstanceApiOpsRequest $SearchCondition 查询条件
     * @param string $OptType 访问类型
     * @param string $OperatorName 操作者名称
     * @param string $OperatorId 操作者id
     * @param string $ProjectId 项目id
     * @param string $ProjectIdent 项目标志
     * @param string $ProjectName 项目名称
     * @param integer $PageIndex 索引页码
     * @param integer $PageSize 页面大小
     * @param integer $Count 数据总数
     * @param ProjectBaseInfoOpsRequest $RequestBaseInfo 基础请求信息
     * @param boolean $IsCount 是否计算总数
     * @param boolean $AsyncMode 是否异步模式
     * @param string $CheckParentType 是否检查上游任务： ALL（全部）、 MAKE_SCOPE（选中）、NONE （全部不检查）
     * @param boolean $SameSelfDependType 任务原有自依赖配置 true（是）、false（否）
     * @param integer $ParallelNum 实例运行并发度
     * @param boolean $SameSelfWorkflowDependType 任务原有自依赖配置 true（是）、false（否）
     * @param string $SelfWorkflowDependency 代表重新指定 的  是 或者 否  yes、 no
     * @param integer $DataTimeOrder 运行实例数据时间排序 0---正常  1--正序  2 – 逆序
     * @param string $ReDoParams 重跑参数
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
        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new InstanceOpsDto();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("CheckFather",$param) and $param["CheckFather"] !== null) {
            $this->CheckFather = $param["CheckFather"];
        }

        if (array_key_exists("RerunType",$param) and $param["RerunType"] !== null) {
            $this->RerunType = $param["RerunType"];
        }

        if (array_key_exists("DependentWay",$param) and $param["DependentWay"] !== null) {
            $this->DependentWay = $param["DependentWay"];
        }

        if (array_key_exists("SkipEventListening",$param) and $param["SkipEventListening"] !== null) {
            $this->SkipEventListening = $param["SkipEventListening"];
        }

        if (array_key_exists("SonInstanceType",$param) and $param["SonInstanceType"] !== null) {
            $this->SonInstanceType = $param["SonInstanceType"];
        }

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new InstanceApiOpsRequest();
            $this->SearchCondition->deserialize($param["SearchCondition"]);
        }

        if (array_key_exists("OptType",$param) and $param["OptType"] !== null) {
            $this->OptType = $param["OptType"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("OperatorId",$param) and $param["OperatorId"] !== null) {
            $this->OperatorId = $param["OperatorId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("RequestBaseInfo",$param) and $param["RequestBaseInfo"] !== null) {
            $this->RequestBaseInfo = new ProjectBaseInfoOpsRequest();
            $this->RequestBaseInfo->deserialize($param["RequestBaseInfo"]);
        }

        if (array_key_exists("IsCount",$param) and $param["IsCount"] !== null) {
            $this->IsCount = $param["IsCount"];
        }

        if (array_key_exists("AsyncMode",$param) and $param["AsyncMode"] !== null) {
            $this->AsyncMode = $param["AsyncMode"];
        }

        if (array_key_exists("CheckParentType",$param) and $param["CheckParentType"] !== null) {
            $this->CheckParentType = $param["CheckParentType"];
        }

        if (array_key_exists("SameSelfDependType",$param) and $param["SameSelfDependType"] !== null) {
            $this->SameSelfDependType = $param["SameSelfDependType"];
        }

        if (array_key_exists("ParallelNum",$param) and $param["ParallelNum"] !== null) {
            $this->ParallelNum = $param["ParallelNum"];
        }

        if (array_key_exists("SameSelfWorkflowDependType",$param) and $param["SameSelfWorkflowDependType"] !== null) {
            $this->SameSelfWorkflowDependType = $param["SameSelfWorkflowDependType"];
        }

        if (array_key_exists("SelfWorkflowDependency",$param) and $param["SelfWorkflowDependency"] !== null) {
            $this->SelfWorkflowDependency = $param["SelfWorkflowDependency"];
        }

        if (array_key_exists("DataTimeOrder",$param) and $param["DataTimeOrder"] !== null) {
            $this->DataTimeOrder = $param["DataTimeOrder"];
        }

        if (array_key_exists("ReDoParams",$param) and $param["ReDoParams"] !== null) {
            $this->ReDoParams = $param["ReDoParams"];
        }
    }
}
