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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrivateNatGatewayDestinationIpPortTranslationNatRules请求参数结构体
 *
 * @method string getNatGatewayId() 获取私网网关唯一`ID`，形如"intranat-xxxxxxxx)
 * @method void setNatGatewayId(string $NatGatewayId) 设置私网网关唯一`ID`，形如"intranat-xxxxxxxx)
 * @method array getFilters() 获取过滤条件，Name可选值"OriginalIp",  "TranslationIp", "OriginalPort","TranslationPort",  "Protocol", "Description"
 * @method void setFilters(array $Filters) 设置过滤条件，Name可选值"OriginalIp",  "TranslationIp", "OriginalPort","TranslationPort",  "Protocol", "Description"
 * @method integer getOffset() 获取偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0。
 * @method integer getLimit() 获取返回数目，默认值为20。
 * @method void setLimit(integer $Limit) 设置返回数目，默认值为20。
 */
class DescribePrivateNatGatewayDestinationIpPortTranslationNatRulesRequest extends AbstractModel
{
    /**
     * @var string 私网网关唯一`ID`，形如"intranat-xxxxxxxx)
     */
    public $NatGatewayId;

    /**
     * @var array 过滤条件，Name可选值"OriginalIp",  "TranslationIp", "OriginalPort","TranslationPort",  "Protocol", "Description"
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 返回数目，默认值为20。
     */
    public $Limit;

    /**
     * @param string $NatGatewayId 私网网关唯一`ID`，形如"intranat-xxxxxxxx)
     * @param array $Filters 过滤条件，Name可选值"OriginalIp",  "TranslationIp", "OriginalPort","TranslationPort",  "Protocol", "Description"
     * @param integer $Offset 偏移量，默认值为0。
     * @param integer $Limit 返回数目，默认值为20。
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
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
    }
}
