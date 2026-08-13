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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dspm风险
 *
 * @method string getRiskId() 获取<p>风险id</p>
 * @method void setRiskId(string $RiskId) 设置<p>风险id</p>
 * @method string getRiskName() 获取<p>风险名称</p>
 * @method void setRiskName(string $RiskName) 设置<p>风险名称</p>
 * @method string getRiskNameEn() 获取<p>风险英文名称</p>
 * @method void setRiskNameEn(string $RiskNameEn) 设置<p>风险英文名称</p>
 * @method string getStrategyType() 获取<p>策略类型</p>
 * @method void setStrategyType(string $StrategyType) 设置<p>策略类型</p>
 * @method string getStrategyCategory() 获取<p>策略类别</p>
 * @method void setStrategyCategory(string $StrategyCategory) 设置<p>策略类别</p>
 * @method string getRiskLevel() 获取<p>风险等级</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>风险等级</p>
 * @method string getAssetId() 获取<p>资产实例Id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产实例Id</p>
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method string getAssetName() 获取<p>资产名</p>
 * @method void setAssetName(string $AssetName) 设置<p>资产名</p>
 * @method string getAssetRegion() 获取<p>地域</p>
 * @method void setAssetRegion(string $AssetRegion) 设置<p>地域</p>
 * @method string getAccount() 获取<p>资产账号</p>
 * @method void setAccount(string $Account) 设置<p>资产账号</p>
 * @method string getHost() 获取<p>主机地址</p>
 * @method void setHost(string $Host) 设置<p>主机地址</p>
 * @method integer getAccountType() 获取<p>账号类型</p>
 * @method void setAccountType(integer $AccountType) 设置<p>账号类型</p>
 * @method string getDetectTime() 获取<p>风险检出时间</p>
 * @method void setDetectTime(string $DetectTime) 设置<p>风险检出时间</p>
 * @method integer getStatus() 获取<p>处理状态 0-未处理 1-已处置 2-已忽略</p>
 * @method void setStatus(integer $Status) 设置<p>处理状态 0-未处理 1-已处置 2-已忽略</p>
 * @method string getIdentifyId() 获取<p>身份id</p>
 * @method void setIdentifyId(string $IdentifyId) 设置<p>身份id</p>
 * @method DspmUinUser getOwnerUin() 获取<p>所属云账号uin用户</p>
 * @method void setOwnerUin(DspmUinUser $OwnerUin) 设置<p>所属云账号uin用户</p>
 * @method DspmPersonUser getPerson() 获取<p>所属个人用户信息</p>
 * @method void setPerson(DspmPersonUser $Person) 设置<p>所属个人用户信息</p>
 * @method string getRiskData() 获取<p>风险数据。</p>
 * @method void setRiskData(string $RiskData) 设置<p>风险数据。</p>
 * @method integer getIsAssetManager() 获取<p>是否资产管理员</p>
 * @method void setIsAssetManager(integer $IsAssetManager) 设置<p>是否资产管理员</p>
 * @method string getDataBeginTime() 获取<p>数据起始时间</p>
 * @method void setDataBeginTime(string $DataBeginTime) 设置<p>数据起始时间</p>
 * @method string getDataEndTime() 获取<p>数据结束时间</p>
 * @method void setDataEndTime(string $DataEndTime) 设置<p>数据结束时间</p>
 * @method string getRiskType() 获取<p>风险类型。risk-风险；alarm-告警。</p>
 * @method void setRiskType(string $RiskType) 设置<p>风险类型。risk-风险；alarm-告警。</p>
 * @method integer getAppId() 获取<p>资产所属账号app id</p>
 * @method void setAppId(integer $AppId) 设置<p>资产所属账号app id</p>
 * @method string getNickName() 获取<p>账号昵称</p>
 * @method void setNickName(string $NickName) 设置<p>账号昵称</p>
 * @method string getUin() 获取<p>资产所属账号uin</p>
 * @method void setUin(string $Uin) 设置<p>资产所属账号uin</p>
 * @method integer getClusterType() 获取<p>MongoDb的集群类型，非 MongoDB 资产固定 0</p><p>枚举值：</p><ul><li>0： 副本集</li><li>1： 分片</li></ul><p>默认值：0</p>
 * @method void setClusterType(integer $ClusterType) 设置<p>MongoDb的集群类型，非 MongoDB 资产固定 0</p><p>枚举值：</p><ul><li>0： 副本集</li><li>1： 分片</li></ul><p>默认值：0</p>
 * @method string getClusterId() 获取<p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取<p>集群名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置<p>集群名</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspmRisk extends AbstractModel
{
    /**
     * @var string <p>风险id</p>
     */
    public $RiskId;

    /**
     * @var string <p>风险名称</p>
     */
    public $RiskName;

    /**
     * @var string <p>风险英文名称</p>
     */
    public $RiskNameEn;

    /**
     * @var string <p>策略类型</p>
     */
    public $StrategyType;

    /**
     * @var string <p>策略类别</p>
     */
    public $StrategyCategory;

    /**
     * @var string <p>风险等级</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>资产实例Id</p>
     */
    public $AssetId;

    /**
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var string <p>资产名</p>
     */
    public $AssetName;

    /**
     * @var string <p>地域</p>
     */
    public $AssetRegion;

    /**
     * @var string <p>资产账号</p>
     */
    public $Account;

    /**
     * @var string <p>主机地址</p>
     */
    public $Host;

    /**
     * @var integer <p>账号类型</p>
     */
    public $AccountType;

    /**
     * @var string <p>风险检出时间</p>
     */
    public $DetectTime;

    /**
     * @var integer <p>处理状态 0-未处理 1-已处置 2-已忽略</p>
     */
    public $Status;

    /**
     * @var string <p>身份id</p>
     */
    public $IdentifyId;

    /**
     * @var DspmUinUser <p>所属云账号uin用户</p>
     */
    public $OwnerUin;

    /**
     * @var DspmPersonUser <p>所属个人用户信息</p>
     */
    public $Person;

    /**
     * @var string <p>风险数据。</p>
     */
    public $RiskData;

    /**
     * @var integer <p>是否资产管理员</p>
     */
    public $IsAssetManager;

    /**
     * @var string <p>数据起始时间</p>
     */
    public $DataBeginTime;

    /**
     * @var string <p>数据结束时间</p>
     */
    public $DataEndTime;

    /**
     * @var string <p>风险类型。risk-风险；alarm-告警。</p>
     */
    public $RiskType;

    /**
     * @var integer <p>资产所属账号app id</p>
     */
    public $AppId;

    /**
     * @var string <p>账号昵称</p>
     */
    public $NickName;

    /**
     * @var string <p>资产所属账号uin</p>
     */
    public $Uin;

    /**
     * @var integer <p>MongoDb的集群类型，非 MongoDB 资产固定 0</p><p>枚举值：</p><ul><li>0： 副本集</li><li>1： 分片</li></ul><p>默认值：0</p>
     */
    public $ClusterType;

    /**
     * @var string <p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>集群名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @param string $RiskId <p>风险id</p>
     * @param string $RiskName <p>风险名称</p>
     * @param string $RiskNameEn <p>风险英文名称</p>
     * @param string $StrategyType <p>策略类型</p>
     * @param string $StrategyCategory <p>策略类别</p>
     * @param string $RiskLevel <p>风险等级</p>
     * @param string $AssetId <p>资产实例Id</p>
     * @param string $AssetType <p>资产类型</p>
     * @param string $AssetName <p>资产名</p>
     * @param string $AssetRegion <p>地域</p>
     * @param string $Account <p>资产账号</p>
     * @param string $Host <p>主机地址</p>
     * @param integer $AccountType <p>账号类型</p>
     * @param string $DetectTime <p>风险检出时间</p>
     * @param integer $Status <p>处理状态 0-未处理 1-已处置 2-已忽略</p>
     * @param string $IdentifyId <p>身份id</p>
     * @param DspmUinUser $OwnerUin <p>所属云账号uin用户</p>
     * @param DspmPersonUser $Person <p>所属个人用户信息</p>
     * @param string $RiskData <p>风险数据。</p>
     * @param integer $IsAssetManager <p>是否资产管理员</p>
     * @param string $DataBeginTime <p>数据起始时间</p>
     * @param string $DataEndTime <p>数据结束时间</p>
     * @param string $RiskType <p>风险类型。risk-风险；alarm-告警。</p>
     * @param integer $AppId <p>资产所属账号app id</p>
     * @param string $NickName <p>账号昵称</p>
     * @param string $Uin <p>资产所属账号uin</p>
     * @param integer $ClusterType <p>MongoDb的集群类型，非 MongoDB 资产固定 0</p><p>枚举值：</p><ul><li>0： 副本集</li><li>1： 分片</li></ul><p>默认值：0</p>
     * @param string $ClusterId <p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName <p>集群名</p>
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
        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskNameEn",$param) and $param["RiskNameEn"] !== null) {
            $this->RiskNameEn = $param["RiskNameEn"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyCategory",$param) and $param["StrategyCategory"] !== null) {
            $this->StrategyCategory = $param["StrategyCategory"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetRegion",$param) and $param["AssetRegion"] !== null) {
            $this->AssetRegion = $param["AssetRegion"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("RiskData",$param) and $param["RiskData"] !== null) {
            $this->RiskData = $param["RiskData"];
        }

        if (array_key_exists("IsAssetManager",$param) and $param["IsAssetManager"] !== null) {
            $this->IsAssetManager = $param["IsAssetManager"];
        }

        if (array_key_exists("DataBeginTime",$param) and $param["DataBeginTime"] !== null) {
            $this->DataBeginTime = $param["DataBeginTime"];
        }

        if (array_key_exists("DataEndTime",$param) and $param["DataEndTime"] !== null) {
            $this->DataEndTime = $param["DataEndTime"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
