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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账单信息
 *
 * @method Address getAddress() 获取<p>账单地址</p>
 * @method void setAddress(Address $Address) 设置<p>账单地址</p>
 * @method string getPhone() 获取<p>账单联系电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method void setPhone(string $Phone) 设置<p>账单联系电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method string getEmail() 获取<p>账单邮箱</p>
 * @method void setEmail(string $Email) 设置<p>账单邮箱</p>
 * @method string getRecipient() 获取<p>账单接收人姓名</p>
 * @method void setRecipient(string $Recipient) 设置<p>账单接收人姓名</p>
 */
class Billing extends AbstractModel
{
    /**
     * @var Address <p>账单地址</p>
     */
    public $Address;

    /**
     * @var string <p>账单联系电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     */
    public $Phone;

    /**
     * @var string <p>账单邮箱</p>
     */
    public $Email;

    /**
     * @var string <p>账单接收人姓名</p>
     */
    public $Recipient;

    /**
     * @param Address $Address <p>账单地址</p>
     * @param string $Phone <p>账单联系电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     * @param string $Email <p>账单邮箱</p>
     * @param string $Recipient <p>账单接收人姓名</p>
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new Address();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Recipient",$param) and $param["Recipient"] !== null) {
            $this->Recipient = $param["Recipient"];
        }
    }
}
