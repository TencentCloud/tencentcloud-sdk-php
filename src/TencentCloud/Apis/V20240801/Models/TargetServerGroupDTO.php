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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后端服务组DTO
 *
 * @method string getID() 获取<p>后端服务组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置<p>后端服务组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargetHosts() 获取<p>目标服务器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetHosts(array $TargetHosts) 设置<p>目标服务器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetHostType() 获取<p>目标Host类型 0 默认 1 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetHostType(integer $TargetHostType) 设置<p>目标Host类型 0 默认 1 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getServiceCount() 获取<p>关联的服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCount(integer $ServiceCount) 设置<p>关联的服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TargetServerGroupDTO extends AbstractModel
{
    /**
     * @var string <p>后端服务组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array <p>目标服务器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetHosts;

    /**
     * @var integer <p>目标Host类型 0 默认 1 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetHostType;

    /**
     * @var integer <p>关联的服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCount;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $ID <p>后端服务组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TargetHosts <p>目标服务器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetHostType <p>目标Host类型 0 默认 1 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ServiceCount <p>关联的服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TargetHosts",$param) and $param["TargetHosts"] !== null) {
            $this->TargetHosts = [];
            foreach ($param["TargetHosts"] as $key => $value){
                $obj = new TargetHostDTO();
                $obj->deserialize($value);
                array_push($this->TargetHosts, $obj);
            }
        }

        if (array_key_exists("TargetHostType",$param) and $param["TargetHostType"] !== null) {
            $this->TargetHostType = $param["TargetHostType"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
