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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TRTC 的参数 可以用来加入房间
 *
 * @method integer getSdkAppId() 获取TRTC入参: TRTC的实例ID
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC入参: TRTC的实例ID
 * @method string getUserId() 获取TRTC入参: 用户加入房间的ID
 * @method void setUserId(string $UserId) 设置TRTC入参: 用户加入房间的ID
 * @method string getUserSig() 获取TRTC入参: 用户的签名用来鉴权
 * @method void setUserSig(string $UserSig) 设置TRTC入参: 用户的签名用来鉴权
 * @method string getStrRoomId() 获取TRTC入参: 加入的TRTC房间名称
 * @method void setStrRoomId(string $StrRoomId) 设置TRTC入参: 加入的TRTC房间名称
 * @method string getPrivateKey() 获取TRTC入参: 校验TRTC的KEY
 * @method void setPrivateKey(string $PrivateKey) 设置TRTC入参: 校验TRTC的KEY
 */
class TRTCParams extends AbstractModel
{
    /**
     * @var integer TRTC入参: TRTC的实例ID
     */
    public $SdkAppId;

    /**
     * @var string TRTC入参: 用户加入房间的ID
     */
    public $UserId;

    /**
     * @var string TRTC入参: 用户的签名用来鉴权
     */
    public $UserSig;

    /**
     * @var string TRTC入参: 加入的TRTC房间名称
     */
    public $StrRoomId;

    /**
     * @var string TRTC入参: 校验TRTC的KEY
     */
    public $PrivateKey;

    /**
     * @param integer $SdkAppId TRTC入参: TRTC的实例ID
     * @param string $UserId TRTC入参: 用户加入房间的ID
     * @param string $UserSig TRTC入参: 用户的签名用来鉴权
     * @param string $StrRoomId TRTC入参: 加入的TRTC房间名称
     * @param string $PrivateKey TRTC入参: 校验TRTC的KEY
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("StrRoomId",$param) and $param["StrRoomId"] !== null) {
            $this->StrRoomId = $param["StrRoomId"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }
    }
}
