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
 * CheckTaskNameExist请求参数结构体
 *
 * @method string getProjectId() 获取项目id/工作空间id
 * @method void setProjectId(string $ProjectId) 设置项目id/工作空间id
 * @method integer getTypeId() 获取任务类型（跟调度传参保持一致27）
 * @method void setTypeId(integer $TypeId) 设置任务类型（跟调度传参保持一致27）
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 */
class CheckTaskNameExistRequest extends AbstractModel
{
    /**
     * @var string 项目id/工作空间id
     */
    public $ProjectId;

    /**
     * @var integer 任务类型（跟调度传参保持一致27）
     */
    public $TypeId;

    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @param string $ProjectId 项目id/工作空间id
     * @param integer $TypeId 任务类型（跟调度传参保持一致27）
     * @param string $TaskName 任务名
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }
    }
}
