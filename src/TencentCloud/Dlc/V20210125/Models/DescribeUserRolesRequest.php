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
 * DescribeUserRoles请求参数结构体
 *
 * @method integer getLimit() 获取列举的数量限制
 * @method void setLimit(integer $Limit) 设置列举的数量限制
 * @method integer getOffset() 获取列举的偏移位置
 * @method void setOffset(integer $Offset) 设置列举的偏移位置
 * @method string getFuzzy() 获取按照arn模糊列举
 * @method void setFuzzy(string $Fuzzy) 设置按照arn模糊列举
 * @method string getSortBy() 获取返回结果按照该字段排序
 * @method void setSortBy(string $SortBy) 设置返回结果按照该字段排序
 * @method string getSorting() 获取正序或者倒序，例如：desc
 * @method void setSorting(string $Sorting) 设置正序或者倒序，例如：desc
 * @method integer getIsDefault() 获取是否设置为常驻：1非常驻（默认）、2常驻（仅能设置一个常驻）
 * @method void setIsDefault(integer $IsDefault) 设置是否设置为常驻：1非常驻（默认）、2常驻（仅能设置一个常驻）
 */
class DescribeUserRolesRequest extends AbstractModel
{
    /**
     * @var integer 列举的数量限制
     */
    public $Limit;

    /**
     * @var integer 列举的偏移位置
     */
    public $Offset;

    /**
     * @var string 按照arn模糊列举
     */
    public $Fuzzy;

    /**
     * @var string 返回结果按照该字段排序
     */
    public $SortBy;

    /**
     * @var string 正序或者倒序，例如：desc
     */
    public $Sorting;

    /**
     * @var integer 是否设置为常驻：1非常驻（默认）、2常驻（仅能设置一个常驻）
     */
    public $IsDefault;

    /**
     * @param integer $Limit 列举的数量限制
     * @param integer $Offset 列举的偏移位置
     * @param string $Fuzzy 按照arn模糊列举
     * @param string $SortBy 返回结果按照该字段排序
     * @param string $Sorting 正序或者倒序，例如：desc
     * @param integer $IsDefault 是否设置为常驻：1非常驻（默认）、2常驻（仅能设置一个常驻）
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
