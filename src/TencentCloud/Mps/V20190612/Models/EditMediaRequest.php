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
 * @method array getFileInfos() 获取<p>输入的视频文件信息。</p>
 * @method void setFileInfos(array $FileInfos) 设置<p>输入的视频文件信息。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>媒体处理输出文件的目标存储。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>媒体处理输出文件的目标存储。</p>
 * @method string getOutputObjectPath() 获取<p>媒体处理输出文件的目标路径。</p><p>注意：对于复杂合成任务，路径中的文件名只可为数字、字母、-、_ 的组合，最长 64 个字符。</p>
 * @method void setOutputObjectPath(string $OutputObjectPath) 设置<p>媒体处理输出文件的目标路径。</p><p>注意：对于复杂合成任务，路径中的文件名只可为数字、字母、-、_ 的组合，最长 64 个字符。</p>
 * @method EditMediaOutputConfig getOutputConfig() 获取<p>【剪辑】任务生成的文件配置。</p>
 * @method void setOutputConfig(EditMediaOutputConfig $OutputConfig) 设置<p>【剪辑】任务生成的文件配置。</p>
 * @method ComposeMediaConfig getComposeConfig() 获取<p>【合成】任务配置。</p><p>注意：当其不为空时，认为是合成任务，否则按剪辑任务处理。</p>
 * @method void setComposeConfig(ComposeMediaConfig $ComposeConfig) 设置<p>【合成】任务配置。</p><p>注意：当其不为空时，认为是合成任务，否则按剪辑任务处理。</p>
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取<p>任务的事件通知信息，不填代表不获取事件通知。</p>
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置<p>任务的事件通知信息，不填代表不获取事件通知。</p>
 * @method integer getTasksPriority() 获取<p>任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method string getResourceId() 获取<p>资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。</p>
 */
class EditMediaRequest extends AbstractModel
{
    /**
     * @var array <p>输入的视频文件信息。</p>
     */
    public $FileInfos;

    /**
     * @var TaskOutputStorage <p>媒体处理输出文件的目标存储。</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>媒体处理输出文件的目标路径。</p><p>注意：对于复杂合成任务，路径中的文件名只可为数字、字母、-、_ 的组合，最长 64 个字符。</p>
     */
    public $OutputObjectPath;

    /**
     * @var EditMediaOutputConfig <p>【剪辑】任务生成的文件配置。</p>
     */
    public $OutputConfig;

    /**
     * @var ComposeMediaConfig <p>【合成】任务配置。</p><p>注意：当其不为空时，认为是合成任务，否则按剪辑任务处理。</p>
     */
    public $ComposeConfig;

    /**
     * @var TaskNotifyConfig <p>任务的事件通知信息，不填代表不获取事件通知。</p>
     */
    public $TaskNotifyConfig;

    /**
     * @var integer <p>任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。</p>
     */
    public $ResourceId;

    /**
     * @param array $FileInfos <p>输入的视频文件信息。</p>
     * @param TaskOutputStorage $OutputStorage <p>媒体处理输出文件的目标存储。</p>
     * @param string $OutputObjectPath <p>媒体处理输出文件的目标路径。</p><p>注意：对于复杂合成任务，路径中的文件名只可为数字、字母、-、_ 的组合，最长 64 个字符。</p>
     * @param EditMediaOutputConfig $OutputConfig <p>【剪辑】任务生成的文件配置。</p>
     * @param ComposeMediaConfig $ComposeConfig <p>【合成】任务配置。</p><p>注意：当其不为空时，认为是合成任务，否则按剪辑任务处理。</p>
     * @param TaskNotifyConfig $TaskNotifyConfig <p>任务的事件通知信息，不填代表不获取事件通知。</p>
     * @param integer $TasksPriority <p>任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     * @param string $ResourceId <p>资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。</p>
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
