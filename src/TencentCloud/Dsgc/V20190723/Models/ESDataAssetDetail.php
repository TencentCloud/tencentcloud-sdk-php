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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES的概览页资产详情
 *
 * @method integer getFieldResultId() 获取id
 * @method void setFieldResultId(integer $FieldResultId) 设置id
 * @method string getDataSourceId() 获取数据源id
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
 * @method string getDataSourceName() 获取数据源名称
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
 * @method string getDataSourceType() 获取类型
 * @method void setDataSourceType(string $DataSourceType) 设置类型
 * @method string getResourceRegion() 获取地域信息
 * @method void setResourceRegion(string $ResourceRegion) 设置地域信息
 * @method string getIndexName() 获取索引名称
 * @method void setIndexName(string $IndexName) 设置索引名称
 * @method string getFieldName() 获取字段名称
 * @method void setFieldName(string $FieldName) 设置字段名称
 * @method integer getCategoryId() 获取分类id
 * @method void setCategoryId(integer $CategoryId) 设置分类id
 * @method string getCategoryName() 获取分类名称
 * @method void setCategoryName(string $CategoryName) 设置分类名称
 * @method array getCategoryArr() 获取分类路径数组
 * @method void setCategoryArr(array $CategoryArr) 设置分类路径数组
 * @method integer getLevelId() 获取等级id
 * @method void setLevelId(integer $LevelId) 设置等级id
 * @method string getLevelRiskName() 获取分级名称
 * @method void setLevelRiskName(string $LevelRiskName) 设置分级名称
 * @method integer getLevelRiskScore() 获取分级分数
 * @method void setLevelRiskScore(integer $LevelRiskScore) 设置分级分数
 * @method float getTrustedScore() 获取可信分
 * @method void setTrustedScore(float $TrustedScore) 设置可信分
 * @method integer getRuleId() 获取规则id
 * @method void setRuleId(integer $RuleId) 设置规则id
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getIdentifyType() 获取0系统识别，1人工打标
 * @method void setIdentifyType(integer $IdentifyType) 设置0系统识别，1人工打标
 * @method integer getCheckStatus() 获取0未核查，1已核查
 * @method void setCheckStatus(integer $CheckStatus) 设置0未核查，1已核查
 */
class ESDataAssetDetail extends AbstractModel
{
    /**
     * @var integer id
     */
    public $FieldResultId;

    /**
     * @var string 数据源id
     */
    public $DataSourceId;

    /**
     * @var string 数据源名称
     */
    public $DataSourceName;

    /**
     * @var string 类型
     */
    public $DataSourceType;

    /**
     * @var string 地域信息
     */
    public $ResourceRegion;

    /**
     * @var string 索引名称
     */
    public $IndexName;

    /**
     * @var string 字段名称
     */
    public $FieldName;

    /**
     * @var integer 分类id
     */
    public $CategoryId;

    /**
     * @var string 分类名称
     */
    public $CategoryName;

    /**
     * @var array 分类路径数组
     */
    public $CategoryArr;

    /**
     * @var integer 等级id
     */
    public $LevelId;

    /**
     * @var string 分级名称
     */
    public $LevelRiskName;

    /**
     * @var integer 分级分数
     */
    public $LevelRiskScore;

    /**
     * @var float 可信分
     */
    public $TrustedScore;

    /**
     * @var integer 规则id
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 0系统识别，1人工打标
     */
    public $IdentifyType;

    /**
     * @var integer 0未核查，1已核查
     */
    public $CheckStatus;

    /**
     * @param integer $FieldResultId id
     * @param string $DataSourceId 数据源id
     * @param string $DataSourceName 数据源名称
     * @param string $DataSourceType 类型
     * @param string $ResourceRegion 地域信息
     * @param string $IndexName 索引名称
     * @param string $FieldName 字段名称
     * @param integer $CategoryId 分类id
     * @param string $CategoryName 分类名称
     * @param array $CategoryArr 分类路径数组
     * @param integer $LevelId 等级id
     * @param string $LevelRiskName 分级名称
     * @param integer $LevelRiskScore 分级分数
     * @param float $TrustedScore 可信分
     * @param integer $RuleId 规则id
     * @param string $RuleName 规则名称
     * @param integer $IdentifyType 0系统识别，1人工打标
     * @param integer $CheckStatus 0未核查，1已核查
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
        if (array_key_exists("FieldResultId",$param) and $param["FieldResultId"] !== null) {
            $this->FieldResultId = $param["FieldResultId"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("CategoryArr",$param) and $param["CategoryArr"] !== null) {
            $this->CategoryArr = $param["CategoryArr"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelRiskName",$param) and $param["LevelRiskName"] !== null) {
            $this->LevelRiskName = $param["LevelRiskName"];
        }

        if (array_key_exists("LevelRiskScore",$param) and $param["LevelRiskScore"] !== null) {
            $this->LevelRiskScore = $param["LevelRiskScore"];
        }

        if (array_key_exists("TrustedScore",$param) and $param["TrustedScore"] !== null) {
            $this->TrustedScore = $param["TrustedScore"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }
    }
}
