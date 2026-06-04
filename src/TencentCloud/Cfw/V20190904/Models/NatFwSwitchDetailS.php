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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT防火墙开关详情
 *
 * @method string getInsObj() 获取<p>NAT实例ID</p>
 * @method void setInsObj(string $InsObj) 设置<p>NAT实例ID</p>
 * @method string getObjName() 获取<p>实例名称</p>
 * @method void setObjName(string $ObjName) 设置<p>实例名称</p>
 * @method string getFwType() 获取<p>防火墙类型</p>
 * @method void setFwType(string $FwType) 设置<p>防火墙类型</p>
 * @method string getAssetType() 获取<p>资产类型，nat-VPC内防护，nat_ccn-CCN集群模式</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型，nat-VPC内防护，nat_ccn-CCN集群模式</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method integer getSwitchMode() 获取<p>开关接入模式，1-自动接入，2-手动接入</p>
 * @method void setSwitchMode(integer $SwitchMode) 设置<p>开关接入模式，1-自动接入，2-手动接入</p>
 * @method integer getRoutingMode() 获取<p>引流路由方法，0-多路由表，1-策略路由</p>
 * @method void setRoutingMode(integer $RoutingMode) 设置<p>引流路由方法，0-多路由表，1-策略路由</p>
 * @method integer getStatus() 获取<p>开关状态，0-未开启，1-已开启，2-开启中，3-关闭中</p>
 * @method void setStatus(integer $Status) 设置<p>开关状态，0-未开启，1-已开启，2-开启中，3-关闭中</p>
 * @method integer getIpVersion() 获取<p>ip版本，0：ipv4；1：ipv6</p>
 * @method void setIpVersion(integer $IpVersion) 设置<p>ip版本，0：ipv4；1：ipv6</p>
 * @method integer getNonCluster() 获取<p>是否非集群模式，0-集群模式，1-非集群模式</p>
 * @method void setNonCluster(integer $NonCluster) 设置<p>是否非集群模式，0-集群模式，1-非集群模式</p>
 * @method integer getIpsAction() 获取<p>入侵防御动作</p>
 * @method void setIpsAction(integer $IpsAction) 设置<p>入侵防御动作</p>
 * @method integer getTransEnable() 获取<p>流量监控开关</p>
 * @method void setTransEnable(integer $TransEnable) 设置<p>流量监控开关</p>
 * @method integer getBypass() 获取<p>Bypass状态，0-关闭，1-开启</p>
 * @method void setBypass(integer $Bypass) 设置<p>Bypass状态，0-关闭，1-开启</p>
 * @method string getAttachId() 获取<p>关联ID，nat_ccn资产类型时为云联网实例ID, nat资产类型时为空</p>
 * @method void setAttachId(string $AttachId) 设置<p>关联ID，nat_ccn资产类型时为云联网实例ID, nat资产类型时为空</p>
 * @method string getAttachName() 获取<p>关联ID的实例名称，nat_ccn资产类型时为云联网名称</p>
 * @method void setAttachName(string $AttachName) 设置<p>关联ID的实例名称，nat_ccn资产类型时为云联网名称</p>
 * @method string getNatVpcId() 获取<p>NAT防火墙所在VPC ID</p>
 * @method void setNatVpcId(string $NatVpcId) 设置<p>NAT防火墙所在VPC ID</p>
 * @method string getNatVpcName() 获取<p>NAT防火墙所在VPC的VPC名称</p>
 * @method void setNatVpcName(string $NatVpcName) 设置<p>NAT防火墙所在VPC的VPC名称</p>
 * @method array getAttachIns() 获取<p>CCN关联实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachIns(array $AttachIns) 设置<p>CCN关联实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEndpoints() 获取<p>终端节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoints(array $Endpoints) 设置<p>终端节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProgress() 获取<p>防火墙开关操作时的进度状态：</p><p>// 开启 — 自动模式（3步）<br>&quot;AUTO_OPEN_ORCHESTRATING&quot;      // 步骤1: 预编排策略路由<br>&quot;AUTO_OPEN_CREATING_RESOURCES&quot; // 步骤2: 创建引流网络和资源<br>&quot;AUTO_OPEN_PUSHING_ROUTES&quot;     // 步骤3: 创建策略路由</p><p>// 开启 — 手动模式（1步）<br>&quot;MANUAL_OPEN_CREATING_RESOURCES&quot; // 步骤1: 创建引流网络和资源</p><p>// 关闭 — 自动模式（2步）<br>&quot;AUTO_CLOSE_DELETING_ROUTES&quot;    // 步骤1: 删除策略路由<br>&quot;AUTO_CLOSE_DELETING_RESOURCES&quot; // 步骤2: 删除引流网络和资源<br>// 关闭 — 手动模式（1步）<br>&quot;MANUAL_CLOSE_DELETING_RESOURCES&quot; // 步骤1: 删除引流网络和资源</p><p>// 修改 — 自动模式（3步）<br>&quot;AUTO_MODIFY_ORCHESTRATING&quot;   // 步骤1: 预编排策略路由<br>&quot;AUTO_MODIFY_DELETING_ROUTES&quot; // 步骤2: 删除旧策略路由<br>&quot;AUTO_MODIFY_PUSHING_ROUTES&quot;  // 步骤3: 创建新策略路由</p><p>// 修改 — 手动模式（1步，仅 VPC 防火墙存在手动模式修改）<br>&quot;MANUAL_MODIFY_UPDATING_RESOURCES&quot; // 步骤1: 更新引流网络和资源</p>
 * @method void setProgress(string $Progress) 设置<p>防火墙开关操作时的进度状态：</p><p>// 开启 — 自动模式（3步）<br>&quot;AUTO_OPEN_ORCHESTRATING&quot;      // 步骤1: 预编排策略路由<br>&quot;AUTO_OPEN_CREATING_RESOURCES&quot; // 步骤2: 创建引流网络和资源<br>&quot;AUTO_OPEN_PUSHING_ROUTES&quot;     // 步骤3: 创建策略路由</p><p>// 开启 — 手动模式（1步）<br>&quot;MANUAL_OPEN_CREATING_RESOURCES&quot; // 步骤1: 创建引流网络和资源</p><p>// 关闭 — 自动模式（2步）<br>&quot;AUTO_CLOSE_DELETING_ROUTES&quot;    // 步骤1: 删除策略路由<br>&quot;AUTO_CLOSE_DELETING_RESOURCES&quot; // 步骤2: 删除引流网络和资源<br>// 关闭 — 手动模式（1步）<br>&quot;MANUAL_CLOSE_DELETING_RESOURCES&quot; // 步骤1: 删除引流网络和资源</p><p>// 修改 — 自动模式（3步）<br>&quot;AUTO_MODIFY_ORCHESTRATING&quot;   // 步骤1: 预编排策略路由<br>&quot;AUTO_MODIFY_DELETING_ROUTES&quot; // 步骤2: 删除旧策略路由<br>&quot;AUTO_MODIFY_PUSHING_ROUTES&quot;  // 步骤3: 创建新策略路由</p><p>// 修改 — 手动模式（1步，仅 VPC 防火墙存在手动模式修改）<br>&quot;MANUAL_MODIFY_UPDATING_RESOURCES&quot; // 步骤1: 更新引流网络和资源</p>
 */
