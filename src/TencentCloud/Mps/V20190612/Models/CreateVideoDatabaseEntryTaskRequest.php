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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoDatabaseEntryTask请求参数结构体
 *
 * @method MediaInputInfo getInputInfo() 获取待入库视频信息
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置待入库视频信息
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取可选，入库任务完成后向指定的回调地址传递任务结果，目前仅支持URL
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置可选，入库任务完成后向指定的回调地址传递任务结果，目前仅支持URL
 */
class CreateVideoDatabaseEntryTaskRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo 待入库视频信息
     */
    public $InputInfo;

    /**
     * @var TaskNotifyConfig 可选，入库任务完成后向指定的回调地址传递任务结果，目前仅支持URL
     */
    public $TaskNotifyConfig;

    /**
     * @param MediaInputInfo $InputInfo 待入库视频信息
     * @param TaskNotifyConfig $TaskNotifyConfig 可选，入库任务完成后向指定的回调地址传递任务结果，目前仅支持URL
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }
    }
}
