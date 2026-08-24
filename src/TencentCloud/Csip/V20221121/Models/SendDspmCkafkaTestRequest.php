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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendDspmCkafkaTest请求参数结构体
 *
 * @method integer getVipType() 获取1为外网，7为支撑环境接入
 * @method void setVipType(integer $VipType) 设置1为外网，7为支撑环境接入
 * @method string getInstanceId() 获取ckafka实例id
 * @method void setInstanceId(string $InstanceId) 设置ckafka实例id
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getVip() 获取为7有效
 * @method void setVip(string $Vip) 设置为7有效
 * @method string getVport() 获取为7有效
 * @method void setVport(string $Vport) 设置为7有效
 * @method string getDomain() 获取域名，VipType为1有效
 * @method void setDomain(string $Domain) 设置域名，VipType为1有效
 * @method string getDomainPort() 获取域名端口，VipType为1有效
 * @method void setDomainPort(string $DomainPort) 设置域名端口，VipType为1有效
 * @method string getUsername() 获取用户名，VipType为1有效
 * @method void setUsername(string $Username) 设置用户名，VipType为1有效
 * @method string getPassword() 获取用户密码，VipType为1有效
 * @method void setPassword(string $Password) 设置用户密码，VipType为1有效
 */
class SendDspmCkafkaTestRequest extends AbstractModel
{
    /**
     * @var integer 1为外网，7为支撑环境接入
     */
    public $VipType;

    /**
     * @var string ckafka实例id
     */
    public $InstanceId;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string 为7有效
     */
    public $Vip;

    /**
     * @var string 为7有效
     */
    public $Vport;

    /**
     * @var string 域名，VipType为1有效
     */
    public $Domain;

    /**
     * @var string 域名端口，VipType为1有效
     */
    public $DomainPort;

    /**
     * @var string 用户名，VipType为1有效
     */
    public $Username;

    /**
     * @var string 用户密码，VipType为1有效
     */
    public $Password;

    /**
     * @param integer $VipType 1为外网，7为支撑环境接入
     * @param string $InstanceId ckafka实例id
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Vip 为7有效
     * @param string $Vport 为7有效
     * @param string $Domain 域名，VipType为1有效
     * @param string $DomainPort 域名端口，VipType为1有效
     * @param string $Username 用户名，VipType为1有效
     * @param string $Password 用户密码，VipType为1有效
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
        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainPort",$param) and $param["DomainPort"] !== null) {
            $this->DomainPort = $param["DomainPort"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
