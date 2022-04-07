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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据加工任务基本详情
 *
 * @method string getName() 获取数据加工任务名称
 * @method void setName(string $Name) 设置数据加工任务名称
 * @method string getTaskId() 获取数据加工任务id
 * @method void setTaskId(string $TaskId) 设置数据加工任务id
 * @method integer getEnableFlag() 获取任务启用状态，默认为1，正常开启,  2关闭
 * @method void setEnableFlag(integer $EnableFlag) 设置任务启用状态，默认为1，正常开启,  2关闭
 * @method integer getType() 获取加工任务类型，1： DSL， 2：SQL
 * @method void setType(integer $Type) 设置加工任务类型，1： DSL， 2：SQL
 * @method string getSrcTopicId() 获取源日志主题
 * @method void setSrcTopicId(string $SrcTopicId) 设置源日志主题
 * @method integer getStatus() 获取当前加工任务状态（1准备中/2运行中/3停止中/4已停止）
 * @method void setStatus(integer $Status) 设置当前加工任务状态（1准备中/2运行中/3停止中/4已停止）
 * @method string getCreateTime() 获取加工任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置加工任务创建时间
 * @method string getUpdateTime() 获取最近修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置最近修改时间
 * @method string getLastEnableTime() 获取最后启用时间，如果需要重建集群，修改该时间
 * @method void setLastEnableTime(string $LastEnableTime) 设置最后启用时间，如果需要重建集群，修改该时间
 * @method string getSrcTopicName() 获取日志主题名称
 * @method void setSrcTopicName(string $SrcTopicName) 设置日志主题名称
 * @method string getLogsetId() 获取日志集id
 * @method void setLogsetId(string $LogsetId) 设置日志集id
 * @method array getDstResources() 获取加工任务目的topic_id以及别名
 * @method void setDstResources(array $DstResources) 设置加工任务目的topic_id以及别名
 * @method string getEtlContent() 获取加工逻辑函数
 * @method void setEtlContent(string $EtlContent) 设置加工逻辑函数
 */
class DataTransformTaskInfo extends AbstractModel
{
    /**
     * @var string 数据加工任务名称
     */
    public $Name;

    /**
     * @var string 数据加工任务id
     */
    public $TaskId;

    /**
     * @var integer 任务启用状态，默认为1，正常开启,  2关闭
     */
    public $EnableFlag;

    /**
     * @var integer 加工任务类型，1： DSL， 2：SQL
     */
    public $Type;

    /**
     * @var string 源日志主题
     */
    public $SrcTopicId;

    /**
     * @var integer 当前加工任务状态（1准备中/2运行中/3停止中/4已停止）
     */
    public $Status;

    /**
     * @var string 加工任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 最近修改时间
     */
    public $UpdateTime;

    /**
     * @var string 最后启用时间，如果需要重建集群，修改该时间
     */
    public $LastEnableTime;

    /**
     * @var string 日志主题名称
     */
    public $SrcTopicName;

    /**
     * @var string 日志集id
     */
    public $LogsetId;

    /**
     * @var array 加工任务目的topic_id以及别名
     */
    public $DstResources;

    /**
     * @var string 加工逻辑函数
     */
    public $EtlContent;

    /**
     * @param string $Name 数据加工任务名称
     * @param string $TaskId 数据加工任务id
     * @param integer $EnableFlag 任务启用状态，默认为1，正常开启,  2关闭
     * @param integer $Type 加工任务类型，1： DSL， 2：SQL
     * @param string $SrcTopicId 源日志主题
     * @param integer $Status 当前加工任务状态（1准备中/2运行中/3停止中/4已停止）
     * @param string $CreateTime 加工任务创建时间
     * @param string $UpdateTime 最近修改时间
     * @param string $LastEnableTime 最后启用时间，如果需要重建集群，修改该时间
     * @param string $SrcTopicName 日志主题名称
     * @param string $LogsetId 日志集id
     * @param array $DstResources 加工任务目的topic_id以及别名
     * @param string $EtlContent 加工逻辑函数
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastEnableTime",$param) and $param["LastEnableTime"] !== null) {
            $this->LastEnableTime = $param["LastEnableTime"];
        }

        if (array_key_exists("SrcTopicName",$param) and $param["SrcTopicName"] !== null) {
            $this->SrcTopicName = $param["SrcTopicName"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }
    }
}
