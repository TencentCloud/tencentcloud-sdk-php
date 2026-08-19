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
 * 资产标签预览资产
 *
 * @method string getAssetID() 获取<p>资产ID</p>
 * @method void setAssetID(string $AssetID) 设置<p>资产ID</p>
 * @method string getAssetName() 获取<p>资产名称</p>
 * @method void setAssetName(string $AssetName) 设置<p>资产名称</p>
 * @method string getPublicIP() 获取<p>公网IP地址</p>
 * @method void setPublicIP(string $PublicIP) 设置<p>公网IP地址</p>
 * @method string getPrivateIP() 获取<p>内网IP</p>
 * @method void setPrivateIP(string $PrivateIP) 设置<p>内网IP</p>
 * @method string getPublicDomain() 获取<p>公网域名</p>
 * @method void setPublicDomain(string $PublicDomain) 设置<p>公网域名</p>
 * @method string getPrivateDomain() 获取<p>内网域名</p>
 * @method void setPrivateDomain(string $PrivateDomain) 设置<p>内网域名</p>
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method string getAssetTypeName() 获取<p>资产类型名称</p>
 * @method void setAssetTypeName(string $AssetTypeName) 设置<p>资产类型名称</p>
 * @method string getAssetTypeIconURL() 获取<p>资产类型图标</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) 设置<p>资产类型图标</p>
 */
class AssetTagPreviewAssetItem extends AbstractModel
{
    /**
     * @var string <p>资产ID</p>
     */
    public $AssetID;

    /**
     * @var string <p>资产名称</p>
     */
    public $AssetName;

    /**
     * @var string <p>公网IP地址</p>
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
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var string <p>资产类型名称</p>
     */
    public $AssetTypeName;

    /**
     * @var string <p>资产类型图标</p>
     */
    public $AssetTypeIconURL;

    /**
     * @param string $AssetID <p>资产ID</p>
     * @param string $AssetName <p>资产名称</p>
     * @param string $PublicIP <p>公网IP地址</p>
     * @param string $PrivateIP <p>内网IP</p>
     * @param string $PublicDomain <p>公网域名</p>
     * @param string $PrivateDomain <p>内网域名</p>
     * @param string $AssetType <p>资产类型</p>
     * @param string $AssetTypeName <p>资产类型名称</p>
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
        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
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

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }
    }
}
