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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMessageReceiver请求参数结构体
 *
 * @method string getName() 获取<p>消息接收人的用户名</p>
 * @method void setName(string $Name) 设置<p>消息接收人的用户名</p>
 * @method string getCountryCode() 获取<p>手机号国际区号，国内为86</p>
 * @method void setCountryCode(string $CountryCode) 设置<p>手机号国际区号，国内为86</p>
 * @method string getEmail() 获取<p>邮箱，例如：57<strong>*</strong>@qq.com</p>
 * @method void setEmail(string $Email) 设置<p>邮箱，例如：57<strong>*</strong>@qq.com</p>
 * @method string getPhoneNumber() 获取<p>手机号码, 例如：132****2492</p>
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>手机号码, 例如：132****2492</p>
 * @method string getRemark() 获取<p>消息接收人的备注，选填</p>
 * @method void setRemark(string $Remark) 设置<p>消息接收人的备注，选填</p>
 */
class CreateMessageReceiverRequest extends AbstractModel
{
    /**
     * @var string <p>消息接收人的用户名</p>
     */
    public $Name;

    /**
     * @var string <p>手机号国际区号，国内为86</p>
     */
    public $CountryCode;

    /**
     * @var string <p>邮箱，例如：57<strong>*</strong>@qq.com</p>
     */
    public $Email;

    /**
     * @var string <p>手机号码, 例如：132****2492</p>
     */
    public $PhoneNumber;

    /**
     * @var string <p>消息接收人的备注，选填</p>
     */
    public $Remark;

    /**
     * @param string $Name <p>消息接收人的用户名</p>
     * @param string $CountryCode <p>手机号国际区号，国内为86</p>
     * @param string $Email <p>邮箱，例如：57<strong>*</strong>@qq.com</p>
     * @param string $PhoneNumber <p>手机号码, 例如：132****2492</p>
     * @param string $Remark <p>消息接收人的备注，选填</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
