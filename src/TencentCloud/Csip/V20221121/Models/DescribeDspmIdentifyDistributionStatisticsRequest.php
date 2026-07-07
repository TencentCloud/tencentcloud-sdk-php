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
 * DescribeDspmIdentifyDistributionStatistics请求参数结构体
 *
 * @method string getStatType() 获取<p>统计类型</p><p>枚举值：</p><ul><li>FieldTop5Asset： 识别字段Top5</li><li>FieldCategoryDistribution： 识别字段分类分布</li><li>FieldLevelDistribution： 识别字段级别分布</li><li>AssetDistribution： 识别资产分布</li></ul>
 * @method void setStatType(string $StatType) 设置<p>统计类型</p><p>枚举值：</p><ul><li>FieldTop5Asset： 识别字段Top5</li><li>FieldCategoryDistribution： 识别字段分类分布</li><li>FieldLevelDistribution： 识别字段级别分布</li><li>AssetDistribution： 识别资产分布</li></ul>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getAssetType() 获取<p>资产类型</p><p>枚举值：</p><ul><li>cdb： 云数据库MySQL</li><li>mariadb： 云数据库MariaDB</li></ul>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p><p>枚举值：</p><ul><li>cdb： 云数据库MySQL</li><li>mariadb： 云数据库MariaDB</li></ul>
 * @method integer getComplianceId() 获取<p>识别模板id</p>
 * @method void setComplianceId(integer $ComplianceId) 设置<p>识别模板id</p>
 */
class DescribeDspmIdentifyDistributionStatisticsRequest extends AbstractModel
{
    /**
     * @var string <p>统计类型</p><p>枚举值：</p><ul><li>FieldTop5Asset： 识别字段Top5</li><li>FieldCategoryDistribution： 识别字段分类分布</li><li>FieldLevelDistribution： 识别字段级别分布</li><li>AssetDistribution： 识别资产分布</li></ul>
     */
    public $StatType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>资产类型</p><p>枚举值：</p><ul><li>cdb： 云数据库MySQL</li><li>mariadb： 云数据库MariaDB</li></ul>
     */
    public $AssetType;

    /**
     * @var integer <p>识别模板id</p>
     */
    public $ComplianceId;

    /**
     * @param string $StatType <p>统计类型</p><p>枚举值：</p><ul><li>FieldTop5Asset： 识别字段Top5</li><li>FieldCategoryDistribution： 识别字段分类分布</li><li>FieldLevelDistribution： 识别字段级别分布</li><li>AssetDistribution： 识别资产分布</li></ul>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $AssetType <p>资产类型</p><p>枚举值：</p><ul><li>cdb： 云数据库MySQL</li><li>mariadb： 云数据库MariaDB</li></ul>
     * @param integer $ComplianceId <p>识别模板id</p>
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
        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }
    }
}
