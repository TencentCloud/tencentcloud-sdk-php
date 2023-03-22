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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartWhiteboardPush请求参数结构体
 *
 * @method integer getSdkAppId() 获取客户的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置客户的SdkAppId
 * @method integer getRoomId() 获取需要推流的白板房间号，取值范围: (1, 4294967295)。

1. 白板推流默认以RoomId的字符串表达形式作为IM群组的GroupID（比如RoomId为1234，则IM群组的GroupID为"1234"）加群进行信令同步，请在开始推流前确保相应IM群组已创建完成，否则会导致推流失败。
2. 在没有指定TRTCRoomId和TRTCRoomIdStr的情况下，默认会以RoomId作为白板流进行推流的TRTC房间号。
 * @method void setRoomId(integer $RoomId) 设置需要推流的白板房间号，取值范围: (1, 4294967295)。

1. 白板推流默认以RoomId的字符串表达形式作为IM群组的GroupID（比如RoomId为1234，则IM群组的GroupID为"1234"）加群进行信令同步，请在开始推流前确保相应IM群组已创建完成，否则会导致推流失败。
2. 在没有指定TRTCRoomId和TRTCRoomIdStr的情况下，默认会以RoomId作为白板流进行推流的TRTC房间号。
 * @method string getPushUserId() 获取用于白板推流服务进入白板房间的用户ID。在没有额外指定`IMAuthParam`和`TRTCAuthParam`的情况下，这个用户ID同时会用于IM登录、IM加群、TRTC进房推流等操作。
用户ID最大长度不能大于60个字节，该用户ID必须是一个单独的未同时在其他地方使用的用户ID，白板推流服务使用这个用户ID进入房间进行白板音视频推流，若该用户ID和其他地方同时在使用的用户ID重复，会导致白板推流服务与其他使用场景帐号互踢，影响正常推流。
 * @method void setPushUserId(string $PushUserId) 设置用于白板推流服务进入白板房间的用户ID。在没有额外指定`IMAuthParam`和`TRTCAuthParam`的情况下，这个用户ID同时会用于IM登录、IM加群、TRTC进房推流等操作。
用户ID最大长度不能大于60个字节，该用户ID必须是一个单独的未同时在其他地方使用的用户ID，白板推流服务使用这个用户ID进入房间进行白板音视频推流，若该用户ID和其他地方同时在使用的用户ID重复，会导致白板推流服务与其他使用场景帐号互踢，影响正常推流。
 * @method string getPushUserSig() 获取与PushUserId对应的IM签名(usersig)。
 * @method void setPushUserSig(string $PushUserSig) 设置与PushUserId对应的IM签名(usersig)。
 * @method Whiteboard getWhiteboard() 获取白板参数，例如白板宽高、背景颜色等
 * @method void setWhiteboard(Whiteboard $Whiteboard) 设置白板参数，例如白板宽高、背景颜色等
 * @method integer getAutoStopTimeout() 获取自动停止推流超时时间，单位秒，取值范围[300, 259200], 默认值为1800秒。

当白板超过设定时间没有操作的时候，白板推流服务会自动停止白板推流。
 * @method void setAutoStopTimeout(integer $AutoStopTimeout) 设置自动停止推流超时时间，单位秒，取值范围[300, 259200], 默认值为1800秒。

当白板超过设定时间没有操作的时候，白板推流服务会自动停止白板推流。
 * @method boolean getAutoManageBackup() 获取对主白板推流任务进行操作时，是否同时同步操作备份任务
 * @method void setAutoManageBackup(boolean $AutoManageBackup) 设置对主白板推流任务进行操作时，是否同时同步操作备份任务
 * @method WhiteboardPushBackupParam getBackup() 获取备份白板推流相关参数。

指定了备份参数的情况下，白板推流服务会在房间内新增一路白板画面视频流，即同一个房间内会有两路白板画面推流。
 * @method void setBackup(WhiteboardPushBackupParam $Backup) 设置备份白板推流相关参数。

