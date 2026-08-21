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
 * 资产信息
 *
 * @method integer getAppID() 获取<p>租户ID</p>
 * @method void setAppID(integer $AppID) 设置<p>租户ID</p>
 * @method string getProvider() 获取<p>云厂商</p>
 * @method void setProvider(string $Provider) 设置<p>云厂商</p>
 * @method string getProviderName() 获取<p>云厂商名称</p>
 * @method void setProviderName(string $ProviderName) 设置<p>云厂商名称</p>
 * @method string getCloudAccountID() 获取<p>云账号ID</p>
 * @method void setCloudAccountID(string $CloudAccountID) 设置<p>云账号ID</p>
 * @method string getCloudAccountName() 获取<p>云账号名称</p>
 * @method void setCloudAccountName(string $CloudAccountName) 设置<p>云账号名称</p>
 * @method string getAssetID() 获取<p>资产ID</p>
 * @method void setAssetID(string $AssetID) 设置<p>资产ID</p>
 * @method string getAssetName() 获取<p>资产名称</p>
 * @method void setAssetName(string $AssetName) 设置<p>资产名称</p>
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method string getAssetTypeName() 获取<p>资产类型名称</p>
 * @method void setAssetTypeName(string $AssetTypeName) 设置<p>资产类型名称</p>
 * @method array getTags() 获取<p>资产标签</p>
 * @method void setTags(array $Tags) 设置<p>资产标签</p>
 * @method string getAddress() 获取<p>公网地址</p>
 * @method void setAddress(string $Address) 设置<p>公网地址</p>
 * @method string getAddressType() 获取<p>公网地址类型</p>
 * @method void setAddressType(string $AddressType) 设置<p>公网地址类型</p>
 * @method array getResolvedAddress() 获取<p>解析地址</p>
 * @method void setResolvedAddress(array $ResolvedAddress) 设置<p>解析地址</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method integer getProtectStatus() 获取<p>防护状态</p>
 * @method void setProtectStatus(integer $ProtectStatus) 设置<p>防护状态</p>
 * @method integer getRiskCount() 获取<p>风险数量</p>
 * @method void setRiskCount(integer $RiskCount) 设置<p>风险数量</p>
 * @method integer getAlarmCount() 获取<p>告警数量</p>
 * @method void setAlarmCount(integer $AlarmCount) 设置<p>告警数量</p>
 * @method string getCreatedAt() 获取<p>实例创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>实例创建时间</p>
 * @method string getFirstSyncTime() 获取<p>首次同步时间</p>
 * @method void setFirstSyncTime(string $FirstSyncTime) 设置<p>首次同步时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method integer getCriticalRiskCount() 获取<p>严重风险总数</p>
 * @method void setCriticalRiskCount(integer $CriticalRiskCount) 设置<p>严重风险总数</p>
 * @method integer getHighRiskCount() 获取<p>高风险总数</p>
 * @method void setHighRiskCount(integer $HighRiskCount) 设置<p>高风险总数</p>
 * @method integer getMediumRiskCount() 获取<p>中风险总数</p>
 * @method void setMediumRiskCount(integer $MediumRiskCount) 设置<p>中风险总数</p>
 * @method integer getLowRiskCount() 获取<p>低风险总数</p>
 * @method void setLowRiskCount(integer $LowRiskCount) 设置<p>低风险总数</p>
 * @method string getAssetRID() 获取<p>资产唯一ID</p>
 * @method void setAssetRID(string $AssetRID) 设置<p>资产唯一ID</p>
 * @method array getCustomTags() 获取<p>云安全中心标签</p>
 * @method void setCustomTags(array $CustomTags) 设置<p>云安全中心标签</p>
 * @method string getAssetTypeIconURL() 获取<p>资产类型图标</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) 设置<p>资产类型图标</p>
 */
class PublicAssetInfo extends AbstractModel
{
    /**
     * @var integer <p>租户ID</p>
     */
    public $AppID;

    /**
     * @var string <p>云厂商</p>
     */
    public $Provider;

    /**
     * @var string <p>云厂商名称</p>
     */
    public $ProviderName;

    /**
     * @var string <p>云账号ID</p>
     */
    public $CloudAccountID;

    /**
     * @var string <p>云账号名称</p>
     */
    public $CloudAccountName;

    /**
     * @var string <p>资产ID</p>
     */
    public $AssetID;

    /**
     * @var string <p>资产名称</p>
     */
    public $AssetName;

    /**
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var string <p>资产类型名称</p>
     */
    public $AssetTypeName;

