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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckLogKafkaConnectionState请求参数结构体
 *
 * @method integer getAccessType() 获取接入方式,1公网域名接入，2支撑环境接入
 * @method void setAccessType(integer $AccessType) 设置接入方式,1公网域名接入，2支撑环境接入
 * @method string getAccessAddr() 获取接入地址，域名或ip，带端口
 * @method void setAccessAddr(string $AccessAddr) 设置接入地址，域名或ip，带端口
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method integer getHasPwd() 获取0不用密码，1有密码
 * @method void setHasPwd(integer $HasPwd) 设置0不用密码，1有密码
 * @method string getPwd() 获取密码，使用aes加密
 * @method void setPwd(string $Pwd) 设置密码，使用aes加密
 * @method string getKafkaId() 获取kafka实例id
 * @method void setKafkaId(string $KafkaId) 设置kafka实例id
 * @method string getInsVersion() 获取kafka版本
 * @method void setInsVersion(string $InsVersion) 设置kafka版本
 */
class CheckLogKafkaConnectionStateRequest extends AbstractModel
{
    /**
     * @var integer 接入方式,1公网域名接入，2支撑环境接入
     */
    public $AccessType;

    /**
     * @var string 接入地址，域名或ip，带端口
     */
    public $AccessAddr;

    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var integer 0不用密码，1有密码
     */
    public $HasPwd;

    /**
     * @var string 密码，使用aes加密
     */
    public $Pwd;

    /**
     * @var string kafka实例id
     */
    public $KafkaId;

    /**
     * @var string kafka版本
     */
    public $InsVersion;

    /**
     * @param integer $AccessType 接入方式,1公网域名接入，2支撑环境接入
     * @param string $AccessAddr 接入地址，域名或ip，带端口
     * @param string $Username 用户名
     * @param integer $HasPwd 0不用密码，1有密码
     * @param string $Pwd 密码，使用aes加密
     * @param string $KafkaId kafka实例id
     * @param string $InsVersion kafka版本
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccessAddr",$param) and $param["AccessAddr"] !== null) {
            $this->AccessAddr = $param["AccessAddr"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("HasPwd",$param) and $param["HasPwd"] !== null) {
            $this->HasPwd = $param["HasPwd"];
        }

        if (array_key_exists("Pwd",$param) and $param["Pwd"] !== null) {
            $this->Pwd = $param["Pwd"];
        }

        if (array_key_exists("KafkaId",$param) and $param["KafkaId"] !== null) {
            $this->KafkaId = $param["KafkaId"];
        }

        if (array_key_exists("InsVersion",$param) and $param["InsVersion"] !== null) {
            $this->InsVersion = $param["InsVersion"];
        }
    }
}
