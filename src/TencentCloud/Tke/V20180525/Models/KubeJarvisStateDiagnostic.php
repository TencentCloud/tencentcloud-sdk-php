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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群巡检诊断结果
 *
 * @method string getStartTime() 获取诊断开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置诊断开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取诊断结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置诊断结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCatalogues() 获取诊断目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogues(array $Catalogues) 设置诊断目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取诊断类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置诊断类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取诊断名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置诊断名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取诊断描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置诊断描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResults() 获取诊断结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResults(array $Results) 设置诊断结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStatistics() 获取诊断结果统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatistics(array $Statistics) 设置诊断结果统计
注意：此字段可能返回 null，表示取不到有效值。
 */
class KubeJarvisStateDiagnostic extends AbstractModel
{
    /**
     * @var string 诊断开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 诊断结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var array 诊断目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalogues;

    /**
     * @var string 诊断类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 诊断名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 诊断描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var array 诊断结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Results;

    /**
     * @var array 诊断结果统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Statistics;

    /**
     * @param string $StartTime 诊断开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 诊断结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Catalogues 诊断目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 诊断类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 诊断名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 诊断描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Results 诊断结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Statistics 诊断结果统计
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Catalogues",$param) and $param["Catalogues"] !== null) {
            $this->Catalogues = [];
            foreach ($param["Catalogues"] as $key => $value){
                $obj = new KubeJarvisStateCatalogue();
                $obj->deserialize($value);
                array_push($this->Catalogues, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new KubeJarvisStateResultsItem();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = [];
            foreach ($param["Statistics"] as $key => $value){
                $obj = new KubeJarvisStateStatistic();
                $obj->deserialize($value);
                array_push($this->Statistics, $obj);
            }
        }
    }
}
