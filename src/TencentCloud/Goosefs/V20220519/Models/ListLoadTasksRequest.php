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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListLoadTasks请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取偏移量
 * @method void setLimit(integer $Limit) 设置偏移量
 * @method integer getStartTimestamp() 获取任务创建起始时间戳，默认为3天前：当前时间戳-86400*3
 * @method void setStartTimestamp(integer $StartTimestamp) 设置任务创建起始时间戳，默认为3天前：当前时间戳-86400*3
 * @method integer getEndTimestamp() 获取任务变更时间戳
 * @method void setEndTimestamp(integer $EndTimestamp) 设置任务变更时间戳
 * @method string getState() 获取筛选任务状态，枚举Waiting,Running,Canceled,Completed。默认返回所有任务
 * @method void setState(string $State) 设置筛选任务状态，枚举Waiting,Running,Canceled,Completed。默认返回所有任务
 * @method integer getPriority() 获取筛选优先级任务，默认返回所有任务
 * @method void setPriority(integer $Priority) 设置筛选优先级任务，默认返回所有任务
 */
class ListLoadTasksRequest extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 偏移量
     */
    public $Limit;

    /**
     * @var integer 任务创建起始时间戳，默认为3天前：当前时间戳-86400*3
     */
    public $StartTimestamp;

    /**
     * @var integer 任务变更时间戳
     */
    public $EndTimestamp;

    /**
     * @var string 筛选任务状态，枚举Waiting,Running,Canceled,Completed。默认返回所有任务
     */
    public $State;

    /**
     * @var integer 筛选优先级任务，默认返回所有任务
     */
    public $Priority;

    /**
     * @param string $ClusterId 集群 ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 偏移量
     * @param integer $StartTimestamp 任务创建起始时间戳，默认为3天前：当前时间戳-86400*3
     * @param integer $EndTimestamp 任务变更时间戳
     * @param string $State 筛选任务状态，枚举Waiting,Running,Canceled,Completed。默认返回所有任务
     * @param integer $Priority 筛选优先级任务，默认返回所有任务
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            $this->EndTimestamp = $param["EndTimestamp"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
