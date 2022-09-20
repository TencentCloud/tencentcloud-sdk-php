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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientRuleList请求参数结构体
 *
 * @method string getZoneId() 获取查询的站点ID.
 * @method void setZoneId(string $ZoneId) 设置查询的站点ID.
 * @method string getDomain() 获取查询的子域名。
 * @method void setDomain(string $Domain) 设置查询的子域名。
 * @method string getRuleType() 获取规则类型，取值有：
<li>acl：自定义规则；</li>
<li>rate：限速规则。</li>不填表示查询所有规则。
 * @method void setRuleType(string $RuleType) 设置规则类型，取值有：
<li>acl：自定义规则；</li>
<li>rate：限速规则。</li>不填表示查询所有规则。
 * @method integer getRuleId() 获取规则ID。
 * @method void setRuleId(integer $RuleId) 设置规则ID。
 * @method string getSourceClientIp() 获取客户端IP。
 * @method void setSourceClientIp(string $SourceClientIp) 设置客户端IP。
 * @method integer getLimit() 获取分页查询的限制数目，默认值为20，最大查询条目为1000。
 * @method void setLimit(integer $Limit) 设置分页查询的限制数目，默认值为20，最大查询条目为1000。
 * @method integer getOffset() 获取分页的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0。
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
 */
class DescribeClientRuleListRequest extends AbstractModel
{
    /**
     * @var string 查询的站点ID.
     */
    public $ZoneId;

    /**
     * @var string 查询的子域名。
     */
    public $Domain;

    /**
     * @var string 规则类型，取值有：
<li>acl：自定义规则；</li>
<li>rate：限速规则。</li>不填表示查询所有规则。
     */
    public $RuleType;

    /**
     * @var integer 规则ID。
     */
    public $RuleId;

    /**
     * @var string 客户端IP。
     */
    public $SourceClientIp;

    /**
     * @var integer 分页查询的限制数目，默认值为20，最大查询条目为1000。
     */
    public $Limit;

    /**
     * @var integer 分页的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
     */
    public $Area;

    /**
     * @param string $ZoneId 查询的站点ID.
     * @param string $Domain 查询的子域名。
     * @param string $RuleType 规则类型，取值有：
<li>acl：自定义规则；</li>
<li>rate：限速规则。</li>不填表示查询所有规则。
     * @param integer $RuleId 规则ID。
     * @param string $SourceClientIp 客户端IP。
     * @param integer $Limit 分页查询的限制数目，默认值为20，最大查询条目为1000。
     * @param integer $Offset 分页的偏移量，默认值为0。
     * @param string $Area 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("SourceClientIp",$param) and $param["SourceClientIp"] !== null) {
            $this->SourceClientIp = $param["SourceClientIp"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
