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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMicroserviceWithDetailResp请求参数结构体
 *
 * @method string getNamespaceId() 获取<p>命名空间ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/649/36096">DescribeSimpleNamespaces</a> 的返回值中的 NamespaceId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tsf/resource?tab=namespace">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36098">CreateNamespace</a>创建新的命名空间。</p>
 * @method void setNamespaceId(string $NamespaceId) 设置<p>命名空间ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/649/36096">DescribeSimpleNamespaces</a> 的返回值中的 NamespaceId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tsf/resource?tab=namespace">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36098">CreateNamespace</a>创建新的命名空间。</p>
 * @method string getMicroserviceName() 获取<p>微服务名称，最多支持128个字符。</p>
 * @method void setMicroserviceName(string $MicroserviceName) 设置<p>微服务名称，最多支持128个字符。</p>
 * @method string getMicroserviceDesc() 获取<p>微服务描述信息，最多支持200个字符。</p>
 * @method void setMicroserviceDesc(string $MicroserviceDesc) 设置<p>微服务描述信息，最多支持200个字符。</p>
 * @method string getServiceType() 获取<p>服务类型，默认SDK</p><p>枚举值：</p><ul><li>SDK： sdk服务</li><li>MESH_EXTERNAL： mesh外部服务</li></ul>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型，默认SDK</p><p>枚举值：</p><ul><li>SDK： sdk服务</li><li>MESH_EXTERNAL： mesh外部服务</li></ul>
 * @method string getServiceUrl() 获取<p>域名+端口，或者是纯域名方式，其他的不允许配置，不支持 IP</p>
 * @method void setServiceUrl(string $ServiceUrl) 设置<p>域名+端口，或者是纯域名方式，其他的不允许配置，不支持 IP</p>
 * @method string getProtocol() 获取<p>协议类型</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议类型</p>
 * @method string getServiceDiscovery() 获取<p>服务发现方式</p><p>枚举值：</p><ul><li>DNS： DNS方式</li></ul>
 * @method void setServiceDiscovery(string $ServiceDiscovery) 设置<p>服务发现方式</p><p>枚举值：</p><ul><li>DNS： DNS方式</li></ul>
 */
class CreateMicroserviceWithDetailRespRequest extends AbstractModel
{
    /**
     * @var string <p>命名空间ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/649/36096">DescribeSimpleNamespaces</a> 的返回值中的 NamespaceId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tsf/resource?tab=namespace">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36098">CreateNamespace</a>创建新的命名空间。</p>
     */
    public $NamespaceId;

    /**
     * @var string <p>微服务名称，最多支持128个字符。</p>
     */
    public $MicroserviceName;

    /**
     * @var string <p>微服务描述信息，最多支持200个字符。</p>
     */
    public $MicroserviceDesc;

    /**
     * @var string <p>服务类型，默认SDK</p><p>枚举值：</p><ul><li>SDK： sdk服务</li><li>MESH_EXTERNAL： mesh外部服务</li></ul>
     */
    public $ServiceType;

    /**
     * @var string <p>域名+端口，或者是纯域名方式，其他的不允许配置，不支持 IP</p>
     */
    public $ServiceUrl;

    /**
     * @var string <p>协议类型</p>
     */
    public $Protocol;

    /**
     * @var string <p>服务发现方式</p><p>枚举值：</p><ul><li>DNS： DNS方式</li></ul>
     */
    public $ServiceDiscovery;

    /**
     * @param string $NamespaceId <p>命名空间ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/649/36096">DescribeSimpleNamespaces</a> 的返回值中的 NamespaceId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tsf/resource?tab=namespace">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/36098">CreateNamespace</a>创建新的命名空间。</p>
     * @param string $MicroserviceName <p>微服务名称，最多支持128个字符。</p>
     * @param string $MicroserviceDesc <p>微服务描述信息，最多支持200个字符。</p>
     * @param string $ServiceType <p>服务类型，默认SDK</p><p>枚举值：</p><ul><li>SDK： sdk服务</li><li>MESH_EXTERNAL： mesh外部服务</li></ul>
     * @param string $ServiceUrl <p>域名+端口，或者是纯域名方式，其他的不允许配置，不支持 IP</p>
     * @param string $Protocol <p>协议类型</p>
     * @param string $ServiceDiscovery <p>服务发现方式</p><p>枚举值：</p><ul><li>DNS： DNS方式</li></ul>
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("MicroserviceName",$param) and $param["MicroserviceName"] !== null) {
            $this->MicroserviceName = $param["MicroserviceName"];
        }

        if (array_key_exists("MicroserviceDesc",$param) and $param["MicroserviceDesc"] !== null) {
            $this->MicroserviceDesc = $param["MicroserviceDesc"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceUrl",$param) and $param["ServiceUrl"] !== null) {
            $this->ServiceUrl = $param["ServiceUrl"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ServiceDiscovery",$param) and $param["ServiceDiscovery"] !== null) {
            $this->ServiceDiscovery = $param["ServiceDiscovery"];
        }
    }
}
