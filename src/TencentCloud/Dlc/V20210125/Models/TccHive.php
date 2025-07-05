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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TccHive数据结构
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getEndpointServiceId() 获取终端节点服务ID
 * @method void setEndpointServiceId(string $EndpointServiceId) 设置终端节点服务ID
 * @method string getMetaStoreUrl() 获取thrift连接地址
 * @method void setMetaStoreUrl(string $MetaStoreUrl) 设置thrift连接地址
 * @method string getHiveVersion() 获取hive版本
 * @method void setHiveVersion(string $HiveVersion) 设置hive版本
 * @method NetWork getTccConnection() 获取网络信息
 * @method void setTccConnection(NetWork $TccConnection) 设置网络信息
 * @method string getHmsEndpointServiceId() 获取Hms终端节点服务ID
 * @method void setHmsEndpointServiceId(string $HmsEndpointServiceId) 设置Hms终端节点服务ID
 */
class TccHive extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 终端节点服务ID
     */
    public $EndpointServiceId;

    /**
     * @var string thrift连接地址
     */
    public $MetaStoreUrl;

    /**
     * @var string hive版本
     */
    public $HiveVersion;

    /**
     * @var NetWork 网络信息
     */
    public $TccConnection;

    /**
     * @var string Hms终端节点服务ID
     */
    public $HmsEndpointServiceId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $EndpointServiceId 终端节点服务ID
     * @param string $MetaStoreUrl thrift连接地址
     * @param string $HiveVersion hive版本
     * @param NetWork $TccConnection 网络信息
     * @param string $HmsEndpointServiceId Hms终端节点服务ID
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("EndpointServiceId",$param) and $param["EndpointServiceId"] !== null) {
            $this->EndpointServiceId = $param["EndpointServiceId"];
        }

        if (array_key_exists("MetaStoreUrl",$param) and $param["MetaStoreUrl"] !== null) {
            $this->MetaStoreUrl = $param["MetaStoreUrl"];
        }

        if (array_key_exists("HiveVersion",$param) and $param["HiveVersion"] !== null) {
            $this->HiveVersion = $param["HiveVersion"];
        }

        if (array_key_exists("TccConnection",$param) and $param["TccConnection"] !== null) {
            $this->TccConnection = new NetWork();
            $this->TccConnection->deserialize($param["TccConnection"]);
        }

        if (array_key_exists("HmsEndpointServiceId",$param) and $param["HmsEndpointServiceId"] !== null) {
            $this->HmsEndpointServiceId = $param["HmsEndpointServiceId"];
        }
    }
}
