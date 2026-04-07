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
 * DescribeStreamPackageLinearAssemblyChannelAlerts请求参数结构体
 *
 * @method string getChannelId() 获取频道ID。
 * @method void setChannelId(string $ChannelId) 设置频道ID。
 * @method integer getStartTime() 获取查询开始时间，Unix时间戳，支持最近七天的查询。
 * @method void setStartTime(integer $StartTime) 设置查询开始时间，Unix时间戳，支持最近七天的查询。
 * @method integer getEndTime() 获取查询结束时间，Unix时间戳，支持最近七天的查询。
 * @method void setEndTime(integer $EndTime) 设置查询结束时间，Unix时间戳，支持最近七天的查询。
 */
class DescribeStreamPackageLinearAssemblyChannelAlertsRequest extends AbstractModel
{
    /**
     * @var string 频道ID。
     */
    public $ChannelId;

    /**
     * @var integer 查询开始时间，Unix时间戳，支持最近七天的查询。
     */
    public $StartTime;

    /**
     * @var integer 查询结束时间，Unix时间戳，支持最近七天的查询。
     */
    public $EndTime;

    /**
     * @param string $ChannelId 频道ID。
     * @param integer $StartTime 查询开始时间，Unix时间戳，支持最近七天的查询。
     * @param integer $EndTime 查询结束时间，Unix时间戳，支持最近七天的查询。
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
