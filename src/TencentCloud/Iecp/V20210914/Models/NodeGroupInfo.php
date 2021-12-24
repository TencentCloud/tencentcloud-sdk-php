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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NodeGroup信息
 *
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getNodeGroupName() 获取NodeGroup名称
 * @method void setNodeGroupName(string $NodeGroupName) 设置NodeGroup名称
 * @method array getDeploymentGridList() 获取DeploymentGrid数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeploymentGridList(array $DeploymentGridList) 设置DeploymentGrid数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStatefulSetGridList() 获取StatefulSetGrid数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatefulSetGridList(array $StatefulSetGridList) 设置StatefulSetGrid数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getProtect() 获取是否平台保护
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtect(boolean $Protect) 设置是否平台保护
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeGroupInfo extends AbstractModel
{
    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string NodeGroup名称
     */
    public $NodeGroupName;

    /**
     * @var array DeploymentGrid数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeploymentGridList;

    /**
     * @var array StatefulSetGrid数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatefulSetGridList;

    /**
     * @var boolean 是否平台保护
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protect;

    /**
     * @param string $Description 描述
     * @param string $CreateTime 创建时间
     * @param string $NodeGroupName NodeGroup名称
     * @param array $DeploymentGridList DeploymentGrid数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StatefulSetGridList StatefulSetGrid数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Protect 是否平台保护
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NodeGroupName",$param) and $param["NodeGroupName"] !== null) {
            $this->NodeGroupName = $param["NodeGroupName"];
        }

        if (array_key_exists("DeploymentGridList",$param) and $param["DeploymentGridList"] !== null) {
            $this->DeploymentGridList = [];
            foreach ($param["DeploymentGridList"] as $key => $value){
                $obj = new GridDetail();
                $obj->deserialize($value);
                array_push($this->DeploymentGridList, $obj);
            }
        }

        if (array_key_exists("StatefulSetGridList",$param) and $param["StatefulSetGridList"] !== null) {
            $this->StatefulSetGridList = [];
            foreach ($param["StatefulSetGridList"] as $key => $value){
                $obj = new GridDetail();
                $obj->deserialize($value);
                array_push($this->StatefulSetGridList, $obj);
            }
        }

        if (array_key_exists("Protect",$param) and $param["Protect"] !== null) {
            $this->Protect = $param["Protect"];
        }
    }
}
