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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云存 AI 服务任务信息
 *
 * @method string getTaskId() 获取云存 AI 服务任务 ID
 * @method void setTaskId(string $TaskId) 设置云存 AI 服务任务 ID
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getChannelId() 获取通道 ID
 * @method void setChannelId(integer $ChannelId) 设置通道 ID
 * @method string getServiceType() 获取云存 AI 服务类型。可能取值：

- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
 * @method void setServiceType(string $ServiceType) 设置云存 AI 服务类型。可能取值：

- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
 * @method integer getStartTime() 获取对应云存视频的起始时间（秒级 UNIX 时间戳）
 * @method void setStartTime(integer $StartTime) 设置对应云存视频的起始时间（秒级 UNIX 时间戳）
 * @method integer getStartTimeMs() 获取对应云存视频的起始时间（毫秒级 UNIX 时间戳）
 * @method void setStartTimeMs(integer $StartTimeMs) 设置对应云存视频的起始时间（毫秒级 UNIX 时间戳）
 * @method integer getEndTime() 获取对应云存视频的结束时间（秒级 UNIX 时间戳）
 * @method void setEndTime(integer $EndTime) 设置对应云存视频的结束时间（秒级 UNIX 时间戳）
 * @method integer getEndTimeMs() 获取对应云存视频的结束时间（毫秒级 UNIX 时间戳）
 * @method void setEndTimeMs(integer $EndTimeMs) 设置对应云存视频的结束时间（毫秒级 UNIX 时间戳）
 * @method integer getStatus() 获取任务状态（1：失败；2：成功但结果为空；3：成功且结果非空；4：执行中）
 * @method void setStatus(integer $Status) 设置任务状态（1：失败；2：成功但结果为空；3：成功且结果非空；4：执行中）
 * @method string getResult() 获取任务结果
 * @method void setResult(string $Result) 设置任务结果
 * @method array getFiles() 获取任务输出文件列表
 * @method void setFiles(array $Files) 设置任务输出文件列表
 * @method array getFilesInfo() 获取任务输出文件信息列表
 * @method void setFilesInfo(array $FilesInfo) 设置任务输出文件信息列表
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取最后更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置最后更新时间
 * @method string getCustomId() 获取自定义任务 ID
 * @method void setCustomId(string $CustomId) 设置自定义任务 ID
 */
class CloudStorageAIServiceTask extends AbstractModel
{
    /**
     * @var string 云存 AI 服务任务 ID
     */
    public $TaskId;

    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 通道 ID
     */
    public $ChannelId;

    /**
     * @var string 云存 AI 服务类型。可能取值：

- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
     */
    public $ServiceType;

    /**
     * @var integer 对应云存视频的起始时间（秒级 UNIX 时间戳）
     */
    public $StartTime;

    /**
     * @var integer 对应云存视频的起始时间（毫秒级 UNIX 时间戳）
     */
    public $StartTimeMs;

    /**
     * @var integer 对应云存视频的结束时间（秒级 UNIX 时间戳）
     */
    public $EndTime;

    /**
     * @var integer 对应云存视频的结束时间（毫秒级 UNIX 时间戳）
     */
    public $EndTimeMs;

    /**
     * @var integer 任务状态（1：失败；2：成功但结果为空；3：成功且结果非空；4：执行中）
     */
    public $Status;

    /**
     * @var string 任务结果
     */
    public $Result;

    /**
     * @var array 任务输出文件列表
     */
    public $Files;

    /**
     * @var array 任务输出文件信息列表
     */
    public $FilesInfo;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 最后更新时间
     */
    public $UpdateTime;

    /**
     * @var string 自定义任务 ID
     */
    public $CustomId;

    /**
     * @param string $TaskId 云存 AI 服务任务 ID
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param integer $ChannelId 通道 ID
     * @param string $ServiceType 云存 AI 服务类型。可能取值：

- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
     * @param integer $StartTime 对应云存视频的起始时间（秒级 UNIX 时间戳）
     * @param integer $StartTimeMs 对应云存视频的起始时间（毫秒级 UNIX 时间戳）
     * @param integer $EndTime 对应云存视频的结束时间（秒级 UNIX 时间戳）
     * @param integer $EndTimeMs 对应云存视频的结束时间（毫秒级 UNIX 时间戳）
     * @param integer $Status 任务状态（1：失败；2：成功但结果为空；3：成功且结果非空；4：执行中）
     * @param string $Result 任务结果
     * @param array $Files 任务输出文件列表
     * @param array $FilesInfo 任务输出文件信息列表
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 最后更新时间
     * @param string $CustomId 自定义任务 ID
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

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StartTimeMs",$param) and $param["StartTimeMs"] !== null) {
            $this->StartTimeMs = $param["StartTimeMs"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EndTimeMs",$param) and $param["EndTimeMs"] !== null) {
            $this->EndTimeMs = $param["EndTimeMs"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = $param["Files"];
        }

        if (array_key_exists("FilesInfo",$param) and $param["FilesInfo"] !== null) {
            $this->FilesInfo = [];
            foreach ($param["FilesInfo"] as $key => $value){
                $obj = new CloudStorageAIServiceTaskFileInfo();
                $obj->deserialize($value);
                array_push($this->FilesInfo, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }
    }
}
