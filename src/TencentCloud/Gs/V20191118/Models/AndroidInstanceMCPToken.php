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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓实例MCP Token
 *
 * @method string getTokenId() 获取<p>内部 ID，格式 k_ + 16 位 hex</p>
 * @method void setTokenId(string $TokenId) 设置<p>内部 ID，格式 k_ + 16 位 hex</p>
 * @method string getRole() 获取<p>ROOT / USER（大小写敏感），默认 USER。ROOT 可访问该 AppId 下全部实例</p>
 * @method void setRole(string $Role) 设置<p>ROOT / USER（大小写敏感），默认 USER。ROOT 可访问该 AppId 下全部实例</p>
 * @method string getTokenName() 获取<p>备注名</p>
 * @method void setTokenName(string $TokenName) 设置<p>备注名</p>
 * @method array getAllowedInstanceIds() 获取<p>USER 角色可访问的实例白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowedInstanceIds(array $AllowedInstanceIds) 设置<p>USER 角色可访问的实例白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：ISO8601 字符串；</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：ISO8601 字符串；</p>
 * @method string getExpiresTime() 获取<p>过期时间</p><p>参数格式：ISO8601 字符串；永不过期时为空串</p>
 * @method void setExpiresTime(string $ExpiresTime) 设置<p>过期时间</p><p>参数格式：ISO8601 字符串；永不过期时为空串</p>
 * @method string getStatus() 获取<p>或 EXPIRED；EXPIRED 由 ExpiresTime 推导。已删除的不出现在列表里</p><p>枚举值：</p><ul><li>ACTIVE： 正常可用的</li><li>EXPIRED： 过期的</li></ul>
 * @method void setStatus(string $Status) 设置<p>或 EXPIRED；EXPIRED 由 ExpiresTime 推导。已删除的不出现在列表里</p><p>枚举值：</p><ul><li>ACTIVE： 正常可用的</li><li>EXPIRED： 过期的</li></ul>
 */
class AndroidInstanceMCPToken extends AbstractModel
{
    /**
     * @var string <p>内部 ID，格式 k_ + 16 位 hex</p>
     */
    public $TokenId;

    /**
     * @var string <p>ROOT / USER（大小写敏感），默认 USER。ROOT 可访问该 AppId 下全部实例</p>
     */
    public $Role;

    /**
     * @var string <p>备注名</p>
     */
    public $TokenName;

    /**
     * @var array <p>USER 角色可访问的实例白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowedInstanceIds;

    /**
     * @var string <p>创建时间</p><p>参数格式：ISO8601 字符串；</p>
     */
    public $CreateTime;

    /**
     * @var string <p>过期时间</p><p>参数格式：ISO8601 字符串；永不过期时为空串</p>
     */
    public $ExpiresTime;

    /**
     * @var string <p>或 EXPIRED；EXPIRED 由 ExpiresTime 推导。已删除的不出现在列表里</p><p>枚举值：</p><ul><li>ACTIVE： 正常可用的</li><li>EXPIRED： 过期的</li></ul>
     */
    public $Status;

    /**
     * @param string $TokenId <p>内部 ID，格式 k_ + 16 位 hex</p>
     * @param string $Role <p>ROOT / USER（大小写敏感），默认 USER。ROOT 可访问该 AppId 下全部实例</p>
     * @param string $TokenName <p>备注名</p>
     * @param array $AllowedInstanceIds <p>USER 角色可访问的实例白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p><p>参数格式：ISO8601 字符串；</p>
     * @param string $ExpiresTime <p>过期时间</p><p>参数格式：ISO8601 字符串；永不过期时为空串</p>
     * @param string $Status <p>或 EXPIRED；EXPIRED 由 ExpiresTime 推导。已删除的不出现在列表里</p><p>枚举值：</p><ul><li>ACTIVE： 正常可用的</li><li>EXPIRED： 过期的</li></ul>
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
        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("TokenName",$param) and $param["TokenName"] !== null) {
            $this->TokenName = $param["TokenName"];
        }

        if (array_key_exists("AllowedInstanceIds",$param) and $param["AllowedInstanceIds"] !== null) {
            $this->AllowedInstanceIds = $param["AllowedInstanceIds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpiresTime",$param) and $param["ExpiresTime"] !== null) {
            $this->ExpiresTime = $param["ExpiresTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
