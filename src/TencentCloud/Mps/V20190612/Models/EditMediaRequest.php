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
 * EditMedia请求参数结构体
 *
 * @method array getFileInfos() 获取输入的视频文件信息。
 * @method void setFileInfos(array $FileInfos) 设置输入的视频文件信息。
 * @method TaskOutputStorage getOutputStorage() 获取媒体处理输出文件的目标存储。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置媒体处理输出文件的目标存储。
 * @method string getOutputObjectPath() 获取媒体处理输出文件的目标路径。

注意：对于复杂合成任务，路径中的文件名只可为数字、字母、-、_ 的组合，最长 64 个字符。

 * @method void setOutputObjectPath(string $OutputObjectPath) 设置媒体处理输出文件的目标路径。

注意：对于复杂合成任务，路径中的文件名只可为数字、字母、-、_ 的组合，最长 64 个字符。

 * @method EditMediaOutputConfig getOutputConfig() 获取【剪辑】任务生成的文件配置。
 * @method void setOutputConfig(EditMediaOutputConfig $OutputConfig) 设置【剪辑】任务生成的文件配置。
 * @method ComposeMediaConfig getComposeConfig() 获取【合成】任务配置。

注意：当其不为空时，认为是合成任务，否则按剪辑任务处理。
 * @method void setComposeConfig(ComposeMediaConfig $ComposeConfig) 设置【合成】任务配置。

注意：当其不为空时，认为是合成任务，否则按剪辑任务处理。
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取任务的事件通知信息，不填代表不获取事件通知。
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置任务的事件通知信息，不填代表不获取事件通知。
 * @method integer getTasksPriority() 获取任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 */
class EditMediaRequest extends AbstractModel
{
    /**
     * @var array 输入的视频文件信息。
     */
    public $FileInfos;

    /**
     * @var TaskOutputStorage 媒体处理输出文件的目标存储。
     */
    public $OutputStorage;

    /**
     * @var string 媒体处理输出文件的目标路径。

注意：对于复杂合成任务，路径中的文件名只可为数字、字母、-、_ 的组合，最长 64 个字符。

     */
    public $OutputObjectPath;

    /**
     * @var EditMediaOutputConfig 【剪辑】任务生成的文件配置。
     */
    public $OutputConfig;

    /**
     * @var ComposeMediaConfig 【合成】任务配置。

注意：当其不为空时，认为是合成任务，否则按剪辑任务处理。
     */
    public $ComposeConfig;

    /**
     * @var TaskNotifyConfig 任务的事件通知信息，不填代表不获取事件通知。
     */
    public $TaskNotifyConfig;

    /**
     * @var integer 任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
     */
    public $TasksPriority;

    /**
     * @var string 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @param array $FileInfos 输入的视频文件信息。
     * @param TaskOutputStorage $OutputStorage 媒体处理输出文件的目标存储。
     * @param string $OutputObjectPath 媒体处理输出文件的目标路径。

注意：对于复杂合成任务，路径中的文件名只可为数字、字母、-、_ 的组合，最长 64 个字符。

     * @param EditMediaOutputConfig $OutputConfig 【剪辑】任务生成的文件配置。
     * @param ComposeMediaConfig $ComposeConfig 【合成】任务配置。

注意：当其不为空时，认为是合成任务，否则按剪辑任务处理。
     * @param TaskNotifyConfig $TaskNotifyConfig 任务的事件通知信息，不填代表不获取事件通知。
     * @param integer $TasksPriority 任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
     * @param string $SessionId 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
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
        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new EditMediaFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new EditMediaOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("ComposeConfig",$param) and $param["ComposeConfig"] !== null) {
            $this->ComposeConfig = new ComposeMediaConfig();
            $this->ComposeConfig->deserialize($param["ComposeConfig"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
