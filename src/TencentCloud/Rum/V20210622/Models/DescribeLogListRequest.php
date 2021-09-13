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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogList请求参数结构体
 *
 * @method string getSort() 获取排序方式  desc  asc
 * @method void setSort(string $Sort) 设置排序方式  desc  asc
 * @method string getActionType() 获取searchlog   histogram
 * @method void setActionType(string $ActionType) 设置searchlog   histogram
 * @method integer getID() 获取项目ID
 * @method void setID(integer $ID) 设置项目ID
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 * @method string getContext() 获取上下文
 * @method void setContext(string $Context) 设置上下文
 * @method string getQuery() 获取查询语句
 * @method void setQuery(string $Query) 设置查询语句
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 */
class DescribeLogListRequest extends AbstractModel
{
    /**
     * @var string 排序方式  desc  asc
     */
    public $Sort;

    /**
     * @var string searchlog   histogram
     */
    public $ActionType;

    /**
     * @var integer 项目ID
     */
    public $ID;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @var string 上下文
     */
    public $Context;

    /**
     * @var string 查询语句
     */
    public $Query;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @param string $Sort 排序方式  desc  asc
     * @param string $ActionType searchlog   histogram
     * @param integer $ID 项目ID
     * @param string $StartTime 开始时间
     * @param integer $Limit 限制
     * @param string $Context 上下文
     * @param string $Query 查询语句
     * @param string $EndTime 结束时间
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
        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
