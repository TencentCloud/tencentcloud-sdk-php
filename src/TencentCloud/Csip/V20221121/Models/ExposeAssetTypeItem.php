<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 暴露资产分类
 *
 * @method string getProvider() 获取云厂商
 * @method void setProvider(string $Provider) 设置云厂商
 * @method string getProviderName() 获取云厂商名称
 * @method void setProviderName(string $ProviderName) 设置云厂商名称
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getAssetTypeName() 获取资产类型名称
 * @method void setAssetTypeName(string $AssetTypeName) 设置资产类型名称
 */
class ExposeAssetTypeItem extends AbstractModel
{
    /**
     * @var string 云厂商
     */
    public $Provider;

    /**
     * @var string 云厂商名称
     */
    public $ProviderName;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 资产类型名称
     */
    public $AssetTypeName;

    /**
     * @param string $Provider 云厂商
     * @param string $ProviderName 云厂商名称
     * @param string $AssetType 资产类型
     * @param string $AssetTypeName 资产类型名称
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }
    }
}
