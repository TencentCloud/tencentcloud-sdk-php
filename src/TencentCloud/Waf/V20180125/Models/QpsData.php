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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取弹性qps的默认相关值
 *
 * @method integer getElasticBillingDefault() 获取弹性qps默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticBillingDefault(integer $ElasticBillingDefault) 设置弹性qps默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElasticBillingMin() 获取弹性qps最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticBillingMin(integer $ElasticBillingMin) 设置弹性qps最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElasticBillingMax() 获取弹性qps最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticBillingMax(integer $ElasticBillingMax) 设置弹性qps最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQPSExtendMax() 获取业务扩展包最大qps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQPSExtendMax(integer $QPSExtendMax) 设置业务扩展包最大qps
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQPSExtendIntlMax() 获取海外业务扩展包最大qps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQPSExtendIntlMax(integer $QPSExtendIntlMax) 设置海外业务扩展包最大qps
注意：此字段可能返回 null，表示取不到有效值。
 */
class QpsData extends AbstractModel
{
    /**
     * @var integer 弹性qps默认值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticBillingDefault;

    /**
     * @var integer 弹性qps最小值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticBillingMin;

    /**
     * @var integer 弹性qps最大值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticBillingMax;

    /**
     * @var integer 业务扩展包最大qps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QPSExtendMax;

    /**
     * @var integer 海外业务扩展包最大qps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QPSExtendIntlMax;

    /**
     * @param integer $ElasticBillingDefault 弹性qps默认值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ElasticBillingMin 弹性qps最小值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ElasticBillingMax 弹性qps最大值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QPSExtendMax 业务扩展包最大qps
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QPSExtendIntlMax 海外业务扩展包最大qps
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
        if (array_key_exists("ElasticBillingDefault",$param) and $param["ElasticBillingDefault"] !== null) {
            $this->ElasticBillingDefault = $param["ElasticBillingDefault"];
        }

        if (array_key_exists("ElasticBillingMin",$param) and $param["ElasticBillingMin"] !== null) {
            $this->ElasticBillingMin = $param["ElasticBillingMin"];
        }

        if (array_key_exists("ElasticBillingMax",$param) and $param["ElasticBillingMax"] !== null) {
            $this->ElasticBillingMax = $param["ElasticBillingMax"];
        }

        if (array_key_exists("QPSExtendMax",$param) and $param["QPSExtendMax"] !== null) {
            $this->QPSExtendMax = $param["QPSExtendMax"];
        }

        if (array_key_exists("QPSExtendIntlMax",$param) and $param["QPSExtendIntlMax"] !== null) {
            $this->QPSExtendIntlMax = $param["QPSExtendIntlMax"];
        }
    }
}
