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
 * DescribeSecurityGroupRules请求参数结构体
 *
 * @method string getGroupId() 获取规则组Id
 * @method void setGroupId(string $GroupId) 设置规则组Id
 * @method array getFilters() 获取模糊搜索关键词
 * @method void setFilters(array $Filters) 设置模糊搜索关键词
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取数量
 * @method void setLimit(integer $Limit) 设置数量
 */
class DescribeSecurityGroupRulesRequest extends AbstractModel
{
    /**
     * @var string 规则组Id
     */
    public $GroupId;

    /**
     * @var array 模糊搜索关键词
     */
    public $Filters;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 数量
     */
    public $Limit;

    /**
     * @param string $GroupId 规则组Id
     * @param array $Filters 模糊搜索关键词
     * @param integer $Offset 偏移量
     * @param integer $Limit 数量
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
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
