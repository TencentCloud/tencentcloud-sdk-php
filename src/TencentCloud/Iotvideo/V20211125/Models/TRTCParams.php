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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TRTC调用参数
 *
 * @method integer getSDKAppId() 获取应用id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSDKAppId(integer $SDKAppId) 设置应用id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserSig() 获取用户id签名，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserSig(string $UserSig) 设置用户id签名，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrRoomId() 获取房间id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrRoomId(string $StrRoomId) 设置房间id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateMapKey() 获取权限票据，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateMapKey(string $PrivateMapKey) 设置权限票据，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
 */
class TRTCParams extends AbstractModel
{
    /**
     * @var integer 应用id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SDKAppId;

    /**
     * @var string 用户id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 用户id签名，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserSig;

    /**
     * @var string 房间id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrRoomId;

    /**
     * @var string 权限票据，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateMapKey;

    /**
     * @param integer $SDKAppId 应用id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserSig 用户id签名，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrRoomId 房间id，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateMapKey 权限票据，供TRTC SDK使用
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SDKAppId",$param) and $param["SDKAppId"] !== null) {
            $this->SDKAppId = $param["SDKAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("StrRoomId",$param) and $param["StrRoomId"] !== null) {
            $this->StrRoomId = $param["StrRoomId"];
        }

        if (array_key_exists("PrivateMapKey",$param) and $param["PrivateMapKey"] !== null) {
            $this->PrivateMapKey = $param["PrivateMapKey"];
        }
    }
}
