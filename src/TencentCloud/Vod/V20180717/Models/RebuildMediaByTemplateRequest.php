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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RebuildMediaByTemplate请求参数结构体
 *
 * @method string getFileId() 获取媒体文件 ID。
 * @method void setFileId(string $FileId) 设置媒体文件 ID。
 * @method integer getDefinition() 获取音画质重生模板 ID。
 * @method void setDefinition(integer $Definition) 设置音画质重生模板 ID。
 * @method string getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(string $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method float getStartTimeOffset() 获取起始偏移时间，单位：秒，不填表示从视频开始截取。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置起始偏移时间，单位：秒，不填表示从视频开始截取。
 * @method float getEndTimeOffset() 获取结束偏移时间，单位：秒，不填表示截取到视频末尾。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置结束偏移时间，单位：秒，不填表示截取到视频末尾。
 * @method RebuildMediaOutputConfig getOutputConfig() 获取音画质重生后的文件配置。
 * @method void setOutputConfig(RebuildMediaOutputConfig $OutputConfig) 设置音画质重生后的文件配置。
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method integer getTasksPriority() 获取任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method string getExtInfo() 获取保留字段，特殊用途时使用。
 * @method void setExtInfo(string $ExtInfo) 设置保留字段，特殊用途时使用。
 */
class RebuildMediaByTemplateRequest extends AbstractModel
{
    /**
     * @var string 媒体文件 ID。
     */
    public $FileId;

    /**
     * @var integer 音画质重生模板 ID。
     */
    public $Definition;

    /**
     * @var string <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var float 起始偏移时间，单位：秒，不填表示从视频开始截取。
     */
    public $StartTimeOffset;

    /**
     * @var float 结束偏移时间，单位：秒，不填表示截取到视频末尾。
     */
    public $EndTimeOffset;

    /**
     * @var RebuildMediaOutputConfig 音画质重生后的文件配置。
     */
    public $OutputConfig;

    /**
     * @var string 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var integer 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     */
    public $TasksPriority;

    /**
     * @var string 保留字段，特殊用途时使用。
     */
    public $ExtInfo;

    /**
     * @param string $FileId 媒体文件 ID。
     * @param integer $Definition 音画质重生模板 ID。
     * @param string $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param float $StartTimeOffset 起始偏移时间，单位：秒，不填表示从视频开始截取。
     * @param float $EndTimeOffset 结束偏移时间，单位：秒，不填表示截取到视频末尾。
     * @param RebuildMediaOutputConfig $OutputConfig 音画质重生后的文件配置。
     * @param string $SessionId 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     * @param integer $TasksPriority 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     * @param string $ExtInfo 保留字段，特殊用途时使用。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new RebuildMediaOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
