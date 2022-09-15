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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产信息
 *
 * @method integer getId() 获取资产ID
 * @method void setId(integer $Id) 设置资产ID
 * @method string getInstanceId() 获取实例ID，对应CVM、CDB等实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID，对应CVM、CDB等实例ID
 * @method string getName() 获取资产名
 * @method void setName(string $Name) 设置资产名
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method string getPrivateIp() 获取内网IP
 * @method void setPrivateIp(string $PrivateIp) 设置内网IP
 * @method string getApCode() 获取地域编码
 * @method void setApCode(string $ApCode) 设置地域编码
 * @method string getOsName() 获取操作系统名称
 * @method void setOsName(string $OsName) 设置操作系统名称
 * @method integer getKind() 获取资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
 * @method void setKind(integer $Kind) 设置资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
 * @method integer getPort() 获取管理端口
 * @method void setPort(integer $Port) 设置管理端口
 * @method array getGroupSet() 获取所属资产组列表
 * @method void setGroupSet(array $GroupSet) 设置所属资产组列表
 * @method integer getAccountCount() 获取资产绑定的账号数
 * @method void setAccountCount(integer $AccountCount) 设置资产绑定的账号数
 * @method string getVpcId() 获取VPC ID
 * @method void setVpcId(string $VpcId) 设置VPC ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method Resource getResource() 获取堡垒机服务信息，注意没有绑定服务时为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(Resource $Resource) 设置堡垒机服务信息，注意没有绑定服务时为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method Department getDepartment() 获取资产所属部门
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartment(Department $Department) 设置资产所属部门
注意：此字段可能返回 null，表示取不到有效值。
 */
class Device extends AbstractModel
{
    /**
     * @var integer 资产ID
     */
    public $Id;

    /**
     * @var string 实例ID，对应CVM、CDB等实例ID
     */
    public $InstanceId;

    /**
     * @var string 资产名
     */
    public $Name;

    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var string 内网IP
     */
    public $PrivateIp;

    /**
     * @var string 地域编码
     */
    public $ApCode;

    /**
     * @var string 操作系统名称
     */
    public $OsName;

    /**
     * @var integer 资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
     */
    public $Kind;

    /**
     * @var integer 管理端口
     */
    public $Port;

    /**
     * @var array 所属资产组列表
     */
    public $GroupSet;

    /**
     * @var integer 资产绑定的账号数
     */
    public $AccountCount;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var Resource 堡垒机服务信息，注意没有绑定服务时为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var Department 资产所属部门
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Department;

    /**
     * @param integer $Id 资产ID
     * @param string $InstanceId 实例ID，对应CVM、CDB等实例ID
     * @param string $Name 资产名
     * @param string $PublicIp 公网IP
     * @param string $PrivateIp 内网IP
     * @param string $ApCode 地域编码
     * @param string $OsName 操作系统名称
     * @param integer $Kind 资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
     * @param integer $Port 管理端口
     * @param array $GroupSet 所属资产组列表
     * @param integer $AccountCount 资产绑定的账号数
     * @param string $VpcId VPC ID
     * @param string $SubnetId 子网ID
     * @param Resource $Resource 堡垒机服务信息，注意没有绑定服务时为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param Department $Department 资产所属部门
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("ApCode",$param) and $param["ApCode"] !== null) {
            $this->ApCode = $param["ApCode"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("GroupSet",$param) and $param["GroupSet"] !== null) {
            $this->GroupSet = [];
            foreach ($param["GroupSet"] as $key => $value){
                $obj = new Group();
                $obj->deserialize($value);
                array_push($this->GroupSet, $obj);
            }
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = new Department();
            $this->Department->deserialize($param["Department"]);
        }
    }
}
