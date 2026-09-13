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
 * ListWorkflowRuns请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method integer getPageNumber() 获取<p>分页页码，从 1 开始。非必填，默认 1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>分页页码，从 1 开始。非必填，默认 1</p>
 * @method integer getPageSize() 获取<p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
 * @method string getWorkflowId() 获取<p>工作流ID，精确匹配。非必填，单值</p>
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID，精确匹配。非必填，单值</p>
 * @method string getWorkflowNameKeyword() 获取<p>工作流名称关键字，对 WorkflowName 做模糊匹配。非必填，单值</p>
 * @method void setWorkflowNameKeyword(string $WorkflowNameKeyword) 设置<p>工作流名称关键字，对 WorkflowName 做模糊匹配。非必填，单值</p>
 * @method string getCreateStartTime() 获取<p>运行创建时间下界，范围匹配（CreateTime &gt;= 本值），单位：毫秒时间戳。<br>非必填，单值，对应出参 WorkflowRun.CreateTime</p>
 * @method void setCreateStartTime(string $CreateStartTime) 设置<p>运行创建时间下界，范围匹配（CreateTime &gt;= 本值），单位：毫秒时间戳。<br>非必填，单值，对应出参 WorkflowRun.CreateTime</p>
 * @method string getCreateEndTime() 获取<p>运行创建时间上界，范围匹配（CreateTime &lt;= 本值），单位：毫秒时间戳。<br>非必填，单值，对应出参 WorkflowRun.CreateTime</p>
 * @method void setCreateEndTime(string $CreateEndTime) 设置<p>运行创建时间上界，范围匹配（CreateTime &lt;= 本值），单位：毫秒时间戳。<br>非必填，单值，对应出参 WorkflowRun.CreateTime</p>
 * @method array getRunStates() 获取<p>运行状态，精确匹配。非必填，多选（多个值之间为 OR 关系）。</p><p>可填 SUCCESS / FAILED 等，具体参考本接口出参 WorkflowRun.RunState 字段返回值。</p>
 * @method void setRunStates(array $RunStates) 设置<p>运行状态，精确匹配。非必填，多选（多个值之间为 OR 关系）。</p><p>可填 SUCCESS / FAILED 等，具体参考本接口出参 WorkflowRun.RunState 字段返回值。</p>
 * @method array getErrorCodeStrings() 获取<p>错误码，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
 * @method void setErrorCodeStrings(array $ErrorCodeStrings) 设置<p>错误码，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
 * @method array getRunUserUins() 获取<p>运行人UIN，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
 * @method void setRunUserUins(array $RunUserUins) 设置<p>运行人UIN，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
 * @method array getLabelKeyIds() 获取<p>标签名称ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
 * @method void setLabelKeyIds(array $LabelKeyIds) 设置<p>标签名称ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
 * @method array getLabelValueIds() 获取<p>标签值ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
 * @method void setLabelValueIds(array $LabelValueIds) 设置<p>标签值ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
 * @method array getOrderBys() 获取<p>排序条件，多个之间按数组顺序表示优先级。非必填，默认按 CreateTime Desc。<br>可排序字段白名单：CreateTime、EndTime、RunCostTime</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>排序条件，多个之间按数组顺序表示优先级。非必填，默认按 CreateTime Desc。<br>可排序字段白名单：CreateTime、EndTime、RunCostTime</p>
 */
class ListWorkflowRunsRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     */
    public $WorkspaceId;

    /**
     * @var integer <p>分页页码，从 1 开始。非必填，默认 1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
     */
    public $PageSize;

    /**
     * @var string <p>工作流ID，精确匹配。非必填，单值</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>工作流名称关键字，对 WorkflowName 做模糊匹配。非必填，单值</p>
     */
    public $WorkflowNameKeyword;

    /**
     * @var string <p>运行创建时间下界，范围匹配（CreateTime &gt;= 本值），单位：毫秒时间戳。<br>非必填，单值，对应出参 WorkflowRun.CreateTime</p>
     */
    public $CreateStartTime;

    /**
     * @var string <p>运行创建时间上界，范围匹配（CreateTime &lt;= 本值），单位：毫秒时间戳。<br>非必填，单值，对应出参 WorkflowRun.CreateTime</p>
     */
    public $CreateEndTime;

    /**
     * @var array <p>运行状态，精确匹配。非必填，多选（多个值之间为 OR 关系）。</p><p>可填 SUCCESS / FAILED 等，具体参考本接口出参 WorkflowRun.RunState 字段返回值。</p>
     */
    public $RunStates;

    /**
     * @var array <p>错误码，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
     */
    public $ErrorCodeStrings;

    /**
     * @var array <p>运行人UIN，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
     */
    public $RunUserUins;

    /**
     * @var array <p>标签名称ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
     */
    public $LabelKeyIds;

    /**
     * @var array <p>标签值ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
     */
    public $LabelValueIds;

    /**
     * @var array <p>排序条件，多个之间按数组顺序表示优先级。非必填，默认按 CreateTime Desc。<br>可排序字段白名单：CreateTime、EndTime、RunCostTime</p>
     */
    public $OrderBys;

    /**
     * @param string $WorkspaceId <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     * @param integer $PageNumber <p>分页页码，从 1 开始。非必填，默认 1</p>
     * @param integer $PageSize <p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
     * @param string $WorkflowId <p>工作流ID，精确匹配。非必填，单值</p>
     * @param string $WorkflowNameKeyword <p>工作流名称关键字，对 WorkflowName 做模糊匹配。非必填，单值</p>
     * @param string $CreateStartTime <p>运行创建时间下界，范围匹配（CreateTime &gt;= 本值），单位：毫秒时间戳。<br>非必填，单值，对应出参 WorkflowRun.CreateTime</p>
     * @param string $CreateEndTime <p>运行创建时间上界，范围匹配（CreateTime &lt;= 本值），单位：毫秒时间戳。<br>非必填，单值，对应出参 WorkflowRun.CreateTime</p>
     * @param array $RunStates <p>运行状态，精确匹配。非必填，多选（多个值之间为 OR 关系）。</p><p>可填 SUCCESS / FAILED 等，具体参考本接口出参 WorkflowRun.RunState 字段返回值。</p>
     * @param array $ErrorCodeStrings <p>错误码，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
     * @param array $RunUserUins <p>运行人UIN，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
     * @param array $LabelKeyIds <p>标签名称ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
     * @param array $LabelValueIds <p>标签值ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
     * @param array $OrderBys <p>排序条件，多个之间按数组顺序表示优先级。非必填，默认按 CreateTime Desc。<br>可排序字段白名单：CreateTime、EndTime、RunCostTime</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowNameKeyword",$param) and $param["WorkflowNameKeyword"] !== null) {
            $this->WorkflowNameKeyword = $param["WorkflowNameKeyword"];
        }

        if (array_key_exists("CreateStartTime",$param) and $param["CreateStartTime"] !== null) {
            $this->CreateStartTime = $param["CreateStartTime"];
        }

        if (array_key_exists("CreateEndTime",$param) and $param["CreateEndTime"] !== null) {
            $this->CreateEndTime = $param["CreateEndTime"];
        }

        if (array_key_exists("RunStates",$param) and $param["RunStates"] !== null) {
            $this->RunStates = $param["RunStates"];
        }

        if (array_key_exists("ErrorCodeStrings",$param) and $param["ErrorCodeStrings"] !== null) {
            $this->ErrorCodeStrings = $param["ErrorCodeStrings"];
        }

        if (array_key_exists("RunUserUins",$param) and $param["RunUserUins"] !== null) {
            $this->RunUserUins = $param["RunUserUins"];
        }

        if (array_key_exists("LabelKeyIds",$param) and $param["LabelKeyIds"] !== null) {
            $this->LabelKeyIds = $param["LabelKeyIds"];
        }

        if (array_key_exists("LabelValueIds",$param) and $param["LabelValueIds"] !== null) {
            $this->LabelValueIds = $param["LabelValueIds"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }
    }
}
