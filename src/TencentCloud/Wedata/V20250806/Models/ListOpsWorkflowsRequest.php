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
 * ListOpsWorkflows请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目Id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目Id</p>
 * @method integer getPageNumber() 获取<p>分页页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>分页页码</p>
 * @method integer getPageSize() 获取<p>分页大小</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页大小</p>
 * @method string getFolderId() 获取<p>文件Id</p>
 * @method void setFolderId(string $FolderId) 设置<p>文件Id</p>
 * @method string getStatus() 获取<p>工作流状态筛选</p><ul><li>ALL_RUNNING : 全部调度中</li><li>ALL_FREEZED : 全部已暂停</li><li>ALL_STOPPTED : 全部已下线</li><li>PART_RUNNING : 部分调度中</li><li>ALL_NO_RUNNING : 全部未调度</li><li>ALL_INVALID : 全部已失效</li></ul>
 * @method void setStatus(string $Status) 设置<p>工作流状态筛选</p><ul><li>ALL_RUNNING : 全部调度中</li><li>ALL_FREEZED : 全部已暂停</li><li>ALL_STOPPTED : 全部已下线</li><li>PART_RUNNING : 部分调度中</li><li>ALL_NO_RUNNING : 全部未调度</li><li>ALL_INVALID : 全部已失效</li></ul>
 * @method string getOwnerUin() 获取<p>负责人Id</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>负责人Id</p>
 * @method string getWorkflowType() 获取<p>工作流类型筛选, 支持值 Cycle或Manual. 默认只查询 Cycle</p>
 * @method void setWorkflowType(string $WorkflowType) 设置<p>工作流类型筛选, 支持值 Cycle或Manual. 默认只查询 Cycle</p>
 * @method string getKeyWord() 获取<p>工作流关键词过滤，支持工作流 Id/name 模糊匹配</p>
 * @method void setKeyWord(string $KeyWord) 设置<p>工作流关键词过滤，支持工作流 Id/name 模糊匹配</p>
 * @method string getSortItem() 获取<p>排序项，可选CreateTime、TaskCount</p>
 * @method void setSortItem(string $SortItem) 设置<p>排序项，可选CreateTime、TaskCount</p>
 * @method string getSortType() 获取<p>排序方式，DESC或ASC, 大写</p>
 * @method void setSortType(string $SortType) 设置<p>排序方式，DESC或ASC, 大写</p>
 * @method string getCreateUserUin() 获取<p>创建人Id</p>
 * @method void setCreateUserUin(string $CreateUserUin) 设置<p>创建人Id</p>
 * @method string getModifyTime() 获取<p>更新时间，格式yyyy-MM-dd HH:mm:ss</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>更新时间，格式yyyy-MM-dd HH:mm:ss</p>
 * @method string getCreateTime() 获取<p>创建时间，格式yyyy-MM-dd HH:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，格式yyyy-MM-dd HH:mm:ss</p>
 */
class ListOpsWorkflowsRequest extends AbstractModel
{
    /**
     * @var string <p>项目Id</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>分页页码</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>分页大小</p>
     */
    public $PageSize;

    /**
     * @var string <p>文件Id</p>
     */
    public $FolderId;

    /**
     * @var string <p>工作流状态筛选</p><ul><li>ALL_RUNNING : 全部调度中</li><li>ALL_FREEZED : 全部已暂停</li><li>ALL_STOPPTED : 全部已下线</li><li>PART_RUNNING : 部分调度中</li><li>ALL_NO_RUNNING : 全部未调度</li><li>ALL_INVALID : 全部已失效</li></ul>
     */
    public $Status;

    /**
     * @var string <p>负责人Id</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>工作流类型筛选, 支持值 Cycle或Manual. 默认只查询 Cycle</p>
     */
    public $WorkflowType;

    /**
     * @var string <p>工作流关键词过滤，支持工作流 Id/name 模糊匹配</p>
     */
    public $KeyWord;

    /**
     * @var string <p>排序项，可选CreateTime、TaskCount</p>
     */
    public $SortItem;

    /**
     * @var string <p>排序方式，DESC或ASC, 大写</p>
     */
    public $SortType;

    /**
     * @var string <p>创建人Id</p>
     */
    public $CreateUserUin;

    /**
     * @var string <p>更新时间，格式yyyy-MM-dd HH:mm:ss</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>创建时间，格式yyyy-MM-dd HH:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @param string $ProjectId <p>项目Id</p>
     * @param integer $PageNumber <p>分页页码</p>
     * @param integer $PageSize <p>分页大小</p>
     * @param string $FolderId <p>文件Id</p>
     * @param string $Status <p>工作流状态筛选</p><ul><li>ALL_RUNNING : 全部调度中</li><li>ALL_FREEZED : 全部已暂停</li><li>ALL_STOPPTED : 全部已下线</li><li>PART_RUNNING : 部分调度中</li><li>ALL_NO_RUNNING : 全部未调度</li><li>ALL_INVALID : 全部已失效</li></ul>
     * @param string $OwnerUin <p>负责人Id</p>
     * @param string $WorkflowType <p>工作流类型筛选, 支持值 Cycle或Manual. 默认只查询 Cycle</p>
     * @param string $KeyWord <p>工作流关键词过滤，支持工作流 Id/name 模糊匹配</p>
     * @param string $SortItem <p>排序项，可选CreateTime、TaskCount</p>
     * @param string $SortType <p>排序方式，DESC或ASC, 大写</p>
     * @param string $CreateUserUin <p>创建人Id</p>
     * @param string $ModifyTime <p>更新时间，格式yyyy-MM-dd HH:mm:ss</p>
     * @param string $CreateTime <p>创建时间，格式yyyy-MM-dd HH:mm:ss</p>
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
