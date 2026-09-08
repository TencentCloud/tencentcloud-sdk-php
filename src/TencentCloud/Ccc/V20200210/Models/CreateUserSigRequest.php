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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserSig请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method string getUid() 获取<p>用户 ID</p>
 * @method void setUid(string $Uid) 设置<p>用户 ID</p>
 * @method string getClientData() 获取<p>用户签名数据</p>
 * @method void setClientData(string $ClientData) 设置<p>用户签名数据</p>
 * @method integer getExpiredTime() 获取<p>有效期，单位秒，不超过 1 小时</p>
 * @method void setExpiredTime(integer $ExpiredTime) 设置<p>有效期，单位秒，不超过 1 小时</p>
 */
class CreateUserSigRequest extends AbstractModel
{
    /**
     * @var integer <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>用户 ID</p>
     */
    public $Uid;

    /**
     * @var string <p>用户签名数据</p>
     */
    public $ClientData;

    /**
     * @var integer <p>有效期，单位秒，不超过 1 小时</p>
     */
    public $ExpiredTime;

    /**
     * @param integer $SdkAppId <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     * @param string $Uid <p>用户 ID</p>
     * @param string $ClientData <p>用户签名数据</p>
     * @param integer $ExpiredTime <p>有效期，单位秒，不超过 1 小时</p>
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

        if (array_key_exists("ClientData",$param) and $param["ClientData"] !== null) {
            $this->ClientData = $param["ClientData"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
