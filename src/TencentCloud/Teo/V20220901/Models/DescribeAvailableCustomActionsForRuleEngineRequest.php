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
 * DescribeAvailableCustomActionsForRuleEngine请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method array getFilters() 获取<p>过滤条件，多个条件为且关系，Filters.Values 的上限为 20。该参数不填写时，返回当前站点下所有可用的规则引擎定制配置。详细的过滤条件如下：</p><li>action-id：按照定制配置唯一标识 ID 进行过滤；</li><li>name：按照定制配置名称进行过滤。</li>模糊查询时仅支持过滤字段名为 <code>name</code>。<p></p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，多个条件为且关系，Filters.Values 的上限为 20。该参数不填写时，返回当前站点下所有可用的规则引擎定制配置。详细的过滤条件如下：</p><li>action-id：按照定制配置唯一标识 ID 进行过滤；</li><li>name：按照定制配置名称进行过滤。</li>模糊查询时仅支持过滤字段名为 <code>name</code>。<p></p>
 * @method integer getLimit() 获取<p>分页查询限制数目。</p><p>取值范围：[0, 1000]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询限制数目。</p><p>取值范围：[0, 1000]</p><p>默认值：20</p>
 * @method integer getOffset() 获取<p>分页偏移量。</p><p>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量。</p><p>默认值：0</p>
 * @method string getSortBy() 获取<p>排序字段，取值有：</p><li>action-id：按照定制配置唯一标识 ID 排序；</li><li>create-time：按照定制配置创建时间排序。</li>默认值：<code>action-id</code>。<p></p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段，取值有：</p><li>action-id：按照定制配置唯一标识 ID 排序；</li><li>create-time：按照定制配置创建时间排序。</li>默认值：<code>action-id</code>。<p></p>
 * @method string getSortOrder() 获取<p>排序方式，取值有：</p><li>asc：升序排序；</li><li>desc：降序排序。</li>默认值：desc。<p></p>
 * @method void setSortOrder(string $SortOrder) 设置<p>排序方式，取值有：</p><li>asc：升序排序；</li><li>desc：降序排序。</li>默认值：desc。<p></p>
 */
class DescribeAvailableCustomActionsForRuleEngineRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var array <p>过滤条件，多个条件为且关系，Filters.Values 的上限为 20。该参数不填写时，返回当前站点下所有可用的规则引擎定制配置。详细的过滤条件如下：</p><li>action-id：按照定制配置唯一标识 ID 进行过滤；</li><li>name：按照定制配置名称进行过滤。</li>模糊查询时仅支持过滤字段名为 <code>name</code>。<p></p>
     */
    public $Filters;

    /**
     * @var integer <p>分页查询限制数目。</p><p>取值范围：[0, 1000]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量。</p><p>默认值：0</p>
     */
    public $Offset;

    /**
     * @var string <p>排序字段，取值有：</p><li>action-id：按照定制配置唯一标识 ID 排序；</li><li>create-time：按照定制配置创建时间排序。</li>默认值：<code>action-id</code>。<p></p>
     */
    public $SortBy;

    /**
     * @var string <p>排序方式，取值有：</p><li>asc：升序排序；</li><li>desc：降序排序。</li>默认值：desc。<p></p>
     */
    public $SortOrder;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param array $Filters <p>过滤条件，多个条件为且关系，Filters.Values 的上限为 20。该参数不填写时，返回当前站点下所有可用的规则引擎定制配置。详细的过滤条件如下：</p><li>action-id：按照定制配置唯一标识 ID 进行过滤；</li><li>name：按照定制配置名称进行过滤。</li>模糊查询时仅支持过滤字段名为 <code>name</code>。<p></p>
     * @param integer $Limit <p>分页查询限制数目。</p><p>取值范围：[0, 1000]</p><p>默认值：20</p>
     * @param integer $Offset <p>分页偏移量。</p><p>默认值：0</p>
     * @param string $SortBy <p>排序字段，取值有：</p><li>action-id：按照定制配置唯一标识 ID 排序；</li><li>create-time：按照定制配置创建时间排序。</li>默认值：<code>action-id</code>。<p></p>
     * @param string $SortOrder <p>排序方式，取值有：</p><li>asc：升序排序；</li><li>desc：降序排序。</li>默认值：desc。<p></p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
