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
 * @method array getInputInfo() 获取<p>媒体处理的文件输入信息。</p>
 * @method void setInputInfo(array $InputInfo) 设置<p>媒体处理的文件输入信息。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。<br>注意：当InputInfo.Type为URL时，该参数是必填项，目前只支持COS输出</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。<br>注意：当InputInfo.Type为URL时，该参数是必填项，目前只支持COS输出</p>
 * @method string getOutputDir() 获取<p>媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如<code>/movie/201907/</code>。<br>如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
 * @method void setOutputDir(string $OutputDir) 设置<p>媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如<code>/movie/201907/</code>。<br>如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
 * @method SmartSubtitlesTaskInput getSmartSubtitlesTask() 获取<p>智能字幕</p>
 * @method void setSmartSubtitlesTask(SmartSubtitlesTaskInput $SmartSubtitlesTask) 设置<p>智能字幕</p>
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取<p>任务的事件通知信息，不填代表不获取事件通知。</p>
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置<p>任务的事件通知信息，不填代表不获取事件通知。</p>
 * @method integer getTasksPriority() 获取<p>任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method string getResourceId() 获取<p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
 * @method integer getSkipMateData() 获取<p>是否跳过元信息获取，可选值：<br>0：表示不跳过<br>1：表示跳过<br>默认值：0</p>
 * @method void setSkipMateData(integer $SkipMateData) 设置<p>是否跳过元信息获取，可选值：<br>0：表示不跳过<br>1：表示跳过<br>默认值：0</p>
 * @method string getTaskMode() 获取<p>执行模式，可选值：</p><li>Parallel: 并发执行</li><li>Serial: 串行执行</li>注意：默认并发执行。
 * @method void setTaskMode(string $TaskMode) 设置<p>执行模式，可选值：</p><li>Parallel: 并发执行</li><li>Serial: 串行执行</li>注意：默认并发执行。
 */
class BatchProcessMediaRequest extends AbstractModel
{
    /**
     * @var array <p>媒体处理的文件输入信息。</p>
     */
    public $InputInfo;

    /**
     * @var TaskOutputStorage <p>媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。<br>注意：当InputInfo.Type为URL时，该参数是必填项，目前只支持COS输出</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如<code>/movie/201907/</code>。<br>如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
     */
    public $OutputDir;

    /**
     * @var SmartSubtitlesTaskInput <p>智能字幕</p>
     */
    public $SmartSubtitlesTask;

    /**
     * @var TaskNotifyConfig <p>任务的事件通知信息，不填代表不获取事件通知。</p>
     */
    public $TaskNotifyConfig;

    /**
     * @var integer <p>任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>是否跳过元信息获取，可选值：<br>0：表示不跳过<br>1：表示跳过<br>默认值：0</p>
     */
    public $SkipMateData;

    /**
     * @var string <p>执行模式，可选值：</p><li>Parallel: 并发执行</li><li>Serial: 串行执行</li>注意：默认并发执行。
     */
    public $TaskMode;

    /**
     * @param array $InputInfo <p>媒体处理的文件输入信息。</p>
     * @param TaskOutputStorage $OutputStorage <p>媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。<br>注意：当InputInfo.Type为URL时，该参数是必填项，目前只支持COS输出</p>
     * @param string $OutputDir <p>媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如<code>/movie/201907/</code>。<br>如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
     * @param SmartSubtitlesTaskInput $SmartSubtitlesTask <p>智能字幕</p>
     * @param TaskNotifyConfig $TaskNotifyConfig <p>任务的事件通知信息，不填代表不获取事件通知。</p>
     * @param integer $TasksPriority <p>任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     * @param string $ResourceId <p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
     * @param integer $SkipMateData <p>是否跳过元信息获取，可选值：<br>0：表示不跳过<br>1：表示跳过<br>默认值：0</p>
     * @param string $TaskMode <p>执行模式，可选值：</p><li>Parallel: 并发执行</li><li>Serial: 串行执行</li>注意：默认并发执行。
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

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }
    }
}
