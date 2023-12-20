<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobEvents请求参数结构体
 *
 * @method string getJobId() 获取作业的 ID
 * @method void setJobId(string $JobId) 设置作业的 ID
 * @method integer getStartTimestamp() 获取筛选条件：起始 Unix 时间戳（秒）
 * @method void setStartTimestamp(integer $StartTimestamp) 设置筛选条件：起始 Unix 时间戳（秒）
 * @method integer getEndTimestamp() 获取筛选条件：结束 Unix 时间戳（秒）
 * @method void setEndTimestamp(integer $EndTimestamp) 设置筛选条件：结束 Unix 时间戳（秒）
 * @method array getTypes() 获取事件类型。如果不传则返回所有类型的数据
 * @method void setTypes(array $Types) 设置事件类型。如果不传则返回所有类型的数据
 * @method array getRunningOrderIds() 获取运行实例 ID 数组
 * @method void setRunningOrderIds(array $RunningOrderIds) 设置运行实例 ID 数组
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class DescribeJobEventsRequest extends AbstractModel
{
    /**
     * @var string 作业的 ID
     */
    public $JobId;

    /**
     * @var integer 筛选条件：起始 Unix 时间戳（秒）
     */
    public $StartTimestamp;

    /**
     * @var integer 筛选条件：结束 Unix 时间戳（秒）
     */
    public $EndTimestamp;

    /**
     * @var array 事件类型。如果不传则返回所有类型的数据
     */
    public $Types;

    /**
     * @var array 运行实例 ID 数组
     */
    public $RunningOrderIds;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param string $JobId 作业的 ID
     * @param integer $StartTimestamp 筛选条件：起始 Unix 时间戳（秒）
     * @param integer $EndTimestamp 筛选条件：结束 Unix 时间戳（秒）
     * @param array $Types 事件类型。如果不传则返回所有类型的数据
     * @param array $RunningOrderIds 运行实例 ID 数组
     * @param string $WorkSpaceId 工作空间 SerialId
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            $this->EndTimestamp = $param["EndTimestamp"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("RunningOrderIds",$param) and $param["RunningOrderIds"] !== null) {
            $this->RunningOrderIds = $param["RunningOrderIds"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