指定了备份参数的情况下，白板推流服务会在房间内新增一路白板画面视频流，即同一个房间内会有两路白板画面推流。
 * @method string getPrivateMapKey() 获取TRTC高级权限控制参数，如果在实时音视频开启了高级权限控制功能，必须提供PrivateMapKey才能保证正常推流。
 * @method void setPrivateMapKey(string $PrivateMapKey) 设置TRTC高级权限控制参数，如果在实时音视频开启了高级权限控制功能，必须提供PrivateMapKey才能保证正常推流。
 * @method integer getVideoFPS() 获取白板推流视频帧率，取值范围[0, 30]，默认20fps
 * @method void setVideoFPS(integer $VideoFPS) 设置白板推流视频帧率，取值范围[0, 30]，默认20fps
 * @method integer getVideoBitrate() 获取白板推流码率， 取值范围[0, 2000]，默认1200kbps。

这里的码率设置是一个参考值，实际推流的时候使用的是动态码率，所以真实码率不会固定为指定值，会在指定值附近波动。
 * @method void setVideoBitrate(integer $VideoBitrate) 设置白板推流码率， 取值范围[0, 2000]，默认1200kbps。

这里的码率设置是一个参考值，实际推流的时候使用的是动态码率，所以真实码率不会固定为指定值，会在指定值附近波动。
 * @method boolean getAutoRecord() 获取在实时音视频云端录制模式选择为 `指定用户录制` 模式的时候是否自动录制白板推流。

默认在实时音视频的云端录制模式选择为 `指定用户录制` 模式的情况下，不会自动进行白板推流录制，如果希望进行白板推流录制，请将此参数设置为true。

如果实时音视频的云端录制模式选择为 `全局自动录制` 模式，可忽略此参数。
 * @method void setAutoRecord(boolean $AutoRecord) 设置在实时音视频云端录制模式选择为 `指定用户录制` 模式的时候是否自动录制白板推流。

默认在实时音视频的云端录制模式选择为 `指定用户录制` 模式的情况下，不会自动进行白板推流录制，如果希望进行白板推流录制，请将此参数设置为true。

如果实时音视频的云端录制模式选择为 `全局自动录制` 模式，可忽略此参数。
 * @method string getUserDefinedRecordId() 获取指定白板推流录制的RecordID，指定的RecordID会用于填充实时音视频云端录制完成后的回调消息中的 "userdefinerecordid" 字段内容，便于您更方便的识别录制回调，以及在点播媒体资源管理中查找相应的录制视频文件。

限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线和连词符。

此字段设置后，不管`AutoRecord`字段取值如何，都将自动进行白板推流录制。

默认RecordId生成规则如下：
urlencode(SdkAppID_RoomID_PushUserID)

例如：
SdkAppID = 12345678，RoomID = 12345，PushUserID = push_user_1
那么：RecordId = 12345678_12345_push_user_1
 * @method void setUserDefinedRecordId(string $UserDefinedRecordId) 设置指定白板推流录制的RecordID，指定的RecordID会用于填充实时音视频云端录制完成后的回调消息中的 "userdefinerecordid" 字段内容，便于您更方便的识别录制回调，以及在点播媒体资源管理中查找相应的录制视频文件。

限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线和连词符。

此字段设置后，不管`AutoRecord`字段取值如何，都将自动进行白板推流录制。

默认RecordId生成规则如下：
urlencode(SdkAppID_RoomID_PushUserID)

例如：
SdkAppID = 12345678，RoomID = 12345，PushUserID = push_user_1
那么：RecordId = 12345678_12345_push_user_1
 * @method boolean getAutoPublish() 获取在实时音视频旁路推流模式选择为`指定用户旁路`模式的时候，是否自动旁路白板推流。

默认在实时音视频的旁路推流模式选择为 `指定用户旁路` 模式的情况下，不会自动旁路白板推流，如果希望旁路白板推流，请将此参数设置为true。

