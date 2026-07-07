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
 * dspm资产数据识别统计信息
 *
 * @method string getAssetId() 获取<p>资产实例id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产实例id</p>
 * @method string getAssetName() 获取<p>资产名称</p>
 * @method void setAssetName(string $AssetName) 设置<p>资产名称</p>
 * @method string getAssetType() 获取<p>资产类型</p><p>枚举值：</p><ul><li>cdb： MySQL</li><li>mariadb： MariaDB</li><li>mongodb： MongoDB</li></ul>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p><p>枚举值：</p><ul><li>cdb： MySQL</li><li>mariadb： MariaDB</li><li>mongodb： MongoDB</li></ul>
 * @method integer getDetectedDbCount() 获取<p>已检出数据库数量</p>
 * @method void setDetectedDbCount(integer $DetectedDbCount) 设置<p>已检出数据库数量</p>
 * @method integer getDetectedTableCount() 获取<p>已检出表数量</p>
 * @method void setDetectedTableCount(integer $DetectedTableCount) 设置<p>已检出表数量</p>
 * @method array getRuleIds() 获取<p>数据项id集合</p>
 * @method void setRuleIds(array $RuleIds) 设置<p>数据项id集合</p>
 * @method array getRuleNames() 获取<p>数据项名称集合</p>
 * @method void setRuleNames(array $RuleNames) 设置<p>数据项名称集合</p>
 * @method array getCategoryIds() 获取<p>分类id集合</p>
 * @method void setCategoryIds(array $CategoryIds) 设置<p>分类id集合</p>
 * @method array getCategoryNames() 获取<p>分类名称集合</p>
 * @method void setCategoryNames(array $CategoryNames) 设置<p>分类名称集合</p>
 * @method integer getLevelId() 获取<p>最高级别ID</p>
 * @method void setLevelId(integer $LevelId) 设置<p>最高级别ID</p>
 * @method string getLevelName() 获取<p>最高级别名称</p>
 * @method void setLevelName(string $LevelName) 设置<p>最高级别名称</p>
 * @method integer getLevelScore() 获取<p>级别敏感程度</p>
 * @method void setLevelScore(integer $LevelScore) 设置<p>级别敏感程度</p>
 * @method string getDetectedTime() 获取<p>检出时间</p>
 * @method void setDetectedTime(string $DetectedTime) 设置<p>检出时间</p>
 * @method array getCategoryDetails() 获取<p>分类详情</p>
 * @method void setCategoryDetails(array $CategoryDetails) 设置<p>分类详情</p>
 * @method integer getAppId() 获取<p>APPID</p>
 * @method void setAppId(integer $AppId) 设置<p>APPID</p>
 * @method string getNickName() 获取<p>账号名称</p>
 * @method void setNickName(string $NickName) 设置<p>账号名称</p>
 * @method string getUin() 获取<p>账号ID</p>
 * @method void setUin(string $Uin) 设置<p>账号ID</p>
 */
class DspmAssetIdentifyInfo extends AbstractModel
{
    /**
     * @var string <p>资产实例id</p>
     */
    public $AssetId;

    /**
     * @var string <p>资产名称</p>
     */
    public $AssetName;

    /**
     * @var string <p>资产类型</p><p>枚举值：</p><ul><li>cdb： MySQL</li><li>mariadb： MariaDB</li><li>mongodb： MongoDB</li></ul>
     */
    public $AssetType;

    /**
     * @var integer <p>已检出数据库数量</p>
     */
    public $DetectedDbCount;

    /**
     * @var integer <p>已检出表数量</p>
     */
    public $DetectedTableCount;

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
     * @var integer <p>最高级别ID</p>
     */
    public $LevelId;

    /**
     * @var string <p>最高级别名称</p>
     */
    public $LevelName;

    /**
     * @var integer <p>级别敏感程度</p>
     */
    public $LevelScore;

    /**
     * @var string <p>检出时间</p>
     */
    public $DetectedTime;

    /**
     * @var array <p>分类详情</p>
     */
    public $CategoryDetails;

    /**
     * @var integer <p>APPID</p>
     */
    public $AppId;

    /**
     * @var string <p>账号名称</p>
     */
    public $NickName;

    /**
     * @var string <p>账号ID</p>
     */
    public $Uin;

    /**
     * @param string $AssetId <p>资产实例id</p>
     * @param string $AssetName <p>资产名称</p>
     * @param string $AssetType <p>资产类型</p><p>枚举值：</p><ul><li>cdb： MySQL</li><li>mariadb： MariaDB</li><li>mongodb： MongoDB</li></ul>
     * @param integer $DetectedDbCount <p>已检出数据库数量</p>
     * @param integer $DetectedTableCount <p>已检出表数量</p>
     * @param array $RuleIds <p>数据项id集合</p>
     * @param array $RuleNames <p>数据项名称集合</p>
     * @param array $CategoryIds <p>分类id集合</p>
     * @param array $CategoryNames <p>分类名称集合</p>
     * @param integer $LevelId <p>最高级别ID</p>
     * @param string $LevelName <p>最高级别名称</p>
     * @param integer $LevelScore <p>级别敏感程度</p>
     * @param string $DetectedTime <p>检出时间</p>
     * @param array $CategoryDetails <p>分类详情</p>
     * @param integer $AppId <p>APPID</p>
     * @param string $NickName <p>账号名称</p>
     * @param string $Uin <p>账号ID</p>
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

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("DetectedDbCount",$param) and $param["DetectedDbCount"] !== null) {
            $this->DetectedDbCount = $param["DetectedDbCount"];
        }

        if (array_key_exists("DetectedTableCount",$param) and $param["DetectedTableCount"] !== null) {
            $this->DetectedTableCount = $param["DetectedTableCount"];
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

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("LevelScore",$param) and $param["LevelScore"] !== null) {
            $this->LevelScore = $param["LevelScore"];
        }

        if (array_key_exists("DetectedTime",$param) and $param["DetectedTime"] !== null) {
            $this->DetectedTime = $param["DetectedTime"];
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new DspmIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
