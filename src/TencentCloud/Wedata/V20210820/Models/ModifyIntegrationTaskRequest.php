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
 * ModifyIntegrationTask请求参数结构体
 *
 * @method IntegrationTaskInfo getTaskInfo() 获取任务信息
 * @method void setTaskInfo(IntegrationTaskInfo $TaskInfo) 设置任务信息
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method boolean getRollbackFlag() 获取默认false . 为true时表示走回滚节点逻辑
 * @method void setRollbackFlag(boolean $RollbackFlag) 设置默认false . 为true时表示走回滚节点逻辑
 */
class ModifyIntegrationTaskRequest extends AbstractModel
{
    /**
     * @var IntegrationTaskInfo 任务信息
     */
    public $TaskInfo;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var boolean 默认false . 为true时表示走回滚节点逻辑
     */
    public $RollbackFlag;

    /**
     * @param IntegrationTaskInfo $TaskInfo 任务信息
     * @param string $ProjectId 项目id
     * @param boolean $RollbackFlag 默认false . 为true时表示走回滚节点逻辑
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
        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new IntegrationTaskInfo();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RollbackFlag",$param) and $param["RollbackFlag"] !== null) {
            $this->RollbackFlag = $param["RollbackFlag"];
        }
    }
}
