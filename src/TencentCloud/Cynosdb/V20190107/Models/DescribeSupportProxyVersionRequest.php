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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSupportProxyVersion请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID。与Zone/DbVersion/CynosVersion二选一：查询存量集群支持的代理版本时必填；不传时表示创建集群前查询场景，需同时传入Zone、DbVersion、CynosVersion</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID。与Zone/DbVersion/CynosVersion二选一：查询存量集群支持的代理版本时必填；不传时表示创建集群前查询场景，需同时传入Zone、DbVersion、CynosVersion</p>
 * @method string getProxyGroupId() 获取<p>数据库代理组ID。仅在传入ClusterId时有效，传入时返回当前代理版本号</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>数据库代理组ID。仅在传入ClusterId时有效，传入时返回当前代理版本号</p>
 * @method string getZone() 获取<p>可用区，如ap-guangzhou-3。创建集群前查询场景（不传ClusterId时）必填</p>
 * @method void setZone(string $Zone) 设置<p>可用区，如ap-guangzhou-3。创建集群前查询场景（不传ClusterId时）必填</p>
 * @method string getDbVersion() 获取<p>数据库引擎版本，如5.7、8.0。创建集群前查询场景（不传ClusterId时）必填</p>
 * @method void setDbVersion(string $DbVersion) 设置<p>数据库引擎版本，如5.7、8.0。创建集群前查询场景（不传ClusterId时）必填</p>
 * @method string getCynosVersion() 获取<p>目标内核版本，如3.1.20.001。创建集群前查询场景（不传ClusterId时）必填</p>
 * @method void setCynosVersion(string $CynosVersion) 设置<p>目标内核版本，如3.1.20.001。创建集群前查询场景（不传ClusterId时）必填</p>
 * @method string getStorageVersion() 获取<p>存储版本，枚举值：1.0、2.0。可选，仅创建集群前查询场景有效</p>
 * @method void setStorageVersion(string $StorageVersion) 设置<p>存储版本，枚举值：1.0、2.0。可选，仅创建集群前查询场景有效</p>
 */
class DescribeSupportProxyVersionRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID。与Zone/DbVersion/CynosVersion二选一：查询存量集群支持的代理版本时必填；不传时表示创建集群前查询场景，需同时传入Zone、DbVersion、CynosVersion</p>
     */
    public $ClusterId;

    /**
     * @var string <p>数据库代理组ID。仅在传入ClusterId时有效，传入时返回当前代理版本号</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>可用区，如ap-guangzhou-3。创建集群前查询场景（不传ClusterId时）必填</p>
     */
    public $Zone;

    /**
     * @var string <p>数据库引擎版本，如5.7、8.0。创建集群前查询场景（不传ClusterId时）必填</p>
     */
    public $DbVersion;

    /**
     * @var string <p>目标内核版本，如3.1.20.001。创建集群前查询场景（不传ClusterId时）必填</p>
     */
    public $CynosVersion;

    /**
     * @var string <p>存储版本，枚举值：1.0、2.0。可选，仅创建集群前查询场景有效</p>
     */
    public $StorageVersion;

    /**
     * @param string $ClusterId <p>集群ID。与Zone/DbVersion/CynosVersion二选一：查询存量集群支持的代理版本时必填；不传时表示创建集群前查询场景，需同时传入Zone、DbVersion、CynosVersion</p>
     * @param string $ProxyGroupId <p>数据库代理组ID。仅在传入ClusterId时有效，传入时返回当前代理版本号</p>
     * @param string $Zone <p>可用区，如ap-guangzhou-3。创建集群前查询场景（不传ClusterId时）必填</p>
     * @param string $DbVersion <p>数据库引擎版本，如5.7、8.0。创建集群前查询场景（不传ClusterId时）必填</p>
     * @param string $CynosVersion <p>目标内核版本，如3.1.20.001。创建集群前查询场景（不传ClusterId时）必填</p>
     * @param string $StorageVersion <p>存储版本，枚举值：1.0、2.0。可选，仅创建集群前查询场景有效</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("StorageVersion",$param) and $param["StorageVersion"] !== null) {
            $this->StorageVersion = $param["StorageVersion"];
        }
    }
}
