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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTRTCRealTimeScaleMetricData请求参数结构体
 *
 * @method string getSdkAppId() 获取用户SdkAppId（如：1400xxxxxx）
 * @method void setSdkAppId(string $SdkAppId) 设置用户SdkAppId（如：1400xxxxxx）
 * @method integer getStartTime() 获取开始时间，unix时间戳，单位：秒（查询时间范围根据监控仪表盘功能版本而定，基础版可查近3小时，进阶版可查近12小时）
 * @method void setStartTime(integer $StartTime) 设置开始时间，unix时间戳，单位：秒（查询时间范围根据监控仪表盘功能版本而定，基础版可查近3小时，进阶版可查近12小时）
 * @method integer getEndTime() 获取结束时间，unix时间戳，单位：秒
 * @method void setEndTime(integer $EndTime) 设置结束时间，unix时间戳，单位：秒
 * @method string getRoomId() 获取房间ID
 * @method void setRoomId(string $RoomId) 设置房间ID
 */
class DescribeTRTCRealTimeScaleMetricDataRequest extends AbstractModel
{
    /**
     * @var string 用户SdkAppId（如：1400xxxxxx）
     */
    public $SdkAppId;

    /**
     * @var integer 开始时间，unix时间戳，单位：秒（查询时间范围根据监控仪表盘功能版本而定，基础版可查近3小时，进阶版可查近12小时）
     */
    public $StartTime;

    /**
     * @var integer 结束时间，unix时间戳，单位：秒
     */
    public $EndTime;

    /**
     * @var string 房间ID
     */
    public $RoomId;

    /**
     * @param string $SdkAppId 用户SdkAppId（如：1400xxxxxx）
     * @param integer $StartTime 开始时间，unix时间戳，单位：秒（查询时间范围根据监控仪表盘功能版本而定，基础版可查近3小时，进阶版可查近12小时）
     * @param integer $EndTime 结束时间，unix时间戳，单位：秒
     * @param string $RoomId 房间ID
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
