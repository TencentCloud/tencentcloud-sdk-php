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
 * @method string getAccountId() 获取其他账号信息；
AccountType是8时，填入设备号（IMEI、IMEIMD5、IDFA、IDFAMD5）
AccountType是10004时，填入中国大陆标准11位手机号的MD5值
注释：
MD5手机号加密方式，中国大陆11位手机号进行MD5加密，加密后取32位小写值
设备号加密方式，对IMEI、IDFA明文进行MD5加密，加密后取32位小写值。
 * @method void setAccountId(string $AccountId) 设置其他账号信息；
AccountType是8时，填入设备号（IMEI、IMEIMD5、IDFA、IDFAMD5）
AccountType是10004时，填入中国大陆标准11位手机号的MD5值
注释：
MD5手机号加密方式，中国大陆11位手机号进行MD5加密，加密后取32位小写值
设备号加密方式，对IMEI、IDFA明文进行MD5加密，加密后取32位小写值。
 * @method string getMobilePhone() 获取MD5手机号,AccountType是10004时，此处无需重复填写。
 * @method void setMobilePhone(string $MobilePhone) 设置MD5手机号,AccountType是10004时，此处无需重复填写。
 * @method string getDeviceId() 获取用户设备号，AccountType是8时，此处无需重复填写。
 * @method void setDeviceId(string $DeviceId) 设置用户设备号，AccountType是8时，此处无需重复填写。
 */
class OtherAccountInfo extends AbstractModel
{
    /**
     * @var string 其他账号信息；
AccountType是8时，填入设备号（IMEI、IMEIMD5、IDFA、IDFAMD5）
AccountType是10004时，填入中国大陆标准11位手机号的MD5值
注释：
MD5手机号加密方式，中国大陆11位手机号进行MD5加密，加密后取32位小写值
设备号加密方式，对IMEI、IDFA明文进行MD5加密，加密后取32位小写值。
     */
    public $AccountId;

    /**
     * @var string MD5手机号,AccountType是10004时，此处无需重复填写。
     */
    public $MobilePhone;

    /**
     * @var string 用户设备号，AccountType是8时，此处无需重复填写。
     */
    public $DeviceId;

    /**
     * @param string $AccountId 其他账号信息；
AccountType是8时，填入设备号（IMEI、IMEIMD5、IDFA、IDFAMD5）
AccountType是10004时，填入中国大陆标准11位手机号的MD5值
注释：
MD5手机号加密方式，中国大陆11位手机号进行MD5加密，加密后取32位小写值
设备号加密方式，对IMEI、IDFA明文进行MD5加密，加密后取32位小写值。
     * @param string $MobilePhone MD5手机号,AccountType是10004时，此处无需重复填写。
     * @param string $DeviceId 用户设备号，AccountType是8时，此处无需重复填写。
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
