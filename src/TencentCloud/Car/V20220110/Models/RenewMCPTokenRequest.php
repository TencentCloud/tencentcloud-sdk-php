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
 * RenewMCPToken请求参数结构体
 *
 * @method string getTokenId() 获取<p>TokenId</p>
 * @method void setTokenId(string $TokenId) 设置<p>TokenId</p>
 * @method integer getExpireSeconds() 获取<p>Token 过期时间</p><p>取值范围：[0, 2592000]</p><p>默认值：86400</p><p>单位 秒、不填的话，默认为 1 天；新的超时时间为，当前时刻 + ExpireSeconds</p>
 * @method void setExpireSeconds(integer $ExpireSeconds) 设置<p>Token 过期时间</p><p>取值范围：[0, 2592000]</p><p>默认值：86400</p><p>单位 秒、不填的话，默认为 1 天；新的超时时间为，当前时刻 + ExpireSeconds</p>
 */
class RenewMCPTokenRequest extends AbstractModel
{
    /**
     * @var string <p>TokenId</p>
     */
    public $TokenId;

    /**
     * @var integer <p>Token 过期时间</p><p>取值范围：[0, 2592000]</p><p>默认值：86400</p><p>单位 秒、不填的话，默认为 1 天；新的超时时间为，当前时刻 + ExpireSeconds</p>
     */
    public $ExpireSeconds;

    /**
     * @param string $TokenId <p>TokenId</p>
     * @param integer $ExpireSeconds <p>Token 过期时间</p><p>取值范围：[0, 2592000]</p><p>默认值：86400</p><p>单位 秒、不填的话，默认为 1 天；新的超时时间为，当前时刻 + ExpireSeconds</p>
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

        if (array_key_exists("ExpireSeconds",$param) and $param["ExpireSeconds"] !== null) {
            $this->ExpireSeconds = $param["ExpireSeconds"];
        }
    }
}
