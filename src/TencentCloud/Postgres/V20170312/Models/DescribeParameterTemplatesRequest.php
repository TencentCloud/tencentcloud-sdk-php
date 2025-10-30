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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParameterTemplates请求参数结构体
 *
 * @method array getFilters() 获取过滤条件，目前支持的过滤条件有：TemplateName, TemplateId，DBMajorVersion，DBEngine。TemplateName不支持模糊匹配。
 * @method void setFilters(array $Filters) 设置过滤条件，目前支持的过滤条件有：TemplateName, TemplateId，DBMajorVersion，DBEngine。TemplateName不支持模糊匹配。
 * @method integer getLimit() 获取每页显示数量，[0，100]，默认 20
 * @method void setLimit(integer $Limit) 设置每页显示数量，[0，100]，默认 20
 * @method integer getOffset() 获取数据偏移量
 * @method void setOffset(integer $Offset) 设置数据偏移量
 * @method string getOrderBy() 获取排序指标，枚举值，支持：CreateTime，TemplateName，DBMajorVersion。如果不指定该参数，默认将按照参数模板的编号倒序排列，也就是说最新添加的参数模板会排在最前面。
 * @method void setOrderBy(string $OrderBy) 设置排序指标，枚举值，支持：CreateTime，TemplateName，DBMajorVersion。如果不指定该参数，默认将按照参数模板的编号倒序排列，也就是说最新添加的参数模板会排在最前面。
 * @method string getOrderByType() 获取排序方式，枚举值，支持：asc（升序） ，desc（降序）。默认值为asc。当未指定OrderBy时，该参数失效，此时排序方式为OrderBy参数描述中给出的默认排序方式。
 * @method void setOrderByType(string $OrderByType) 设置排序方式，枚举值，支持：asc（升序） ，desc（降序）。默认值为asc。当未指定OrderBy时，该参数失效，此时排序方式为OrderBy参数描述中给出的默认排序方式。
 */
class DescribeParameterTemplatesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，目前支持的过滤条件有：TemplateName, TemplateId，DBMajorVersion，DBEngine。TemplateName不支持模糊匹配。
     */
    public $Filters;

    /**
     * @var integer 每页显示数量，[0，100]，默认 20
     */
    public $Limit;

    /**
     * @var integer 数据偏移量
     */
    public $Offset;

    /**
     * @var string 排序指标，枚举值，支持：CreateTime，TemplateName，DBMajorVersion。如果不指定该参数，默认将按照参数模板的编号倒序排列，也就是说最新添加的参数模板会排在最前面。
     */
    public $OrderBy;

    /**
     * @var string 排序方式，枚举值，支持：asc（升序） ，desc（降序）。默认值为asc。当未指定OrderBy时，该参数失效，此时排序方式为OrderBy参数描述中给出的默认排序方式。
     */
    public $OrderByType;

    /**
     * @param array $Filters 过滤条件，目前支持的过滤条件有：TemplateName, TemplateId，DBMajorVersion，DBEngine。TemplateName不支持模糊匹配。
     * @param integer $Limit 每页显示数量，[0，100]，默认 20
     * @param integer $Offset 数据偏移量
     * @param string $OrderBy 排序指标，枚举值，支持：CreateTime，TemplateName，DBMajorVersion。如果不指定该参数，默认将按照参数模板的编号倒序排列，也就是说最新添加的参数模板会排在最前面。
     * @param string $OrderByType 排序方式，枚举值，支持：asc（升序） ，desc（降序）。默认值为asc。当未指定OrderBy时，该参数失效，此时排序方式为OrderBy参数描述中给出的默认排序方式。
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
