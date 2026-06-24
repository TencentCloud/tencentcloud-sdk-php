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
 * 账号详情
 *
 * @method integer getUin() 获取<p>子账号账号ID。</p>
 * @method void setUin(integer $Uin) 设置<p>子账号账号ID。</p>
 * @method string getName() 获取<p>子账号用户名。</p>
 * @method void setName(string $Name) 设置<p>子账号用户名。</p>
 * @method integer getUid() 获取<p>子账号 UID。</p>
 * @method void setUid(integer $Uid) 设置<p>子账号 UID。</p>
 * @method string getRemark() 获取<p>子账号备注。</p>
 * @method void setRemark(string $Remark) 设置<p>子账号备注。</p>
 * @method integer getConsoleLogin() 获取<p>子账号能否登录控制台。</p>
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置<p>子账号能否登录控制台。</p>
 * @method string getPhoneNum() 获取<p>手机号。</p>
 * @method void setPhoneNum(string $PhoneNum) 设置<p>手机号。</p>
 * @method string getCountryCode() 获取<p>区号。</p>
 * @method void setCountryCode(string $CountryCode) 设置<p>区号。</p>
 * @method string getEmail() 获取<p>邮箱。</p>
 * @method void setEmail(string $Email) 设置<p>邮箱。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getUserType() 获取<p>账号类型</p><p>枚举值：</p><ul><li>Owner： 主账号</li><li>SubUser： 子用户</li><li>CICUser： CIC 用户</li><li>WechatCorpUser： 企业微信子用户</li><li>AgentIdentity： AgentIdentity用户</li><li>Collaborator： 协作者</li><li>MessageReceiver： 消息接收者</li><li>Unknown： 未知</li></ul>
 * @method void setUserType(string $UserType) 设置<p>账号类型</p><p>枚举值：</p><ul><li>Owner： 主账号</li><li>SubUser： 子用户</li><li>CICUser： CIC 用户</li><li>WechatCorpUser： 企业微信子用户</li><li>AgentIdentity： AgentIdentity用户</li><li>Collaborator： 协作者</li><li>MessageReceiver： 消息接收者</li><li>Unknown： 未知</li></ul>
 */
class ListAllUser extends AbstractModel
{
    /**
     * @var integer <p>子账号账号ID。</p>
     */
    public $Uin;

    /**
     * @var string <p>子账号用户名。</p>
     */
    public $Name;

    /**
     * @var integer <p>子账号 UID。</p>
     */
    public $Uid;

    /**
     * @var string <p>子账号备注。</p>
     */
    public $Remark;

    /**
     * @var integer <p>子账号能否登录控制台。</p>
     */
    public $ConsoleLogin;

    /**
     * @var string <p>手机号。</p>
     */
    public $PhoneNum;

    /**
     * @var string <p>区号。</p>
     */
    public $CountryCode;

    /**
     * @var string <p>邮箱。</p>
     */
    public $Email;

    /**
     * @var string <p>创建时间。</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>账号类型</p><p>枚举值：</p><ul><li>Owner： 主账号</li><li>SubUser： 子用户</li><li>CICUser： CIC 用户</li><li>WechatCorpUser： 企业微信子用户</li><li>AgentIdentity： AgentIdentity用户</li><li>Collaborator： 协作者</li><li>MessageReceiver： 消息接收者</li><li>Unknown： 未知</li></ul>
     */
    public $UserType;

    /**
     * @param integer $Uin <p>子账号账号ID。</p>
     * @param string $Name <p>子账号用户名。</p>
     * @param integer $Uid <p>子账号 UID。</p>
     * @param string $Remark <p>子账号备注。</p>
     * @param integer $ConsoleLogin <p>子账号能否登录控制台。</p>
     * @param string $PhoneNum <p>手机号。</p>
     * @param string $CountryCode <p>区号。</p>
     * @param string $Email <p>邮箱。</p>
     * @param string $CreateTime <p>创建时间。</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $UserType <p>账号类型</p><p>枚举值：</p><ul><li>Owner： 主账号</li><li>SubUser： 子用户</li><li>CICUser： CIC 用户</li><li>WechatCorpUser： 企业微信子用户</li><li>AgentIdentity： AgentIdentity用户</li><li>Collaborator： 协作者</li><li>MessageReceiver： 消息接收者</li><li>Unknown： 未知</li></ul>
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