class NatFwSwitchDetailS extends AbstractModel
{
    /**
     * @var string <p>NAT实例ID</p>
     */
    public $InsObj;

    /**
     * @var string <p>实例名称</p>
     */
    public $ObjName;

    /**
     * @var string <p>防火墙类型</p>
     */
    public $FwType;

    /**
     * @var string <p>资产类型，nat-VPC内防护，nat_ccn-CCN集群模式</p>
     */
    public $AssetType;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var integer <p>开关接入模式，1-自动接入，2-手动接入</p>
     */
    public $SwitchMode;

    /**
     * @var integer <p>引流路由方法，0-多路由表，1-策略路由</p>
     */
    public $RoutingMode;

    /**
     * @var integer <p>开关状态，0-未开启，1-已开启，2-开启中，3-关闭中</p>
     */
    public $Status;

    /**
     * @var integer <p>ip版本，0：ipv4；1：ipv6</p>
     */
    public $IpVersion;

    /**
     * @var integer <p>是否非集群模式，0-集群模式，1-非集群模式</p>
     */
    public $NonCluster;

    /**
     * @var integer <p>入侵防御动作</p>
     */
    public $IpsAction;

    /**
     * @var integer <p>流量监控开关</p>
     */
    public $TransEnable;

    /**
     * @var integer <p>Bypass状态，0-关闭，1-开启</p>
     */
    public $Bypass;

