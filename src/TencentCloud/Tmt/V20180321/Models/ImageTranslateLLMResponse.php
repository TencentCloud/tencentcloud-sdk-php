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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageTranslateLLM返回参数结构体
 *
 * @method string getData() 获取<p>图片数据的Base64字符串，输出格式为JPG。</p>
 * @method void setData(string $Data) 设置<p>图片数据的Base64字符串，输出格式为JPG。</p>
 * @method string getSource() 获取<p>原文本主要源语言。</p>
 * @method void setSource(string $Source) 设置<p>原文本主要源语言。</p>
 * @method string getTarget() 获取<p>目标翻译语言。</p>
 * @method void setTarget(string $Target) 设置<p>目标翻译语言。</p>
 * @method string getSourceText() 获取<p>图片中的全部原文本。</p>
 * @method void setSourceText(string $SourceText) 设置<p>图片中的全部原文本。</p>
 * @method string getTargetText() 获取<p>图片中全部译文。</p>
 * @method void setTargetText(string $TargetText) 设置<p>图片中全部译文。</p>
 * @method float getAngle() 获取<p>逆时针图片角度，取值范围为0-359</p>
 * @method void setAngle(float $Angle) 设置<p>逆时针图片角度，取值范围为0-359</p>
 * @method array getTransDetails() 获取<p>翻译详情信息</p>
 * @method void setTransDetails(array $TransDetails) 设置<p>翻译详情信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ImageTranslateLLMResponse extends AbstractModel
{
    /**
     * @var string <p>图片数据的Base64字符串，输出格式为JPG。</p>
     */
    public $Data;

    /**
     * @var string <p>原文本主要源语言。</p>
     */
    public $Source;

    /**
     * @var string <p>目标翻译语言。</p>
     */
    public $Target;

    /**
     * @var string <p>图片中的全部原文本。</p>
     */
    public $SourceText;

    /**
     * @var string <p>图片中全部译文。</p>
     */
    public $TargetText;

    /**
     * @var float <p>逆时针图片角度，取值范围为0-359</p>
     */
    public $Angle;

    /**
     * @var array <p>翻译详情信息</p>
     */
    public $TransDetails;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Data <p>图片数据的Base64字符串，输出格式为JPG。</p>
     * @param string $Source <p>原文本主要源语言。</p>
     * @param string $Target <p>目标翻译语言。</p>
     * @param string $SourceText <p>图片中的全部原文本。</p>
     * @param string $TargetText <p>图片中全部译文。</p>
     * @param float $Angle <p>逆时针图片角度，取值范围为0-359</p>
     * @param array $TransDetails <p>翻译详情信息</p>
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("SourceText",$param) and $param["SourceText"] !== null) {
            $this->SourceText = $param["SourceText"];
        }

        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("TransDetails",$param) and $param["TransDetails"] !== null) {
            $this->TransDetails = [];
            foreach ($param["TransDetails"] as $key => $value){
                $obj = new TransDetail();
                $obj->deserialize($value);
                array_push($this->TransDetails, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
