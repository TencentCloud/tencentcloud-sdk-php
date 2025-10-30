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
 * 消息接收人信息
 *
 * @method integer getUid() 获取id
 * @method void setUid(integer $Uid) 设置id
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNumber() 获取手机号码
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码
 * @method integer getPhoneFlag() 获取手机号码是否验证
 * @method void setPhoneFlag(integer $PhoneFlag) 设置手机号码是否验证
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method integer getEmailFlag() 获取邮箱是否验证
 * @method void setEmailFlag(integer $EmailFlag) 设置邮箱是否验证
 * @method integer getIsReceiverOwner() 获取是否主联系人
 * @method void setIsReceiverOwner(integer $IsReceiverOwner) 设置是否主联系人
 * @method integer getWechatFlag() 获取是否允许微信接收通知
 * @method void setWechatFlag(integer $WechatFlag) 设置是否允许微信接收通知
 * @method integer getUin() 获取账号uin
 * @method void setUin(integer $Uin) 设置账号uin
 * @method string getCountryCode() 获取国家代码
 * @method void setCountryCode(string $CountryCode) 设置国家代码
 */
class Receiver extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Uid;

    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 手机号码
     */
    public $PhoneNumber;

    /**
     * @var integer 手机号码是否验证
     */
    public $PhoneFlag;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var integer 邮箱是否验证
     */
    public $EmailFlag;

    /**
     * @var integer 是否主联系人
     */
    public $IsReceiverOwner;

    /**
     * @var integer 是否允许微信接收通知
     */
    public $WechatFlag;

    /**
     * @var integer 账号uin
     */
    public $Uin;

    /**
     * @var string 国家代码
     */
    public $CountryCode;

    /**
     * @param integer $Uid id
     * @param string $Name 名字
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNumber 手机号码
     * @param integer $PhoneFlag 手机号码是否验证
     * @param string $Email 邮箱
     * @param integer $EmailFlag 邮箱是否验证
     * @param integer $IsReceiverOwner 是否主联系人
     * @param integer $WechatFlag 是否允许微信接收通知
     * @param integer $Uin 账号uin
     * @param string $CountryCode 国家代码
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("PhoneFlag",$param) and $param["PhoneFlag"] !== null) {
            $this->PhoneFlag = $param["PhoneFlag"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("EmailFlag",$param) and $param["EmailFlag"] !== null) {
            $this->EmailFlag = $param["EmailFlag"];
        }

        if (array_key_exists("IsReceiverOwner",$param) and $param["IsReceiverOwner"] !== null) {
            $this->IsReceiverOwner = $param["IsReceiverOwner"];
        }

        if (array_key_exists("WechatFlag",$param) and $param["WechatFlag"] !== null) {
            $this->WechatFlag = $param["WechatFlag"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }
    }
}
