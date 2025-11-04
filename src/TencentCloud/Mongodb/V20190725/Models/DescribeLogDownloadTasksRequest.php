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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogDownloadTasks请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method integer getLimit() 获取查询条数
 * @method void setLimit(integer $Limit) 设置查询条数
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method string getStartTime() 获取下载任务的开始时间
 * @method void setStartTime(string $StartTime) 设置下载任务的开始时间
 * @method string getEndTime() 获取下载任务的结束时间
 * @method void setEndTime(string $EndTime) 设置下载任务的结束时间
 */
class DescribeLogDownloadTasksRequest extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var integer 查询条数
     */
    public $Limit;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var string 下载任务的开始时间
     */
    public $StartTime;

    /**
     * @var string 下载任务的结束时间
     */
    public $EndTime;

    /**
     * @param string $InstanceId 实例 ID
     * @param integer $Limit 查询条数
     * @param integer $Offset 页码
     * @param string $StartTime 下载任务的开始时间
     * @param string $EndTime 下载任务的结束时间
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
