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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸身份信息。
 *
 * @method string getFaceId() 获取视频中的人脸 ID。同一个人脸在视频中间隔超过1s时会视作不同 ID。
 * @method void setFaceId(string $FaceId) 设置视频中的人脸 ID。同一个人脸在视频中间隔超过1s时会视作不同 ID。
 * @method string getFaceImage() 获取从视频中截取的人脸示意图。
 * @method void setFaceImage(string $FaceImage) 设置从视频中截取的人脸示意图。
 * @method integer getStartTime() 获取该人脸可对口型区间的起点时间，可作为对口型最佳开始时间。单位：毫秒。
 * @method void setStartTime(integer $StartTime) 设置该人脸可对口型区间的起点时间，可作为对口型最佳开始时间。单位：毫秒。
 * @method integer getEndTime() 获取该人脸可对口型区间的终点时间；注：此结果存在毫秒级误差，会长于实际区间终点。单位：毫秒。
 * @method void setEndTime(integer $EndTime) 设置该人脸可对口型区间的终点时间；注：此结果存在毫秒级误差，会长于实际区间终点。单位：毫秒。
 */
class AigcFaceIdentityInfo extends AbstractModel
{
    /**
     * @var string 视频中的人脸 ID。同一个人脸在视频中间隔超过1s时会视作不同 ID。
     */
    public $FaceId;

    /**
     * @var string 从视频中截取的人脸示意图。
     */
    public $FaceImage;

    /**
     * @var integer 该人脸可对口型区间的起点时间，可作为对口型最佳开始时间。单位：毫秒。
     */
    public $StartTime;

    /**
     * @var integer 该人脸可对口型区间的终点时间；注：此结果存在毫秒级误差，会长于实际区间终点。单位：毫秒。
     */
    public $EndTime;

    /**
     * @param string $FaceId 视频中的人脸 ID。同一个人脸在视频中间隔超过1s时会视作不同 ID。
     * @param string $FaceImage 从视频中截取的人脸示意图。
     * @param integer $StartTime 该人脸可对口型区间的起点时间，可作为对口型最佳开始时间。单位：毫秒。
     * @param integer $EndTime 该人脸可对口型区间的终点时间；注：此结果存在毫秒级误差，会长于实际区间终点。单位：毫秒。
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
        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("FaceImage",$param) and $param["FaceImage"] !== null) {
            $this->FaceImage = $param["FaceImage"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
