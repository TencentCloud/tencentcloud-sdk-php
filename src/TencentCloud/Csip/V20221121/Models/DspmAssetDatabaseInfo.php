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
 * @method string getAssetId() 获取资产实例id
 * @method void setAssetId(string $AssetId) 设置资产实例id
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method integer getTableCount() 获取总表数
 * @method void setTableCount(integer $TableCount) 设置总表数
 * @method integer getSensitiveTableCount() 获取敏感表数
 * @method void setSensitiveTableCount(integer $SensitiveTableCount) 设置敏感表数
 * @method array getRuleIds() 获取数据项id集合
 * @method void setRuleIds(array $RuleIds) 设置数据项id集合
 * @method array getRuleNames() 获取数据项名称集合
 * @method void setRuleNames(array $RuleNames) 设置数据项名称集合
 * @method array getCategoryIds() 获取分类id集合
 * @method void setCategoryIds(array $CategoryIds) 设置分类id集合
 * @method array getCategoryNames() 获取分类名称集合
 * @method void setCategoryNames(array $CategoryNames) 设置分类名称集合
 * @method array getCategoryDetails() 获取分类详情
 * @method void setCategoryDetails(array $CategoryDetails) 设置分类详情
 */
class DspmAssetDatabaseInfo extends AbstractModel
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
     * @var integer 总表数
     */
    public $TableCount;

    /**
     * @var integer 敏感表数
     */
    public $SensitiveTableCount;

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
     * @var array 分类详情
     */
    public $CategoryDetails;

    /**
     * @param string $AssetId 资产实例id
     * @param string $DbName 数据库名称
     * @param integer $TableCount 总表数
     * @param integer $SensitiveTableCount 敏感表数
     * @param array $RuleIds 数据项id集合
     * @param array $RuleNames 数据项名称集合
     * @param array $CategoryIds 分类id集合
     * @param array $CategoryNames 分类名称集合
     * @param array $CategoryDetails 分类详情
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
