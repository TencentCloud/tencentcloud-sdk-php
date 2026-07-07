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
 * ModifyModelAliasAttributes请求参数结构体
 *
 * @method Coefficient getCoefficient() 获取<p>模型积分系数配置。</p><p>必填，至少包含 <code>InputCoefficient</code>、<code>InputCachedCoefficient</code>、<code>OutputCoefficient</code> 中的一个字段，未传字段保持原值。</p><p><code>InputCoefficient</code> 为非缓存命中输入积分系数。</p><p><code>InputCachedCoefficient</code> 为缓存命中输入积分系数，用于 provider prompt cache 命中的输入 token。</p><p><code>OutputCoefficient</code> 为输出积分系数。</p><p>各字段取值范围：[0, 5000]，仅支持整数，0 表示该类 token 不计积分。</p>
 * @method void setCoefficient(Coefficient $Coefficient) 设置<p>模型积分系数配置。</p><p>必填，至少包含 <code>InputCoefficient</code>、<code>InputCachedCoefficient</code>、<code>OutputCoefficient</code> 中的一个字段，未传字段保持原值。</p><p><code>InputCoefficient</code> 为非缓存命中输入积分系数。</p><p><code>InputCachedCoefficient</code> 为缓存命中输入积分系数，用于 provider prompt cache 命中的输入 token。</p><p><code>OutputCoefficient</code> 为输出积分系数。</p><p>各字段取值范围：[0, 5000]，仅支持整数，0 表示该类 token 不计积分。</p>
 * @method array getModelAliasNames() 获取<p>模型别名列表。</p><p>不传 <code>ServiceProviderIds</code>（按 ModelAlias 账号维度修改）时支持数组批量，同一份 Coefficient 应用到多个别名。</p><p>传入 <code>ServiceProviderIds</code>（按 ServiceProvider 维度修改）时只能传 1 个别名，锁定唯一 model 别名；去重后不等于 1 个将返回 InvalidParameter。</p>
 * @method void setModelAliasNames(array $ModelAliasNames) 设置<p>模型别名列表。</p><p>不传 <code>ServiceProviderIds</code>（按 ModelAlias 账号维度修改）时支持数组批量，同一份 Coefficient 应用到多个别名。</p><p>传入 <code>ServiceProviderIds</code>（按 ServiceProvider 维度修改）时只能传 1 个别名，锁定唯一 model 别名；去重后不等于 1 个将返回 InvalidParameter。</p>
 * @method array getServiceProviderIds() 获取<p>BYOK 实例（ServiceProvider）ID 列表。</p><p>可选，数组。传入时按 ServiceProvider 维度修改：把同一份 Coefficient 批量应用到数组内每一个实例（覆盖配置，仅作用于这些实例），此时 <code>ModelAliasNames</code> 只能传 1 个别名（即 1 别名 × N ServiceProvider）；数组需去重、非空、上限 100，任一实例不归属/不存在/该实例下无该别名将整批返回错误。不传时按 ModelAlias（账号）维度修改，作用于该别名下未单独配置覆盖的全部实例。</p>
 * @method void setServiceProviderIds(array $ServiceProviderIds) 设置<p>BYOK 实例（ServiceProvider）ID 列表。</p><p>可选，数组。传入时按 ServiceProvider 维度修改：把同一份 Coefficient 批量应用到数组内每一个实例（覆盖配置，仅作用于这些实例），此时 <code>ModelAliasNames</code> 只能传 1 个别名（即 1 别名 × N ServiceProvider）；数组需去重、非空、上限 100，任一实例不归属/不存在/该实例下无该别名将整批返回错误。不传时按 ModelAlias（账号）维度修改，作用于该别名下未单独配置覆盖的全部实例。</p>
 */
class ModifyModelAliasAttributesRequest extends AbstractModel
{
    /**
     * @var Coefficient <p>模型积分系数配置。</p><p>必填，至少包含 <code>InputCoefficient</code>、<code>InputCachedCoefficient</code>、<code>OutputCoefficient</code> 中的一个字段，未传字段保持原值。</p><p><code>InputCoefficient</code> 为非缓存命中输入积分系数。</p><p><code>InputCachedCoefficient</code> 为缓存命中输入积分系数，用于 provider prompt cache 命中的输入 token。</p><p><code>OutputCoefficient</code> 为输出积分系数。</p><p>各字段取值范围：[0, 5000]，仅支持整数，0 表示该类 token 不计积分。</p>
     */
    public $Coefficient;

    /**
     * @var array <p>模型别名列表。</p><p>不传 <code>ServiceProviderIds</code>（按 ModelAlias 账号维度修改）时支持数组批量，同一份 Coefficient 应用到多个别名。</p><p>传入 <code>ServiceProviderIds</code>（按 ServiceProvider 维度修改）时只能传 1 个别名，锁定唯一 model 别名；去重后不等于 1 个将返回 InvalidParameter。</p>
     */
    public $ModelAliasNames;

    /**
     * @var array <p>BYOK 实例（ServiceProvider）ID 列表。</p><p>可选，数组。传入时按 ServiceProvider 维度修改：把同一份 Coefficient 批量应用到数组内每一个实例（覆盖配置，仅作用于这些实例），此时 <code>ModelAliasNames</code> 只能传 1 个别名（即 1 别名 × N ServiceProvider）；数组需去重、非空、上限 100，任一实例不归属/不存在/该实例下无该别名将整批返回错误。不传时按 ModelAlias（账号）维度修改，作用于该别名下未单独配置覆盖的全部实例。</p>
     */
    public $ServiceProviderIds;

    /**
     * @param Coefficient $Coefficient <p>模型积分系数配置。</p><p>必填，至少包含 <code>InputCoefficient</code>、<code>InputCachedCoefficient</code>、<code>OutputCoefficient</code> 中的一个字段，未传字段保持原值。</p><p><code>InputCoefficient</code> 为非缓存命中输入积分系数。</p><p><code>InputCachedCoefficient</code> 为缓存命中输入积分系数，用于 provider prompt cache 命中的输入 token。</p><p><code>OutputCoefficient</code> 为输出积分系数。</p><p>各字段取值范围：[0, 5000]，仅支持整数，0 表示该类 token 不计积分。</p>
     * @param array $ModelAliasNames <p>模型别名列表。</p><p>不传 <code>ServiceProviderIds</code>（按 ModelAlias 账号维度修改）时支持数组批量，同一份 Coefficient 应用到多个别名。</p><p>传入 <code>ServiceProviderIds</code>（按 ServiceProvider 维度修改）时只能传 1 个别名，锁定唯一 model 别名；去重后不等于 1 个将返回 InvalidParameter。</p>
     * @param array $ServiceProviderIds <p>BYOK 实例（ServiceProvider）ID 列表。</p><p>可选，数组。传入时按 ServiceProvider 维度修改：把同一份 Coefficient 批量应用到数组内每一个实例（覆盖配置，仅作用于这些实例），此时 <code>ModelAliasNames</code> 只能传 1 个别名（即 1 别名 × N ServiceProvider）；数组需去重、非空、上限 100，任一实例不归属/不存在/该实例下无该别名将整批返回错误。不传时按 ModelAlias（账号）维度修改，作用于该别名下未单独配置覆盖的全部实例。</p>
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

        if (array_key_exists("ModelAliasNames",$param) and $param["ModelAliasNames"] !== null) {
            $this->ModelAliasNames = $param["ModelAliasNames"];
        }

        if (array_key_exists("ServiceProviderIds",$param) and $param["ServiceProviderIds"] !== null) {
            $this->ServiceProviderIds = $param["ServiceProviderIds"];
        }
    }
}
