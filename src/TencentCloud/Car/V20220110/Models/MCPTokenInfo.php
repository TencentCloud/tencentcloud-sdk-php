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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP Token 信息
 *
 * @method string getTokenId() 获取<p>TokenId</p><p>用于管理 Token 数据，可用来延长对应 Token 有效时间</p>
 * @method void setTokenId(string $TokenId) 设置<p>TokenId</p><p>用于管理 Token 数据，可用来延长对应 Token 有效时间</p>
 * @method string getTokenName() 获取<p>Token 名称（注释）</p>
 * @method void setTokenName(string $TokenName) 设置<p>Token 名称（注释）</p>
 * @method string getUserId() 获取<p>用户 Id</p><p>固定使用这个 UserId  来操作云渲染并发资源（为空不限制）</p>
 * @method void setUserId(string $UserId) 设置<p>用户 Id</p><p>固定使用这个 UserId  来操作云渲染并发资源（为空不限制）</p>
 * @method array getScopes() 获取<p>权限范围</p><p>默认值：[&quot;*&quot;]</p><p>用于指定操作权限，默认拥有全部权限</p>
 * @method void setScopes(array $Scopes) 设置<p>权限范围</p><p>默认值：[&quot;*&quot;]</p><p>用于指定操作权限，默认拥有全部权限</p>
 * @method string getStatus() 获取<p>Token 状态</p><p>枚举值：</p><ul><li>ACTIVE： 正常状态，未被吊销。不代表还在有效期内</li><li>REVOKED： 已被吊销，永久失效</li></ul><p>默认值：ACTIVE</p>
 * @method void setStatus(string $Status) 设置<p>Token 状态</p><p>枚举值：</p><ul><li>ACTIVE： 正常状态，未被吊销。不代表还在有效期内</li><li>REVOKED： 已被吊销，永久失效</li></ul><p>默认值：ACTIVE</p>
 * @method string getCreatedTime() 获取<p>Token 创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>Token 创建时间</p>
 * @method string getExpiresTime() 获取<p>Token 过期时间</p>
 * @method void setExpiresTime(string $ExpiresTime) 设置<p>Token 过期时间</p>
 */
class MCPTokenInfo extends AbstractModel
{
    /**
     * @var string <p>TokenId</p><p>用于管理 Token 数据，可用来延长对应 Token 有效时间</p>
     */
    public $TokenId;

    /**
     * @var string <p>Token 名称（注释）</p>
     */
    public $TokenName;

    /**
     * @var string <p>用户 Id</p><p>固定使用这个 UserId  来操作云渲染并发资源（为空不限制）</p>
     */
    public $UserId;

    /**
     * @var array <p>权限范围</p><p>默认值：[&quot;*&quot;]</p><p>用于指定操作权限，默认拥有全部权限</p>
     */
    public $Scopes;

    /**
     * @var string <p>Token 状态</p><p>枚举值：</p><ul><li>ACTIVE： 正常状态，未被吊销。不代表还在有效期内</li><li>REVOKED： 已被吊销，永久失效</li></ul><p>默认值：ACTIVE</p>
     */
    public $Status;

    /**
     * @var string <p>Token 创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>Token 过期时间</p>
     */
    public $ExpiresTime;

    /**
     * @param string $TokenId <p>TokenId</p><p>用于管理 Token 数据，可用来延长对应 Token 有效时间</p>
     * @param string $TokenName <p>Token 名称（注释）</p>
     * @param string $UserId <p>用户 Id</p><p>固定使用这个 UserId  来操作云渲染并发资源（为空不限制）</p>
     * @param array $Scopes <p>权限范围</p><p>默认值：[&quot;*&quot;]</p><p>用于指定操作权限，默认拥有全部权限</p>
     * @param string $Status <p>Token 状态</p><p>枚举值：</p><ul><li>ACTIVE： 正常状态，未被吊销。不代表还在有效期内</li><li>REVOKED： 已被吊销，永久失效</li></ul><p>默认值：ACTIVE</p>
     * @param string $CreatedTime <p>Token 创建时间</p>
     * @param string $ExpiresTime <p>Token 过期时间</p>
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

        if (array_key_exists("TokenName",$param) and $param["TokenName"] !== null) {
            $this->TokenName = $param["TokenName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Scopes",$param) and $param["Scopes"] !== null) {
            $this->Scopes = $param["Scopes"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiresTime",$param) and $param["ExpiresTime"] !== null) {
            $this->ExpiresTime = $param["ExpiresTime"];
        }
    }
}
