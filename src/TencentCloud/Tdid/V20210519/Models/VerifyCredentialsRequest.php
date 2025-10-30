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
 * VerifyCredentials请求参数结构体
 *
 * @method integer getVerifyType() 获取0:仅验证签名，1:验证签名和链上状态，2, 仅验证链上状态，默认为0, 3.验证DID和凭证状态以及签名，4. 验证历史凭证有效性
 * @method void setVerifyType(integer $VerifyType) 设置0:仅验证签名，1:验证签名和链上状态，2, 仅验证链上状态，默认为0, 3.验证DID和凭证状态以及签名，4. 验证历史凭证有效性
 * @method string getCredentialData() 获取凭证内容
 * @method void setCredentialData(string $CredentialData) 设置凭证内容
 * @method integer getDAPId() 获取DID应用id
 * @method void setDAPId(integer $DAPId) 设置DID应用id
 */
class VerifyCredentialsRequest extends AbstractModel
{
    /**
     * @var integer 0:仅验证签名，1:验证签名和链上状态，2, 仅验证链上状态，默认为0, 3.验证DID和凭证状态以及签名，4. 验证历史凭证有效性
     */
    public $VerifyType;

    /**
     * @var string 凭证内容
     */
    public $CredentialData;

    /**
     * @var integer DID应用id
     */
    public $DAPId;

    /**
     * @param integer $VerifyType 0:仅验证签名，1:验证签名和链上状态，2, 仅验证链上状态，默认为0, 3.验证DID和凭证状态以及签名，4. 验证历史凭证有效性
     * @param string $CredentialData 凭证内容
     * @param integer $DAPId DID应用id
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
        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("CredentialData",$param) and $param["CredentialData"] !== null) {
            $this->CredentialData = $param["CredentialData"];
        }

        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }
    }
}
