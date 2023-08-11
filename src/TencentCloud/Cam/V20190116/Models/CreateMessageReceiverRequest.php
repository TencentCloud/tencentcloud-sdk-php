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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMessageReceiver请求参数结构体
 *
 * @method string getName() 获取消息接收人的用户名
 * @method void setName(string $Name) 设置消息接收人的用户名
 * @method string getCountryCode() 获取手机号国际区号，国内为86
 * @method void setCountryCode(string $CountryCode) 设置手机号国际区号，国内为86
 * @method string getPhoneNumber() 获取手机号码, 例如：132****2492
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码, 例如：132****2492
 * @method string getEmail() 获取邮箱，例如：57*****@qq.com
 * @method void setEmail(string $Email) 设置邮箱，例如：57*****@qq.com
 * @method string getRemark() 获取消息接收人的备注，选填
 * @method void setRemark(string $Remark) 设置消息接收人的备注，选填
 */
class CreateMessageReceiverRequest extends AbstractModel
{
    /**
     * @var string 消息接收人的用户名
     */
    public $Name;

    /**
     * @var string 手机号国际区号，国内为86
     */
    public $CountryCode;

    /**
     * @var string 手机号码, 例如：132****2492
     */
    public $PhoneNumber;

    /**
     * @var string 邮箱，例如：57*****@qq.com
     */
    public $Email;

    /**
     * @var string 消息接收人的备注，选填
     */
    public $Remark;

    /**
     * @param string $Name 消息接收人的用户名
     * @param string $CountryCode 手机号国际区号，国内为86
     * @param string $PhoneNumber 手机号码, 例如：132****2492
     * @param string $Email 邮箱，例如：57*****@qq.com
     * @param string $Remark 消息接收人的备注，选填
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

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
