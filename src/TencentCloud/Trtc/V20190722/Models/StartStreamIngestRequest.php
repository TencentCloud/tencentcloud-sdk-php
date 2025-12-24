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
 * @method string getStreamUrl() 获取源流URL【必填】。如果是视频流，分辨率请保持不变。
 * @method void setStreamUrl(string $StreamUrl) 设置源流URL【必填】。如果是视频流，分辨率请保持不变。
 * @method string getPrivateMapKey() 获取TRTC房间权限加密串，只有在TRTC控制台启用了高级权限控制的时候需要携带，在TRTC控制台如果开启高级权限控制后，TRTC 的后台服务系统会校验一个叫做 [PrivateMapKey] 的“权限票据”，权限票据中包含了一个加密后的 RoomId 和一个加密后的“权限位列表”。由于 PrivateMapKey 中包含 RoomId，所以只提供了 UserSig 没有提供 PrivateMapKey 时，并不能进入指定的房间。
 * @method void setPrivateMapKey(string $PrivateMapKey) 设置TRTC房间权限加密串，只有在TRTC控制台启用了高级权限控制的时候需要携带，在TRTC控制台如果开启高级权限控制后，TRTC 的后台服务系统会校验一个叫做 [PrivateMapKey] 的“权限票据”，权限票据中包含了一个加密后的 RoomId 和一个加密后的“权限位列表”。由于 PrivateMapKey 中包含 RoomId，所以只提供了 UserSig 没有提供 PrivateMapKey 时，并不能进入指定的房间。
 * @method VideoEncodeParams getVideoEncodeParams() 获取【本字段已废弃】视频编码参数。可选，如果不填，保持原始流的参数。
 * @method void setVideoEncodeParams(VideoEncodeParams $VideoEncodeParams) 设置【本字段已废弃】视频编码参数。可选，如果不填，保持原始流的参数。
 * @method AudioEncodeParams getAudioEncodeParams() 获取【本字段已废弃】音频编码参数。可选，如果不填，保持原始流的参数。
 * @method void setAudioEncodeParams(AudioEncodeParams $AudioEncodeParams) 设置【本字段已废弃】音频编码参数。可选，如果不填，保持原始流的参数。
 * @method array getSourceUrl() 获取【本字段已废弃，请使用 StreamUrl 字段】源流URL，支持一个地址。
 * @method void setSourceUrl(array $SourceUrl) 设置【本字段已废弃，请使用 StreamUrl 字段】源流URL，支持一个地址。
 * @method integer getSeekSecond() 获取指定视频从某个秒时间戳播放
 * @method void setSeekSecond(integer $SeekSecond) 设置指定视频从某个秒时间戳播放
 * @method boolean getAutoPush() 获取开启自动旁路推流，请确认控制台已经开启该功能。
 * @method void setAutoPush(boolean $AutoPush) 设置开启自动旁路推流，请确认控制台已经开启该功能。
 * @method integer getRepeatNum() 获取循环播放次数, 取值范围[-1, 1000],  默认1次。
 - 0 无效值
 - -1 循环播放, 需要主动调用停止接口或设置MaxDuration

 * @method void setRepeatNum(integer $RepeatNum) 设置循环播放次数, 取值范围[-1, 1000],  默认1次。
 - 0 无效值
 - -1 循环播放, 需要主动调用停止接口或设置MaxDuration

 * @method integer getMaxDuration() 获取循环播放最大时长,仅支持RepeatNum设置-1时生效，取值范围[1, 10080]，单位分钟。
 * @method void setMaxDuration(integer $MaxDuration) 设置循环播放最大时长,仅支持RepeatNum设置-1时生效，取值范围[1, 10080]，单位分钟。
 * @method integer getVolume() 获取音量，取值范围[0, 100]，默认100，表示原音量。
 * @method void setVolume(integer $Volume) 设置音量，取值范围[0, 100]，默认100，表示原音量。
 * @method boolean getEnableProgress() 获取开启播放进度回调, 默认false，当开启后，播放进度会通过trtc custom data 回调给播放端
 * @method void setEnableProgress(boolean $EnableProgress) 设置开启播放进度回调, 默认false，当开启后，播放进度会通过trtc custom data 回调给播放端
 * @method float getTempo() 获取播放倍速，默认1.0，可取[0.5, 0.75, 1.0, 1.25, 1.5, 1.75, 2.0]
 * @method void setTempo(float $Tempo) 设置播放倍速，默认1.0，可取[0.5, 0.75, 1.0, 1.25, 1.5, 1.75, 2.0]
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
     * @var string 源流URL【必填】。如果是视频流，分辨率请保持不变。
     */
    public $StreamUrl;

    /**
     * @var string TRTC房间权限加密串，只有在TRTC控制台启用了高级权限控制的时候需要携带，在TRTC控制台如果开启高级权限控制后，TRTC 的后台服务系统会校验一个叫做 [PrivateMapKey] 的“权限票据”，权限票据中包含了一个加密后的 RoomId 和一个加密后的“权限位列表”。由于 PrivateMapKey 中包含 RoomId，所以只提供了 UserSig 没有提供 PrivateMapKey 时，并不能进入指定的房间。
     */
    public $PrivateMapKey;

    /**
     * @var VideoEncodeParams 【本字段已废弃】视频编码参数。可选，如果不填，保持原始流的参数。
     * @deprecated
     */
    public $VideoEncodeParams;

    /**
     * @var AudioEncodeParams 【本字段已废弃】音频编码参数。可选，如果不填，保持原始流的参数。
     * @deprecated
     */
    public $AudioEncodeParams;

    /**
     * @var array 【本字段已废弃，请使用 StreamUrl 字段】源流URL，支持一个地址。
     * @deprecated
     */
    public $SourceUrl;

    /**
     * @var integer 指定视频从某个秒时间戳播放
     */
    public $SeekSecond;

    /**
     * @var boolean 开启自动旁路推流，请确认控制台已经开启该功能。
     */
    public $AutoPush;

    /**
     * @var integer 循环播放次数, 取值范围[-1, 1000],  默认1次。
 - 0 无效值
 - -1 循环播放, 需要主动调用停止接口或设置MaxDuration

     */
    public $RepeatNum;

    /**
     * @var integer 循环播放最大时长,仅支持RepeatNum设置-1时生效，取值范围[1, 10080]，单位分钟。
     */
    public $MaxDuration;

    /**
     * @var integer 音量，取值范围[0, 100]，默认100，表示原音量。
     */
    public $Volume;

    /**
     * @var boolean 开启播放进度回调, 默认false，当开启后，播放进度会通过trtc custom data 回调给播放端
     */
    public $EnableProgress;

    /**
     * @var float 播放倍速，默认1.0，可取[0.5, 0.75, 1.0, 1.25, 1.5, 1.75, 2.0]
     */
    public $Tempo;

    /**
     * @param integer $SdkAppId TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和TRTC的房间所对应的SdkAppId相同。
     * @param string $RoomId TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，录制的TRTC房间所对应的RoomId。
     * @param integer $RoomIdType TRTC房间号的类型。
【*注意】必须和录制的房间所对应的RoomId类型相同:
0: 字符串类型的RoomId
1: 32位整型的RoomId（默认）
     * @param string $UserId 输入在线媒体流机器人的UserId，用于进房发起拉流转推任务。
     * @param string $UserSig 输入在线媒体流机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
     * @param string $StreamUrl 源流URL【必填】。如果是视频流，分辨率请保持不变。
     * @param string $PrivateMapKey TRTC房间权限加密串，只有在TRTC控制台启用了高级权限控制的时候需要携带，在TRTC控制台如果开启高级权限控制后，TRTC 的后台服务系统会校验一个叫做 [PrivateMapKey] 的“权限票据”，权限票据中包含了一个加密后的 RoomId 和一个加密后的“权限位列表”。由于 PrivateMapKey 中包含 RoomId，所以只提供了 UserSig 没有提供 PrivateMapKey 时，并不能进入指定的房间。
     * @param VideoEncodeParams $VideoEncodeParams 【本字段已废弃】视频编码参数。可选，如果不填，保持原始流的参数。
     * @param AudioEncodeParams $AudioEncodeParams 【本字段已废弃】音频编码参数。可选，如果不填，保持原始流的参数。
     * @param array $SourceUrl 【本字段已废弃，请使用 StreamUrl 字段】源流URL，支持一个地址。
     * @param integer $SeekSecond 指定视频从某个秒时间戳播放
     * @param boolean $AutoPush 开启自动旁路推流，请确认控制台已经开启该功能。
     * @param integer $RepeatNum 循环播放次数, 取值范围[-1, 1000],  默认1次。
 - 0 无效值
 - -1 循环播放, 需要主动调用停止接口或设置MaxDuration

     * @param integer $MaxDuration 循环播放最大时长,仅支持RepeatNum设置-1时生效，取值范围[1, 10080]，单位分钟。
     * @param integer $Volume 音量，取值范围[0, 100]，默认100，表示原音量。
     * @param boolean $EnableProgress 开启播放进度回调, 默认false，当开启后，播放进度会通过trtc custom data 回调给播放端
     * @param float $Tempo 播放倍速，默认1.0，可取[0.5, 0.75, 1.0, 1.25, 1.5, 1.75, 2.0]
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

        if (array_key_exists("StreamUrl",$param) and $param["StreamUrl"] !== null) {
            $this->StreamUrl = $param["StreamUrl"];
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

        if (array_key_exists("SourceUrl",$param) and $param["SourceUrl"] !== null) {
            $this->SourceUrl = $param["SourceUrl"];
        }

        if (array_key_exists("SeekSecond",$param) and $param["SeekSecond"] !== null) {
            $this->SeekSecond = $param["SeekSecond"];
        }

        if (array_key_exists("AutoPush",$param) and $param["AutoPush"] !== null) {
            $this->AutoPush = $param["AutoPush"];
        }

        if (array_key_exists("RepeatNum",$param) and $param["RepeatNum"] !== null) {
            $this->RepeatNum = $param["RepeatNum"];
        }

        if (array_key_exists("MaxDuration",$param) and $param["MaxDuration"] !== null) {
            $this->MaxDuration = $param["MaxDuration"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("EnableProgress",$param) and $param["EnableProgress"] !== null) {
            $this->EnableProgress = $param["EnableProgress"];
        }

        if (array_key_exists("Tempo",$param) and $param["Tempo"] !== null) {
            $this->Tempo = $param["Tempo"];
        }
    }
}
