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
 * @method string getStartTime() 获取资源开始生效时间
 * @method void setStartTime(string $StartTime) 设置资源开始生效时间
 * @method string getEndTime() 获取资源结束生效时间
 * @method void setEndTime(string $EndTime) 设置资源结束生效时间
 * @method AppInfo getApplication() 获取应用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplication(AppInfo $Application) 设置应用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method XMagicSimpleInfo getXMagic() 获取开通的优图功能信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setXMagic(XMagicSimpleInfo $XMagic) 设置开通的优图功能信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取优图资源状态
 * @method void setStatus(integer $Status) 设置优图资源状态
 * @method array getOperation() 获取操作日期记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperation(array $Operation) 设置操作日期记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsUse() 获取是否可以使用
 * @method void setIsUse(boolean $IsUse) 设置是否可以使用
 * @method string getXMagicType() 获取single: 原子能力,combined:套餐
 * @method void setXMagicType(string $XMagicType) 设置single: 原子能力,combined:套餐
 * @method string getName() 获取功能模块名称
 * @method void setName(string $Name) 设置功能模块名称
 * @method string getBizType() 获取资源所属业务方 xmagic：优图，avatar：虚拟形象 
 * @method void setBizType(string $BizType) 设置资源所属业务方 xmagic：优图，avatar：虚拟形象 
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method integer getAutoRenewFlag() 获取资源自动续费状态
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置资源自动续费状态
 */
class XMagicResourceSimpleInfo extends AbstractModel
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
     * @var string 资源开始生效时间
     */
    public $StartTime;

    /**
     * @var string 资源结束生效时间
     */
    public $EndTime;

    /**
     * @var AppInfo 应用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Application;

    /**
     * @var XMagicSimpleInfo 开通的优图功能信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $XMagic;

    /**
     * @var integer 优图资源状态
     */
    public $Status;

    /**
     * @var array 操作日期记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operation;

    /**
     * @var boolean 是否可以使用
     */
    public $IsUse;

    /**
     * @var string single: 原子能力,combined:套餐
     */
    public $XMagicType;

    /**
     * @var string 功能模块名称
     */
    public $Name;

    /**
     * @var string 资源所属业务方 xmagic：优图，avatar：虚拟形象 
     */
    public $BizType;

    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var integer 资源自动续费状态
     */
    public $AutoRenewFlag;

    /**
     * @param integer $Id 资源Id
     * @param string $AppId 用户appid
     * @param string $Plan 套餐类别
     * @param string $Duration 单位：年
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param string $StartTime 资源开始生效时间
     * @param string $EndTime 资源结束生效时间
     * @param AppInfo $Application 应用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param XMagicSimpleInfo $XMagic 开通的优图功能信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 优图资源状态
     * @param array $Operation 操作日期记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsUse 是否可以使用
     * @param string $XMagicType single: 原子能力,combined:套餐
     * @param string $Name 功能模块名称
     * @param string $BizType 资源所属业务方 xmagic：优图，avatar：虚拟形象 
     * @param string $ResourceId 资源id
     * @param integer $AutoRenewFlag 资源自动续费状态
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Application",$param) and $param["Application"] !== null) {
            $this->Application = new AppInfo();
            $this->Application->deserialize($param["Application"]);
        }

        if (array_key_exists("XMagic",$param) and $param["XMagic"] !== null) {
            $this->XMagic = new XMagicSimpleInfo();
            $this->XMagic->deserialize($param["XMagic"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("IsUse",$param) and $param["IsUse"] !== null) {
            $this->IsUse = $param["IsUse"];
        }

        if (array_key_exists("XMagicType",$param) and $param["XMagicType"] !== null) {
            $this->XMagicType = $param["XMagicType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
