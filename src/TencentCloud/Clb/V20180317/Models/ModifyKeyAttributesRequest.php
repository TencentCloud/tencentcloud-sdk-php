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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyKeyAttributes请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID</p>
 * @method string getKeyId() 获取<p>API Key的ID</p>
 * @method void setKeyId(string $KeyId) 设置<p>API Key的ID</p>
 * @method string getKeyName() 获取<p>Key的名称</p>
 * @method void setKeyName(string $KeyName) 设置<p>Key的名称</p>
 * @method RateLimitConfigForKey getRateLimitConfig() 获取<p>限速配置</p>
 * @method void setRateLimitConfig(RateLimitConfigForKey $RateLimitConfig) 设置<p>限速配置</p>
 */
class ModifyKeyAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>API Key的ID</p>
     */
    public $KeyId;

    /**
     * @var string <p>Key的名称</p>
     */
    public $KeyName;

    /**
     * @var RateLimitConfigForKey <p>限速配置</p>
     */
    public $RateLimitConfig;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID</p>
     * @param string $KeyId <p>API Key的ID</p>
     * @param string $KeyName <p>Key的名称</p>
     * @param RateLimitConfigForKey $RateLimitConfig <p>限速配置</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("RateLimitConfig",$param) and $param["RateLimitConfig"] !== null) {
            $this->RateLimitConfig = new RateLimitConfigForKey();
            $this->RateLimitConfig->deserialize($param["RateLimitConfig"]);
        }
    }
}
