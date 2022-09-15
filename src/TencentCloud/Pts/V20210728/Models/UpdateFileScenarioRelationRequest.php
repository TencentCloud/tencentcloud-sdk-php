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
 * UpdateFileScenarioRelation请求参数结构体
 *
 * @method string getFileId() 获取文件 ID
 * @method void setFileId(string $FileId) 设置文件 ID
 * @method string getProjectId() 获取项目 ID
 * @method void setProjectId(string $ProjectId) 设置项目 ID
 * @method array getScenarioIds() 获取场景 ID 数组
 * @method void setScenarioIds(array $ScenarioIds) 设置场景 ID 数组
 */
class UpdateFileScenarioRelationRequest extends AbstractModel
{
    /**
     * @var string 文件 ID
     */
    public $FileId;

    /**
     * @var string 项目 ID
     */
    public $ProjectId;

    /**
     * @var array 场景 ID 数组
     */
    public $ScenarioIds;

    /**
     * @param string $FileId 文件 ID
     * @param string $ProjectId 项目 ID
     * @param array $ScenarioIds 场景 ID 数组
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioIds",$param) and $param["ScenarioIds"] !== null) {
            $this->ScenarioIds = $param["ScenarioIds"];
        }
    }
}
