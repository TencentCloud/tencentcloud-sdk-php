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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VehicleLicenseOCR返回参数结构体
 *
 * @method TextVehicleFront getFrontInfo() 获取行驶证主页正面的识别结果，CardSide 为 FRONT。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrontInfo(TextVehicleFront $FrontInfo) 设置行驶证主页正面的识别结果，CardSide 为 FRONT。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TextVehicleBack getBackInfo() 获取行驶证副页正面的识别结果，CardSide 为 BACK。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackInfo(TextVehicleBack $BackInfo) 设置行驶证副页正面的识别结果，CardSide 为 BACK。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecognizeWarnCode() 获取Code 告警码列表和释义：
-9102  复印件告警
-9103  翻拍件告警
-9104  反光告警
-9105  模糊告警
-9106  边框不完整告警
注：告警码可以同时存在多个
 * @method void setRecognizeWarnCode(array $RecognizeWarnCode) 设置Code 告警码列表和释义：
-9102  复印件告警
-9103  翻拍件告警
-9104  反光告警
-9105  模糊告警
-9106  边框不完整告警
注：告警码可以同时存在多个
 * @method array getRecognizeWarnMsg() 获取告警码说明：
WARN_DRIVER_LICENSE_COPY_CARD 复印件告警
WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警
WARN_DRIVER_LICENSE_REFLECTION 反光告警
WARN_DRIVER_LICENSE_BLUR 模糊告警
WARN_DRIVER_LICENSE_BORDER_INCOMPLETE 边框不完整告警
注：告警信息可以同时存在多个
 * @method void setRecognizeWarnMsg(array $RecognizeWarnMsg) 设置告警码说明：
WARN_DRIVER_LICENSE_COPY_CARD 复印件告警
WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警
WARN_DRIVER_LICENSE_REFLECTION 反光告警
WARN_DRIVER_LICENSE_BLUR 模糊告警
WARN_DRIVER_LICENSE_BORDER_INCOMPLETE 边框不完整告警
注：告警信息可以同时存在多个
 * @method string getVehicleLicenseType() 获取行驶证类型 电子行驶证：Electronic 普通行驶证：Normal
 * @method void setVehicleLicenseType(string $VehicleLicenseType) 设置行驶证类型 电子行驶证：Electronic 普通行驶证：Normal
 * @method TextTractorVehicleBack getTractorBackInfo() 获取拖拉机行驶证副页正面的识别结果，CardSide 为 BACK。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTractorBackInfo(TextTractorVehicleBack $TractorBackInfo) 设置拖拉机行驶证副页正面的识别结果，CardSide 为 BACK。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VehicleLicenseOCRResponse extends AbstractModel
{
    /**
     * @var TextVehicleFront 行驶证主页正面的识别结果，CardSide 为 FRONT。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrontInfo;

    /**
     * @var TextVehicleBack 行驶证副页正面的识别结果，CardSide 为 BACK。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackInfo;

    /**
     * @var array Code 告警码列表和释义：
-9102  复印件告警
-9103  翻拍件告警
-9104  反光告警
-9105  模糊告警
-9106  边框不完整告警
注：告警码可以同时存在多个
     */
    public $RecognizeWarnCode;

    /**
     * @var array 告警码说明：
WARN_DRIVER_LICENSE_COPY_CARD 复印件告警
WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警
WARN_DRIVER_LICENSE_REFLECTION 反光告警
WARN_DRIVER_LICENSE_BLUR 模糊告警
WARN_DRIVER_LICENSE_BORDER_INCOMPLETE 边框不完整告警
注：告警信息可以同时存在多个
     */
    public $RecognizeWarnMsg;

    /**
     * @var string 行驶证类型 电子行驶证：Electronic 普通行驶证：Normal
     */
    public $VehicleLicenseType;

    /**
     * @var TextTractorVehicleBack 拖拉机行驶证副页正面的识别结果，CardSide 为 BACK。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TractorBackInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param TextVehicleFront $FrontInfo 行驶证主页正面的识别结果，CardSide 为 FRONT。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TextVehicleBack $BackInfo 行驶证副页正面的识别结果，CardSide 为 BACK。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecognizeWarnCode Code 告警码列表和释义：
-9102  复印件告警
-9103  翻拍件告警
-9104  反光告警
-9105  模糊告警
-9106  边框不完整告警
注：告警码可以同时存在多个
     * @param array $RecognizeWarnMsg 告警码说明：
WARN_DRIVER_LICENSE_COPY_CARD 复印件告警
WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警
WARN_DRIVER_LICENSE_REFLECTION 反光告警
WARN_DRIVER_LICENSE_BLUR 模糊告警
WARN_DRIVER_LICENSE_BORDER_INCOMPLETE 边框不完整告警
注：告警信息可以同时存在多个
     * @param string $VehicleLicenseType 行驶证类型 电子行驶证：Electronic 普通行驶证：Normal
     * @param TextTractorVehicleBack $TractorBackInfo 拖拉机行驶证副页正面的识别结果，CardSide 为 BACK。
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
        if (array_key_exists("FrontInfo",$param) and $param["FrontInfo"] !== null) {
            $this->FrontInfo = new TextVehicleFront();
            $this->FrontInfo->deserialize($param["FrontInfo"]);
        }

        if (array_key_exists("BackInfo",$param) and $param["BackInfo"] !== null) {
            $this->BackInfo = new TextVehicleBack();
            $this->BackInfo->deserialize($param["BackInfo"]);
        }

        if (array_key_exists("RecognizeWarnCode",$param) and $param["RecognizeWarnCode"] !== null) {
            $this->RecognizeWarnCode = $param["RecognizeWarnCode"];
        }

        if (array_key_exists("RecognizeWarnMsg",$param) and $param["RecognizeWarnMsg"] !== null) {
            $this->RecognizeWarnMsg = $param["RecognizeWarnMsg"];
        }

        if (array_key_exists("VehicleLicenseType",$param) and $param["VehicleLicenseType"] !== null) {
            $this->VehicleLicenseType = $param["VehicleLicenseType"];
        }

        if (array_key_exists("TractorBackInfo",$param) and $param["TractorBackInfo"] !== null) {
            $this->TractorBackInfo = new TextTractorVehicleBack();
            $this->TractorBackInfo->deserialize($param["TractorBackInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
