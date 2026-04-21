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
 * 集群模式防火墙开关数据详情
 *
 * @method string getInsObj() 获取<p>实例对象可以是ccnid类型:ccn-ad21xuds形式;nat网关类型:nat-da12daxd形式;ip类型:1.1.1.1形式等</p>
 * @method void setInsObj(string $InsObj) 设置<p>实例对象可以是ccnid类型:ccn-ad21xuds形式;nat网关类型:nat-da12daxd形式;ip类型:1.1.1.1形式等</p>
 * @method string getObjName() 获取<p>实例对象名称</p>
 * @method void setObjName(string $ObjName) 设置<p>实例对象名称</p>
 * @method string getFwType() 获取<p>防火墙类型，ew：vpc间防火墙；nat：nat防火墙；border：互联网边界防火墙</p>
 * @method void setFwType(string $FwType) 设置<p>防火墙类型，ew：vpc间防火墙；nat：nat防火墙；border：互联网边界防火墙</p>
 * @method string getAssetType() 获取<p>资产类型，ccn：ccn实例类型；nat：nat网关类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型，ccn：ccn实例类型；nat：nat网关类型</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method integer getStatus() 获取<p>开关状态<br>0 : 关闭<br>1 : 开启<br>2 : 开启中<br>3 : 关闭中<br>4 : 异常</p>
 * @method void setStatus(integer $Status) 设置<p>开关状态<br>0 : 关闭<br>1 : 开启<br>2 : 开启中<br>3 : 关闭中<br>4 : 异常</p>
 * @method integer getSwitchMode() 获取<p>开关接入模式，1：自动接入；2，手动接入，0：未选择</p>
 * @method void setSwitchMode(integer $SwitchMode) 设置<p>开关接入模式，1：自动接入；2，手动接入，0：未选择</p>
 * @method integer getNonCluster() 获取<p>实例对象是否处于非集群接入场景（主备模式）</p>
 * @method void setNonCluster(integer $NonCluster) 设置<p>实例对象是否处于非集群接入场景（主备模式）</p>
 * @method integer getIpVersion() 获取<p>ip版本，0：ipv4；1：ipv6</p>
 * @method void setIpVersion(integer $IpVersion) 设置<p>ip版本，0：ipv4；1：ipv6</p>
 * @method array getAttachIns() 获取<p>关联实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachIns(array $AttachIns) 设置<p>关联实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEndpoints() 获取<p>引流私有网络端点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoints(array $Endpoints) 设置<p>引流私有网络端点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdpsaction() 获取<p>入侵防护模式,0:观察;1:拦截;2:严格;3:关闭</p>
 * @method void setIdpsaction(integer $Idpsaction) 设置<p>入侵防护模式,0:观察;1:拦截;2:严格;3:关闭</p>
 * @method integer getTransEnable() 获取<p>//透明模式开关,0:未开启,1:已开启</p>
 * @method void setTransEnable(integer $TransEnable) 设置<p>//透明模式开关,0:未开启,1:已开启</p>
 * @method integer getEnable() 获取<p>开关状态 0关闭 1开启</p>
 * @method void setEnable(integer $Enable) 设置<p>开关状态 0关闭 1开启</p>
 * @method integer getRoutingMode() 获取<p>路由模式：0：多路由表，1：策略路由</p>
 * @method void setRoutingMode(integer $RoutingMode) 设置<p>路由模式：0：多路由表，1：策略路由</p>
 * @method integer getIsPeer() 获取<p>是否跨租户开关 1是 0不是</p>
 * @method void setIsPeer(integer $IsPeer) 设置<p>是否跨租户开关 1是 0不是</p>
 * @method string getPeerAppid() 获取<p>跨租户appid</p>
 * @method void setPeerAppid(string $PeerAppid) 设置<p>跨租户appid</p>
 * @method integer getPeerStatus() 获取<p>跨租户操作状态 1不允许操作 0可以</p>
 * @method void setPeerStatus(integer $PeerStatus) 设置<p>跨租户操作状态 1不允许操作 0可以</p>
 * @method integer getBypass() 获取<p>Bypass状态</p>
 * @method void setBypass(integer $Bypass) 设置<p>Bypass状态</p>
 * @method string getProgress() 获取<p>防火墙开关操作时的进度状态：</p><p>// 开启 — 自动模式（3步）<br>&quot;AUTO_OPEN_ORCHESTRATING&quot; // 步骤1: 预编排策略路由<br>&quot;AUTO_OPEN_CREATING_RESOURCES&quot; // 步骤2: 创建引流网络和资源<br>&quot;AUTO_OPEN_PUSHING_ROUTES&quot; // 步骤3: 创建策略路由</p><p>// 开启 — 手动模式（1步）<br>&quot;MANUAL_OPEN_CREATING_RESOURCES&quot; // 步骤1: 创建引流网络和资源</p><p>// 关闭 — 自动模式（2步）<br>&quot;AUTO_CLOSE_DELETING_ROUTES&quot; // 步骤1: 删除策略路由<br>&quot;AUTO_CLOSE_DELETING_RESOURCES&quot; // 步骤2: 删除引流网络和资源<br>// 关闭 — 手动模式（1步）<br>&quot;MANUAL_CLOSE_DELETING_RESOURCES&quot; // 步骤1: 删除引流网络和资源</p><p>// 修改 — 自动模式（3步）<br>&quot;AUTO_MODIFY_ORCHESTRATING&quot; // 步骤1: 预编排策略路由<br>&quot;AUTO_MODIFY_DELETING_ROUTES&quot; // 步骤2: 删除旧策略路由<br>&quot;AUTO_MODIFY_PUSHING_ROUTES&quot; // 步骤3: 创建新策略路由</p><p>// 修改 — 手动模式（1步，仅 VPC 防火墙存在手动模式修改）<br>&quot;MANUAL_MODIFY_UPDATING_RESOURCES&quot; // 步骤1: 更新引流网络和资源</p>
 * @method void setProgress(string $Progress) 设置<p>防火墙开关操作时的进度状态：</p><p>// 开启 — 自动模式（3步）<br>&quot;AUTO_OPEN_ORCHESTRATING&quot; // 步骤1: 预编排策略路由<br>&quot;AUTO_OPEN_CREATING_RESOURCES&quot; // 步骤2: 创建引流网络和资源<br>&quot;AUTO_OPEN_PUSHING_ROUTES&quot; // 步骤3: 创建策略路由</p><p>// 开启 — 手动模式（1步）<br>&quot;MANUAL_OPEN_CREATING_RESOURCES&quot; // 步骤1: 创建引流网络和资源</p><p>// 关闭 — 自动模式（2步）<br>&quot;AUTO_CLOSE_DELETING_ROUTES&quot; // 步骤1: 删除策略路由<br>&quot;AUTO_CLOSE_DELETING_RESOURCES&quot; // 步骤2: 删除引流网络和资源<br>// 关闭 — 手动模式（1步）<br>&quot;MANUAL_CLOSE_DELETING_RESOURCES&quot; // 步骤1: 删除引流网络和资源</p><p>// 修改 — 自动模式（3步）<br>&quot;AUTO_MODIFY_ORCHESTRATING&quot; // 步骤1: 预编排策略路由<br>&quot;AUTO_MODIFY_DELETING_ROUTES&quot; // 步骤2: 删除旧策略路由<br>&quot;AUTO_MODIFY_PUSHING_ROUTES&quot; // 步骤3: 创建新策略路由</p><p>// 修改 — 手动模式（1步，仅 VPC 防火墙存在手动模式修改）<br>&quot;MANUAL_MODIFY_UPDATING_RESOURCES&quot; // 步骤1: 更新引流网络和资源</p>
 */
