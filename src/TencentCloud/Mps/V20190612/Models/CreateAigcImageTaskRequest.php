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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAigcImageTask请求参数结构体
 *
 * @method string getModelName() 获取模型名称。
当前支持的模型列表：
Hunyuan,
GEM，
Qwen。
 * @method void setModelName(string $ModelName) 设置模型名称。
当前支持的模型列表：
Hunyuan,
GEM，
Qwen。
 * @method string getModelVersion() 获取指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。

1. GEM， 可选[2.5,3.0]。
 * @method void setModelVersion(string $ModelVersion) 设置指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。

1. GEM， 可选[2.5,3.0]。
 * @method string getPrompt() 获取生成图片的描述。(注：最大支持1000字符)。当未传入参考图片时，此参数必填。
 * @method void setPrompt(string $Prompt) 设置生成图片的描述。(注：最大支持1000字符)。当未传入参考图片时，此参数必填。
 * @method string getNegativePrompt() 获取用于描述您想要阻止模型生成的内容。 注意：部分模型支持。 例如： 顶部照明、明亮的色彩 人物、动物 多辆汽车、风。
 * @method void setNegativePrompt(string $NegativePrompt) 设置用于描述您想要阻止模型生成的内容。 注意：部分模型支持。 例如： 顶部照明、明亮的色彩 人物、动物 多辆汽车、风。
 * @method boolean getEnhancePrompt() 获取默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。
 * @method void setEnhancePrompt(boolean $EnhancePrompt) 设置默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。
 * @method array getImageInfos() 获取用于传入参考的资源图片信息，默认支持传入一张图片。

支持多图输入的模型：
1. GEM，可支持最多3张图片输入作为资源图。

注意：
1. 推荐图片小于7M，各模型限制不同。
2. 图片格式支持：jpeg, png, webp。
 * @method void setImageInfos(array $ImageInfos) 设置用于传入参考的资源图片信息，默认支持传入一张图片。

支持多图输入的模型：
1. GEM，可支持最多3张图片输入作为资源图。

注意：
1. 推荐图片小于7M，各模型限制不同。
2. 图片格式支持：jpeg, png, webp。
 * @method AigcImageExtraParam getExtraParameters() 获取用于传入模型要求的额外参数。
 * @method void setExtraParameters(AigcImageExtraParam $ExtraParameters) 设置用于传入模型要求的额外参数。
 * @method AigcStoreCosParam getStoreCosParam() 获取文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) 设置文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。
 * @method string getOperator() 获取接口操作者名称。
 * @method void setOperator(string $Operator) 设置接口操作者名称。
 */
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var string 模型名称。
当前支持的模型列表：
Hunyuan,
GEM，
Qwen。
     */
    public $ModelName;

    /**
     * @var string 指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。

1. GEM， 可选[2.5,3.0]。
     */
    public $ModelVersion;

    /**
     * @var string 生成图片的描述。(注：最大支持1000字符)。当未传入参考图片时，此参数必填。
     */
    public $Prompt;

    /**
     * @var string 用于描述您想要阻止模型生成的内容。 注意：部分模型支持。 例如： 顶部照明、明亮的色彩 人物、动物 多辆汽车、风。
     */
    public $NegativePrompt;

    /**
     * @var boolean 默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。
     */
    public $EnhancePrompt;

    /**
     * @var array 用于传入参考的资源图片信息，默认支持传入一张图片。

支持多图输入的模型：
1. GEM，可支持最多3张图片输入作为资源图。

注意：
1. 推荐图片小于7M，各模型限制不同。
2. 图片格式支持：jpeg, png, webp。
     */
    public $ImageInfos;

    /**
     * @var AigcImageExtraParam 用于传入模型要求的额外参数。
     */
    public $ExtraParameters;

    /**
     * @var AigcStoreCosParam 文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。
     */
    public $StoreCosParam;

    /**
     * @var string 接口操作者名称。
     */
    public $Operator;

    /**
     * @param string $ModelName 模型名称。
当前支持的模型列表：
Hunyuan,
GEM，
Qwen。
     * @param string $ModelVersion 指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。

1. GEM， 可选[2.5,3.0]。
     * @param string $Prompt 生成图片的描述。(注：最大支持1000字符)。当未传入参考图片时，此参数必填。
     * @param string $NegativePrompt 用于描述您想要阻止模型生成的内容。 注意：部分模型支持。 例如： 顶部照明、明亮的色彩 人物、动物 多辆汽车、风。
     * @param boolean $EnhancePrompt 默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。
     * @param array $ImageInfos 用于传入参考的资源图片信息，默认支持传入一张图片。

支持多图输入的模型：
1. GEM，可支持最多3张图片输入作为资源图。

注意：
1. 推荐图片小于7M，各模型限制不同。
2. 图片格式支持：jpeg, png, webp。
     * @param AigcImageExtraParam $ExtraParameters 用于传入模型要求的额外参数。
     * @param AigcStoreCosParam $StoreCosParam 文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。
     * @param string $Operator 接口操作者名称。
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("EnhancePrompt",$param) and $param["EnhancePrompt"] !== null) {
            $this->EnhancePrompt = $param["EnhancePrompt"];
        }

        if (array_key_exists("ImageInfos",$param) and $param["ImageInfos"] !== null) {
            $this->ImageInfos = [];
            foreach ($param["ImageInfos"] as $key => $value){
                $obj = new AigcImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfos, $obj);
            }
        }

        if (array_key_exists("ExtraParameters",$param) and $param["ExtraParameters"] !== null) {
            $this->ExtraParameters = new AigcImageExtraParam();
            $this->ExtraParameters->deserialize($param["ExtraParameters"]);
        }

        if (array_key_exists("StoreCosParam",$param) and $param["StoreCosParam"] !== null) {
            $this->StoreCosParam = new AigcStoreCosParam();
            $this->StoreCosParam->deserialize($param["StoreCosParam"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
