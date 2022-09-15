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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserSig请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method string getUid() 获取用户 ID
 * @method void setUid(string $Uid) 设置用户 ID
 * @method integer getExpiredTime() 获取有效期，单位秒，不超过 1 小时
 * @method void setExpiredTime(integer $ExpiredTime) 设置有效期，单位秒，不超过 1 小时
 * @method string getClientData() 获取用户签名数据
 * @method void setClientData(string $ClientData) 设置用户签名数据
 */
class CreateUserSigRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var string 用户 ID
     */
    public $Uid;

    /**
     * @var integer 有效期，单位秒，不超过 1 小时
     */
    public $ExpiredTime;

    /**
     * @var string 用户签名数据
     */
    public $ClientData;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param string $Uid 用户 ID
     * @param integer $ExpiredTime 有效期，单位秒，不超过 1 小时
     * @param string $ClientData 用户签名数据
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

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("ClientData",$param) and $param["ClientData"] !== null) {
            $this->ClientData = $param["ClientData"];
        }
    }
}
