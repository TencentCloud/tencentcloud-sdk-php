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
 * dspm数据识别结果分类详情
 *
 * @method integer getCategoryId() 获取分类id
 * @method void setCategoryId(integer $CategoryId) 设置分类id
 * @method string getCategoryName() 获取分类名称
 * @method void setCategoryName(string $CategoryName) 设置分类名称
 * @method array getRuleSet() 获取数据项集合
 * @method void setRuleSet(array $RuleSet) 设置数据项集合
 */
class DspmIdentifyCategoryDetail extends AbstractModel
{
    /**
     * @var integer 分类id
     */
    public $CategoryId;

    /**
     * @var string 分类名称
     */
    public $CategoryName;

    /**
     * @var array 数据项集合
     */
    public $RuleSet;

    /**
     * @param integer $CategoryId 分类id
     * @param string $CategoryName 分类名称
     * @param array $RuleSet 数据项集合
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

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("RuleSet",$param) and $param["RuleSet"] !== null) {
            $this->RuleSet = [];
            foreach ($param["RuleSet"] as $key => $value){
                $obj = new DspmIdentifyRuleDetail();
                $obj->deserialize($value);
                array_push($this->RuleSet, $obj);
            }
        }
    }
}
