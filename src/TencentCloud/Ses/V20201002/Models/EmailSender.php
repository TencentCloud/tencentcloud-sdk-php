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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于描述发件人相关信息
 *
 * @method string getEmailAddress() 获取发信地址
 * @method void setEmailAddress(string $EmailAddress) 设置发信地址
 * @method string getEmailSenderName() 获取发信人别名
 * @method void setEmailSenderName(string $EmailSenderName) 设置发信人别名
 * @method integer getCreatedTimestamp() 获取创建时间
 * @method void setCreatedTimestamp(integer $CreatedTimestamp) 设置创建时间
 * @method integer getSmtpPwdType() 获取smtp密码类型,0=没有设置密码,1=已经设置了密码
 * @method void setSmtpPwdType(integer $SmtpPwdType) 设置smtp密码类型,0=没有设置密码,1=已经设置了密码
 */
class EmailSender extends AbstractModel
{
    /**
     * @var string 发信地址
     */
    public $EmailAddress;

    /**
     * @var string 发信人别名
     */
    public $EmailSenderName;

    /**
     * @var integer 创建时间
     */
    public $CreatedTimestamp;

    /**
     * @var integer smtp密码类型,0=没有设置密码,1=已经设置了密码
     */
    public $SmtpPwdType;

    /**
     * @param string $EmailAddress 发信地址
     * @param string $EmailSenderName 发信人别名
     * @param integer $CreatedTimestamp 创建时间
     * @param integer $SmtpPwdType smtp密码类型,0=没有设置密码,1=已经设置了密码
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
        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("EmailSenderName",$param) and $param["EmailSenderName"] !== null) {
            $this->EmailSenderName = $param["EmailSenderName"];
        }

        if (array_key_exists("CreatedTimestamp",$param) and $param["CreatedTimestamp"] !== null) {
            $this->CreatedTimestamp = $param["CreatedTimestamp"];
        }

        if (array_key_exists("SmtpPwdType",$param) and $param["SmtpPwdType"] !== null) {
            $this->SmtpPwdType = $param["SmtpPwdType"];
        }
    }
}
