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
 * dspm资产数据库信息
 *
 * @method string getAssetId() 获取<p>资产实例id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产实例id</p>
 * @method string getDbName() 获取<p>数据库名称</p>
 * @method void setDbName(string $DbName) 设置<p>数据库名称</p>
 * @method integer getTableCount() 获取<p>总表数</p>
 * @method void setTableCount(integer $TableCount) 设置<p>总表数</p>
 * @method integer getSensitiveTableCount() 获取<p>敏感表数</p>
 * @method void setSensitiveTableCount(integer $SensitiveTableCount) 设置<p>敏感表数</p>
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
 */
class DspmAssetDatabaseInfo extends AbstractModel
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
     * @var integer <p>总表数</p>
     */
    public $TableCount;

    /**
     * @var integer <p>敏感表数</p>
     */
    public $SensitiveTableCount;

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
     * @param string $AssetId <p>资产实例id</p>
     * @param string $DbName <p>数据库名称</p>
     * @param integer $TableCount <p>总表数</p>
     * @param integer $SensitiveTableCount <p>敏感表数</p>
     * @param array $RuleIds <p>数据项id集合</p>
     * @param array $RuleNames <p>数据项名称集合</p>
     * @param array $CategoryIds <p>分类id集合</p>
     * @param array $CategoryNames <p>分类名称集合</p>
     * @param array $CategoryDetails <p>分类详情</p>
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

        if (array_key_exists("TableCount",$param) and $param["TableCount"] !== null) {
            $this->TableCount = $param["TableCount"];
        }

        if (array_key_exists("SensitiveTableCount",$param) and $param["SensitiveTableCount"] !== null) {
            $this->SensitiveTableCount = $param["SensitiveTableCount"];
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
    }
}
