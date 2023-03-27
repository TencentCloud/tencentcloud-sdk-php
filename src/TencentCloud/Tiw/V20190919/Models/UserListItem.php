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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志查询里返回的白板用户数据
 *
 * @method string getUserId() 获取房间内的用户ID
 * @method void setUserId(string $UserId) 设置房间内的用户ID
 * @method integer getStartTime() 获取用户在查询时间段内最早出现的时间，Unix时间戳，单位毫秒
 * @method void setStartTime(integer $StartTime) 设置用户在查询时间段内最早出现的时间，Unix时间戳，单位毫秒
 * @method integer getEndTime() 获取用户在查询时间段内最晚出现的时间，Unix时间戳，单位毫秒
 * @method void setEndTime(integer $EndTime) 设置用户在查询时间段内最晚出现的时间，Unix时间戳，单位毫秒
 */
class UserListItem extends AbstractModel
{
    /**
     * @var string 房间内的用户ID
     */
    public $UserId;

    /**
     * @var integer 用户在查询时间段内最早出现的时间，Unix时间戳，单位毫秒
     */
    public $StartTime;

    /**
     * @var integer 用户在查询时间段内最晚出现的时间，Unix时间戳，单位毫秒
     */
    public $EndTime;

    /**
     * @param string $UserId 房间内的用户ID
     * @param integer $StartTime 用户在查询时间段内最早出现的时间，Unix时间戳，单位毫秒
     * @param integer $EndTime 用户在查询时间段内最晚出现的时间，Unix时间戳，单位毫秒
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