class ClusterSwitchDetail extends AbstractModel
{
    /**
     * @var string <p>实例对象可以是ccnid类型:ccn-ad21xuds形式;nat网关类型:nat-da12daxd形式;ip类型:1.1.1.1形式等</p>
     */
    public $InsObj;

    /**
     * @var string <p>实例对象名称</p>
     */
    public $ObjName;

    /**
     * @var string <p>防火墙类型，ew：vpc间防火墙；nat：nat防火墙；border：互联网边界防火墙</p>
     */
    public $FwType;

    /**
     * @var string <p>资产类型，ccn：ccn实例类型；nat：nat网关类型</p>
     */
    public $AssetType;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var integer <p>开关状态<br>0 : 关闭<br>1 : 开启<br>2 : 开启中<br>3 : 关闭中<br>4 : 异常</p>
     */
    public $Status;

    /**
     * @var integer <p>开关接入模式，1：自动接入；2，手动接入，0：未选择</p>
     */
    public $SwitchMode;

    /**
     * @var integer <p>实例对象是否处于非集群接入场景（主备模式）</p>
     */
    public $NonCluster;

    /**
     * @var integer <p>ip版本，0：ipv4；1：ipv6</p>
     */
    public $IpVersion;

    /**
     * @var array <p>关联实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachIns;

    /**
     * @var array <p>引流私有网络端点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoints;

    /**
     * @var integer <p>入侵防护模式,0:观察;1:拦截;2:严格;3:关闭</p>
     */
    public $Idpsaction;

