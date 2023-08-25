<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描任务元数据信息
 *
 * @method string getDataSourceId() 获取数据源ID
 * @method void setDataSourceId(string $DataSourceId) 设置数据源ID
 * @method array getProxyAddress() 获取代理地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyAddress(array $ProxyAddress) 设置代理地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method DspaDiscoveryTaskCOSCondition getCondition() 获取扫描任务条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCondition(DspaDiscoveryTaskCOSCondition $Condition) 设置扫描任务条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceRegion() 获取资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaCOSDiscoveryTaskDataSourceInfo extends AbstractModel
{
    /**
     * @var string 数据源ID
     */
    public $DataSourceId;

    /**
     * @var array 代理地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyAddress;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceName;

    /**
     * @var DspaDiscoveryTaskCOSCondition 扫描任务条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Condition;

    /**
     * @var string 资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRegion;

    /**
     * @param string $DataSourceId 数据源ID
     * @param array $ProxyAddress 代理地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param DspaDiscoveryTaskCOSCondition $Condition 扫描任务条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceRegion 资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("ProxyAddress",$param) and $param["ProxyAddress"] !== null) {
            $this->ProxyAddress = $param["ProxyAddress"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new DspaDiscoveryTaskCOSCondition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }
    }
}
