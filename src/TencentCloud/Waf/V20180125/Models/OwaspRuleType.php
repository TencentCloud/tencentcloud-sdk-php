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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Owasp规则类型
 *
 * @method integer getTypeId() 获取类型ID
 * @method void setTypeId(integer $TypeId) 设置类型ID
 * @method string getTypeName() 获取类型名称
 * @method void setTypeName(string $TypeName) 设置类型名称
 * @method string getDescription() 获取类型描述

 * @method void setDescription(string $Description) 设置类型描述

 * @method string getClassification() 获取类型分类
 * @method void setClassification(string $Classification) 设置类型分类
 * @method integer getAction() 获取规则类型的防护模式，0：观察、1：拦截
 * @method void setAction(integer $Action) 设置规则类型的防护模式，0：观察、1：拦截
 * @method integer getLevel() 获取规则类型的防护等级，100：宽松、200：正常、300：严格、400：超严格
 * @method void setLevel(integer $Level) 设置规则类型的防护等级，100：宽松、200：正常、300：严格、400：超严格
 * @method integer getStatus() 获取规则类型的开关状态，0：关闭、1：开启
 * @method void setStatus(integer $Status) 设置规则类型的开关状态，0：关闭、1：开启
 * @method integer getTotalRule() 获取规则类型下的所有规则总是
 * @method void setTotalRule(integer $TotalRule) 设置规则类型下的所有规则总是
 * @method integer getActiveRule() 获取规则类型下的启用的规则总数
 * @method void setActiveRule(integer $ActiveRule) 设置规则类型下的启用的规则总数
 */
class OwaspRuleType extends AbstractModel
{
    /**
     * @var integer 类型ID
     */
    public $TypeId;

    /**
     * @var string 类型名称
     */
    public $TypeName;

    /**
     * @var string 类型描述

     */
    public $Description;

    /**
     * @var string 类型分类
     */
    public $Classification;

    /**
     * @var integer 规则类型的防护模式，0：观察、1：拦截
     */
    public $Action;

    /**
     * @var integer 规则类型的防护等级，100：宽松、200：正常、300：严格、400：超严格
     */
    public $Level;

    /**
     * @var integer 规则类型的开关状态，0：关闭、1：开启
     */
    public $Status;

    /**
     * @var integer 规则类型下的所有规则总是
     */
    public $TotalRule;

    /**
     * @var integer 规则类型下的启用的规则总数
     */
    public $ActiveRule;

    /**
     * @param integer $TypeId 类型ID
     * @param string $TypeName 类型名称
     * @param string $Description 类型描述

     * @param string $Classification 类型分类
     * @param integer $Action 规则类型的防护模式，0：观察、1：拦截
     * @param integer $Level 规则类型的防护等级，100：宽松、200：正常、300：严格、400：超严格
     * @param integer $Status 规则类型的开关状态，0：关闭、1：开启
     * @param integer $TotalRule 规则类型下的所有规则总是
     * @param integer $ActiveRule 规则类型下的启用的规则总数
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
        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = $param["Classification"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalRule",$param) and $param["TotalRule"] !== null) {
            $this->TotalRule = $param["TotalRule"];
        }

        if (array_key_exists("ActiveRule",$param) and $param["ActiveRule"] !== null) {
            $this->ActiveRule = $param["ActiveRule"];
        }
    }
}
