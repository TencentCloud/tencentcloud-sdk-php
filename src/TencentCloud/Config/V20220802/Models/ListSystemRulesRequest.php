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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSystemRules请求参数结构体
 *
 * @method integer getLimit() 获取每页数量
 * @method void setLimit(integer $Limit) 设置每页数量
 * @method integer getOffset() 获取当前页
 * @method void setOffset(integer $Offset) 设置当前页
 * @method string getKeyword() 获取搜索关键字。支持标识/名称/标签/描述搜索
 * @method void setKeyword(string $Keyword) 设置搜索关键字。支持标识/名称/标签/描述搜索
 * @method integer getRiskLevel() 获取风险等级
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
 */
class ListSystemRulesRequest extends AbstractModel
{
    /**
     * @var integer 每页数量
     */
    public $Limit;

    /**
     * @var integer 当前页
     */
    public $Offset;

    /**
     * @var string 搜索关键字。支持标识/名称/标签/描述搜索
     */
    public $Keyword;

    /**
     * @var integer 风险等级
     */
    public $RiskLevel;

    /**
     * @param integer $Limit 每页数量
     * @param integer $Offset 当前页
     * @param string $Keyword 搜索关键字。支持标识/名称/标签/描述搜索
     * @param integer $RiskLevel 风险等级
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
