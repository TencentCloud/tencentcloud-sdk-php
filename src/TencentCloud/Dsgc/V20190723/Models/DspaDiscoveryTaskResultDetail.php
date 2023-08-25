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
 * 扫描任务结果详情
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method integer getFieldResultId() 获取扫描结果详情ID
 * @method void setFieldResultId(integer $FieldResultId) 设置扫描结果详情ID
 * @method string getTableName() 获取所属数据表名
 * @method void setTableName(string $TableName) 设置所属数据表名
 * @method string getFieldName() 获取字段名
 * @method void setFieldName(string $FieldName) 设置字段名
 * @method integer getCategoryId() 获取敏感数据分类ID
 * @method void setCategoryId(integer $CategoryId) 设置敏感数据分类ID
 * @method string getCategoryName() 获取敏感数据分类名称
 * @method void setCategoryName(string $CategoryName) 设置敏感数据分类名称
 * @method integer getLevelId() 获取敏感数据分级ID
 * @method void setLevelId(integer $LevelId) 设置敏感数据分级ID
 * @method string getLevelName() 获取敏感数据分级名称
 * @method void setLevelName(string $LevelName) 设置敏感数据分级名称
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method integer getLevelRiskScore() 获取敏感数据分级分数
 * @method void setLevelRiskScore(integer $LevelRiskScore) 设置敏感数据分级分数
 * @method DspaSafeGuard getSafeGuard() 获取保护措施
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSafeGuard(DspaSafeGuard $SafeGuard) 设置保护措施
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategoryFullPath() 获取分类路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryFullPath(string $CategoryFullPath) 设置分类路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaDiscoveryTaskResultDetail extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var integer 扫描结果详情ID
     */
    public $FieldResultId;

    /**
     * @var string 所属数据表名
     */
    public $TableName;

    /**
     * @var string 字段名
     */
    public $FieldName;

    /**
     * @var integer 敏感数据分类ID
     */
    public $CategoryId;

    /**
     * @var string 敏感数据分类名称
     */
    public $CategoryName;

    /**
     * @var integer 敏感数据分级ID
     */
    public $LevelId;

    /**
     * @var string 敏感数据分级名称
     */
    public $LevelName;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var integer 敏感数据分级分数
     */
    public $LevelRiskScore;

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
     * @param integer $TaskId 任务ID
     * @param integer $FieldResultId 扫描结果详情ID
     * @param string $TableName 所属数据表名
     * @param string $FieldName 字段名
     * @param integer $CategoryId 敏感数据分类ID
     * @param string $CategoryName 敏感数据分类名称
     * @param integer $LevelId 敏感数据分级ID
     * @param string $LevelName 敏感数据分级名称
     * @param string $RuleName 规则名称
     * @param integer $RuleId 规则ID
     * @param integer $LevelRiskScore 敏感数据分级分数
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FieldResultId",$param) and $param["FieldResultId"] !== null) {
            $this->FieldResultId = $param["FieldResultId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
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

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("LevelRiskScore",$param) and $param["LevelRiskScore"] !== null) {
            $this->LevelRiskScore = $param["LevelRiskScore"];
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
