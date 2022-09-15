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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产测绘结果统计
 *
 * @method string getAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetCount() 获取统计计数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetCount(integer $AssetCount) 设置统计计数
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetTypeStatistic extends AbstractModel
{
    /**
     * @var string 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var integer 统计计数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetCount;

    /**
     * @param string $AssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetCount 统计计数
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }
    }
}
