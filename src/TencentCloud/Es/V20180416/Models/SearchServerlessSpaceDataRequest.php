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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchServerlessSpaceData请求参数结构体
 *
 * @method string getSpaceId() 获取<p>space空间id</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>space空间id</p>
 * @method string getUri() 获取<p>请求url</p>
 * @method void setUri(string $Uri) 设置<p>请求url</p>
 * @method string getMethod() 获取<p>method</p><p>枚举值：</p><ul><li>GET： get请求</li><li>POST： post请求</li><li>PUT： put请求</li></ul>
 * @method void setMethod(string $Method) 设置<p>method</p><p>枚举值：</p><ul><li>GET： get请求</li><li>POST： post请求</li><li>PUT： put请求</li></ul>
 * @method string getBody() 获取<p>请求体</p>
 * @method void setBody(string $Body) 设置<p>请求体</p>
 */
class SearchServerlessSpaceDataRequest extends AbstractModel
{
    /**
     * @var string <p>space空间id</p>
     */
    public $SpaceId;

    /**
     * @var string <p>请求url</p>
     */
    public $Uri;

    /**
     * @var string <p>method</p><p>枚举值：</p><ul><li>GET： get请求</li><li>POST： post请求</li><li>PUT： put请求</li></ul>
     */
    public $Method;

    /**
     * @var string <p>请求体</p>
     */
    public $Body;

    /**
     * @param string $SpaceId <p>space空间id</p>
     * @param string $Uri <p>请求url</p>
     * @param string $Method <p>method</p><p>枚举值：</p><ul><li>GET： get请求</li><li>POST： post请求</li><li>PUT： put请求</li></ul>
     * @param string $Body <p>请求体</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }
    }
}
