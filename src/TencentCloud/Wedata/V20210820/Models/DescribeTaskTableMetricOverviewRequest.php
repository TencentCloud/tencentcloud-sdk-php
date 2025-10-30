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
 * DescribeTaskTableMetricOverview请求参数结构体
 *
 * @method string getTaskId() 获取任务TaskId
 * @method void setTaskId(string $TaskId) 设置任务TaskId
 * @method string getNodeType() 获取来源类型，支持枚举： SOURCE、SINK
 * @method void setNodeType(string $NodeType) 设置来源类型，支持枚举： SOURCE、SINK
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getTaskType() 获取任务类型：201. stream, 202. offline，当前只支持实时201
 * @method void setTaskType(integer $TaskType) 设置任务类型：201. stream, 202. offline，当前只支持实时201
 * @method array getFilters() 获取根据SchemaName来模糊搜索
 * @method void setFilters(array $Filters) 设置根据SchemaName来模糊搜索
 * @method array getOrderFields() 获取排序
 * @method void setOrderFields(array $OrderFields) 设置排序
 */
class DescribeTaskTableMetricOverviewRequest extends AbstractModel
{
    /**
     * @var string 任务TaskId
     */
    public $TaskId;

    /**
     * @var string 来源类型，支持枚举： SOURCE、SINK
     */
    public $NodeType;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 任务类型：201. stream, 202. offline，当前只支持实时201
     */
    public $TaskType;

    /**
     * @var array 根据SchemaName来模糊搜索
     */
    public $Filters;

    /**
     * @var array 排序
     */
    public $OrderFields;

    /**
     * @param string $TaskId 任务TaskId
     * @param string $NodeType 来源类型，支持枚举： SOURCE、SINK
     * @param integer $PageNumber 页码
     * @param integer $PageSize 页大小
     * @param string $ProjectId 项目ID
     * @param integer $TaskType 任务类型：201. stream, 202. offline，当前只支持实时201
     * @param array $Filters 根据SchemaName来模糊搜索
     * @param array $OrderFields 排序
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderFields();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
