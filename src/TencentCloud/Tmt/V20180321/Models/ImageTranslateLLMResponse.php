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
 * @method string getData() 获取图片数据的Base64字符串，输出格式为JPG。

 * @method void setData(string $Data) 设置图片数据的Base64字符串，输出格式为JPG。

 * @method string getSource() 获取原文本主要源语言。
 * @method void setSource(string $Source) 设置原文本主要源语言。
 * @method string getTarget() 获取目标翻译语言。
 * @method void setTarget(string $Target) 设置目标翻译语言。
 * @method string getSourceText() 获取图片中的全部原文本。
 * @method void setSourceText(string $SourceText) 设置图片中的全部原文本。
 * @method string getTargetText() 获取图片中全部译文。
 * @method void setTargetText(string $TargetText) 设置图片中全部译文。
 * @method float getAngle() 获取逆时针图片角度，取值范围为0-359
 * @method void setAngle(float $Angle) 设置逆时针图片角度，取值范围为0-359
 * @method array getTransDetails() 获取翻译详情信息
 * @method void setTransDetails(array $TransDetails) 设置翻译详情信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ImageTranslateLLMResponse extends AbstractModel
{
    /**
     * @var string 图片数据的Base64字符串，输出格式为JPG。

     */
    public $Data;

    /**
     * @var string 原文本主要源语言。
     */
    public $Source;

    /**
     * @var string 目标翻译语言。
     */
    public $Target;

    /**
     * @var string 图片中的全部原文本。
     */
    public $SourceText;

    /**
     * @var string 图片中全部译文。
     */
    public $TargetText;

    /**
     * @var float 逆时针图片角度，取值范围为0-359
     */
    public $Angle;

    /**
     * @var array 翻译详情信息
     */
    public $TransDetails;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Data 图片数据的Base64字符串，输出格式为JPG。

     * @param string $Source 原文本主要源语言。
     * @param string $Target 目标翻译语言。
     * @param string $SourceText 图片中的全部原文本。
     * @param string $TargetText 图片中全部译文。
     * @param float $Angle 逆时针图片角度，取值范围为0-359
     * @param array $TransDetails 翻译详情信息
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
