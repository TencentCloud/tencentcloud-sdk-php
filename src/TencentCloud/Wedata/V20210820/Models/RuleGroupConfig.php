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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务配置
 *
 * @method string getAnalysisType() 获取分析类型，可选值：
INFERENCE-推理表
TIME_SERIES-时序表
SNAPSHOT-快照表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisType(string $AnalysisType) 设置分析类型，可选值：
INFERENCE-推理表
TIME_SERIES-时序表
SNAPSHOT-快照表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelMonitorType() 获取模型检测类型，分析类型为推理表（INFERENCE）时必填，可选值：
CLAASSIFICATION-分类
REGRESSION-回归
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelMonitorType(string $ModelMonitorType) 设置模型检测类型，分析类型为推理表（INFERENCE）时必填，可选值：
CLAASSIFICATION-分类
REGRESSION-回归
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPredictColumn() 获取预测列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPredictColumn(string $PredictColumn) 设置预测列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPredictColumnType() 获取预测列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPredictColumnType(string $PredictColumnType) 设置预测列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelColumn() 获取标签列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelColumn(string $LabelColumn) 设置标签列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelColumnType() 获取标签列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelColumnType(string $LabelColumnType) 设置标签列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelIdColumn() 获取模型id列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelIdColumn(string $ModelIdColumn) 设置模型id列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelIdColumnType() 获取模型id列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelIdColumnType(string $ModelIdColumnType) 设置模型id列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimestampColumn() 获取时间戳列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestampColumn(string $TimestampColumn) 设置时间戳列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimestampColumnType() 获取时间戳列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestampColumnType(string $TimestampColumnType) 设置时间戳列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGranularity() 获取指标粒度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGranularity(integer $Granularity) 设置指标粒度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGranularityType() 获取指标粒度单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGranularityType(string $GranularityType) 设置指标粒度单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBaseTable() 获取基准表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaseTable(string $BaseTable) 设置基准表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBaseDb() 获取基准库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaseDb(string $BaseDb) 设置基准库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComparisonColumn() 获取对比列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComparisonColumn(string $ComparisonColumn) 设置对比列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComparisonColumnType() 获取对比列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComparisonColumnType(string $ComparisonColumnType) 设置对比列类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtectionValue() 获取保护组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectionValue(string $ProtectionValue) 设置保护组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPositiveValue() 获取正类值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPositiveValue(string $PositiveValue) 设置正类值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFeatureColumn() 获取数值型特征列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeatureColumn(string $FeatureColumn) 设置数值型特征列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategoricalFeatureColumn() 获取分类型特征列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoricalFeatureColumn(string $CategoricalFeatureColumn) 设置分类型特征列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBaseCatalog() 获取目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaseCatalog(string $BaseCatalog) 设置目录
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroupConfig extends AbstractModel
{
    /**
     * @var string 分析类型，可选值：
INFERENCE-推理表
TIME_SERIES-时序表
SNAPSHOT-快照表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisType;

    /**
     * @var string 模型检测类型，分析类型为推理表（INFERENCE）时必填，可选值：
CLAASSIFICATION-分类
REGRESSION-回归
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelMonitorType;

    /**
     * @var string 预测列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PredictColumn;

    /**
     * @var string 预测列类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PredictColumnType;

    /**
     * @var string 标签列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelColumn;

    /**
     * @var string 标签列类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelColumnType;

    /**
     * @var string 模型id列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelIdColumn;

    /**
     * @var string 模型id列类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelIdColumnType;

    /**
     * @var string 时间戳列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimestampColumn;

    /**
     * @var string 时间戳列类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimestampColumnType;

    /**
     * @var integer 指标粒度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Granularity;

    /**
     * @var string 指标粒度单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GranularityType;

    /**
     * @var string 基准表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaseTable;

    /**
     * @var string 基准库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaseDb;

    /**
     * @var string 对比列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComparisonColumn;

    /**
     * @var string 对比列类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComparisonColumnType;

    /**
     * @var string 保护组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectionValue;

    /**
     * @var string 正类值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PositiveValue;

    /**
     * @var string 数值型特征列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeatureColumn;

    /**
     * @var string 分类型特征列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoricalFeatureColumn;

    /**
     * @var string 目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaseCatalog;

    /**
     * @param string $AnalysisType 分析类型，可选值：
INFERENCE-推理表
TIME_SERIES-时序表
SNAPSHOT-快照表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelMonitorType 模型检测类型，分析类型为推理表（INFERENCE）时必填，可选值：
CLAASSIFICATION-分类
REGRESSION-回归
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PredictColumn 预测列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PredictColumnType 预测列类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelColumn 标签列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelColumnType 标签列类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelIdColumn 模型id列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelIdColumnType 模型id列类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimestampColumn 时间戳列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimestampColumnType 时间戳列类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Granularity 指标粒度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GranularityType 指标粒度单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BaseTable 基准表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BaseDb 基准库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComparisonColumn 对比列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComparisonColumnType 对比列类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProtectionValue 保护组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PositiveValue 正类值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FeatureColumn 数值型特征列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CategoricalFeatureColumn 分类型特征列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BaseCatalog 目录
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
        if (array_key_exists("AnalysisType",$param) and $param["AnalysisType"] !== null) {
            $this->AnalysisType = $param["AnalysisType"];
        }

        if (array_key_exists("ModelMonitorType",$param) and $param["ModelMonitorType"] !== null) {
            $this->ModelMonitorType = $param["ModelMonitorType"];
        }

        if (array_key_exists("PredictColumn",$param) and $param["PredictColumn"] !== null) {
            $this->PredictColumn = $param["PredictColumn"];
        }

        if (array_key_exists("PredictColumnType",$param) and $param["PredictColumnType"] !== null) {
            $this->PredictColumnType = $param["PredictColumnType"];
        }

        if (array_key_exists("LabelColumn",$param) and $param["LabelColumn"] !== null) {
            $this->LabelColumn = $param["LabelColumn"];
        }

        if (array_key_exists("LabelColumnType",$param) and $param["LabelColumnType"] !== null) {
            $this->LabelColumnType = $param["LabelColumnType"];
        }

        if (array_key_exists("ModelIdColumn",$param) and $param["ModelIdColumn"] !== null) {
            $this->ModelIdColumn = $param["ModelIdColumn"];
        }

        if (array_key_exists("ModelIdColumnType",$param) and $param["ModelIdColumnType"] !== null) {
            $this->ModelIdColumnType = $param["ModelIdColumnType"];
        }

        if (array_key_exists("TimestampColumn",$param) and $param["TimestampColumn"] !== null) {
            $this->TimestampColumn = $param["TimestampColumn"];
        }

        if (array_key_exists("TimestampColumnType",$param) and $param["TimestampColumnType"] !== null) {
            $this->TimestampColumnType = $param["TimestampColumnType"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("GranularityType",$param) and $param["GranularityType"] !== null) {
            $this->GranularityType = $param["GranularityType"];
        }

        if (array_key_exists("BaseTable",$param) and $param["BaseTable"] !== null) {
            $this->BaseTable = $param["BaseTable"];
        }

        if (array_key_exists("BaseDb",$param) and $param["BaseDb"] !== null) {
            $this->BaseDb = $param["BaseDb"];
        }

        if (array_key_exists("ComparisonColumn",$param) and $param["ComparisonColumn"] !== null) {
            $this->ComparisonColumn = $param["ComparisonColumn"];
        }

        if (array_key_exists("ComparisonColumnType",$param) and $param["ComparisonColumnType"] !== null) {
            $this->ComparisonColumnType = $param["ComparisonColumnType"];
        }

        if (array_key_exists("ProtectionValue",$param) and $param["ProtectionValue"] !== null) {
            $this->ProtectionValue = $param["ProtectionValue"];
        }

        if (array_key_exists("PositiveValue",$param) and $param["PositiveValue"] !== null) {
            $this->PositiveValue = $param["PositiveValue"];
        }

        if (array_key_exists("FeatureColumn",$param) and $param["FeatureColumn"] !== null) {
            $this->FeatureColumn = $param["FeatureColumn"];
        }

        if (array_key_exists("CategoricalFeatureColumn",$param) and $param["CategoricalFeatureColumn"] !== null) {
            $this->CategoricalFeatureColumn = $param["CategoricalFeatureColumn"];
        }

        if (array_key_exists("BaseCatalog",$param) and $param["BaseCatalog"] !== null) {
            $this->BaseCatalog = $param["BaseCatalog"];
        }
    }
}
