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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteGlobalDomainDns请求参数结构体
 *
 * @method integer getDnsRecordId() 获取解析记录的ID
 * @method void setDnsRecordId(integer $DnsRecordId) 设置解析记录的ID
 */
class DeleteGlobalDomainDnsRequest extends AbstractModel
{
    /**
     * @var integer 解析记录的ID
     */
    public $DnsRecordId;

    /**
     * @param integer $DnsRecordId 解析记录的ID
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
        if (array_key_exists("DnsRecordId",$param) and $param["DnsRecordId"] !== null) {
            $this->DnsRecordId = $param["DnsRecordId"];
        }
    }
}