    /**
     * @var string <p>关联ID，nat_ccn资产类型时为云联网实例ID, nat资产类型时为空</p>
     */
    public $AttachId;

    /**
     * @var string <p>关联ID的实例名称，nat_ccn资产类型时为云联网名称</p>
     */
    public $AttachName;

    /**
     * @var string <p>NAT防火墙所在VPC ID</p>
     */
    public $NatVpcId;

    /**
     * @var string <p>NAT防火墙所在VPC的VPC名称</p>
     */
    public $NatVpcName;

    /**
     * @var array <p>CCN关联实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachIns;

    /**
     * @var array <p>终端节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoints;

    /**
     * @var string <p>防火墙开关操作时的进度状态：</p><p>// 开启 — 自动模式（3步）<br>&quot;AUTO_OPEN_ORCHESTRATING&quot;      // 步骤1: 预编排策略路由<br>&quot;AUTO_OPEN_CREATING_RESOURCES&quot; // 步骤2: 创建引流网络和资源<br>&quot;AUTO_OPEN_PUSHING_ROUTES&quot;     // 步骤3: 创建策略路由</p><p>// 开启 — 手动模式（1步）<br>&quot;MANUAL_OPEN_CREATING_RESOURCES&quot; // 步骤1: 创建引流网络和资源</p><p>// 关闭 — 自动模式（2步）<br>&quot;AUTO_CLOSE_DELETING_ROUTES&quot;    // 步骤1: 删除策略路由<br>&quot;AUTO_CLOSE_DELETING_RESOURCES&quot; // 步骤2: 删除引流网络和资源<br>// 关闭 — 手动模式（1步）<br>&quot;MANUAL_CLOSE_DELETING_RESOURCES&quot; // 步骤1: 删除引流网络和资源</p><p>// 修改 — 自动模式（3步）<br>&quot;AUTO_MODIFY_ORCHESTRATING&quot;   // 步骤1: 预编排策略路由<br>&quot;AUTO_MODIFY_DELETING_ROUTES&quot; // 步骤2: 删除旧策略路由<br>&quot;AUTO_MODIFY_PUSHING_ROUTES&quot;  // 步骤3: 创建新策略路由</p><p>// 修改 — 手动模式（1步，仅 VPC 防火墙存在手动模式修改）<br>&quot;MANUAL_MODIFY_UPDATING_RESOURCES&quot; // 步骤1: 更新引流网络和资源</p>
     */
    public $Progress;

