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
 * DescribeInferenceServices请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点ID。</p>
 * @method array getFilters() 获取<p>过滤条件，上限 20 个，多个条件为且关系，Filters.Values 的上限为 20。详细的过滤条件如下：<li>service-name：按照服务名称进行过滤；</li><li>service-id：按照服务 ID 过滤；</li><li>status：按照服务状态过滤。</li>模糊查询时仅支持过滤字段名为 service-name。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，上限 20 个，多个条件为且关系，Filters.Values 的上限为 20。详细的过滤条件如下：<li>service-name：按照服务名称进行过滤；</li><li>service-id：按照服务 ID 过滤；</li><li>status：按照服务状态过滤。</li>模糊查询时仅支持过滤字段名为 service-name。</p>
 * @method integer getOffset() 获取<p>分页查询偏移量。默认值：0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询偏移量。默认值：0。</p>
 * @method integer getLimit() 获取<p>分页查询限制数目。默认值：20，最大值：200。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询限制数目。默认值：20，最大值：200。</p>
 * @method string getOrder() 获取<p>可根据该字段对返回结果进行排序，取值有：<li>create-time：创建时间。</li>不填写时默认按照 create-time 排序。</p>
 * @method void setOrder(string $Order) 设置<p>可根据该字段对返回结果进行排序，取值有：<li>create-time：创建时间。</li>不填写时默认按照 create-time 排序。</p>
 * @method string getDirection() 获取<p>排序方向，如果是字段值为数字，则根据数字大小排序；如果字段值为文本，则根据 ASCII 码的大小排序。取值有：<li>asc：从小到大排序；</li><li>desc：从大到小排序。</li>不填写使用默认值 desc。</p>
 * @method void setDirection(string $Direction) 设置<p>排序方向，如果是字段值为数字，则根据数字大小排序；如果字段值为文本，则根据 ASCII 码的大小排序。取值有：<li>asc：从小到大排序；</li><li>desc：从大到小排序。</li>不填写使用默认值 desc。</p>
 */
class DescribeInferenceServicesRequest extends AbstractModel
{
    /**
     * @var string <p>站点ID。</p>
     */
    public $ZoneId;

    /**
     * @var array <p>过滤条件，上限 20 个，多个条件为且关系，Filters.Values 的上限为 20。详细的过滤条件如下：<li>service-name：按照服务名称进行过滤；</li><li>service-id：按照服务 ID 过滤；</li><li>status：按照服务状态过滤。</li>模糊查询时仅支持过滤字段名为 service-name。</p>
     */
    public $Filters;

    /**
     * @var integer <p>分页查询偏移量。默认值：0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页查询限制数目。默认值：20，最大值：200。</p>
     */
    public $Limit;

    /**
     * @var string <p>可根据该字段对返回结果进行排序，取值有：<li>create-time：创建时间。</li>不填写时默认按照 create-time 排序。</p>
     */
    public $Order;

    /**
     * @var string <p>排序方向，如果是字段值为数字，则根据数字大小排序；如果字段值为文本，则根据 ASCII 码的大小排序。取值有：<li>asc：从小到大排序；</li><li>desc：从大到小排序。</li>不填写使用默认值 desc。</p>
     */
    public $Direction;

    /**
     * @param string $ZoneId <p>站点ID。</p>
     * @param array $Filters <p>过滤条件，上限 20 个，多个条件为且关系，Filters.Values 的上限为 20。详细的过滤条件如下：<li>service-name：按照服务名称进行过滤；</li><li>service-id：按照服务 ID 过滤；</li><li>status：按照服务状态过滤。</li>模糊查询时仅支持过滤字段名为 service-name。</p>
     * @param integer $Offset <p>分页查询偏移量。默认值：0。</p>
     * @param integer $Limit <p>分页查询限制数目。默认值：20，最大值：200。</p>
     * @param string $Order <p>可根据该字段对返回结果进行排序，取值有：<li>create-time：创建时间。</li>不填写时默认按照 create-time 排序。</p>
     * @param string $Direction <p>排序方向，如果是字段值为数字，则根据数字大小排序；如果字段值为文本，则根据 ASCII 码的大小排序。取值有：<li>asc：从小到大排序；</li><li>desc：从大到小排序。</li>不填写使用默认值 desc。</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
