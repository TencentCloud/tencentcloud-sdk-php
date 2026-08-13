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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘函数触发规则。
 *
 * @method string getCondition() 获取<p><a href="https://cloud.tencent.com/document/product/1552/90438#33f65828-c6c6-4b66-a011-25a20b548d5d">匹配条件。</a></p>
 * @method void setCondition(string $Condition) 设置<p><a href="https://cloud.tencent.com/document/product/1552/90438#33f65828-c6c6-4b66-a011-25a20b548d5d">匹配条件。</a></p>
 * @method string getTriggerType() 获取<p>函数选择配置类型：</p><p>枚举值：</p><ul><li>direct： 直接指定执行函数</li><li>weight： 基于权重比选择函数</li><li>region： 基于客户端 IP 的国家/地区选择函数</li></ul>
 * @method void setTriggerType(string $TriggerType) 设置<p>函数选择配置类型：</p><p>枚举值：</p><ul><li>direct： 直接指定执行函数</li><li>weight： 基于权重比选择函数</li><li>region： 基于客户端 IP 的国家/地区选择函数</li></ul>
 * @method string getFunction() 获取<p>指定执行的函数，取值为函数在站点内的唯一标识。当 TriggerType 为 direct 时生效。</p>
 * @method void setFunction(string $Function) 设置<p>指定执行的函数，取值为函数在站点内的唯一标识。当 TriggerType 为 direct 时生效。</p>
 * @method array getRegionMappingSelections() 获取<p>基于客户端 IP 国家/地区的函数选择配置。</p>
 * @method void setRegionMappingSelections(array $RegionMappingSelections) 设置<p>基于客户端 IP 国家/地区的函数选择配置。</p>
 * @method array getWeightedSelections() 获取<p>基于权重的函数选择配置。</p>
 * @method void setWeightedSelections(array $WeightedSelections) 设置<p>基于权重的函数选择配置。</p>
 * @method string getRemark() 获取<p>规则描述。</p>
 * @method void setRemark(string $Remark) 设置<p>规则描述。</p>
 */
class ConfigGroupFunctionTrigger extends AbstractModel
{
    /**
     * @var string <p><a href="https://cloud.tencent.com/document/product/1552/90438#33f65828-c6c6-4b66-a011-25a20b548d5d">匹配条件。</a></p>
     */
    public $Condition;

    /**
     * @var string <p>函数选择配置类型：</p><p>枚举值：</p><ul><li>direct： 直接指定执行函数</li><li>weight： 基于权重比选择函数</li><li>region： 基于客户端 IP 的国家/地区选择函数</li></ul>
     */
    public $TriggerType;

    /**
     * @var string <p>指定执行的函数，取值为函数在站点内的唯一标识。当 TriggerType 为 direct 时生效。</p>
     */
    public $Function;

    /**
     * @var array <p>基于客户端 IP 国家/地区的函数选择配置。</p>
     */
    public $RegionMappingSelections;

    /**
     * @var array <p>基于权重的函数选择配置。</p>
     */
    public $WeightedSelections;

    /**
     * @var string <p>规则描述。</p>
     */
    public $Remark;

    /**
     * @param string $Condition <p><a href="https://cloud.tencent.com/document/product/1552/90438#33f65828-c6c6-4b66-a011-25a20b548d5d">匹配条件。</a></p>
     * @param string $TriggerType <p>函数选择配置类型：</p><p>枚举值：</p><ul><li>direct： 直接指定执行函数</li><li>weight： 基于权重比选择函数</li><li>region： 基于客户端 IP 的国家/地区选择函数</li></ul>
     * @param string $Function <p>指定执行的函数，取值为函数在站点内的唯一标识。当 TriggerType 为 direct 时生效。</p>
     * @param array $RegionMappingSelections <p>基于客户端 IP 国家/地区的函数选择配置。</p>
     * @param array $WeightedSelections <p>基于权重的函数选择配置。</p>
     * @param string $Remark <p>规则描述。</p>
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = $param["Function"];
        }

        if (array_key_exists("RegionMappingSelections",$param) and $param["RegionMappingSelections"] !== null) {
            $this->RegionMappingSelections = [];
            foreach ($param["RegionMappingSelections"] as $key => $value){
                $obj = new ConfigGroupFunctionRegionSelection();
                $obj->deserialize($value);
                array_push($this->RegionMappingSelections, $obj);
            }
        }

        if (array_key_exists("WeightedSelections",$param) and $param["WeightedSelections"] !== null) {
            $this->WeightedSelections = [];
            foreach ($param["WeightedSelections"] as $key => $value){
                $obj = new ConfigGroupFunctionWeightedSelection();
                $obj->deserialize($value);
                array_push($this->WeightedSelections, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
