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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分类规则统计信息
 *
 * @method integer getCategoryId() 获取分类id
 * @method void setCategoryId(integer $CategoryId) 设置分类id
 * @method integer getRuleCount() 获取规则数量
 * @method void setRuleCount(integer $RuleCount) 设置规则数量
 * @method string getCategoryName() 获取分类名称
 * @method void setCategoryName(string $CategoryName) 设置分类名称
 */
class CategoryRuleStatistic extends AbstractModel
{
    /**
     * @var integer 分类id
     */
    public $CategoryId;

    /**
     * @var integer 规则数量
     */
    public $RuleCount;

    /**
     * @var string 分类名称
     */
    public $CategoryName;

    /**
     * @param integer $CategoryId 分类id
     * @param integer $RuleCount 规则数量
     * @param string $CategoryName 分类名称
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }
    }
}
