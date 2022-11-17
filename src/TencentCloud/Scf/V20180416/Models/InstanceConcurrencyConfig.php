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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多并发执行配置描述
 *
 * @method string getDynamicEnabled() 获取是否开启智能动态并发。'FALSE'时是静态并发。''时取消多并发配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDynamicEnabled(string $DynamicEnabled) 设置是否开启智能动态并发。'FALSE'时是静态并发。''时取消多并发配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxConcurrency() 获取单实例并发数最大值。取值范围 [1,100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置单实例并发数最大值。取值范围 [1,100]
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceConcurrencyConfig extends AbstractModel
{
    /**
     * @var string 是否开启智能动态并发。'FALSE'时是静态并发。''时取消多并发配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DynamicEnabled;

    /**
     * @var integer 单实例并发数最大值。取值范围 [1,100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxConcurrency;

    /**
     * @param string $DynamicEnabled 是否开启智能动态并发。'FALSE'时是静态并发。''时取消多并发配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxConcurrency 单实例并发数最大值。取值范围 [1,100]
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
        if (array_key_exists("DynamicEnabled",$param) and $param["DynamicEnabled"] !== null) {
            $this->DynamicEnabled = $param["DynamicEnabled"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }
    }
}
