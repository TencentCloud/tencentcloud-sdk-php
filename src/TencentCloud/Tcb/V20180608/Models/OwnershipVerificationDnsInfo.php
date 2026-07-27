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
 * 域名归属权验证指引DNS验证信息
 *
 * @method string getSubdomain() 获取<p>归属权校验dns子域名</p>
 * @method void setSubdomain(string $Subdomain) 设置<p>归属权校验dns子域名</p>
 * @method string getRecordType() 获取<p>归属权校验dns记录类型</p>
 * @method void setRecordType(string $RecordType) 设置<p>归属权校验dns记录类型</p>
 * @method string getRecordValue() 获取<p>归属权校验dns记录值</p>
 * @method void setRecordValue(string $RecordValue) 设置<p>归属权校验dns记录值</p>
 */
class OwnershipVerificationDnsInfo extends AbstractModel
{
    /**
     * @var string <p>归属权校验dns子域名</p>
     */
    public $Subdomain;

    /**
     * @var string <p>归属权校验dns记录类型</p>
     */
    public $RecordType;

    /**
     * @var string <p>归属权校验dns记录值</p>
     */
    public $RecordValue;

    /**
     * @param string $Subdomain <p>归属权校验dns子域名</p>
     * @param string $RecordType <p>归属权校验dns记录类型</p>
     * @param string $RecordValue <p>归属权校验dns记录值</p>
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
        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordValue",$param) and $param["RecordValue"] !== null) {
            $this->RecordValue = $param["RecordValue"];
        }
    }
}
