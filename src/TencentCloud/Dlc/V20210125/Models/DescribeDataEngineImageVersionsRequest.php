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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataEngineImageVersions请求参数结构体
 *
 * @method string getEngineType() 获取引擎类型：SparkSQL、PrestoSQL、SparkBatch、StandardSpark、StandardPresto
 * @method void setEngineType(string $EngineType) 设置引擎类型：SparkSQL、PrestoSQL、SparkBatch、StandardSpark、StandardPresto
 * @method string getSort() 获取排序字段: InsertTime（插入时间，默认），UpdateTime（更新时间）
 * @method void setSort(string $Sort) 设置排序字段: InsertTime（插入时间，默认），UpdateTime（更新时间）
 * @method boolean getAsc() 获取排序方式：false（降序，默认），true（升序）
 * @method void setAsc(boolean $Asc) 设置排序方式：false（降序，默认），true（升序）
 */
class DescribeDataEngineImageVersionsRequest extends AbstractModel
{
    /**
     * @var string 引擎类型：SparkSQL、PrestoSQL、SparkBatch、StandardSpark、StandardPresto
     */
    public $EngineType;

    /**
     * @var string 排序字段: InsertTime（插入时间，默认），UpdateTime（更新时间）
     */
    public $Sort;

    /**
     * @var boolean 排序方式：false（降序，默认），true（升序）
     */
    public $Asc;

    /**
     * @param string $EngineType 引擎类型：SparkSQL、PrestoSQL、SparkBatch、StandardSpark、StandardPresto
     * @param string $Sort 排序字段: InsertTime（插入时间，默认），UpdateTime（更新时间）
     * @param boolean $Asc 排序方式：false（降序，默认），true（升序）
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
        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }
    }
}
