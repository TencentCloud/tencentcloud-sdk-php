<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMigrationTaskBelongToProject请求参数结构体
 *
 * @method string getTaskId() 获取任务ID，例如msp-jitoh33n
 * @method void setTaskId(string $TaskId) 设置任务ID，例如msp-jitoh33n
 * @method integer getProjectId() 获取项目ID，例如10005
 * @method void setProjectId(integer $ProjectId) 设置项目ID，例如10005
 */
class ModifyMigrationTaskBelongToProjectRequest extends AbstractModel
{
    /**
     * @var string 任务ID，例如msp-jitoh33n
     */
    public $TaskId;

    /**
     * @var integer 项目ID，例如10005
     */
    public $ProjectId;

    /**
     * @param string $TaskId 任务ID，例如msp-jitoh33n
     * @param integer $ProjectId 项目ID，例如10005
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
        if (array_key_exists('TaskId',$param) and $param['TaskId'] !== null) {
            $this->TaskId = $param['TaskId'];
        }

        if (array_key_exists('ProjectId',$param) and $param['ProjectId'] !== null) {
            $this->ProjectId = $param['ProjectId'];
        }
    }
}
