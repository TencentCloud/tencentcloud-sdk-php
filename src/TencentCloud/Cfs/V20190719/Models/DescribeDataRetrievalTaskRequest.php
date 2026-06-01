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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataRetrievalTask请求参数结构体
 *
 * @method string getStartTime() 获取<p>开始时间。须早于 EndTime ，仅支持查询最近3个月内的任务数据</p><p>参数格式：2024-11-19 10:15:37</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间。须早于 EndTime ，仅支持查询最近3个月内的任务数据</p><p>参数格式：2024-11-19 10:15:37</p>
 * @method string getEndTime() 获取<p>结束时间。须晚于 StartTime ，仅支持查询最近3个月内的任务数据。</p><p>参数格式：2024-10-  19 10:15:37</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间。须晚于 StartTime ，仅支持查询最近3个月内的任务数据。</p><p>参数格式：2024-10-  19 10:15:37</p>
 * @method string getDataRetrievalId() 获取<p>数据检索ID示例值：dataretrieval-123456</p>
 * @method void setDataRetrievalId(string $DataRetrievalId) 设置<p>数据检索ID示例值：dataretrieval-123456</p>
 * @method integer getOffset() 获取<p>分页的偏移量，默认值为0。 示例值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页的偏移量，默认值为0。 示例值：0</p>
 * @method integer getLimit() 获取<p>分页单页限制数目，默认值为20，最大值100。 示例值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>分页单页限制数目，默认值为20，最大值100。 示例值：20</p>
 * @method array getFilters() 获取<p>DataRetrievalTaskID按照【数据检索任务id】进行过滤。类型：String</p>
 * @method void setFilters(array $Filters) 设置<p>DataRetrievalTaskID按照【数据检索任务id】进行过滤。类型：String</p>
 */
class DescribeDataRetrievalTaskRequest extends AbstractModel
{
    /**
     * @var string <p>开始时间。须早于 EndTime ，仅支持查询最近3个月内的任务数据</p><p>参数格式：2024-11-19 10:15:37</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间。须晚于 StartTime ，仅支持查询最近3个月内的任务数据。</p><p>参数格式：2024-10-  19 10:15:37</p>
     */
    public $EndTime;

    /**
     * @var string <p>数据检索ID示例值：dataretrieval-123456</p>
     */
    public $DataRetrievalId;

    /**
     * @var integer <p>分页的偏移量，默认值为0。 示例值：0</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页单页限制数目，默认值为20，最大值100。 示例值：20</p>
     */
    public $Limit;

    /**
     * @var array <p>DataRetrievalTaskID按照【数据检索任务id】进行过滤。类型：String</p>
     */
    public $Filters;

    /**
     * @param string $StartTime <p>开始时间。须早于 EndTime ，仅支持查询最近3个月内的任务数据</p><p>参数格式：2024-11-19 10:15:37</p>
     * @param string $EndTime <p>结束时间。须晚于 StartTime ，仅支持查询最近3个月内的任务数据。</p><p>参数格式：2024-10-  19 10:15:37</p>
     * @param string $DataRetrievalId <p>数据检索ID示例值：dataretrieval-123456</p>
     * @param integer $Offset <p>分页的偏移量，默认值为0。 示例值：0</p>
     * @param integer $Limit <p>分页单页限制数目，默认值为20，最大值100。 示例值：20</p>
     * @param array $Filters <p>DataRetrievalTaskID按照【数据检索任务id】进行过滤。类型：String</p>
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

        if (array_key_exists("DataRetrievalId",$param) and $param["DataRetrievalId"] !== null) {
            $this->DataRetrievalId = $param["DataRetrievalId"];
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
