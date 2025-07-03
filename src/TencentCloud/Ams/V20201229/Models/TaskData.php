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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务数据
 *
 * @method string getDataId() 获取该字段用于返回音频审核任务数据所对应的数据ID，方便后续查询和管理审核任务。
 * @method void setDataId(string $DataId) 设置该字段用于返回音频审核任务数据所对应的数据ID，方便后续查询和管理审核任务。
 * @method string getTaskId() 获取该字段用于返回音频审核任务所生成的任务ID，用于标识具体审核任务，方便后续查询和管理。
 * @method void setTaskId(string $TaskId) 设置该字段用于返回音频审核任务所生成的任务ID，用于标识具体审核任务，方便后续查询和管理。
 * @method string getStatus() 获取该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
 * @method void setStatus(string $Status) 设置该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
 * @method string getName() 获取该字段用于返回音频审核任务所对应的任务名称，方便后续查询和管理审核任务。
 * @method void setName(string $Name) 设置该字段用于返回音频审核任务所对应的任务名称，方便后续查询和管理审核任务。
 * @method string getBizType() 获取该字段用于返回调用音频审核接口时传入的BizType参数，方便数据的辨别和管理。
 * @method void setBizType(string $BizType) 设置该字段用于返回调用音频审核接口时传入的BizType参数，方便数据的辨别和管理。
 * @method string getType() 获取该字段用于返回调用音频审核接口时输入的音频审核类型，取值为：**AUDIO**（点播音频）和**LIVE_AUDIO**（直播音频），默认值为AUDIO。
 * @method void setType(string $Type) 设置该字段用于返回调用音频审核接口时输入的音频审核类型，取值为：**AUDIO**（点播音频）和**LIVE_AUDIO**（直播音频），默认值为AUDIO。
 * @method string getSuggestion() 获取该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
 * @method void setSuggestion(string $Suggestion) 设置该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
 * @method MediaInfo getMediaInfo() 获取输入信息
 * @method void setMediaInfo(MediaInfo $MediaInfo) 设置输入信息
 * @method array getLabels() 获取该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
 * @method void setLabels(array $Labels) 设置该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
 * @method string getCreatedAt() 获取该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
 * @method void setCreatedAt(string $CreatedAt) 设置该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
 * @method string getUpdatedAt() 获取该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
 * @method void setUpdatedAt(string $UpdatedAt) 设置该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
 * @method InputInfo getInputInfo() 获取任务信息
 * @method void setInputInfo(InputInfo $InputInfo) 设置任务信息
 */
class TaskData extends AbstractModel
{
    /**
     * @var string 该字段用于返回音频审核任务数据所对应的数据ID，方便后续查询和管理审核任务。
     */
    public $DataId;

    /**
     * @var string 该字段用于返回音频审核任务所生成的任务ID，用于标识具体审核任务，方便后续查询和管理。
     */
    public $TaskId;

    /**
     * @var string 该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
     */
    public $Status;

    /**
     * @var string 该字段用于返回音频审核任务所对应的任务名称，方便后续查询和管理审核任务。
     */
    public $Name;

    /**
     * @var string 该字段用于返回调用音频审核接口时传入的BizType参数，方便数据的辨别和管理。
     */
    public $BizType;

    /**
     * @var string 该字段用于返回调用音频审核接口时输入的音频审核类型，取值为：**AUDIO**（点播音频）和**LIVE_AUDIO**（直播音频），默认值为AUDIO。
     */
    public $Type;

    /**
     * @var string 该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
     */
    public $Suggestion;

    /**
     * @var MediaInfo 输入信息
     */
    public $MediaInfo;

    /**
     * @var array 该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
     */
    public $Labels;

    /**
     * @var string 该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
     */
    public $CreatedAt;

    /**
     * @var string 该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
     */
    public $UpdatedAt;

    /**
     * @var InputInfo 任务信息
     */
    public $InputInfo;

    /**
     * @param string $DataId 该字段用于返回音频审核任务数据所对应的数据ID，方便后续查询和管理审核任务。
     * @param string $TaskId 该字段用于返回音频审核任务所生成的任务ID，用于标识具体审核任务，方便后续查询和管理。
     * @param string $Status 该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
     * @param string $Name 该字段用于返回音频审核任务所对应的任务名称，方便后续查询和管理审核任务。
     * @param string $BizType 该字段用于返回调用音频审核接口时传入的BizType参数，方便数据的辨别和管理。
     * @param string $Type 该字段用于返回调用音频审核接口时输入的音频审核类型，取值为：**AUDIO**（点播音频）和**LIVE_AUDIO**（直播音频），默认值为AUDIO。
     * @param string $Suggestion 该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
     * @param MediaInfo $MediaInfo 输入信息
     * @param array $Labels 该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Normal**：正常，**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
     * @param string $CreatedAt 该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
     * @param string $UpdatedAt 该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
     * @param InputInfo $InputInfo 任务信息
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("MediaInfo",$param) and $param["MediaInfo"] !== null) {
            $this->MediaInfo = new MediaInfo();
            $this->MediaInfo->deserialize($param["MediaInfo"]);
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TaskLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new InputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }
    }
}
