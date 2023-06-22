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
 * DescribeKTVMusicAccompanySegmentUrl请求参数结构体
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method string getMusicId() 获取歌曲 Id 。
 * @method void setMusicId(string $MusicId) 设置歌曲 Id 。
 * @method string getPlayScene() 获取播放场景。默认为Chat
<li>Live：直播</li><li>Chat：语聊</li>
 * @method void setPlayScene(string $PlayScene) 设置播放场景。默认为Chat
<li>Live：直播</li><li>Chat：语聊</li>
 * @method string getRoomId() 获取房间Id
 * @method void setRoomId(string $RoomId) 设置房间Id
 */
class DescribeKTVMusicAccompanySegmentUrlRequest extends AbstractModel
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
     * @var string 歌曲 Id 。
     */
    public $MusicId;

    /**
     * @var string 播放场景。默认为Chat
<li>Live：直播</li><li>Chat：语聊</li>
     */
    public $PlayScene;

    /**
     * @var string 房间Id
     */
    public $RoomId;

    /**
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param string $MusicId 歌曲 Id 。
     * @param string $PlayScene 播放场景。默认为Chat
<li>Live：直播</li><li>Chat：语聊</li>
     * @param string $RoomId 房间Id
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

        if (array_key_exists("MusicId",$param) and $param["MusicId"] !== null) {
            $this->MusicId = $param["MusicId"];
        }

        if (array_key_exists("PlayScene",$param) and $param["PlayScene"] !== null) {
            $this->PlayScene = $param["PlayScene"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
