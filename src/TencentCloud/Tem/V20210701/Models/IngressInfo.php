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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ingress 配置
 *
 * @method string getEnvironmentId() 获取环境ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID
 * @method string getAddressIPVersion() 获取ip version
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置ip version
 * @method string getIngressName() 获取ingress name
 * @method void setIngressName(string $IngressName) 设置ingress name
 * @method array getRules() 获取rules 配置
 * @method void setRules(array $Rules) 设置rules 配置
 * @method string getClbId() 获取clb ID
 * @method void setClbId(string $ClbId) 设置clb ID
 * @method string getClusterNamespace() 获取环境namespace
 * @method void setClusterNamespace(string $ClusterNamespace) 设置环境namespace
 * @method array getTls() 获取tls 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTls(array $Tls) 设置tls 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取环境集群ID
 * @method void setClusterId(string $ClusterId) 设置环境集群ID
 * @method string getVip() 获取clb ip
 * @method void setVip(string $Vip) 设置clb ip
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method boolean getMixed() 获取是否混合 https，默认 false，可选值 true 代表有 https 协议监听
 * @method void setMixed(boolean $Mixed) 设置是否混合 https，默认 false，可选值 true 代表有 https 协议监听
 * @method string getRewriteType() 获取重定向模式，可选值：
- AUTO（自动重定向http到https）
- NONE（不使用重定向）
 * @method void setRewriteType(string $RewriteType) 设置重定向模式，可选值：
- AUTO（自动重定向http到https）
- NONE（不使用重定向）
 * @method string getDomain() 获取clb 域名
 * @method void setDomain(string $Domain) 设置clb 域名
 */
class IngressInfo extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvironmentId;

    /**
     * @var string ip version
     */
    public $AddressIPVersion;

    /**
     * @var string ingress name
     */
    public $IngressName;

    /**
     * @var array rules 配置
     */
    public $Rules;

    /**
     * @var string clb ID
     */
    public $ClbId;

    /**
     * @var string 环境namespace
     */
    public $ClusterNamespace;

    /**
     * @var array tls 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tls;

    /**
     * @var string 环境集群ID
     */
    public $ClusterId;

    /**
     * @var string clb ip
     */
    public $Vip;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 是否混合 https，默认 false，可选值 true 代表有 https 协议监听
     */
    public $Mixed;

    /**
     * @var string 重定向模式，可选值：
- AUTO（自动重定向http到https）
- NONE（不使用重定向）
     */
    public $RewriteType;

    /**
     * @var string clb 域名
     */
    public $Domain;

    /**
     * @param string $EnvironmentId 环境ID
     * @param string $AddressIPVersion ip version
     * @param string $IngressName ingress name
     * @param array $Rules rules 配置
     * @param string $ClbId clb ID
     * @param string $ClusterNamespace 环境namespace
     * @param array $Tls tls 配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 环境集群ID
     * @param string $Vip clb ip
     * @param string $CreateTime 创建时间
     * @param boolean $Mixed 是否混合 https，默认 false，可选值 true 代表有 https 协议监听
     * @param string $RewriteType 重定向模式，可选值：
- AUTO（自动重定向http到https）
- NONE（不使用重定向）
     * @param string $Domain clb 域名
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

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("IngressName",$param) and $param["IngressName"] !== null) {
            $this->IngressName = $param["IngressName"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new IngressRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("ClbId",$param) and $param["ClbId"] !== null) {
            $this->ClbId = $param["ClbId"];
        }

        if (array_key_exists("ClusterNamespace",$param) and $param["ClusterNamespace"] !== null) {
            $this->ClusterNamespace = $param["ClusterNamespace"];
        }

        if (array_key_exists("Tls",$param) and $param["Tls"] !== null) {
            $this->Tls = [];
            foreach ($param["Tls"] as $key => $value){
                $obj = new IngressTls();
                $obj->deserialize($value);
                array_push($this->Tls, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Mixed",$param) and $param["Mixed"] !== null) {
            $this->Mixed = $param["Mixed"];
        }

        if (array_key_exists("RewriteType",$param) and $param["RewriteType"] !== null) {
            $this->RewriteType = $param["RewriteType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
