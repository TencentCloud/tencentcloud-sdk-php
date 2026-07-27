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
 * 域名归属权验证指引信息
 *
 * @method string getDomain() 获取<p>归属权校验的域名</p>
 * @method void setDomain(string $Domain) 设置<p>归属权校验的域名</p>
 * @method array getDnsVerification() 获取<p>归属权校验dns校验信息</p>
 * @method void setDnsVerification(array $DnsVerification) 设置<p>归属权校验dns校验信息</p>
 * @method array getFileVerification() 获取<p>归属权校验文件校验信息</p>
 * @method void setFileVerification(array $FileVerification) 设置<p>归属权校验文件校验信息</p>
 */
class OwnershipVerificationInfo extends AbstractModel
{
    /**
     * @var string <p>归属权校验的域名</p>
     */
    public $Domain;

    /**
     * @var array <p>归属权校验dns校验信息</p>
     */
    public $DnsVerification;

    /**
     * @var array <p>归属权校验文件校验信息</p>
     */
    public $FileVerification;

    /**
     * @param string $Domain <p>归属权校验的域名</p>
     * @param array $DnsVerification <p>归属权校验dns校验信息</p>
     * @param array $FileVerification <p>归属权校验文件校验信息</p>
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

        if (array_key_exists("DnsVerification",$param) and $param["DnsVerification"] !== null) {
            $this->DnsVerification = [];
            foreach ($param["DnsVerification"] as $key => $value){
                $obj = new OwnershipVerificationDnsInfo();
                $obj->deserialize($value);
                array_push($this->DnsVerification, $obj);
            }
        }

        if (array_key_exists("FileVerification",$param) and $param["FileVerification"] !== null) {
            $this->FileVerification = [];
            foreach ($param["FileVerification"] as $key => $value){
                $obj = new OwnershipVerificationFileInfo();
                $obj->deserialize($value);
                array_push($this->FileVerification, $obj);
            }
        }
    }
}
