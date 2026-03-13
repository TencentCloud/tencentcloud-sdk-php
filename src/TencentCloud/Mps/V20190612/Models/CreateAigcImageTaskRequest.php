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
 * @method string getModelName() 获取<p>模型名称。<br>当前支持的模型列表：<br>Hunyuan,<br>GEM，<br>Qwen。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。<br>当前支持的模型列表：<br>Hunyuan,<br>GEM，<br>Qwen。</p>
 * @method string getModelVersion() 获取<p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p><ol><li>GEM， 可选[2.5,3.0]。</li></ol>
 * @method void setModelVersion(string $ModelVersion) 设置<p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p><ol><li>GEM， 可选[2.5,3.0]。</li></ol>
 * @method string getPrompt() 获取<p>生成图片的描述。(注：最大支持1000字符)。当未传入参考图片时，此参数必填。</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成图片的描述。(注：最大支持1000字符)。当未传入参考图片时，此参数必填。</p>
 * @method string getNegativePrompt() 获取<p>用于描述您想要阻止模型生成的内容。 注意：部分模型支持。 例如： 顶部照明、明亮的色彩 人物、动物 多辆汽车、风。</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>用于描述您想要阻止模型生成的内容。 注意：部分模型支持。 例如： 顶部照明、明亮的色彩 人物、动物 多辆汽车、风。</p>
 * @method boolean getEnhancePrompt() 获取<p>默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。</p>
 * @method void setEnhancePrompt(boolean $EnhancePrompt) 设置<p>默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。</p>
 * @method array getImageInfos() 获取<p>用于传入参考的资源图片信息，默认支持传入一张图片。</p><p>支持多图输入的模型：</p><ol><li>GEM，可支持最多3张图片输入作为资源图。</li></ol><p>注意：</p><ol><li>推荐图片小于7M，各模型限制不同。</li><li>图片格式支持：jpeg, png, webp。</li></ol>
 * @method void setImageInfos(array $ImageInfos) 设置<p>用于传入参考的资源图片信息，默认支持传入一张图片。</p><p>支持多图输入的模型：</p><ol><li>GEM，可支持最多3张图片输入作为资源图。</li></ol><p>注意：</p><ol><li>推荐图片小于7M，各模型限制不同。</li><li>图片格式支持：jpeg, png, webp。</li></ol>
 * @method AigcImageExtraParam getExtraParameters() 获取<p>用于传入模型要求的额外参数。</p>
 * @method void setExtraParameters(AigcImageExtraParam $ExtraParameters) 设置<p>用于传入模型要求的额外参数。</p>
 * @method string getAdditionalParameters() 获取<p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。 示例： {"size":"2048x2048"}</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) 设置<p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。 示例： {"size":"2048x2048"}</p>
 * @method AigcStoreCosParam getStoreCosParam() 获取<p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) 设置<p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
 * @method string getOperator() 获取<p>接口操作者名称。</p>
 * @method void setOperator(string $Operator) 设置<p>接口操作者名称。</p>
 */
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var string <p>模型名称。<br>当前支持的模型列表：<br>Hunyuan,<br>GEM，<br>Qwen。</p>
     */
    public $ModelName;

    /**
     * @var string <p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p><ol><li>GEM， 可选[2.5,3.0]。</li></ol>
     */
    public $ModelVersion;

    /**
     * @var string <p>生成图片的描述。(注：最大支持1000字符)。当未传入参考图片时，此参数必填。</p>
     */
    public $Prompt;

    /**
     * @var string <p>用于描述您想要阻止模型生成的内容。 注意：部分模型支持。 例如： 顶部照明、明亮的色彩 人物、动物 多辆汽车、风。</p>
     */
    public $NegativePrompt;

    /**
     * @var boolean <p>默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。</p>
     */
    public $EnhancePrompt;

    /**
     * @var array <p>用于传入参考的资源图片信息，默认支持传入一张图片。</p><p>支持多图输入的模型：</p><ol><li>GEM，可支持最多3张图片输入作为资源图。</li></ol><p>注意：</p><ol><li>推荐图片小于7M，各模型限制不同。</li><li>图片格式支持：jpeg, png, webp。</li></ol>
     */
    public $ImageInfos;

    /**
     * @var AigcImageExtraParam <p>用于传入模型要求的额外参数。</p>
     */
    public $ExtraParameters;

    /**
     * @var string <p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。 示例： {"size":"2048x2048"}</p>
     */
    public $AdditionalParameters;

    /**
     * @var AigcStoreCosParam <p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
     */
    public $StoreCosParam;

    /**
     * @var string <p>接口操作者名称。</p>
     */
    public $Operator;

    /**
     * @param string $ModelName <p>模型名称。<br>当前支持的模型列表：<br>Hunyuan,<br>GEM，<br>Qwen。</p>
     * @param string $ModelVersion <p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p><ol><li>GEM， 可选[2.5,3.0]。</li></ol>
     * @param string $Prompt <p>生成图片的描述。(注：最大支持1000字符)。当未传入参考图片时，此参数必填。</p>
     * @param string $NegativePrompt <p>用于描述您想要阻止模型生成的内容。 注意：部分模型支持。 例如： 顶部照明、明亮的色彩 人物、动物 多辆汽车、风。</p>
     * @param boolean $EnhancePrompt <p>默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。</p>
     * @param array $ImageInfos <p>用于传入参考的资源图片信息，默认支持传入一张图片。</p><p>支持多图输入的模型：</p><ol><li>GEM，可支持最多3张图片输入作为资源图。</li></ol><p>注意：</p><ol><li>推荐图片小于7M，各模型限制不同。</li><li>图片格式支持：jpeg, png, webp。</li></ol>
     * @param AigcImageExtraParam $ExtraParameters <p>用于传入模型要求的额外参数。</p>
     * @param string $AdditionalParameters <p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。 示例： {"size":"2048x2048"}</p>
     * @param AigcStoreCosParam $StoreCosParam <p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
     * @param string $Operator <p>接口操作者名称。</p>
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

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
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
