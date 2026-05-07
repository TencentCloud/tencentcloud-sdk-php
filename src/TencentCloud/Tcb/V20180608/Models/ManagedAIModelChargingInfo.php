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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管 AI 模型计费信息
 *
 * @method string getType() 获取<p>计费类型</p><p>枚举值：</p><ul><li>Uniform： 固定计费</li><li>Tiered： 分段计费</li></ul>
 * @method void setType(string $Type) 设置<p>计费类型</p><p>枚举值：</p><ul><li>Uniform： 固定计费</li><li>Tiered： 分段计费</li></ul>
 * @method string getName() 获取<p>分组名称</p>
 * @method void setName(string $Name) 设置<p>分组名称</p>
 * @method string getInputPrice() 获取<p>输入 Token 价格</p>
 * @method void setInputPrice(string $InputPrice) 设置<p>输入 Token 价格</p>
 * @method string getOutputPrice() 获取<p>输出 Token 价格</p>
 * @method void setOutputPrice(string $OutputPrice) 设置<p>输出 Token 价格</p>
 * @method string getCachePrice() 获取<p>命中缓存价格</p>
 * @method void setCachePrice(string $CachePrice) 设置<p>命中缓存价格</p>
 * @method string getInputOutputUnit() 获取<p>计费单位</p>
 * @method void setInputOutputUnit(string $InputOutputUnit) 设置<p>计费单位</p>
 */
class ManagedAIModelChargingInfo extends AbstractModel
{
    /**
     * @var string <p>计费类型</p><p>枚举值：</p><ul><li>Uniform： 固定计费</li><li>Tiered： 分段计费</li></ul>
     */
    public $Type;

    /**
     * @var string <p>分组名称</p>
     */
    public $Name;

    /**
     * @var string <p>输入 Token 价格</p>
     */
    public $InputPrice;

    /**
     * @var string <p>输出 Token 价格</p>
     */
    public $OutputPrice;

    /**
     * @var string <p>命中缓存价格</p>
     */
    public $CachePrice;

    /**
     * @var string <p>计费单位</p>
     */
    public $InputOutputUnit;

    /**
     * @param string $Type <p>计费类型</p><p>枚举值：</p><ul><li>Uniform： 固定计费</li><li>Tiered： 分段计费</li></ul>
     * @param string $Name <p>分组名称</p>
     * @param string $InputPrice <p>输入 Token 价格</p>
     * @param string $OutputPrice <p>输出 Token 价格</p>
     * @param string $CachePrice <p>命中缓存价格</p>
     * @param string $InputOutputUnit <p>计费单位</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InputPrice",$param) and $param["InputPrice"] !== null) {
            $this->InputPrice = $param["InputPrice"];
        }

        if (array_key_exists("OutputPrice",$param) and $param["OutputPrice"] !== null) {
            $this->OutputPrice = $param["OutputPrice"];
        }

        if (array_key_exists("CachePrice",$param) and $param["CachePrice"] !== null) {
            $this->CachePrice = $param["CachePrice"];
        }

        if (array_key_exists("InputOutputUnit",$param) and $param["InputOutputUnit"] !== null) {
            $this->InputOutputUnit = $param["InputOutputUnit"];
        }
    }
}
