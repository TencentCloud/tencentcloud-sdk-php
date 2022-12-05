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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCcGeoIPBlockConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getIP() 获取ip地址
 * @method void setIP(string $IP) 设置ip地址
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getProtocol() 获取协议类型
 * @method void setProtocol(string $Protocol) 设置协议类型
 * @method CcGeoIPBlockConfig getCcGeoIPBlockConfig() 获取CC区域封禁配置
 * @method void setCcGeoIPBlockConfig(CcGeoIPBlockConfig $CcGeoIPBlockConfig) 设置CC区域封禁配置
 */
class CreateCcGeoIPBlockConfigRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string ip地址
     */
    public $IP;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 协议类型
     */
    public $Protocol;

    /**
     * @var CcGeoIPBlockConfig CC区域封禁配置
     */
    public $CcGeoIPBlockConfig;

    /**
     * @param string $InstanceId 实例id
     * @param string $IP ip地址
     * @param string $Domain 域名
     * @param string $Protocol 协议类型
     * @param CcGeoIPBlockConfig $CcGeoIPBlockConfig CC区域封禁配置
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

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CcGeoIPBlockConfig",$param) and $param["CcGeoIPBlockConfig"] !== null) {
            $this->CcGeoIPBlockConfig = new CcGeoIPBlockConfig();
            $this->CcGeoIPBlockConfig->deserialize($param["CcGeoIPBlockConfig"]);
        }
    }
}
