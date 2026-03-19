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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型详情
 *
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method string getModelId() 获取模型ID
 * @method void setModelId(string $ModelId) 设置模型ID
 * @method string getDescription() 获取应用描述	
 * @method void setDescription(string $Description) 设置应用描述	
 * @method string getCommunityUrl() 获取官方社区链接	
 * @method void setCommunityUrl(string $CommunityUrl) 设置官方社区链接	
 * @method string getGuideUrl() 获取最佳实践链接
 * @method void setGuideUrl(string $GuideUrl) 设置最佳实践链接
 * @method string getModelState() 获取模型状态
 * @method void setModelState(string $ModelState) 设置模型状态
 * @method array getTags() 获取应用对应的标签，如机器学习
 * @method void setTags(array $Tags) 设置应用对应的标签，如机器学习
 * @method string getConfigEnvironment() 获取配置环境
 * @method void setConfigEnvironment(string $ConfigEnvironment) 设置配置环境
 */
class ModelDetail extends AbstractModel
{
    /**
     * @var string 模型名称
     */
    public $ModelName;

    /**
     * @var string 模型ID
     */
    public $ModelId;

    /**
     * @var string 应用描述	
     */
    public $Description;

    /**
     * @var string 官方社区链接	
     */
    public $CommunityUrl;

    /**
     * @var string 最佳实践链接
     */
    public $GuideUrl;

    /**
     * @var string 模型状态
     */
    public $ModelState;

    /**
     * @var array 应用对应的标签，如机器学习
     */
    public $Tags;

    /**
     * @var string 配置环境
     */
    public $ConfigEnvironment;

    /**
     * @param string $ModelName 模型名称
     * @param string $ModelId 模型ID
     * @param string $Description 应用描述	
     * @param string $CommunityUrl 官方社区链接	
     * @param string $GuideUrl 最佳实践链接
     * @param string $ModelState 模型状态
     * @param array $Tags 应用对应的标签，如机器学习
     * @param string $ConfigEnvironment 配置环境
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

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CommunityUrl",$param) and $param["CommunityUrl"] !== null) {
            $this->CommunityUrl = $param["CommunityUrl"];
        }

        if (array_key_exists("GuideUrl",$param) and $param["GuideUrl"] !== null) {
            $this->GuideUrl = $param["GuideUrl"];
        }

        if (array_key_exists("ModelState",$param) and $param["ModelState"] !== null) {
            $this->ModelState = $param["ModelState"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("ConfigEnvironment",$param) and $param["ConfigEnvironment"] !== null) {
            $this->ConfigEnvironment = $param["ConfigEnvironment"];
        }
    }
}
