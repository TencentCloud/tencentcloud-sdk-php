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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubdomainValidateTXTValue返回参数结构体
 *
 * @method string getDomain() 获取需要添加 TXT 记录的主域名。
 * @method void setDomain(string $Domain) 设置需要添加 TXT 记录的主域名。
 * @method string getSubdomain() 获取需要添加 TXT 记录的主机记录。
 * @method void setSubdomain(string $Subdomain) 设置需要添加 TXT 记录的主机记录。
 * @method string getRecordType() 获取需要添加记录类型。
 * @method void setRecordType(string $RecordType) 设置需要添加记录类型。
 * @method string getValue() 获取需要添加 TXT 记录的记录值。
 * @method void setValue(string $Value) 设置需要添加 TXT 记录的记录值。
 * @method string getParentDomain() 获取需要添加 TXT 记录的上级域名(可选，主域名和上级域名任选一个添加即可)。
 * @method void setParentDomain(string $ParentDomain) 设置需要添加 TXT 记录的上级域名(可选，主域名和上级域名任选一个添加即可)。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateSubdomainValidateTXTValueResponse extends AbstractModel
{
    /**
     * @var string 需要添加 TXT 记录的主域名。
     */
    public $Domain;

    /**
     * @var string 需要添加 TXT 记录的主机记录。
     */
    public $Subdomain;

    /**
     * @var string 需要添加记录类型。
     */
    public $RecordType;

    /**
     * @var string 需要添加 TXT 记录的记录值。
     */
    public $Value;

    /**
     * @var string 需要添加 TXT 记录的上级域名(可选，主域名和上级域名任选一个添加即可)。
     */
    public $ParentDomain;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 需要添加 TXT 记录的主域名。
     * @param string $Subdomain 需要添加 TXT 记录的主机记录。
     * @param string $RecordType 需要添加记录类型。
     * @param string $Value 需要添加 TXT 记录的记录值。
     * @param string $ParentDomain 需要添加 TXT 记录的上级域名(可选，主域名和上级域名任选一个添加即可)。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ParentDomain",$param) and $param["ParentDomain"] !== null) {
            $this->ParentDomain = $param["ParentDomain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
