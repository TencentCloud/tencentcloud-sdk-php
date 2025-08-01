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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API 资源。
 *
 * @method string getId() 获取资源 ID。
 * @method void setId(string $Id) 设置资源 ID。
 * @method string getName() 获取资源名称。
 * @method void setName(string $Name) 设置资源名称。
 * @method array getAPIServiceIds() 获取API 资源关联的 API 服务 ID 列表。
 * @method void setAPIServiceIds(array $APIServiceIds) 设置API 资源关联的 API 服务 ID 列表。
 * @method string getPath() 获取资源路径。
 * @method void setPath(string $Path) 设置资源路径。
 * @method array getMethods() 获取请求方法列表。支持以下取值：GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE。
 * @method void setMethods(array $Methods) 设置请求方法列表。支持以下取值：GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE。
 * @method string getRequestConstraint() 获取请求内容匹配规则的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method void setRequestConstraint(string $RequestConstraint) 设置请求内容匹配规则的具体内容，需符合表达式语法，详细规范参见产品文档。
 */
class APIResource extends AbstractModel
{
    /**
     * @var string 资源 ID。
     */
    public $Id;

    /**
     * @var string 资源名称。
     */
    public $Name;

    /**
     * @var array API 资源关联的 API 服务 ID 列表。
     */
    public $APIServiceIds;

    /**
     * @var string 资源路径。
     */
    public $Path;

    /**
     * @var array 请求方法列表。支持以下取值：GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE。
     */
    public $Methods;

    /**
     * @var string 请求内容匹配规则的具体内容，需符合表达式语法，详细规范参见产品文档。
     */
    public $RequestConstraint;

    /**
     * @param string $Id 资源 ID。
     * @param string $Name 资源名称。
     * @param array $APIServiceIds API 资源关联的 API 服务 ID 列表。
     * @param string $Path 资源路径。
     * @param array $Methods 请求方法列表。支持以下取值：GET, POST, PUT, HEAD, PATCH, OPTIONS, DELETE。
     * @param string $RequestConstraint 请求内容匹配规则的具体内容，需符合表达式语法，详细规范参见产品文档。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("APIServiceIds",$param) and $param["APIServiceIds"] !== null) {
            $this->APIServiceIds = $param["APIServiceIds"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("RequestConstraint",$param) and $param["RequestConstraint"] !== null) {
            $this->RequestConstraint = $param["RequestConstraint"];
        }
    }
}
