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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventCenterEvents返回参数结构体
 *
 * @method array getEvents() 获取<p>本次查询返回的事件明细或聚合结果列表。无匹配结果时返回空数组。</p>
 * @method void setEvents(array $Events) 设置<p>本次查询返回的事件明细或聚合结果列表。无匹配结果时返回空数组。</p>
 * @method integer getTotalCount() 获取<p>符合查询条件的结果总数，不受 Offset 和 Limit 影响。Raw 模式为去重后的事件总数，Aggregate 模式为聚合结果总数。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>符合查询条件的结果总数，不受 Offset 和 Limit 影响。Raw 模式为去重后的事件总数，Aggregate 模式为聚合结果总数。</p>
 * @method string getStartTime() 获取<p>本次查询实际使用的开始时间，RFC3339 格式，包含该时间点。</p>
 * @method void setStartTime(string $StartTime) 设置<p>本次查询实际使用的开始时间，RFC3339 格式，包含该时间点。</p>
 * @method string getEndTime() 获取<p>本次查询实际使用的结束时间，RFC3339 格式，不包含该时间点。</p>
 * @method void setEndTime(string $EndTime) 设置<p>本次查询实际使用的结束时间，RFC3339 格式，不包含该时间点。</p>
 * @method string getMode() 获取<p>本次查询实际使用的模式。</p><p>枚举值：</p><ul><li>Raw： 明细模式。</li><li>Aggregate： 聚合模式。</li></ul>
 * @method void setMode(string $Mode) 设置<p>本次查询实际使用的模式。</p><p>枚举值：</p><ul><li>Raw： 明细模式。</li><li>Aggregate： 聚合模式。</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEventCenterEventsResponse extends AbstractModel
{
    /**
     * @var array <p>本次查询返回的事件明细或聚合结果列表。无匹配结果时返回空数组。</p>
     */
    public $Events;

    /**
     * @var integer <p>符合查询条件的结果总数，不受 Offset 和 Limit 影响。Raw 模式为去重后的事件总数，Aggregate 模式为聚合结果总数。</p>
     */
    public $TotalCount;

    /**
     * @var string <p>本次查询实际使用的开始时间，RFC3339 格式，包含该时间点。</p>
     */
    public $StartTime;

    /**
     * @var string <p>本次查询实际使用的结束时间，RFC3339 格式，不包含该时间点。</p>
     */
    public $EndTime;

    /**
     * @var string <p>本次查询实际使用的模式。</p><p>枚举值：</p><ul><li>Raw： 明细模式。</li><li>Aggregate： 聚合模式。</li></ul>
     */
    public $Mode;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Events <p>本次查询返回的事件明细或聚合结果列表。无匹配结果时返回空数组。</p>
     * @param integer $TotalCount <p>符合查询条件的结果总数，不受 Offset 和 Limit 影响。Raw 模式为去重后的事件总数，Aggregate 模式为聚合结果总数。</p>
     * @param string $StartTime <p>本次查询实际使用的开始时间，RFC3339 格式，包含该时间点。</p>
     * @param string $EndTime <p>本次查询实际使用的结束时间，RFC3339 格式，不包含该时间点。</p>
     * @param string $Mode <p>本次查询实际使用的模式。</p><p>枚举值：</p><ul><li>Raw： 明细模式。</li><li>Aggregate： 聚合模式。</li></ul>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new EventItem();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