如果实时音视频的旁路推流模式选择为 `全局自动旁路` 模式，可忽略此参数。
 * @method void setAutoPublish(boolean $AutoPublish) 设置在实时音视频旁路推流模式选择为`指定用户旁路`模式的时候，是否自动旁路白板推流。

默认在实时音视频的旁路推流模式选择为 `指定用户旁路` 模式的情况下，不会自动旁路白板推流，如果希望旁路白板推流，请将此参数设置为true。

如果实时音视频的旁路推流模式选择为 `全局自动旁路` 模式，可忽略此参数。
 * @method string getUserDefinedStreamId() 获取指定实时音视频在旁路白板推流时的StreamID，设置之后，您就可以在腾讯云直播 CDN 上通过标准直播方案（FLV或HLS）播放该用户的音视频流。

限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线和连词符。

此字段设置后，不管`AutoPublish`字段取值如何，都将自动旁路白板推流。

默认StreamID生成规则如下：
urlencode(SdkAppID_RoomID_PushUserID_main)

例如：
SdkAppID = 12345678，RoomID = 12345，PushUserID = push_user_1
那么：StreamID = 12345678_12345_push_user_1_main
 * @method void setUserDefinedStreamId(string $UserDefinedStreamId) 设置指定实时音视频在旁路白板推流时的StreamID，设置之后，您就可以在腾讯云直播 CDN 上通过标准直播方案（FLV或HLS）播放该用户的音视频流。

限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线和连词符。

此字段设置后，不管`AutoPublish`字段取值如何，都将自动旁路白板推流。

默认StreamID生成规则如下：
urlencode(SdkAppID_RoomID_PushUserID_main)

例如：
SdkAppID = 12345678，RoomID = 12345，PushUserID = push_user_1
那么：StreamID = 12345678_12345_push_user_1_main
 * @method string getExtraData() 获取内部参数，不需要关注此参数
 * @method void setExtraData(string $ExtraData) 设置内部参数，不需要关注此参数
 * @method integer getTRTCRoomId() 获取TRTC数字类型房间号，取值范围: (1, 4294967295)。

在同时指定了RoomId与TRTCRoomId的情况下，优先使用TRTCRoomId作为白板流进行推流的TRTC房间号。

当指定了TRTCRoomIdStr的情况下，此字段将被忽略。
 * @method void setTRTCRoomId(integer $TRTCRoomId) 设置TRTC数字类型房间号，取值范围: (1, 4294967295)。

在同时指定了RoomId与TRTCRoomId的情况下，优先使用TRTCRoomId作为白板流进行推流的TRTC房间号。

当指定了TRTCRoomIdStr的情况下，此字段将被忽略。
 * @method string getTRTCRoomIdStr() 获取TRTC字符串类型房间号。

在指定了TRTCRoomIdStr的情况下，会优先使用TRTCRoomIdStr作为白板流进行推流的TRTC房间号。
 * @method void setTRTCRoomIdStr(string $TRTCRoomIdStr) 设置TRTC字符串类型房间号。

在指定了TRTCRoomIdStr的情况下，会优先使用TRTCRoomIdStr作为白板流进行推流的TRTC房间号。
 * @method AuthParam getIMAuthParam() 获取IM鉴权信息参数，用于IM鉴权。
当白板信令所使用的IM应用与白板应用的SdkAppId不一致时，可以通过此参数提供对应IM应用鉴权信息。

如果提供了此参数，白板推流服务会优先使用此参数指定的SdkAppId作为白板信令的传输通道，否则使用公共参数中的SdkAppId作为白板信令的传输通道。
 * @method void setIMAuthParam(AuthParam $IMAuthParam) 设置IM鉴权信息参数，用于IM鉴权。
当白板信令所使用的IM应用与白板应用的SdkAppId不一致时，可以通过此参数提供对应IM应用鉴权信息。

