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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAndroidApps请求参数结构体
 *
 * @method integer getOffset() 获取分页偏移
 * @method void setOffset(integer $Offset) 设置分页偏移
 * @method integer getLimit() 获取每页数量
 * @method void setLimit(integer $Limit) 设置每页数量
 * @method array getAndroidAppIds() 获取应用ID数组
 * @method void setAndroidAppIds(array $AndroidAppIds) 设置应用ID数组
 * @method array getFilters() 获取过滤条件，支持过滤的字段有：UserId、State、UpdateState、Name、AppMode 。其中 Name 为模糊匹配，其他参数为精确匹配。
 * @method void setFilters(array $Filters) 设置过滤条件，支持过滤的字段有：UserId、State、UpdateState、Name、AppMode 。其中 Name 为模糊匹配，其他参数为精确匹配。
 */
class DescribeAndroidAppsRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移
     */
    public $Offset;

    /**
     * @var integer 每页数量
     */
    public $Limit;

    /**
     * @var array 应用ID数组
     */
    public $AndroidAppIds;

    /**
     * @var array 过滤条件，支持过滤的字段有：UserId、State、UpdateState、Name、AppMode 。其中 Name 为模糊匹配，其他参数为精确匹配。
     */
    public $Filters;

    /**
     * @param integer $Offset 分页偏移
     * @param integer $Limit 每页数量
     * @param array $AndroidAppIds 应用ID数组
     * @param array $Filters 过滤条件，支持过滤的字段有：UserId、State、UpdateState、Name、AppMode 。其中 Name 为模糊匹配，其他参数为精确匹配。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AndroidAppIds",$param) and $param["AndroidAppIds"] !== null) {
            $this->AndroidAppIds = $param["AndroidAppIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
