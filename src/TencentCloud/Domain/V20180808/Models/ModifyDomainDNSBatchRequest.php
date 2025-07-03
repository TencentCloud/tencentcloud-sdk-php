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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainDNSBatch请求参数结构体
 *
 * @method array getDomains() 获取批量操作的域名。
一次提交不超过4000个
 * @method void setDomains(array $Domains) 设置批量操作的域名。
一次提交不超过4000个
 * @method array getDns() 获取域名DNS 数组。
不少于2个，一般建议2-6个
 * @method void setDns(array $Dns) 设置域名DNS 数组。
不少于2个，一般建议2-6个
 */
class ModifyDomainDNSBatchRequest extends AbstractModel
{
    /**
     * @var array 批量操作的域名。
一次提交不超过4000个
     */
    public $Domains;

    /**
     * @var array 域名DNS 数组。
不少于2个，一般建议2-6个
     */
    public $Dns;

    /**
     * @param array $Domains 批量操作的域名。
一次提交不超过4000个
     * @param array $Dns 域名DNS 数组。
不少于2个，一般建议2-6个
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

        if (array_key_exists("Dns",$param) and $param["Dns"] !== null) {
            $this->Dns = $param["Dns"];
        }
    }
}
