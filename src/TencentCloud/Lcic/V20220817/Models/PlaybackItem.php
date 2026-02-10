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
 * 课堂回放信息
 *
 * @method integer getRoomId() 获取<p>房间id</p>
 * @method void setRoomId(integer $RoomId) 设置<p>房间id</p>
 * @method string getPlaybackUrl() 获取<p>回放地址</p>
 * @method void setPlaybackUrl(string $PlaybackUrl) 设置<p>回放地址</p>
 * @method integer getDuration() 获取<p>录制时长</p>
 * @method void setDuration(integer $Duration) 设置<p>录制时长</p>
 * @method integer getCreateTime() 获取<p>录制开始时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>录制开始时间</p>
 */
class PlaybackItem extends AbstractModel
{
    /**
     * @var integer <p>房间id</p>
     */
    public $RoomId;

    /**
     * @var string <p>回放地址</p>
     */
    public $PlaybackUrl;

    /**
     * @var integer <p>录制时长</p>
     */
    public $Duration;

    /**
     * @var integer <p>录制开始时间</p>
     */
    public $CreateTime;

    /**
     * @param integer $RoomId <p>房间id</p>
     * @param string $PlaybackUrl <p>回放地址</p>
     * @param integer $Duration <p>录制时长</p>
     * @param integer $CreateTime <p>录制开始时间</p>
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

        if (array_key_exists("PlaybackUrl",$param) and $param["PlaybackUrl"] !== null) {
            $this->PlaybackUrl = $param["PlaybackUrl"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
