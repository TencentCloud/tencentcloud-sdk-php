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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartStreamIngest请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和TRTC的房间所对应的SdkAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和TRTC的房间所对应的SdkAppId相同。
 * @method string getRoomId() 获取TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，录制的TRTC房间所对应的RoomId。
 * @method void setRoomId(string $RoomId) 设置TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，录制的TRTC房间所对应的RoomId。
 * @method integer getRoomIdType() 获取TRTC房间号的类型。
【*注意】必须和录制的房间所对应的RoomId类型相同:
0: 字符串类型的RoomId
1: 32位整型的RoomId（默认）
 * @method void setRoomIdType(integer $RoomIdType) 设置TRTC房间号的类型。
【*注意】必须和录制的房间所对应的RoomId类型相同:
0: 字符串类型的RoomId
1: 32位整型的RoomId（默认）
 * @method string getUserId() 获取输入在线媒体流机器人的UserId，用于进房发起拉流转推任务。
 * @method void setUserId(string $UserId) 设置输入在线媒体流机器人的UserId，用于进房发起拉流转推任务。
 * @method string getUserSig() 获取输入在线媒体流机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
 * @method void setUserSig(string $UserSig) 设置输入在线媒体流机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
 * @method array getSourceUrl() 获取【本字段已废弃，请使用 StreamUrl 字段】源流URL，支持一个地址。
 * @method void setSourceUrl(array $SourceUrl) 设置【本字段已废弃，请使用 StreamUrl 字段】源流URL，支持一个地址。
 * @method string getPrivateMapKey() 获取TRTC房间权限加密串，只有在TRTC控制台启用了高级权限控制的时候需要携带，在TRTC控制台如果开启高级权限控制后，TRTC 的后台服务系统会校验一个叫做 [PrivateMapKey] 的“权限票据”，权限票据中包含了一个加密后的 RoomId 和一个加密后的“权限位列表”。由于 PrivateMapKey 中包含 RoomId，所以只提供了 UserSig 没有提供 PrivateMapKey 时，并不能进入指定的房间。
 * @method void setPrivateMapKey(string $PrivateMapKey) 设置TRTC房间权限加密串，只有在TRTC控制台启用了高级权限控制的时候需要携带，在TRTC控制台如果开启高级权限控制后，TRTC 的后台服务系统会校验一个叫做 [PrivateMapKey] 的“权限票据”，权限票据中包含了一个加密后的 RoomId 和一个加密后的“权限位列表”。由于 PrivateMapKey 中包含 RoomId，所以只提供了 UserSig 没有提供 PrivateMapKey 时，并不能进入指定的房间。
 * @method VideoEncodeParams getVideoEncodeParams() 获取视频编码参数。可选，如果不填，保持原始流的参数。
 * @method void setVideoEncodeParams(VideoEncodeParams $VideoEncodeParams) 设置视频编码参数。可选，如果不填，保持原始流的参数。
 * @method AudioEncodeParams getAudioEncodeParams() 获取音频编码参数。可选，如果不填，保持原始流的参数。
 * @method void setAudioEncodeParams(AudioEncodeParams $AudioEncodeParams) 设置音频编码参数。可选，如果不填，保持原始流的参数。
 * @method string getStreamUrl() 获取源流URL。历史原因本字段【必填】。
 * @method void setStreamUrl(string $StreamUrl) 设置源流URL。历史原因本字段【必填】。
 */
class StartStreamIngestRequest extends AbstractModel
{
    /**
     * @var integer TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和TRTC的房间所对应的SdkAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，录制的TRTC房间所对应的RoomId。
     */
    public $RoomId;

    /**
     * @var integer TRTC房间号的类型。
【*注意】必须和录制的房间所对应的RoomId类型相同:
0: 字符串类型的RoomId
1: 32位整型的RoomId（默认）
     */
    public $RoomIdType;

