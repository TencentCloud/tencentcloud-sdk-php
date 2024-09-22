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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateJWTAuthenticator请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getAlgorithm() 获取算法：hmac-based，public-key
 * @method void setAlgorithm(string $Algorithm) 设置算法：hmac-based，public-key
 * @method string getFrom() 获取设备连接时传递jwt的key；username-使用用户名字段传递；password-使用密码字段传递
 * @method void setFrom(string $From) 设置设备连接时传递jwt的key；username-使用用户名字段传递；password-使用密码字段传递
 * @method string getSecret() 获取密码
 * @method void setSecret(string $Secret) 设置密码
 * @method string getPublicKey() 获取公钥
 * @method void setPublicKey(string $PublicKey) 设置公钥
 * @method string getStatus() 获取认证器是否开启：open-启用；close-关闭
 * @method void setStatus(string $Status) 设置认证器是否开启：open-启用；close-关闭
 * @method string getRemark() 获取说明
 * @method void setRemark(string $Remark) 设置说明
 */
class CreateJWTAuthenticatorRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 算法：hmac-based，public-key
     */
    public $Algorithm;

    /**
     * @var string 设备连接时传递jwt的key；username-使用用户名字段传递；password-使用密码字段传递
     */
    public $From;

    /**
     * @var string 密码
     */
    public $Secret;

    /**
     * @var string 公钥
     */
    public $PublicKey;

    /**
     * @var string 认证器是否开启：open-启用；close-关闭
     */
    public $Status;

    /**
     * @var string 说明
     */
    public $Remark;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Algorithm 算法：hmac-based，public-key
     * @param string $From 设备连接时传递jwt的key；username-使用用户名字段传递；password-使用密码字段传递
     * @param string $Secret 密码
     * @param string $PublicKey 公钥
     * @param string $Status 认证器是否开启：open-启用；close-关闭
     * @param string $Remark 说明
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
