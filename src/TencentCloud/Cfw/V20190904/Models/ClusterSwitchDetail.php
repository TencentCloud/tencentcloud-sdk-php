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
 * @method string getInsObj() 获取实例对象可以是ccnid类型:ccn-ad21xuds形式;nat网关类型:nat-da12daxd形式;ip类型:1.1.1.1形式等
 * @method void setInsObj(string $InsObj) 设置实例对象可以是ccnid类型:ccn-ad21xuds形式;nat网关类型:nat-da12daxd形式;ip类型:1.1.1.1形式等
 * @method string getObjName() 获取实例对象名称
 * @method void setObjName(string $ObjName) 设置实例对象名称
 * @method string getFwType() 获取防火墙类型，ew：vpc间防火墙；nat：nat防火墙；border：互联网边界防火墙
 * @method void setFwType(string $FwType) 设置防火墙类型，ew：vpc间防火墙；nat：nat防火墙；border：互联网边界防火墙
 * @method string getAssetType() 获取资产类型，ccn：ccn实例类型；nat：nat网关类型
 * @method void setAssetType(string $AssetType) 设置资产类型，ccn：ccn实例类型；nat：nat网关类型
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getStatus() 获取开关状态
0 : 关闭
1 : 开启
2 : 开启中
3 : 关闭中
4 : 异常
 * @method void setStatus(integer $Status) 设置开关状态
0 : 关闭
1 : 开启
2 : 开启中
3 : 关闭中
4 : 异常
 * @method integer getSwitchMode() 获取开关接入模式，1：自动接入；2，手动接入，0：未选择
 * @method void setSwitchMode(integer $SwitchMode) 设置开关接入模式，1：自动接入；2，手动接入，0：未选择
 * @method integer getNonCluster() 获取实例对象是否处于非集群接入场景（主备模式）
 * @method void setNonCluster(integer $NonCluster) 设置实例对象是否处于非集群接入场景（主备模式）
 * @method integer getIpVersion() 获取ip版本，0：ipv4；1：ipv6
 * @method void setIpVersion(integer $IpVersion) 设置ip版本，0：ipv4；1：ipv6
 * @method array getAttachIns() 获取关联实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachIns(array $AttachIns) 设置关联实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEndpoints() 获取引流私有网络端点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoints(array $Endpoints) 设置引流私有网络端点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdpsaction() 获取入侵防护模式,0:观察;1:拦截;2:严格;3:关闭
 * @method void setIdpsaction(integer $Idpsaction) 设置入侵防护模式,0:观察;1:拦截;2:严格;3:关闭
 * @method integer getTransEnable() 获取//透明模式开关,0:未开启,1:已开启
 * @method void setTransEnable(integer $TransEnable) 设置//透明模式开关,0:未开启,1:已开启
 * @method integer getEnable() 获取开关状态 0关闭 1开启
 * @method void setEnable(integer $Enable) 设置开关状态 0关闭 1开启
 * @method integer getRoutingMode() 获取路由模式：0：多路由表，1：策略路由
 * @method void setRoutingMode(integer $RoutingMode) 设置路由模式：0：多路由表，1：策略路由
 * @method integer getIsPeer() 获取是否跨租户开关 1是 0不是
 * @method void setIsPeer(integer $IsPeer) 设置是否跨租户开关 1是 0不是
 * @method string getPeerAppid() 获取跨租户appid
 * @method void setPeerAppid(string $PeerAppid) 设置跨租户appid
 * @method integer getPeerStatus() 获取跨租户操作状态 1不允许操作 0可以
 * @method void setPeerStatus(integer $PeerStatus) 设置跨租户操作状态 1不允许操作 0可以
 */
class ClusterSwitchDetail extends AbstractModel
{
    /**
     * @var string 实例对象可以是ccnid类型:ccn-ad21xuds形式;nat网关类型:nat-da12daxd形式;ip类型:1.1.1.1形式等
     */
    public $InsObj;

    /**
     * @var string 实例对象名称
     */
    public $ObjName;

    /**
     * @var string 防火墙类型，ew：vpc间防火墙；nat：nat防火墙；border：互联网边界防火墙
     */
    public $FwType;

    /**
     * @var string 资产类型，ccn：ccn实例类型；nat：nat网关类型
     */
    public $AssetType;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 开关状态
0 : 关闭
1 : 开启
2 : 开启中
3 : 关闭中
4 : 异常
     */
    public $Status;

    /**
     * @var integer 开关接入模式，1：自动接入；2，手动接入，0：未选择
     */
    public $SwitchMode;

    /**
     * @var integer 实例对象是否处于非集群接入场景（主备模式）
     */
    public $NonCluster;

    /**
     * @var integer ip版本，0：ipv4；1：ipv6
     */
    public $IpVersion;

    /**
     * @var array 关联实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachIns;

    /**
     * @var array 引流私有网络端点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoints;

    /**
     * @var integer 入侵防护模式,0:观察;1:拦截;2:严格;3:关闭
     */
    public $Idpsaction;

    /**
     * @var integer //透明模式开关,0:未开启,1:已开启
     */
    public $TransEnable;

    /**
     * @var integer 开关状态 0关闭 1开启
     */
    public $Enable;

    /**
     * @var integer 路由模式：0：多路由表，1：策略路由
     */
    public $RoutingMode;

    /**
     * @var integer 是否跨租户开关 1是 0不是
     */
    public $IsPeer;

    /**
     * @var string 跨租户appid
     */
    public $PeerAppid;

    /**
     * @var integer 跨租户操作状态 1不允许操作 0可以
     */
    public $PeerStatus;

    /**
     * @param string $InsObj 实例对象可以是ccnid类型:ccn-ad21xuds形式;nat网关类型:nat-da12daxd形式;ip类型:1.1.1.1形式等
     * @param string $ObjName 实例对象名称
     * @param string $FwType 防火墙类型，ew：vpc间防火墙；nat：nat防火墙；border：互联网边界防火墙
     * @param string $AssetType 资产类型，ccn：ccn实例类型；nat：nat网关类型
     * @param string $Region 地域
     * @param integer $Status 开关状态
0 : 关闭
1 : 开启
2 : 开启中
3 : 关闭中
4 : 异常
     * @param integer $SwitchMode 开关接入模式，1：自动接入；2，手动接入，0：未选择
     * @param integer $NonCluster 实例对象是否处于非集群接入场景（主备模式）
     * @param integer $IpVersion ip版本，0：ipv4；1：ipv6
     * @param array $AttachIns 关联实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Endpoints 引流私有网络端点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Idpsaction 入侵防护模式,0:观察;1:拦截;2:严格;3:关闭
     * @param integer $TransEnable //透明模式开关,0:未开启,1:已开启
     * @param integer $Enable 开关状态 0关闭 1开启
     * @param integer $RoutingMode 路由模式：0：多路由表，1：策略路由
     * @param integer $IsPeer 是否跨租户开关 1是 0不是
     * @param string $PeerAppid 跨租户appid
     * @param integer $PeerStatus 跨租户操作状态 1不允许操作 0可以
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
    }
}
