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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据处理——处理链
 *
 * @method AnalyseParam getAnalyse() 获取解析
 * @method void setAnalyse(AnalyseParam $Analyse) 设置解析
 * @method SecondaryAnalyseParam getSecondaryAnalyse() 获取二次解析
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondaryAnalyse(SecondaryAnalyseParam $SecondaryAnalyse) 设置二次解析
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSMT() 获取数据处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSMT(array $SMT) 设置数据处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取测试结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置测试结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnalyseResult() 获取解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalyseResult(array $AnalyseResult) 设置解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecondaryAnalyseResult() 获取二次解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondaryAnalyseResult(array $SecondaryAnalyseResult) 设置二次解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnalyseJsonResult() 获取JSON格式解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalyseJsonResult(string $AnalyseJsonResult) 设置JSON格式解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecondaryAnalyseJsonResult() 获取JSON格式二次解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondaryAnalyseJsonResult(string $SecondaryAnalyseJsonResult) 设置JSON格式二次解析结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class FieldParam extends AbstractModel
{
    /**
     * @var AnalyseParam 解析
     */
    public $Analyse;

    /**
     * @var SecondaryAnalyseParam 二次解析
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondaryAnalyse;

    /**
     * @var array 数据处理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SMT;

    /**
     * @var string 测试结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var array 解析结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalyseResult;

    /**
     * @var array 二次解析结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondaryAnalyseResult;

    /**
     * @var string JSON格式解析结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalyseJsonResult;

    /**
     * @var string JSON格式二次解析结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondaryAnalyseJsonResult;

    /**
     * @param AnalyseParam $Analyse 解析
     * @param SecondaryAnalyseParam $SecondaryAnalyse 二次解析
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SMT 数据处理
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result 测试结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnalyseResult 解析结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecondaryAnalyseResult 二次解析结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AnalyseJsonResult JSON格式解析结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecondaryAnalyseJsonResult JSON格式二次解析结果
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
        if (array_key_exists("Analyse",$param) and $param["Analyse"] !== null) {
            $this->Analyse = new AnalyseParam();
            $this->Analyse->deserialize($param["Analyse"]);
        }

        if (array_key_exists("SecondaryAnalyse",$param) and $param["SecondaryAnalyse"] !== null) {
            $this->SecondaryAnalyse = new SecondaryAnalyseParam();
            $this->SecondaryAnalyse->deserialize($param["SecondaryAnalyse"]);
        }

        if (array_key_exists("SMT",$param) and $param["SMT"] !== null) {
            $this->SMT = [];
            foreach ($param["SMT"] as $key => $value){
                $obj = new SMTParam();
                $obj->deserialize($value);
                array_push($this->SMT, $obj);
            }
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("AnalyseResult",$param) and $param["AnalyseResult"] !== null) {
            $this->AnalyseResult = [];
            foreach ($param["AnalyseResult"] as $key => $value){
                $obj = new SMTParam();
                $obj->deserialize($value);
                array_push($this->AnalyseResult, $obj);
            }
        }

        if (array_key_exists("SecondaryAnalyseResult",$param) and $param["SecondaryAnalyseResult"] !== null) {
            $this->SecondaryAnalyseResult = [];
            foreach ($param["SecondaryAnalyseResult"] as $key => $value){
                $obj = new SMTParam();
                $obj->deserialize($value);
                array_push($this->SecondaryAnalyseResult, $obj);
            }
        }

        if (array_key_exists("AnalyseJsonResult",$param) and $param["AnalyseJsonResult"] !== null) {
            $this->AnalyseJsonResult = $param["AnalyseJsonResult"];
        }

        if (array_key_exists("SecondaryAnalyseJsonResult",$param) and $param["SecondaryAnalyseJsonResult"] !== null) {
            $this->SecondaryAnalyseJsonResult = $param["SecondaryAnalyseJsonResult"];
        }
    }
}
