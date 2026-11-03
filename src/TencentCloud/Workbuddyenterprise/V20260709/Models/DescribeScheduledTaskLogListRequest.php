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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScheduledTaskLogList请求参数结构体
 *
 * @method string getTaskId() 获取<p>任务 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
 * @method integer getOffset() 获取<p>偏移量，从 0 开始</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，从 0 开始</p>
 * @method integer getLimit() 获取<p>返回数量，缺省为 20，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，缺省为 20，最大 100</p>
 * @method boolean getWithStats() 获取<p>是否返回聚合统计（Stats）</p>
 * @method void setWithStats(boolean $WithStats) 设置<p>是否返回聚合统计（Stats）</p>
 * @method array getFilters() 获取<p>过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系</p>
 */
class DescribeScheduledTaskLogListRequest extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>偏移量，从 0 开始</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，缺省为 20，最大 100</p>
     */
    public $Limit;

    /**
     * @var boolean <p>是否返回聚合统计（Stats）</p>
     */
    public $WithStats;

    /**
     * @var array <p>过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系</p>
     */
    public $Filters;

    /**
     * @param string $TaskId <p>任务 ID</p>
     * @param integer $Offset <p>偏移量，从 0 开始</p>
     * @param integer $Limit <p>返回数量，缺省为 20，最大 100</p>
     * @param boolean $WithStats <p>是否返回聚合统计（Stats）</p>
     * @param array $Filters <p>过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("WithStats",$param) and $param["WithStats"] !== null) {
            $this->WithStats = $param["WithStats"];
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
