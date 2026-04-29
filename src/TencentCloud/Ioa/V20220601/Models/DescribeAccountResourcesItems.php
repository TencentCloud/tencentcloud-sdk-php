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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源对象
 *
 * @method integer getAreaId() 获取资源组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaId(integer $AreaId) 设置资源组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceType() 获取资源类型(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(integer $ResourceType) 设置资源类型(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceId() 获取资源id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(integer $ResourceId) 设置资源id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFromSourceId() 获取一般同id字段相同(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromSourceId(integer $FromSourceId) 设置一般同id字段相同(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsInherited() 获取是否继承过来的资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsInherited(boolean $IsInherited) 设置是否继承过来的资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取资源过期时间(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置资源过期时间(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamePath() 获取账户组的namepath
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamePath(string $NamePath) 设置账户组的namepath
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccessType() 获取访问类型:0-NGN 1-web(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessType(integer $AccessType) 设置访问类型:0-NGN 1-web(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsInheritedSwitch() 获取继承开关状态(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsInheritedSwitch(integer $IsInheritedSwitch) 设置继承开关状态(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取关系id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置关系id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAreaName() 获取资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaName(string $AreaName) 设置资源名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeAccountResourcesItems extends AbstractModel
{
    /**
     * @var integer 资源组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaId;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 资源类型(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var integer 资源id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var integer 一般同id字段相同(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromSourceId;

    /**
     * @var boolean 是否继承过来的资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsInherited;

    /**
     * @var integer 资源过期时间(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 账户组的namepath
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamePath;

    /**
     * @var integer 访问类型:0-NGN 1-web(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessType;

    /**
     * @var string 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var integer 继承开关状态(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsInheritedSwitch;

    /**
     * @var integer 关系id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaName;

    /**
     * @param integer $AreaId 资源组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceType 资源类型(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceId 资源id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FromSourceId 一般同id字段相同(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsInherited 是否继承过来的资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 资源过期时间(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamePath 账户组的namepath
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccessType 访问类型:0-NGN 1-web(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsInheritedSwitch 继承开关状态(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 关系id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AreaName 资源名称
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
        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("FromSourceId",$param) and $param["FromSourceId"] !== null) {
            $this->FromSourceId = $param["FromSourceId"];
        }

        if (array_key_exists("IsInherited",$param) and $param["IsInherited"] !== null) {
            $this->IsInherited = $param["IsInherited"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("NamePath",$param) and $param["NamePath"] !== null) {
            $this->NamePath = $param["NamePath"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("IsInheritedSwitch",$param) and $param["IsInheritedSwitch"] !== null) {
            $this->IsInheritedSwitch = $param["IsInheritedSwitch"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AreaName",$param) and $param["AreaName"] !== null) {
            $this->AreaName = $param["AreaName"];
        }
    }
}
