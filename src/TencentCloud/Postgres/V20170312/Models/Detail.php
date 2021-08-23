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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢SQL 统计分析接口返回详情
 *
 * @method float getTotalTime() 获取输入时间范围内所有慢sql执行的总时间，单位毫秒（ms）
 * @method void setTotalTime(float $TotalTime) 设置输入时间范围内所有慢sql执行的总时间，单位毫秒（ms）
 * @method integer getTotalCallNum() 获取输入时间范围内所有慢sql总条数
 * @method void setTotalCallNum(integer $TotalCallNum) 设置输入时间范围内所有慢sql总条数
 * @method array getAnalysisItems() 获取慢SQL统计分析列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisItems(array $AnalysisItems) 设置慢SQL统计分析列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class Detail extends AbstractModel
{
    /**
     * @var float 输入时间范围内所有慢sql执行的总时间，单位毫秒（ms）
     */
    public $TotalTime;

    /**
     * @var integer 输入时间范围内所有慢sql总条数
     */
    public $TotalCallNum;

    /**
     * @var array 慢SQL统计分析列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisItems;

    /**
     * @param float $TotalTime 输入时间范围内所有慢sql执行的总时间，单位毫秒（ms）
     * @param integer $TotalCallNum 输入时间范围内所有慢sql总条数
     * @param array $AnalysisItems 慢SQL统计分析列表
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
        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("TotalCallNum",$param) and $param["TotalCallNum"] !== null) {
            $this->TotalCallNum = $param["TotalCallNum"];
        }

        if (array_key_exists("AnalysisItems",$param) and $param["AnalysisItems"] !== null) {
            $this->AnalysisItems = [];
            foreach ($param["AnalysisItems"] as $key => $value){
                $obj = new AnalysisItems();
                $obj->deserialize($value);
                array_push($this->AnalysisItems, $obj);
            }
        }
    }
}
