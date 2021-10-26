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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 其它账号信息。
 *
 * @method string getAccountId() 获取id
 * @method void setAccountId(string $AccountId) 设置id
 * @method string getMobilePhone() 获取手机号
 * @method void setMobilePhone(string $MobilePhone) 设置手机号
 * @method string getDeviceId() 获取id
 * @method void setDeviceId(string $DeviceId) 设置id
 */
class OtherAccountInfo extends AbstractModel
{
    /**
     * @var string id
     */
    public $AccountId;

    /**
     * @var string 手机号
     */
    public $MobilePhone;

    /**
     * @var string id
     */
    public $DeviceId;

    /**
     * @param string $AccountId id
     * @param string $MobilePhone 手机号
     * @param string $DeviceId id
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("MobilePhone",$param) and $param["MobilePhone"] !== null) {
            $this->MobilePhone = $param["MobilePhone"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}
