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
 * DisableDataKey请求参数结构体
 *
 * @method string getDataKeyId() 获取数据密钥唯一标识符
 * @method void setDataKeyId(string $DataKeyId) 设置数据密钥唯一标识符
 * @method MemberAccount getMemberAccount() 获取可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
 * @method void setMemberAccount(MemberAccount $MemberAccount) 设置可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
 */
class DisableDataKeyRequest extends AbstractModel
{
    /**
     * @var string 数据密钥唯一标识符
     */
    public $DataKeyId;

    /**
     * @var MemberAccount 可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
     */
    public $MemberAccount;

    /**
     * @param string $DataKeyId 数据密钥唯一标识符
     * @param MemberAccount $MemberAccount 可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
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
        if (array_key_exists("DataKeyId",$param) and $param["DataKeyId"] !== null) {
            $this->DataKeyId = $param["DataKeyId"];
        }

        if (array_key_exists("MemberAccount",$param) and $param["MemberAccount"] !== null) {
            $this->MemberAccount = new MemberAccount();
            $this->MemberAccount->deserialize($param["MemberAccount"]);
        }
    }
}
