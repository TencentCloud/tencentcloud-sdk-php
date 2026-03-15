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
 * ProcessImageAsync请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getFileId() 获取<p>需要进行图片处理的FileId。不能与Url同时输入。</p>
 * @method void setFileId(string $FileId) 设置<p>需要进行图片处理的FileId。不能与Url同时输入。</p>
 * @method string getUrl() 获取<p>需要进行图片处理的Url。不能与FileId同时输入。</p>
 * @method void setUrl(string $Url) 设置<p>需要进行图片处理的Url。不能与FileId同时输入。</p>
 * @method string getBase64() 获取<p>需要进行图片处理的Base64，要求图片文件小于4MB。使用 Base64 时，请不要添加任何前缀如 <code>data:image/png;base64,</code>，只需提供 Base64 编码字符串本身。</p>
 * @method void setBase64(string $Base64) 设置<p>需要进行图片处理的Base64，要求图片文件小于4MB。使用 Base64 时，请不要添加任何前缀如 <code>data:image/png;base64,</code>，只需提供 Base64 编码字符串本身。</p>
 * @method ProcessImageAsyncTaskInput getImageTaskInput() 获取<p>图片处理参数。</p>
 * @method void setImageTaskInput(ProcessImageAsyncTaskInput $ImageTaskInput) 设置<p>图片处理参数。</p>
 * @method ProcessImageAsyncOutputConfig getOutputConfig() 获取<p>图片处理任务的输出媒体文件配置。</p>
 * @method void setOutputConfig(ProcessImageAsyncOutputConfig $OutputConfig) 设置<p>图片处理任务的输出媒体文件配置。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method integer getTasksPriority() 获取<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method string getExtInfo() 获取<p>保留字段，特殊用途时使用。</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>保留字段，特殊用途时使用。</p>
 */
class ProcessImageAsyncRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>需要进行图片处理的FileId。不能与Url同时输入。</p>
     */
    public $FileId;

    /**
     * @var string <p>需要进行图片处理的Url。不能与FileId同时输入。</p>
     */
    public $Url;

    /**
     * @var string <p>需要进行图片处理的Base64，要求图片文件小于4MB。使用 Base64 时，请不要添加任何前缀如 <code>data:image/png;base64,</code>，只需提供 Base64 编码字符串本身。</p>
     */
    public $Base64;

    /**
     * @var ProcessImageAsyncTaskInput <p>图片处理参数。</p>
     */
    public $ImageTaskInput;

    /**
     * @var ProcessImageAsyncOutputConfig <p>图片处理任务的输出媒体文件配置。</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>保留字段，特殊用途时使用。</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $FileId <p>需要进行图片处理的FileId。不能与Url同时输入。</p>
     * @param string $Url <p>需要进行图片处理的Url。不能与FileId同时输入。</p>
     * @param string $Base64 <p>需要进行图片处理的Base64，要求图片文件小于4MB。使用 Base64 时，请不要添加任何前缀如 <code>data:image/png;base64,</code>，只需提供 Base64 编码字符串本身。</p>
     * @param ProcessImageAsyncTaskInput $ImageTaskInput <p>图片处理参数。</p>
     * @param ProcessImageAsyncOutputConfig $OutputConfig <p>图片处理任务的输出媒体文件配置。</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
     * @param integer $TasksPriority <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     * @param string $ExtInfo <p>保留字段，特殊用途时使用。</p>
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Base64",$param) and $param["Base64"] !== null) {
            $this->Base64 = $param["Base64"];
        }

        if (array_key_exists("ImageTaskInput",$param) and $param["ImageTaskInput"] !== null) {
            $this->ImageTaskInput = new ProcessImageAsyncTaskInput();
            $this->ImageTaskInput->deserialize($param["ImageTaskInput"]);
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new ProcessImageAsyncOutputConfig();
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
