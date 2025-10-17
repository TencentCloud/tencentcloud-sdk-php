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
 * DescribeScheduleInstances请求参数结构体
 *
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method array getInstances() 获取【已废弃参数，新用户接入无需关注】
实例列表过滤条件
 * @method void setInstances(array $Instances) 设置【已废弃参数，新用户接入无需关注】
实例列表过滤条件
 * @method boolean getCheckFather() 获取【已废弃参数，新用户接入无需关注】
检查父任务类型,  true: 检查父任务类型;  false: 不检查父任务类型
 * @method void setCheckFather(boolean $CheckFather) 设置【已废弃参数，新用户接入无需关注】
检查父任务类型,  true: 检查父任务类型;  false: 不检查父任务类型
 * @method string getRerunType() 获取【已废弃参数，新用户接入无需关注】
重跑类型, 1: 仅重跑当前实例; 2: 重跑当前实例及其子实例; 3: 仅重跑子实例
 * @method void setRerunType(string $RerunType) 设置【已废弃参数，新用户接入无需关注】
重跑类型, 1: 仅重跑当前实例; 2: 重跑当前实例及其子实例; 3: 仅重跑子实例
 * @method string getDependentWay() 获取【已废弃参数，新用户接入无需关注】
实例依赖方式, 1: 任务自依赖; 2: 任务上游依赖; 3: 自依赖及其上游依赖 
 * @method void setDependentWay(string $DependentWay) 设置【已废弃参数，新用户接入无需关注】
实例依赖方式, 1: 任务自依赖; 2: 任务上游依赖; 3: 自依赖及其上游依赖 
 * @method boolean getSkipEventListening() 获取【已废弃参数，新用户接入无需关注】
重跑时是否忽略事件监听
 * @method void setSkipEventListening(boolean $SkipEventListening) 设置【已废弃参数，新用户接入无需关注】
重跑时是否忽略事件监听
 * @method string getSonInstanceType() 获取【已废弃参数，新用户接入无需关注】
下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
 * @method void setSonInstanceType(string $SonInstanceType) 设置【已废弃参数，新用户接入无需关注】
下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
 * @method InstanceApiOpsRequest getSearchCondition() 获取查询条件
 * @method void setSearchCondition(InstanceApiOpsRequest $SearchCondition) 设置查询条件
 * @method string getOptType() 获取【已废弃参数，新用户接入无需关注】
访问类型
 * @method void setOptType(string $OptType) 设置【已废弃参数，新用户接入无需关注】
访问类型
 * @method string getOperatorName() 获取【已废弃参数，新用户接入无需关注】
操作者名称
 * @method void setOperatorName(string $OperatorName) 设置【已废弃参数，新用户接入无需关注】
操作者名称
 * @method string getOperatorId() 获取【已废弃参数，新用户接入无需关注】
操作者id
 * @method void setOperatorId(string $OperatorId) 设置【已废弃参数，新用户接入无需关注】
操作者id
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getProjectIdent() 获取【必要参数】
项目ID
 * @method void setProjectIdent(string $ProjectIdent) 设置【必要参数】
项目ID
 * @method string getProjectName() 获取【已废弃参数，新用户接入无需关注】
项目名称
 * @method void setProjectName(string $ProjectName) 设置【已废弃参数，新用户接入无需关注】
项目名称
 * @method integer getPageIndex() 获取【必要参数】
分页查询开始页页码，默认值为 1
 * @method void setPageIndex(integer $PageIndex) 设置【必要参数】
分页查询开始页页码，默认值为 1
 * @method integer getPageSize() 获取【必要参数】
分页查询每页返回的结果行数，默认值为 10
 * @method void setPageSize(integer $PageSize) 设置【必要参数】
分页查询每页返回的结果行数，默认值为 10
 * @method integer getCount() 获取【已废弃参数，新用户接入无需关注】
数据总数
 * @method void setCount(integer $Count) 设置【已废弃参数，新用户接入无需关注】
数据总数
 * @method ProjectBaseInfoOpsRequest getRequestBaseInfo() 获取【已废弃参数，新用户接入无需关注】
基础请求信息
 * @method void setRequestBaseInfo(ProjectBaseInfoOpsRequest $RequestBaseInfo) 设置【已废弃参数，新用户接入无需关注】
基础请求信息
 * @method boolean getIsCount() 获取【已废弃参数，新用户接入无需关注】
是否计算总数
 * @method void setIsCount(boolean $IsCount) 设置【已废弃参数，新用户接入无需关注】
是否计算总数
 * @method array getProjectIds() 获取【已废弃参数，新用户接入无需关注】
项目ID列表，用于多项目实例列表筛选，请注意，该字段传入时 ProjectId 字段也必须传，且传入的 ProjectIds 中的项目ID必须是当前用户有权限的项目ID，否则会由于权限校验失败报错
 * @method void setProjectIds(array $ProjectIds) 设置【已废弃参数，新用户接入无需关注】
项目ID列表，用于多项目实例列表筛选，请注意，该字段传入时 ProjectId 字段也必须传，且传入的 ProjectIds 中的项目ID必须是当前用户有权限的项目ID，否则会由于权限校验失败报错
 */
