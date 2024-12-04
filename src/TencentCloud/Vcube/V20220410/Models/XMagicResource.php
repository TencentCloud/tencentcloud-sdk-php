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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 优图美视资源包
 *
 * @method integer getId() 获取资源Id
 * @method void setId(integer $Id) 设置资源Id
 * @method string getAppId() 获取用户appid
 * @method void setAppId(string $AppId) 设置用户appid
 * @method string getPlan() 获取套餐类别
 * @method void setPlan(string $Plan) 设置套餐类别
 * @method string getDuration() 获取单位：年
 * @method void setDuration(string $Duration) 设置单位：年
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method boolean getXMagic() 获取资源是否已使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setXMagic(boolean $XMagic) 设置资源是否已使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取资源开始生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置资源开始生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取资源结束生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置资源结束生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExpired() 获取资源包是否过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpired(boolean $Expired) 设置资源包是否过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取功能模块名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置功能模块名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getXMagicType() 获取single: 原子能力,combined:套餐
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setXMagicType(string $XMagicType) 设置single: 原子能力,combined:套餐
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizType() 获取xmagic:优图， avatar：虚拟人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizType(string $BizType) 设置xmagic:优图， avatar：虚拟人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取资源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsUse() 获取资源是否可以使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUse(boolean $IsUse) 设置资源是否可以使用
注意：此字段可能返回 null，表示取不到有效值。
 */
class XMagicResource extends AbstractModel
{
    /**
     * @var integer 资源Id
     */
    public $Id;

    /**
     * @var string 用户appid
     */
    public $AppId;

    /**
     * @var string 套餐类别
     */
    public $Plan;

    /**
     * @var string 单位：年
     */
    public $Duration;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var boolean 资源是否已使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $XMagic;

    /**
     * @var string 资源开始生效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 资源结束生效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var boolean 资源包是否过期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expired;

    /**
     * @var string 功能模块名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string single: 原子能力,combined:套餐
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $XMagicType;

    /**
     * @var string xmagic:优图， avatar：虚拟人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizType;

    /**
     * @var string 资源Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var boolean 资源是否可以使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUse;

    /**
     * @param integer $Id 资源Id
     * @param string $AppId 用户appid
     * @param string $Plan 套餐类别
     * @param string $Duration 单位：年
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param boolean $XMagic 资源是否已使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 资源开始生效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 资源结束生效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Expired 资源包是否过期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 功能模块名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $XMagicType single: 原子能力,combined:套餐
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizType xmagic:优图， avatar：虚拟人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 资源Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsUse 资源是否可以使用
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Plan",$param) and $param["Plan"] !== null) {
            $this->Plan = $param["Plan"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("XMagic",$param) and $param["XMagic"] !== null) {
            $this->XMagic = $param["XMagic"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("XMagicType",$param) and $param["XMagicType"] !== null) {
            $this->XMagicType = $param["XMagicType"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("IsUse",$param) and $param["IsUse"] !== null) {
            $this->IsUse = $param["IsUse"];
        }
    }
}
