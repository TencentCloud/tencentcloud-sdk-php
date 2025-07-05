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
 * ModifyDomainOwnerBatch请求参数结构体
 *
 * @method array getDomains() 获取要过户的域名。
一次提交不大于4000个
 * @method void setDomains(array $Domains) 设置要过户的域名。
一次提交不大于4000个
 * @method string getNewOwnerUin() 获取转入账户的主uin。
 * @method void setNewOwnerUin(string $NewOwnerUin) 设置转入账户的主uin。
 * @method boolean getTransferDns() 获取是否同时转移对应的 DNS 解析域名，默认false
 * @method void setTransferDns(boolean $TransferDns) 设置是否同时转移对应的 DNS 解析域名，默认false
 * @method string getNewOwnerAppId() 获取转入账户的appid。
 * @method void setNewOwnerAppId(string $NewOwnerAppId) 设置转入账户的appid。
 */
class ModifyDomainOwnerBatchRequest extends AbstractModel
{
    /**
     * @var array 要过户的域名。
一次提交不大于4000个
     */
    public $Domains;

    /**
     * @var string 转入账户的主uin。
     */
    public $NewOwnerUin;

    /**
     * @var boolean 是否同时转移对应的 DNS 解析域名，默认false
     */
    public $TransferDns;

    /**
     * @var string 转入账户的appid。
     */
    public $NewOwnerAppId;

    /**
     * @param array $Domains 要过户的域名。
一次提交不大于4000个
     * @param string $NewOwnerUin 转入账户的主uin。
     * @param boolean $TransferDns 是否同时转移对应的 DNS 解析域名，默认false
     * @param string $NewOwnerAppId 转入账户的appid。
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("NewOwnerUin",$param) and $param["NewOwnerUin"] !== null) {
            $this->NewOwnerUin = $param["NewOwnerUin"];
        }

        if (array_key_exists("TransferDns",$param) and $param["TransferDns"] !== null) {
            $this->TransferDns = $param["TransferDns"];
        }

        if (array_key_exists("NewOwnerAppId",$param) and $param["NewOwnerAppId"] !== null) {
            $this->NewOwnerAppId = $param["NewOwnerAppId"];
        }
    }
}
