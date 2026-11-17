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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 训练数据配置
 *
 * @method string getCatalog() 获取Catalog名称
 * @method void setCatalog(string $Catalog) 设置Catalog名称
 * @method string getSchema() 获取Schema名称
 * @method void setSchema(string $Schema) 设置Schema名称
 * @method string getTable() 获取Table名称
 * @method void setTable(string $Table) 设置Table名称
 * @method Label getTargetLabel() 获取目标标签列
 * @method void setTargetLabel(Label $TargetLabel) 设置目标标签列
 * @method array getDiscardedLabels() 获取忽略的列
 * @method void setDiscardedLabels(array $DiscardedLabels) 设置忽略的列
 * @method Label getPredictionLabel() 获取预测列
 * @method void setPredictionLabel(Label $PredictionLabel) 设置预测列
 * @method string getEvaluationInterval() 获取时间间隔单位
 * @method void setEvaluationInterval(string $EvaluationInterval) 设置时间间隔单位
 * @method integer getForecastHorizon() 获取时序步长
 * @method void setForecastHorizon(integer $ForecastHorizon) 设置时序步长
 * @method string getStorageCatalog() 获取结果集Catalog名称
 * @method void setStorageCatalog(string $StorageCatalog) 设置结果集Catalog名称
 * @method string getStorageSchema() 获取结果集Schema名称
 * @method void setStorageSchema(string $StorageSchema) 设置结果集Schema名称
 * @method string getStorageTable() 获取结果集Table名称
 * @method void setStorageTable(string $StorageTable) 设置结果集Table名称
 * @method array getSelectedLabels() 获取选中的列
 * @method void setSelectedLabels(array $SelectedLabels) 设置选中的列
 * @method array getFeatureLookup() 获取特征查找配置
 * @method void setFeatureLookup(array $FeatureLookup) 设置特征查找配置
 */
class TrainingData extends AbstractModel
{
    /**
     * @var string Catalog名称
     */
    public $Catalog;

    /**
     * @var string Schema名称
     */
    public $Schema;

    /**
     * @var string Table名称
     */
    public $Table;

    /**
     * @var Label 目标标签列
     */
    public $TargetLabel;

    /**
     * @var array 忽略的列
     */
    public $DiscardedLabels;

    /**
     * @var Label 预测列
     */
    public $PredictionLabel;

    /**
     * @var string 时间间隔单位
     */
    public $EvaluationInterval;

    /**
     * @var integer 时序步长
     */
    public $ForecastHorizon;

    /**
     * @var string 结果集Catalog名称
     */
    public $StorageCatalog;

    /**
     * @var string 结果集Schema名称
     */
    public $StorageSchema;

    /**
     * @var string 结果集Table名称
     */
    public $StorageTable;

    /**
     * @var array 选中的列
     */
    public $SelectedLabels;

    /**
     * @var array 特征查找配置
     */
    public $FeatureLookup;

    /**
     * @param string $Catalog Catalog名称
     * @param string $Schema Schema名称
     * @param string $Table Table名称
     * @param Label $TargetLabel 目标标签列
     * @param array $DiscardedLabels 忽略的列
     * @param Label $PredictionLabel 预测列
     * @param string $EvaluationInterval 时间间隔单位
     * @param integer $ForecastHorizon 时序步长
     * @param string $StorageCatalog 结果集Catalog名称
     * @param string $StorageSchema 结果集Schema名称
     * @param string $StorageTable 结果集Table名称
     * @param array $SelectedLabels 选中的列
     * @param array $FeatureLookup 特征查找配置
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
        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("TargetLabel",$param) and $param["TargetLabel"] !== null) {
            $this->TargetLabel = new Label();
            $this->TargetLabel->deserialize($param["TargetLabel"]);
        }

        if (array_key_exists("DiscardedLabels",$param) and $param["DiscardedLabels"] !== null) {
            $this->DiscardedLabels = [];
            foreach ($param["DiscardedLabels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->DiscardedLabels, $obj);
            }
        }

        if (array_key_exists("PredictionLabel",$param) and $param["PredictionLabel"] !== null) {
            $this->PredictionLabel = new Label();
            $this->PredictionLabel->deserialize($param["PredictionLabel"]);
        }

        if (array_key_exists("EvaluationInterval",$param) and $param["EvaluationInterval"] !== null) {
            $this->EvaluationInterval = $param["EvaluationInterval"];
        }

        if (array_key_exists("ForecastHorizon",$param) and $param["ForecastHorizon"] !== null) {
            $this->ForecastHorizon = $param["ForecastHorizon"];
        }

        if (array_key_exists("StorageCatalog",$param) and $param["StorageCatalog"] !== null) {
            $this->StorageCatalog = $param["StorageCatalog"];
        }

        if (array_key_exists("StorageSchema",$param) and $param["StorageSchema"] !== null) {
            $this->StorageSchema = $param["StorageSchema"];
        }

        if (array_key_exists("StorageTable",$param) and $param["StorageTable"] !== null) {
            $this->StorageTable = $param["StorageTable"];
        }

        if (array_key_exists("SelectedLabels",$param) and $param["SelectedLabels"] !== null) {
            $this->SelectedLabels = [];
            foreach ($param["SelectedLabels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->SelectedLabels, $obj);
            }
        }

        if (array_key_exists("FeatureLookup",$param) and $param["FeatureLookup"] !== null) {
            $this->FeatureLookup = [];
            foreach ($param["FeatureLookup"] as $key => $value){
                $obj = new FeatureLookup();
                $obj->deserialize($value);
                array_push($this->FeatureLookup, $obj);
            }
        }
    }
}
