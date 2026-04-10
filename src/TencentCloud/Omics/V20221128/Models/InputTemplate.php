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
 * 运行参数模板
 *
 * @method string getUuid() 获取<p>唯一ID</p>
 * @method void setUuid(string $Uuid) 设置<p>唯一ID</p>
 * @method string getInputTemplateId() 获取<p>应用输入模板ID</p>
 * @method void setInputTemplateId(string $InputTemplateId) 设置<p>应用输入模板ID</p>
 * @method string getProjectId() 获取<p>关联项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>关联项目ID</p>
 * @method string getApplicationId() 获取<p>关联应用ID</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>关联应用ID</p>
 * @method string getApplicationVersionId() 获取<p>关联应用版本</p>
 * @method void setApplicationVersionId(string $ApplicationVersionId) 设置<p>关联应用版本</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getCreator() 获取<p>创建人</p>
 * @method void setCreator(string $Creator) 设置<p>创建人</p>
 * @method string getCreatorId() 获取<p>创建人ID</p>
 * @method void setCreatorId(string $CreatorId) 设置<p>创建人ID</p>
 */
class InputTemplate extends AbstractModel
{
    /**
     * @var string <p>唯一ID</p>
     */
    public $Uuid;

    /**
     * @var string <p>应用输入模板ID</p>
     */
    public $InputTemplateId;

    /**
     * @var string <p>关联项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>关联应用ID</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>关联应用版本</p>
     */
    public $ApplicationVersionId;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>创建人</p>
     */
    public $Creator;

    /**
     * @var string <p>创建人ID</p>
     */
    public $CreatorId;

    /**
     * @param string $Uuid <p>唯一ID</p>
     * @param string $InputTemplateId <p>应用输入模板ID</p>
     * @param string $ProjectId <p>关联项目ID</p>
     * @param string $ApplicationId <p>关联应用ID</p>
     * @param string $ApplicationVersionId <p>关联应用版本</p>
     * @param string $Name <p>名称</p>
     * @param string $Description <p>描述</p>
     * @param string $Creator <p>创建人</p>
     * @param string $CreatorId <p>创建人ID</p>
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("InputTemplateId",$param) and $param["InputTemplateId"] !== null) {
            $this->InputTemplateId = $param["InputTemplateId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationVersionId",$param) and $param["ApplicationVersionId"] !== null) {
            $this->ApplicationVersionId = $param["ApplicationVersionId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }
    }
}
