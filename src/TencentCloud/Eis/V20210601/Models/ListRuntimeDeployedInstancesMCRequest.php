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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRuntimeDeployedInstancesMC请求参数结构体
 *
 * @method integer getRuntimeId() 获取运行时id
 * @method void setRuntimeId(integer $RuntimeId) 设置运行时id
 * @method integer getLimit() 获取最大请求数量
 * @method void setLimit(integer $Limit) 设置最大请求数量
 * @method integer getOffset() 获取请求偏移量
 * @method void setOffset(integer $Offset) 设置请求偏移量
 * @method integer getSortType() 获取排序类型：1:创建时间排序, 2:更新时间排序（默认）
 * @method void setSortType(integer $SortType) 设置排序类型：1:创建时间排序, 2:更新时间排序（默认）
 * @method string getSort() 获取排序方式：asc，desc（默认）
 * @method void setSort(string $Sort) 设置排序方式：asc，desc（默认）
 * @method string getZone() 获取运行时地域
 * @method void setZone(string $Zone) 设置运行时地域
 */
class ListRuntimeDeployedInstancesMCRequest extends AbstractModel
{
    /**
     * @var integer 运行时id
     */
    public $RuntimeId;

    /**
     * @var integer 最大请求数量
     */
    public $Limit;

    /**
     * @var integer 请求偏移量
     */
    public $Offset;

    /**
     * @var integer 排序类型：1:创建时间排序, 2:更新时间排序（默认）
     */
    public $SortType;

    /**
     * @var string 排序方式：asc，desc（默认）
     */
    public $Sort;

    /**
     * @var string 运行时地域
     */
    public $Zone;

    /**
     * @param integer $RuntimeId 运行时id
     * @param integer $Limit 最大请求数量
     * @param integer $Offset 请求偏移量
     * @param integer $SortType 排序类型：1:创建时间排序, 2:更新时间排序（默认）
     * @param string $Sort 排序方式：asc，desc（默认）
     * @param string $Zone 运行时地域
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
        if (array_key_exists("RuntimeId",$param) and $param["RuntimeId"] !== null) {
            $this->RuntimeId = $param["RuntimeId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
