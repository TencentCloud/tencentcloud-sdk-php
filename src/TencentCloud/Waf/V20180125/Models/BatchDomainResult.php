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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量防护失败的域名以及对应的原因。
 *
 * @method string getDomain() 获取批量操作中失败的域名
 * @method void setDomain(string $Domain) 设置批量操作中失败的域名
 * @method string getMessage() 获取操作失败的原因
 * @method void setMessage(string $Message) 设置操作失败的原因
 */
class BatchDomainResult extends AbstractModel
{
    /**
     * @var string 批量操作中失败的域名
     */
    public $Domain;

    /**
     * @var string 操作失败的原因
     */
    public $Message;

    /**
     * @param string $Domain 批量操作中失败的域名
     * @param string $Message 操作失败的原因
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
