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
 * 资产详情信息
 *
 * @method integer getAppID() 获取<p>租户ID</p>
 * @method void setAppID(integer $AppID) 设置<p>租户ID</p>
 * @method string getCloudAccountName() 获取<p>云账号名称</p>
 * @method void setCloudAccountName(string $CloudAccountName) 设置<p>云账号名称</p>
 * @method string getAssetID() 获取<p>资产ID</p>
 * @method void setAssetID(string $AssetID) 设置<p>资产ID</p>
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method array getTags() 获取<p>云API返回标签</p>
 * @method void setTags(array $Tags) 设置<p>云API返回标签</p>
 * @method array getSecurityGroupIDs() 获取<p>安全组ID集合</p>
 * @method void setSecurityGroupIDs(array $SecurityGroupIDs) 设置<p>安全组ID集合</p>
 * @method string getPublicIP() 获取<p>公网IP</p>
 * @method void setPublicIP(string $PublicIP) 设置<p>公网IP</p>
 * @method string getPrivateIP() 获取<p>内网IP</p>
 * @method void setPrivateIP(string $PrivateIP) 设置<p>内网IP</p>
 * @method string getPublicDomain() 获取<p>公网域名</p>
 * @method void setPublicDomain(string $PublicDomain) 设置<p>公网域名</p>
 * @method string getPrivateDomain() 获取<p>内网域名</p>
 * @method void setPrivateDomain(string $PrivateDomain) 设置<p>内网域名</p>
 * @method integer getRiskCount() 获取<p>风险总数</p>
 * @method void setRiskCount(integer $RiskCount) 设置<p>风险总数</p>
 * @method integer getAlarmCount() 获取<p>告警总数</p>
 * @method void setAlarmCount(integer $AlarmCount) 设置<p>告警总数</p>
 * @method string getAssetName() 获取<p>资产名称</p>
 * @method void setAssetName(string $AssetName) 设置<p>资产名称</p>
 * @method array getCustomTags() 获取<p>云安全中心标签</p>
 * @method void setCustomTags(array $CustomTags) 设置<p>云安全中心标签</p>
 * @method string getProvider() 获取<p>云厂商</p>
 * @method void setProvider(string $Provider) 设置<p>云厂商</p>
 * @method string getAssetTypeName() 获取<p>资产类型名称</p>
 * @method void setAssetTypeName(string $AssetTypeName) 设置<p>资产类型名称</p>
 * @method string getAssetTypeIconURL() 获取<p>资产类型图标</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) 设置<p>资产类型图标</p>
 * @method string getAssetRID() 获取<p>资产唯一标志</p>
 * @method void setAssetRID(string $AssetRID) 设置<p>资产唯一标志</p>
 */
class AssetDetailItem extends AbstractModel
{
    /**
     * @var integer <p>租户ID</p>
     */
    public $AppID;

    /**
     * @var string <p>云账号名称</p>
     */
    public $CloudAccountName;

    /**
     * @var string <p>资产ID</p>
     */
    public $AssetID;

    /**
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var array <p>云API返回标签</p>
     */
    public $Tags;

    /**
     * @var array <p>安全组ID集合</p>
     */
    public $SecurityGroupIDs;

    /**
     * @var string <p>公网IP</p>
     */
    public $PublicIP;

    /**
     * @var string <p>内网IP</p>
     */
    public $PrivateIP;

    /**
     * @var string <p>公网域名</p>
     */
    public $PublicDomain;

    /**
     * @var string <p>内网域名</p>
     */
    public $PrivateDomain;

    /**
     * @var integer <p>风险总数</p>
     */
    public $RiskCount;

    /**
     * @var integer <p>告警总数</p>
     */
    public $AlarmCount;

    /**
     * @var string <p>资产名称</p>
     */
    public $AssetName;

    /**
     * @var array <p>云安全中心标签</p>
     */
    public $CustomTags;

    /**
     * @var string <p>云厂商</p>
     */
    public $Provider;

    /**
     * @var string <p>资产类型名称</p>
     */
    public $AssetTypeName;

    /**
     * @var string <p>资产类型图标</p>
     */
    public $AssetTypeIconURL;

    /**
     * @var string <p>资产唯一标志</p>
     */
    public $AssetRID;

    /**
     * @param integer $AppID <p>租户ID</p>
     * @param string $CloudAccountName <p>云账号名称</p>
     * @param string $AssetID <p>资产ID</p>
     * @param string $AssetType <p>资产类型</p>
     * @param array $Tags <p>云API返回标签</p>
     * @param array $SecurityGroupIDs <p>安全组ID集合</p>
     * @param string $PublicIP <p>公网IP</p>
     * @param string $PrivateIP <p>内网IP</p>
     * @param string $PublicDomain <p>公网域名</p>
     * @param string $PrivateDomain <p>内网域名</p>
     * @param integer $RiskCount <p>风险总数</p>
     * @param integer $AlarmCount <p>告警总数</p>
     * @param string $AssetName <p>资产名称</p>
     * @param array $CustomTags <p>云安全中心标签</p>
     * @param string $Provider <p>云厂商</p>
     * @param string $AssetTypeName <p>资产类型名称</p>
     * @param string $AssetTypeIconURL <p>资产类型图标</p>
     * @param string $AssetRID <p>资产唯一标志</p>
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

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SecurityGroupIDs",$param) and $param["SecurityGroupIDs"] !== null) {
            $this->SecurityGroupIDs = $param["SecurityGroupIDs"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("PublicDomain",$param) and $param["PublicDomain"] !== null) {
            $this->PublicDomain = $param["PublicDomain"];
        }

        if (array_key_exists("PrivateDomain",$param) and $param["PrivateDomain"] !== null) {
            $this->PrivateDomain = $param["PrivateDomain"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("CustomTags",$param) and $param["CustomTags"] !== null) {
            $this->CustomTags = [];
            foreach ($param["CustomTags"] as $key => $value){
                $obj = new CustomTag();
                $obj->deserialize($value);
                array_push($this->CustomTags, $obj);
            }
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }

        if (array_key_exists("AssetRID",$param) and $param["AssetRID"] !== null) {
            $this->AssetRID = $param["AssetRID"];
        }
    }
}
