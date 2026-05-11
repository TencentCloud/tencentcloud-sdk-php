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
 * @method string getTaskId() 获取<p>任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
 * @method string getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
 * @method integer getCommitType() 获取<p>0.仅提交，1.立即启动，2.停止线上作业，丢弃作业状态数据，重新启动运行，3.暂停线上作业，保留作业状态数据，继续运行，4.保留作业状态数据，继续运行</p>
 * @method void setCommitType(integer $CommitType) 设置<p>0.仅提交，1.立即启动，2.停止线上作业，丢弃作业状态数据，重新启动运行，3.暂停线上作业，保留作业状态数据，继续运行，4.保留作业状态数据，继续运行</p>
 * @method integer getTaskType() 获取<p>实时任务 201   离线任务 202  默认实时任务</p>
 * @method void setTaskType(integer $TaskType) 设置<p>实时任务 201   离线任务 202  默认实时任务</p>
 * @method array getExtConfig() 获取<p>额外参数</p>
 * @method void setExtConfig(array $ExtConfig) 设置<p>额外参数</p>
 * @method string getVersionDesc() 获取<p>提交版本描述</p>
 * @method void setVersionDesc(string $VersionDesc) 设置<p>提交版本描述</p>
 * @method integer getInstanceVersion() 获取<p>提交版本号</p>
 * @method void setInstanceVersion(integer $InstanceVersion) 设置<p>提交版本号</p>
 * @method string getEventDesc() 获取<p>前端操作类型描述</p>
 * @method void setEventDesc(string $EventDesc) 设置<p>前端操作类型描述</p>
 * @method integer getCurrentStatus() 获取<p>提交时任务状态</p><p>枚举值：</p><ul><li>3： 运行中</li></ul>
 * @method void setCurrentStatus(integer $CurrentStatus) 设置<p>提交时任务状态</p><p>枚举值：</p><ul><li>3： 运行中</li></ul>
 */
class CommitIntegrationTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>0.仅提交，1.立即启动，2.停止线上作业，丢弃作业状态数据，重新启动运行，3.暂停线上作业，保留作业状态数据，继续运行，4.保留作业状态数据，继续运行</p>
     */
    public $CommitType;

    /**
     * @var integer <p>实时任务 201   离线任务 202  默认实时任务</p>
     */
    public $TaskType;

    /**
     * @var array <p>额外参数</p>
     */
    public $ExtConfig;

    /**
     * @var string <p>提交版本描述</p>
     */
    public $VersionDesc;

    /**
     * @var integer <p>提交版本号</p>
     */
    public $InstanceVersion;

    /**
     * @var string <p>前端操作类型描述</p>
     */
    public $EventDesc;

    /**
     * @var integer <p>提交时任务状态</p><p>枚举值：</p><ul><li>3： 运行中</li></ul>
     */
    public $CurrentStatus;

    /**
     * @param string $TaskId <p>任务id</p>
     * @param string $ProjectId <p>项目id</p>
     * @param integer $CommitType <p>0.仅提交，1.立即启动，2.停止线上作业，丢弃作业状态数据，重新启动运行，3.暂停线上作业，保留作业状态数据，继续运行，4.保留作业状态数据，继续运行</p>
     * @param integer $TaskType <p>实时任务 201   离线任务 202  默认实时任务</p>
     * @param array $ExtConfig <p>额外参数</p>
     * @param string $VersionDesc <p>提交版本描述</p>
     * @param integer $InstanceVersion <p>提交版本号</p>
     * @param string $EventDesc <p>前端操作类型描述</p>
     * @param integer $CurrentStatus <p>提交时任务状态</p><p>枚举值：</p><ul><li>3： 运行中</li></ul>
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

        if (array_key_exists("CurrentStatus",$param) and $param["CurrentStatus"] !== null) {
            $this->CurrentStatus = $param["CurrentStatus"];
        }
    }
}
