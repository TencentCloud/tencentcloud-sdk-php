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
 * dspm支持的产品信息
 *
 * @method string getProduct() 获取<p>产品名（用于查询）</p>
 * @method void setProduct(string $Product) 设置<p>产品名（用于查询）</p>
 * @method array getRegions() 获取<p>地域列表</p>
 * @method void setRegions(array $Regions) 设置<p>地域列表</p>
 * @method string getProductDisplayName() 获取<p>产品名-用于展示</p>
 * @method void setProductDisplayName(string $ProductDisplayName) 设置<p>产品名-用于展示</p>
 * @method string getProductGroup() 获取<p>产品组名</p>
 * @method void setProductGroup(string $ProductGroup) 设置<p>产品组名</p>
 * @method integer getAssetTotal() 获取<p>给定资产类型的资产实例总数</p>
 * @method void setAssetTotal(integer $AssetTotal) 设置<p>给定资产类型的资产实例总数</p>
 */
class DspmSupportedAssetType extends AbstractModel
{
    /**
     * @var string <p>产品名（用于查询）</p>
     */
    public $Product;

    /**
     * @var array <p>地域列表</p>
     */
    public $Regions;

    /**
     * @var string <p>产品名-用于展示</p>
     */
    public $ProductDisplayName;

    /**
     * @var string <p>产品组名</p>
     */
    public $ProductGroup;

    /**
     * @var integer <p>给定资产类型的资产实例总数</p>
     */
    public $AssetTotal;

    /**
     * @param string $Product <p>产品名（用于查询）</p>
     * @param array $Regions <p>地域列表</p>
     * @param string $ProductDisplayName <p>产品名-用于展示</p>
     * @param string $ProductGroup <p>产品组名</p>
     * @param integer $AssetTotal <p>给定资产类型的资产实例总数</p>
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = [];
            foreach ($param["Regions"] as $key => $value){
                $obj = new RegionConfig();
                $obj->deserialize($value);
                array_push($this->Regions, $obj);
            }
        }

        if (array_key_exists("ProductDisplayName",$param) and $param["ProductDisplayName"] !== null) {
            $this->ProductDisplayName = $param["ProductDisplayName"];
        }

        if (array_key_exists("ProductGroup",$param) and $param["ProductGroup"] !== null) {
            $this->ProductGroup = $param["ProductGroup"];
        }

        if (array_key_exists("AssetTotal",$param) and $param["AssetTotal"] !== null) {
            $this->AssetTotal = $param["AssetTotal"];
        }
    }
}
