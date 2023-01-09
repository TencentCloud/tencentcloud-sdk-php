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
 * ApplyChorus请求参数结构体
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method string getRoomId() 获取房间号。
 * @method void setRoomId(string $RoomId) 设置房间号。
 * @method string getMusicId() 获取歌曲 Id。
 * @method void setMusicId(string $MusicId) 设置歌曲 Id。
 * @method integer getMaxChorusNum() 获取最大合唱人数，默认值为 8，最大值为 20。
 * @method void setMaxChorusNum(integer $MaxChorusNum) 设置最大合唱人数，默认值为 8，最大值为 20。
 * @method array getChorusUserIds() 获取合唱用户标识列表。
 * @method void setChorusUserIds(array $ChorusUserIds) 设置合唱用户标识列表。
 */
class ApplyChorusRequest extends AbstractModel
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
     * @var string 房间号。
     */
    public $RoomId;

    /**
     * @var string 歌曲 Id。
     */
    public $MusicId;

    /**
     * @var integer 最大合唱人数，默认值为 8，最大值为 20。
     */
    public $MaxChorusNum;

    /**
     * @var array 合唱用户标识列表。
     */
    public $ChorusUserIds;

    /**
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param string $RoomId 房间号。
     * @param string $MusicId 歌曲 Id。
     * @param integer $MaxChorusNum 最大合唱人数，默认值为 8，最大值为 20。
     * @param array $ChorusUserIds 合唱用户标识列表。
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("MusicId",$param) and $param["MusicId"] !== null) {
            $this->MusicId = $param["MusicId"];
        }

        if (array_key_exists("MaxChorusNum",$param) and $param["MaxChorusNum"] !== null) {
            $this->MaxChorusNum = $param["MaxChorusNum"];
        }

        if (array_key_exists("ChorusUserIds",$param) and $param["ChorusUserIds"] !== null) {
            $this->ChorusUserIds = $param["ChorusUserIds"];
        }
    }
}
