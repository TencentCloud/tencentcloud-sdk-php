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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchProcessMedia请求参数结构体
 *
 * @method array getInputInfo() 获取媒体处理的文件输入信息。
 * @method void setInputInfo(array $InputInfo) 设置媒体处理的文件输入信息。
 * @method TaskOutputStorage getOutputStorage() 获取媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
注意：当InputInfo.Type为URL时，该参数是必填项
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
注意：当InputInfo.Type为URL时，该参数是必填项
 * @method string getOutputDir() 获取媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如`/movie/201907/`。
如果不填，表示与 InputInfo 中文件所在的目录一致。
 * @method void setOutputDir(string $OutputDir) 设置媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如`/movie/201907/`。
如果不填，表示与 InputInfo 中文件所在的目录一致。
 * @method SmartSubtitlesTaskInput getSmartSubtitlesTask() 获取智能字幕
 * @method void setSmartSubtitlesTask(SmartSubtitlesTaskInput $SmartSubtitlesTask) 设置智能字幕
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取任务的事件通知信息，不填代表不获取事件通知。
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置任务的事件通知信息，不填代表不获取事件通知。
 * @method integer getTasksPriority() 获取任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method string getResourceId() 获取资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。
 * @method void setResourceId(string $ResourceId) 设置资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。
 * @method integer getSkipMateData() 获取是否跳过元信息获取，可选值： 
0：表示不跳过 
1：表示跳过 
默认值：0	
 * @method void setSkipMateData(integer $SkipMateData) 设置是否跳过元信息获取，可选值： 
0：表示不跳过 
1：表示跳过 
默认值：0	
 */
class BatchProcessMediaRequest extends AbstractModel
{
    /**
     * @var array 媒体处理的文件输入信息。
     */
    public $InputInfo;

    /**
     * @var TaskOutputStorage 媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
注意：当InputInfo.Type为URL时，该参数是必填项
     */
    public $OutputStorage;

    /**
     * @var string 媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如`/movie/201907/`。
如果不填，表示与 InputInfo 中文件所在的目录一致。
     */
    public $OutputDir;

    /**
     * @var SmartSubtitlesTaskInput 智能字幕
     */
    public $SmartSubtitlesTask;

    /**
     * @var TaskNotifyConfig 任务的事件通知信息，不填代表不获取事件通知。
     */
    public $TaskNotifyConfig;

    /**
     * @var integer 任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
     */
    public $TasksPriority;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var string 资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。
     */
    public $ResourceId;

    /**
     * @var integer 是否跳过元信息获取，可选值： 
0：表示不跳过 
1：表示跳过 
默认值：0	
     */
    public $SkipMateData;

    /**
     * @param array $InputInfo 媒体处理的文件输入信息。
     * @param TaskOutputStorage $OutputStorage 媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
注意：当InputInfo.Type为URL时，该参数是必填项
     * @param string $OutputDir 媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如`/movie/201907/`。
如果不填，表示与 InputInfo 中文件所在的目录一致。
     * @param SmartSubtitlesTaskInput $SmartSubtitlesTask 智能字幕
     * @param TaskNotifyConfig $TaskNotifyConfig 任务的事件通知信息，不填代表不获取事件通知。
     * @param integer $TasksPriority 任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     * @param string $ResourceId 资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。
     * @param integer $SkipMateData 是否跳过元信息获取，可选值： 
0：表示不跳过 
1：表示跳过 
默认值：0	
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
            $this->InputInfo = [];
            foreach ($param["InputInfo"] as $key => $value){
                $obj = new MediaInputInfo();
                $obj->deserialize($value);
                array_push($this->InputInfo, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new SmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("SkipMateData",$param) and $param["SkipMateData"] !== null) {
            $this->SkipMateData = $param["SkipMateData"];
        }
    }
}