如果提供了此参数，白板推流服务会优先使用此参数指定的SdkAppId作为白板信令的传输通道，否则使用公共参数中的SdkAppId作为白板信令的传输通道。
 * @method AuthParam getTRTCAuthParam() 获取TRTC鉴权信息参数，用于TRTC进房推流鉴权。
当需要推流到的TRTC房间所对应的TRTC应用与白板应用的SdkAppId不一致时，可以通过此参数提供对应的TRTC应用鉴权信息。

如果提供了此参数，白板推流服务会优先使用此参数指定的SdkAppId作为白板推流的目标TRTC应用，否则使用公共参数中的SdkAppId作为白板推流的目标TRTC应用。
 * @method void setTRTCAuthParam(AuthParam $TRTCAuthParam) 设置TRTC鉴权信息参数，用于TRTC进房推流鉴权。
当需要推流到的TRTC房间所对应的TRTC应用与白板应用的SdkAppId不一致时，可以通过此参数提供对应的TRTC应用鉴权信息。

如果提供了此参数，白板推流服务会优先使用此参数指定的SdkAppId作为白板推流的目标TRTC应用，否则使用公共参数中的SdkAppId作为白板推流的目标TRTC应用。
 * @method string getTRTCEnterRoomMode() 获取内测参数，需要提前申请白名单进行体验。

指定白板推流时推流用户进TRTC房间的进房模式。默认为 TRTCAppSceneVideoCall

TRTCAppSceneVideoCall - 视频通话场景，即绝大多数时间都是两人或两人以上视频通话的场景，内部编码器和网络协议优化侧重流畅性，降低通话延迟和卡顿率。
TRTCAppSceneLIVE - 直播场景，即绝大多数时间都是一人直播，偶尔有多人视频互动的场景，内部编码器和网络协议优化侧重性能和兼容性，性能和清晰度表现更佳。
 * @method void setTRTCEnterRoomMode(string $TRTCEnterRoomMode) 设置内测参数，需要提前申请白名单进行体验。

指定白板推流时推流用户进TRTC房间的进房模式。默认为 TRTCAppSceneVideoCall

TRTCAppSceneVideoCall - 视频通话场景，即绝大多数时间都是两人或两人以上视频通话的场景，内部编码器和网络协议优化侧重流畅性，降低通话延迟和卡顿率。
TRTCAppSceneLIVE - 直播场景，即绝大多数时间都是一人直播，偶尔有多人视频互动的场景，内部编码器和网络协议优化侧重性能和兼容性，性能和清晰度表现更佳。
 */
class StartWhiteboardPushRequest extends AbstractModel
{
    /**
     * @var integer 客户的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var integer 需要推流的白板房间号，取值范围: (1, 4294967295)。

1. 白板推流默认以RoomId的字符串表达形式作为IM群组的GroupID（比如RoomId为1234，则IM群组的GroupID为"1234"）加群进行信令同步，请在开始推流前确保相应IM群组已创建完成，否则会导致推流失败。
2. 在没有指定TRTCRoomId和TRTCRoomIdStr的情况下，默认会以RoomId作为白板流进行推流的TRTC房间号。
     */
    public $RoomId;

    /**
     * @var string 用于白板推流服务进入白板房间的用户ID。在没有额外指定`IMAuthParam`和`TRTCAuthParam`的情况下，这个用户ID同时会用于IM登录、IM加群、TRTC进房推流等操作。
用户ID最大长度不能大于60个字节，该用户ID必须是一个单独的未同时在其他地方使用的用户ID，白板推流服务使用这个用户ID进入房间进行白板音视频推流，若该用户ID和其他地方同时在使用的用户ID重复，会导致白板推流服务与其他使用场景帐号互踢，影响正常推流。
     */
    public $PushUserId;

    /**
     * @var string 与PushUserId对应的IM签名(usersig)。
     */
    public $PushUserSig;

    /**
     * @var Whiteboard 白板参数，例如白板宽高、背景颜色等
     */
    public $Whiteboard;

