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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGatewayIngress请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境 ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境 ID
 * @method string getGatewayName() 获取网关名称
 * @method void setGatewayName(string $GatewayName) 设置网关名称
 * @method string getGatewayType() 获取网关类型，如 clb
 * @method void setGatewayType(string $GatewayType) 设置网关类型，如 clb
 * @method string getName() 获取转发配置名称
 * @method void setName(string $Name) 设置转发配置名称
 * @method array getRules() 获取rules 配置
 * @method void setRules(array $Rules) 设置rules 配置
 * @method boolean getMixed() 获取是否混合 https，默认 false，可选值 true 代表有 https 协议监听
 * @method void setMixed(boolean $Mixed) 设置是否混合 https，默认 false，可选值 true 代表有 https 协议监听
 * @method array getTls() 获取tls 配置
 * @method void setTls(array $Tls) 设置tls 配置
 * @method string getRewriteType() 获取重定向模式，可选值：
- AUTO（自动重定向http到https）
- NONE（不使用重定向）
 * @method void setRewriteType(string $RewriteType) 设置重定向模式，可选值：
- AUTO（自动重定向http到https）
- NONE（不使用重定向）
 */
class ModifyGatewayIngressRequest extends AbstractModel
{
    /**
     * @var string 环境 ID
     */
    public $EnvironmentId;

    /**
     * @var string 网关名称
     */
    public $GatewayName;

    /**
     * @var string 网关类型，如 clb
     */
    public $GatewayType;

    /**
     * @var string 转发配置名称
     */
    public $Name;

    /**
     * @var array rules 配置
     */
    public $Rules;

    /**
     * @var boolean 是否混合 https，默认 false，可选值 true 代表有 https 协议监听
     */
    public $Mixed;

    /**
     * @var array tls 配置
     */
    public $Tls;

    /**
     * @var string 重定向模式，可选值：
- AUTO（自动重定向http到https）
- NONE（不使用重定向）
     */
    public $RewriteType;

    /**
     * @param string $EnvironmentId 环境 ID
     * @param string $GatewayName 网关名称
     * @param string $GatewayType 网关类型，如 clb
     * @param string $Name 转发配置名称
     * @param array $Rules rules 配置
     * @param boolean $Mixed 是否混合 https，默认 false，可选值 true 代表有 https 协议监听
     * @param array $Tls tls 配置
     * @param string $RewriteType 重定向模式，可选值：
- AUTO（自动重定向http到https）
- NONE（不使用重定向）
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new IngressRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Mixed",$param) and $param["Mixed"] !== null) {
            $this->Mixed = $param["Mixed"];
        }

        if (array_key_exists("Tls",$param) and $param["Tls"] !== null) {
            $this->Tls = [];
            foreach ($param["Tls"] as $key => $value){
                $obj = new IngressTls();
                $obj->deserialize($value);
                array_push($this->Tls, $obj);
            }
        }

        if (array_key_exists("RewriteType",$param) and $param["RewriteType"] !== null) {
            $this->RewriteType = $param["RewriteType"];
        }
    }
}
