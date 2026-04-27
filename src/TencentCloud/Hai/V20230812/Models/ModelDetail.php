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
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method string getModelId() 获取<p>模型ID</p>
 * @method void setModelId(string $ModelId) 设置<p>模型ID</p>
 * @method string getDescription() 获取<p>应用描述</p>
 * @method void setDescription(string $Description) 设置<p>应用描述</p>
 * @method string getCommunityUrl() 获取<p>官方社区链接</p>
 * @method void setCommunityUrl(string $CommunityUrl) 设置<p>官方社区链接</p>
 * @method string getGuideUrl() 获取<p>最佳实践链接</p>
 * @method void setGuideUrl(string $GuideUrl) 设置<p>最佳实践链接</p>
 * @method string getModelState() 获取<p>模型状态</p>
 * @method void setModelState(string $ModelState) 设置<p>模型状态</p>
 * @method array getTags() 获取<p>应用对应的标签，如机器学习</p>
 * @method void setTags(array $Tags) 设置<p>应用对应的标签，如机器学习</p>
 * @method string getConfigEnvironment() 获取<p>配置环境</p>
 * @method void setConfigEnvironment(string $ConfigEnvironment) 设置<p>配置环境</p>
 */
class ModelDetail extends AbstractModel
{
    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var string <p>模型ID</p>
     */
    public $ModelId;

    /**
     * @var string <p>应用描述</p>
     */
    public $Description;

    /**
     * @var string <p>官方社区链接</p>
     */
    public $CommunityUrl;

    /**
     * @var string <p>最佳实践链接</p>
     */
    public $GuideUrl;

    /**
     * @var string <p>模型状态</p>
     */
    public $ModelState;

    /**
     * @var array <p>应用对应的标签，如机器学习</p>
     */
    public $Tags;

    /**
     * @var string <p>配置环境</p>
     */
    public $ConfigEnvironment;

    /**
     * @param string $ModelName <p>模型名称</p>
     * @param string $ModelId <p>模型ID</p>
     * @param string $Description <p>应用描述</p>
     * @param string $CommunityUrl <p>官方社区链接</p>
     * @param string $GuideUrl <p>最佳实践链接</p>
     * @param string $ModelState <p>模型状态</p>
     * @param array $Tags <p>应用对应的标签，如机器学习</p>
     * @param string $ConfigEnvironment <p>配置环境</p>
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
