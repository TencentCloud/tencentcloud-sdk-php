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
 * @method string getModelName() 获取<p>模型名称。<br>当前支持的模型列表:<br>Hunyuan,<br>Hailuo，<br>Kling，<br>Vidu，<br>OS，<br>GV。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。<br>当前支持的模型列表:<br>Hunyuan,<br>Hailuo，<br>Kling，<br>Vidu，<br>OS，<br>GV。</p>
 * @method string getModelVersion() 获取<p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p><ol><li>Hailuo， 可选[02、2.3]。</li><li>Kling，可选[2.0、2.1、2.5、O1、2.6、3.0、3.0-Omni]。</li><li>Vidu,可选[q2、q2-pro、q2-turbo、q3-pro、q3-turbo]。</li><li>GV, 可选[3.1]。</li><li>OS，可选[2.0]。</li></ol>
 * @method void setModelVersion(string $ModelVersion) 设置<p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p><ol><li>Hailuo， 可选[02、2.3]。</li><li>Kling，可选[2.0、2.1、2.5、O1、2.6、3.0、3.0-Omni]。</li><li>Vidu,可选[q2、q2-pro、q2-turbo、q3-pro、q3-turbo]。</li><li>GV, 可选[3.1]。</li><li>OS，可选[2.0]。</li></ol>
 * @method string getSceneType() 获取<p>指定场景生视频。<br>注意：仅部分模型支持指定场景。</p><ol><li>Kling支持动作控制，motion_control。</li><li>Mingmou支持横转竖，land2port。</li><li>Vidu支持特效模板，template_effect。</li></ol>
 * @method void setSceneType(string $SceneType) 设置<p>指定场景生视频。<br>注意：仅部分模型支持指定场景。</p><ol><li>Kling支持动作控制，motion_control。</li><li>Mingmou支持横转竖，land2port。</li><li>Vidu支持特效模板，template_effect。</li></ol>
 * @method string getPrompt() 获取<p>生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。</p>
 * @method string getNegativePrompt() 获取<p>用于描述您想要阻止模型生成的内容。<br>注意：部分模型支持。<br>例如：<br>顶部照明、明亮的色彩<br>人物、动物<br>多辆汽车、风。</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>用于描述您想要阻止模型生成的内容。<br>注意：部分模型支持。<br>例如：<br>顶部照明、明亮的色彩<br>人物、动物<br>多辆汽车、风。</p>
 * @method boolean getEnhancePrompt() 获取<p>默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。</p>
 * @method void setEnhancePrompt(boolean $EnhancePrompt) 设置<p>默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。</p>
 * @method string getImageUrl() 获取<p>用于指导视频生成的图片 URL。该URL需外网可访问。<br>注意：</p><ol><li>推荐图片大小不超过10M，不同模型大小限制不相同。</li><li>支持的图片格式：jpeg、png。</li><li>使用OS模型时，需输入图片尺寸为: 1280x720、720x1280。</li></ol>
 * @method void setImageUrl(string $ImageUrl) 设置<p>用于指导视频生成的图片 URL。该URL需外网可访问。<br>注意：</p><ol><li>推荐图片大小不超过10M，不同模型大小限制不相同。</li><li>支持的图片格式：jpeg、png。</li><li>使用OS模型时，需输入图片尺寸为: 1280x720、720x1280。</li></ol>
 * @method string getLastImageUrl() 获取<p>模型将以此参数传入的图片作为尾帧画面来生成视频。<br>支持此参数的模型：</p><ol><li>GV，传入尾帧图片时，必须同时传入ImageUrl作为首帧。</li><li>Kling， 在Resolution:1080P的情况下 2.1版本支持首尾帧。</li><li>Vidu, q2-pro, q2-turbo 支持首尾帧。</li></ol><p>注意：</p><ol><li>推荐图片大小不超过10M，各模型限制不同。</li><li>支持的图片格式：jpeg、png。</li></ol>
 * @method void setLastImageUrl(string $LastImageUrl) 设置<p>模型将以此参数传入的图片作为尾帧画面来生成视频。<br>支持此参数的模型：</p><ol><li>GV，传入尾帧图片时，必须同时传入ImageUrl作为首帧。</li><li>Kling， 在Resolution:1080P的情况下 2.1版本支持首尾帧。</li><li>Vidu, q2-pro, q2-turbo 支持首尾帧。</li></ol><p>注意：</p><ol><li>推荐图片大小不超过10M，各模型限制不同。</li><li>支持的图片格式：jpeg、png。</li></ol>
 * @method array getImageInfos() 获取<p>最多包含三张素材资源图片的列表，用于描述模型在生成视频时要使用的资源图片。</p><p>支持多图输入的模型：</p><ol><li>GV，使用多图输入时，不可使用ImageUrl和LastImageUrl。</li><li>Vidu，支持多图参考生视频。q2模型1-7张图片，可通过ImageInfos里面的ReferenceType作为主体id来传入。</li></ol><p>注意：</p><ol><li>图片大小不超过10M。</li><li>支持的图片格式：jpeg、png。</li></ol>
 * @method void setImageInfos(array $ImageInfos) 设置<p>最多包含三张素材资源图片的列表，用于描述模型在生成视频时要使用的资源图片。</p><p>支持多图输入的模型：</p><ol><li>GV，使用多图输入时，不可使用ImageUrl和LastImageUrl。</li><li>Vidu，支持多图参考生视频。q2模型1-7张图片，可通过ImageInfos里面的ReferenceType作为主体id来传入。</li></ol><p>注意：</p><ol><li>图片大小不超过10M。</li><li>支持的图片格式：jpeg、png。</li></ol>
 * @method array getVideoInfos() 获取<p>目前仅Kling O1版本支持参考视频信息传入。<br>可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声。</p>
 * @method void setVideoInfos(array $VideoInfos) 设置<p>目前仅Kling O1版本支持参考视频信息传入。<br>可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声。</p>
 * @method integer getDuration() 获取<p>生成视频的时长。<br>注意：</p><ol><li>Kling支持 5、10秒。默认: 5秒。</li><li>Hailuo的std模式可支持6、10秒，其他仅6秒。默认：6秒。</li><li>Vidu支持1-10秒。</li><li>GV支持 8秒。 默认：8秒。</li><li>OS支持4、8、12秒。 默认：8秒。</li></ol>
 * @method void setDuration(integer $Duration) 设置<p>生成视频的时长。<br>注意：</p><ol><li>Kling支持 5、10秒。默认: 5秒。</li><li>Hailuo的std模式可支持6、10秒，其他仅6秒。默认：6秒。</li><li>Vidu支持1-10秒。</li><li>GV支持 8秒。 默认：8秒。</li><li>OS支持4、8、12秒。 默认：8秒。</li></ol>
 * @method AigcVideoExtraParam getExtraParameters() 获取<p>用于传入要求的额外参数。</p>
 * @method void setExtraParameters(AigcVideoExtraParam $ExtraParameters) 设置<p>用于传入要求的额外参数。</p>
 * @method AigcStoreCosParam getStoreCosParam() 获取<p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) 设置<p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
 * @method string getAdditionalParameters() 获取<p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例：<br>{"camera_control":{"type":"simple"}}</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) 设置<p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例：<br>{"camera_control":{"type":"simple"}}</p>
 * @method string getOperator() 获取<p>接口操作者名称。</p>
 * @method void setOperator(string $Operator) 设置<p>接口操作者名称。</p>
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var string <p>模型名称。<br>当前支持的模型列表:<br>Hunyuan,<br>Hailuo，<br>Kling，<br>Vidu，<br>OS，<br>GV。</p>
     */
    public $ModelName;

    /**
     * @var string <p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p><ol><li>Hailuo， 可选[02、2.3]。</li><li>Kling，可选[2.0、2.1、2.5、O1、2.6、3.0、3.0-Omni]。</li><li>Vidu,可选[q2、q2-pro、q2-turbo、q3-pro、q3-turbo]。</li><li>GV, 可选[3.1]。</li><li>OS，可选[2.0]。</li></ol>
     */
    public $ModelVersion;

    /**
     * @var string <p>指定场景生视频。<br>注意：仅部分模型支持指定场景。</p><ol><li>Kling支持动作控制，motion_control。</li><li>Mingmou支持横转竖，land2port。</li><li>Vidu支持特效模板，template_effect。</li></ol>
     */
    public $SceneType;

    /**
     * @var string <p>生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。</p>
     */
    public $Prompt;

    /**
     * @var string <p>用于描述您想要阻止模型生成的内容。<br>注意：部分模型支持。<br>例如：<br>顶部照明、明亮的色彩<br>人物、动物<br>多辆汽车、风。</p>
     */
    public $NegativePrompt;

    /**
     * @var boolean <p>默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。</p>
     */
    public $EnhancePrompt;

    /**
     * @var string <p>用于指导视频生成的图片 URL。该URL需外网可访问。<br>注意：</p><ol><li>推荐图片大小不超过10M，不同模型大小限制不相同。</li><li>支持的图片格式：jpeg、png。</li><li>使用OS模型时，需输入图片尺寸为: 1280x720、720x1280。</li></ol>
     */
    public $ImageUrl;

    /**
     * @var string <p>模型将以此参数传入的图片作为尾帧画面来生成视频。<br>支持此参数的模型：</p><ol><li>GV，传入尾帧图片时，必须同时传入ImageUrl作为首帧。</li><li>Kling， 在Resolution:1080P的情况下 2.1版本支持首尾帧。</li><li>Vidu, q2-pro, q2-turbo 支持首尾帧。</li></ol><p>注意：</p><ol><li>推荐图片大小不超过10M，各模型限制不同。</li><li>支持的图片格式：jpeg、png。</li></ol>
     */
    public $LastImageUrl;

    /**
     * @var array <p>最多包含三张素材资源图片的列表，用于描述模型在生成视频时要使用的资源图片。</p><p>支持多图输入的模型：</p><ol><li>GV，使用多图输入时，不可使用ImageUrl和LastImageUrl。</li><li>Vidu，支持多图参考生视频。q2模型1-7张图片，可通过ImageInfos里面的ReferenceType作为主体id来传入。</li></ol><p>注意：</p><ol><li>图片大小不超过10M。</li><li>支持的图片格式：jpeg、png。</li></ol>
     */
    public $ImageInfos;

    /**
     * @var array <p>目前仅Kling O1版本支持参考视频信息传入。<br>可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声。</p>
     */
    public $VideoInfos;

    /**
     * @var integer <p>生成视频的时长。<br>注意：</p><ol><li>Kling支持 5、10秒。默认: 5秒。</li><li>Hailuo的std模式可支持6、10秒，其他仅6秒。默认：6秒。</li><li>Vidu支持1-10秒。</li><li>GV支持 8秒。 默认：8秒。</li><li>OS支持4、8、12秒。 默认：8秒。</li></ol>
     */
    public $Duration;

    /**
     * @var AigcVideoExtraParam <p>用于传入要求的额外参数。</p>
     */
    public $ExtraParameters;

    /**
     * @var AigcStoreCosParam <p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
     */
    public $StoreCosParam;

    /**
     * @var string <p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例：<br>{"camera_control":{"type":"simple"}}</p>
     */
    public $AdditionalParameters;

    /**
     * @var string <p>接口操作者名称。</p>
     */
    public $Operator;

    /**
     * @param string $ModelName <p>模型名称。<br>当前支持的模型列表:<br>Hunyuan,<br>Hailuo，<br>Kling，<br>Vidu，<br>OS，<br>GV。</p>
     * @param string $ModelVersion <p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p><ol><li>Hailuo， 可选[02、2.3]。</li><li>Kling，可选[2.0、2.1、2.5、O1、2.6、3.0、3.0-Omni]。</li><li>Vidu,可选[q2、q2-pro、q2-turbo、q3-pro、q3-turbo]。</li><li>GV, 可选[3.1]。</li><li>OS，可选[2.0]。</li></ol>
     * @param string $SceneType <p>指定场景生视频。<br>注意：仅部分模型支持指定场景。</p><ol><li>Kling支持动作控制，motion_control。</li><li>Mingmou支持横转竖，land2port。</li><li>Vidu支持特效模板，template_effect。</li></ol>
     * @param string $Prompt <p>生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。</p>
     * @param string $NegativePrompt <p>用于描述您想要阻止模型生成的内容。<br>注意：部分模型支持。<br>例如：<br>顶部照明、明亮的色彩<br>人物、动物<br>多辆汽车、风。</p>
     * @param boolean $EnhancePrompt <p>默认取值为False，模型会严格地遵循指令。如果需要更精细的prompt获得最佳效果，可将此参数设置为True，将自动优化传入的prompt，以提升生成质量。</p>
     * @param string $ImageUrl <p>用于指导视频生成的图片 URL。该URL需外网可访问。<br>注意：</p><ol><li>推荐图片大小不超过10M，不同模型大小限制不相同。</li><li>支持的图片格式：jpeg、png。</li><li>使用OS模型时，需输入图片尺寸为: 1280x720、720x1280。</li></ol>
     * @param string $LastImageUrl <p>模型将以此参数传入的图片作为尾帧画面来生成视频。<br>支持此参数的模型：</p><ol><li>GV，传入尾帧图片时，必须同时传入ImageUrl作为首帧。</li><li>Kling， 在Resolution:1080P的情况下 2.1版本支持首尾帧。</li><li>Vidu, q2-pro, q2-turbo 支持首尾帧。</li></ol><p>注意：</p><ol><li>推荐图片大小不超过10M，各模型限制不同。</li><li>支持的图片格式：jpeg、png。</li></ol>
     * @param array $ImageInfos <p>最多包含三张素材资源图片的列表，用于描述模型在生成视频时要使用的资源图片。</p><p>支持多图输入的模型：</p><ol><li>GV，使用多图输入时，不可使用ImageUrl和LastImageUrl。</li><li>Vidu，支持多图参考生视频。q2模型1-7张图片，可通过ImageInfos里面的ReferenceType作为主体id来传入。</li></ol><p>注意：</p><ol><li>图片大小不超过10M。</li><li>支持的图片格式：jpeg、png。</li></ol>
     * @param array $VideoInfos <p>目前仅Kling O1版本支持参考视频信息传入。<br>可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声。</p>
     * @param integer $Duration <p>生成视频的时长。<br>注意：</p><ol><li>Kling支持 5、10秒。默认: 5秒。</li><li>Hailuo的std模式可支持6、10秒，其他仅6秒。默认：6秒。</li><li>Vidu支持1-10秒。</li><li>GV支持 8秒。 默认：8秒。</li><li>OS支持4、8、12秒。 默认：8秒。</li></ol>
     * @param AigcVideoExtraParam $ExtraParameters <p>用于传入要求的额外参数。</p>
     * @param AigcStoreCosParam $StoreCosParam <p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
     * @param string $AdditionalParameters <p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例：<br>{"camera_control":{"type":"simple"}}</p>
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

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
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

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new AigcVideoReferenceVideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
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

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
