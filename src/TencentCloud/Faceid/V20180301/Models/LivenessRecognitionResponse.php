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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LivenessRecognition返回参数结构体
 *
 * @method string getBestFrameBase64() 获取<p>验证通过后的视频最佳截图照片。</p><ul><li>照片为BASE64编码后的值，jpg格式。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrameBase64(string $BestFrameBase64) 设置<p>验证通过后的视频最佳截图照片。</p><ul><li>照片为BASE64编码后的值，jpg格式。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSim() 获取<p>相似度。- 取值范围 [0.00, 100.00]。- 推荐相似度大于等于70时可判断为同一人，（采用固定阈值70，误通过率为万分之一，不支持调整阈值）</p>
 * @method void setSim(float $Sim) 设置<p>相似度。- 取值范围 [0.00, 100.00]。- 推荐相似度大于等于70时可判断为同一人，（采用固定阈值70，误通过率为万分之一，不支持调整阈值）</p>
 * @method string getResult() 获取<p>业务错误码。</p><ul><li>成功情况返回Success。</li><li>错误情况请参考下方错误码 列表中FailedOperation部分</li></ul>
 * @method void setResult(string $Result) 设置<p>业务错误码。</p><ul><li>成功情况返回Success。</li><li>错误情况请参考下方错误码 列表中FailedOperation部分</li></ul>
 * @method string getDescription() 获取<p>业务结果描述。</p>
 * @method void setDescription(string $Description) 设置<p>业务结果描述。</p>
 * @method array getBestFrameList() 获取<p>最佳截图列表，仅在配置了返回多张最佳截图时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrameList(array $BestFrameList) 设置<p>最佳截图列表，仅在配置了返回多张最佳截图时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class LivenessRecognitionResponse extends AbstractModel
{
    /**
     * @var string <p>验证通过后的视频最佳截图照片。</p><ul><li>照片为BASE64编码后的值，jpg格式。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BestFrameBase64;

    /**
     * @var float <p>相似度。- 取值范围 [0.00, 100.00]。- 推荐相似度大于等于70时可判断为同一人，（采用固定阈值70，误通过率为万分之一，不支持调整阈值）</p>
     */
    public $Sim;

    /**
     * @var string <p>业务错误码。</p><ul><li>成功情况返回Success。</li><li>错误情况请参考下方错误码 列表中FailedOperation部分</li></ul>
     */
    public $Result;

    /**
     * @var string <p>业务结果描述。</p>
     */
    public $Description;

    /**
     * @var array <p>最佳截图列表，仅在配置了返回多张最佳截图时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BestFrameList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BestFrameBase64 <p>验证通过后的视频最佳截图照片。</p><ul><li>照片为BASE64编码后的值，jpg格式。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Sim <p>相似度。- 取值范围 [0.00, 100.00]。- 推荐相似度大于等于70时可判断为同一人，（采用固定阈值70，误通过率为万分之一，不支持调整阈值）</p>
     * @param string $Result <p>业务错误码。</p><ul><li>成功情况返回Success。</li><li>错误情况请参考下方错误码 列表中FailedOperation部分</li></ul>
     * @param string $Description <p>业务结果描述。</p>
     * @param array $BestFrameList <p>最佳截图列表，仅在配置了返回多张最佳截图时返回。</p>
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
        if (array_key_exists("BestFrameBase64",$param) and $param["BestFrameBase64"] !== null) {
            $this->BestFrameBase64 = $param["BestFrameBase64"];
        }

        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("BestFrameList",$param) and $param["BestFrameList"] !== null) {
            $this->BestFrameList = $param["BestFrameList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
