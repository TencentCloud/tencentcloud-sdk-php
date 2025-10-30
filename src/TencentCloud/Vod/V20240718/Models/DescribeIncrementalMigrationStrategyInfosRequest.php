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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIncrementalMigrationStrategyInfos请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
 * @method array getFilters() 获取过滤条件，Filters.Values 的上限为 `20`；若 Filters 长度为 `0` 则查询时无过滤条件限制。 详细的过滤条件如下： <li>BucketId<br>   按照【<strong>存储桶 ID</strong>】进行过滤<br>   类型：String<br>   必选：否<br></li><li>StrategyId<br>   按照【<strong>策略 ID</strong>】进行过滤。<br>   类型：String<br>   必选：否</li> 
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values 的上限为 `20`；若 Filters 长度为 `0` 则查询时无过滤条件限制。 详细的过滤条件如下： <li>BucketId<br>   按照【<strong>存储桶 ID</strong>】进行过滤<br>   类型：String<br>   必选：否<br></li><li>StrategyId<br>   按照【<strong>策略 ID</strong>】进行过滤。<br>   类型：String<br>   必选：否</li> 
 * @method SortBy getSortBy() 获取返回结果的排序。 SortBy.Field 取值有：<li>UpdateTime：创建时间。</li>若不填，SortBy.Field 默认值为 `UpdateTime`，SortBy.Order 默认值为 `Desc`。
 * @method void setSortBy(SortBy $SortBy) 设置返回结果的排序。 SortBy.Field 取值有：<li>UpdateTime：创建时间。</li>若不填，SortBy.Field 默认值为 `UpdateTime`，SortBy.Order 默认值为 `Desc`。
 * @method integer getOffset() 获取分页返回的起始偏移量，默认值为 `0`。
 * @method void setOffset(integer $Offset) 设置分页返回的起始偏移量，默认值为 `0`。
 * @method integer getLimit() 获取分页返回的记录条数，默认值为 `20`，最大值为 `100`。
 * @method void setLimit(integer $Limit) 设置分页返回的记录条数，默认值为 `20`，最大值为 `100`。
 */
class DescribeIncrementalMigrationStrategyInfosRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var array 过滤条件，Filters.Values 的上限为 `20`；若 Filters 长度为 `0` 则查询时无过滤条件限制。 详细的过滤条件如下： <li>BucketId<br>   按照【<strong>存储桶 ID</strong>】进行过滤<br>   类型：String<br>   必选：否<br></li><li>StrategyId<br>   按照【<strong>策略 ID</strong>】进行过滤。<br>   类型：String<br>   必选：否</li> 
     */
    public $Filters;

    /**
     * @var SortBy 返回结果的排序。 SortBy.Field 取值有：<li>UpdateTime：创建时间。</li>若不填，SortBy.Field 默认值为 `UpdateTime`，SortBy.Order 默认值为 `Desc`。
     */
    public $SortBy;

    /**
     * @var integer 分页返回的起始偏移量，默认值为 `0`。
     */
    public $Offset;

    /**
     * @var integer 分页返回的记录条数，默认值为 `20`，最大值为 `100`。
     */
    public $Limit;

    /**
     * @param integer $SubAppId <b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
     * @param array $Filters 过滤条件，Filters.Values 的上限为 `20`；若 Filters 长度为 `0` 则查询时无过滤条件限制。 详细的过滤条件如下： <li>BucketId<br>   按照【<strong>存储桶 ID</strong>】进行过滤<br>   类型：String<br>   必选：否<br></li><li>StrategyId<br>   按照【<strong>策略 ID</strong>】进行过滤。<br>   类型：String<br>   必选：否</li> 
     * @param SortBy $SortBy 返回结果的排序。 SortBy.Field 取值有：<li>UpdateTime：创建时间。</li>若不填，SortBy.Field 默认值为 `UpdateTime`，SortBy.Order 默认值为 `Desc`。
     * @param integer $Offset 分页返回的起始偏移量，默认值为 `0`。
     * @param integer $Limit 分页返回的记录条数，默认值为 `20`，最大值为 `100`。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = new SortBy();
            $this->SortBy->deserialize($param["SortBy"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
