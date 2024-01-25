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
 * ListBatchJob请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getJobType() 获取操作类型
 * @method void setJobType(string $JobType) 设置操作类型
 * @method string getOwnerId() 获取操作人Id
 * @method void setOwnerId(string $OwnerId) 设置操作人Id
 * @method string getStartOperateTime() 获取开始操作时间
 * @method void setStartOperateTime(string $StartOperateTime) 设置开始操作时间
 * @method string getEndOperateTime() 获取截止操作时间
 * @method void setEndOperateTime(string $EndOperateTime) 设置截止操作时间
 * @method integer getPage() 获取分页，页码
 * @method void setPage(integer $Page) 设置分页，页码
 * @method integer getSize() 获取分页，页内条数
 * @method void setSize(integer $Size) 设置分页，页内条数
 * @method string getSortType() 获取按更新时间排序排序
--desc
--asc
默认desc
 * @method void setSortType(string $SortType) 设置按更新时间排序排序
--desc
--asc
默认desc
 * @method string getSortItem() 获取排序字段，如创建时间：
CreateTime
 * @method void setSortItem(string $SortItem) 设置排序字段，如创建时间：
CreateTime
 */
class ListBatchJobRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 操作类型
     */
    public $JobType;

    /**
     * @var string 操作人Id
     */
    public $OwnerId;

    /**
     * @var string 开始操作时间
     */
    public $StartOperateTime;

    /**
     * @var string 截止操作时间
     */
    public $EndOperateTime;

    /**
     * @var integer 分页，页码
     */
    public $Page;

    /**
     * @var integer 分页，页内条数
     */
    public $Size;

    /**
     * @var string 按更新时间排序排序
--desc
--asc
默认desc
     */
    public $SortType;

    /**
     * @var string 排序字段，如创建时间：
CreateTime
     */
    public $SortItem;

    /**
     * @param string $ProjectId 项目id
     * @param string $JobType 操作类型
     * @param string $OwnerId 操作人Id
     * @param string $StartOperateTime 开始操作时间
     * @param string $EndOperateTime 截止操作时间
     * @param integer $Page 分页，页码
     * @param integer $Size 分页，页内条数
     * @param string $SortType 按更新时间排序排序
--desc
--asc
默认desc
     * @param string $SortItem 排序字段，如创建时间：
CreateTime
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

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("StartOperateTime",$param) and $param["StartOperateTime"] !== null) {
            $this->StartOperateTime = $param["StartOperateTime"];
        }

        if (array_key_exists("EndOperateTime",$param) and $param["EndOperateTime"] !== null) {
            $this->EndOperateTime = $param["EndOperateTime"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }
    }
}
