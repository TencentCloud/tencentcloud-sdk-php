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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSceneVideoTask请求参数结构体
 *
 * @method string getModelName() 获取<p>模型名称。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。</p>
 * @method string getModelVersion() 获取<p>模型版本号。</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本号。</p>
 * @method string getSceneType() 获取<p>场景化类型。</p><p>枚举值：</p><ul><li>template_effect： 模板特效。</li></ul>
 * @method void setSceneType(string $SceneType) 设置<p>场景化类型。</p><p>枚举值：</p><ul><li>template_effect： 模板特效。</li></ul>
 * @method string getPrompt() 获取<p>输入的Prompt。避免出现违规词汇，审核会进行拦截。</p>
 * @method void setPrompt(string $Prompt) 设置<p>输入的Prompt。避免出现违规词汇，审核会进行拦截。</p>
 * @method integer getDuration() 获取<p>指定输出的视频时长。</p><p>部分场景不支持指定时长。</p>
 * @method void setDuration(integer $Duration) 设置<p>指定输出的视频时长。</p><p>部分场景不支持指定时长。</p>
 * @method string getImageUrl() 获取<p>输入的首帧参考图片Url。需外网可访问。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>输入的首帧参考图片Url。需外网可访问。</p>
 * @method string getLastImageUrl() 获取<p>输入的尾帧参考图片Url。</p>
 * @method void setLastImageUrl(string $LastImageUrl) 设置<p>输入的尾帧参考图片Url。</p>
 * @method array getImageInfos() 获取<p>多图参考生视频时，通过该参数指定多张参考图。</p>
 * @method void setImageInfos(array $ImageInfos) 设置<p>多图参考生视频时，通过该参数指定多张参考图。</p>
 * @method array getVideoInfos() 获取<p>视频编辑时，指定参考视频信息。</p>
 * @method void setVideoInfos(array $VideoInfos) 设置<p>视频编辑时，指定参考视频信息。</p>
 * @method SceneVideoExtraParam getExtraParameters() 获取<p>常规扩展参数。</p>
 * @method void setExtraParameters(SceneVideoExtraParam $ExtraParameters) 设置<p>常规扩展参数。</p>
 * @method string getAdditionalParameters() 获取<p>模型扩展参数，用于透传到模型侧。</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) 设置<p>模型扩展参数，用于透传到模型侧。</p>
 * @method SceneStoreCosParam getStoreCosParam() 获取<p>输出结果存储到私有cos，需授权响应角色权限。</p>
 * @method void setStoreCosParam(SceneStoreCosParam $StoreCosParam) 设置<p>输出结果存储到私有cos，需授权响应角色权限。</p>
 * @method string getOperator() 获取<p>操作者名称。</p>
 * @method void setOperator(string $Operator) 设置<p>操作者名称。</p>
 */
class CreateSceneVideoTaskRequest extends AbstractModel
{
    /**
     * @var string <p>模型名称。</p>
     */
    public $ModelName;

    /**
     * @var string <p>模型版本号。</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>场景化类型。</p><p>枚举值：</p><ul><li>template_effect： 模板特效。</li></ul>
     */
    public $SceneType;

    /**
     * @var string <p>输入的Prompt。避免出现违规词汇，审核会进行拦截。</p>
     */
    public $Prompt;

    /**
     * @var integer <p>指定输出的视频时长。</p><p>部分场景不支持指定时长。</p>
     */
    public $Duration;

    /**
     * @var string <p>输入的首帧参考图片Url。需外网可访问。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>输入的尾帧参考图片Url。</p>
     */
    public $LastImageUrl;

    /**
     * @var array <p>多图参考生视频时，通过该参数指定多张参考图。</p>
     */
    public $ImageInfos;

    /**
     * @var array <p>视频编辑时，指定参考视频信息。</p>
     */
    public $VideoInfos;

    /**
     * @var SceneVideoExtraParam <p>常规扩展参数。</p>
     */
    public $ExtraParameters;

    /**
     * @var string <p>模型扩展参数，用于透传到模型侧。</p>
     */
    public $AdditionalParameters;

    /**
     * @var SceneStoreCosParam <p>输出结果存储到私有cos，需授权响应角色权限。</p>
     */
    public $StoreCosParam;

    /**
     * @var string <p>操作者名称。</p>
     */
    public $Operator;

    /**
     * @param string $ModelName <p>模型名称。</p>
     * @param string $ModelVersion <p>模型版本号。</p>
     * @param string $SceneType <p>场景化类型。</p><p>枚举值：</p><ul><li>template_effect： 模板特效。</li></ul>
     * @param string $Prompt <p>输入的Prompt。避免出现违规词汇，审核会进行拦截。</p>
     * @param integer $Duration <p>指定输出的视频时长。</p><p>部分场景不支持指定时长。</p>
     * @param string $ImageUrl <p>输入的首帧参考图片Url。需外网可访问。</p>
     * @param string $LastImageUrl <p>输入的尾帧参考图片Url。</p>
     * @param array $ImageInfos <p>多图参考生视频时，通过该参数指定多张参考图。</p>
     * @param array $VideoInfos <p>视频编辑时，指定参考视频信息。</p>
     * @param SceneVideoExtraParam $ExtraParameters <p>常规扩展参数。</p>
     * @param string $AdditionalParameters <p>模型扩展参数，用于透传到模型侧。</p>
     * @param SceneStoreCosParam $StoreCosParam <p>输出结果存储到私有cos，需授权响应角色权限。</p>
     * @param string $Operator <p>操作者名称。</p>
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
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
                $obj = new SceneVideoReferenceImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfos, $obj);
            }
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new SceneVideoReferenceVideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }

        if (array_key_exists("ExtraParameters",$param) and $param["ExtraParameters"] !== null) {
            $this->ExtraParameters = new SceneVideoExtraParam();
            $this->ExtraParameters->deserialize($param["ExtraParameters"]);
        }

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
        }

        if (array_key_exists("StoreCosParam",$param) and $param["StoreCosParam"] !== null) {
            $this->StoreCosParam = new SceneStoreCosParam();
            $this->StoreCosParam->deserialize($param["StoreCosParam"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
