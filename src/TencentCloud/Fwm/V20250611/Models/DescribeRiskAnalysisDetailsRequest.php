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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskAnalysisDetails请求参数结构体
 *
 * @method string getId() 获取风险ID
 * @method void setId(string $Id) 设置风险ID
 * @method string getSearchType() 获取查询类型，analyze实时数据分析，task定时分析结果
 * @method void setSearchType(string $SearchType) 设置查询类型，analyze实时数据分析，task定时分析结果
 * @method string getMemberId() 获取成员Id
 * @method void setMemberId(string $MemberId) 设置成员Id
 */
class DescribeRiskAnalysisDetailsRequest extends AbstractModel
{
    /**
     * @var string 风险ID
     */
    public $Id;

    /**
     * @var string 查询类型，analyze实时数据分析，task定时分析结果
     */
    public $SearchType;

    /**
     * @var string 成员Id
     */
    public $MemberId;

    /**
     * @param string $Id 风险ID
     * @param string $SearchType 查询类型，analyze实时数据分析，task定时分析结果
     * @param string $MemberId 成员Id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SearchType",$param) and $param["SearchType"] !== null) {
            $this->SearchType = $param["SearchType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
