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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时伸缩策略配置
 *
 * @method boolean getEnabled() 获取是否开启定时伸缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置是否开启定时伸缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParams() 获取定时伸缩配置参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置定时伸缩配置参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyId() 获取弹性策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyId(string $StrategyId) 设置弹性策略ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayStrategyCronScalerConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启定时伸缩
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var array 定时伸缩配置参数列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $CreateTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ModifyTime;

    /**
     * @var string 弹性策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $StrategyId;

    /**
     * @param boolean $Enabled 是否开启定时伸缩
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params 定时伸缩配置参数列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyId 弹性策略ID
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new CloudNativeAPIGatewayStrategyCronScalerConfigParam();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }
    }
}
