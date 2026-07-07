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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型别名对象
 *
 * @method Coefficient getCoefficient() 获取<p>模型积分系数配置，包含 <code>InputCoefficient</code>、<code>InputCachedCoefficient</code> 和 <code>OutputCoefficient</code>。</p><p>未配置时输入系数默认为 25，缓存命中输入系数默认为 3，输出系数默认为 100。</p>
 * @method void setCoefficient(Coefficient $Coefficient) 设置<p>模型积分系数配置，包含 <code>InputCoefficient</code>、<code>InputCachedCoefficient</code> 和 <code>OutputCoefficient</code>。</p><p>未配置时输入系数默认为 25，缓存命中输入系数默认为 3，输出系数默认为 100。</p>
 * @method string getModelAliasName() 获取<p>模型别名名称。</p><p>若用户配置了模型别名，则为该别名；未配置时为原始模型名称。</p>
 * @method void setModelAliasName(string $ModelAliasName) 设置<p>模型别名名称。</p><p>若用户配置了模型别名，则为该别名；未配置时为原始模型名称。</p>
 * @method array getServiceProviderCoefficientSet() 获取<p>该模型别名下各 BYOK 实例（ServiceProvider）的积分系数明细，体现 ModelAlias 与 ServiceProvider 的层级关系。</p><p>默认返回该别名引用的全部实例；某实例返回 <code>Coefficient</code> 表示其单独配置了 ServiceProvider 维度系数，否则继承顶层 ModelAlias 的 <code>Coefficient</code>。</p><p>该别名当前无有效 BYOK 引用时返回空数组。</p>
 * @method void setServiceProviderCoefficientSet(array $ServiceProviderCoefficientSet) 设置<p>该模型别名下各 BYOK 实例（ServiceProvider）的积分系数明细，体现 ModelAlias 与 ServiceProvider 的层级关系。</p><p>默认返回该别名引用的全部实例；某实例返回 <code>Coefficient</code> 表示其单独配置了 ServiceProvider 维度系数，否则继承顶层 ModelAlias 的 <code>Coefficient</code>。</p><p>该别名当前无有效 BYOK 引用时返回空数组。</p>
 * @method string getSource() 获取<p>模型来源。</p><p>枚举值：</p><ul><li>BYOK：用户 BYOK 配置的模型。</li></ul>
 * @method void setSource(string $Source) 设置<p>模型来源。</p><p>枚举值：</p><ul><li>BYOK：用户 BYOK 配置的模型。</li></ul>
 * @method string getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>Active： 正常可用</li><li>Configuring： 变配中</li><li>ConfigureFailed： 变配失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>Active： 正常可用</li><li>Configuring： 变配中</li><li>ConfigureFailed： 变配失败</li></ul>
 */
class ModelAlias extends AbstractModel
{
    /**
     * @var Coefficient <p>模型积分系数配置，包含 <code>InputCoefficient</code>、<code>InputCachedCoefficient</code> 和 <code>OutputCoefficient</code>。</p><p>未配置时输入系数默认为 25，缓存命中输入系数默认为 3，输出系数默认为 100。</p>
     */
    public $Coefficient;

    /**
     * @var string <p>模型别名名称。</p><p>若用户配置了模型别名，则为该别名；未配置时为原始模型名称。</p>
     */
    public $ModelAliasName;

    /**
     * @var array <p>该模型别名下各 BYOK 实例（ServiceProvider）的积分系数明细，体现 ModelAlias 与 ServiceProvider 的层级关系。</p><p>默认返回该别名引用的全部实例；某实例返回 <code>Coefficient</code> 表示其单独配置了 ServiceProvider 维度系数，否则继承顶层 ModelAlias 的 <code>Coefficient</code>。</p><p>该别名当前无有效 BYOK 引用时返回空数组。</p>
     */
    public $ServiceProviderCoefficientSet;

    /**
     * @var string <p>模型来源。</p><p>枚举值：</p><ul><li>BYOK：用户 BYOK 配置的模型。</li></ul>
     */
    public $Source;

    /**
     * @var string <p>状态</p><p>枚举值：</p><ul><li>Active： 正常可用</li><li>Configuring： 变配中</li><li>ConfigureFailed： 变配失败</li></ul>
     */
    public $Status;

    /**
     * @param Coefficient $Coefficient <p>模型积分系数配置，包含 <code>InputCoefficient</code>、<code>InputCachedCoefficient</code> 和 <code>OutputCoefficient</code>。</p><p>未配置时输入系数默认为 25，缓存命中输入系数默认为 3，输出系数默认为 100。</p>
     * @param string $ModelAliasName <p>模型别名名称。</p><p>若用户配置了模型别名，则为该别名；未配置时为原始模型名称。</p>
     * @param array $ServiceProviderCoefficientSet <p>该模型别名下各 BYOK 实例（ServiceProvider）的积分系数明细，体现 ModelAlias 与 ServiceProvider 的层级关系。</p><p>默认返回该别名引用的全部实例；某实例返回 <code>Coefficient</code> 表示其单独配置了 ServiceProvider 维度系数，否则继承顶层 ModelAlias 的 <code>Coefficient</code>。</p><p>该别名当前无有效 BYOK 引用时返回空数组。</p>
     * @param string $Source <p>模型来源。</p><p>枚举值：</p><ul><li>BYOK：用户 BYOK 配置的模型。</li></ul>
     * @param string $Status <p>状态</p><p>枚举值：</p><ul><li>Active： 正常可用</li><li>Configuring： 变配中</li><li>ConfigureFailed： 变配失败</li></ul>
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
        if (array_key_exists("Coefficient",$param) and $param["Coefficient"] !== null) {
            $this->Coefficient = new Coefficient();
            $this->Coefficient->deserialize($param["Coefficient"]);
        }

        if (array_key_exists("ModelAliasName",$param) and $param["ModelAliasName"] !== null) {
            $this->ModelAliasName = $param["ModelAliasName"];
        }

        if (array_key_exists("ServiceProviderCoefficientSet",$param) and $param["ServiceProviderCoefficientSet"] !== null) {
            $this->ServiceProviderCoefficientSet = [];
            foreach ($param["ServiceProviderCoefficientSet"] as $key => $value){
                $obj = new ServiceProviderCoefficient();
                $obj->deserialize($value);
                array_push($this->ServiceProviderCoefficientSet, $obj);
            }
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