    /**
     * @var integer <p>//透明模式开关,0:未开启,1:已开启</p>
     */
    public $TransEnable;

    /**
     * @var integer <p>开关状态 0关闭 1开启</p>
     */
    public $Enable;

    /**
     * @var integer <p>路由模式：0：多路由表，1：策略路由</p>
     */
    public $RoutingMode;

    /**
     * @var integer <p>是否跨租户开关 1是 0不是</p>
     */
    public $IsPeer;

    /**
     * @var string <p>跨租户appid</p>
     */
    public $PeerAppid;

    /**
     * @var integer <p>跨租户操作状态 1不允许操作 0可以</p>
     */
    public $PeerStatus;

    /**
     * @var integer <p>Bypass状态</p>
     */
    public $Bypass;

    /**
     * @var string <p>防火墙开关操作时的进度状态：</p><p>// 开启 — 自动模式（3步）<br>&quot;AUTO_OPEN_ORCHESTRATING&quot; // 步骤1: 预编排策略路由<br>&quot;AUTO_OPEN_CREATING_RESOURCES&quot; // 步骤2: 创建引流网络和资源<br>&quot;AUTO_OPEN_PUSHING_ROUTES&quot; // 步骤3: 创建策略路由</p><p>// 开启 — 手动模式（1步）<br>&quot;MANUAL_OPEN_CREATING_RESOURCES&quot; // 步骤1: 创建引流网络和资源</p><p>// 关闭 — 自动模式（2步）<br>&quot;AUTO_CLOSE_DELETING_ROUTES&quot; // 步骤1: 删除策略路由<br>&quot;AUTO_CLOSE_DELETING_RESOURCES&quot; // 步骤2: 删除引流网络和资源<br>// 关闭 — 手动模式（1步）<br>&quot;MANUAL_CLOSE_DELETING_RESOURCES&quot; // 步骤1: 删除引流网络和资源</p><p>// 修改 — 自动模式（3步）<br>&quot;AUTO_MODIFY_ORCHESTRATING&quot; // 步骤1: 预编排策略路由<br>&quot;AUTO_MODIFY_DELETING_ROUTES&quot; // 步骤2: 删除旧策略路由<br>&quot;AUTO_MODIFY_PUSHING_ROUTES&quot; // 步骤3: 创建新策略路由</p><p>// 修改 — 手动模式（1步，仅 VPC 防火墙存在手动模式修改）<br>&quot;MANUAL_MODIFY_UPDATING_RESOURCES&quot; // 步骤1: 更新引流网络和资源</p>
     */
    public $Progress;

