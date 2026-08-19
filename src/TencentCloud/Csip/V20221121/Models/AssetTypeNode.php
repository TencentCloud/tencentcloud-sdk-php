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
 * 资产树-资产类型节点
 *
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method string getAssetTypeName() 获取<p>资产类型名称</p>
 * @method void setAssetTypeName(string $AssetTypeName) 设置<p>资产类型名称</p>
 * @method integer getAssetCount() 获取<p>资产类型数量</p>
 * @method void setAssetCount(integer $AssetCount) 设置<p>资产类型数量</p>
 * @method integer getAssetTypeID() 获取<p>资产类型ID</p>
 * @method void setAssetTypeID(integer $AssetTypeID) 设置<p>资产类型ID</p>
 */
class AssetTypeNode extends AbstractModel
{
    /**
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var string <p>资产类型名称</p>
     */
    public $AssetTypeName;

    /**
     * @var integer <p>资产类型数量</p>
     */
    public $AssetCount;

    /**
     * @var integer <p>资产类型ID</p>
     */
    public $AssetTypeID;

    /**
     * @param string $AssetType <p>资产类型</p>
     * @param string $AssetTypeName <p>资产类型名称</p>
     * @param integer $AssetCount <p>资产类型数量</p>
     * @param integer $AssetTypeID <p>资产类型ID</p>
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("AssetTypeID",$param) and $param["AssetTypeID"] !== null) {
            $this->AssetTypeID = $param["AssetTypeID"];
        }
    }
}
