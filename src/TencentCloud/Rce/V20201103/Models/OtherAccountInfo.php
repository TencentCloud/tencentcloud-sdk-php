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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 其它账号信息。
 *
 * @method string getAccountId() 获取其他账号信息；
AccountType是10004时，填入中国大陆标准11位手机号的MD5值
AccountType是10005时，填入中国大陆标准11位手机号的SHA256值
注释：
MD5手机号加密方式，使用中国大陆11位手机号进行MD5加密，加密后取32位小写值。
SHA256手机号加密方式，使用中国大陆11位手机号进行SHA256加密，加密后取64位小写值。
 * @method void setAccountId(string $AccountId) 设置其他账号信息；
AccountType是10004时，填入中国大陆标准11位手机号的MD5值
AccountType是10005时，填入中国大陆标准11位手机号的SHA256值
注释：
MD5手机号加密方式，使用中国大陆11位手机号进行MD5加密，加密后取32位小写值。
SHA256手机号加密方式，使用中国大陆11位手机号进行SHA256加密，加密后取64位小写值。
 * @method string getMobilePhone() 获取账号绑定的MD5或SHA256加密的手机号（该字段已不推荐使用）。
注释：支持标准中国大陆11位手机号MD5加密后位的32位小写字符串；
     支持标准中国大陆11位手机号SHA256加密后位的64位小写字符串。
 * @method void setMobilePhone(string $MobilePhone) 设置账号绑定的MD5或SHA256加密的手机号（该字段已不推荐使用）。
注释：支持标准中国大陆11位手机号MD5加密后位的32位小写字符串；
     支持标准中国大陆11位手机号SHA256加密后位的64位小写字符串。
 * @method string getDeviceId() 获取用户设备号（该字段已不推荐使用）。
 * @method void setDeviceId(string $DeviceId) 设置用户设备号（该字段已不推荐使用）。
 */
class OtherAccountInfo extends AbstractModel
{
    /**
     * @var string 其他账号信息；
AccountType是10004时，填入中国大陆标准11位手机号的MD5值
AccountType是10005时，填入中国大陆标准11位手机号的SHA256值
注释：
MD5手机号加密方式，使用中国大陆11位手机号进行MD5加密，加密后取32位小写值。
SHA256手机号加密方式，使用中国大陆11位手机号进行SHA256加密，加密后取64位小写值。
     */
    public $AccountId;

    /**
     * @var string 账号绑定的MD5或SHA256加密的手机号（该字段已不推荐使用）。
注释：支持标准中国大陆11位手机号MD5加密后位的32位小写字符串；
     支持标准中国大陆11位手机号SHA256加密后位的64位小写字符串。
     */
    public $MobilePhone;

    /**
     * @var string 用户设备号（该字段已不推荐使用）。
     */
    public $DeviceId;

    /**
     * @param string $AccountId 其他账号信息；
AccountType是10004时，填入中国大陆标准11位手机号的MD5值
AccountType是10005时，填入中国大陆标准11位手机号的SHA256值
注释：
MD5手机号加密方式，使用中国大陆11位手机号进行MD5加密，加密后取32位小写值。
SHA256手机号加密方式，使用中国大陆11位手机号进行SHA256加密，加密后取64位小写值。
     * @param string $MobilePhone 账号绑定的MD5或SHA256加密的手机号（该字段已不推荐使用）。
注释：支持标准中国大陆11位手机号MD5加密后位的32位小写字符串；
     支持标准中国大陆11位手机号SHA256加密后位的64位小写字符串。
     * @param string $DeviceId 用户设备号（该字段已不推荐使用）。
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
