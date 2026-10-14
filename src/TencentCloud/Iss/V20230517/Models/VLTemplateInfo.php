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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视觉理解模板信息
 *
 * @method string getVLTemplateId() 获取<p>模板ID</p>
 * @method void setVLTemplateId(string $VLTemplateId) 设置<p>模板ID</p>
 * @method string getAIModel() 获取<p>AI 模型</p><p>枚举值：</p><ul><li>IVC-G： 视图默认大模型</li></ul>
 * @method void setAIModel(string $AIModel) 设置<p>AI 模型</p><p>枚举值：</p><ul><li>IVC-G： 视图默认大模型</li></ul>
 * @method string getName() 获取<p>AI场景名称</p>
 * @method void setName(string $Name) 设置<p>AI场景名称</p>
 * @method string getDescribe() 获取<p>AI场景描述</p>
 * @method void setDescribe(string $Describe) 设置<p>AI场景描述</p>
 * @method string getPrompt() 获取<p>提示词</p>
 * @method void setPrompt(string $Prompt) 设置<p>提示词</p>
 * @method string getAnalysisMode() 获取<p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
 * @method void setAnalysisMode(string $AnalysisMode) 设置<p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
 * @method ImageSceneInfo getImageConfig() 获取<p>图片场景配置</p>
 * @method void setImageConfig(ImageSceneInfo $ImageConfig) 设置<p>图片场景配置</p>
 * @method array getTimes() 获取<p>生效时段列表</p>
 * @method void setTimes(array $Times) 设置<p>生效时段列表</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getUpdatedAt() 获取<p>最近一次更新时间</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>最近一次更新时间</p>
 * @method boolean getIsUsed() 获取<p>是否关联到视觉理解计划</p>
 * @method void setIsUsed(boolean $IsUsed) 设置<p>是否关联到视觉理解计划</p>
 * @method VideoSceneInfo getVideoConfig() 获取<p>视频场景配置</p>
 * @method void setVideoConfig(VideoSceneInfo $VideoConfig) 设置<p>视频场景配置</p>
 */
class VLTemplateInfo extends AbstractModel
{
    /**
     * @var string <p>模板ID</p>
     */
    public $VLTemplateId;

    /**
     * @var string <p>AI 模型</p><p>枚举值：</p><ul><li>IVC-G： 视图默认大模型</li></ul>
     */
    public $AIModel;

    /**
     * @var string <p>AI场景名称</p>
     */
    public $Name;

    /**
     * @var string <p>AI场景描述</p>
     */
    public $Describe;

    /**
     * @var string <p>提示词</p>
     */
    public $Prompt;

    /**
     * @var string <p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
     */
    public $AnalysisMode;

    /**
     * @var ImageSceneInfo <p>图片场景配置</p>
     */
    public $ImageConfig;

    /**
     * @var array <p>生效时段列表</p>
     */
    public $Times;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>最近一次更新时间</p>
     */
    public $UpdatedAt;

    /**
     * @var boolean <p>是否关联到视觉理解计划</p>
     */
    public $IsUsed;

    /**
     * @var VideoSceneInfo <p>视频场景配置</p>
     */
    public $VideoConfig;

    /**
     * @param string $VLTemplateId <p>模板ID</p>
     * @param string $AIModel <p>AI 模型</p><p>枚举值：</p><ul><li>IVC-G： 视图默认大模型</li></ul>
     * @param string $Name <p>AI场景名称</p>
     * @param string $Describe <p>AI场景描述</p>
     * @param string $Prompt <p>提示词</p>
     * @param string $AnalysisMode <p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
     * @param ImageSceneInfo $ImageConfig <p>图片场景配置</p>
     * @param array $Times <p>生效时段列表</p>
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $UpdatedAt <p>最近一次更新时间</p>
     * @param boolean $IsUsed <p>是否关联到视觉理解计划</p>
     * @param VideoSceneInfo $VideoConfig <p>视频场景配置</p>
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
        if (array_key_exists("VLTemplateId",$param) and $param["VLTemplateId"] !== null) {
            $this->VLTemplateId = $param["VLTemplateId"];
        }

        if (array_key_exists("AIModel",$param) and $param["AIModel"] !== null) {
            $this->AIModel = $param["AIModel"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }

        if (array_key_exists("ImageConfig",$param) and $param["ImageConfig"] !== null) {
            $this->ImageConfig = new ImageSceneInfo();
            $this->ImageConfig->deserialize($param["ImageConfig"]);
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new EffectiveTime();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("IsUsed",$param) and $param["IsUsed"] !== null) {
            $this->IsUsed = $param["IsUsed"];
        }

        if (array_key_exists("VideoConfig",$param) and $param["VideoConfig"] !== null) {
            $this->VideoConfig = new VideoSceneInfo();
            $this->VideoConfig->deserialize($param["VideoConfig"]);
        }
    }
}
