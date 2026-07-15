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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageTasks请求参数结构体
 *
 * @method string getStatus() 获取<p>任务状态过滤条件。</p>
 * @method void setStatus(string $Status) 设置<p>任务状态过滤条件。</p>
 * @method integer getLimit() 获取<p>返回记录条数。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回记录条数。</p>
 * @method string getScrollToken() 获取<p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
 * @method void setScrollToken(string $ScrollToken) 设置<p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
 * @method string getStartTime() 获取<p>任务开始时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setStartTime(string $StartTime) 设置<p>任务开始时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getEndTime() 获取<p>任务结束时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setEndTime(string $EndTime) 设置<p>任务结束时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method boolean getSubTaskHasFailed() 获取<p>筛选子任务状态。</p>
 * @method void setSubTaskHasFailed(boolean $SubTaskHasFailed) 设置<p>筛选子任务状态。</p>
 */
class DescribeImageTasksRequest extends AbstractModel
{
    /**
     * @var string <p>任务状态过滤条件。</p>
     */
    public $Status;

    /**
     * @var integer <p>返回记录条数。</p>
     */
    public $Limit;

    /**
     * @var string <p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
     */
    public $ScrollToken;

    /**
     * @var string <p>任务开始时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $StartTime;

    /**
     * @var string <p>任务结束时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $EndTime;

    /**
     * @var boolean <p>筛选子任务状态。</p>
     */
    public $SubTaskHasFailed;

    /**
     * @param string $Status <p>任务状态过滤条件。</p>
     * @param integer $Limit <p>返回记录条数。</p>
     * @param string $ScrollToken <p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
     * @param string $StartTime <p>任务开始时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $EndTime <p>任务结束时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     * @param boolean $SubTaskHasFailed <p>筛选子任务状态。</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubTaskHasFailed",$param) and $param["SubTaskHasFailed"] !== null) {
            $this->SubTaskHasFailed = $param["SubTaskHasFailed"];
        }
    }
}
