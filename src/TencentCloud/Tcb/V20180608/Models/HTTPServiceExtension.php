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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP访问服务路由扩展字段
 *
 * @method HTTPServiceHeadersHandler getHeadersHandler() 获取添加请求头列表
 * @method void setHeadersHandler(HTTPServiceHeadersHandler $HeadersHandler) 设置添加请求头列表
 */
class HTTPServiceExtension extends AbstractModel
{
    /**
     * @var HTTPServiceHeadersHandler 添加请求头列表
     */
    public $HeadersHandler;

    /**
     * @param HTTPServiceHeadersHandler $HeadersHandler 添加请求头列表
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
        if (array_key_exists("HeadersHandler",$param) and $param["HeadersHandler"] !== null) {
            $this->HeadersHandler = new HTTPServiceHeadersHandler();
            $this->HeadersHandler->deserialize($param["HeadersHandler"]);
        }
    }
}
