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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSBlockRecords请求参数结构体
 *
 * @method string getStartTime() 获取<p>查询的起始时间。最高支持近一年的数据查询。</p><p>参数格式：2026-02-04T11:30:00+08:00。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询的起始时间。最高支持近一年的数据查询。</p><p>参数格式：2026-02-04T11:30:00+08:00。</p>
 * @method string getEndTime() 获取<p>查询的结束时间。查询时间范围（EndTime - StartTime）需小于等于 31 天。</p><p>参数格式：2026-03-04T11:30:00+08:00。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询的结束时间。查询时间范围（EndTime - StartTime）需小于等于 31 天。</p><p>参数格式：2026-03-04T11:30:00+08:00。</p>
 * @method array getFilters() 获取<p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 appid 下所有被封堵过的资源列表。详细的过滤条件如下：</p><ul><li> Resource：可按照被封堵的 IP 或者被封堵的资源六段式进行过滤；</li><li> Status：可按照被封堵的资源状态进行过滤。</li></ul><p>当 Filters.Name 取值为 Status 时，Filters.Values 取值有：</p><ul><li>Blocked：已封堵；</li><li>Unblocking：解封中；</li><li>Unblocked：已解封。</li></ul>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 appid 下所有被封堵过的资源列表。详细的过滤条件如下：</p><ul><li> Resource：可按照被封堵的 IP 或者被封堵的资源六段式进行过滤；</li><li> Status：可按照被封堵的资源状态进行过滤。</li></ul><p>当 Filters.Name 取值为 Status 时，Filters.Values 取值有：</p><ul><li>Blocked：已封堵；</li><li>Unblocking：解封中；</li><li>Unblocked：已解封。</li></ul>
 * @method integer getLimit() 获取<p>分页查询限制数，最大值为 100。</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询限制数，最大值为 100。</p><p>默认值：20</p>
 * @method integer getOffset() 获取<p>分页查询偏移量。</p><p>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询偏移量。</p><p>默认值：0</p>
 */
class DescribeDDoSBlockRecordsRequest extends AbstractModel
{
    /**
     * @var string <p>查询的起始时间。最高支持近一年的数据查询。</p><p>参数格式：2026-02-04T11:30:00+08:00。</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询的结束时间。查询时间范围（EndTime - StartTime）需小于等于 31 天。</p><p>参数格式：2026-03-04T11:30:00+08:00。</p>
     */
    public $EndTime;

    /**
     * @var array <p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 appid 下所有被封堵过的资源列表。详细的过滤条件如下：</p><ul><li> Resource：可按照被封堵的 IP 或者被封堵的资源六段式进行过滤；</li><li> Status：可按照被封堵的资源状态进行过滤。</li></ul><p>当 Filters.Name 取值为 Status 时，Filters.Values 取值有：</p><ul><li>Blocked：已封堵；</li><li>Unblocking：解封中；</li><li>Unblocked：已解封。</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>分页查询限制数，最大值为 100。</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页查询偏移量。</p><p>默认值：0</p>
     */
    public $Offset;

    /**
     * @param string $StartTime <p>查询的起始时间。最高支持近一年的数据查询。</p><p>参数格式：2026-02-04T11:30:00+08:00。</p>
     * @param string $EndTime <p>查询的结束时间。查询时间范围（EndTime - StartTime）需小于等于 31 天。</p><p>参数格式：2026-03-04T11:30:00+08:00。</p>
     * @param array $Filters <p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 appid 下所有被封堵过的资源列表。详细的过滤条件如下：</p><ul><li> Resource：可按照被封堵的 IP 或者被封堵的资源六段式进行过滤；</li><li> Status：可按照被封堵的资源状态进行过滤。</li></ul><p>当 Filters.Name 取值为 Status 时，Filters.Values 取值有：</p><ul><li>Blocked：已封堵；</li><li>Unblocking：解封中；</li><li>Unblocked：已解封。</li></ul>
     * @param integer $Limit <p>分页查询限制数，最大值为 100。</p><p>默认值：20</p>
     * @param integer $Offset <p>分页查询偏移量。</p><p>默认值：0</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
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
    }
}
