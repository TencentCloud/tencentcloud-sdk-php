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
 * BYOK 实例（ServiceProvider）维度积分系数明细
 *
 * @method Coefficient getCoefficient() 获取<p>该 BYOK 实例（ServiceProvider）维度的积分系数。</p><p>可选字段：仅当该实例单独配置了 ServiceProvider 维度系数时返回，返回值即该实例的生效系数；未返回时表示该实例继承所属 ModelAlias 的 <code>Coefficient</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoefficient(Coefficient $Coefficient) 设置<p>该 BYOK 实例（ServiceProvider）维度的积分系数。</p><p>可选字段：仅当该实例单独配置了 ServiceProvider 维度系数时返回，返回值即该实例的生效系数；未返回时表示该实例继承所属 ModelAlias 的 <code>Coefficient</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceProviderId() 获取<p>BYOK 实例（ServiceProvider）ID。</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>BYOK 实例（ServiceProvider）ID。</p>
 * @method string getServiceProviderName() 获取<p>BYOK 实例（ServiceProvider）名称。</p>
 * @method void setServiceProviderName(string $ServiceProviderName) 设置<p>BYOK 实例（ServiceProvider）名称。</p>
 */
class ServiceProviderCoefficient extends AbstractModel
{
    /**
     * @var Coefficient <p>该 BYOK 实例（ServiceProvider）维度的积分系数。</p><p>可选字段：仅当该实例单独配置了 ServiceProvider 维度系数时返回，返回值即该实例的生效系数；未返回时表示该实例继承所属 ModelAlias 的 <code>Coefficient</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coefficient;

    /**
     * @var string <p>BYOK 实例（ServiceProvider）ID。</p>
     */
    public $ServiceProviderId;

    /**
     * @var string <p>BYOK 实例（ServiceProvider）名称。</p>
     */
    public $ServiceProviderName;

    /**
     * @param Coefficient $Coefficient <p>该 BYOK 实例（ServiceProvider）维度的积分系数。</p><p>可选字段：仅当该实例单独配置了 ServiceProvider 维度系数时返回，返回值即该实例的生效系数；未返回时表示该实例继承所属 ModelAlias 的 <code>Coefficient</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceProviderId <p>BYOK 实例（ServiceProvider）ID。</p>
     * @param string $ServiceProviderName <p>BYOK 实例（ServiceProvider）名称。</p>
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

        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("ServiceProviderName",$param) and $param["ServiceProviderName"] !== null) {
            $this->ServiceProviderName = $param["ServiceProviderName"];
        }
    }
}
