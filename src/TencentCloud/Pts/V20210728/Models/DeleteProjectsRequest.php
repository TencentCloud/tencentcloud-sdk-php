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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteProjects请求参数结构体
 *
 * @method array getProjectIds() 获取项目ID数组
 * @method void setProjectIds(array $ProjectIds) 设置项目ID数组
 * @method boolean getDeleteScenarios() 获取是否删除项目相关的场景。默认为否。
 * @method void setDeleteScenarios(boolean $DeleteScenarios) 设置是否删除项目相关的场景。默认为否。
 * @method boolean getDeleteJobs() 获取是否删除项目相关的任务。默认为否。
 * @method void setDeleteJobs(boolean $DeleteJobs) 设置是否删除项目相关的任务。默认为否。
 */
class DeleteProjectsRequest extends AbstractModel
{
    /**
     * @var array 项目ID数组
     */
    public $ProjectIds;

    /**
     * @var boolean 是否删除项目相关的场景。默认为否。
     */
    public $DeleteScenarios;

    /**
     * @var boolean 是否删除项目相关的任务。默认为否。
     */
    public $DeleteJobs;

    /**
     * @param array $ProjectIds 项目ID数组
     * @param boolean $DeleteScenarios 是否删除项目相关的场景。默认为否。
     * @param boolean $DeleteJobs 是否删除项目相关的任务。默认为否。
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("DeleteScenarios",$param) and $param["DeleteScenarios"] !== null) {
            $this->DeleteScenarios = $param["DeleteScenarios"];
        }

        if (array_key_exists("DeleteJobs",$param) and $param["DeleteJobs"] !== null) {
            $this->DeleteJobs = $param["DeleteJobs"];
        }
    }
}
