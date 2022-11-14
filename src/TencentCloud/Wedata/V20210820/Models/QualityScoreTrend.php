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
 * 质量评分趋势
 *
 * @method float getAverageScore() 获取周期平均分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverageScore(float $AverageScore) 设置周期平均分
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDailyScoreList() 获取日评分列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDailyScoreList(array $DailyScoreList) 设置日评分列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityScoreTrend extends AbstractModel
{
    /**
     * @var float 周期平均分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AverageScore;

    /**
     * @var array 日评分列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DailyScoreList;

    /**
     * @param float $AverageScore 周期平均分
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DailyScoreList 日评分列表
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
        if (array_key_exists("AverageScore",$param) and $param["AverageScore"] !== null) {
            $this->AverageScore = $param["AverageScore"];
        }

        if (array_key_exists("DailyScoreList",$param) and $param["DailyScoreList"] !== null) {
            $this->DailyScoreList = [];
            foreach ($param["DailyScoreList"] as $key => $value){
                $obj = new DailyScoreInfo();
                $obj->deserialize($value);
                array_push($this->DailyScoreList, $obj);
            }
        }
    }
}