    /**
     * @var integer 自动停止推流超时时间，单位秒，取值范围[300, 259200], 默认值为1800秒。

当白板超过设定时间没有操作的时候，白板推流服务会自动停止白板推流。
     */
    public $AutoStopTimeout;

    /**
     * @var boolean 对主白板推流任务进行操作时，是否同时同步操作备份任务
     */
    public $AutoManageBackup;

    /**
     * @var WhiteboardPushBackupParam 备份白板推流相关参数。

指定了备份参数的情况下，白板推流服务会在房间内新增一路白板画面视频流，即同一个房间内会有两路白板画面推流。
     */
    public $Backup;

    /**
     * @var string TRTC高级权限控制参数，如果在实时音视频开启了高级权限控制功能，必须提供PrivateMapKey才能保证正常推流。
     */
    public $PrivateMapKey;

    /**
     * @var integer 白板推流视频帧率，取值范围[0, 30]，默认20fps
     */
    public $VideoFPS;

    /**
     * @var integer 白板推流码率， 取值范围[0, 2000]，默认1200kbps。

这里的码率设置是一个参考值，实际推流的时候使用的是动态码率，所以真实码率不会固定为指定值，会在指定值附近波动。
     */
    public $VideoBitrate;

    /**
     * @var boolean 在实时音视频云端录制模式选择为 `指定用户录制` 模式的时候是否自动录制白板推流。

默认在实时音视频的云端录制模式选择为 `指定用户录制` 模式的情况下，不会自动进行白板推流录制，如果希望进行白板推流录制，请将此参数设置为true。

如果实时音视频的云端录制模式选择为 `全局自动录制` 模式，可忽略此参数。
     */
    public $AutoRecord;

    /**
     * @var string 指定白板推流录制的RecordID，指定的RecordID会用于填充实时音视频云端录制完成后的回调消息中的 "userdefinerecordid" 字段内容，便于您更方便的识别录制回调，以及在点播媒体资源管理中查找相应的录制视频文件。

限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线和连词符。

此字段设置后，不管`AutoRecord`字段取值如何，都将自动进行白板推流录制。

默认RecordId生成规则如下：
urlencode(SdkAppID_RoomID_PushUserID)

例如：
SdkAppID = 12345678，RoomID = 12345，PushUserID = push_user_1
那么：RecordId = 12345678_12345_push_user_1
     */
    public $UserDefinedRecordId;

    /**
     * @var boolean 在实时音视频旁路推流模式选择为`指定用户旁路`模式的时候，是否自动旁路白板推流。

默认在实时音视频的旁路推流模式选择为 `指定用户旁路` 模式的情况下，不会自动旁路白板推流，如果希望旁路白板推流，请将此参数设置为true。

如果实时音视频的旁路推流模式选择为 `全局自动旁路` 模式，可忽略此参数。
     */
    public $AutoPublish;

    /**
     * @var string 指定实时音视频在旁路白板推流时的StreamID，设置之后，您就可以在腾讯云直播 CDN 上通过标准直播方案（FLV或HLS）播放该用户的音视频流。

限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线和连词符。

此字段设置后，不管`AutoPublish`字段取值如何，都将自动旁路白板推流。

默认StreamID生成规则如下：
urlencode(SdkAppID_RoomID_PushUserID_main)

例如：
SdkAppID = 12345678，RoomID = 12345，PushUserID = push_user_1
那么：StreamID = 12345678_12345_push_user_1_main
     */
    public $UserDefinedStreamId;

    /**
     * @var string 内部参数，不需要关注此参数
     */
    public $ExtraData;

    /**
     * @var integer TRTC数字类型房间号，取值范围: (1, 4294967295)。

在同时指定了RoomId与TRTCRoomId的情况下，优先使用TRTCRoomId作为白板流进行推流的TRTC房间号。

当指定了TRTCRoomIdStr的情况下，此字段将被忽略。
     */
    public $TRTCRoomId;

