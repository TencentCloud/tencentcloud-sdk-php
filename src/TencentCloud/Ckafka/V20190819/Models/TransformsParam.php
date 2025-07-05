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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据处理参数
 *
 * @method string getContent() 获取原始数据
 * @method void setContent(string $Content) 设置原始数据
 * @method array getFieldChain() 获取处理链
 * @method void setFieldChain(array $FieldChain) 设置处理链
 * @method array getFilterParam() 获取过滤器
 * @method void setFilterParam(array $FilterParam) 设置过滤器
 * @method FailureParam getFailureParam() 获取失败处理
 * @method void setFailureParam(FailureParam $FailureParam) 设置失败处理
 * @method string getResult() 获取测试结果
 * @method void setResult(string $Result) 设置测试结果
 * @method string getSourceType() 获取数据来源
 * @method void setSourceType(string $SourceType) 设置数据来源
 * @method string getOutputFormat() 获取输出格式，JSON，ROW，默认为JSON
 * @method void setOutputFormat(string $OutputFormat) 设置输出格式，JSON，ROW，默认为JSON
 * @method RowParam getRowParam() 获取输出格式为ROW必填
 * @method void setRowParam(RowParam $RowParam) 设置输出格式为ROW必填
 * @method boolean getKeepMetadata() 获取是否保留数据源Topic元数据信息（源Topic、Partition、Offset），默认为false
 * @method void setKeepMetadata(boolean $KeepMetadata) 设置是否保留数据源Topic元数据信息（源Topic、Partition、Offset），默认为false
 * @method BatchAnalyseParam getBatchAnalyse() 获取数组解析
 * @method void setBatchAnalyse(BatchAnalyseParam $BatchAnalyse) 设置数组解析
 */
class TransformsParam extends AbstractModel
{
    /**
     * @var string 原始数据
     */
    public $Content;

    /**
     * @var array 处理链
     */
    public $FieldChain;

    /**
     * @var array 过滤器
     */
    public $FilterParam;

    /**
     * @var FailureParam 失败处理
     */
    public $FailureParam;

    /**
     * @var string 测试结果
     */
    public $Result;

    /**
     * @var string 数据来源
     */
    public $SourceType;

    /**
     * @var string 输出格式，JSON，ROW，默认为JSON
     */
    public $OutputFormat;

    /**
     * @var RowParam 输出格式为ROW必填
     */
    public $RowParam;

    /**
     * @var boolean 是否保留数据源Topic元数据信息（源Topic、Partition、Offset），默认为false
     */
    public $KeepMetadata;

    /**
     * @var BatchAnalyseParam 数组解析
     */
    public $BatchAnalyse;

    /**
     * @param string $Content 原始数据
     * @param array $FieldChain 处理链
     * @param array $FilterParam 过滤器
     * @param FailureParam $FailureParam 失败处理
     * @param string $Result 测试结果
     * @param string $SourceType 数据来源
     * @param string $OutputFormat 输出格式，JSON，ROW，默认为JSON
     * @param RowParam $RowParam 输出格式为ROW必填
     * @param boolean $KeepMetadata 是否保留数据源Topic元数据信息（源Topic、Partition、Offset），默认为false
     * @param BatchAnalyseParam $BatchAnalyse 数组解析
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FieldChain",$param) and $param["FieldChain"] !== null) {
            $this->FieldChain = [];
            foreach ($param["FieldChain"] as $key => $value){
                $obj = new FieldParam();
                $obj->deserialize($value);
                array_push($this->FieldChain, $obj);
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

        if (array_key_exists("FailureParam",$param) and $param["FailureParam"] !== null) {
            $this->FailureParam = new FailureParam();
            $this->FailureParam->deserialize($param["FailureParam"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("RowParam",$param) and $param["RowParam"] !== null) {
            $this->RowParam = new RowParam();
            $this->RowParam->deserialize($param["RowParam"]);
        }

        if (array_key_exists("KeepMetadata",$param) and $param["KeepMetadata"] !== null) {
            $this->KeepMetadata = $param["KeepMetadata"];
        }

        if (array_key_exists("BatchAnalyse",$param) and $param["BatchAnalyse"] !== null) {
            $this->BatchAnalyse = new BatchAnalyseParam();
            $this->BatchAnalyse->deserialize($param["BatchAnalyse"]);
        }
    }
}
