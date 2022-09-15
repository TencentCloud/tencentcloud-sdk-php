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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVRobots请求参数结构体
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method array getRobotIds() 获取机器人Id列表。
 * @method void setRobotIds(array $RobotIds) 设置机器人Id列表。
 * @method array getStatuses() 获取机器人状态，取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>Destroy：销毁</li>
 * @method void setStatuses(array $Statuses) 设置机器人状态，取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>Destroy：销毁</li>
 * @method TimeRange getCreateTime() 获取匹配创建时间在此时间段内的机器人。
<li>包含所指定的头尾时间点。</li>
 * @method void setCreateTime(TimeRange $CreateTime) 设置匹配创建时间在此时间段内的机器人。
<li>包含所指定的头尾时间点。</li>
 * @method integer getOffset() 获取分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method void setOffset(integer $Offset) 设置分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method integer getLimit() 获取分页返回的起始偏移量，默认值：10。
 * @method void setLimit(integer $Limit) 设置分页返回的起始偏移量，默认值：10。
 */
class DescribeKTVRobotsRequest extends AbstractModel
{
    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 用户标识。
     */
    public $UserId;

    /**
     * @var array 机器人Id列表。
     */
    public $RobotIds;

    /**
     * @var array 机器人状态，取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>Destroy：销毁</li>
     */
    public $Statuses;

    /**
     * @var TimeRange 匹配创建时间在此时间段内的机器人。
<li>包含所指定的头尾时间点。</li>
     */
    public $CreateTime;

    /**
     * @var integer 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
     */
    public $Offset;

    /**
     * @var integer 分页返回的起始偏移量，默认值：10。
     */
    public $Limit;

    /**
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param array $RobotIds 机器人Id列表。
     * @param array $Statuses 机器人状态，取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>Destroy：销毁</li>
     * @param TimeRange $CreateTime 匹配创建时间在此时间段内的机器人。
<li>包含所指定的头尾时间点。</li>
     * @param integer $Offset 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
     * @param integer $Limit 分页返回的起始偏移量，默认值：10。
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RobotIds",$param) and $param["RobotIds"] !== null) {
            $this->RobotIds = $param["RobotIds"];
        }

        if (array_key_exists("Statuses",$param) and $param["Statuses"] !== null) {
            $this->Statuses = $param["Statuses"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = new TimeRange();
            $this->CreateTime->deserialize($param["CreateTime"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
