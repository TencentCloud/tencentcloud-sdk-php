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
 * UpdateKeyDescription请求参数结构体
 *
 * @method string getDescription() 获取新的描述信息，最大支持1024字节
 * @method void setDescription(string $Description) 设置新的描述信息，最大支持1024字节
 * @method string getKeyId() 获取需要修改描述信息的CMK ID
 * @method void setKeyId(string $KeyId) 设置需要修改描述信息的CMK ID
 * @method MemberAccount getMemberAccount() 获取可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
 * @method void setMemberAccount(MemberAccount $MemberAccount) 设置可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
 */
class UpdateKeyDescriptionRequest extends AbstractModel
{
    /**
     * @var string 新的描述信息，最大支持1024字节
     */
    public $Description;

    /**
     * @var string 需要修改描述信息的CMK ID
     */
    public $KeyId;

    /**
     * @var MemberAccount 可信服务成员账号信息,当前账号时管理员或者委派管理员时有效。
     */
    public $MemberAccount;

    /**
     * @param string $Description 新的描述信息，最大支持1024字节
     * @param string $KeyId 需要修改描述信息的CMK ID
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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
