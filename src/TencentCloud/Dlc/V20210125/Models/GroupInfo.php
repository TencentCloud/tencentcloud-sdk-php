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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据脱敏用户组信息
 *
 * @method integer getWorkGroupId() 获取用户组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkGroupId(integer $WorkGroupId) 设置用户组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyType() 获取策略类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyType(string $StrategyType) 设置策略类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var integer 用户组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkGroupId;

    /**
     * @var string 策略类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyType;

    /**
     * @param integer $WorkGroupId 用户组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyType 策略类型
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }
    }
}
