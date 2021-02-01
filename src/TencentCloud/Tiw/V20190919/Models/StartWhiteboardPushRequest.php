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
 * @method integer getRoomId() 获取需要推流白板的房间号，取值范围: (1, 4294967295)
 * @method void setRoomId(integer $RoomId) 设置需要推流白板的房间号，取值范围: (1, 4294967295)
 * @method string getPushUserId() 获取用于白板推流服务进房进行推流的用户ID，最大长度不能大于60个字节，该ID必须是一个单独的未在SDK中使用的ID，白板推流服务使用这个用户ID进入房间进行白板音视频推流，若该ID和SDK中使用的ID重复，会导致SDK和白板推流服务互踢，影响正常推流。
 * @method void setPushUserId(string $PushUserId) 设置用于白板推流服务进房进行推流的用户ID，最大长度不能大于60个字节，该ID必须是一个单独的未在SDK中使用的ID，白板推流服务使用这个用户ID进入房间进行白板音视频推流，若该ID和SDK中使用的ID重复，会导致SDK和白板推流服务互踢，影响正常推流。
 * @method string getPushUserSig() 获取与PushUserId对应的签名
 * @method void setPushUserSig(string $PushUserSig) 设置与PushUserId对应的签名
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
 * @method boolean getAutoRecord() 获取在实时音视频云端录制模式选择为 `指定用户录制` 模式的时候是否自动录制白板推流。

默认在实时音视频的云端录制模式选择为 `指定用户录制` 模式的情况下，不会自动进行白板推流录制，如果希望进行白板推流录制，请将此参数设置为true。

如果实时音视频的云端录制模式选择为 `全局自动录制` 模式，可忽略此参数。
 * @method void setAutoRecord(boolean $AutoRecord) 设置在实时音视频云端录制模式选择为 `指定用户录制` 模式的时候是否自动录制白板推流。

默认在实时音视频的云端录制模式选择为 `指定用户录制` 模式的情况下，不会自动进行白板推流录制，如果希望进行白板推流录制，请将此参数设置为true。

如果实时音视频的云端录制模式选择为 `全局自动录制` 模式，可忽略此参数。
 * @method string getExtraData() 获取内部参数，不需要关注此参数
 * @method void setExtraData(string $ExtraData) 设置内部参数，不需要关注此参数
 */
class StartWhiteboardPushRequest extends AbstractModel
{
    /**
     * @var integer 客户的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var integer 需要推流白板的房间号，取值范围: (1, 4294967295)
     */
    public $RoomId;

    /**
     * @var string 用于白板推流服务进房进行推流的用户ID，最大长度不能大于60个字节，该ID必须是一个单独的未在SDK中使用的ID，白板推流服务使用这个用户ID进入房间进行白板音视频推流，若该ID和SDK中使用的ID重复，会导致SDK和白板推流服务互踢，影响正常推流。
     */
    public $PushUserId;

    /**
     * @var string 与PushUserId对应的签名
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
     * @var boolean 在实时音视频云端录制模式选择为 `指定用户录制` 模式的时候是否自动录制白板推流。

默认在实时音视频的云端录制模式选择为 `指定用户录制` 模式的情况下，不会自动进行白板推流录制，如果希望进行白板推流录制，请将此参数设置为true。

如果实时音视频的云端录制模式选择为 `全局自动录制` 模式，可忽略此参数。
     */
    public $AutoRecord;

    /**
     * @var string 内部参数，不需要关注此参数
     */
    public $ExtraData;

    /**
     * @param integer $SdkAppId 客户的SdkAppId
     * @param integer $RoomId 需要推流白板的房间号，取值范围: (1, 4294967295)
     * @param string $PushUserId 用于白板推流服务进房进行推流的用户ID，最大长度不能大于60个字节，该ID必须是一个单独的未在SDK中使用的ID，白板推流服务使用这个用户ID进入房间进行白板音视频推流，若该ID和SDK中使用的ID重复，会导致SDK和白板推流服务互踢，影响正常推流。
     * @param string $PushUserSig 与PushUserId对应的签名
     * @param Whiteboard $Whiteboard 白板参数，例如白板宽高、背景颜色等
     * @param integer $AutoStopTimeout 自动停止推流超时时间，单位秒，取值范围[300, 259200], 默认值为1800秒。

当白板超过设定时间没有操作的时候，白板推流服务会自动停止白板推流。
     * @param boolean $AutoManageBackup 对主白板推流任务进行操作时，是否同时同步操作备份任务
     * @param WhiteboardPushBackupParam $Backup 备份白板推流相关参数。

指定了备份参数的情况下，白板推流服务会在房间内新增一路白板画面视频流，即同一个房间内会有两路白板画面推流。
     * @param boolean $AutoRecord 在实时音视频云端录制模式选择为 `指定用户录制` 模式的时候是否自动录制白板推流。

默认在实时音视频的云端录制模式选择为 `指定用户录制` 模式的情况下，不会自动进行白板推流录制，如果希望进行白板推流录制，请将此参数设置为true。

如果实时音视频的云端录制模式选择为 `全局自动录制` 模式，可忽略此参数。
     * @param string $ExtraData 内部参数，不需要关注此参数
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

        if (array_key_exists("AutoRecord",$param) and $param["AutoRecord"] !== null) {
            $this->AutoRecord = $param["AutoRecord"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }
    }
}
