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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据资产报告-涉敏top的资产
 *
 * @method string getLevelName() 获取分级名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelName(string $LevelName) 设置分级名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTopStat() 获取top数据信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopStat(array $TopStat) 设置top数据信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopAsset extends AbstractModel
{
    /**
     * @var string 分级名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelName;

    /**
     * @var array top数据信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopStat;

    /**
     * @param string $LevelName 分级名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TopStat top数据信息
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
        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("TopStat",$param) and $param["TopStat"] !== null) {
            $this->TopStat = [];
            foreach ($param["TopStat"] as $key => $value){
                $obj = new TopAssetStat();
                $obj->deserialize($value);
                array_push($this->TopStat, $obj);
            }
        }
    }
}
