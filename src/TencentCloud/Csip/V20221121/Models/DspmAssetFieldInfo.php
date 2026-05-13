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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dspm资产字段信息
 *
 * @method string getAssetId() 获取资产实例id
 * @method void setAssetId(string $AssetId) 设置资产实例id
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getSchemaName() 获取schema名
 * @method void setSchemaName(string $SchemaName) 设置schema名
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 * @method string getFieldName() 获取字段名
 * @method void setFieldName(string $FieldName) 设置字段名
 * @method array getRuleIds() 获取数据项id集合
 * @method void setRuleIds(array $RuleIds) 设置数据项id集合
 * @method array getRuleNames() 获取数据项名称集合
 * @method void setRuleNames(array $RuleNames) 设置数据项名称集合
 * @method array getCategoryIds() 获取分类id集合
 * @method void setCategoryIds(array $CategoryIds) 设置分类id集合
 * @method array getCategoryNames() 获取分类名称集合
 * @method void setCategoryNames(array $CategoryNames) 设置分类名称集合
 */
class DspmAssetFieldInfo extends AbstractModel
{
    /**
     * @var string 资产实例id
     */
    public $AssetId;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string schema名
     */
    public $SchemaName;

    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @var string 字段名
     */
    public $FieldName;

    /**
     * @var array 数据项id集合
     */
    public $RuleIds;

    /**
     * @var array 数据项名称集合
     */
    public $RuleNames;

    /**
     * @var array 分类id集合
     */
    public $CategoryIds;

    /**
     * @var array 分类名称集合
     */
    public $CategoryNames;

    /**
     * @param string $AssetId 资产实例id
     * @param string $DbName 数据库名称
     * @param string $SchemaName schema名
     * @param string $TableName 表名
     * @param string $FieldName 字段名
     * @param array $RuleIds 数据项id集合
     * @param array $RuleNames 数据项名称集合
     * @param array $CategoryIds 分类id集合
     * @param array $CategoryNames 分类名称集合
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("RuleNames",$param) and $param["RuleNames"] !== null) {
            $this->RuleNames = $param["RuleNames"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }

        if (array_key_exists("CategoryNames",$param) and $param["CategoryNames"] !== null) {
            $this->CategoryNames = $param["CategoryNames"];
        }
    }
}
