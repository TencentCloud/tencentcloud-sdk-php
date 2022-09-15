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
 * 鉴权参数
 *
 * @method integer getSdkAppId() 获取应用SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置应用SdkAppId
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getUserSig() 获取用户ID对应的签名
 * @method void setUserSig(string $UserSig) 设置用户ID对应的签名
 */
class AuthParam extends AbstractModel
{
    /**
     * @var integer 应用SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 用户ID对应的签名
     */
    public $UserSig;

    /**
     * @param integer $SdkAppId 应用SdkAppId
     * @param string $UserId 用户ID
     * @param string $UserSig 用户ID对应的签名
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
    }
}