    /**
     * @var array <p>资产标签</p>
     */
    public $Tags;

    /**
     * @var string <p>公网地址</p>
     */
    public $Address;

    /**
     * @var string <p>公网地址类型</p>
     */
    public $AddressType;

    /**
     * @var array <p>解析地址</p>
     */
    public $ResolvedAddress;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var integer <p>防护状态</p>
     */
    public $ProtectStatus;

    /**
     * @var integer <p>风险数量</p>
     */
    public $RiskCount;

    /**
     * @var integer <p>告警数量</p>
     */
    public $AlarmCount;

    /**
     * @var string <p>实例创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>首次同步时间</p>
     */
    public $FirstSyncTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>严重风险总数</p>
     */
    public $CriticalRiskCount;

    /**
     * @var integer <p>高风险总数</p>
     */
    public $HighRiskCount;

    /**
     * @var integer <p>中风险总数</p>
     */
    public $MediumRiskCount;

    /**
     * @var integer <p>低风险总数</p>
     */
    public $LowRiskCount;

    /**
     * @var string <p>资产唯一ID</p>
     */
    public $AssetRID;

    /**
     * @var array <p>云安全中心标签</p>
     */
    public $CustomTags;

    /**
     * @var string <p>资产类型图标</p>
     */
    public $AssetTypeIconURL;

    /**
     * @param integer $AppID <p>租户ID</p>
     * @param string $Provider <p>云厂商</p>
     * @param string $ProviderName <p>云厂商名称</p>
     * @param string $CloudAccountID <p>云账号ID</p>
     * @param string $CloudAccountName <p>云账号名称</p>
     * @param string $AssetID <p>资产ID</p>
     * @param string $AssetName <p>资产名称</p>
     * @param string $AssetType <p>资产类型</p>
     * @param string $AssetTypeName <p>资产类型名称</p>
     * @param array $Tags <p>资产标签</p>
     * @param string $Address <p>公网地址</p>
     * @param string $AddressType <p>公网地址类型</p>
     * @param array $ResolvedAddress <p>解析地址</p>
     * @param string $Region <p>地域</p>
     * @param integer $ProtectStatus <p>防护状态</p>
     * @param integer $RiskCount <p>风险数量</p>
     * @param integer $AlarmCount <p>告警数量</p>
     * @param string $CreatedAt <p>实例创建时间</p>
     * @param string $FirstSyncTime <p>首次同步时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param integer $CriticalRiskCount <p>严重风险总数</p>
     * @param integer $HighRiskCount <p>高风险总数</p>
     * @param integer $MediumRiskCount <p>中风险总数</p>
     * @param integer $LowRiskCount <p>低风险总数</p>
     * @param string $AssetRID <p>资产唯一ID</p>
     * @param array $CustomTags <p>云安全中心标签</p>
     * @param string $AssetTypeIconURL <p>资产类型图标</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("CloudAccountID",$param) and $param["CloudAccountID"] !== null) {
            $this->CloudAccountID = $param["CloudAccountID"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("ResolvedAddress",$param) and $param["ResolvedAddress"] !== null) {
            $this->ResolvedAddress = $param["ResolvedAddress"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProtectStatus",$param) and $param["ProtectStatus"] !== null) {
            $this->ProtectStatus = $param["ProtectStatus"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("FirstSyncTime",$param) and $param["FirstSyncTime"] !== null) {
            $this->FirstSyncTime = $param["FirstSyncTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CriticalRiskCount",$param) and $param["CriticalRiskCount"] !== null) {
            $this->CriticalRiskCount = $param["CriticalRiskCount"];
        }

        if (array_key_exists("HighRiskCount",$param) and $param["HighRiskCount"] !== null) {
            $this->HighRiskCount = $param["HighRiskCount"];
        }

        if (array_key_exists("MediumRiskCount",$param) and $param["MediumRiskCount"] !== null) {
            $this->MediumRiskCount = $param["MediumRiskCount"];
        }

        if (array_key_exists("LowRiskCount",$param) and $param["LowRiskCount"] !== null) {
            $this->LowRiskCount = $param["LowRiskCount"];
        }

        if (array_key_exists("AssetRID",$param) and $param["AssetRID"] !== null) {
            $this->AssetRID = $param["AssetRID"];
        }

        if (array_key_exists("CustomTags",$param) and $param["CustomTags"] !== null) {
            $this->CustomTags = [];
            foreach ($param["CustomTags"] as $key => $value){
                $obj = new CustomTag();
                $obj->deserialize($value);
                array_push($this->CustomTags, $obj);
            }
        }

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }
    }
}
