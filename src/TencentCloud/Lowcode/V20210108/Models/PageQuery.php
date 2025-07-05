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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询条件
 *
 * @method array getDocumentSetId() 获取文件id数组，表示要查询的文件的所有 ID，支持批量查询，数组元素范围[1,20]。
 * @method void setDocumentSetId(array $DocumentSetId) 设置文件id数组，表示要查询的文件的所有 ID，支持批量查询，数组元素范围[1,20]。
 * @method array getDocumentSetName() 获取表示要查询的文档名称，支持批量查询，数组元素范围[1,20]。
 * @method void setDocumentSetName(array $DocumentSetName) 设置表示要查询的文档名称，支持批量查询，数组元素范围[1,20]。
 * @method integer getLimit() 获取取值范围：[1,16384]
 * @method void setLimit(integer $Limit) 设置取值范围：[1,16384]
 * @method integer getOffset() 获取设置分页偏移量，用于控制分页查询返回结果的起始位置，方便用户对数据进行分页展示和浏览。
取值：为 limit 整数倍。
计算公式：offset=limit*(page-1)。
例如：当 limit = 10，page = 2 时，分页偏移量 offset = 10 * (2 - 1) = 10，表示从查询结果的第 11 条记录开始返回数据。

 * @method void setOffset(integer $Offset) 设置设置分页偏移量，用于控制分页查询返回结果的起始位置，方便用户对数据进行分页展示和浏览。
取值：为 limit 整数倍。
计算公式：offset=limit*(page-1)。
例如：当 limit = 10，page = 2 时，分页偏移量 offset = 10 * (2 - 1) = 10，表示从查询结果的第 11 条记录开始返回数据。

 * @method array getOutputFields() 获取设置后，其他字段为空值
 * @method void setOutputFields(array $OutputFields) 设置设置后，其他字段为空值
 * @method string getFilter() 获取使用创建 CollectionView 指定的 Filter 索引的字段设置查询过滤表达式。
 * @method void setFilter(string $Filter) 设置使用创建 CollectionView 指定的 Filter 索引的字段设置查询过滤表达式。
 */
class PageQuery extends AbstractModel
{
    /**
     * @var array 文件id数组，表示要查询的文件的所有 ID，支持批量查询，数组元素范围[1,20]。
     */
    public $DocumentSetId;

    /**
     * @var array 表示要查询的文档名称，支持批量查询，数组元素范围[1,20]。
     */
    public $DocumentSetName;

    /**
     * @var integer 取值范围：[1,16384]
     */
    public $Limit;

    /**
     * @var integer 设置分页偏移量，用于控制分页查询返回结果的起始位置，方便用户对数据进行分页展示和浏览。
取值：为 limit 整数倍。
计算公式：offset=limit*(page-1)。
例如：当 limit = 10，page = 2 时，分页偏移量 offset = 10 * (2 - 1) = 10，表示从查询结果的第 11 条记录开始返回数据。

     */
    public $Offset;

    /**
     * @var array 设置后，其他字段为空值
     */
    public $OutputFields;

    /**
     * @var string 使用创建 CollectionView 指定的 Filter 索引的字段设置查询过滤表达式。
     */
    public $Filter;

    /**
     * @param array $DocumentSetId 文件id数组，表示要查询的文件的所有 ID，支持批量查询，数组元素范围[1,20]。
     * @param array $DocumentSetName 表示要查询的文档名称，支持批量查询，数组元素范围[1,20]。
     * @param integer $Limit 取值范围：[1,16384]
     * @param integer $Offset 设置分页偏移量，用于控制分页查询返回结果的起始位置，方便用户对数据进行分页展示和浏览。
取值：为 limit 整数倍。
计算公式：offset=limit*(page-1)。
例如：当 limit = 10，page = 2 时，分页偏移量 offset = 10 * (2 - 1) = 10，表示从查询结果的第 11 条记录开始返回数据。

     * @param array $OutputFields 设置后，其他字段为空值
     * @param string $Filter 使用创建 CollectionView 指定的 Filter 索引的字段设置查询过滤表达式。
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
        if (array_key_exists("DocumentSetId",$param) and $param["DocumentSetId"] !== null) {
            $this->DocumentSetId = $param["DocumentSetId"];
        }

        if (array_key_exists("DocumentSetName",$param) and $param["DocumentSetName"] !== null) {
            $this->DocumentSetName = $param["DocumentSetName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OutputFields",$param) and $param["OutputFields"] !== null) {
            $this->OutputFields = $param["OutputFields"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }
    }
}
