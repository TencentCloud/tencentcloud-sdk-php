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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务来源
 *
 * @method array getAddresses() 获取微服务引擎接入IP地址信息
 * @method void setAddresses(array $Addresses) 设置微服务引擎接入IP地址信息
 * @method SourceInstanceVpcInfo getVpcInfo() 获取微服务引擎VPC信息
 * @method void setVpcInfo(SourceInstanceVpcInfo $VpcInfo) 设置微服务引擎VPC信息
 * @method SourceInstanceAuth getAuth() 获取微服务引擎鉴权信息
 * @method void setAuth(SourceInstanceAuth $Auth) 设置微服务引擎鉴权信息
 */
class SourceInfo extends AbstractModel
{
    /**
     * @var array 微服务引擎接入IP地址信息
     */
    public $Addresses;

    /**
     * @var SourceInstanceVpcInfo 微服务引擎VPC信息
     */
    public $VpcInfo;

    /**
     * @var SourceInstanceAuth 微服务引擎鉴权信息
     */
    public $Auth;

    /**
     * @param array $Addresses 微服务引擎接入IP地址信息
     * @param SourceInstanceVpcInfo $VpcInfo 微服务引擎VPC信息
     * @param SourceInstanceAuth $Auth 微服务引擎鉴权信息
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
        if (array_key_exists("Addresses",$param) and $param["Addresses"] !== null) {
            $this->Addresses = $param["Addresses"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = new SourceInstanceVpcInfo();
            $this->VpcInfo->deserialize($param["VpcInfo"]);
        }

        if (array_key_exists("Auth",$param) and $param["Auth"] !== null) {
            $this->Auth = new SourceInstanceAuth();
            $this->Auth->deserialize($param["Auth"]);
        }
    }
}
