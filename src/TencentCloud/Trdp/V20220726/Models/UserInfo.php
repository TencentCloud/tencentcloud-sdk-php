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
namespace TencentCloud\Trdp\V20220726\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息	
 *
 * @method string getIp() 获取用户外网IP地址
 * @method void setIp(string $Ip) 设置用户外网IP地址
 * @method string getChannelSource() 获取来源渠道编码
 * @method void setChannelSource(string $ChannelSource) 设置来源渠道编码
 * @method integer getPlatform() 获取用户登录平台。1：Android 2：iOS 3：H5 4：小程序
 * @method void setPlatform(integer $Platform) 设置用户登录平台。1：Android 2：iOS 3：H5 4：小程序
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method integer getAge() 获取年龄
 * @method void setAge(integer $Age) 设置年龄
 * @method string getGender() 获取性别：
male（男）
female（女）
 * @method void setGender(string $Gender) 设置性别：
male（男）
female（女）
 * @method string getResidentIdentityCard() 获取身份证号
 * @method void setResidentIdentityCard(string $ResidentIdentityCard) 设置身份证号
 * @method string getEmail() 获取邮箱地址
 * @method void setEmail(string $Email) 设置邮箱地址
 * @method string getAddress() 获取用户地址
 * @method void setAddress(string $Address) 设置用户地址
 * @method string getNickname() 获取用户昵称
 * @method void setNickname(string $Nickname) 设置用户昵称
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string 用户外网IP地址
     */
    public $Ip;

    /**
     * @var string 来源渠道编码
     */
    public $ChannelSource;

    /**
     * @var integer 用户登录平台。1：Android 2：iOS 3：H5 4：小程序
     */
    public $Platform;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var integer 年龄
     */
    public $Age;

    /**
     * @var string 性别：
male（男）
female（女）
     */
    public $Gender;

    /**
     * @var string 身份证号
     */
    public $ResidentIdentityCard;

    /**
     * @var string 邮箱地址
     */
    public $Email;

    /**
     * @var string 用户地址
     */
    public $Address;

    /**
     * @var string 用户昵称
     */
    public $Nickname;

    /**
     * @param string $Ip 用户外网IP地址
     * @param string $ChannelSource 来源渠道编码
     * @param integer $Platform 用户登录平台。1：Android 2：iOS 3：H5 4：小程序
     * @param string $Name 姓名
     * @param integer $Age 年龄
     * @param string $Gender 性别：
male（男）
female（女）
     * @param string $ResidentIdentityCard 身份证号
     * @param string $Email 邮箱地址
     * @param string $Address 用户地址
     * @param string $Nickname 用户昵称
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ChannelSource",$param) and $param["ChannelSource"] !== null) {
            $this->ChannelSource = $param["ChannelSource"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("ResidentIdentityCard",$param) and $param["ResidentIdentityCard"] !== null) {
            $this->ResidentIdentityCard = $param["ResidentIdentityCard"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }
    }
}
