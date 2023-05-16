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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KickUserFromRoom请求参数结构体
 *
 * @method integer getRoomId() 获取房间Id。
 * @method void setRoomId(integer $RoomId) 设置房间Id。
 * @method integer getSdkAppId() 获取低代码平台的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码平台的SdkAppId。
 * @method string getUserId() 获取需要踢出成员Id
 * @method void setUserId(string $UserId) 设置需要踢出成员Id
 * @method integer getKickType() 获取踢出类型：
1：临时踢出，可以使用Duration参数指定污点时间，污点时间间隔内用户无法进入房间。
2：永久踢出
 * @method void setKickType(integer $KickType) 设置踢出类型：
1：临时踢出，可以使用Duration参数指定污点时间，污点时间间隔内用户无法进入房间。
2：永久踢出
 * @method integer getDuration() 获取污点时间(单位秒)，KickType = 1时生效，默认为0
 * @method void setDuration(integer $Duration) 设置污点时间(单位秒)，KickType = 1时生效，默认为0
 */
class KickUserFromRoomRequest extends AbstractModel
{
    /**
     * @var integer 房间Id。
     */
    public $RoomId;

    /**
     * @var integer 低代码平台的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var string 需要踢出成员Id
     */
    public $UserId;

    /**
     * @var integer 踢出类型：
1：临时踢出，可以使用Duration参数指定污点时间，污点时间间隔内用户无法进入房间。
2：永久踢出
     */
    public $KickType;

    /**
     * @var integer 污点时间(单位秒)，KickType = 1时生效，默认为0
     */
    public $Duration;

    /**
     * @param integer $RoomId 房间Id。
     * @param integer $SdkAppId 低代码平台的SdkAppId。
     * @param string $UserId 需要踢出成员Id
     * @param integer $KickType 踢出类型：
1：临时踢出，可以使用Duration参数指定污点时间，污点时间间隔内用户无法进入房间。
2：永久踢出
     * @param integer $Duration 污点时间(单位秒)，KickType = 1时生效，默认为0
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("KickType",$param) and $param["KickType"] !== null) {
            $this->KickType = $param["KickType"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
