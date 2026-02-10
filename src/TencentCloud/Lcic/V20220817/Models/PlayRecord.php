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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 信令录制视频观看记录详情
 *
 * @method integer getRoomId() 获取<p>房间ID。</p>
 * @method void setRoomId(integer $RoomId) 设置<p>房间ID。</p>
 * @method string getUserId() 获取<p>用户ID。</p>
 * @method void setUserId(string $UserId) 设置<p>用户ID。</p>
 * @method string getSessionId() 获取<p>单次播放会话ID。</p>
 * @method void setSessionId(string $SessionId) 设置<p>单次播放会话ID。</p>
 * @method integer getPlayBeginTime() 获取<p>播放开始时间，unix时间戳（秒）。</p>
 * @method void setPlayBeginTime(integer $PlayBeginTime) 设置<p>播放开始时间，unix时间戳（秒）。</p>
 * @method integer getPlayEndTime() 获取<p>播放结束时间，unix时间戳（秒）。</p>
 * @method void setPlayEndTime(integer $PlayEndTime) 设置<p>播放结束时间，unix时间戳（秒）。</p>
 * @method integer getDuration() 获取<p>播放时长（毫秒）。</p>
 * @method void setDuration(integer $Duration) 设置<p>播放时长（毫秒）。</p>
 */
class PlayRecord extends AbstractModel
{
    /**
     * @var integer <p>房间ID。</p>
     */
    public $RoomId;

    /**
     * @var string <p>用户ID。</p>
     */
    public $UserId;

    /**
     * @var string <p>单次播放会话ID。</p>
     */
    public $SessionId;

    /**
     * @var integer <p>播放开始时间，unix时间戳（秒）。</p>
     */
    public $PlayBeginTime;

    /**
     * @var integer <p>播放结束时间，unix时间戳（秒）。</p>
     */
    public $PlayEndTime;

    /**
     * @var integer <p>播放时长（毫秒）。</p>
     */
    public $Duration;

    /**
     * @param integer $RoomId <p>房间ID。</p>
     * @param string $UserId <p>用户ID。</p>
     * @param string $SessionId <p>单次播放会话ID。</p>
     * @param integer $PlayBeginTime <p>播放开始时间，unix时间戳（秒）。</p>
     * @param integer $PlayEndTime <p>播放结束时间，unix时间戳（秒）。</p>
     * @param integer $Duration <p>播放时长（毫秒）。</p>
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("PlayBeginTime",$param) and $param["PlayBeginTime"] !== null) {
            $this->PlayBeginTime = $param["PlayBeginTime"];
        }

        if (array_key_exists("PlayEndTime",$param) and $param["PlayEndTime"] !== null) {
            $this->PlayEndTime = $param["PlayEndTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
