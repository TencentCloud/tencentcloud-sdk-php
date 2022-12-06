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
namespace TencentCloud\Trdp\V20220726\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号信息
 *
 * @method integer getAccountType() 获取用户账号类型：
1-手机号；
2-IMEI；
3-IDFA；
100-SSID类型
 * @method void setAccountType(integer $AccountType) 设置用户账号类型：
1-手机号；
2-IMEI；
3-IDFA；
100-SSID类型
 * @method UniversalAccountInfo getUniversalAccount() 获取通用账号信息，当AccountType为1、2、3、100时必填
 * @method void setUniversalAccount(UniversalAccountInfo $UniversalAccount) 设置通用账号信息，当AccountType为1、2、3、100时必填
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var integer 用户账号类型：
1-手机号；
2-IMEI；
3-IDFA；
100-SSID类型
     */
    public $AccountType;

    /**
     * @var UniversalAccountInfo 通用账号信息，当AccountType为1、2、3、100时必填
     */
    public $UniversalAccount;

    /**
     * @param integer $AccountType 用户账号类型：
1-手机号；
2-IMEI；
3-IDFA；
100-SSID类型
     * @param UniversalAccountInfo $UniversalAccount 通用账号信息，当AccountType为1、2、3、100时必填
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
        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("UniversalAccount",$param) and $param["UniversalAccount"] !== null) {
            $this->UniversalAccount = new UniversalAccountInfo();
            $this->UniversalAccount->deserialize($param["UniversalAccount"]);
        }
    }
}
