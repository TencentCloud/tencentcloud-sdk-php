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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 售卖实例类型
 *
 * @method string getTypeName() 获取<p>售卖实例名称。<br>Z3：是高可用类型，对应规格中的 DeviceType，包含 UNIVERSAL，EXCLUSIVE。<br>CVM：是基础版类型，对应规格中的 DeviceType 是 BASIC（已下线）。<br>TKE：是基础版v2类型，对应规格中的 DeviceType 是 BASIC_V2。<br>CLOUD_NATIVE_CLUSTER：表示云盘版标准型。<br>CLOUD_NATIVE_CLUSTER_EXCLUSIVE：表示云盘版加强型。<br>CLOUD_NATIVE_CLUSTER_ULTRA：表示云盘版旗舰型。<br>CLOUD_NATIVE_SINGLE_NODE：表示云盘版单节点<br>ECONOMICAL：表示经济型。</p>
 * @method void setTypeName(string $TypeName) 设置<p>售卖实例名称。<br>Z3：是高可用类型，对应规格中的 DeviceType，包含 UNIVERSAL，EXCLUSIVE。<br>CVM：是基础版类型，对应规格中的 DeviceType 是 BASIC（已下线）。<br>TKE：是基础版v2类型，对应规格中的 DeviceType 是 BASIC_V2。<br>CLOUD_NATIVE_CLUSTER：表示云盘版标准型。<br>CLOUD_NATIVE_CLUSTER_EXCLUSIVE：表示云盘版加强型。<br>CLOUD_NATIVE_CLUSTER_ULTRA：表示云盘版旗舰型。<br>CLOUD_NATIVE_SINGLE_NODE：表示云盘版单节点<br>ECONOMICAL：表示经济型。</p>
 * @method array getEngineVersion() 获取<p>引擎版本号</p>
 * @method void setEngineVersion(array $EngineVersion) 设置<p>引擎版本号</p>
 * @method array getConfigIds() 获取<p>售卖规格Id</p>
 * @method void setConfigIds(array $ConfigIds) 设置<p>售卖规格Id</p>
 */
class CdbSellType extends AbstractModel
{
    /**
     * @var string <p>售卖实例名称。<br>Z3：是高可用类型，对应规格中的 DeviceType，包含 UNIVERSAL，EXCLUSIVE。<br>CVM：是基础版类型，对应规格中的 DeviceType 是 BASIC（已下线）。<br>TKE：是基础版v2类型，对应规格中的 DeviceType 是 BASIC_V2。<br>CLOUD_NATIVE_CLUSTER：表示云盘版标准型。<br>CLOUD_NATIVE_CLUSTER_EXCLUSIVE：表示云盘版加强型。<br>CLOUD_NATIVE_CLUSTER_ULTRA：表示云盘版旗舰型。<br>CLOUD_NATIVE_SINGLE_NODE：表示云盘版单节点<br>ECONOMICAL：表示经济型。</p>
     */
    public $TypeName;

    /**
     * @var array <p>引擎版本号</p>
     */
    public $EngineVersion;

    /**
     * @var array <p>售卖规格Id</p>
     */
    public $ConfigIds;

    /**
     * @param string $TypeName <p>售卖实例名称。<br>Z3：是高可用类型，对应规格中的 DeviceType，包含 UNIVERSAL，EXCLUSIVE。<br>CVM：是基础版类型，对应规格中的 DeviceType 是 BASIC（已下线）。<br>TKE：是基础版v2类型，对应规格中的 DeviceType 是 BASIC_V2。<br>CLOUD_NATIVE_CLUSTER：表示云盘版标准型。<br>CLOUD_NATIVE_CLUSTER_EXCLUSIVE：表示云盘版加强型。<br>CLOUD_NATIVE_CLUSTER_ULTRA：表示云盘版旗舰型。<br>CLOUD_NATIVE_SINGLE_NODE：表示云盘版单节点<br>ECONOMICAL：表示经济型。</p>
     * @param array $EngineVersion <p>引擎版本号</p>
     * @param array $ConfigIds <p>售卖规格Id</p>
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
        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("ConfigIds",$param) and $param["ConfigIds"] !== null) {
            $this->ConfigIds = $param["ConfigIds"];
        }
    }
}
