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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExtractBlindWatermark请求参数结构体
 *
 * @method string getType() 获取数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li><li>blind-trace：溯源ab序列水印；</li>
 * @method void setType(string $Type) 设置数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li><li>blind-trace：溯源ab序列水印；</li>
 * @method ExtractBlindWatermarkInputInfo getInputInfo() 获取媒体处理的文件输入信息。
 * @method void setInputInfo(ExtractBlindWatermarkInputInfo $InputInfo) 设置媒体处理的文件输入信息。
 * @method integer getSubAppId() 获取添加水印时的点播应用 ID。注意不管是传入FILEID还是URL，都必须与添加水印时的SubAppId吻合才能提取到水印。
 * @method void setSubAppId(integer $SubAppId) 设置添加水印时的点播应用 ID。注意不管是传入FILEID还是URL，都必须与添加水印时的SubAppId吻合才能提取到水印。
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() 获取提取数字水印任务配置
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) 设置提取数字水印任务配置
 * @method string getSessionContext() 获取标识来源上下文，用于透传用户请求信息，在 ExtractBlindWatermarkComplete 回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置标识来源上下文，用于透传用户请求信息，在 ExtractBlindWatermarkComplete 回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method string getSessionId() 获取用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method integer getTasksPriority() 获取任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 */
class ExtractBlindWatermarkRequest extends AbstractModel
{
    /**
     * @var string 数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li><li>blind-trace：溯源ab序列水印；</li>
     */
    public $Type;

    /**
     * @var ExtractBlindWatermarkInputInfo 媒体处理的文件输入信息。
     */
    public $InputInfo;

    /**
     * @var integer 添加水印时的点播应用 ID。注意不管是传入FILEID还是URL，都必须与添加水印时的SubAppId吻合才能提取到水印。
     */
    public $SubAppId;

    /**
     * @var ExtractBlindWatermarkTaskConfig 提取数字水印任务配置
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @var string 标识来源上下文，用于透传用户请求信息，在 ExtractBlindWatermarkComplete 回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var string 用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var integer 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     */
    public $TasksPriority;

    /**
     * @param string $Type 数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li><li>blind-trace：溯源ab序列水印；</li>
     * @param ExtractBlindWatermarkInputInfo $InputInfo 媒体处理的文件输入信息。
     * @param integer $SubAppId 添加水印时的点播应用 ID。注意不管是传入FILEID还是URL，都必须与添加水印时的SubAppId吻合才能提取到水印。
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig 提取数字水印任务配置
     * @param string $SessionContext 标识来源上下文，用于透传用户请求信息，在 ExtractBlindWatermarkComplete 回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。
     * @param string $SessionId 用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param integer $TasksPriority 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
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
            $this->InputInfo = new ExtractBlindWatermarkInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ExtractBlindWatermarkConfig",$param) and $param["ExtractBlindWatermarkConfig"] !== null) {
            $this->ExtractBlindWatermarkConfig = new ExtractBlindWatermarkTaskConfig();
            $this->ExtractBlindWatermarkConfig->deserialize($param["ExtractBlindWatermarkConfig"]);
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