    /**
     * @var string 输入在线媒体流机器人的UserId，用于进房发起拉流转推任务。
     */
    public $UserId;

    /**
     * @var string 输入在线媒体流机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
     */
    public $UserSig;

    /**
     * @var array 【本字段已废弃，请使用 StreamUrl 字段】源流URL，支持一个地址。
     */
    public $SourceUrl;

    /**
     * @var string TRTC房间权限加密串，只有在TRTC控制台启用了高级权限控制的时候需要携带，在TRTC控制台如果开启高级权限控制后，TRTC 的后台服务系统会校验一个叫做 [PrivateMapKey] 的“权限票据”，权限票据中包含了一个加密后的 RoomId 和一个加密后的“权限位列表”。由于 PrivateMapKey 中包含 RoomId，所以只提供了 UserSig 没有提供 PrivateMapKey 时，并不能进入指定的房间。
     */
    public $PrivateMapKey;

    /**
     * @var VideoEncodeParams 视频编码参数。可选，如果不填，保持原始流的参数。
     */
    public $VideoEncodeParams;

    /**
     * @var AudioEncodeParams 音频编码参数。可选，如果不填，保持原始流的参数。
     */
    public $AudioEncodeParams;

    /**
     * @var string 源流URL。历史原因本字段【必填】。
     */
    public $StreamUrl;

    /**
     * @param integer $SdkAppId TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和TRTC的房间所对应的SdkAppId相同。
     * @param string $RoomId TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，录制的TRTC房间所对应的RoomId。
     * @param integer $RoomIdType TRTC房间号的类型。
【*注意】必须和录制的房间所对应的RoomId类型相同:
0: 字符串类型的RoomId
1: 32位整型的RoomId（默认）
     * @param string $UserId 输入在线媒体流机器人的UserId，用于进房发起拉流转推任务。
     * @param string $UserSig 输入在线媒体流机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
     * @param array $SourceUrl 【本字段已废弃，请使用 StreamUrl 字段】源流URL，支持一个地址。
     * @param string $PrivateMapKey TRTC房间权限加密串，只有在TRTC控制台启用了高级权限控制的时候需要携带，在TRTC控制台如果开启高级权限控制后，TRTC 的后台服务系统会校验一个叫做 [PrivateMapKey] 的“权限票据”，权限票据中包含了一个加密后的 RoomId 和一个加密后的“权限位列表”。由于 PrivateMapKey 中包含 RoomId，所以只提供了 UserSig 没有提供 PrivateMapKey 时，并不能进入指定的房间。
     * @param VideoEncodeParams $VideoEncodeParams 视频编码参数。可选，如果不填，保持原始流的参数。
     * @param AudioEncodeParams $AudioEncodeParams 音频编码参数。可选，如果不填，保持原始流的参数。
     * @param string $StreamUrl 源流URL。历史原因本字段【必填】。
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

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("SourceUrl",$param) and $param["SourceUrl"] !== null) {
            $this->SourceUrl = $param["SourceUrl"];
        }

        if (array_key_exists("PrivateMapKey",$param) and $param["PrivateMapKey"] !== null) {
            $this->PrivateMapKey = $param["PrivateMapKey"];
        }

        if (array_key_exists("VideoEncodeParams",$param) and $param["VideoEncodeParams"] !== null) {
            $this->VideoEncodeParams = new VideoEncodeParams();
            $this->VideoEncodeParams->deserialize($param["VideoEncodeParams"]);
        }

        if (array_key_exists("AudioEncodeParams",$param) and $param["AudioEncodeParams"] !== null) {
            $this->AudioEncodeParams = new AudioEncodeParams();
            $this->AudioEncodeParams->deserialize($param["AudioEncodeParams"]);
        }

        if (array_key_exists("StreamUrl",$param) and $param["StreamUrl"] !== null) {
            $this->StreamUrl = $param["StreamUrl"];
        }
    }
}
