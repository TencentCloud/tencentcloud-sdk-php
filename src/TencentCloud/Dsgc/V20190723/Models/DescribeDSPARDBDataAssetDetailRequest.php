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
 * DescribeDSPARDBDataAssetDetail请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例Id
 * @method void setDspaId(string $DspaId) 设置DSPA实例Id
 * @method integer getComplianceId() 获取合规组Id
 * @method void setComplianceId(integer $ComplianceId) 设置合规组Id
 * @method array getFilters() 获取过滤数组。支持的Name：
DataSourceID 数据源ID
DbName 数据库名称
CategoryID 敏感数据分类ID
RuleID 规则ID
LevelID 敏感分级ID
ResourceRegion 资源所在地域
SensitiveField 过滤敏感字段，可选值为1，或者无此SensitiveField字段
DataSourceType 数据源类型，不填默认过滤非自建的所有关系型数据源类型，填selfbuilt-db只过滤自建类型
注意：每个name默认支持最多5个values。
 * @method void setFilters(array $Filters) 设置过滤数组。支持的Name：
DataSourceID 数据源ID
DbName 数据库名称
CategoryID 敏感数据分类ID
RuleID 规则ID
LevelID 敏感分级ID
ResourceRegion 资源所在地域
SensitiveField 过滤敏感字段，可选值为1，或者无此SensitiveField字段
DataSourceType 数据源类型，不填默认过滤非自建的所有关系型数据源类型，填selfbuilt-db只过滤自建类型
注意：每个name默认支持最多5个values。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method string getCreditScore() 获取可信分排序，ASC-升序
DESC降序
 * @method void setCreditScore(string $CreditScore) 设置可信分排序，ASC-升序
DESC降序
 */
class DescribeDSPARDBDataAssetDetailRequest extends AbstractModel
{
    /**
     * @var string DSPA实例Id
     */
    public $DspaId;

    /**
     * @var integer 合规组Id
     */
    public $ComplianceId;

    /**
     * @var array 过滤数组。支持的Name：
DataSourceID 数据源ID
DbName 数据库名称
CategoryID 敏感数据分类ID
RuleID 规则ID
LevelID 敏感分级ID
ResourceRegion 资源所在地域
SensitiveField 过滤敏感字段，可选值为1，或者无此SensitiveField字段
DataSourceType 数据源类型，不填默认过滤非自建的所有关系型数据源类型，填selfbuilt-db只过滤自建类型
注意：每个name默认支持最多5个values。
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var string 可信分排序，ASC-升序
DESC降序
     */
    public $CreditScore;

    /**
     * @param string $DspaId DSPA实例Id
     * @param integer $ComplianceId 合规组Id
     * @param array $Filters 过滤数组。支持的Name：
DataSourceID 数据源ID
DbName 数据库名称
CategoryID 敏感数据分类ID
RuleID 规则ID
LevelID 敏感分级ID
ResourceRegion 资源所在地域
SensitiveField 过滤敏感字段，可选值为1，或者无此SensitiveField字段
DataSourceType 数据源类型，不填默认过滤非自建的所有关系型数据源类型，填selfbuilt-db只过滤自建类型
注意：每个name默认支持最多5个values。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param string $CreditScore 可信分排序，ASC-升序
DESC降序
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreditScore",$param) and $param["CreditScore"] !== null) {
            $this->CreditScore = $param["CreditScore"];
        }
    }
}
