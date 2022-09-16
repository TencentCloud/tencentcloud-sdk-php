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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthenticateDomainOwner返回参数结构体
 *
 * @method string getContent() 获取验证内容。
VerifyType 传 dnsCheck 时，为要配的 TXT 记录值。
VerifyType 传 fileCheck 时，为文件内容。
 * @method void setContent(string $Content) 设置验证内容。
VerifyType 传 dnsCheck 时，为要配的 TXT 记录值。
VerifyType 传 fileCheck 时，为文件内容。
 * @method integer getStatus() 获取域名验证状态。
>=0 为已验证归属。
<0 未验证归属权。
 * @method void setStatus(integer $Status) 设置域名验证状态。
>=0 为已验证归属。
<0 未验证归属权。
 * @method string getMainDomain() 获取DomainName 对应的主域名。
同一主域名下的所有域名只需成功验证一次，后续均无需再验证。
 * @method void setMainDomain(string $MainDomain) 设置DomainName 对应的主域名。
同一主域名下的所有域名只需成功验证一次，后续均无需再验证。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class AuthenticateDomainOwnerResponse extends AbstractModel
{
    /**
     * @var string 验证内容。
VerifyType 传 dnsCheck 时，为要配的 TXT 记录值。
VerifyType 传 fileCheck 时，为文件内容。
     */
    public $Content;

    /**
     * @var integer 域名验证状态。
>=0 为已验证归属。
<0 未验证归属权。
     */
    public $Status;

    /**
     * @var string DomainName 对应的主域名。
同一主域名下的所有域名只需成功验证一次，后续均无需再验证。
     */
    public $MainDomain;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Content 验证内容。
VerifyType 传 dnsCheck 时，为要配的 TXT 记录值。
VerifyType 传 fileCheck 时，为文件内容。
     * @param integer $Status 域名验证状态。
>=0 为已验证归属。
<0 未验证归属权。
     * @param string $MainDomain DomainName 对应的主域名。
同一主域名下的所有域名只需成功验证一次，后续均无需再验证。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MainDomain",$param) and $param["MainDomain"] !== null) {
            $this->MainDomain = $param["MainDomain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
