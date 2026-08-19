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
 * 云厂商资产数量
 *
 * @method integer getTencentAssetCount() 获取<p>腾讯云资产总数</p>
 * @method void setTencentAssetCount(integer $TencentAssetCount) 设置<p>腾讯云资产总数</p>
 * @method integer getAliAssetCount() 获取<p>阿里云资产总数</p>
 * @method void setAliAssetCount(integer $AliAssetCount) 设置<p>阿里云资产总数</p>
 * @method integer getAwsAssetCount() 获取<p>亚马逊云资产总数</p>
 * @method void setAwsAssetCount(integer $AwsAssetCount) 设置<p>亚马逊云资产总数</p>
 * @method integer getOtherAssetCount() 获取<p>其他云环境资产总数</p>
 * @method void setOtherAssetCount(integer $OtherAssetCount) 设置<p>其他云环境资产总数</p>
 * @method integer getAzureAssetCount() 获取<p>微软云资产数量</p>
 * @method void setAzureAssetCount(integer $AzureAssetCount) 设置<p>微软云资产数量</p>
 */
class AssetProviderDistributeInfo extends AbstractModel
{
    /**
     * @var integer <p>腾讯云资产总数</p>
     */
    public $TencentAssetCount;

    /**
     * @var integer <p>阿里云资产总数</p>
     */
    public $AliAssetCount;

    /**
     * @var integer <p>亚马逊云资产总数</p>
     */
    public $AwsAssetCount;

    /**
     * @var integer <p>其他云环境资产总数</p>
     */
    public $OtherAssetCount;

    /**
     * @var integer <p>微软云资产数量</p>
     */
    public $AzureAssetCount;

    /**
     * @param integer $TencentAssetCount <p>腾讯云资产总数</p>
     * @param integer $AliAssetCount <p>阿里云资产总数</p>
     * @param integer $AwsAssetCount <p>亚马逊云资产总数</p>
     * @param integer $OtherAssetCount <p>其他云环境资产总数</p>
     * @param integer $AzureAssetCount <p>微软云资产数量</p>
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
        if (array_key_exists("TencentAssetCount",$param) and $param["TencentAssetCount"] !== null) {
            $this->TencentAssetCount = $param["TencentAssetCount"];
        }

        if (array_key_exists("AliAssetCount",$param) and $param["AliAssetCount"] !== null) {
            $this->AliAssetCount = $param["AliAssetCount"];
        }

        if (array_key_exists("AwsAssetCount",$param) and $param["AwsAssetCount"] !== null) {
            $this->AwsAssetCount = $param["AwsAssetCount"];
        }

        if (array_key_exists("OtherAssetCount",$param) and $param["OtherAssetCount"] !== null) {
            $this->OtherAssetCount = $param["OtherAssetCount"];
        }

        if (array_key_exists("AzureAssetCount",$param) and $param["AzureAssetCount"] !== null) {
            $this->AzureAssetCount = $param["AzureAssetCount"];
        }
    }
}
