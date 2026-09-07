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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartLiveAvatarRoom请求参数结构体
 *
 * @method string getRoomId() 获取<p>数字人直播间 ID。</p>
 * @method void setRoomId(string $RoomId) 设置<p>数字人直播间 ID。</p>
 * @method string getComment() 获取<p>目标地址描述。</p>
 * @method void setComment(string $Comment) 设置<p>目标地址描述。</p>
 * @method string getToUrl() 获取<p>推流目标地址。</p>
 * @method void setToUrl(string $ToUrl) 设置<p>推流目标地址。</p>
 * @method string getOperator() 获取<p>操作者。</p>
 * @method void setOperator(string $Operator) 设置<p>操作者。</p>
 * @method string getRoomType() 获取<p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
 * @method void setRoomType(string $RoomType) 设置<p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
 * @method string getSessionProtocol() 获取<p>交互模式下的协议，支持rtmp和trtc，默认是rtmp</p>
 * @method void setSessionProtocol(string $SessionProtocol) 设置<p>交互模式下的协议，支持rtmp和trtc，默认是rtmp</p>
 * @method string getTrtcSdkAppId() 获取<p>使用trtc协议时，在trtc的appid</p>
 * @method void setTrtcSdkAppId(string $TrtcSdkAppId) 设置<p>使用trtc协议时，在trtc的appid</p>
 * @method string getTrtcUserSig() 获取<p>进入房间时需要用UserSign来校验权限</p>
 * @method void setTrtcUserSig(string $TrtcUserSig) 设置<p>进入房间时需要用UserSign来校验权限</p>
 * @method string getTrtcRoomId() 获取<p>要进入的房间</p>
 * @method void setTrtcRoomId(string $TrtcRoomId) 设置<p>要进入的房间</p>
 */
class StartLiveAvatarRoomRequest extends AbstractModel
{
    /**
     * @var string <p>数字人直播间 ID。</p>
     */
    public $RoomId;

    /**
     * @var string <p>目标地址描述。</p>
     */
    public $Comment;

    /**
     * @var string <p>推流目标地址。</p>
     */
    public $ToUrl;

    /**
     * @var string <p>操作者。</p>
     */
    public $Operator;

    /**
     * @var string <p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
     */
    public $RoomType;

    /**
     * @var string <p>交互模式下的协议，支持rtmp和trtc，默认是rtmp</p>
     */
    public $SessionProtocol;

    /**
     * @var string <p>使用trtc协议时，在trtc的appid</p>
     */
    public $TrtcSdkAppId;

    /**
     * @var string <p>进入房间时需要用UserSign来校验权限</p>
     */
    public $TrtcUserSig;

    /**
     * @var string <p>要进入的房间</p>
     */
    public $TrtcRoomId;

    /**
     * @param string $RoomId <p>数字人直播间 ID。</p>
     * @param string $Comment <p>目标地址描述。</p>
     * @param string $ToUrl <p>推流目标地址。</p>
     * @param string $Operator <p>操作者。</p>
     * @param string $RoomType <p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
     * @param string $SessionProtocol <p>交互模式下的协议，支持rtmp和trtc，默认是rtmp</p>
     * @param string $TrtcSdkAppId <p>使用trtc协议时，在trtc的appid</p>
     * @param string $TrtcUserSig <p>进入房间时需要用UserSign来校验权限</p>
     * @param string $TrtcRoomId <p>要进入的房间</p>
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ToUrl",$param) and $param["ToUrl"] !== null) {
            $this->ToUrl = $param["ToUrl"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("RoomType",$param) and $param["RoomType"] !== null) {
            $this->RoomType = $param["RoomType"];
        }

        if (array_key_exists("SessionProtocol",$param) and $param["SessionProtocol"] !== null) {
            $this->SessionProtocol = $param["SessionProtocol"];
        }

        if (array_key_exists("TrtcSdkAppId",$param) and $param["TrtcSdkAppId"] !== null) {
            $this->TrtcSdkAppId = $param["TrtcSdkAppId"];
        }

        if (array_key_exists("TrtcUserSig",$param) and $param["TrtcUserSig"] !== null) {
            $this->TrtcUserSig = $param["TrtcUserSig"];
        }

        if (array_key_exists("TrtcRoomId",$param) and $param["TrtcRoomId"] !== null) {
            $this->TrtcRoomId = $param["TrtcRoomId"];
        }
    }
}
