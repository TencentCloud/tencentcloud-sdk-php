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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RotateKey请求参数结构体
 *
 * @method string getKeyId() 获取<p>CMK的全局唯一标识符</p>
 * @method void setKeyId(string $KeyId) 设置<p>CMK的全局唯一标识符</p>
 * @method MemberAccount getMemberAccount() 获取<p>成员账号信息，用于多账号场景</p>
 * @method void setMemberAccount(MemberAccount $MemberAccount) 设置<p>成员账号信息，用于多账号场景</p>
 */
class RotateKeyRequest extends AbstractModel
{
    /**
     * @var string <p>CMK的全局唯一标识符</p>
     */
    public $KeyId;

    /**
     * @var MemberAccount <p>成员账号信息，用于多账号场景</p>
     */
    public $MemberAccount;

    /**
     * @param string $KeyId <p>CMK的全局唯一标识符</p>
     * @param MemberAccount $MemberAccount <p>成员账号信息，用于多账号场景</p>
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("MemberAccount",$param) and $param["MemberAccount"] !== null) {
            $this->MemberAccount = new MemberAccount();
            $this->MemberAccount->deserialize($param["MemberAccount"]);
        }
    }
}
