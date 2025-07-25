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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务数据
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getDataId() 获取输入的数据ID
 * @method void setDataId(string $DataId) 设置输入的数据ID
 * @method string getBizType() 获取业务类型
 * @method void setBizType(string $BizType) 设置业务类型
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getStatus() 获取状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
 * @method void setStatus(string $Status) 设置状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
 * @method string getType() 获取任务类型
 * @method void setType(string $Type) 设置任务类型
 * @method string getSuggestion() 获取处理建议
 * @method void setSuggestion(string $Suggestion) 设置处理建议
 * @method array getLabels() 获取标签
 * @method void setLabels(array $Labels) 设置标签
 * @method MediaInfo getMediaInfo() 获取媒体信息
 * @method void setMediaInfo(MediaInfo $MediaInfo) 设置媒体信息
 * @method InputInfo getInputInfo() 获取输入信息
 * @method void setInputInfo(InputInfo $InputInfo) 设置输入信息
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 */
class TaskData extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 输入的数据ID
     */
    public $DataId;

    /**
     * @var string 业务类型
     */
    public $BizType;

    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
     */
    public $Status;

    /**
     * @var string 任务类型
     */
    public $Type;

    /**
     * @var string 处理建议
     */
    public $Suggestion;

    /**
     * @var array 标签
     */
    public $Labels;

    /**
     * @var MediaInfo 媒体信息
     */
    public $MediaInfo;

    /**
     * @var InputInfo 输入信息
     */
    public $InputInfo;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @param string $TaskId 任务ID
     * @param string $DataId 输入的数据ID
     * @param string $BizType 业务类型
     * @param string $Name 任务名称
     * @param string $Status 状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
     * @param string $Type 任务类型
     * @param string $Suggestion 处理建议
     * @param array $Labels 标签
     * @param MediaInfo $MediaInfo 媒体信息
     * @param InputInfo $InputInfo 输入信息
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
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

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TaskLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("MediaInfo",$param) and $param["MediaInfo"] !== null) {
            $this->MediaInfo = new MediaInfo();
            $this->MediaInfo->deserialize($param["MediaInfo"]);
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new InputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