    /**
     * @var string TRTC字符串类型房间号。

在指定了TRTCRoomIdStr的情况下，会优先使用TRTCRoomIdStr作为白板流进行推流的TRTC房间号。
     */
    public $TRTCRoomIdStr;

    /**
     * @var AuthParam IM鉴权信息参数，用于IM鉴权。
当白板信令所使用的IM应用与白板应用的SdkAppId不一致时，可以通过此参数提供对应IM应用鉴权信息。

如果提供了此参数，白板推流服务会优先使用此参数指定的SdkAppId作为白板信令的传输通道，否则使用公共参数中的SdkAppId作为白板信令的传输通道。
     */
    public $IMAuthParam;

    /**
     * @var AuthParam TRTC鉴权信息参数，用于TRTC进房推流鉴权。
当需要推流到的TRTC房间所对应的TRTC应用与白板应用的SdkAppId不一致时，可以通过此参数提供对应的TRTC应用鉴权信息。

如果提供了此参数，白板推流服务会优先使用此参数指定的SdkAppId作为白板推流的目标TRTC应用，否则使用公共参数中的SdkAppId作为白板推流的目标TRTC应用。
     */
    public $TRTCAuthParam;

    /**
     * @var string 内测参数，需要提前申请白名单进行体验。

指定白板推流时推流用户进TRTC房间的进房模式。默认为 TRTCAppSceneVideoCall

TRTCAppSceneVideoCall - 视频通话场景，即绝大多数时间都是两人或两人以上视频通话的场景，内部编码器和网络协议优化侧重流畅性，降低通话延迟和卡顿率。
TRTCAppSceneLIVE - 直播场景，即绝大多数时间都是一人直播，偶尔有多人视频互动的场景，内部编码器和网络协议优化侧重性能和兼容性，性能和清晰度表现更佳。
     */
    public $TRTCEnterRoomMode;

