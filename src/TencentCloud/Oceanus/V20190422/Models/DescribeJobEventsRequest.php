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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobEvents请求参数结构体
 *
 * @method string getJobId() 获取<p>作业的 ID</p>
 * @method void setJobId(string $JobId) 设置<p>作业的 ID</p>
 * @method integer getStartTimestamp() 获取<p>筛选条件：起始 Unix 时间戳（秒）</p>
 * @method void setStartTimestamp(integer $StartTimestamp) 设置<p>筛选条件：起始 Unix 时间戳（秒）</p>
 * @method integer getEndTimestamp() 获取<p>筛选条件：结束 Unix 时间戳（秒）</p>
 * @method void setEndTimestamp(integer $EndTimestamp) 设置<p>筛选条件：结束 Unix 时间戳（秒）</p>
 * @method array getTypes() 获取<p>事件类型。如果不传则返回所有类型的数据</p>
 * @method void setTypes(array $Types) 设置<p>事件类型。如果不传则返回所有类型的数据</p>
 * @method array getRunningOrderIds() 获取<p>运行实例 ID 数组</p>
 * @method void setRunningOrderIds(array $RunningOrderIds) 设置<p>运行实例 ID 数组</p>
 * @method string getWorkSpaceId() 获取<p>工作空间 SerialId</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 SerialId</p>
 * @method integer getLimit() 获取<p>返回条数</p>
 * @method void setLimit(integer $Limit) 设置<p>返回条数</p>
 * @method integer getOffset() 获取<p>起始偏移个数</p>
 * @method void setOffset(integer $Offset) 设置<p>起始偏移个数</p>
 */
class DescribeJobEventsRequest extends AbstractModel
{
    /**
     * @var string <p>作业的 ID</p>
     */
    public $JobId;

    /**
     * @var integer <p>筛选条件：起始 Unix 时间戳（秒）</p>
     */
    public $StartTimestamp;

    /**
     * @var integer <p>筛选条件：结束 Unix 时间戳（秒）</p>
     */
    public $EndTimestamp;

    /**
     * @var array <p>事件类型。如果不传则返回所有类型的数据</p>
     */
    public $Types;

    /**
     * @var array <p>运行实例 ID 数组</p>
     */
    public $RunningOrderIds;

    /**
     * @var string <p>工作空间 SerialId</p>
     */
    public $WorkSpaceId;

    /**
     * @var integer <p>返回条数</p>
     */
    public $Limit;

    /**
     * @var integer <p>起始偏移个数</p>
     */
    public $Offset;

    /**
     * @param string $JobId <p>作业的 ID</p>
     * @param integer $StartTimestamp <p>筛选条件：起始 Unix 时间戳（秒）</p>
     * @param integer $EndTimestamp <p>筛选条件：结束 Unix 时间戳（秒）</p>
     * @param array $Types <p>事件类型。如果不传则返回所有类型的数据</p>
     * @param array $RunningOrderIds <p>运行实例 ID 数组</p>
     * @param string $WorkSpaceId <p>工作空间 SerialId</p>
     * @param integer $Limit <p>返回条数</p>
     * @param integer $Offset <p>起始偏移个数</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
