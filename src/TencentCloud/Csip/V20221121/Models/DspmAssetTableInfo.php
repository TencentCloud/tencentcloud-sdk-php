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
 * dspm资产表信息
 *
 * @method string getAssetId() 获取<p>资产实例id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产实例id</p>
 * @method string getDbName() 获取<p>数据库名称</p>
 * @method void setDbName(string $DbName) 设置<p>数据库名称</p>
 * @method string getSchemaName() 获取<p>schema名称</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>schema名称</p>
 * @method string getTableName() 获取<p>表名</p>
 * @method void setTableName(string $TableName) 设置<p>表名</p>
 * @method integer getFieldCount() 获取<p>字段数</p>
 * @method void setFieldCount(integer $FieldCount) 设置<p>字段数</p>
 * @method integer getSensitiveFieldCount() 获取<p>敏感字段数</p>
 * @method void setSensitiveFieldCount(integer $SensitiveFieldCount) 设置<p>敏感字段数</p>
 * @method array getRuleIds() 获取<p>数据项id集合</p>
 * @method void setRuleIds(array $RuleIds) 设置<p>数据项id集合</p>
 * @method array getRuleNames() 获取<p>数据项名称集合</p>
 * @method void setRuleNames(array $RuleNames) 设置<p>数据项名称集合</p>
 * @method array getCategoryIds() 获取<p>分类id集合</p>
 * @method void setCategoryIds(array $CategoryIds) 设置<p>分类id集合</p>
 * @method array getCategoryNames() 获取<p>分类名称集合</p>
 * @method void setCategoryNames(array $CategoryNames) 设置<p>分类名称集合</p>
 * @method array getCategoryDetails() 获取<p>分类详情</p>
 * @method void setCategoryDetails(array $CategoryDetails) 设置<p>分类详情</p>
 * @method integer getTableId() 获取<p>数据表id</p>
 * @method void setTableId(integer $TableId) 设置<p>数据表id</p>
 * @method string getTableComment() 获取<p>表注释</p>
 * @method void setTableComment(string $TableComment) 设置<p>表注释</p>
 */
class DspmAssetTableInfo extends AbstractModel
{
    /**
     * @var string <p>资产实例id</p>
     */
    public $AssetId;

    /**
     * @var string <p>数据库名称</p>
     */
    public $DbName;

    /**
     * @var string <p>schema名称</p>
     */
    public $SchemaName;

    /**
     * @var string <p>表名</p>
     */
    public $TableName;

    /**
     * @var integer <p>字段数</p>
     */
    public $FieldCount;

    /**
     * @var integer <p>敏感字段数</p>
     */
    public $SensitiveFieldCount;

    /**
     * @var array <p>数据项id集合</p>
     */
    public $RuleIds;

    /**
     * @var array <p>数据项名称集合</p>
     */
    public $RuleNames;

    /**
     * @var array <p>分类id集合</p>
     */
    public $CategoryIds;

    /**
     * @var array <p>分类名称集合</p>
     */
    public $CategoryNames;

    /**
     * @var array <p>分类详情</p>
     */
    public $CategoryDetails;

    /**
     * @var integer <p>数据表id</p>
     */
    public $TableId;

    /**
     * @var string <p>表注释</p>
     */
    public $TableComment;

    /**
     * @param string $AssetId <p>资产实例id</p>
     * @param string $DbName <p>数据库名称</p>
     * @param string $SchemaName <p>schema名称</p>
     * @param string $TableName <p>表名</p>
     * @param integer $FieldCount <p>字段数</p>
     * @param integer $SensitiveFieldCount <p>敏感字段数</p>
     * @param array $RuleIds <p>数据项id集合</p>
     * @param array $RuleNames <p>数据项名称集合</p>
     * @param array $CategoryIds <p>分类id集合</p>
     * @param array $CategoryNames <p>分类名称集合</p>
     * @param array $CategoryDetails <p>分类详情</p>
     * @param integer $TableId <p>数据表id</p>
     * @param string $TableComment <p>表注释</p>
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

        if (array_key_exists("FieldCount",$param) and $param["FieldCount"] !== null) {
            $this->FieldCount = $param["FieldCount"];
        }

        if (array_key_exists("SensitiveFieldCount",$param) and $param["SensitiveFieldCount"] !== null) {
            $this->SensitiveFieldCount = $param["SensitiveFieldCount"];
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

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new DspmIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableComment",$param) and $param["TableComment"] !== null) {
            $this->TableComment = $param["TableComment"];
        }
    }
}