    /**
     * @param integer $SdkAppId 客户的SdkAppId
     * @param integer $RoomId 需要推流的白板房间号，取值范围: (1, 4294967295)。

1. 白板推流默认以RoomId的字符串表达形式作为IM群组的GroupID（比如RoomId为1234，则IM群组的GroupID为"1234"）加群进行信令同步，请在开始推流前确保相应IM群组已创建完成，否则会导致推流失败。
2. 在没有指定TRTCRoomId和TRTCRoomIdStr的情况下，默认会以RoomId作为白板流进行推流的TRTC房间号。
     * @param string $PushUserId 用于白板推流服务进入白板房间的用户ID。在没有额外指定`IMAuthParam`和`TRTCAuthParam`的情况下，这个用户ID同时会用于IM登录、IM加群、TRTC进房推流等操作。
用户ID最大长度不能大于60个字节，该用户ID必须是一个单独的未同时在其他地方使用的用户ID，白板推流服务使用这个用户ID进入房间进行白板音视频推流，若该用户ID和其他地方同时在使用的用户ID重复，会导致白板推流服务与其他使用场景帐号互踢，影响正常推流。
     * @param string $PushUserSig 与PushUserId对应的IM签名(usersig)。
     * @param Whiteboard $Whiteboard 白板参数，例如白板宽高、背景颜色等
     * @param integer $AutoStopTimeout 自动停止推流超时时间，单位秒，取值范围[300, 259200], 默认值为1800秒。

当白板超过设定时间没有操作的时候，白板推流服务会自动停止白板推流。
     * @param boolean $AutoManageBackup 对主白板推流任务进行操作时，是否同时同步操作备份任务
     * @param WhiteboardPushBackupParam $Backup 备份白板推流相关参数。

指定了备份参数的情况下，白板推流服务会在房间内新增一路白板画面视频流，即同一个房间内会有两路白板画面推流。
     * @param string $PrivateMapKey TRTC高级权限控制参数，如果在实时音视频开启了高级权限控制功能，必须提供PrivateMapKey才能保证正常推流。
     * @param integer $VideoFPS 白板推流视频帧率，取值范围[0, 30]，默认20fps
     * @param integer $VideoBitrate 白板推流码率， 取值范围[0, 2000]，默认1200kbps。

这里的码率设置是一个参考值，实际推流的时候使用的是动态码率，所以真实码率不会固定为指定值，会在指定值附近波动。
     * @param boolean $AutoRecord 在实时音视频云端录制模式选择为 `指定用户录制` 模式的时候是否自动录制白板推流。

默认在实时音视频的云端录制模式选择为 `指定用户录制` 模式的情况下，不会自动进行白板推流录制，如果希望进行白板推流录制，请将此参数设置为true。

如果实时音视频的云端录制模式选择为 `全局自动录制` 模式，可忽略此参数。
     * @param string $UserDefinedRecordId 指定白板推流录制的RecordID，指定的RecordID会用于填充实时音视频云端录制完成后的回调消息中的 "userdefinerecordid" 字段内容，便于您更方便的识别录制回调，以及在点播媒体资源管理中查找相应的录制视频文件。

限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线和连词符。

此字段设置后，不管`AutoRecord`字段取值如何，都将自动进行白板推流录制。

默认RecordId生成规则如下：
urlencode(SdkAppID_RoomID_PushUserID)

例如：
SdkAppID = 12345678，RoomID = 12345，PushUserID = push_user_1
那么：RecordId = 12345678_12345_push_user_1
     * @param boolean $AutoPublish 在实时音视频旁路推流模式选择为`指定用户旁路`模式的时候，是否自动旁路白板推流。

默认在实时音视频的旁路推流模式选择为 `指定用户旁路` 模式的情况下，不会自动旁路白板推流，如果希望旁路白板推流，请将此参数设置为true。

如果实时音视频的旁路推流模式选择为 `全局自动旁路` 模式，可忽略此参数。
     * @param string $UserDefinedStreamId 指定实时音视频在旁路白板推流时的StreamID，设置之后，您就可以在腾讯云直播 CDN 上通过标准直播方案（FLV或HLS）播放该用户的音视频流。

限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线和连词符。

此字段设置后，不管`AutoPublish`字段取值如何，都将自动旁路白板推流。

默认StreamID生成规则如下：
urlencode(SdkAppID_RoomID_PushUserID_main)

例如：
SdkAppID = 12345678，RoomID = 12345，PushUserID = push_user_1
那么：StreamID = 12345678_12345_push_user_1_main
     * @param string $ExtraData 内部参数，不需要关注此参数
     * @param integer $TRTCRoomId TRTC数字类型房间号，取值范围: (1, 4294967295)。

在同时指定了RoomId与TRTCRoomId的情况下，优先使用TRTCRoomId作为白板流进行推流的TRTC房间号。

当指定了TRTCRoomIdStr的情况下，此字段将被忽略。
     * @param string $TRTCRoomIdStr TRTC字符串类型房间号。

在指定了TRTCRoomIdStr的情况下，会优先使用TRTCRoomIdStr作为白板流进行推流的TRTC房间号。
     * @param AuthParam $IMAuthParam IM鉴权信息参数，用于IM鉴权。
当白板信令所使用的IM应用与白板应用的SdkAppId不一致时，可以通过此参数提供对应IM应用鉴权信息。

如果提供了此参数，白板推流服务会优先使用此参数指定的SdkAppId作为白板信令的传输通道，否则使用公共参数中的SdkAppId作为白板信令的传输通道。
     * @param AuthParam $TRTCAuthParam TRTC鉴权信息参数，用于TRTC进房推流鉴权。
当需要推流到的TRTC房间所对应的TRTC应用与白板应用的SdkAppId不一致时，可以通过此参数提供对应的TRTC应用鉴权信息。

如果提供了此参数，白板推流服务会优先使用此参数指定的SdkAppId作为白板推流的目标TRTC应用，否则使用公共参数中的SdkAppId作为白板推流的目标TRTC应用。
     * @param string $TRTCEnterRoomMode 内测参数，需要提前申请白名单进行体验。

指定白板推流时推流用户进TRTC房间的进房模式。默认为 TRTCAppSceneVideoCall

TRTCAppSceneVideoCall - 视频通话场景，即绝大多数时间都是两人或两人以上视频通话的场景，内部编码器和网络协议优化侧重流畅性，降低通话延迟和卡顿率。
TRTCAppSceneLIVE - 直播场景，即绝大多数时间都是一人直播，偶尔有多人视频互动的场景，内部编码器和网络协议优化侧重性能和兼容性，性能和清晰度表现更佳。
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

        if (array_key_exists("PushUserId",$param) and $param["PushUserId"] !== null) {
            $this->PushUserId = $param["PushUserId"];
        }

        if (array_key_exists("PushUserSig",$param) and $param["PushUserSig"] !== null) {
            $this->PushUserSig = $param["PushUserSig"];
        }

        if (array_key_exists("Whiteboard",$param) and $param["Whiteboard"] !== null) {
            $this->Whiteboard = new Whiteboard();
            $this->Whiteboard->deserialize($param["Whiteboard"]);
        }

        if (array_key_exists("AutoStopTimeout",$param) and $param["AutoStopTimeout"] !== null) {
            $this->AutoStopTimeout = $param["AutoStopTimeout"];
        }

        if (array_key_exists("AutoManageBackup",$param) and $param["AutoManageBackup"] !== null) {
            $this->AutoManageBackup = $param["AutoManageBackup"];
        }

        if (array_key_exists("Backup",$param) and $param["Backup"] !== null) {
            $this->Backup = new WhiteboardPushBackupParam();
            $this->Backup->deserialize($param["Backup"]);
        }

        if (array_key_exists("PrivateMapKey",$param) and $param["PrivateMapKey"] !== null) {
            $this->PrivateMapKey = $param["PrivateMapKey"];
        }

        if (array_key_exists("VideoFPS",$param) and $param["VideoFPS"] !== null) {
            $this->VideoFPS = $param["VideoFPS"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
        }

        if (array_key_exists("AutoRecord",$param) and $param["AutoRecord"] !== null) {
            $this->AutoRecord = $param["AutoRecord"];
        }

        if (array_key_exists("UserDefinedRecordId",$param) and $param["UserDefinedRecordId"] !== null) {
            $this->UserDefinedRecordId = $param["UserDefinedRecordId"];
        }

        if (array_key_exists("AutoPublish",$param) and $param["AutoPublish"] !== null) {
            $this->AutoPublish = $param["AutoPublish"];
        }

        if (array_key_exists("UserDefinedStreamId",$param) and $param["UserDefinedStreamId"] !== null) {
            $this->UserDefinedStreamId = $param["UserDefinedStreamId"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }

        if (array_key_exists("TRTCRoomId",$param) and $param["TRTCRoomId"] !== null) {
            $this->TRTCRoomId = $param["TRTCRoomId"];
        }

        if (array_key_exists("TRTCRoomIdStr",$param) and $param["TRTCRoomIdStr"] !== null) {
            $this->TRTCRoomIdStr = $param["TRTCRoomIdStr"];
        }

        if (array_key_exists("IMAuthParam",$param) and $param["IMAuthParam"] !== null) {
            $this->IMAuthParam = new AuthParam();
            $this->IMAuthParam->deserialize($param["IMAuthParam"]);
        }

        if (array_key_exists("TRTCAuthParam",$param) and $param["TRTCAuthParam"] !== null) {
            $this->TRTCAuthParam = new AuthParam();
            $this->TRTCAuthParam->deserialize($param["TRTCAuthParam"]);
        }

        if (array_key_exists("TRTCEnterRoomMode",$param) and $param["TRTCEnterRoomMode"] !== null) {
            $this->TRTCEnterRoomMode = $param["TRTCEnterRoomMode"];
        }
    }
}
