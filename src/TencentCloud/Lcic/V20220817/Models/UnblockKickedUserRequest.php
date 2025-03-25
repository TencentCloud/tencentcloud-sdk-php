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
 * UnblockKickedUser请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码平台的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码平台的SdkAppId。
 * @method integer getRoomId() 获取课堂Id。
 * @method void setRoomId(integer $RoomId) 设置课堂Id。
 * @method string getUserId() 获取需要解禁踢出的成员Id。
 * @method void setUserId(string $UserId) 设置需要解禁踢出的成员Id。
 */
class UnblockKickedUserRequest extends AbstractModel
{
    /**
     * @var integer 低代码平台的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var integer 课堂Id。
     */
    public $RoomId;

    /**
     * @var string 需要解禁踢出的成员Id。
     */
    public $UserId;

    /**
     * @param integer $SdkAppId 低代码平台的SdkAppId。
     * @param integer $RoomId 课堂Id。
     * @param string $UserId 需要解禁踢出的成员Id。
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
