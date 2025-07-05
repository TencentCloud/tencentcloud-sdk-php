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
 * CreateBasicModeration请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和TRTC的房间所对应的SdkAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和TRTC的房间所对应的SdkAppId相同。
 * @method string getRoomId() 获取TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，为TRTC房间所对应的RoomId。
 * @method void setRoomId(string $RoomId) 设置TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，为TRTC房间所对应的RoomId。
 * @method string getUserId() 获取目标审核用户id
 * @method void setUserId(string $UserId) 设置目标审核用户id
 * @method integer getRoomIdType() 获取TRTC房间号的类型。【*注意】必须和TRTC的房间所对应的RoomId类型相同:0: 字符串类型的RoomId1: 32位整型的RoomId（默认）
 * @method void setRoomIdType(integer $RoomIdType) 设置TRTC房间号的类型。【*注意】必须和TRTC的房间所对应的RoomId类型相同:0: 字符串类型的RoomId1: 32位整型的RoomId（默认）
 * @method AuditStorageParams getAuditStorageParams() 获取音频文件上传到云存储的参数
 * @method void setAuditStorageParams(AuditStorageParams $AuditStorageParams) 设置音频文件上传到云存储的参数
 */
class CreateBasicModerationRequest extends AbstractModel
{
    /**
     * @var integer TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和TRTC的房间所对应的SdkAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，为TRTC房间所对应的RoomId。
     */
    public $RoomId;

    /**
     * @var string 目标审核用户id
     */
    public $UserId;

    /**
     * @var integer TRTC房间号的类型。【*注意】必须和TRTC的房间所对应的RoomId类型相同:0: 字符串类型的RoomId1: 32位整型的RoomId（默认）
     */
    public $RoomIdType;

    /**
     * @var AuditStorageParams 音频文件上传到云存储的参数
     */
    public $AuditStorageParams;

    /**
     * @param integer $SdkAppId TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和TRTC的房间所对应的SdkAppId相同。
     * @param string $RoomId TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，为TRTC房间所对应的RoomId。
     * @param string $UserId 目标审核用户id
     * @param integer $RoomIdType TRTC房间号的类型。【*注意】必须和TRTC的房间所对应的RoomId类型相同:0: 字符串类型的RoomId1: 32位整型的RoomId（默认）
     * @param AuditStorageParams $AuditStorageParams 音频文件上传到云存储的参数
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

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("AuditStorageParams",$param) and $param["AuditStorageParams"] !== null) {
            $this->AuditStorageParams = new AuditStorageParams();
            $this->AuditStorageParams->deserialize($param["AuditStorageParams"]);
        }
    }
}
