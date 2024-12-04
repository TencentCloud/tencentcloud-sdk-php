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
 * 视立方应用license
 *
 * @method string getType() 获取license类型
 * @method void setType(string $Type) 设置license类型
 * @method string getRemark() 获取老系统迁移备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置老系统迁移备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取license生效时间
 * @method void setStartTime(string $StartTime) 设置license生效时间
 * @method string getEndTime() 获取license失效时间
 * @method void setEndTime(string $EndTime) 设置license失效时间
 * @method integer getFeatureId() 获取license对应的功能Id
 * @method void setFeatureId(integer $FeatureId) 设置license对应的功能Id
 * @method string getLicenseType() 获取license是测试：test还是正式：formal
 * @method void setLicenseType(string $LicenseType) 设置license是测试：test还是正式：formal
 * @method boolean getRenewal() 获取测试license 是否可以续期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewal(boolean $Renewal) 设置测试license 是否可以续期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLicenseId() 获取license索引
 * @method void setLicenseId(integer $LicenseId) 设置license索引
 * @method string getName() 获取license名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置license名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUpdate() 获取测试license 是否升级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdate(boolean $Update) 设置测试license 是否升级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldLicenseUrl() 获取兼容老的licenseUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldLicenseUrl(string $OldLicenseUrl) 设置兼容老的licenseUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroup() 获取视立方url分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroup(integer $Group) 设置视立方url分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExpired() 获取过期：true ，未过期：其它
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpired(boolean $Expired) 设置过期：true ，未过期：其它
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestTime() 获取返回还有多少秒过期，过期返回0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestTime(integer $RestTime) 设置返回还有多少秒过期，过期返回0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method RenewResource getResource() 获取计费资源相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(RenewResource $Resource) 设置计费资源相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVest() 获取是否为马甲包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVest(boolean $IsVest) 设置是否为马甲包
注意：此字段可能返回 null，表示取不到有效值。
 */
class License extends AbstractModel
{
    /**
     * @var string license类型
     */
    public $Type;

    /**
     * @var string 老系统迁移备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string license生效时间
     */
    public $StartTime;

    /**
     * @var string license失效时间
     */
    public $EndTime;

    /**
     * @var integer license对应的功能Id
     */
    public $FeatureId;

    /**
     * @var string license是测试：test还是正式：formal
     */
    public $LicenseType;

    /**
     * @var boolean 测试license 是否可以续期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Renewal;

    /**
     * @var integer license索引
     */
    public $LicenseId;

    /**
     * @var string license名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var boolean 测试license 是否升级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Update;

    /**
     * @var string 兼容老的licenseUrl
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldLicenseUrl;

    /**
     * @var integer 视立方url分组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Group;

    /**
     * @var boolean 过期：true ，未过期：其它
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expired;

    /**
     * @var integer 返回还有多少秒过期，过期返回0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestTime;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var RenewResource 计费资源相关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var boolean 是否为马甲包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVest;

    /**
     * @param string $Type license类型
     * @param string $Remark 老系统迁移备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime license生效时间
     * @param string $EndTime license失效时间
     * @param integer $FeatureId license对应的功能Id
     * @param string $LicenseType license是测试：test还是正式：formal
     * @param boolean $Renewal 测试license 是否可以续期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LicenseId license索引
     * @param string $Name license名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Update 测试license 是否升级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldLicenseUrl 兼容老的licenseUrl
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Group 视立方url分组
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Expired 过期：true ，未过期：其它
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestTime 返回还有多少秒过期，过期返回0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param RenewResource $Resource 计费资源相关信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVest 是否为马甲包
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FeatureId",$param) and $param["FeatureId"] !== null) {
            $this->FeatureId = $param["FeatureId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("Renewal",$param) and $param["Renewal"] !== null) {
            $this->Renewal = $param["Renewal"];
        }

        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Update",$param) and $param["Update"] !== null) {
            $this->Update = $param["Update"];
        }

        if (array_key_exists("OldLicenseUrl",$param) and $param["OldLicenseUrl"] !== null) {
            $this->OldLicenseUrl = $param["OldLicenseUrl"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("RestTime",$param) and $param["RestTime"] !== null) {
            $this->RestTime = $param["RestTime"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new RenewResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("IsVest",$param) and $param["IsVest"] !== null) {
            $this->IsVest = $param["IsVest"];
        }
    }
}
