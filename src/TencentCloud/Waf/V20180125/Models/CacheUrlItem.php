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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防篡改url元素
 *
 * @method string getId() 获取Id
 * @method void setId(string $Id) 设置Id
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getUri() 获取uri
 * @method void setUri(string $Uri) 设置uri
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 */
class CacheUrlItem extends AbstractModel
{
    /**
     * @var string Id
     */
    public $Id;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string uri
     */
    public $Uri;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @param string $Id Id
     * @param string $Name 名称
     * @param string $Domain 域名
     * @param string $Uri uri
     * @param string $Protocol 协议
     * @param string $Status 状态
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
