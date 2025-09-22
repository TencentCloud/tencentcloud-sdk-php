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
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method integer getPageNumber() 获取分页页码
 * @method void setPageNumber(integer $PageNumber) 设置分页页码
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method string getFolderId() 获取文件Id
 * @method void setFolderId(string $FolderId) 设置文件Id
 * @method string getStatus() 获取工作流状态筛选
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
 * @method void setStatus(string $Status) 设置工作流状态筛选
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
 * @method string getOwnerUin() 获取负责人Id
 * @method void setOwnerUin(string $OwnerUin) 设置负责人Id
 * @method string getWorkflowType() 获取工作流类型筛选, 支持值 Cycle或Manual. 默认只查询 Cycle
 * @method void setWorkflowType(string $WorkflowType) 设置工作流类型筛选, 支持值 Cycle或Manual. 默认只查询 Cycle
 * @method string getKeyWord() 获取工作流关键词过滤，支持工作流 Id/name 模糊匹配
 * @method void setKeyWord(string $KeyWord) 设置工作流关键词过滤，支持工作流 Id/name 模糊匹配
 * @method string getSortItem() 获取排序项，可选CreateTime、TaskCount
 * @method void setSortItem(string $SortItem) 设置排序项，可选CreateTime、TaskCount
 * @method string getSortType() 获取排序方式，DESC或ASC, 大写
 * @method void setSortType(string $SortType) 设置排序方式，DESC或ASC, 大写
 * @method string getCreateUserUin() 获取创建人Id
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人Id
 * @method string getModifyTime() 获取更新时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setModifyTime(string $ModifyTime) 设置更新时间，格式yyyy-MM-dd HH:mm:ss
 * @method string getCreateTime() 获取创建时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setCreateTime(string $CreateTime) 设置创建时间，格式yyyy-MM-dd HH:mm:ss
 */
class ListOpsWorkflowsRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var integer 分页页码
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var string 文件Id
     */
    public $FolderId;

    /**
     * @var string 工作流状态筛选
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
     */
    public $Status;

    /**
     * @var string 负责人Id
     */
    public $OwnerUin;

    /**
     * @var string 工作流类型筛选, 支持值 Cycle或Manual. 默认只查询 Cycle
     */
    public $WorkflowType;

    /**
     * @var string 工作流关键词过滤，支持工作流 Id/name 模糊匹配
     */
    public $KeyWord;

    /**
     * @var string 排序项，可选CreateTime、TaskCount
     */
    public $SortItem;

    /**
     * @var string 排序方式，DESC或ASC, 大写
     */
    public $SortType;

    /**
     * @var string 创建人Id
     */
    public $CreateUserUin;

    /**
     * @var string 更新时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $ModifyTime;

    /**
     * @var string 创建时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $CreateTime;

    /**
     * @param string $ProjectId 项目Id
     * @param integer $PageNumber 分页页码
     * @param integer $PageSize 分页大小
     * @param string $FolderId 文件Id
     * @param string $Status 工作流状态筛选
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
     * @param string $OwnerUin 负责人Id
     * @param string $WorkflowType 工作流类型筛选, 支持值 Cycle或Manual. 默认只查询 Cycle
     * @param string $KeyWord 工作流关键词过滤，支持工作流 Id/name 模糊匹配
     * @param string $SortItem 排序项，可选CreateTime、TaskCount
     * @param string $SortType 排序方式，DESC或ASC, 大写
     * @param string $CreateUserUin 创建人Id
     * @param string $ModifyTime 更新时间，格式yyyy-MM-dd HH:mm:ss
     * @param string $CreateTime 创建时间，格式yyyy-MM-dd HH:mm:ss
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
