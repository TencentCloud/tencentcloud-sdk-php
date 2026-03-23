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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mcp的访问URL
 *
 * @method string getSSEUrl() 获取sse访问URL
 * @method void setSSEUrl(string $SSEUrl) 设置sse访问URL
 * @method string getStreamAbleUrl() 获取streamable访问URL
 * @method void setStreamAbleUrl(string $StreamAbleUrl) 设置streamable访问URL
 */
class McpUrlObj extends AbstractModel
{
    /**
     * @var string sse访问URL
     */
    public $SSEUrl;

    /**
     * @var string streamable访问URL
     */
    public $StreamAbleUrl;

    /**
     * @param string $SSEUrl sse访问URL
     * @param string $StreamAbleUrl streamable访问URL
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
        if (array_key_exists("SSEUrl",$param) and $param["SSEUrl"] !== null) {
            $this->SSEUrl = $param["SSEUrl"];
        }

        if (array_key_exists("StreamAbleUrl",$param) and $param["StreamAbleUrl"] !== null) {
            $this->StreamAbleUrl = $param["StreamAbleUrl"];
        }
    }
}
