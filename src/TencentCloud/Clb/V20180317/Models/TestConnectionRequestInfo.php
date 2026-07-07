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
 * BYOK健康检查请求
 *
 * @method string getRequestUrl() 获取<p>请求URL</p>
 * @method void setRequestUrl(string $RequestUrl) 设置<p>请求URL</p>
 * @method string getRequestBody() 获取<p>请求体</p>
 * @method void setRequestBody(string $RequestBody) 设置<p>请求体</p>
 * @method string getRequestHeaders() 获取<p>请求头</p>
 * @method void setRequestHeaders(string $RequestHeaders) 设置<p>请求头</p>
 */
class TestConnectionRequestInfo extends AbstractModel
{
    /**
     * @var string <p>请求URL</p>
     */
    public $RequestUrl;

    /**
     * @var string <p>请求体</p>
     */
    public $RequestBody;

    /**
     * @var string <p>请求头</p>
     */
    public $RequestHeaders;

    /**
     * @param string $RequestUrl <p>请求URL</p>
     * @param string $RequestBody <p>请求体</p>
     * @param string $RequestHeaders <p>请求头</p>
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
        if (array_key_exists("RequestUrl",$param) and $param["RequestUrl"] !== null) {
            $this->RequestUrl = $param["RequestUrl"];
        }

        if (array_key_exists("RequestBody",$param) and $param["RequestBody"] !== null) {
            $this->RequestBody = $param["RequestBody"];
        }

        if (array_key_exists("RequestHeaders",$param) and $param["RequestHeaders"] !== null) {
            $this->RequestHeaders = $param["RequestHeaders"];
        }
    }
}
