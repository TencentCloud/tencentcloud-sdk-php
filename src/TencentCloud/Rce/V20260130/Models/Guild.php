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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公会信息
 *
 * @method string getGuildId() 获取<p>公会唯一ID</p>
 * @method void setGuildId(string $GuildId) 设置<p>公会唯一ID</p>
 * @method string getGuildName() 获取<p>公会名称，允许空串</p>
 * @method void setGuildName(string $GuildName) 设置<p>公会名称，允许空串</p>
 * @method string getGuildSignature() 获取<p>公会签名，允许空串</p>
 * @method void setGuildSignature(string $GuildSignature) 设置<p>公会签名，允许空串</p>
 * @method string getPresidentUserId() 获取<p>公会会长账号ID</p>
 * @method void setPresidentUserId(string $PresidentUserId) 设置<p>公会会长账号ID</p>
 * @method string getPresidentRoleId() 获取<p>公会会长角色ID</p>
 * @method void setPresidentRoleId(string $PresidentRoleId) 设置<p>公会会长角色ID</p>
 */
class Guild extends AbstractModel
{
    /**
     * @var string <p>公会唯一ID</p>
     */
    public $GuildId;

    /**
     * @var string <p>公会名称，允许空串</p>
     */
    public $GuildName;

    /**
     * @var string <p>公会签名，允许空串</p>
     */
    public $GuildSignature;

    /**
     * @var string <p>公会会长账号ID</p>
     */
    public $PresidentUserId;

    /**
     * @var string <p>公会会长角色ID</p>
     */
    public $PresidentRoleId;

    /**
     * @param string $GuildId <p>公会唯一ID</p>
     * @param string $GuildName <p>公会名称，允许空串</p>
     * @param string $GuildSignature <p>公会签名，允许空串</p>
     * @param string $PresidentUserId <p>公会会长账号ID</p>
     * @param string $PresidentRoleId <p>公会会长角色ID</p>
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
        if (array_key_exists("GuildId",$param) and $param["GuildId"] !== null) {
            $this->GuildId = $param["GuildId"];
        }

        if (array_key_exists("GuildName",$param) and $param["GuildName"] !== null) {
            $this->GuildName = $param["GuildName"];
        }

        if (array_key_exists("GuildSignature",$param) and $param["GuildSignature"] !== null) {
            $this->GuildSignature = $param["GuildSignature"];
        }

        if (array_key_exists("PresidentUserId",$param) and $param["PresidentUserId"] !== null) {
            $this->PresidentUserId = $param["PresidentUserId"];
        }

        if (array_key_exists("PresidentRoleId",$param) and $param["PresidentRoleId"] !== null) {
            $this->PresidentRoleId = $param["PresidentRoleId"];
        }
    }
}
