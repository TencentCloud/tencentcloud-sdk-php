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
 * VideoDepthEstimation请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getUrl() 获取输入视频地址，必填。支持三种形态，按前缀自动识别：
vod://{FileId} —— 引用当前账号下的 VOD 媒资。要求媒资存在且未处于禁用状态，否则将报参数错误。源文件不受影响。
http(s)://... —— 公网可下载的视频地址，长度不超过 8182 字符。
data:{mime};base64,{payload} —— Base64 内联媒体，适合小体积素材。解码后大小上限 20 MB，mime 须为视频容器类型（如 video/mp4、video/quicktime）。
 * @method void setUrl(string $Url) 设置输入视频地址，必填。支持三种形态，按前缀自动识别：
vod://{FileId} —— 引用当前账号下的 VOD 媒资。要求媒资存在且未处于禁用状态，否则将报参数错误。源文件不受影响。
http(s)://... —— 公网可下载的视频地址，长度不超过 8182 字符。
data:{mime};base64,{payload} —— Base64 内联媒体，适合小体积素材。解码后大小上限 20 MB，mime 须为视频容器类型（如 video/mp4、video/quicktime）。
 * @method VideoDepthEstimationOutputConfig getOutputConfig() 获取输出存储配置。不传时为临时存储。
 * @method void setOutputConfig(VideoDepthEstimationOutputConfig $OutputConfig) 设置输出存储配置。不传时为临时存储。
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。
 * @method integer getTasksPriority() 获取任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method string getExtInfo() 获取保留字段，特殊用途时使用。
 * @method void setExtInfo(string $ExtInfo) 设置保留字段，特殊用途时使用。
 */
class VideoDepthEstimationRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string 输入视频地址，必填。支持三种形态，按前缀自动识别：
vod://{FileId} —— 引用当前账号下的 VOD 媒资。要求媒资存在且未处于禁用状态，否则将报参数错误。源文件不受影响。
http(s)://... —— 公网可下载的视频地址，长度不超过 8182 字符。
data:{mime};base64,{payload} —— Base64 内联媒体，适合小体积素材。解码后大小上限 20 MB，mime 须为视频容器类型（如 video/mp4、video/quicktime）。
     */
    public $Url;

    /**
     * @var VideoDepthEstimationOutputConfig 输出存储配置。不传时为临时存储。
     */
    public $OutputConfig;

    /**
     * @var string 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。
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
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Url 输入视频地址，必填。支持三种形态，按前缀自动识别：
vod://{FileId} —— 引用当前账号下的 VOD 媒资。要求媒资存在且未处于禁用状态，否则将报参数错误。源文件不受影响。
http(s)://... —— 公网可下载的视频地址，长度不超过 8182 字符。
data:{mime};base64,{payload} —— Base64 内联媒体，适合小体积素材。解码后大小上限 20 MB，mime 须为视频容器类型（如 video/mp4、video/quicktime）。
     * @param VideoDepthEstimationOutputConfig $OutputConfig 输出存储配置。不传时为临时存储。
     * @param string $SessionId 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new VideoDepthEstimationOutputConfig();
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
