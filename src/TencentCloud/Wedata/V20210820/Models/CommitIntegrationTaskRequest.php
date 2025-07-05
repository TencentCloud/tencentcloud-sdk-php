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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CommitIntegrationTask请求参数结构体
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getCommitType() 获取0.仅提交，1.立即启动，2.停止线上作业，丢弃作业状态数据，重新启动运行，3.暂停线上作业，保留作业状态数据，继续运行，4.保留作业状态数据，继续运行
 * @method void setCommitType(integer $CommitType) 设置0.仅提交，1.立即启动，2.停止线上作业，丢弃作业状态数据，重新启动运行，3.暂停线上作业，保留作业状态数据，继续运行，4.保留作业状态数据，继续运行
 * @method integer getTaskType() 获取实时任务 201   离线任务 202  默认实时任务
 * @method void setTaskType(integer $TaskType) 设置实时任务 201   离线任务 202  默认实时任务
 * @method array getExtConfig() 获取额外参数
 * @method void setExtConfig(array $ExtConfig) 设置额外参数
 * @method string getVersionDesc() 获取提交版本描述
 * @method void setVersionDesc(string $VersionDesc) 设置提交版本描述
 * @method integer getInstanceVersion() 获取提交版本号
 * @method void setInstanceVersion(integer $InstanceVersion) 设置提交版本号
 * @method string getEventDesc() 获取前端操作类型描述
 * @method void setEventDesc(string $EventDesc) 设置前端操作类型描述
 */
class CommitIntegrationTaskRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 0.仅提交，1.立即启动，2.停止线上作业，丢弃作业状态数据，重新启动运行，3.暂停线上作业，保留作业状态数据，继续运行，4.保留作业状态数据，继续运行
     */
    public $CommitType;

    /**
     * @var integer 实时任务 201   离线任务 202  默认实时任务
     */
    public $TaskType;

    /**
     * @var array 额外参数
     */
    public $ExtConfig;

    /**
     * @var string 提交版本描述
     */
    public $VersionDesc;

    /**
     * @var integer 提交版本号
     */
    public $InstanceVersion;

    /**
     * @var string 前端操作类型描述
     */
    public $EventDesc;

    /**
     * @param string $TaskId 任务id
     * @param string $ProjectId 项目id
     * @param integer $CommitType 0.仅提交，1.立即启动，2.停止线上作业，丢弃作业状态数据，重新启动运行，3.暂停线上作业，保留作业状态数据，继续运行，4.保留作业状态数据，继续运行
     * @param integer $TaskType 实时任务 201   离线任务 202  默认实时任务
     * @param array $ExtConfig 额外参数
     * @param string $VersionDesc 提交版本描述
     * @param integer $InstanceVersion 提交版本号
     * @param string $EventDesc 前端操作类型描述
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

        if (array_key_exists("CommitType",$param) and $param["CommitType"] !== null) {
            $this->CommitType = $param["CommitType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }

        if (array_key_exists("VersionDesc",$param) and $param["VersionDesc"] !== null) {
            $this->VersionDesc = $param["VersionDesc"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("EventDesc",$param) and $param["EventDesc"] !== null) {
            $this->EventDesc = $param["EventDesc"];
        }
    }
}
