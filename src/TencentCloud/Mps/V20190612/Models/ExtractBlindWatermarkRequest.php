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
 * ExtractBlindWatermark请求参数结构体
 *
 * @method string getType() 获取<p>数字水印类型，可选值：</p><li>blind-basic：基础版权数字水印；</li><li>blind-abseq：ab序列版权数字水印；</li><li>blind-vega：vega数字水印；</li>
 * @method void setType(string $Type) 设置<p>数字水印类型，可选值：</p><li>blind-basic：基础版权数字水印；</li><li>blind-abseq：ab序列版权数字水印；</li><li>blind-vega：vega数字水印；</li>
 * @method MediaInputInfo getInputInfo() 获取<p>媒体处理的文件输入信息。</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置<p>媒体处理的文件输入信息。</p>
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取<p>任务的事件通知信息，不填代表不获取事件通知。</p>
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置<p>任务的事件通知信息，不填代表不获取事件通知。</p>
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() 获取<p>提取数字水印任务配置</p>
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) 设置<p>提取数字水印任务配置</p>
 * @method string getResourceId() 获取<p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
 */
class ExtractBlindWatermarkRequest extends AbstractModel
{
    /**
     * @var string <p>数字水印类型，可选值：</p><li>blind-basic：基础版权数字水印；</li><li>blind-abseq：ab序列版权数字水印；</li><li>blind-vega：vega数字水印；</li>
     */
    public $Type;

    /**
     * @var MediaInputInfo <p>媒体处理的文件输入信息。</p>
     */
    public $InputInfo;

    /**
     * @var TaskNotifyConfig <p>任务的事件通知信息，不填代表不获取事件通知。</p>
     */
    public $TaskNotifyConfig;

    /**
     * @var ExtractBlindWatermarkTaskConfig <p>提取数字水印任务配置</p>
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @var string <p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
     */
    public $ResourceId;

    /**
     * @param string $Type <p>数字水印类型，可选值：</p><li>blind-basic：基础版权数字水印；</li><li>blind-abseq：ab序列版权数字水印；</li><li>blind-vega：vega数字水印；</li>
     * @param MediaInputInfo $InputInfo <p>媒体处理的文件输入信息。</p>
     * @param TaskNotifyConfig $TaskNotifyConfig <p>任务的事件通知信息，不填代表不获取事件通知。</p>
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig <p>提取数字水印任务配置</p>
     * @param string $ResourceId <p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("ExtractBlindWatermarkConfig",$param) and $param["ExtractBlindWatermarkConfig"] !== null) {
            $this->ExtractBlindWatermarkConfig = new ExtractBlindWatermarkTaskConfig();
            $this->ExtractBlindWatermarkConfig->deserialize($param["ExtractBlindWatermarkConfig"]);
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
