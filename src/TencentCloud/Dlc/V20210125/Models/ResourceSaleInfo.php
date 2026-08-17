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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可售卖资源规格信息
 *
 * @method ResourceSpec getResourceSpec() 获取<p>可售卖资源规格</p>
 * @method void setResourceSpec(ResourceSpec $ResourceSpec) 设置<p>可售卖资源规格</p>
 * @method integer getStep() 获取<p>规格步长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStep(integer $Step) 设置<p>规格步长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxSpec() 获取<p>最大资源数量，仅GU有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxSpec(integer $MaxSpec) 设置<p>最大资源数量，仅GU有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusCategory() 获取<p>库存情况，对当前地域该计费项实时可新增数量的分级预估。取值复用 BcpConstants 库存状态常量：</p><ul><li>EnoughStock：余量充足</li><li>NormalStock：余量正常</li><li>UnderStock：余量紧张</li><li>WithoutStock：无库存</li></ul><p>该值为底层提供的预估值，不代表保证可发货量，仅用于展示库存概况。当请求 Region 与资源池地域不一致、cold-start 缓存未 ready、或该计费项在快照中缺失时返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusCategory(string $StatusCategory) 设置<p>库存情况，对当前地域该计费项实时可新增数量的分级预估。取值复用 BcpConstants 库存状态常量：</p><ul><li>EnoughStock：余量充足</li><li>NormalStock：余量正常</li><li>UnderStock：余量紧张</li><li>WithoutStock：无库存</li></ul><p>该值为底层提供的预估值，不代表保证可发货量，仅用于展示库存概况。当请求 Region 与资源池地域不一致、cold-start 缓存未 ready、或该计费项在快照中缺失时返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceSaleInfo extends AbstractModel
{
    /**
     * @var ResourceSpec <p>可售卖资源规格</p>
     */
    public $ResourceSpec;

    /**
     * @var integer <p>规格步长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Step;

    /**
     * @var integer <p>最大资源数量，仅GU有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxSpec;

    /**
     * @var string <p>库存情况，对当前地域该计费项实时可新增数量的分级预估。取值复用 BcpConstants 库存状态常量：</p><ul><li>EnoughStock：余量充足</li><li>NormalStock：余量正常</li><li>UnderStock：余量紧张</li><li>WithoutStock：无库存</li></ul><p>该值为底层提供的预估值，不代表保证可发货量，仅用于展示库存概况。当请求 Region 与资源池地域不一致、cold-start 缓存未 ready、或该计费项在快照中缺失时返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusCategory;

    /**
     * @param ResourceSpec $ResourceSpec <p>可售卖资源规格</p>
     * @param integer $Step <p>规格步长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxSpec <p>最大资源数量，仅GU有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusCategory <p>库存情况，对当前地域该计费项实时可新增数量的分级预估。取值复用 BcpConstants 库存状态常量：</p><ul><li>EnoughStock：余量充足</li><li>NormalStock：余量正常</li><li>UnderStock：余量紧张</li><li>WithoutStock：无库存</li></ul><p>该值为底层提供的预估值，不代表保证可发货量，仅用于展示库存概况。当请求 Region 与资源池地域不一致、cold-start 缓存未 ready、或该计费项在快照中缺失时返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new ResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("MaxSpec",$param) and $param["MaxSpec"] !== null) {
            $this->MaxSpec = $param["MaxSpec"];
        }

        if (array_key_exists("StatusCategory",$param) and $param["StatusCategory"] !== null) {
            $this->StatusCategory = $param["StatusCategory"];
        }
    }
}
