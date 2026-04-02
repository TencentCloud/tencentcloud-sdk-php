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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSharedCNAME请求参数结构体
 *
 * @method string getZoneId() 获取共享CNAME所属站点ID。
 * @method void setZoneId(string $ZoneId) 设置共享CNAME所属站点ID。
 * @method array getFilters() 获取过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>shared-cname<br>   按照【<strong>共享CNAME</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>type<br>   按照【<strong>共享canme类型</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>description<br>   按照【<strong>描述</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>shared-cname<br>   按照【<strong>共享CNAME</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>type<br>   按照【<strong>共享canme类型</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>description<br>   按照【<strong>描述</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
 * @method string getDirection() 获取列表排序方式，取值有：
<li>asc：升序排列；</li>
<li>desc：降序排列。</li>默认值为asc。
 * @method void setDirection(string $Direction) 设置列表排序方式，取值有：
<li>asc：升序排列；</li>
<li>desc：降序排列。</li>默认值为asc。
 * @method string getMatch() 获取匹配方式，取值有：
<li>all：返回匹配所有查询条件的共享CNAME；</li>
<li>any：返回匹配任意一个查询条件的共享CNAME。</li>默认值为all。
 * @method void setMatch(string $Match) 设置匹配方式，取值有：
<li>all：返回匹配所有查询条件的共享CNAME；</li>
<li>any：返回匹配任意一个查询条件的共享CNAME。</li>默认值为all。
 * @method string getOrder() 获取排序依据，取值有：
<li>create-time：创建时间；</li>
<li>shared-cname：共享CNAME；</li>默认根据shared-cname属性排序。
 * @method void setOrder(string $Order) 设置排序依据，取值有：
<li>create-time：创建时间；</li>
<li>shared-cname：共享CNAME；</li>默认根据shared-cname属性排序。
 * @method integer getOffset() 获取分页查询偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为 0。
 * @method integer getLimit() 获取分页查询限制数目，默认值：20，上限：200。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目，默认值：20，上限：200。
 */
class DescribeSharedCNAMERequest extends AbstractModel
{
    /**
     * @var string 共享CNAME所属站点ID。
     */
    public $ZoneId;

    /**
     * @var array 过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>shared-cname<br>   按照【<strong>共享CNAME</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>type<br>   按照【<strong>共享canme类型</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>description<br>   按照【<strong>描述</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
     */
    public $Filters;

    /**
     * @var string 列表排序方式，取值有：
<li>asc：升序排列；</li>
<li>desc：降序排列。</li>默认值为asc。
     */
    public $Direction;

    /**
     * @var string 匹配方式，取值有：
<li>all：返回匹配所有查询条件的共享CNAME；</li>
<li>any：返回匹配任意一个查询条件的共享CNAME。</li>默认值为all。
     */
    public $Match;

    /**
     * @var string 排序依据，取值有：
<li>create-time：创建时间；</li>
<li>shared-cname：共享CNAME；</li>默认根据shared-cname属性排序。
     */
    public $Order;

    /**
     * @var integer 分页查询偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目，默认值：20，上限：200。
     */
    public $Limit;

    /**
     * @param string $ZoneId 共享CNAME所属站点ID。
     * @param array $Filters 过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>shared-cname<br>   按照【<strong>共享CNAME</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>type<br>   按照【<strong>共享canme类型</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
<li>description<br>   按照【<strong>描述</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>
     * @param string $Direction 列表排序方式，取值有：
<li>asc：升序排列；</li>
<li>desc：降序排列。</li>默认值为asc。
     * @param string $Match 匹配方式，取值有：
<li>all：返回匹配所有查询条件的共享CNAME；</li>
<li>any：返回匹配任意一个查询条件的共享CNAME。</li>默认值为all。
     * @param string $Order 排序依据，取值有：
<li>create-time：创建时间；</li>
<li>shared-cname：共享CNAME；</li>默认根据shared-cname属性排序。
     * @param integer $Offset 分页查询偏移量，默认为 0。
     * @param integer $Limit 分页查询限制数目，默认值：20，上限：200。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
