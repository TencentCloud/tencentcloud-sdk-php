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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus状态信息
 *
 * @method string getPrometheusId() 获取Prometheus Id
 * @method void setPrometheusId(string $PrometheusId) 设置Prometheus Id
 * @method string getDisplayName() 获取展示名称
 * @method void setDisplayName(string $DisplayName) 设置展示名称
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getVpcId() 获取虚拟网络Id
 * @method void setVpcId(string $VpcId) 设置虚拟网络Id
 * @method string getState() 获取状态
 * @method void setState(string $State) 设置状态
 * @method string getRegion() 获取地区
 * @method void setRegion(string $Region) 设置地区
 * @method GrafanaInfo getGrafana() 获取Grafana信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafana(GrafanaInfo $Grafana) 设置Grafana信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取Prometheus 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置Prometheus 类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusStatus extends AbstractModel
{
    /**
     * @var string Prometheus Id
     */
    public $PrometheusId;

    /**
     * @var string 展示名称
     */
    public $DisplayName;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 虚拟网络Id
     */
    public $VpcId;

    /**
     * @var string 状态
     */
    public $State;

    /**
     * @var string 地区
     */
    public $Region;

    /**
     * @var GrafanaInfo Grafana信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grafana;

    /**
     * @var string Prometheus 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $PrometheusId Prometheus Id
     * @param string $DisplayName 展示名称
     * @param string $InstanceId 实例Id
     * @param string $VpcId 虚拟网络Id
     * @param string $State 状态
     * @param string $Region 地区
     * @param GrafanaInfo $Grafana Grafana信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type Prometheus 类型
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
        if (array_key_exists("PrometheusId",$param) and $param["PrometheusId"] !== null) {
            $this->PrometheusId = $param["PrometheusId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Grafana",$param) and $param["Grafana"] !== null) {
            $this->Grafana = new GrafanaInfo();
            $this->Grafana->deserialize($param["Grafana"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
