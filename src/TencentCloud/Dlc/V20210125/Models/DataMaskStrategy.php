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
 * 数据脱敏策略信息
 *
 * @method string getStrategyId() 获取策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyId(string $StrategyId) 设置策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAppId() 获取用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAppId(string $UserAppId) 设置用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取操作用户子账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置操作用户子账号uin
注意：此字段可能返回 null，表示取不到有效值。
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
 * @method integer getState() 获取1: 生效中； 0：已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置1: 生效中； 0：已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取策略创建时间，毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置策略创建时间，毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取策略更新时间，毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置策略更新时间，毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataMaskStrategy extends AbstractModel
{
    /**
     * @var string 策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyId;

    /**
     * @var string 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAppId;

    /**
     * @var string 用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 操作用户子账号uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

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
     * @var integer 1: 生效中； 0：已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer 策略创建时间，毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 策略更新时间，毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $StrategyId 策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAppId 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 操作用户子账号uin
注意：此字段可能返回 null，表示取不到有效值。
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
     * @param integer $State 1: 生效中； 0：已删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 策略创建时间，毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 策略更新时间，毫秒时间戳
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("UserAppId",$param) and $param["UserAppId"] !== null) {
            $this->UserAppId = $param["UserAppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
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

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
