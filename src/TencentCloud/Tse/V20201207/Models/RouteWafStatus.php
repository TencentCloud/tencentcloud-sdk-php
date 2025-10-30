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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由 WAF 状态
 *
 * @method string getName() 获取路由的名字
 * @method void setName(string $Name) 设置路由的名字
 * @method string getId() 获取路由的 ID
 * @method void setId(string $Id) 设置路由的 ID
 * @method string getStatus() 获取 路由是否开启 WAF 防护
 * @method void setStatus(string $Status) 设置 路由是否开启 WAF 防护
 * @method array getMethods() 获取方法
 * @method void setMethods(array $Methods) 设置方法
 * @method array getPaths() 获取路径
 * @method void setPaths(array $Paths) 设置路径
 * @method array getHosts() 获取域名
 * @method void setHosts(array $Hosts) 设置域名
 * @method string getServiceName() 获取路由对应服务的名字
 * @method void setServiceName(string $ServiceName) 设置路由对应服务的名字
 * @method string getServiceId() 获取路由对应服务的ID
 * @method void setServiceId(string $ServiceId) 设置路由对应服务的ID
 */
class RouteWafStatus extends AbstractModel
{
    /**
     * @var string 路由的名字
     */
    public $Name;

    /**
     * @var string 路由的 ID
     */
    public $Id;

    /**
     * @var string  路由是否开启 WAF 防护
     */
    public $Status;

    /**
     * @var array 方法
     */
    public $Methods;

    /**
     * @var array 路径
     */
    public $Paths;

    /**
     * @var array 域名
     */
    public $Hosts;

    /**
     * @var string 路由对应服务的名字
     */
    public $ServiceName;

    /**
     * @var string 路由对应服务的ID
     */
    public $ServiceId;

    /**
     * @param string $Name 路由的名字
     * @param string $Id 路由的 ID
     * @param string $Status  路由是否开启 WAF 防护
     * @param array $Methods 方法
     * @param array $Paths 路径
     * @param array $Hosts 域名
     * @param string $ServiceName 路由对应服务的名字
     * @param string $ServiceId 路由对应服务的ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
