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
 * CreateAigcVideoTask请求参数结构体
 *
 * @method string getModelName() 获取模型名称。
当前支持的模型列表:
Hunyuan,
Hailuo，
Kling，
Jimeng，
Vidu，
OS，
GV。
 * @method void setModelName(string $ModelName) 设置模型名称。
当前支持的模型列表:
Hunyuan,
Hailuo，
Kling，
Jimeng，
Vidu，
OS，
GV。
 * @method string getModelVersion() 获取指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。
1. Hailuo， 可选[02、2.3]。
2. Kling，可选[2.0、2.1、2.5]。
3. Jimeng, 可选[3.0pro]。
4. Vidu,可选[q2、q2-pro、q2-turbo]。
4. GV, 可选[3.1]。
5. OS，可选[2.0]。
 * @method void setModelVersion(string $ModelVersion) 设置指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。
1. Hailuo， 可选[02、2.3]。
2. Kling，可选[2.0、2.1、2.5]。
3. Jimeng, 可选[3.0pro]。
4. Vidu,可选[q2、q2-pro、q2-turbo]。
4. GV, 可选[3.1]。
5. OS，可选[2.0]。
 * @method string getPrompt() 获取生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。
 * @method void setPrompt(string $Prompt) 设置生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。
 * @method string getNegativePrompt() 获取用于描述您想要阻止模型生成的内容。
注意：部分模型支持。
例如：
顶部照明、明亮的色彩
人物、动物
多辆汽车、风。
 * @method void setNegativePrompt(string $NegativePrompt) 设置用于描述您想要阻止模型生成的内容。
注意：部分模型支持。
例如：
顶部照明、明亮的色彩
人物、动物
多辆汽车、风。
 * @method boolean getEnhancePrompt() 获取默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。
 * @method void setEnhancePrompt(boolean $EnhancePrompt) 设置默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。
 * @method string getImageUrl() 获取用于指导视频生成的图片 URL。该URL需外网可访问。
注意：
1. 推荐图片大小不超过10M，不同模型大小限制不相同。
2. 支持的图片格式：jpeg、png。
3. 使用OS模型时，需输入图片尺寸为: 1280x720、720x1280。
 * @method void setImageUrl(string $ImageUrl) 设置用于指导视频生成的图片 URL。该URL需外网可访问。
注意：
1. 推荐图片大小不超过10M，不同模型大小限制不相同。
2. 支持的图片格式：jpeg、png。
3. 使用OS模型时，需输入图片尺寸为: 1280x720、720x1280。
 * @method string getLastImageUrl() 获取模型将以此参数传入的图片作为尾帧画面来生成视频。
支持此参数的模型：
1. GV，传入尾帧图片时，必须同时传入ImageUrl作为首帧。
2. Kling， 在Resolution:1080P的情况下 2.1版本支持首位帧。
3. Vidu, q2-pro, q2-turbo 支持首尾帧。

注意：
1. 推荐图片大小不超过10M，各模型限制不同。
2. 支持的图片格式：jpeg、png。
 * @method void setLastImageUrl(string $LastImageUrl) 设置模型将以此参数传入的图片作为尾帧画面来生成视频。
支持此参数的模型：
1. GV，传入尾帧图片时，必须同时传入ImageUrl作为首帧。
2. Kling， 在Resolution:1080P的情况下 2.1版本支持首位帧。
3. Vidu, q2-pro, q2-turbo 支持首尾帧。

注意：
1. 推荐图片大小不超过10M，各模型限制不同。
2. 支持的图片格式：jpeg、png。
 * @method array getImageInfos() 获取最多包含三张素材资源图片的列表，用于描述模型在生成视频时要使用的资源图片。

支持多图输入的模型：
1. GV，使用多图输入时，不可使用ImageUrl和LastImageUrl。
2. Vidu，支持多图参考生视频。q2模型1-7张图片，可通过ImageInfos里面的ReferenceType作为主体id来传入。

