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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZones请求参数结构体
 *
 * @method integer getOffset() 获取分页查询偏移量。默认值：0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量。默认值：0。
 * @method integer getLimit() 获取分页查询限制数目。默认值：20，最大值：1000。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目。默认值：20，最大值：1000。
 * @method array getFilters() 获取过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>zone-name<br>   按照【<strong>站点名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>zone-id<br>   按照【<strong>站点ID</strong>】进行过滤。站点ID形如：zone-xxx。<br>   类型：String<br>   必选：否</li><li>status<br>   按照【<strong>站点状态</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>tag-key<br>   按照【<strong>标签键</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>tag-value<br>   按照【<strong>标签值</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>模糊查询时仅支持过滤字段名为zone-name。
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>zone-name<br>   按照【<strong>站点名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>zone-id<br>   按照【<strong>站点ID</strong>】进行过滤。站点ID形如：zone-xxx。<br>   类型：String<br>   必选：否</li><li>status<br>   按照【<strong>站点状态</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>tag-key<br>   按照【<strong>标签键</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>tag-value<br>   按照【<strong>标签值</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>模糊查询时仅支持过滤字段名为zone-name。
 * @method string getOrder() 获取排序字段，取值有：
<li> type：接入类型；</li>
<li> area：加速区域；</li>
<li> create-time：创建时间；</li>
<li> zone-name：站点名称；</li>
<li> use-time：最近使用时间；</li>
<li> active-status：生效状态。</li>不填写使用默认值create-time。
 * @method void setOrder(string $Order) 设置排序字段，取值有：
<li> type：接入类型；</li>
<li> area：加速区域；</li>
<li> create-time：创建时间；</li>
<li> zone-name：站点名称；</li>
<li> use-time：最近使用时间；</li>
<li> active-status：生效状态。</li>不填写使用默认值create-time。
 * @method string getDirection() 获取排序方向，取值有：
<li> asc：从小到大排序；</li>
<li> desc：从大到小排序。</li>不填写使用默认值desc。
 * @method void setDirection(string $Direction) 设置排序方向，取值有：
<li> asc：从小到大排序；</li>
<li> desc：从大到小排序。</li>不填写使用默认值desc。
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var integer 分页查询偏移量。默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目。默认值：20，最大值：1000。
     */
    public $Limit;

    /**
     * @var array 过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>zone-name<br>   按照【<strong>站点名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>zone-id<br>   按照【<strong>站点ID</strong>】进行过滤。站点ID形如：zone-xxx。<br>   类型：String<br>   必选：否</li><li>status<br>   按照【<strong>站点状态</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>tag-key<br>   按照【<strong>标签键</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>tag-value<br>   按照【<strong>标签值</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>模糊查询时仅支持过滤字段名为zone-name。
     */
    public $Filters;

    /**
     * @var string 排序字段，取值有：
<li> type：接入类型；</li>
<li> area：加速区域；</li>
<li> create-time：创建时间；</li>
<li> zone-name：站点名称；</li>
<li> use-time：最近使用时间；</li>
<li> active-status：生效状态。</li>不填写使用默认值create-time。
     */
    public $Order;

    /**
     * @var string 排序方向，取值有：
<li> asc：从小到大排序；</li>
<li> desc：从大到小排序。</li>不填写使用默认值desc。
     */
    public $Direction;

    /**
     * @param integer $Offset 分页查询偏移量。默认值：0。
     * @param integer $Limit 分页查询限制数目。默认值：20，最大值：1000。
     * @param array $Filters 过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>zone-name<br>   按照【<strong>站点名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>zone-id<br>   按照【<strong>站点ID</strong>】进行过滤。站点ID形如：zone-xxx。<br>   类型：String<br>   必选：否</li><li>status<br>   按照【<strong>站点状态</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>tag-key<br>   按照【<strong>标签键</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>tag-value<br>   按照【<strong>标签值</strong>】进行过滤。<br>   类型：String<br>   必选：否</li>模糊查询时仅支持过滤字段名为zone-name。
     * @param string $Order 排序字段，取值有：
<li> type：接入类型；</li>
<li> area：加速区域；</li>
<li> create-time：创建时间；</li>
<li> zone-name：站点名称；</li>
<li> use-time：最近使用时间；</li>
<li> active-status：生效状态。</li>不填写使用默认值create-time。
     * @param string $Direction 排序方向，取值有：
<li> asc：从小到大排序；</li>
<li> desc：从大到小排序。</li>不填写使用默认值desc。
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
