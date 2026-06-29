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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管prometheusV2实例概览
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名</p>
 * @method string getVpcId() 获取<p>VPC ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method integer getInstanceStatus() 获取<p>运行状态（1:正在创建；2:运行中；3:异常；4:重启中；5:销毁中； 6:已停机； 7: 已删除）</p>
 * @method void setInstanceStatus(integer $InstanceStatus) 设置<p>运行状态（1:正在创建；2:运行中；3:异常；4:重启中；5:销毁中； 6:已停机； 7: 已删除）</p>
 * @method integer getChargeStatus() 获取<p>计费状态（1:正常；2:过期; 3:销毁; 4:分配中; 5:分配失败）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeStatus(integer $ChargeStatus) 设置<p>计费状态（1:正常；2:过期; 3:销毁; 4:分配中; 5:分配失败）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableGrafana() 获取<p>是否开启 Grafana（0:不开启，1:开启）</p>
 * @method void setEnableGrafana(integer $EnableGrafana) 设置<p>是否开启 Grafana（0:不开启，1:开启）</p>
 * @method string getGrafanaURL() 获取<p>Grafana 面板 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaURL(string $GrafanaURL) 设置<p>Grafana 面板 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceChargeType() 获取<p>实例付费类型（1:试用版；2:预付费）</p>
 * @method void setInstanceChargeType(integer $InstanceChargeType) 设置<p>实例付费类型（1:试用版；2:预付费）</p>
 * @method string getSpecName() 获取<p>规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecName(string $SpecName) 设置<p>规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataRetentionTime() 获取<p>存储周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataRetentionTime(integer $DataRetentionTime) 设置<p>存储周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取<p>购买的实例过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置<p>购买的实例过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记(0:不自动续费；1:开启自动续费；2:禁止自动续费；-1:无效)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记(0:不自动续费；1:开启自动续费；2:禁止自动续费；-1:无效)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBoundTotal() 获取<p>绑定集群总数</p>
 * @method void setBoundTotal(integer $BoundTotal) 设置<p>绑定集群总数</p>
 * @method integer getBoundNormal() 获取<p>绑定集群正常状态总数</p>
 * @method void setBoundNormal(integer $BoundNormal) 设置<p>绑定集群正常状态总数</p>
 * @method integer getResourcePackageStatus() 获取<p>资源包状态，0-无可用资源包，1-有可用资源包</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePackageStatus(integer $ResourcePackageStatus) 设置<p>资源包状态，0-无可用资源包，1-有可用资源包</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourcePackageSpecName() 获取<p>资源包规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePackageSpecName(string $ResourcePackageSpecName) 设置<p>资源包规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusInstancesOverview extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名</p>
     */
    public $InstanceName;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>运行状态（1:正在创建；2:运行中；3:异常；4:重启中；5:销毁中； 6:已停机； 7: 已删除）</p>
     */
    public $InstanceStatus;

    /**
     * @var integer <p>计费状态（1:正常；2:过期; 3:销毁; 4:分配中; 5:分配失败）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeStatus;

    /**
     * @var integer <p>是否开启 Grafana（0:不开启，1:开启）</p>
     */
    public $EnableGrafana;

    /**
     * @var string <p>Grafana 面板 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaURL;

    /**
     * @var integer <p>实例付费类型（1:试用版；2:预付费）</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecName;

    /**
     * @var integer <p>存储周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataRetentionTime;

    /**
     * @var string <p>购买的实例过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var integer <p>自动续费标记(0:不自动续费；1:开启自动续费；2:禁止自动续费；-1:无效)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>绑定集群总数</p>
     */
    public $BoundTotal;

    /**
     * @var integer <p>绑定集群正常状态总数</p>
     */
    public $BoundNormal;

    /**
     * @var integer <p>资源包状态，0-无可用资源包，1-有可用资源包</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePackageStatus;

    /**
     * @var string <p>资源包规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePackageSpecName;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param integer $InstanceStatus <p>运行状态（1:正在创建；2:运行中；3:异常；4:重启中；5:销毁中； 6:已停机； 7: 已删除）</p>
     * @param integer $ChargeStatus <p>计费状态（1:正常；2:过期; 3:销毁; 4:分配中; 5:分配失败）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableGrafana <p>是否开启 Grafana（0:不开启，1:开启）</p>
     * @param string $GrafanaURL <p>Grafana 面板 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceChargeType <p>实例付费类型（1:试用版；2:预付费）</p>
     * @param string $SpecName <p>规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataRetentionTime <p>存储周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime <p>购买的实例过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag <p>自动续费标记(0:不自动续费；1:开启自动续费；2:禁止自动续费；-1:无效)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BoundTotal <p>绑定集群总数</p>
     * @param integer $BoundNormal <p>绑定集群正常状态总数</p>
     * @param integer $ResourcePackageStatus <p>资源包状态，0-无可用资源包，1-有可用资源包</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourcePackageSpecName <p>资源包规格名称</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("EnableGrafana",$param) and $param["EnableGrafana"] !== null) {
            $this->EnableGrafana = $param["EnableGrafana"];
        }

        if (array_key_exists("GrafanaURL",$param) and $param["GrafanaURL"] !== null) {
            $this->GrafanaURL = $param["GrafanaURL"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("BoundTotal",$param) and $param["BoundTotal"] !== null) {
            $this->BoundTotal = $param["BoundTotal"];
        }

        if (array_key_exists("BoundNormal",$param) and $param["BoundNormal"] !== null) {
            $this->BoundNormal = $param["BoundNormal"];
        }

        if (array_key_exists("ResourcePackageStatus",$param) and $param["ResourcePackageStatus"] !== null) {
            $this->ResourcePackageStatus = $param["ResourcePackageStatus"];
        }

        if (array_key_exists("ResourcePackageSpecName",$param) and $param["ResourcePackageSpecName"] !== null) {
            $this->ResourcePackageSpecName = $param["ResourcePackageSpecName"];
        }
    }
}