注意：
1. 图片大小不超过10M。
2. 支持的图片格式：jpeg、png。
 * @method void setImageInfos(array $ImageInfos) 设置最多包含三张素材资源图片的列表，用于描述模型在生成视频时要使用的资源图片。

支持多图输入的模型：
1. GV，使用多图输入时，不可使用ImageUrl和LastImageUrl。
2. Vidu，支持多图参考生视频。q2模型1-7张图片，可通过ImageInfos里面的ReferenceType作为主体id来传入。

注意：
1. 图片大小不超过10M。
2. 支持的图片格式：jpeg、png。
 * @method integer getDuration() 获取生成视频的时长。
注意：
1. Kling支持 5、10秒。默认: 5秒。
2. Jimeng支持5、10秒。 默认: 5秒。
3. Hailuo的std模式可支持6、10秒，其他仅6秒。默认：6秒。
4. Vidu支持1-10秒。
4. GV支持 8秒。 默认：8秒。
5. OS支持4、8、12秒。 默认：8秒。
 * @method void setDuration(integer $Duration) 设置生成视频的时长。
注意：
1. Kling支持 5、10秒。默认: 5秒。
2. Jimeng支持5、10秒。 默认: 5秒。
3. Hailuo的std模式可支持6、10秒，其他仅6秒。默认：6秒。
4. Vidu支持1-10秒。
4. GV支持 8秒。 默认：8秒。
5. OS支持4、8、12秒。 默认：8秒。
 * @method AigcVideoExtraParam getExtraParameters() 获取用于传入模型要求的额外参数。
 * @method void setExtraParameters(AigcVideoExtraParam $ExtraParameters) 设置用于传入模型要求的额外参数。
 * @method AigcStoreCosParam getStoreCosParam() 获取文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) 设置文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。
 * @method string getOperator() 获取接口操作者名称。
 * @method void setOperator(string $Operator) 设置接口操作者名称。
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var string 模型名称。
当前支持的模型列表:
Hunyuan,
Hailuo，
Kling，
Jimeng，
Vidu，
OS，
GV。
     */
    public $ModelName;

    /**
     * @var string 指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。
1. Hailuo， 可选[02、2.3]。
2. Kling，可选[2.0、2.1、2.5]。
3. Jimeng, 可选[3.0pro]。
4. Vidu,可选[q2、q2-pro、q2-turbo]。
4. GV, 可选[3.1]。
5. OS，可选[2.0]。
     */
    public $ModelVersion;

    /**
     * @var string 生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。
     */
    public $Prompt;

    /**
     * @var string 用于描述您想要阻止模型生成的内容。
注意：部分模型支持。
例如：
顶部照明、明亮的色彩
人物、动物
多辆汽车、风。
     */
    public $NegativePrompt;

    /**
     * @var boolean 默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。
     */
    public $EnhancePrompt;

    /**
     * @var string 用于指导视频生成的图片 URL。该URL需外网可访问。
注意：
1. 推荐图片大小不超过10M，不同模型大小限制不相同。
2. 支持的图片格式：jpeg、png。
3. 使用OS模型时，需输入图片尺寸为: 1280x720、720x1280。
     */
    public $ImageUrl;

    /**
     * @var string 模型将以此参数传入的图片作为尾帧画面来生成视频。
支持此参数的模型：
1. GV，传入尾帧图片时，必须同时传入ImageUrl作为首帧。
2. Kling， 在Resolution:1080P的情况下 2.1版本支持首位帧。
3. Vidu, q2-pro, q2-turbo 支持首尾帧。

注意：
1. 推荐图片大小不超过10M，各模型限制不同。
2. 支持的图片格式：jpeg、png。
     */
    public $LastImageUrl;

    /**
     * @var array 最多包含三张素材资源图片的列表，用于描述模型在生成视频时要使用的资源图片。

支持多图输入的模型：
1. GV，使用多图输入时，不可使用ImageUrl和LastImageUrl。
2. Vidu，支持多图参考生视频。q2模型1-7张图片，可通过ImageInfos里面的ReferenceType作为主体id来传入。

注意：
1. 图片大小不超过10M。
2. 支持的图片格式：jpeg、png。
     */
    public $ImageInfos;

    /**
     * @var integer 生成视频的时长。
注意：
1. Kling支持 5、10秒。默认: 5秒。
2. Jimeng支持5、10秒。 默认: 5秒。
3. Hailuo的std模式可支持6、10秒，其他仅6秒。默认：6秒。
4. Vidu支持1-10秒。
4. GV支持 8秒。 默认：8秒。
5. OS支持4、8、12秒。 默认：8秒。
     */
    public $Duration;

    /**
     * @var AigcVideoExtraParam 用于传入模型要求的额外参数。
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
当前支持的模型列表:
Hunyuan,
Hailuo，
Kling，
Jimeng，
Vidu，
OS，
GV。
     * @param string $ModelVersion 指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。
1. Hailuo， 可选[02、2.3]。
2. Kling，可选[2.0、2.1、2.5]。
3. Jimeng, 可选[3.0pro]。
4. Vidu,可选[q2、q2-pro、q2-turbo]。
4. GV, 可选[3.1]。
5. OS，可选[2.0]。
     * @param string $Prompt 生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。
     * @param string $NegativePrompt 用于描述您想要阻止模型生成的内容。
注意：部分模型支持。
例如：
顶部照明、明亮的色彩
人物、动物
多辆汽车、风。
     * @param boolean $EnhancePrompt 默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。
     * @param string $ImageUrl 用于指导视频生成的图片 URL。该URL需外网可访问。
注意：
1. 推荐图片大小不超过10M，不同模型大小限制不相同。
2. 支持的图片格式：jpeg、png。
3. 使用OS模型时，需输入图片尺寸为: 1280x720、720x1280。
     * @param string $LastImageUrl 模型将以此参数传入的图片作为尾帧画面来生成视频。
支持此参数的模型：
1. GV，传入尾帧图片时，必须同时传入ImageUrl作为首帧。
2. Kling， 在Resolution:1080P的情况下 2.1版本支持首位帧。
3. Vidu, q2-pro, q2-turbo 支持首尾帧。

注意：
1. 推荐图片大小不超过10M，各模型限制不同。
2. 支持的图片格式：jpeg、png。
     * @param array $ImageInfos 最多包含三张素材资源图片的列表，用于描述模型在生成视频时要使用的资源图片。

支持多图输入的模型：
1. GV，使用多图输入时，不可使用ImageUrl和LastImageUrl。
2. Vidu，支持多图参考生视频。q2模型1-7张图片，可通过ImageInfos里面的ReferenceType作为主体id来传入。

注意：
1. 图片大小不超过10M。
2. 支持的图片格式：jpeg、png。
     * @param integer $Duration 生成视频的时长。
注意：
1. Kling支持 5、10秒。默认: 5秒。
2. Jimeng支持5、10秒。 默认: 5秒。
3. Hailuo的std模式可支持6、10秒，其他仅6秒。默认：6秒。
4. Vidu支持1-10秒。
4. GV支持 8秒。 默认：8秒。
5. OS支持4、8、12秒。 默认：8秒。
     * @param AigcVideoExtraParam $ExtraParameters 用于传入模型要求的额外参数。
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

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("LastImageUrl",$param) and $param["LastImageUrl"] !== null) {
            $this->LastImageUrl = $param["LastImageUrl"];
        }

        if (array_key_exists("ImageInfos",$param) and $param["ImageInfos"] !== null) {
            $this->ImageInfos = [];
            foreach ($param["ImageInfos"] as $key => $value){
                $obj = new AigcVideoReferenceImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfos, $obj);
            }
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ExtraParameters",$param) and $param["ExtraParameters"] !== null) {
            $this->ExtraParameters = new AigcVideoExtraParam();
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
