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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCredentialState请求参数结构体
 *
 * @method integer getDAPId() 获取DID应用Id
 * @method void setDAPId(integer $DAPId) 设置DID应用Id
 * @method string getOperateCredential() 获取更新VC状态的临时凭证内容，通过创建凭证接口(CreateCredential)生成并签名，凭证类型为：OperateCredential, 为安全起见凭证过期时间不适合太长，如设置为1分钟内
 * @method void setOperateCredential(string $OperateCredential) 设置更新VC状态的临时凭证内容，通过创建凭证接口(CreateCredential)生成并签名，凭证类型为：OperateCredential, 为安全起见凭证过期时间不适合太长，如设置为1分钟内
 * @method string getOriginCredential() 获取待更新凭证状态的原始凭证内容
 * @method void setOriginCredential(string $OriginCredential) 设置待更新凭证状态的原始凭证内容
 * @method CredentialStatusInfo getCredentialStatus() 获取凭证状态信息
 * @method void setCredentialStatus(CredentialStatusInfo $CredentialStatus) 设置凭证状态信息
 */
class UpdateCredentialStateRequest extends AbstractModel
{
    /**
     * @var integer DID应用Id
     */
    public $DAPId;

    /**
     * @var string 更新VC状态的临时凭证内容，通过创建凭证接口(CreateCredential)生成并签名，凭证类型为：OperateCredential, 为安全起见凭证过期时间不适合太长，如设置为1分钟内
     */
    public $OperateCredential;

    /**
     * @var string 待更新凭证状态的原始凭证内容
     */
    public $OriginCredential;

    /**
     * @var CredentialStatusInfo 凭证状态信息
     */
    public $CredentialStatus;

    /**
     * @param integer $DAPId DID应用Id
     * @param string $OperateCredential 更新VC状态的临时凭证内容，通过创建凭证接口(CreateCredential)生成并签名，凭证类型为：OperateCredential, 为安全起见凭证过期时间不适合太长，如设置为1分钟内
     * @param string $OriginCredential 待更新凭证状态的原始凭证内容
     * @param CredentialStatusInfo $CredentialStatus 凭证状态信息
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
        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }

        if (array_key_exists("OperateCredential",$param) and $param["OperateCredential"] !== null) {
            $this->OperateCredential = $param["OperateCredential"];
        }

        if (array_key_exists("OriginCredential",$param) and $param["OriginCredential"] !== null) {
            $this->OriginCredential = $param["OriginCredential"];
        }

        if (array_key_exists("CredentialStatus",$param) and $param["CredentialStatus"] !== null) {
            $this->CredentialStatus = new CredentialStatusInfo();
            $this->CredentialStatus->deserialize($param["CredentialStatus"]);
        }
    }
}
