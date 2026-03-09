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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * etcd信息
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getName() 获取实例名
 * @method void setName(string $Name) 设置实例名
 * @method string getDescription() 获取实例描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置实例描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取实例所属vpcId
 * @method void setVpcId(string $VpcId) 设置实例所属vpcId
 * @method string getVersion() 获取etcd版本
 * @method void setVersion(string $Version) 设置etcd版本
 * @method string getStatus() 获取实例状态
 * @method void setStatus(string $Status) 设置实例状态
 * @method array getMembers() 获取etcd成员信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMembers(array $Members) 设置etcd成员信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpoint() 获取对外访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoint(string $Endpoint) 设置对外访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeletionProtection() 获取删除保护，true 删除保护开启；false删除保护关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置删除保护，true 删除保护开启；false删除保护关闭
注意：此字段可能返回 null，表示取不到有效值。
 */
class Etcd extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $Name;

    /**
     * @var string 实例描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 实例所属vpcId
     */
    public $VpcId;

    /**
     * @var string etcd版本
     */
    public $Version;

    /**
     * @var string 实例状态
     */
    public $Status;

    /**
     * @var array etcd成员信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Members;

    /**
     * @var string 对外访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoint;

    /**
     * @var boolean 删除保护，true 删除保护开启；false删除保护关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeletionProtection;

    /**
     * @param string $InstanceId 实例id
     * @param string $Name 实例名
     * @param string $Description 实例描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 实例所属vpcId
     * @param string $Version etcd版本
     * @param string $Status 实例状态
     * @param array $Members etcd成员信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Endpoint 对外访问地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeletionProtection 删除保护，true 删除保护开启；false删除保护关闭
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Members",$param) and $param["Members"] !== null) {
            $this->Members = [];
            foreach ($param["Members"] as $key => $value){
                $obj = new EtcdMember();
                $obj->deserialize($value);
                array_push($this->Members, $obj);
            }
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
