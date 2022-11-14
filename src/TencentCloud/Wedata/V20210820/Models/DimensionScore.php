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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 维度评分
 *
 * @method array getDimensionScoreList() 获取维度评分列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensionScoreList(array $DimensionScoreList) 设置维度评分列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DimensionScore extends AbstractModel
{
    /**
     * @var array 维度评分列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DimensionScoreList;

    /**
     * @param array $DimensionScoreList 维度评分列表
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
        if (array_key_exists("DimensionScoreList",$param) and $param["DimensionScoreList"] !== null) {
            $this->DimensionScoreList = [];
            foreach ($param["DimensionScoreList"] as $key => $value){
                $obj = new DimensionScoreInfo();
                $obj->deserialize($value);
                array_push($this->DimensionScoreList, $obj);
            }
        }
    }
}
