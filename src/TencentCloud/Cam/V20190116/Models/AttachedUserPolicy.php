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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户关联的策略详情
 *
 * @method string getPolicyId() 获取策略ID
 * @method void setPolicyId(string $PolicyId) 设置策略ID
 * @method string getPolicyName() 获取策略名
 * @method void setPolicyName(string $PolicyName) 设置策略名
 * @method string getDescription() 获取策略描述
 * @method void setDescription(string $Description) 设置策略描述
 * @method string getAddTime() 获取创建时间
 * @method void setAddTime(string $AddTime) 设置创建时间
 * @method string getStrategyType() 获取策略类型(1表示自定义策略，2表示预设策略)
 * @method void setStrategyType(string $StrategyType) 设置策略类型(1表示自定义策略，2表示预设策略)
 * @method string getCreateMode() 获取创建模式(1表示按产品或项目权限创建的策略，其他表示策略语法创建的策略)
 * @method void setCreateMode(string $CreateMode) 设置创建模式(1表示按产品或项目权限创建的策略，其他表示策略语法创建的策略)
 * @method array getGroups() 获取随组关联信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroups(array $Groups) 设置随组关联信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeactived() 获取是否已下线(0:否 1:是)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeactived(integer $Deactived) 设置是否已下线(0:否 1:是)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeactivedDetail() 获取已下线的产品列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeactivedDetail(array $DeactivedDetail) 设置已下线的产品列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttachedUserPolicy extends AbstractModel
{
    /**
     * @var string 策略ID
     */
    public $PolicyId;

    /**
     * @var string 策略名
     */
    public $PolicyName;

    /**
     * @var string 策略描述
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $AddTime;

    /**
     * @var string 策略类型(1表示自定义策略，2表示预设策略)
     */
    public $StrategyType;

    /**
     * @var string 创建模式(1表示按产品或项目权限创建的策略，其他表示策略语法创建的策略)
     */
    public $CreateMode;

    /**
     * @var array 随组关联信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Groups;

    /**
     * @var integer 是否已下线(0:否 1:是)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deactived;

    /**
     * @var array 已下线的产品列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeactivedDetail;

    /**
     * @param string $PolicyId 策略ID
     * @param string $PolicyName 策略名
     * @param string $Description 策略描述
     * @param string $AddTime 创建时间
     * @param string $StrategyType 策略类型(1表示自定义策略，2表示预设策略)
     * @param string $CreateMode 创建模式(1表示按产品或项目权限创建的策略，其他表示策略语法创建的策略)
     * @param array $Groups 随组关联信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Deactived 是否已下线(0:否 1:是)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeactivedDetail 已下线的产品列表
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new AttachedUserPolicyGroupInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("Deactived",$param) and $param["Deactived"] !== null) {
            $this->Deactived = $param["Deactived"];
        }

        if (array_key_exists("DeactivedDetail",$param) and $param["DeactivedDetail"] !== null) {
            $this->DeactivedDetail = $param["DeactivedDetail"];
        }
    }
}