class DescribeScheduleInstancesRequest extends AbstractModel
{
    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var array 【已废弃参数，新用户接入无需关注】
实例列表过滤条件
     */
    public $Instances;

    /**
     * @var boolean 【已废弃参数，新用户接入无需关注】
检查父任务类型,  true: 检查父任务类型;  false: 不检查父任务类型
     */
    public $CheckFather;

    /**
     * @var string 【已废弃参数，新用户接入无需关注】
重跑类型, 1: 仅重跑当前实例; 2: 重跑当前实例及其子实例; 3: 仅重跑子实例
     */
    public $RerunType;

    /**
     * @var string 【已废弃参数，新用户接入无需关注】
实例依赖方式, 1: 任务自依赖; 2: 任务上游依赖; 3: 自依赖及其上游依赖 
     */
    public $DependentWay;

    /**
     * @var boolean 【已废弃参数，新用户接入无需关注】
重跑时是否忽略事件监听
     */
    public $SkipEventListening;

    /**
     * @var string 【已废弃参数，新用户接入无需关注】
下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
     */
    public $SonInstanceType;

    /**
     * @var InstanceApiOpsRequest 查询条件
     */
    public $SearchCondition;

    /**
     * @var string 【已废弃参数，新用户接入无需关注】
访问类型
     */
    public $OptType;

    /**
     * @var string 【已废弃参数，新用户接入无需关注】
操作者名称
     */
    public $OperatorName;

    /**
     * @var string 【已废弃参数，新用户接入无需关注】
操作者id
     */
    public $OperatorId;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 【必要参数】
项目ID
     */
    public $ProjectIdent;

    /**
     * @var string 【已废弃参数，新用户接入无需关注】
项目名称
     */
    public $ProjectName;

    /**
     * @var integer 【必要参数】
分页查询开始页页码，默认值为 1
     */
    public $PageIndex;

    /**
     * @var integer 【必要参数】
分页查询每页返回的结果行数，默认值为 10
     */
    public $PageSize;

    /**
     * @var integer 【已废弃参数，新用户接入无需关注】
数据总数
     */
    public $Count;

    /**
     * @var ProjectBaseInfoOpsRequest 【已废弃参数，新用户接入无需关注】
基础请求信息
     */
    public $RequestBaseInfo;

    /**
     * @var boolean 【已废弃参数，新用户接入无需关注】
是否计算总数
     */
    public $IsCount;

    /**
     * @var array 【已废弃参数，新用户接入无需关注】
项目ID列表，用于多项目实例列表筛选，请注意，该字段传入时 ProjectId 字段也必须传，且传入的 ProjectIds 中的项目ID必须是当前用户有权限的项目ID，否则会由于权限校验失败报错
     */
    public $ProjectIds;

    /**
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param array $Instances 【已废弃参数，新用户接入无需关注】
实例列表过滤条件
     * @param boolean $CheckFather 【已废弃参数，新用户接入无需关注】
检查父任务类型,  true: 检查父任务类型;  false: 不检查父任务类型
     * @param string $RerunType 【已废弃参数，新用户接入无需关注】
重跑类型, 1: 仅重跑当前实例; 2: 重跑当前实例及其子实例; 3: 仅重跑子实例
     * @param string $DependentWay 【已废弃参数，新用户接入无需关注】
实例依赖方式, 1: 任务自依赖; 2: 任务上游依赖; 3: 自依赖及其上游依赖 
     * @param boolean $SkipEventListening 【已废弃参数，新用户接入无需关注】
重跑时是否忽略事件监听
     * @param string $SonInstanceType 【已废弃参数，新用户接入无需关注】
下游实例范围 1: 所在工作流 2: 所在项目 3: 所有跨工作流依赖的项目
     * @param InstanceApiOpsRequest $SearchCondition 查询条件
     * @param string $OptType 【已废弃参数，新用户接入无需关注】
访问类型
     * @param string $OperatorName 【已废弃参数，新用户接入无需关注】
操作者名称
     * @param string $OperatorId 【已废弃参数，新用户接入无需关注】
操作者id
     * @param string $ProjectId 项目ID
     * @param string $ProjectIdent 【必要参数】
项目ID
     * @param string $ProjectName 【已废弃参数，新用户接入无需关注】
项目名称
     * @param integer $PageIndex 【必要参数】
分页查询开始页页码，默认值为 1
     * @param integer $PageSize 【必要参数】
分页查询每页返回的结果行数，默认值为 10
     * @param integer $Count 【已废弃参数，新用户接入无需关注】
数据总数
     * @param ProjectBaseInfoOpsRequest $RequestBaseInfo 【已废弃参数，新用户接入无需关注】
基础请求信息
     * @param boolean $IsCount 【已废弃参数，新用户接入无需关注】
是否计算总数
     * @param array $ProjectIds 【已废弃参数，新用户接入无需关注】
项目ID列表，用于多项目实例列表筛选，请注意，该字段传入时 ProjectId 字段也必须传，且传入的 ProjectIds 中的项目ID必须是当前用户有权限的项目ID，否则会由于权限校验失败报错
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
        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
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

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }
    }
}
