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
 * RecognizeValidIDCardOCR返回参数结构体
 *
 * @method string getType() 获取<p>卡证类型<br>身份证人像面<br>身份证国徽面</p><p>临时身份证人像面<br>临时身份证人像面</p><p>港澳台居住证人像面<br>港澳台居住证国徽面</p><p>外国人永久居留证人像面<br>外国人永久居留证国徽面</p>
 * @method void setType(string $Type) 设置<p>卡证类型<br>身份证人像面<br>身份证国徽面</p><p>临时身份证人像面<br>临时身份证人像面</p><p>港澳台居住证人像面<br>港澳台居住证国徽面</p><p>外国人永久居留证人像面<br>外国人永久居留证国徽面</p>
 * @method IDCardInfo getIDCardInfo() 获取<p>身份证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIDCardInfo(IDCardInfo $IDCardInfo) 设置<p>身份证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TemporaryIDCardInfo getTemporaryIDCardInfo() 获取<p>临时身份证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemporaryIDCardInfo(TemporaryIDCardInfo $TemporaryIDCardInfo) 设置<p>临时身份证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResidencePermitInfo getResidencePermitInfo() 获取<p>港澳台居住证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResidencePermitInfo(ResidencePermitInfo $ResidencePermitInfo) 设置<p>港澳台居住证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PermanentResidencePermitInfo getPermanentResidencePermitInfo() 获取<p>外国人永久居留证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermanentResidencePermitInfo(PermanentResidencePermitInfo $PermanentResidencePermitInfo) 设置<p>外国人永久居留证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeValidIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string <p>卡证类型<br>身份证人像面<br>身份证国徽面</p><p>临时身份证人像面<br>临时身份证人像面</p><p>港澳台居住证人像面<br>港澳台居住证国徽面</p><p>外国人永久居留证人像面<br>外国人永久居留证国徽面</p>
     */
    public $Type;

    /**
     * @var IDCardInfo <p>身份证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IDCardInfo;

    /**
     * @var TemporaryIDCardInfo <p>临时身份证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemporaryIDCardInfo;

    /**
     * @var ResidencePermitInfo <p>港澳台居住证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResidencePermitInfo;

    /**
     * @var PermanentResidencePermitInfo <p>外国人永久居留证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PermanentResidencePermitInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Type <p>卡证类型<br>身份证人像面<br>身份证国徽面</p><p>临时身份证人像面<br>临时身份证人像面</p><p>港澳台居住证人像面<br>港澳台居住证国徽面</p><p>外国人永久居留证人像面<br>外国人永久居留证国徽面</p>
     * @param IDCardInfo $IDCardInfo <p>身份证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TemporaryIDCardInfo $TemporaryIDCardInfo <p>临时身份证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResidencePermitInfo $ResidencePermitInfo <p>港澳台居住证信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PermanentResidencePermitInfo $PermanentResidencePermitInfo <p>外国人永久居留证信息</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IDCardInfo",$param) and $param["IDCardInfo"] !== null) {
            $this->IDCardInfo = new IDCardInfo();
            $this->IDCardInfo->deserialize($param["IDCardInfo"]);
        }

        if (array_key_exists("TemporaryIDCardInfo",$param) and $param["TemporaryIDCardInfo"] !== null) {
            $this->TemporaryIDCardInfo = new TemporaryIDCardInfo();
            $this->TemporaryIDCardInfo->deserialize($param["TemporaryIDCardInfo"]);
        }

        if (array_key_exists("ResidencePermitInfo",$param) and $param["ResidencePermitInfo"] !== null) {
            $this->ResidencePermitInfo = new ResidencePermitInfo();
            $this->ResidencePermitInfo->deserialize($param["ResidencePermitInfo"]);
        }

        if (array_key_exists("PermanentResidencePermitInfo",$param) and $param["PermanentResidencePermitInfo"] !== null) {
            $this->PermanentResidencePermitInfo = new PermanentResidencePermitInfo();
            $this->PermanentResidencePermitInfo->deserialize($param["PermanentResidencePermitInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
