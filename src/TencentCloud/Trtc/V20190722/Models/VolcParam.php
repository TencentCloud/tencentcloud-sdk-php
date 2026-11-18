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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VolcParam 火山引擎(VolcEngineRTC / ByteRTC)房间拉流参数。
 *
 * @method string getAppId() 获取<p>火山引擎 AppID。</p>
 * @method void setAppId(string $AppId) 设置<p>火山引擎 AppID。</p>
 * @method string getRoomId() 获取<p>房间号。</p>
 * @method void setRoomId(string $RoomId) 设置<p>房间号。</p>
 * @method string getToken() 获取<p>进房 Token。</p><p>需要开启鉴权，生成 Token时，注意RoomId 、UserId 需要对应上。详见：https://www.volcengine.com/docs/6348/70121</p>
 * @method void setToken(string $Token) 设置<p>进房 Token。</p><p>需要开启鉴权，生成 Token时，注意RoomId 、UserId 需要对应上。详见：https://www.volcengine.com/docs/6348/70121</p>
 * @method string getUserId() 获取<p>分配给拉流端的UserId。</p>
 * @method void setUserId(string $UserId) 设置<p>分配给拉流端的UserId。</p>
 * @method string getTrustedUserIdList() 获取<p>订阅用户名单。</p><p>当前名单列表为空时，默认为全订阅；当名单列表有用户id,则只会订阅列表中用户。</p>
 * @method void setTrustedUserIdList(string $TrustedUserIdList) 设置<p>订阅用户名单。</p><p>当前名单列表为空时，默认为全订阅；当名单列表有用户id,则只会订阅列表中用户。</p>
 * @method string getUntrustedUserIdList() 获取<p>不订阅用户名单</p>
 * @method void setUntrustedUserIdList(string $UntrustedUserIdList) 设置<p>不订阅用户名单</p>
 */
class VolcParam extends AbstractModel
{
    /**
     * @var string <p>火山引擎 AppID。</p>
     */
    public $AppId;

    /**
     * @var string <p>房间号。</p>
     */
    public $RoomId;

    /**
     * @var string <p>进房 Token。</p><p>需要开启鉴权，生成 Token时，注意RoomId 、UserId 需要对应上。详见：https://www.volcengine.com/docs/6348/70121</p>
     */
    public $Token;

    /**
     * @var string <p>分配给拉流端的UserId。</p>
     */
    public $UserId;

    /**
     * @var string <p>订阅用户名单。</p><p>当前名单列表为空时，默认为全订阅；当名单列表有用户id,则只会订阅列表中用户。</p>
     */
    public $TrustedUserIdList;

    /**
     * @var string <p>不订阅用户名单</p>
     */
    public $UntrustedUserIdList;

    /**
     * @param string $AppId <p>火山引擎 AppID。</p>
     * @param string $RoomId <p>房间号。</p>
     * @param string $Token <p>进房 Token。</p><p>需要开启鉴权，生成 Token时，注意RoomId 、UserId 需要对应上。详见：https://www.volcengine.com/docs/6348/70121</p>
     * @param string $UserId <p>分配给拉流端的UserId。</p>
     * @param string $TrustedUserIdList <p>订阅用户名单。</p><p>当前名单列表为空时，默认为全订阅；当名单列表有用户id,则只会订阅列表中用户。</p>
     * @param string $UntrustedUserIdList <p>不订阅用户名单</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TrustedUserIdList",$param) and $param["TrustedUserIdList"] !== null) {
            $this->TrustedUserIdList = $param["TrustedUserIdList"];
        }

        if (array_key_exists("UntrustedUserIdList",$param) and $param["UntrustedUserIdList"] !== null) {
            $this->UntrustedUserIdList = $param["UntrustedUserIdList"];
        }
    }
}
