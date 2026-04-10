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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetInputTemplateFile请求参数结构体
 *
 * @method string getInputTemplateId() 获取<p>运行参数模板ID</p>
 * @method void setInputTemplateId(string $InputTemplateId) 设置<p>运行参数模板ID</p>
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getApplicationVersionId() 获取<p>运行应用版本ID</p>
 * @method void setApplicationVersionId(string $ApplicationVersionId) 设置<p>运行应用版本ID</p>
 * @method string getApplicationId() 获取<p>运行应用ID</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>运行应用ID</p>
 */
class GetInputTemplateFileRequest extends AbstractModel
{
    /**
     * @var string <p>运行参数模板ID</p>
     */
    public $InputTemplateId;

    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>运行应用版本ID</p>
     */
    public $ApplicationVersionId;

    /**
     * @var string <p>运行应用ID</p>
     */
    public $ApplicationId;

    /**
     * @param string $InputTemplateId <p>运行参数模板ID</p>
     * @param string $ProjectId <p>项目ID</p>
     * @param string $ApplicationVersionId <p>运行应用版本ID</p>
     * @param string $ApplicationId <p>运行应用ID</p>
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
        if (array_key_exists("InputTemplateId",$param) and $param["InputTemplateId"] !== null) {
            $this->InputTemplateId = $param["InputTemplateId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ApplicationVersionId",$param) and $param["ApplicationVersionId"] !== null) {
            $this->ApplicationVersionId = $param["ApplicationVersionId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
