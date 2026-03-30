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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainOwner请求参数结构体
 *
 * @method string getDomainId() 获取域名ID
 * @method void setDomainId(string $DomainId) 设置域名ID
 * @method string getNewOwnerUin() 获取新用户UIN
 * @method void setNewOwnerUin(string $NewOwnerUin) 设置新用户UIN
 * @method string getNewOwnerAppId() 获取新用户APPID
 * @method void setNewOwnerAppId(string $NewOwnerAppId) 设置新用户APPID
 * @method boolean getTransferDns() 获取是否同时转移对应的 DNS 解析域名，默认false
 * @method void setTransferDns(boolean $TransferDns) 设置是否同时转移对应的 DNS 解析域名，默认false
 */
class ModifyDomainOwnerRequest extends AbstractModel
{
    /**
     * @var string 域名ID
     */
    public $DomainId;

    /**
     * @var string 新用户UIN
     */
    public $NewOwnerUin;

    /**
     * @var string 新用户APPID
     */
    public $NewOwnerAppId;

    /**
     * @var boolean 是否同时转移对应的 DNS 解析域名，默认false
     */
    public $TransferDns;

    /**
     * @param string $DomainId 域名ID
     * @param string $NewOwnerUin 新用户UIN
     * @param string $NewOwnerAppId 新用户APPID
     * @param boolean $TransferDns 是否同时转移对应的 DNS 解析域名，默认false
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("NewOwnerUin",$param) and $param["NewOwnerUin"] !== null) {
            $this->NewOwnerUin = $param["NewOwnerUin"];
        }

        if (array_key_exists("NewOwnerAppId",$param) and $param["NewOwnerAppId"] !== null) {
            $this->NewOwnerAppId = $param["NewOwnerAppId"];
        }

        if (array_key_exists("TransferDns",$param) and $param["TransferDns"] !== null) {
            $this->TransferDns = $param["TransferDns"];
        }
    }
}
