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
 * 数据脱敏策略信息
 *
 * @method string getStrategyName() 获取策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyName(string $StrategyName) 设置策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyType() 获取MASK_SHOW_FIRST_4; MASK_SHOW_LAST_4;MASK_HASH; MASK_DATE_SHOW_YEAR; MASK_NULL; MASK_DEFAULT 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyType(string $StrategyType) 设置MASK_SHOW_FIRST_4; MASK_SHOW_LAST_4;MASK_HASH; MASK_DATE_SHOW_YEAR; MASK_NULL; MASK_DEFAULT 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyDesc() 获取策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyDesc(string $StrategyDesc) 设置策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroups() 获取用户组策略列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroups(array $Groups) 设置用户组策略列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsers() 获取用户子账号uin列表，按;拼接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsers(string $Users) 设置用户子账号uin列表，按;拼接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyId() 获取策略Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyId(string $StrategyId) 设置策略Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataMaskStrategyInfo extends AbstractModel
{
    /**
     * @var string 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyName;

    /**
     * @var string MASK_SHOW_FIRST_4; MASK_SHOW_LAST_4;MASK_HASH; MASK_DATE_SHOW_YEAR; MASK_NULL; MASK_DEFAULT 等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyType;

    /**
     * @var string 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyDesc;

    /**
     * @var array 用户组策略列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Groups;

    /**
     * @var string 用户子账号uin列表，按;拼接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Users;

    /**
     * @var string 策略Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyId;

    /**
     * @param string $StrategyName 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyType MASK_SHOW_FIRST_4; MASK_SHOW_LAST_4;MASK_HASH; MASK_DATE_SHOW_YEAR; MASK_NULL; MASK_DEFAULT 等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyDesc 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Groups 用户组策略列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Users 用户子账号uin列表，按;拼接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyId 策略Id
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyDesc",$param) and $param["StrategyDesc"] !== null) {
            $this->StrategyDesc = $param["StrategyDesc"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }
    }
}
