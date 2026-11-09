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
 * RenewAndroidInstanceMCPToken请求参数结构体
 *
 * @method string getTokenId() 获取<p>内部 ID，格式 k_ + 16 位 hex</p>
 * @method void setTokenId(string $TokenId) 设置<p>内部 ID，格式 k_ + 16 位 hex</p>
 * @method integer getExpireSeconds() 获取<p>有效期（秒），必须大于 0</p><p>单位：秒</p>
 * @method void setExpireSeconds(integer $ExpireSeconds) 设置<p>有效期（秒），必须大于 0</p><p>单位：秒</p>
 */
class RenewAndroidInstanceMCPTokenRequest extends AbstractModel
{
    /**
     * @var string <p>内部 ID，格式 k_ + 16 位 hex</p>
     */
    public $TokenId;

    /**
     * @var integer <p>有效期（秒），必须大于 0</p><p>单位：秒</p>
     */
    public $ExpireSeconds;

    /**
     * @param string $TokenId <p>内部 ID，格式 k_ + 16 位 hex</p>
     * @param integer $ExpireSeconds <p>有效期（秒），必须大于 0</p><p>单位：秒</p>
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
