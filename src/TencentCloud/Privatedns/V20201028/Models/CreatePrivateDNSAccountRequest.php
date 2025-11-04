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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrivateDNSAccount请求参数结构体
 *
 * @method PrivateDNSAccount getAccount() 获取私有域解析账号，该账号不能与主账号一致且需要子账号授权
 * @method void setAccount(PrivateDNSAccount $Account) 设置私有域解析账号，该账号不能与主账号一致且需要子账号授权
 */
class CreatePrivateDNSAccountRequest extends AbstractModel
{
    /**
     * @var PrivateDNSAccount 私有域解析账号，该账号不能与主账号一致且需要子账号授权
     */
    public $Account;

    /**
     * @param PrivateDNSAccount $Account 私有域解析账号，该账号不能与主账号一致且需要子账号授权
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new PrivateDNSAccount();
            $this->Account->deserialize($param["Account"]);
        }
    }
}
