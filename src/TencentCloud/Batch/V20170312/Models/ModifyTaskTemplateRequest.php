<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTaskTemplate请求参数结构体
 *
 * @method string getTaskTemplateId() 获取任务模板ID; 详见[任务模版](https://cloud.tencent.com/document/product/599/15902)。
 * @method void setTaskTemplateId(string $TaskTemplateId) 设置任务模板ID; 详见[任务模版](https://cloud.tencent.com/document/product/599/15902)。
 * @method string getTaskTemplateName() 获取任务模板名称；字节长度限制60。
 * @method void setTaskTemplateName(string $TaskTemplateName) 设置任务模板名称；字节长度限制60。
 * @method string getTaskTemplateDescription() 获取任务模板描述；字节长度限制200。
 * @method void setTaskTemplateDescription(string $TaskTemplateDescription) 设置任务模板描述；字节长度限制200。
 * @method Task getTaskTemplateInfo() 获取任务模板信息
 * @method void setTaskTemplateInfo(Task $TaskTemplateInfo) 设置任务模板信息
 */
class ModifyTaskTemplateRequest extends AbstractModel
{
    /**
     * @var string 任务模板ID; 详见[任务模版](https://cloud.tencent.com/document/product/599/15902)。
     */
    public $TaskTemplateId;

    /**
     * @var string 任务模板名称；字节长度限制60。
     */
    public $TaskTemplateName;

    /**
     * @var string 任务模板描述；字节长度限制200。
     */
    public $TaskTemplateDescription;

    /**
     * @var Task 任务模板信息
     */
    public $TaskTemplateInfo;

    /**
     * @param string $TaskTemplateId 任务模板ID; 详见[任务模版](https://cloud.tencent.com/document/product/599/15902)。
     * @param string $TaskTemplateName 任务模板名称；字节长度限制60。
     * @param string $TaskTemplateDescription 任务模板描述；字节长度限制200。
     * @param Task $TaskTemplateInfo 任务模板信息
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
        if (array_key_exists("TaskTemplateId",$param) and $param["TaskTemplateId"] !== null) {
            $this->TaskTemplateId = $param["TaskTemplateId"];
        }

        if (array_key_exists("TaskTemplateName",$param) and $param["TaskTemplateName"] !== null) {
            $this->TaskTemplateName = $param["TaskTemplateName"];
        }

        if (array_key_exists("TaskTemplateDescription",$param) and $param["TaskTemplateDescription"] !== null) {
            $this->TaskTemplateDescription = $param["TaskTemplateDescription"];
        }

        if (array_key_exists("TaskTemplateInfo",$param) and $param["TaskTemplateInfo"] !== null) {
            $this->TaskTemplateInfo = new Task();
            $this->TaskTemplateInfo->deserialize($param["TaskTemplateInfo"]);
        }
    }
}
