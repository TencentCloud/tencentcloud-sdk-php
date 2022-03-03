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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTask请求参数结构体
 *
 * @method string getMediaId() 获取媒资文件ID，最长32B
 * @method void setMediaId(string $MediaId) 设置媒资文件ID，最长32B
 * @method MediaPreknownInfo getMediaPreknownInfo() 获取媒资素材先验知识，相关限制参考MediaPreknownInfo
 * @method void setMediaPreknownInfo(MediaPreknownInfo $MediaPreknownInfo) 设置媒资素材先验知识，相关限制参考MediaPreknownInfo
 * @method string getTaskName() 获取任务名称，最长100个中文字符
 * @method void setTaskName(string $TaskName) 设置任务名称，最长100个中文字符
 * @method boolean getUploadVideo() 获取是否上传转码后的视频，仅设置true时上传，默认为false
 * @method void setUploadVideo(boolean $UploadVideo) 设置是否上传转码后的视频，仅设置true时上传，默认为false
 * @method string getLabel() 获取自定义标签，可用于查询
 * @method void setLabel(string $Label) 设置自定义标签，可用于查询
 * @method string getCallbackURL() 获取任务分析完成的回调地址，该设置优先级高于控制台全局的设置；
 * @method void setCallbackURL(string $CallbackURL) 设置任务分析完成的回调地址，该设置优先级高于控制台全局的设置；
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var string 媒资文件ID，最长32B
     */
    public $MediaId;

    /**
     * @var MediaPreknownInfo 媒资素材先验知识，相关限制参考MediaPreknownInfo
     */
    public $MediaPreknownInfo;

    /**
     * @var string 任务名称，最长100个中文字符
     */
    public $TaskName;

    /**
     * @var boolean 是否上传转码后的视频，仅设置true时上传，默认为false
     */
    public $UploadVideo;

    /**
     * @var string 自定义标签，可用于查询
     */
    public $Label;

    /**
     * @var string 任务分析完成的回调地址，该设置优先级高于控制台全局的设置；
     */
    public $CallbackURL;

    /**
     * @param string $MediaId 媒资文件ID，最长32B
     * @param MediaPreknownInfo $MediaPreknownInfo 媒资素材先验知识，相关限制参考MediaPreknownInfo
     * @param string $TaskName 任务名称，最长100个中文字符
     * @param boolean $UploadVideo 是否上传转码后的视频，仅设置true时上传，默认为false
     * @param string $Label 自定义标签，可用于查询
     * @param string $CallbackURL 任务分析完成的回调地址，该设置优先级高于控制台全局的设置；
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
        if (array_key_exists("MediaId",$param) and $param["MediaId"] !== null) {
            $this->MediaId = $param["MediaId"];
        }

        if (array_key_exists("MediaPreknownInfo",$param) and $param["MediaPreknownInfo"] !== null) {
            $this->MediaPreknownInfo = new MediaPreknownInfo();
            $this->MediaPreknownInfo->deserialize($param["MediaPreknownInfo"]);
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("UploadVideo",$param) and $param["UploadVideo"] !== null) {
            $this->UploadVideo = $param["UploadVideo"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("CallbackURL",$param) and $param["CallbackURL"] !== null) {
            $this->CallbackURL = $param["CallbackURL"];
        }
    }
}
