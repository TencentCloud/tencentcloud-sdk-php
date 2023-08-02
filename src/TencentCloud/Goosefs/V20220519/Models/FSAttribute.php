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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件系统属性
 *
 * @method string getType() 获取文件系统类型, 可填goosefs和goosefsx
 * @method void setType(string $Type) 设置文件系统类型, 可填goosefs和goosefsx
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method GooseFSxAttribute getGooseFSxAttribute() 获取GooseFSx文件系统属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGooseFSxAttribute(GooseFSxAttribute $GooseFSxAttribute) 设置GooseFSx文件系统属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取文件系统状态 ACTIVE(运行中), CREATING(创建中), DESTROYING(销毁中), FAIL(创建失败),EXPANDING(扩容中),PROBING(容灾中)
 * @method void setStatus(string $Status) 设置文件系统状态 ACTIVE(运行中), CREATING(创建中), DESTROYING(销毁中), FAIL(创建失败),EXPANDING(扩容中),PROBING(容灾中)
 * @method string getName() 获取文件系统名
 * @method void setName(string $Name) 设置文件系统名
 * @method string getDescription() 获取文件系统备注描述
 * @method void setDescription(string $Description) 设置文件系统备注描述
 * @method string getVpcId() 获取vpc ID
 * @method void setVpcId(string $VpcId) 设置vpc ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getZone() 获取子网所在的可用区
 * @method void setZone(string $Zone) 设置子网所在的可用区
 * @method array getTag() 获取Tag数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置Tag数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取更新属性时间
 * @method void setModifyTime(string $ModifyTime) 设置更新属性时间
 */
class FSAttribute extends AbstractModel
{
    /**
     * @var string 文件系统类型, 可填goosefs和goosefsx
     */
    public $Type;

    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var GooseFSxAttribute GooseFSx文件系统属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GooseFSxAttribute;

    /**
     * @var string 文件系统状态 ACTIVE(运行中), CREATING(创建中), DESTROYING(销毁中), FAIL(创建失败),EXPANDING(扩容中),PROBING(容灾中)
     */
    public $Status;

    /**
     * @var string 文件系统名
     */
    public $Name;

    /**
     * @var string 文件系统备注描述
     */
    public $Description;

    /**
     * @var string vpc ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 子网所在的可用区
     */
    public $Zone;

    /**
     * @var array Tag数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var string 更新属性时间
     */
    public $ModifyTime;

    /**
     * @param string $Type 文件系统类型, 可填goosefs和goosefsx
     * @param string $FileSystemId 文件系统ID
     * @param string $CreateTime 创建时间
     * @param GooseFSxAttribute $GooseFSxAttribute GooseFSx文件系统属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 文件系统状态 ACTIVE(运行中), CREATING(创建中), DESTROYING(销毁中), FAIL(创建失败),EXPANDING(扩容中),PROBING(容灾中)
     * @param string $Name 文件系统名
     * @param string $Description 文件系统备注描述
     * @param string $VpcId vpc ID
     * @param string $SubnetId 子网ID
     * @param string $Zone 子网所在的可用区
     * @param array $Tag Tag数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 更新属性时间
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GooseFSxAttribute",$param) and $param["GooseFSxAttribute"] !== null) {
            $this->GooseFSxAttribute = new GooseFSxAttribute();
            $this->GooseFSxAttribute->deserialize($param["GooseFSxAttribute"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
