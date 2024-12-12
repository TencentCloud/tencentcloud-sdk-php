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
 * CreateJWKSAuthenticator请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getEndpoint() 获取jwks端点
 * @method void setEndpoint(string $Endpoint) 设置jwks端点
 * @method integer getRefreshInterval() 获取jwks刷新间隔,单位：秒
 * @method void setRefreshInterval(integer $RefreshInterval) 设置jwks刷新间隔,单位：秒
 * @method string getText() 获取jwks文本
 * @method void setText(string $Text) 设置jwks文本
 * @method string getStatus() 获取认证器是否开启：open-启用；close-关闭
 * @method void setStatus(string $Status) 设置认证器是否开启：open-启用；close-关闭
 * @method string getRemark() 获取说明
 * @method void setRemark(string $Remark) 设置说明
 * @method string getFrom() 获取设备连接时传递jwt的key；
username-使用用户名字段传递；
password-使用密码字段传递
 * @method void setFrom(string $From) 设置设备连接时传递jwt的key；
username-使用用户名字段传递；
password-使用密码字段传递
 */
class CreateJWKSAuthenticatorRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string jwks端点
     */
    public $Endpoint;

    /**
     * @var integer jwks刷新间隔,单位：秒
     */
    public $RefreshInterval;

    /**
     * @var string jwks文本
     */
    public $Text;

    /**
     * @var string 认证器是否开启：open-启用；close-关闭
     */
    public $Status;

    /**
     * @var string 说明
     */
    public $Remark;

    /**
     * @var string 设备连接时传递jwt的key；
username-使用用户名字段传递；
password-使用密码字段传递
     */
    public $From;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Endpoint jwks端点
     * @param integer $RefreshInterval jwks刷新间隔,单位：秒
     * @param string $Text jwks文本
     * @param string $Status 认证器是否开启：open-启用；close-关闭
     * @param string $Remark 说明
     * @param string $From 设备连接时传递jwt的key；
username-使用用户名字段传递；
password-使用密码字段传递
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

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("RefreshInterval",$param) and $param["RefreshInterval"] !== null) {
            $this->RefreshInterval = $param["RefreshInterval"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }
    }
}