    /**
     * @param string $InsObj <p>实例对象可以是ccnid类型:ccn-ad21xuds形式;nat网关类型:nat-da12daxd形式;ip类型:1.1.1.1形式等</p>
     * @param string $ObjName <p>实例对象名称</p>
     * @param string $FwType <p>防火墙类型，ew：vpc间防火墙；nat：nat防火墙；border：互联网边界防火墙</p>
     * @param string $AssetType <p>资产类型，ccn：ccn实例类型；nat：nat网关类型</p>
     * @param string $Region <p>地域</p>
     * @param integer $Status <p>开关状态<br>0 : 关闭<br>1 : 开启<br>2 : 开启中<br>3 : 关闭中<br>4 : 异常</p>
     * @param integer $SwitchMode <p>开关接入模式，1：自动接入；2，手动接入，0：未选择</p>
     * @param integer $NonCluster <p>实例对象是否处于非集群接入场景（主备模式）</p>
     * @param integer $IpVersion <p>ip版本，0：ipv4；1：ipv6</p>
     * @param array $AttachIns <p>关联实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Endpoints <p>引流私有网络端点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Idpsaction <p>入侵防护模式,0:观察;1:拦截;2:严格;3:关闭</p>
     * @param integer $TransEnable <p>//透明模式开关,0:未开启,1:已开启</p>
     * @param integer $Enable <p>开关状态 0关闭 1开启</p>
     * @param integer $RoutingMode <p>路由模式：0：多路由表，1：策略路由</p>
     * @param integer $IsPeer <p>是否跨租户开关 1是 0不是</p>
     * @param string $PeerAppid <p>跨租户appid</p>
     * @param integer $PeerStatus <p>跨租户操作状态 1不允许操作 0可以</p>
     * @param integer $Bypass <p>Bypass状态</p>
     * @param string $Progress <p>防火墙开关操作时的进度状态：</p><p>// 开启 — 自动模式（3步）<br>&quot;AUTO_OPEN_ORCHESTRATING&quot; // 步骤1: 预编排策略路由<br>&quot;AUTO_OPEN_CREATING_RESOURCES&quot; // 步骤2: 创建引流网络和资源<br>&quot;AUTO_OPEN_PUSHING_ROUTES&quot; // 步骤3: 创建策略路由</p><p>// 开启 — 手动模式（1步）<br>&quot;MANUAL_OPEN_CREATING_RESOURCES&quot; // 步骤1: 创建引流网络和资源</p><p>// 关闭 — 自动模式（2步）<br>&quot;AUTO_CLOSE_DELETING_ROUTES&quot; // 步骤1: 删除策略路由<br>&quot;AUTO_CLOSE_DELETING_RESOURCES&quot; // 步骤2: 删除引流网络和资源<br>// 关闭 — 手动模式（1步）<br>&quot;MANUAL_CLOSE_DELETING_RESOURCES&quot; // 步骤1: 删除引流网络和资源</p><p>// 修改 — 自动模式（3步）<br>&quot;AUTO_MODIFY_ORCHESTRATING&quot; // 步骤1: 预编排策略路由<br>&quot;AUTO_MODIFY_DELETING_ROUTES&quot; // 步骤2: 删除旧策略路由<br>&quot;AUTO_MODIFY_PUSHING_ROUTES&quot; // 步骤3: 创建新策略路由</p><p>// 修改 — 手动模式（1步，仅 VPC 防火墙存在手动模式修改）<br>&quot;MANUAL_MODIFY_UPDATING_RESOURCES&quot; // 步骤1: 更新引流网络和资源</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }

        if (array_key_exists("NonCluster",$param) and $param["NonCluster"] !== null) {
            $this->NonCluster = $param["NonCluster"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
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

        if (array_key_exists("Idpsaction",$param) and $param["Idpsaction"] !== null) {
            $this->Idpsaction = $param["Idpsaction"];
        }

        if (array_key_exists("TransEnable",$param) and $param["TransEnable"] !== null) {
            $this->TransEnable = $param["TransEnable"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("RoutingMode",$param) and $param["RoutingMode"] !== null) {
            $this->RoutingMode = $param["RoutingMode"];
        }

        if (array_key_exists("IsPeer",$param) and $param["IsPeer"] !== null) {
            $this->IsPeer = $param["IsPeer"];
        }

        if (array_key_exists("PeerAppid",$param) and $param["PeerAppid"] !== null) {
            $this->PeerAppid = $param["PeerAppid"];
        }

        if (array_key_exists("PeerStatus",$param) and $param["PeerStatus"] !== null) {
            $this->PeerStatus = $param["PeerStatus"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
