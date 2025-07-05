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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成员管理身份
 *
 * @method integer getIdentityId() 获取身份ID。
 * @method void setIdentityId(integer $IdentityId) 设置身份ID。
 * @method string getIdentityAliasName() 获取身份名称。
 * @method void setIdentityAliasName(string $IdentityAliasName) 设置身份名称。
 */
class MemberIdentity extends AbstractModel
{
    /**
     * @var integer 身份ID。
     */
    public $IdentityId;

    /**
     * @var string 身份名称。
     */
    public $IdentityAliasName;

    /**
     * @param integer $IdentityId 身份ID。
     * @param string $IdentityAliasName 身份名称。
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
        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }

        if (array_key_exists("IdentityAliasName",$param) and $param["IdentityAliasName"] !== null) {
            $this->IdentityAliasName = $param["IdentityAliasName"];
        }
    }
}
