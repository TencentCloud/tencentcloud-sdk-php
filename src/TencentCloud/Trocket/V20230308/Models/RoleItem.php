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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色信息
 *
 * @method string getRoleName() 获取角色名称
 * @method void setRoleName(string $RoleName) 设置角色名称
 * @method boolean getPermRead() 获取是否开启消费
 * @method void setPermRead(boolean $PermRead) 设置是否开启消费
 * @method boolean getPermWrite() 获取是否开启生产
 * @method void setPermWrite(boolean $PermWrite) 设置是否开启生产
 * @method string getAccessKey() 获取Access Key
 * @method void setAccessKey(string $AccessKey) 设置Access Key
 * @method string getSecretKey() 获取Secret Key
 * @method void setSecretKey(string $SecretKey) 设置Secret Key
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method integer getCreatedTime() 获取角色的创建时间，**Unix时间戳（毫秒）**
 * @method void setCreatedTime(integer $CreatedTime) 设置角色的创建时间，**Unix时间戳（毫秒）**
 * @method integer getModifiedTime() 获取角色的更新时间，**Unix时间戳（毫秒）**
 * @method void setModifiedTime(integer $ModifiedTime) 设置角色的更新时间，**Unix时间戳（毫秒）**
 * @method string getPermType() 获取权限类型，默认按集群授权（Cluster：集群级别；TopicAndGroup：主题&消费组级别）
 * @method void setPermType(string $PermType) 设置权限类型，默认按集群授权（Cluster：集群级别；TopicAndGroup：主题&消费组级别）
 * @method array getDetailedRolePerms() 获取Topic和Group维度权限配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailedRolePerms(array $DetailedRolePerms) 设置Topic和Group维度权限配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoleItem extends AbstractModel
{
    /**
     * @var string 角色名称
     */
    public $RoleName;

    /**
     * @var boolean 是否开启消费
     */
    public $PermRead;

    /**
     * @var boolean 是否开启生产
     */
    public $PermWrite;

    /**
     * @var string Access Key
     */
    public $AccessKey;

    /**
     * @var string Secret Key
     */
    public $SecretKey;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var integer 角色的创建时间，**Unix时间戳（毫秒）**
     */
    public $CreatedTime;

    /**
     * @var integer 角色的更新时间，**Unix时间戳（毫秒）**
     */
    public $ModifiedTime;

    /**
     * @var string 权限类型，默认按集群授权（Cluster：集群级别；TopicAndGroup：主题&消费组级别）
     */
    public $PermType;

    /**
     * @var array Topic和Group维度权限配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailedRolePerms;

    /**
     * @param string $RoleName 角色名称
     * @param boolean $PermRead 是否开启消费
     * @param boolean $PermWrite 是否开启生产
     * @param string $AccessKey Access Key
     * @param string $SecretKey Secret Key
     * @param string $Remark 备注信息
     * @param integer $CreatedTime 角色的创建时间，**Unix时间戳（毫秒）**
     * @param integer $ModifiedTime 角色的更新时间，**Unix时间戳（毫秒）**
     * @param string $PermType 权限类型，默认按集群授权（Cluster：集群级别；TopicAndGroup：主题&消费组级别）
     * @param array $DetailedRolePerms Topic和Group维度权限配置
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("PermRead",$param) and $param["PermRead"] !== null) {
            $this->PermRead = $param["PermRead"];
        }

        if (array_key_exists("PermWrite",$param) and $param["PermWrite"] !== null) {
            $this->PermWrite = $param["PermWrite"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("PermType",$param) and $param["PermType"] !== null) {
            $this->PermType = $param["PermType"];
        }

        if (array_key_exists("DetailedRolePerms",$param) and $param["DetailedRolePerms"] !== null) {
            $this->DetailedRolePerms = [];
            foreach ($param["DetailedRolePerms"] as $key => $value){
                $obj = new DetailedRolePerm();
                $obj->deserialize($value);
                array_push($this->DetailedRolePerms, $obj);
            }
        }
    }
}
