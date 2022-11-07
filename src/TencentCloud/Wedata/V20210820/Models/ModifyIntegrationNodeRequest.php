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
 * ModifyIntegrationNode请求参数结构体
 *
 * @method IntegrationNodeInfo getNodeInfo() 获取集成节点信息
 * @method void setNodeInfo(IntegrationNodeInfo $NodeInfo) 设置集成节点信息
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getTaskType() 获取任务类型
 * @method void setTaskType(integer $TaskType) 设置任务类型
 * @method integer getTaskMode() 获取区分画布模式和表单模式
 * @method void setTaskMode(integer $TaskMode) 设置区分画布模式和表单模式
 */
class ModifyIntegrationNodeRequest extends AbstractModel
{
    /**
     * @var IntegrationNodeInfo 集成节点信息
     */
    public $NodeInfo;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 任务类型
     */
    public $TaskType;

    /**
     * @var integer 区分画布模式和表单模式
     */
    public $TaskMode;

    /**
     * @param IntegrationNodeInfo $NodeInfo 集成节点信息
     * @param string $ProjectId 项目id
     * @param integer $TaskType 任务类型
     * @param integer $TaskMode 区分画布模式和表单模式
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
        if (array_key_exists("NodeInfo",$param) and $param["NodeInfo"] !== null) {
            $this->NodeInfo = new IntegrationNodeInfo();
            $this->NodeInfo->deserialize($param["NodeInfo"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }
    }
}
