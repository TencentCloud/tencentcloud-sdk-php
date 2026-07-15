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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PhoneVerificationCTCC请求参数结构体
 *
 * @method string getIdCard() 获取<p>身份证号。</p>
 * @method void setIdCard(string $IdCard) 设置<p>身份证号。</p>
 * @method string getName() 获取<p>姓名。</p>
 * @method void setName(string $Name) 设置<p>姓名。</p>
 * @method string getPhone() 获取<p>手机号。</p>
 * @method void setPhone(string $Phone) 设置<p>手机号。</p>
 * @method Encryption getEncryption() 获取<p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号、手机号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
 * @method void setEncryption(Encryption $Encryption) 设置<p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号、手机号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
 */
class PhoneVerificationCTCCRequest extends AbstractModel
{
    /**
     * @var string <p>身份证号。</p>
     */
    public $IdCard;

    /**
     * @var string <p>姓名。</p>
     */
    public $Name;

    /**
     * @var string <p>手机号。</p>
     */
    public $Phone;

    /**
     * @var Encryption <p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号、手机号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
     */
    public $Encryption;

    /**
     * @param string $IdCard <p>身份证号。</p>
     * @param string $Name <p>姓名。</p>
     * @param string $Phone <p>手机号。</p>
     * @param Encryption $Encryption <p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号、手机号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
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
        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}
