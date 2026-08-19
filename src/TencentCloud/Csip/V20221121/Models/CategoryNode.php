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
 * 资产树-资产分类节点
 *
 * @method string getCategory() 获取<p>资产分类名称</p>
 * @method void setCategory(string $Category) 设置<p>资产分类名称</p>
 * @method integer getDisplayOrder() 获取<p>展示顺序</p>
 * @method void setDisplayOrder(integer $DisplayOrder) 设置<p>展示顺序</p>
 * @method array getAssetTypes() 获取<p>下级资产类型节点</p>
 * @method void setAssetTypes(array $AssetTypes) 设置<p>下级资产类型节点</p>
 */
class CategoryNode extends AbstractModel
{
    /**
     * @var string <p>资产分类名称</p>
     */
    public $Category;

    /**
     * @var integer <p>展示顺序</p>
     */
    public $DisplayOrder;

    /**
     * @var array <p>下级资产类型节点</p>
     */
    public $AssetTypes;

    /**
     * @param string $Category <p>资产分类名称</p>
     * @param integer $DisplayOrder <p>展示顺序</p>
     * @param array $AssetTypes <p>下级资产类型节点</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("DisplayOrder",$param) and $param["DisplayOrder"] !== null) {
            $this->DisplayOrder = $param["DisplayOrder"];
        }

        if (array_key_exists("AssetTypes",$param) and $param["AssetTypes"] !== null) {
            $this->AssetTypes = [];
            foreach ($param["AssetTypes"] as $key => $value){
                $obj = new AssetTypeNode();
                $obj->deserialize($value);
                array_push($this->AssetTypes, $obj);
            }
        }
    }
}
