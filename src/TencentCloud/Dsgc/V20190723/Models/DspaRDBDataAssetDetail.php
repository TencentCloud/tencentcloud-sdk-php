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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关系型数据库资产详情
 *
 * @method string getDataSourceId() 获取数据源ID
 * @method void setDataSourceId(string $DataSourceId) 设置数据源ID
 * @method string getDbType() 获取数据库类型
 * @method void setDbType(string $DbType) 设置数据库类型
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getTableName() 获取数据库表名称
 * @method void setTableName(string $TableName) 设置数据库表名称
 * @method string getFieldName() 获取数据库表字段名称
 * @method void setFieldName(string $FieldName) 设置数据库表字段名称
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getCategoryName() 获取数据分类
 * @method void setCategoryName(string $CategoryName) 设置数据分类
 * @method string getLevelRiskName() 获取敏感等级
 * @method void setLevelRiskName(string $LevelRiskName) 设置敏感等级
 * @method integer getLevelRiskScore() 获取分级风险分数，1-10，最小值为1，最大值为10
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelRiskScore(integer $LevelRiskScore) 设置分级风险分数，1-10，最小值为1，最大值为10
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrustedScore() 获取可信分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrustedScore(string $TrustedScore) 设置可信分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceRegion() 获取资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFieldResultId() 获取字段扫描结果ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldResultId(string $FieldResultId) 设置字段扫描结果ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevelId() 获取分级ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelId(integer $LevelId) 设置分级ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCategoryId() 获取分类ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryId(integer $CategoryId) 设置分类ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method DspaSafeGuard getSafeGuard() 获取保护措施
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSafeGuard(DspaSafeGuard $SafeGuard) 设置保护措施
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategoryFullPath() 获取分类路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryFullPath(string $CategoryFullPath) 设置分类路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaRDBDataAssetDetail extends AbstractModel
{
    /**
     * @var string 数据源ID
     */
    public $DataSourceId;

    /**
     * @var string 数据库类型
     */
    public $DbType;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 数据库表名称
     */
    public $TableName;

    /**
     * @var string 数据库表字段名称
     */
    public $FieldName;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 数据分类
     */
    public $CategoryName;

    /**
     * @var string 敏感等级
     */
    public $LevelRiskName;

    /**
     * @var integer 分级风险分数，1-10，最小值为1，最大值为10
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelRiskScore;

    /**
     * @var string 可信分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrustedScore;

    /**
     * @var string 资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRegion;

    /**
     * @var string 字段扫描结果ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldResultId;

    /**
     * @var integer 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var integer 分级ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelId;

    /**
     * @var integer 分类ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryId;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceName;

    /**
     * @var DspaSafeGuard 保护措施
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SafeGuard;

    /**
     * @var string 分类路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryFullPath;

    /**
     * @param string $DataSourceId 数据源ID
     * @param string $DbType 数据库类型
     * @param string $DbName 数据库名称
     * @param string $TableName 数据库表名称
     * @param string $FieldName 数据库表字段名称
     * @param string $RuleName 规则名称
     * @param string $CategoryName 数据分类
     * @param string $LevelRiskName 敏感等级
     * @param integer $LevelRiskScore 分级风险分数，1-10，最小值为1，最大值为10
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrustedScore 可信分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceRegion 资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FieldResultId 字段扫描结果ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LevelId 分级ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CategoryId 分类ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param DspaSafeGuard $SafeGuard 保护措施
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CategoryFullPath 分类路径
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
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

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("FieldResultId",$param) and $param["FieldResultId"] !== null) {
            $this->FieldResultId = $param["FieldResultId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("SafeGuard",$param) and $param["SafeGuard"] !== null) {
            $this->SafeGuard = new DspaSafeGuard();
            $this->SafeGuard->deserialize($param["SafeGuard"]);
        }

        if (array_key_exists("CategoryFullPath",$param) and $param["CategoryFullPath"] !== null) {
            $this->CategoryFullPath = $param["CategoryFullPath"];
        }
    }
}
