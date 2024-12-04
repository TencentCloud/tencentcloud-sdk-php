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
 * license 资源信息
 *
 * @method integer getId() 获取授权功能Id
 * @method void setId(integer $Id) 设置授权功能Id
 * @method string getAppId() 获取用户appid
 * @method void setAppId(string $AppId) 设置用户appid
 * @method string getDuration() 获取有效期时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置有效期时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFeatureId() 获取功能Id
 * @method void setFeatureId(integer $FeatureId) 设置功能Id
 * @method string getStartTime() 获取此license资源的开始生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置此license资源的开始生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取此license资源的生效结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置此license资源的生效结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method boolean getIsUse() 获取此资源是否可用于续期和更新有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUse(boolean $IsUse) 设置此资源是否可用于续期和更新有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取此资源的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置此资源的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTimestamp() 获取销毁时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTimestamp(string $IsolatedTimestamp) 设置销毁时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取功能模块名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置功能模块名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取功能模块类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置功能模块类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method Package getPackage() 获取资源包信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackage(Package $Package) 设置资源包信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class LicenseResourceSimpleInfo extends AbstractModel
{
    /**
     * @var integer 授权功能Id
     */
    public $Id;

    /**
     * @var string 用户appid
     */
    public $AppId;

    /**
     * @var string 有效期时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 功能Id
     */
    public $FeatureId;

    /**
     * @var string 此license资源的开始生效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 此license资源的生效结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var boolean 此资源是否可用于续期和更新有效期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUse;

    /**
     * @var integer 此资源的状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 销毁时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTimestamp;

    /**
     * @var string 功能模块名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 功能模块类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var Package 资源包信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Package;

    /**
     * @var string 资源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var integer 自动续费状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @param integer $Id 授权功能Id
     * @param string $AppId 用户appid
     * @param string $Duration 有效期时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FeatureId 功能Id
     * @param string $StartTime 此license资源的开始生效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 此license资源的生效结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param boolean $IsUse 此资源是否可用于续期和更新有效期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 此资源的状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTimestamp 销毁时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 功能模块名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 功能模块类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param Package $Package 资源包信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 资源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费状态
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("FeatureId",$param) and $param["FeatureId"] !== null) {
            $this->FeatureId = $param["FeatureId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("IsUse",$param) and $param["IsUse"] !== null) {
            $this->IsUse = $param["IsUse"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsolatedTimestamp",$param) and $param["IsolatedTimestamp"] !== null) {
            $this->IsolatedTimestamp = $param["IsolatedTimestamp"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = new Package();
            $this->Package->deserialize($param["Package"]);
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
