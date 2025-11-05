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
 * DescribeLifecycleDataTask请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。须早于 EndTime ，仅支持查询最近3个月内的任务数据。
 * @method void setStartTime(string $StartTime) 设置开始时间。须早于 EndTime ，仅支持查询最近3个月内的任务数据。
 * @method string getEndTime() 获取结束时间。须晚于 StartTime ，仅支持查询最近3个月内的任务数据。
 * @method void setEndTime(string $EndTime) 设置结束时间。须晚于 StartTime ，仅支持查询最近3个月内的任务数据。
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method integer getOffset() 获取Offset 分页码	
 * @method void setOffset(integer $Offset) 设置Offset 分页码	
 * @method integer getLimit() 获取Limit 页面大小	
 * @method void setLimit(integer $Limit) 设置Limit 页面大小	
 * @method array getFilters() 获取过滤条件，TaskName，FileSystemId，Type
 * @method void setFilters(array $Filters) 设置过滤条件，TaskName，FileSystemId，Type
 * @method string getCfsVersion() 获取文件系统版本；v3.1: pcfs/hifs v4.0:Turbo
 * @method void setCfsVersion(string $CfsVersion) 设置文件系统版本；v3.1: pcfs/hifs v4.0:Turbo
 */
class DescribeLifecycleDataTaskRequest extends AbstractModel
{
    /**
     * @var string 开始时间。须早于 EndTime ，仅支持查询最近3个月内的任务数据。
     */
    public $StartTime;

    /**
     * @var string 结束时间。须晚于 StartTime ，仅支持查询最近3个月内的任务数据。
     */
    public $EndTime;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var integer Offset 分页码	
     */
    public $Offset;

    /**
     * @var integer Limit 页面大小	
     */
    public $Limit;

    /**
     * @var array 过滤条件，TaskName，FileSystemId，Type
     */
    public $Filters;

    /**
     * @var string 文件系统版本；v3.1: pcfs/hifs v4.0:Turbo
     */
    public $CfsVersion;

    /**
     * @param string $StartTime 开始时间。须早于 EndTime ，仅支持查询最近3个月内的任务数据。
     * @param string $EndTime 结束时间。须晚于 StartTime ，仅支持查询最近3个月内的任务数据。
     * @param string $TaskId 任务ID
     * @param integer $Offset Offset 分页码	
     * @param integer $Limit Limit 页面大小	
     * @param array $Filters 过滤条件，TaskName，FileSystemId，Type
     * @param string $CfsVersion 文件系统版本；v3.1: pcfs/hifs v4.0:Turbo
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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

        if (array_key_exists("CfsVersion",$param) and $param["CfsVersion"] !== null) {
            $this->CfsVersion = $param["CfsVersion"];
        }
    }
}
