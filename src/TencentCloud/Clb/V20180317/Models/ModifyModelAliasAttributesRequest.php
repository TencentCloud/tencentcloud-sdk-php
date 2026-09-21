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
 * @method array getModelAliasNames() 获取<p>模型别名</p>
 * @method void setModelAliasNames(array $ModelAliasNames) 设置<p>模型别名</p>
 * @method Coefficient getCoefficient() 获取<p>基础积分系数配置，选填。不传时保留原配置。各系数字段均为选填，取值范围为 [0, 5000]，最多支持 6 位小数，0 表示零价。传入本参数时，至少填写一项有效系数，不能传空对象。</p>
 * @method void setCoefficient(Coefficient $Coefficient) 设置<p>基础积分系数配置，选填。不传时保留原配置。各系数字段均为选填，取值范围为 [0, 5000]，最多支持 6 位小数，0 表示零价。传入本参数时，至少填写一项有效系数，不能传空对象。</p>
 * @method array getServiceProviderIds() 获取<p>BYOK 实例（ServiceProvider）ID 列表。</p><p>可选，数组。传入时按 ServiceProvider 维度修改：把同一份 Coefficient 批量应用到数组内每一个实例（覆盖配置，仅作用于这些实例），此时 <code>ModelAliasNames</code> 只能传 1 个别名（即 1 别名 × N ServiceProvider）；数组需去重、非空、上限 100，任一实例不归属/不存在/该实例下无该别名将整批返回错误。不传时按 ModelAlias（账号）维度修改，作用于该别名下未单独配置覆盖的全部实例。</p>
 * @method void setServiceProviderIds(array $ServiceProviderIds) 设置<p>BYOK 实例（ServiceProvider）ID 列表。</p><p>可选，数组。传入时按 ServiceProvider 维度修改：把同一份 Coefficient 批量应用到数组内每一个实例（覆盖配置，仅作用于这些实例），此时 <code>ModelAliasNames</code> 只能传 1 个别名（即 1 别名 × N ServiceProvider）；数组需去重、非空、上限 100，任一实例不归属/不存在/该实例下无该别名将整批返回错误。不传时按 ModelAlias（账号）维度修改，作用于该别名下未单独配置覆盖的全部实例。</p>
 * @method string getCapability() 获取<p>模型输出模态</p><p>枚举值：</p><ul><li>chat： 文本</li><li>embedding： 向量</li><li>video： 视频</li><li>rerank： 重排序</li></ul>
 * @method void setCapability(string $Capability) 设置<p>模型输出模态</p><p>枚举值：</p><ul><li>chat： 文本</li><li>embedding： 向量</li><li>video： 视频</li><li>rerank： 重排序</li></ul>
 * @method array getCoefficientTiers() 获取<p>积分梯度设置</p>
 * @method void setCoefficientTiers(array $CoefficientTiers) 设置<p>积分梯度设置</p>
 * @method array getCoefficientSchedule() 获取<p>积分峰谷设置</p>
 * @method void setCoefficientSchedule(array $CoefficientSchedule) 设置<p>积分峰谷设置</p>
 */
class ModifyModelAliasAttributesRequest extends AbstractModel
{
    /**
     * @var array <p>模型别名</p>
     */
    public $ModelAliasNames;

    /**
     * @var Coefficient <p>基础积分系数配置，选填。不传时保留原配置。各系数字段均为选填，取值范围为 [0, 5000]，最多支持 6 位小数，0 表示零价。传入本参数时，至少填写一项有效系数，不能传空对象。</p>
     */
    public $Coefficient;

    /**
     * @var array <p>BYOK 实例（ServiceProvider）ID 列表。</p><p>可选，数组。传入时按 ServiceProvider 维度修改：把同一份 Coefficient 批量应用到数组内每一个实例（覆盖配置，仅作用于这些实例），此时 <code>ModelAliasNames</code> 只能传 1 个别名（即 1 别名 × N ServiceProvider）；数组需去重、非空、上限 100，任一实例不归属/不存在/该实例下无该别名将整批返回错误。不传时按 ModelAlias（账号）维度修改，作用于该别名下未单独配置覆盖的全部实例。</p>
     */
    public $ServiceProviderIds;

    /**
     * @var string <p>模型输出模态</p><p>枚举值：</p><ul><li>chat： 文本</li><li>embedding： 向量</li><li>video： 视频</li><li>rerank： 重排序</li></ul>
     */
    public $Capability;

    /**
     * @var array <p>积分梯度设置</p>
     */
    public $CoefficientTiers;

    /**
     * @var array <p>积分峰谷设置</p>
     */
    public $CoefficientSchedule;

    /**
     * @param array $ModelAliasNames <p>模型别名</p>
     * @param Coefficient $Coefficient <p>基础积分系数配置，选填。不传时保留原配置。各系数字段均为选填，取值范围为 [0, 5000]，最多支持 6 位小数，0 表示零价。传入本参数时，至少填写一项有效系数，不能传空对象。</p>
     * @param array $ServiceProviderIds <p>BYOK 实例（ServiceProvider）ID 列表。</p><p>可选，数组。传入时按 ServiceProvider 维度修改：把同一份 Coefficient 批量应用到数组内每一个实例（覆盖配置，仅作用于这些实例），此时 <code>ModelAliasNames</code> 只能传 1 个别名（即 1 别名 × N ServiceProvider）；数组需去重、非空、上限 100，任一实例不归属/不存在/该实例下无该别名将整批返回错误。不传时按 ModelAlias（账号）维度修改，作用于该别名下未单独配置覆盖的全部实例。</p>
     * @param string $Capability <p>模型输出模态</p><p>枚举值：</p><ul><li>chat： 文本</li><li>embedding： 向量</li><li>video： 视频</li><li>rerank： 重排序</li></ul>
     * @param array $CoefficientTiers <p>积分梯度设置</p>
     * @param array $CoefficientSchedule <p>积分峰谷设置</p>
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
        if (array_key_exists("ModelAliasNames",$param) and $param["ModelAliasNames"] !== null) {
            $this->ModelAliasNames = $param["ModelAliasNames"];
        }

        if (array_key_exists("Coefficient",$param) and $param["Coefficient"] !== null) {
            $this->Coefficient = new Coefficient();
            $this->Coefficient->deserialize($param["Coefficient"]);
        }

        if (array_key_exists("ServiceProviderIds",$param) and $param["ServiceProviderIds"] !== null) {
            $this->ServiceProviderIds = $param["ServiceProviderIds"];
        }

        if (array_key_exists("Capability",$param) and $param["Capability"] !== null) {
            $this->Capability = $param["Capability"];
        }

        if (array_key_exists("CoefficientTiers",$param) and $param["CoefficientTiers"] !== null) {
            $this->CoefficientTiers = [];
            foreach ($param["CoefficientTiers"] as $key => $value){
                $obj = new CoefficientTier();
                $obj->deserialize($value);
                array_push($this->CoefficientTiers, $obj);
            }
        }

        if (array_key_exists("CoefficientSchedule",$param) and $param["CoefficientSchedule"] !== null) {
            $this->CoefficientSchedule = [];
            foreach ($param["CoefficientSchedule"] as $key => $value){
                $obj = new CoefficientScheduleRule();
                $obj->deserialize($value);
                array_push($this->CoefficientSchedule, $obj);
            }
        }
    }
}
