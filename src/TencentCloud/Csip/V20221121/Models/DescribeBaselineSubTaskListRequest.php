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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaselineSubTaskList请求参数结构体
 *
 * @method integer getTaskID() 获取<p>基线主任务 ID。</p>
 * @method void setTaskID(integer $TaskID) 设置<p>基线主任务 ID。</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>通用过滤条件，支持的字段包括：TaskID（主任务 ID，精确）、Status（子任务状态）、CheckAssetType、InstanceID/ClusterID 等。</p>
 * @method void setFilters(array $Filters) 设置<p>通用过滤条件，支持的字段包括：TaskID（主任务 ID，精确）、Status（子任务状态）、CheckAssetType、InstanceID/ClusterID 等。</p>
 * @method integer getLimit() 获取<p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
 * @method integer getOffset() 获取<p>分页查询起始偏移量，从 0 开始。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询起始偏移量，从 0 开始。</p>
 * @method string getOrder() 获取<p>排序方向，取值 asc（升序）或 desc（降序），默认 desc。</p>
 * @method void setOrder(string $Order) 设置<p>排序方向，取值 asc（升序）或 desc（降序），默认 desc。</p>
 * @method string getBy() 获取<p>排序字段名，由具体接口定义可选字段。</p>
 * @method void setBy(string $By) 设置<p>排序字段名，由具体接口定义可选字段。</p>
 */
class DescribeBaselineSubTaskListRequest extends AbstractModel
{
    /**
     * @var integer <p>基线主任务 ID。</p>
     */
    public $TaskID;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>通用过滤条件，支持的字段包括：TaskID（主任务 ID，精确）、Status（子任务状态）、CheckAssetType、InstanceID/ClusterID 等。</p>
     */
    public $Filters;

    /**
     * @var integer <p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页查询起始偏移量，从 0 开始。</p>
     */
    public $Offset;

    /**
     * @var string <p>排序方向，取值 asc（升序）或 desc（降序），默认 desc。</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段名，由具体接口定义可选字段。</p>
     */
    public $By;

    /**
     * @param integer $TaskID <p>基线主任务 ID。</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>通用过滤条件，支持的字段包括：TaskID（主任务 ID，精确）、Status（子任务状态）、CheckAssetType、InstanceID/ClusterID 等。</p>
     * @param integer $Limit <p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
     * @param integer $Offset <p>分页查询起始偏移量，从 0 开始。</p>
     * @param string $Order <p>排序方向，取值 asc（升序）或 desc（降序），默认 desc。</p>
     * @param string $By <p>排序字段名，由具体接口定义可选字段。</p>
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
