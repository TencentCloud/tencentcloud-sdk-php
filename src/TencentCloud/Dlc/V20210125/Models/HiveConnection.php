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
 * tcc hive连接信息
 *
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getMetaStoreUrl() 获取<p>元数据url</p>
 * @method void setMetaStoreUrl(string $MetaStoreUrl) 设置<p>元数据url</p>
 * @method NetWork getNetWork() 获取<p>网络信息</p>
 * @method void setNetWork(NetWork $NetWork) 设置<p>网络信息</p>
 * @method string getHiveVersion() 获取<p>hive版本</p>
 * @method void setHiveVersion(string $HiveVersion) 设置<p>hive版本</p>
 */
class HiveConnection extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>元数据url</p>
     */
    public $MetaStoreUrl;

    /**
     * @var NetWork <p>网络信息</p>
     */
    public $NetWork;

    /**
     * @var string <p>hive版本</p>
     */
    public $HiveVersion;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $MetaStoreUrl <p>元数据url</p>
     * @param NetWork $NetWork <p>网络信息</p>
     * @param string $HiveVersion <p>hive版本</p>
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
    }
}
