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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateRegisterCode返回参数结构体
 *
 * @method string getRegisterCode() 获取<p>集群队列的注册码,用于机器注册进入队列时使用</p><p>默认值：无</p>
 * @method void setRegisterCode(string $RegisterCode) 设置<p>集群队列的注册码,用于机器注册进入队列时使用</p><p>默认值：无</p>
 * @method integer getExpireAt() 获取<p>注册码的过期时间, unix时间戳格式</p>
 * @method void setExpireAt(integer $ExpireAt) 设置<p>注册码的过期时间, unix时间戳格式</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GenerateRegisterCodeResponse extends AbstractModel
{
    /**
     * @var string <p>集群队列的注册码,用于机器注册进入队列时使用</p><p>默认值：无</p>
     */
    public $RegisterCode;

    /**
     * @var integer <p>注册码的过期时间, unix时间戳格式</p>
     */
    public $ExpireAt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RegisterCode <p>集群队列的注册码,用于机器注册进入队列时使用</p><p>默认值：无</p>
     * @param integer $ExpireAt <p>注册码的过期时间, unix时间戳格式</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RegisterCode",$param) and $param["RegisterCode"] !== null) {
            $this->RegisterCode = $param["RegisterCode"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
