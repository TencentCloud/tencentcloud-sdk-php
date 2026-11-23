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
 * CreateMCPToken请求参数结构体
 *
 * @method integer getExpireSeconds() 获取<p>Token 过期时间</p><p>取值范围：[0, 2592000]</p><p>单位：秒</p><p>默认值：86400</p><p>不填的话，默认为 1 天超时；过期时间为当前时间 + 超时时间</p>
 * @method void setExpireSeconds(integer $ExpireSeconds) 设置<p>Token 过期时间</p><p>取值范围：[0, 2592000]</p><p>单位：秒</p><p>默认值：86400</p><p>不填的话，默认为 1 天超时；过期时间为当前时间 + 超时时间</p>
 * @method string getTokenName() 获取<p>Token 名称（注释）</p><p>参数格式：只支持：中英文、数字、连字符 &quot;-&quot; 的组合</p><p>长度不得超过 16 个字符</p>
 * @method void setTokenName(string $TokenName) 设置<p>Token 名称（注释）</p><p>参数格式：只支持：中英文、数字、连字符 &quot;-&quot; 的组合</p><p>长度不得超过 16 个字符</p>
 * @method string getUserId() 获取<p>用户 Id</p><p>参数格式：只支持：字母（A-Za-z）、数字（0-9）、下划线（_）的组合</p><p>固定使用这个 UserId  来操作云渲染并发资源，长度不能超过 64 个字符</p>
 * @method void setUserId(string $UserId) 设置<p>用户 Id</p><p>参数格式：只支持：字母（A-Za-z）、数字（0-9）、下划线（_）的组合</p><p>固定使用这个 UserId  来操作云渲染并发资源，长度不能超过 64 个字符</p>
 */
class CreateMCPTokenRequest extends AbstractModel
{
    /**
     * @var integer <p>Token 过期时间</p><p>取值范围：[0, 2592000]</p><p>单位：秒</p><p>默认值：86400</p><p>不填的话，默认为 1 天超时；过期时间为当前时间 + 超时时间</p>
     */
    public $ExpireSeconds;

    /**
     * @var string <p>Token 名称（注释）</p><p>参数格式：只支持：中英文、数字、连字符 &quot;-&quot; 的组合</p><p>长度不得超过 16 个字符</p>
     */
    public $TokenName;

    /**
     * @var string <p>用户 Id</p><p>参数格式：只支持：字母（A-Za-z）、数字（0-9）、下划线（_）的组合</p><p>固定使用这个 UserId  来操作云渲染并发资源，长度不能超过 64 个字符</p>
     */
    public $UserId;

    /**
     * @param integer $ExpireSeconds <p>Token 过期时间</p><p>取值范围：[0, 2592000]</p><p>单位：秒</p><p>默认值：86400</p><p>不填的话，默认为 1 天超时；过期时间为当前时间 + 超时时间</p>
     * @param string $TokenName <p>Token 名称（注释）</p><p>参数格式：只支持：中英文、数字、连字符 &quot;-&quot; 的组合</p><p>长度不得超过 16 个字符</p>
     * @param string $UserId <p>用户 Id</p><p>参数格式：只支持：字母（A-Za-z）、数字（0-9）、下划线（_）的组合</p><p>固定使用这个 UserId  来操作云渲染并发资源，长度不能超过 64 个字符</p>
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
        if (array_key_exists("ExpireSeconds",$param) and $param["ExpireSeconds"] !== null) {
            $this->ExpireSeconds = $param["ExpireSeconds"];
        }

        if (array_key_exists("TokenName",$param) and $param["TokenName"] !== null) {
            $this->TokenName = $param["TokenName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
