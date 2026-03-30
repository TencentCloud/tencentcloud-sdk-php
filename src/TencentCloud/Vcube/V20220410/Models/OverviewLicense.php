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
 * 视立方应用license
 *
 * @method OverviewAppInfo getApplication() 获取所属应用
 * @method void setApplication(OverviewAppInfo $Application) 设置所属应用
 * @method string getStartTime() 获取license生效时间
 * @method void setStartTime(string $StartTime) 设置license生效时间
 * @method string getEndTime() 获取license失效时间
 * @method void setEndTime(string $EndTime) 设置license失效时间
 * @method integer getFeatureId() 获取license对应的功能Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeatureId(integer $FeatureId) 设置license对应的功能Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLicenseType() 获取license是测试：test还是正式：formal
 * @method void setLicenseType(string $LicenseType) 设置license是测试：test还是正式：formal
 * @method integer getLicenseId() 获取license索引
 * @method void setLicenseId(integer $LicenseId) 设置license索引
 * @method string getName() 获取license名称
 * @method void setName(string $Name) 设置license名称
 * @method integer getRestTime() 获取返回还有多少秒过期，过期返回负值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestTime(integer $RestTime) 设置返回还有多少秒过期，过期返回负值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method string getPlan() 获取优图套餐名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlan(string $Plan) 设置优图套餐名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取licenseType
 * @method void setType(string $Type) 设置licenseType
 */
class OverviewLicense extends AbstractModel
{
    /**
     * @var OverviewAppInfo 所属应用
     */
    public $Application;

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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeatureId;

    /**
     * @var string license是测试：test还是正式：formal
     */
    public $LicenseType;

    /**
     * @var integer license索引
     */
    public $LicenseId;

    /**
     * @var string license名称
     */
    public $Name;

    /**
     * @var integer 返回还有多少秒过期，过期返回负值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestTime;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var string 优图套餐名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Plan;

    /**
     * @var string licenseType
     */
    public $Type;

    /**
     * @param OverviewAppInfo $Application 所属应用
     * @param string $StartTime license生效时间
     * @param string $EndTime license失效时间
     * @param integer $FeatureId license对应的功能Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LicenseType license是测试：test还是正式：formal
     * @param integer $LicenseId license索引
     * @param string $Name license名称
     * @param integer $RestTime 返回还有多少秒过期，过期返回负值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param string $Plan 优图套餐名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type licenseType
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
        if (array_key_exists("Application",$param) and $param["Application"] !== null) {
            $this->Application = new OverviewAppInfo();
            $this->Application->deserialize($param["Application"]);
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

        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("Plan",$param) and $param["Plan"] !== null) {
            $this->Plan = $param["Plan"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
