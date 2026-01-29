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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoomInfo请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>应用ID，登录<a href="https://console.cloud.tencent.com/gamegme">控制台 - 服务管理</a>创建应用得到的AppID</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>应用ID，登录<a href="https://console.cloud.tencent.com/gamegme">控制台 - 服务管理</a>创建应用得到的AppID</p>
 * @method array getRoomIds() 获取<p>房间号列表，最大不能超过10个（RoomIds、StrRoomIds必须填一个）</p>
 * @method void setRoomIds(array $RoomIds) 设置<p>房间号列表，最大不能超过10个（RoomIds、StrRoomIds必须填一个）</p>
 * @method array getStrRoomIds() 获取<p>字符串类型房间号列表，最大不能超过10个（RoomIds、StrRoomIds必须填一个）</p>
 * @method void setStrRoomIds(array $StrRoomIds) 设置<p>字符串类型房间号列表，最大不能超过10个（RoomIds、StrRoomIds必须填一个）</p>
 */
class DescribeRoomInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>应用ID，登录<a href="https://console.cloud.tencent.com/gamegme">控制台 - 服务管理</a>创建应用得到的AppID</p>
     */
    public $SdkAppId;

    /**
     * @var array <p>房间号列表，最大不能超过10个（RoomIds、StrRoomIds必须填一个）</p>
     */
    public $RoomIds;

    /**
     * @var array <p>字符串类型房间号列表，最大不能超过10个（RoomIds、StrRoomIds必须填一个）</p>
     */
    public $StrRoomIds;

    /**
     * @param integer $SdkAppId <p>应用ID，登录<a href="https://console.cloud.tencent.com/gamegme">控制台 - 服务管理</a>创建应用得到的AppID</p>
     * @param array $RoomIds <p>房间号列表，最大不能超过10个（RoomIds、StrRoomIds必须填一个）</p>
     * @param array $StrRoomIds <p>字符串类型房间号列表，最大不能超过10个（RoomIds、StrRoomIds必须填一个）</p>
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

        if (array_key_exists("RoomIds",$param) and $param["RoomIds"] !== null) {
            $this->RoomIds = $param["RoomIds"];
        }

        if (array_key_exists("StrRoomIds",$param) and $param["StrRoomIds"] !== null) {
            $this->StrRoomIds = $param["StrRoomIds"];
        }
    }
}
