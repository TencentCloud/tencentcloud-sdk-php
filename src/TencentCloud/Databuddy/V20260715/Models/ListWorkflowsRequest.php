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
 * ListWorkflows请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method integer getPageNumber() 获取<p>分页页码，从 1 开始。非必填，默认 1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>分页页码，从 1 开始。非必填，默认 1</p>
 * @method integer getPageSize() 获取<p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
 * @method string getWorkflowNameKeyword() 获取<p>工作流名称关键字，对 WorkflowName 做模糊匹配。非必填，单值</p>
 * @method void setWorkflowNameKeyword(string $WorkflowNameKeyword) 设置<p>工作流名称关键字，对 WorkflowName 做模糊匹配。非必填，单值</p>
 * @method array getWorkflowNames() 获取<p>工作流名称，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
 * @method void setWorkflowNames(array $WorkflowNames) 设置<p>工作流名称，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
 * @method array getWorkflowIds() 获取<p>工作流ID，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
 * @method void setWorkflowIds(array $WorkflowIds) 设置<p>工作流ID，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
 * @method array getRunUserUins() 获取<p>工作流运行人UIN，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
 * @method void setRunUserUins(array $RunUserUins) 设置<p>工作流运行人UIN，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
 * @method array getLabelKeyIds() 获取<p>标签名称ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
 * @method void setLabelKeyIds(array $LabelKeyIds) 设置<p>标签名称ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
 * @method array getLabelValueIds() 获取<p>标签值ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
 * @method void setLabelValueIds(array $LabelValueIds) 设置<p>标签值ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
 * @method string getQuickSelectionType() 获取<p>快速筛选类型。非必填，单值</p><p>对齐老云 API（wedata/2025-10-10）文档示例值：</p><ul><li>MY_FAVORITE：我收藏的</li><li>MY_OWNER：我负责的</li><li>MY_AUTHORITY：我有权限</li><li>WorkflowId：支持多个工作流ID筛选</li></ul><p>后端实现现状：当前仅 MY_FAVORITE 生效（设置 favoriteUserUin 过滤当前用户收藏），MY_OWNER / MY_AUTHORITY 暂未在 Service 层实现，传入会被忽略（按全量返回）。</p>
 * @method void setQuickSelectionType(string $QuickSelectionType) 设置<p>快速筛选类型。非必填，单值</p><p>对齐老云 API（wedata/2025-10-10）文档示例值：</p><ul><li>MY_FAVORITE：我收藏的</li><li>MY_OWNER：我负责的</li><li>MY_AUTHORITY：我有权限</li><li>WorkflowId：支持多个工作流ID筛选</li></ul><p>后端实现现状：当前仅 MY_FAVORITE 生效（设置 favoriteUserUin 过滤当前用户收藏），MY_OWNER / MY_AUTHORITY 暂未在 Service 层实现，传入会被忽略（按全量返回）。</p>
 * @method array getOrderBys() 获取<p>排序条件，多个之间按数组顺序表示优先级。非必填。<br>可排序字段白名单：CreateTime</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>排序条件，多个之间按数组顺序表示优先级。非必填。<br>可排序字段白名单：CreateTime</p>
 */
class ListWorkflowsRequest extends AbstractModel
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
     * @var string <p>工作流名称关键字，对 WorkflowName 做模糊匹配。非必填，单值</p>
     */
    public $WorkflowNameKeyword;

    /**
     * @var array <p>工作流名称，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
     */
    public $WorkflowNames;

    /**
     * @var array <p>工作流ID，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
     */
    public $WorkflowIds;

    /**
     * @var array <p>工作流运行人UIN，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
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
     * @var string <p>快速筛选类型。非必填，单值</p><p>对齐老云 API（wedata/2025-10-10）文档示例值：</p><ul><li>MY_FAVORITE：我收藏的</li><li>MY_OWNER：我负责的</li><li>MY_AUTHORITY：我有权限</li><li>WorkflowId：支持多个工作流ID筛选</li></ul><p>后端实现现状：当前仅 MY_FAVORITE 生效（设置 favoriteUserUin 过滤当前用户收藏），MY_OWNER / MY_AUTHORITY 暂未在 Service 层实现，传入会被忽略（按全量返回）。</p>
     */
    public $QuickSelectionType;

    /**
     * @var array <p>排序条件，多个之间按数组顺序表示优先级。非必填。<br>可排序字段白名单：CreateTime</p>
     */
    public $OrderBys;

    /**
     * @param string $WorkspaceId <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     * @param integer $PageNumber <p>分页页码，从 1 开始。非必填，默认 1</p>
     * @param integer $PageSize <p>每页大小。非必填，默认 10，取值范围 [10, 200]</p>
     * @param string $WorkflowNameKeyword <p>工作流名称关键字，对 WorkflowName 做模糊匹配。非必填，单值</p>
     * @param array $WorkflowNames <p>工作流名称，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
     * @param array $WorkflowIds <p>工作流ID，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
     * @param array $RunUserUins <p>工作流运行人UIN，精确匹配。非必填，多选（多个值之间为 OR 关系）</p>
     * @param array $LabelKeyIds <p>标签名称ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
     * @param array $LabelValueIds <p>标签值ID，精确匹配，可通过标签相关接口获取。非必填，多选（多个值之间为 OR 关系）</p>
     * @param string $QuickSelectionType <p>快速筛选类型。非必填，单值</p><p>对齐老云 API（wedata/2025-10-10）文档示例值：</p><ul><li>MY_FAVORITE：我收藏的</li><li>MY_OWNER：我负责的</li><li>MY_AUTHORITY：我有权限</li><li>WorkflowId：支持多个工作流ID筛选</li></ul><p>后端实现现状：当前仅 MY_FAVORITE 生效（设置 favoriteUserUin 过滤当前用户收藏），MY_OWNER / MY_AUTHORITY 暂未在 Service 层实现，传入会被忽略（按全量返回）。</p>
     * @param array $OrderBys <p>排序条件，多个之间按数组顺序表示优先级。非必填。<br>可排序字段白名单：CreateTime</p>
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

        if (array_key_exists("WorkflowNameKeyword",$param) and $param["WorkflowNameKeyword"] !== null) {
            $this->WorkflowNameKeyword = $param["WorkflowNameKeyword"];
        }

        if (array_key_exists("WorkflowNames",$param) and $param["WorkflowNames"] !== null) {
            $this->WorkflowNames = $param["WorkflowNames"];
        }

        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
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

        if (array_key_exists("QuickSelectionType",$param) and $param["QuickSelectionType"] !== null) {
            $this->QuickSelectionType = $param["QuickSelectionType"];
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