    /**
     * @param string $InsObj <p>NAT实例ID</p>
     * @param string $ObjName <p>实例名称</p>
     * @param string $FwType <p>防火墙类型</p>
     * @param string $AssetType <p>资产类型，nat-VPC内防护，nat_ccn-CCN集群模式</p>
     * @param string $Region <p>地域</p>
     * @param integer $SwitchMode <p>开关接入模式，1-自动接入，2-手动接入</p>
     * @param integer $RoutingMode <p>引流路由方法，0-多路由表，1-策略路由</p>
     * @param integer $Status <p>开关状态，0-未开启，1-已开启，2-开启中，3-关闭中</p>
     * @param integer $IpVersion <p>ip版本，0：ipv4；1：ipv6</p>
     * @param integer $NonCluster <p>是否非集群模式，0-集群模式，1-非集群模式</p>
     * @param integer $IpsAction <p>入侵防御动作</p>
     * @param integer $TransEnable <p>流量监控开关</p>
     * @param integer $Bypass <p>Bypass状态，0-关闭，1-开启</p>
     * @param string $AttachId <p>关联ID，nat_ccn资产类型时为云联网实例ID, nat资产类型时为空</p>
     * @param string $AttachName <p>关联ID的实例名称，nat_ccn资产类型时为云联网名称</p>
     * @param string $NatVpcId <p>NAT防火墙所在VPC ID</p>
     * @param string $NatVpcName <p>NAT防火墙所在VPC的VPC名称</p>
     * @param array $AttachIns <p>CCN关联实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Endpoints <p>终端节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Progress <p>防火墙开关操作时的进度状态：</p><p>// 开启 — 自动模式（3步）<br>&quot;AUTO_OPEN_ORCHESTRATING&quot;      // 步骤1: 预编排策略路由<br>&quot;AUTO_OPEN_CREATING_RESOURCES&quot; // 步骤2: 创建引流网络和资源<br>&quot;AUTO_OPEN_PUSHING_ROUTES&quot;     // 步骤3: 创建策略路由</p><p>// 开启 — 手动模式（1步）<br>&quot;MANUAL_OPEN_CREATING_RESOURCES&quot; // 步骤1: 创建引流网络和资源</p><p>// 关闭 — 自动模式（2步）<br>&quot;AUTO_CLOSE_DELETING_ROUTES&quot;    // 步骤1: 删除策略路由<br>&quot;AUTO_CLOSE_DELETING_RESOURCES&quot; // 步骤2: 删除引流网络和资源<br>// 关闭 — 手动模式（1步）<br>&quot;MANUAL_CLOSE_DELETING_RESOURCES&quot; // 步骤1: 删除引流网络和资源</p><p>// 修改 — 自动模式（3步）<br>&quot;AUTO_MODIFY_ORCHESTRATING&quot;   // 步骤1: 预编排策略路由<br>&quot;AUTO_MODIFY_DELETING_ROUTES&quot; // 步骤2: 删除旧策略路由<br>&quot;AUTO_MODIFY_PUSHING_ROUTES&quot;  // 步骤3: 创建新策略路由</p><p>// 修改 — 手动模式（1步，仅 VPC 防火墙存在手动模式修改）<br>&quot;MANUAL_MODIFY_UPDATING_RESOURCES&quot; // 步骤1: 更新引流网络和资源</p>
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
        if (array_key_exists("InsObj",$param) and $param["InsObj"] !== null) {
            $this->InsObj = $param["InsObj"];
        }

        if (array_key_exists("ObjName",$param) and $param["ObjName"] !== null) {
            $this->ObjName = $param["ObjName"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }

        if (array_key_exists("RoutingMode",$param) and $param["RoutingMode"] !== null) {
            $this->RoutingMode = $param["RoutingMode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("NonCluster",$param) and $param["NonCluster"] !== null) {
            $this->NonCluster = $param["NonCluster"];
        }

        if (array_key_exists("IpsAction",$param) and $param["IpsAction"] !== null) {
            $this->IpsAction = $param["IpsAction"];
        }

        if (array_key_exists("TransEnable",$param) and $param["TransEnable"] !== null) {
            $this->TransEnable = $param["TransEnable"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("AttachId",$param) and $param["AttachId"] !== null) {
            $this->AttachId = $param["AttachId"];
        }

        if (array_key_exists("AttachName",$param) and $param["AttachName"] !== null) {
            $this->AttachName = $param["AttachName"];
        }

        if (array_key_exists("NatVpcId",$param) and $param["NatVpcId"] !== null) {
            $this->NatVpcId = $param["NatVpcId"];
        }

        if (array_key_exists("NatVpcName",$param) and $param["NatVpcName"] !== null) {
            $this->NatVpcName = $param["NatVpcName"];
        }

        if (array_key_exists("AttachIns",$param) and $param["AttachIns"] !== null) {
            $this->AttachIns = [];
            foreach ($param["AttachIns"] as $key => $value){
                $obj = new AttachInsInfo();
                $obj->deserialize($value);
                array_push($this->AttachIns, $obj);
            }
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = [];
            foreach ($param["Endpoints"] as $key => $value){
                $obj = new EndpointInfo();
                $obj->deserialize($value);
                array_push($this->Endpoints, $obj);
            }
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
