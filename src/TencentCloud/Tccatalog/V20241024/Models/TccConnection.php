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
namespace TencentCloud\Tccatalog\V20241024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tcc数据目录连接配置
 *
 * @method string getEndpointServiceId() 获取引擎终端节点服务Id
 * @method void setEndpointServiceId(string $EndpointServiceId) 设置引擎终端节点服务Id
 * @method string getMetaStoreUrl() 获取元数据连接串
 * @method void setMetaStoreUrl(string $MetaStoreUrl) 设置元数据连接串
 * @method NetWork getNetWork() 获取网络信息
 * @method void setNetWork(NetWork $NetWork) 设置网络信息
 * @method string getHiveVersion() 获取hive版本
 * @method void setHiveVersion(string $HiveVersion) 设置hive版本
 * @method string getLocation() 获取hive location
 * @method void setLocation(string $Location) 设置hive location
 * @method string getHmsEndpointServiceId() 获取HMS终端节点服务
 * @method void setHmsEndpointServiceId(string $HmsEndpointServiceId) 设置HMS终端节点服务
 */
class TccConnection extends AbstractModel
{
    /**
     * @var string 引擎终端节点服务Id
     */
    public $EndpointServiceId;

    /**
     * @var string 元数据连接串
     */
    public $MetaStoreUrl;

    /**
     * @var NetWork 网络信息
     */
    public $NetWork;

    /**
     * @var string hive版本
     */
    public $HiveVersion;

    /**
     * @var string hive location
     */
    public $Location;

    /**
     * @var string HMS终端节点服务
     */
    public $HmsEndpointServiceId;

    /**
     * @param string $EndpointServiceId 引擎终端节点服务Id
     * @param string $MetaStoreUrl 元数据连接串
     * @param NetWork $NetWork 网络信息
     * @param string $HiveVersion hive版本
     * @param string $Location hive location
     * @param string $HmsEndpointServiceId HMS终端节点服务
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
        if (array_key_exists("EndpointServiceId",$param) and $param["EndpointServiceId"] !== null) {
            $this->EndpointServiceId = $param["EndpointServiceId"];
        }

        if (array_key_exists("MetaStoreUrl",$param) and $param["MetaStoreUrl"] !== null) {
            $this->MetaStoreUrl = $param["MetaStoreUrl"];
        }

        if (array_key_exists("NetWork",$param) and $param["NetWork"] !== null) {
            $this->NetWork = new NetWork();
            $this->NetWork->deserialize($param["NetWork"]);
        }

        if (array_key_exists("HiveVersion",$param) and $param["HiveVersion"] !== null) {
            $this->HiveVersion = $param["HiveVersion"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("HmsEndpointServiceId",$param) and $param["HmsEndpointServiceId"] !== null) {
            $this->HmsEndpointServiceId = $param["HmsEndpointServiceId"];
        }
    }
}
