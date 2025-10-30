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
 * @method void setLevelRiskScore(integer $LevelRiskScore) 设置分级风险分数，1-10，最小值为1，最大值为10
 * @method string getTrustedScore() 获取可信分
 * @method void setTrustedScore(string $TrustedScore) 设置可信分
 * @method string getResourceRegion() 获取资源所在地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
 * @method string getFieldResultId() 获取字段扫描结果ID
 * @method void setFieldResultId(string $FieldResultId) 设置字段扫描结果ID
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method integer getLevelId() 获取分级ID
 * @method void setLevelId(integer $LevelId) 设置分级ID
 * @method integer getCategoryId() 获取分类ID
 * @method void setCategoryId(integer $CategoryId) 设置分类ID
 * @method string getDataSourceName() 获取数据源名称
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
 * @method DspaSafeGuard getSafeGuard() 获取保护措施
 * @method void setSafeGuard(DspaSafeGuard $SafeGuard) 设置保护措施
 * @method string getCategoryFullPath() 获取分类路径
 * @method void setCategoryFullPath(string $CategoryFullPath) 设置分类路径
 * @method integer getIdentifyType() 获取0.系统识别，1人工打标
 * @method void setIdentifyType(integer $IdentifyType) 设置0.系统识别，1人工打标
 * @method integer getCheckStatus() 获取0未核查 1已核查
 * @method void setCheckStatus(integer $CheckStatus) 设置0未核查 1已核查
 * @method integer getIsSensitiveData() 获取0非敏感，1敏感
 * @method void setIsSensitiveData(integer $IsSensitiveData) 设置0非敏感，1敏感
 * @method string getSchemaName() 获取模式名
 * @method void setSchemaName(string $SchemaName) 设置模式名
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
     */
    public $LevelRiskScore;

    /**
     * @var string 可信分
     */
    public $TrustedScore;

    /**
     * @var string 资源所在地域
     */
    public $ResourceRegion;

    /**
     * @var string 字段扫描结果ID
     */
    public $FieldResultId;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var integer 分级ID
     */
    public $LevelId;

    /**
     * @var integer 分类ID
     */
    public $CategoryId;

    /**
     * @var string 数据源名称
     */
    public $DataSourceName;

    /**
     * @var DspaSafeGuard 保护措施
     */
    public $SafeGuard;

    /**
     * @var string 分类路径
     */
    public $CategoryFullPath;

    /**
     * @var integer 0.系统识别，1人工打标
     */
    public $IdentifyType;

    /**
     * @var integer 0未核查 1已核查
     */
    public $CheckStatus;

    /**
     * @var integer 0非敏感，1敏感
     */
    public $IsSensitiveData;

    /**
     * @var string 模式名
     */
    public $SchemaName;

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
     * @param string $TrustedScore 可信分
     * @param string $ResourceRegion 资源所在地域
     * @param string $FieldResultId 字段扫描结果ID
     * @param integer $RuleId 规则ID
     * @param integer $LevelId 分级ID
     * @param integer $CategoryId 分类ID
     * @param string $DataSourceName 数据源名称
     * @param DspaSafeGuard $SafeGuard 保护措施
     * @param string $CategoryFullPath 分类路径
     * @param integer $IdentifyType 0.系统识别，1人工打标
     * @param integer $CheckStatus 0未核查 1已核查
     * @param integer $IsSensitiveData 0非敏感，1敏感
     * @param string $SchemaName 模式名
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

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("IsSensitiveData",$param) and $param["IsSensitiveData"] !== null) {
            $this->IsSensitiveData = $param["IsSensitiveData"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }
    }
}
