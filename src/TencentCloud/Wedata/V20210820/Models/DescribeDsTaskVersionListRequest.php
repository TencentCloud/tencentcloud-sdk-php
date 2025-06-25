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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDsTaskVersionList请求参数结构体
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method boolean getIsOnlyCurrentEditingVersion() 获取是否仅返回当前编辑版本
 * @method void setIsOnlyCurrentEditingVersion(boolean $IsOnlyCurrentEditingVersion) 设置是否仅返回当前编辑版本
 */
class DescribeDsTaskVersionListRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var boolean 是否仅返回当前编辑版本
     */
    public $IsOnlyCurrentEditingVersion;

    /**
     * @param string $TaskId 任务ID
     * @param string $ProjectId 项目ID
     * @param boolean $IsOnlyCurrentEditingVersion 是否仅返回当前编辑版本
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsOnlyCurrentEditingVersion",$param) and $param["IsOnlyCurrentEditingVersion"] !== null) {
            $this->IsOnlyCurrentEditingVersion = $param["IsOnlyCurrentEditingVersion"];
        }
    }
}
