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
 * 工作组信息
 *
 * @method integer getWorkGroupId() 获取查询到的工作组唯一Id
 * @method void setWorkGroupId(integer $WorkGroupId) 设置查询到的工作组唯一Id
 * @method string getWorkGroupName() 获取工作组名称
 * @method void setWorkGroupName(string $WorkGroupName) 设置工作组名称
 * @method string getWorkGroupDescription() 获取工作组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkGroupDescription(string $WorkGroupDescription) 设置工作组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserNum() 获取工作组关联的用户数量
 * @method void setUserNum(integer $UserNum) 设置工作组关联的用户数量
 * @method array getUserSet() 获取工作组关联的用户集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserSet(array $UserSet) 设置工作组关联的用户集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPolicySet() 获取工作组绑定的权限集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicySet(array $PolicySet) 设置工作组绑定的权限集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取工作组的创建人
 * @method void setCreator(string $Creator) 设置工作组的创建人
 * @method string getCreateTime() 获取工作组的创建时间，形如2021-07-28 16:19:32
 * @method void setCreateTime(string $CreateTime) 设置工作组的创建时间，形如2021-07-28 16:19:32
 */
class WorkGroupInfo extends AbstractModel
{
    /**
     * @var integer 查询到的工作组唯一Id
     */
    public $WorkGroupId;

    /**
     * @var string 工作组名称
     */
    public $WorkGroupName;

    /**
     * @var string 工作组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkGroupDescription;

    /**
     * @var integer 工作组关联的用户数量
     */
    public $UserNum;

    /**
     * @var array 工作组关联的用户集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserSet;

    /**
     * @var array 工作组绑定的权限集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicySet;

    /**
     * @var string 工作组的创建人
     */
    public $Creator;

    /**
     * @var string 工作组的创建时间，形如2021-07-28 16:19:32
     */
    public $CreateTime;

    /**
     * @param integer $WorkGroupId 查询到的工作组唯一Id
     * @param string $WorkGroupName 工作组名称
     * @param string $WorkGroupDescription 工作组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserNum 工作组关联的用户数量
     * @param array $UserSet 工作组关联的用户集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PolicySet 工作组绑定的权限集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 工作组的创建人
     * @param string $CreateTime 工作组的创建时间，形如2021-07-28 16:19:32
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

        if (array_key_exists("WorkGroupName",$param) and $param["WorkGroupName"] !== null) {
            $this->WorkGroupName = $param["WorkGroupName"];
        }

        if (array_key_exists("WorkGroupDescription",$param) and $param["WorkGroupDescription"] !== null) {
            $this->WorkGroupDescription = $param["WorkGroupDescription"];
        }

        if (array_key_exists("UserNum",$param) and $param["UserNum"] !== null) {
            $this->UserNum = $param["UserNum"];
        }

        if (array_key_exists("UserSet",$param) and $param["UserSet"] !== null) {
            $this->UserSet = [];
            foreach ($param["UserSet"] as $key => $value){
                $obj = new UserMessage();
                $obj->deserialize($value);
                array_push($this->UserSet, $obj);
            }
        }

        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = [];
            foreach ($param["PolicySet"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->PolicySet, $obj);
            }
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
