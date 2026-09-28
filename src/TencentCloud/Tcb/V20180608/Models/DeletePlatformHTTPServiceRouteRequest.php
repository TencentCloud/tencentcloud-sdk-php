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
 * DeletePlatformHTTPServiceRoute请求参数结构体
 *
 * @method string getPlatformId() 获取<p>平台id</p>
 * @method void setPlatformId(string $PlatformId) 设置<p>平台id</p>
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method array getPaths() 获取<p>路径列表。为空则表示删除此域名和所有路由</p>
 * @method void setPaths(array $Paths) 设置<p>路径列表。为空则表示删除此域名和所有路由</p>
 */
class DeletePlatformHTTPServiceRouteRequest extends AbstractModel
{
    /**
     * @var string <p>平台id</p>
     */
    public $PlatformId;

    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var array <p>路径列表。为空则表示删除此域名和所有路由</p>
     */
    public $Paths;

    /**
     * @param string $PlatformId <p>平台id</p>
     * @param string $Domain <p>域名</p>
     * @param array $Paths <p>路径列表。为空则表示删除此域名和所有路由</p>
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
        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }
    }
}
