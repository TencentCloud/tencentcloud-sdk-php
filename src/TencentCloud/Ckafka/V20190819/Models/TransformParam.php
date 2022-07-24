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
 * 数据处理参数
 *
 * @method string getAnalysisFormat() 获取解析格式，JSON，DELIMITER分隔符，REGULAR正则提取
 * @method void setAnalysisFormat(string $AnalysisFormat) 设置解析格式，JSON，DELIMITER分隔符，REGULAR正则提取
 * @method string getOutputFormat() 获取输出格式
 * @method void setOutputFormat(string $OutputFormat) 设置输出格式
 * @method FailureParam getFailureParam() 获取是否保留解析失败数据
 * @method void setFailureParam(FailureParam $FailureParam) 设置是否保留解析失败数据
 * @method string getContent() 获取原始数据
 * @method void setContent(string $Content) 设置原始数据
 * @method string getSourceType() 获取数据来源，TOPIC从源topic拉取，CUSTOMIZE自定义
 * @method void setSourceType(string $SourceType) 设置数据来源，TOPIC从源topic拉取，CUSTOMIZE自定义
 * @method string getRegex() 获取分隔符、正则表达式
 * @method void setRegex(string $Regex) 设置分隔符、正则表达式
 * @method array getMapParam() 获取Map
 * @method void setMapParam(array $MapParam) 设置Map
 * @method array getFilterParam() 获取过滤器
 * @method void setFilterParam(array $FilterParam) 设置过滤器
 * @method string getResult() 获取测试结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置测试结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnalyseResult() 获取解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalyseResult(array $AnalyseResult) 设置解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseEventBus() 获取底层引擎是否使用eb
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseEventBus(boolean $UseEventBus) 设置底层引擎是否使用eb
注意：此字段可能返回 null，表示取不到有效值。
 */
class TransformParam extends AbstractModel
{
    /**
     * @var string 解析格式，JSON，DELIMITER分隔符，REGULAR正则提取
     */
    public $AnalysisFormat;

    /**
     * @var string 输出格式
     */
    public $OutputFormat;

    /**
     * @var FailureParam 是否保留解析失败数据
     */
    public $FailureParam;

    /**
     * @var string 原始数据
     */
    public $Content;

    /**
     * @var string 数据来源，TOPIC从源topic拉取，CUSTOMIZE自定义
     */
    public $SourceType;

    /**
     * @var string 分隔符、正则表达式
     */
    public $Regex;

    /**
     * @var array Map
     */
    public $MapParam;

    /**
     * @var array 过滤器
     */
    public $FilterParam;

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
     * @var boolean 底层引擎是否使用eb
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseEventBus;

    /**
     * @param string $AnalysisFormat 解析格式，JSON，DELIMITER分隔符，REGULAR正则提取
     * @param string $OutputFormat 输出格式
     * @param FailureParam $FailureParam 是否保留解析失败数据
     * @param string $Content 原始数据
     * @param string $SourceType 数据来源，TOPIC从源topic拉取，CUSTOMIZE自定义
     * @param string $Regex 分隔符、正则表达式
     * @param array $MapParam Map
     * @param array $FilterParam 过滤器
     * @param string $Result 测试结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnalyseResult 解析结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseEventBus 底层引擎是否使用eb
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
        if (array_key_exists("AnalysisFormat",$param) and $param["AnalysisFormat"] !== null) {
            $this->AnalysisFormat = $param["AnalysisFormat"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("FailureParam",$param) and $param["FailureParam"] !== null) {
            $this->FailureParam = new FailureParam();
            $this->FailureParam->deserialize($param["FailureParam"]);
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("MapParam",$param) and $param["MapParam"] !== null) {
            $this->MapParam = [];
            foreach ($param["MapParam"] as $key => $value){
                $obj = new MapParam();
                $obj->deserialize($value);
                array_push($this->MapParam, $obj);
            }
        }

        if (array_key_exists("FilterParam",$param) and $param["FilterParam"] !== null) {
            $this->FilterParam = [];
            foreach ($param["FilterParam"] as $key => $value){
                $obj = new FilterMapParam();
                $obj->deserialize($value);
                array_push($this->FilterParam, $obj);
            }
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("AnalyseResult",$param) and $param["AnalyseResult"] !== null) {
            $this->AnalyseResult = [];
            foreach ($param["AnalyseResult"] as $key => $value){
                $obj = new MapParam();
                $obj->deserialize($value);
                array_push($this->AnalyseResult, $obj);
            }
        }

        if (array_key_exists("UseEventBus",$param) and $param["UseEventBus"] !== null) {
            $this->UseEventBus = $param["UseEventBus"];
        }
    }
}
