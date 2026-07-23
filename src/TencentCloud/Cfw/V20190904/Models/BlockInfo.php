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
 * 告警中心-阻断事件结构体
 *
 * @method string getSrcIP() 获取源IP
 * @method void setSrcIP(string $SrcIP) 设置源IP
 * @method string getDstIP() 获取目的ip
 * @method void setDstIP(string $DstIP) 设置目的ip
 * @method string getDstPort() 获取端口
 * @method void setDstPort(string $DstPort) 设置端口
 * @method string getAppID() 获取appid信息
 * @method void setAppID(string $AppID) 设置appid信息
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getAssetName() 获取资产名称
 * @method void setAssetName(string $AssetName) 设置资产名称
 * @method string getZone() 获取地域
 * @method void setZone(string $Zone) 设置地域
 * @method string getMaxDate() 获取最晚时间
 * @method void setMaxDate(string $MaxDate) 设置最晚时间
 * @method string getMinDate() 获取最近时间
 * @method void setMinDate(string $MinDate) 设置最近时间
 * @method integer getDirection() 获取方向  1入站 0出战
 * @method void setDirection(integer $Direction) 设置方向  1入站 0出战
 * @method integer getBlockSource() 获取来源  1拦截列表，2虚拟补丁，3威胁情报，4基础防御
 * @method void setBlockSource(integer $BlockSource) 设置来源  1拦截列表，2虚拟补丁，3威胁情报，4基础防御
 * @method string getCountry() 获取国加
 * @method void setCountry(string $Country) 设置国加
 * @method integer getCount() 获取次数
 * @method void setCount(integer $Count) 设置次数
 * @method float getAvgCount() 获取拦截频率
 * @method void setAvgCount(float $AvgCount) 设置拦截频率
 * @method integer getIsTop() 获取置顶位
 * @method void setIsTop(integer $IsTop) 设置置顶位
 * @method string getUniqueId() 获取记录唯一标识
 * @method void setUniqueId(string $UniqueId) 设置记录唯一标识
 * @method integer getByPass() 获取1是 0不是
 * @method void setByPass(integer $ByPass) 设置1是 0不是
 * @method integer getBlock() 获取1是 0不是
 * @method void setBlock(integer $Block) 设置1是 0不是
 * @method integer getIgnore() 获取1是 0不是
 * @method void setIgnore(integer $Ignore) 设置1是 0不是
 * @method string getWhiteTag() 获取WhiteTag信息
 * @method void setWhiteTag(string $WhiteTag) 设置WhiteTag信息
 * @method string getDstAssetId() 获取vpc间防火墙日志，目的资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstAssetId(string $DstAssetId) 设置vpc间防火墙日志，目的资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstAssetName() 获取vpc间防火墙日志，目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstAssetName(string $DstAssetName) 设置vpc间防火墙日志，目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcVpc() 获取vpc间防火墙日志，源VPC id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcVpc(string $SrcVpc) 设置vpc间防火墙日志，源VPC id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcVpcName() 获取vpc间防火墙日志，源VPC名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcVpcName(string $SrcVpcName) 设置vpc间防火墙日志，源VPC名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstVpc() 获取vpc间防火墙日志，目的VPC id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstVpc(string $DstVpc) 设置vpc间防火墙日志，目的VPC id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstVpcName() 获取vpc间防火墙日志，目的VPC名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstVpcName(string $DstVpcName) 设置vpc间防火墙日志，目的VPC名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEdgeId() 获取vpc间防火墙开关边id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdgeId(string $EdgeId) 设置vpc间防火墙开关边id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEdgeName() 获取vpc间防火墙开关边名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdgeName(string $EdgeName) 设置vpc间防火墙开关边名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogSource() 获取日志来源 move：vpc间防火墙
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogSource(string $LogSource) 设置日志来源 move：vpc间防火墙
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsolate() 获取是否加入隔离列表，1是 0不是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolate(integer $Isolate) 设置是否加入隔离列表，1是 0不是
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHide() 获取是否加入隔离列表，1是 0不是
 * @method void setHide(integer $Hide) 设置是否加入隔离列表，1是 0不是
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class BlockInfo extends AbstractModel
{
    /**
     * @var string 源IP
     */
    public $SrcIP;

    /**
     * @var string 目的ip
     */
    public $DstIP;

    /**
     * @var string 端口
     */
    public $DstPort;

    /**
     * @var string appid信息
     */
    public $AppID;

    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var string 资产名称
     */
    public $AssetName;

    /**
     * @var string 地域
     */
    public $Zone;

    /**
     * @var string 最晚时间
     */
    public $MaxDate;

    /**
     * @var string 最近时间
     */
    public $MinDate;

    /**
     * @var integer 方向  1入站 0出战
     */
    public $Direction;

    /**
     * @var integer 来源  1拦截列表，2虚拟补丁，3威胁情报，4基础防御
     */
    public $BlockSource;

    /**
     * @var string 国加
     */
    public $Country;

    /**
     * @var integer 次数
     */
    public $Count;

    /**
     * @var float 拦截频率
     */
    public $AvgCount;

    /**
     * @var integer 置顶位
     */
    public $IsTop;

    /**
     * @var string 记录唯一标识
     */
    public $UniqueId;

    /**
     * @var integer 1是 0不是
     */
    public $ByPass;

    /**
     * @var integer 1是 0不是
     */
    public $Block;

    /**
     * @var integer 1是 0不是
     */
    public $Ignore;

    /**
     * @var string WhiteTag信息
     */
    public $WhiteTag;

    /**
     * @var string vpc间防火墙日志，目的资产id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstAssetId;

    /**
     * @var string vpc间防火墙日志，目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstAssetName;

    /**
     * @var string vpc间防火墙日志，源VPC id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcVpc;

    /**
     * @var string vpc间防火墙日志，源VPC名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcVpcName;

    /**
     * @var string vpc间防火墙日志，目的VPC id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstVpc;

    /**
     * @var string vpc间防火墙日志，目的VPC名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstVpcName;

    /**
     * @var string vpc间防火墙开关边id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EdgeId;

    /**
     * @var string vpc间防火墙开关边名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EdgeName;

    /**
     * @var string 日志来源 move：vpc间防火墙
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogSource;

    /**
     * @var integer 是否加入隔离列表，1是 0不是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Isolate;

    /**
     * @var integer 是否加入隔离列表，1是 0不是
     */
    public $Hide;

    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @param string $SrcIP 源IP
     * @param string $DstIP 目的ip
     * @param string $DstPort 端口
     * @param string $AppID appid信息
     * @param string $AssetId 资产id
     * @param string $AssetName 资产名称
     * @param string $Zone 地域
     * @param string $MaxDate 最晚时间
     * @param string $MinDate 最近时间
     * @param integer $Direction 方向  1入站 0出战
     * @param integer $BlockSource 来源  1拦截列表，2虚拟补丁，3威胁情报，4基础防御
     * @param string $Country 国加
     * @param integer $Count 次数
     * @param float $AvgCount 拦截频率
     * @param integer $IsTop 置顶位
     * @param string $UniqueId 记录唯一标识
     * @param integer $ByPass 1是 0不是
     * @param integer $Block 1是 0不是
     * @param integer $Ignore 1是 0不是
     * @param string $WhiteTag WhiteTag信息
     * @param string $DstAssetId vpc间防火墙日志，目的资产id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstAssetName vpc间防火墙日志，目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcVpc vpc间防火墙日志，源VPC id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcVpcName vpc间防火墙日志，源VPC名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstVpc vpc间防火墙日志，目的VPC id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstVpcName vpc间防火墙日志，目的VPC名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EdgeId vpc间防火墙开关边id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EdgeName vpc间防火墙开关边名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogSource 日志来源 move：vpc间防火墙
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Isolate 是否加入隔离列表，1是 0不是
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Hide 是否加入隔离列表，1是 0不是
     * @param string $Domain 域名
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
        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("DstIP",$param) and $param["DstIP"] !== null) {
            $this->DstIP = $param["DstIP"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("MaxDate",$param) and $param["MaxDate"] !== null) {
            $this->MaxDate = $param["MaxDate"];
        }

        if (array_key_exists("MinDate",$param) and $param["MinDate"] !== null) {
            $this->MinDate = $param["MinDate"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("BlockSource",$param) and $param["BlockSource"] !== null) {
            $this->BlockSource = $param["BlockSource"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AvgCount",$param) and $param["AvgCount"] !== null) {
            $this->AvgCount = $param["AvgCount"];
        }

        if (array_key_exists("IsTop",$param) and $param["IsTop"] !== null) {
            $this->IsTop = $param["IsTop"];
        }

        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }

        if (array_key_exists("ByPass",$param) and $param["ByPass"] !== null) {
            $this->ByPass = $param["ByPass"];
        }

        if (array_key_exists("Block",$param) and $param["Block"] !== null) {
            $this->Block = $param["Block"];
        }

        if (array_key_exists("Ignore",$param) and $param["Ignore"] !== null) {
            $this->Ignore = $param["Ignore"];
        }

        if (array_key_exists("WhiteTag",$param) and $param["WhiteTag"] !== null) {
            $this->WhiteTag = $param["WhiteTag"];
        }

        if (array_key_exists("DstAssetId",$param) and $param["DstAssetId"] !== null) {
            $this->DstAssetId = $param["DstAssetId"];
        }

        if (array_key_exists("DstAssetName",$param) and $param["DstAssetName"] !== null) {
            $this->DstAssetName = $param["DstAssetName"];
        }

        if (array_key_exists("SrcVpc",$param) and $param["SrcVpc"] !== null) {
            $this->SrcVpc = $param["SrcVpc"];
        }

        if (array_key_exists("SrcVpcName",$param) and $param["SrcVpcName"] !== null) {
            $this->SrcVpcName = $param["SrcVpcName"];
        }

        if (array_key_exists("DstVpc",$param) and $param["DstVpc"] !== null) {
            $this->DstVpc = $param["DstVpc"];
        }

        if (array_key_exists("DstVpcName",$param) and $param["DstVpcName"] !== null) {
            $this->DstVpcName = $param["DstVpcName"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("EdgeName",$param) and $param["EdgeName"] !== null) {
            $this->EdgeName = $param["EdgeName"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("Isolate",$param) and $param["Isolate"] !== null) {
            $this->Isolate = $param["Isolate"];
        }

        if (array_key_exists("Hide",$param) and $param["Hide"] !== null) {
            $this->Hide = $param["Hide"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
