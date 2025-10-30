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
 * GetCredentialState请求参数结构体
 *
 * @method string getCredentialId() 获取凭证唯一Id
 * @method void setCredentialId(string $CredentialId) 设置凭证唯一Id
 * @method integer getDAPId() 获取用户应用Id
 * @method void setDAPId(integer $DAPId) 设置用户应用Id
 */
class GetCredentialStateRequest extends AbstractModel
{
    /**
     * @var string 凭证唯一Id
     */
    public $CredentialId;

    /**
     * @var integer 用户应用Id
     */
    public $DAPId;

    /**
     * @param string $CredentialId 凭证唯一Id
     * @param integer $DAPId 用户应用Id
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
        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }
    }
}
