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
 * CommitExportTask请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getRuleExecId() 获取规则执行Id
 * @method void setRuleExecId(integer $RuleExecId) 设置规则执行Id
 * @method integer getExportType() 获取导出类型(1.全部,2.触发行,3.通过行)
 * @method void setExportType(integer $ExportType) 设置导出类型(1.全部,2.触发行,3.通过行)
 * @method string getExecutorGroupId() 获取执行资源组id
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组id
 * @method string getQueueName() 获取计算资源队列
 * @method void setQueueName(string $QueueName) 设置计算资源队列
 */
class CommitExportTaskRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 规则执行Id
     */
    public $RuleExecId;

    /**
     * @var integer 导出类型(1.全部,2.触发行,3.通过行)
     */
    public $ExportType;

    /**
     * @var string 执行资源组id
     */
    public $ExecutorGroupId;

    /**
     * @var string 计算资源队列
     */
    public $QueueName;

    /**
     * @param string $ProjectId 项目id
     * @param integer $RuleExecId 规则执行Id
     * @param integer $ExportType 导出类型(1.全部,2.触发行,3.通过行)
     * @param string $ExecutorGroupId 执行资源组id
     * @param string $QueueName 计算资源队列
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

        if (array_key_exists("RuleExecId",$param) and $param["RuleExecId"] !== null) {
            $this->RuleExecId = $param["RuleExecId"];
        }

        if (array_key_exists("ExportType",$param) and $param["ExportType"] !== null) {
            $this->ExportType = $param["ExportType"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }
    }
}
