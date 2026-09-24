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
 * tcc lakehouse 连接信息
 *
 * @method string getMetastoreEndpointServiceId() 获取<p>元数据服务id</p>
 * @method void setMetastoreEndpointServiceId(string $MetastoreEndpointServiceId) 设置<p>元数据服务id</p>
 * @method string getEndpointServiceId() 获取<p>endpoint服务id</p>
 * @method void setEndpointServiceId(string $EndpointServiceId) 设置<p>endpoint服务id</p>
 * @method string getMetaStoreUrl() 获取<p>元数据url</p>
 * @method void setMetaStoreUrl(string $MetaStoreUrl) 设置<p>元数据url</p>
 * @method RangerConnection getRangerConnection() 获取<p>ranger信息</p>
 * @method void setRangerConnection(RangerConnection $RangerConnection) 设置<p>ranger信息</p>
 * @method string getHiveVersion() 获取<p>hive版本</p>
 * @method void setHiveVersion(string $HiveVersion) 设置<p>hive版本</p>
 * @method string getLocation() 获取<p>存储位置</p>
 * @method void setLocation(string $Location) 设置<p>存储位置</p>
 * @method NetWork getNetWork() 获取<p>网络信息</p>
 * @method void setNetWork(NetWork $NetWork) 设置<p>网络信息</p>
 */
class LakeHouseConnection extends AbstractModel
{
    /**
     * @var string <p>元数据服务id</p>
     */
    public $MetastoreEndpointServiceId;

    /**
     * @var string <p>endpoint服务id</p>
     */
    public $EndpointServiceId;

    /**
     * @var string <p>元数据url</p>
     */
    public $MetaStoreUrl;

    /**
     * @var RangerConnection <p>ranger信息</p>
     */
    public $RangerConnection;

    /**
     * @var string <p>hive版本</p>
     */
    public $HiveVersion;

    /**
     * @var string <p>存储位置</p>
     */
    public $Location;

    /**
     * @var NetWork <p>网络信息</p>
     */
    public $NetWork;

    /**
     * @param string $MetastoreEndpointServiceId <p>元数据服务id</p>
     * @param string $EndpointServiceId <p>endpoint服务id</p>
     * @param string $MetaStoreUrl <p>元数据url</p>
     * @param RangerConnection $RangerConnection <p>ranger信息</p>
     * @param string $HiveVersion <p>hive版本</p>
     * @param string $Location <p>存储位置</p>
     * @param NetWork $NetWork <p>网络信息</p>
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
        if (array_key_exists("MetastoreEndpointServiceId",$param) and $param["MetastoreEndpointServiceId"] !== null) {
            $this->MetastoreEndpointServiceId = $param["MetastoreEndpointServiceId"];
        }

        if (array_key_exists("EndpointServiceId",$param) and $param["EndpointServiceId"] !== null) {
            $this->EndpointServiceId = $param["EndpointServiceId"];
        }

        if (array_key_exists("MetaStoreUrl",$param) and $param["MetaStoreUrl"] !== null) {
            $this->MetaStoreUrl = $param["MetaStoreUrl"];
        }

        if (array_key_exists("RangerConnection",$param) and $param["RangerConnection"] !== null) {
            $this->RangerConnection = new RangerConnection();
            $this->RangerConnection->deserialize($param["RangerConnection"]);
        }

        if (array_key_exists("HiveVersion",$param) and $param["HiveVersion"] !== null) {
            $this->HiveVersion = $param["HiveVersion"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("NetWork",$param) and $param["NetWork"] !== null) {
            $this->NetWork = new NetWork();
            $this->NetWork->deserialize($param["NetWork"]);
        }
    }
}
