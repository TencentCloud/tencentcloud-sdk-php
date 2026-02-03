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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindCloudBaseAccessDomain请求参数结构体
 *
 * @method string getServiceId() 获取服务Id，目前是指环境Id
 * @method void setServiceId(string $ServiceId) 设置服务Id，目前是指环境Id
 * @method string getDomain() 获取自定义域名
 * @method void setDomain(string $Domain) 设置自定义域名
 * @method string getCertId() 获取腾讯云证书Id
 * @method void setCertId(string $CertId) 设置腾讯云证书Id
 * @method integer getBindFlag() 获取默认1，1 绑定默认Cdn，2 绑定TcbIngress（不经过cdn），4 绑定自定义cdn
 * @method void setBindFlag(integer $BindFlag) 设置默认1，1 绑定默认Cdn，2 绑定TcbIngress（不经过cdn），4 绑定自定义cdn
 * @method string getCustomCname() 获取自定义cdn cname域名
 * @method void setCustomCname(string $CustomCname) 设置自定义cdn cname域名
 */
class BindCloudBaseAccessDomainRequest extends AbstractModel
{
    /**
     * @var string 服务Id，目前是指环境Id
     */
    public $ServiceId;

    /**
     * @var string 自定义域名
     */
    public $Domain;

    /**
     * @var string 腾讯云证书Id
     */
    public $CertId;

    /**
     * @var integer 默认1，1 绑定默认Cdn，2 绑定TcbIngress（不经过cdn），4 绑定自定义cdn
     */
    public $BindFlag;

    /**
     * @var string 自定义cdn cname域名
     */
    public $CustomCname;

    /**
     * @param string $ServiceId 服务Id，目前是指环境Id
     * @param string $Domain 自定义域名
     * @param string $CertId 腾讯云证书Id
     * @param integer $BindFlag 默认1，1 绑定默认Cdn，2 绑定TcbIngress（不经过cdn），4 绑定自定义cdn
     * @param string $CustomCname 自定义cdn cname域名
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("BindFlag",$param) and $param["BindFlag"] !== null) {
            $this->BindFlag = $param["BindFlag"];
        }

        if (array_key_exists("CustomCname",$param) and $param["CustomCname"] !== null) {
            $this->CustomCname = $param["CustomCname"];
        }
    }
}
