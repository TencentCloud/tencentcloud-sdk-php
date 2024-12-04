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
 * CreateActivityLicense返回参数结构体
 *
 * @method string getAppId() 获取用户appid
 * @method void setAppId(string $AppId) 设置用户appid
 * @method string getAppName() 获取app名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppName(string $AppName) 设置app名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleId() 获取ios包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置ios包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取安卓包名
 * @method void setPackageName(string $PackageName) 设置安卓包名
 * @method integer getDuration() 获取有效时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置有效时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getLicenseKey() 获取license秘钥
 * @method void setLicenseKey(string $LicenseKey) 设置license秘钥
 * @method string getLicenseUrl() 获取license 授权文件下载链接
 * @method void setLicenseUrl(string $LicenseUrl) 设置license 授权文件下载链接
 * @method integer getResidueDay() 获取license剩余天数，最后一天以及过期显示0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResidueDay(integer $ResidueDay) 设置license剩余天数，最后一天以及过期显示0
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResidue() 获取license剩余秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResidue(integer $Residue) 设置license剩余秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateActivityLicenseResponse extends AbstractModel
{
    /**
     * @var string 用户appid
     */
    public $AppId;

    /**
     * @var string app名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppName;

    /**
     * @var string ios包名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string 安卓包名
     */
    public $PackageName;

    /**
     * @var integer 有效时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string license秘钥
     */
    public $LicenseKey;

    /**
     * @var string license 授权文件下载链接
     */
    public $LicenseUrl;

    /**
     * @var integer license剩余天数，最后一天以及过期显示0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResidueDay;

    /**
     * @var integer license剩余秒数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Residue;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppId 用户appid
     * @param string $AppName app名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleId ios包名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName 安卓包名
     * @param integer $Duration 有效时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $LicenseKey license秘钥
     * @param string $LicenseUrl license 授权文件下载链接
     * @param integer $ResidueDay license剩余天数，最后一天以及过期显示0
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Residue license剩余秒数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LicenseKey",$param) and $param["LicenseKey"] !== null) {
            $this->LicenseKey = $param["LicenseKey"];
        }

        if (array_key_exists("LicenseUrl",$param) and $param["LicenseUrl"] !== null) {
            $this->LicenseUrl = $param["LicenseUrl"];
        }

        if (array_key_exists("ResidueDay",$param) and $param["ResidueDay"] !== null) {
            $this->ResidueDay = $param["ResidueDay"];
        }

        if (array_key_exists("Residue",$param) and $param["Residue"] !== null) {
            $this->Residue = $param["Residue"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
