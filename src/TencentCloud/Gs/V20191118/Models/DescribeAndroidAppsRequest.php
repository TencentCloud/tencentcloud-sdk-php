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
 * @method integer getOffset() 获取<p>分页偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移</p>
 * @method integer getLimit() 获取<p>每页数量</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量</p>
 * @method array getAndroidAppIds() 获取<p>应用ID数组</p>
 * @method void setAndroidAppIds(array $AndroidAppIds) 设置<p>应用ID数组</p>
 * @method array getFilters() 获取<p>过滤条件，支持过滤的字段有：UserId、State、UpdateState、Name、AppMode 。其中 Name 为模糊匹配，其他参数为精确匹配。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，支持过滤的字段有：UserId、State、UpdateState、Name、AppMode 。其中 Name 为模糊匹配，其他参数为精确匹配。</p>
 */
class DescribeAndroidAppsRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量</p>
     */
    public $Limit;

    /**
     * @var array <p>应用ID数组</p>
     */
    public $AndroidAppIds;

    /**
     * @var array <p>过滤条件，支持过滤的字段有：UserId、State、UpdateState、Name、AppMode 。其中 Name 为模糊匹配，其他参数为精确匹配。</p>
     */
    public $Filters;

    /**
     * @param integer $Offset <p>分页偏移</p>
     * @param integer $Limit <p>每页数量</p>
     * @param array $AndroidAppIds <p>应用ID数组</p>
     * @param array $Filters <p>过滤条件，支持过滤的字段有：UserId、State、UpdateState、Name、AppMode 。其中 Name 为模糊匹配，其他参数为精确匹配。</p>
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
