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
 * SimpleHlsClip请求参数结构体
 *
 * @method string getUrl() 获取<p>需要裁剪的腾讯云点播 HLS 视频 URL。</p>
 * @method void setUrl(string $Url) 设置<p>需要裁剪的腾讯云点播 HLS 视频 URL。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method float getStartTimeOffset() 获取<p>裁剪的开始偏移时间，单位秒。默认 0，即从视频开头开始裁剪。负数表示距离视频结束多少秒开始裁剪。例如 -10 表示从倒数第 10 秒开始裁剪。</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置<p>裁剪的开始偏移时间，单位秒。默认 0，即从视频开头开始裁剪。负数表示距离视频结束多少秒开始裁剪。例如 -10 表示从倒数第 10 秒开始裁剪。</p>
 * @method float getEndTimeOffset() 获取<p>裁剪的结束偏移时间，单位秒。默认 0，即裁剪到视频尾部。负数表示距离视频结束多少秒结束裁剪。例如 -10 表示到倒数第 10 秒结束裁剪。</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置<p>裁剪的结束偏移时间，单位秒。默认 0，即裁剪到视频尾部。负数表示距离视频结束多少秒结束裁剪。例如 -10 表示到倒数第 10 秒结束裁剪。</p>
 * @method integer getIsPersistence() 获取<p>是否固化。0 不固化，1 固化。默认不固化。</p>
 * @method void setIsPersistence(integer $IsPersistence) 设置<p>是否固化。0 不固化，1 固化。默认不固化。</p>
 * @method string getExpireTime() 获取<p>剪辑固化后的视频存储过期时间。格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。仅 IsPersistence 为 1 时有效，默认剪辑固化的视频永不过期。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>剪辑固化后的视频存储过期时间。格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。仅 IsPersistence 为 1 时有效，默认剪辑固化的视频永不过期。</p>
 * @method string getProcedure() 获取<p>剪辑固化后的视频点播任务流处理，详见<a href="https://cloud.tencent.com/document/product/266/9759">上传指定任务流</a>。仅 IsPersistence 为 1 时有效。</p>
 * @method void setProcedure(string $Procedure) 设置<p>剪辑固化后的视频点播任务流处理，详见<a href="https://cloud.tencent.com/document/product/266/9759">上传指定任务流</a>。仅 IsPersistence 为 1 时有效。</p>
 * @method integer getClassId() 获取<p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/31772">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>仅 IsPersistence 为 1 时有效。
 * @method void setClassId(integer $ClassId) 设置<p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/31772">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>仅 IsPersistence 为 1 时有效。
 * @method string getSourceContext() 获取<p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。仅 IsPersistence 为 1 时有效。</p>
 * @method void setSourceContext(string $SourceContext) 设置<p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。仅 IsPersistence 为 1 时有效。</p>
 * @method string getSessionContext() 获取<p>会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，<a href="/document/product/266/9636">任务流状态变更回调</a> 将返回该字段值，最长 1000 个字符。仅 IsPersistence 为 1 时有效。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，<a href="/document/product/266/9636">任务流状态变更回调</a> 将返回该字段值，最长 1000 个字符。仅 IsPersistence 为 1 时有效。</p>
 * @method string getPrecision() 获取<p>该字段已废弃。</p>
 * @method void setPrecision(string $Precision) 设置<p>该字段已废弃。</p>
 * @method string getOutputMediaType() 获取<p>输出视频类型，取值有：<li>hls: 输出 hls 文件。</li>默认取值 hls。</p>
 * @method void setOutputMediaType(string $OutputMediaType) 设置<p>输出视频类型，取值有：<li>hls: 输出 hls 文件。</li>默认取值 hls。</p>
 * @method string getExtInfo() 获取<p>保留字段，特殊用途时使用。 示例值：&quot;&quot;</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>保留字段，特殊用途时使用。 示例值：&quot;&quot;</p>
 */
class SimpleHlsClipRequest extends AbstractModel
{
    /**
     * @var string <p>需要裁剪的腾讯云点播 HLS 视频 URL。</p>
     */
    public $Url;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var float <p>裁剪的开始偏移时间，单位秒。默认 0，即从视频开头开始裁剪。负数表示距离视频结束多少秒开始裁剪。例如 -10 表示从倒数第 10 秒开始裁剪。</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>裁剪的结束偏移时间，单位秒。默认 0，即裁剪到视频尾部。负数表示距离视频结束多少秒结束裁剪。例如 -10 表示到倒数第 10 秒结束裁剪。</p>
     */
    public $EndTimeOffset;

    /**
     * @var integer <p>是否固化。0 不固化，1 固化。默认不固化。</p>
     */
    public $IsPersistence;

    /**
     * @var string <p>剪辑固化后的视频存储过期时间。格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。仅 IsPersistence 为 1 时有效，默认剪辑固化的视频永不过期。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>剪辑固化后的视频点播任务流处理，详见<a href="https://cloud.tencent.com/document/product/266/9759">上传指定任务流</a>。仅 IsPersistence 为 1 时有效。</p>
     */
    public $Procedure;

    /**
     * @var integer <p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/31772">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>仅 IsPersistence 为 1 时有效。
     */
    public $ClassId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。仅 IsPersistence 为 1 时有效。</p>
     */
    public $SourceContext;

    /**
     * @var string <p>会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，<a href="/document/product/266/9636">任务流状态变更回调</a> 将返回该字段值，最长 1000 个字符。仅 IsPersistence 为 1 时有效。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>该字段已废弃。</p>
     * @deprecated
     */
    public $Precision;

    /**
     * @var string <p>输出视频类型，取值有：<li>hls: 输出 hls 文件。</li>默认取值 hls。</p>
     */
    public $OutputMediaType;

    /**
     * @var string <p>保留字段，特殊用途时使用。 示例值：&quot;&quot;</p>
     */
    public $ExtInfo;

    /**
     * @param string $Url <p>需要裁剪的腾讯云点播 HLS 视频 URL。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param float $StartTimeOffset <p>裁剪的开始偏移时间，单位秒。默认 0，即从视频开头开始裁剪。负数表示距离视频结束多少秒开始裁剪。例如 -10 表示从倒数第 10 秒开始裁剪。</p>
     * @param float $EndTimeOffset <p>裁剪的结束偏移时间，单位秒。默认 0，即裁剪到视频尾部。负数表示距离视频结束多少秒结束裁剪。例如 -10 表示到倒数第 10 秒结束裁剪。</p>
     * @param integer $IsPersistence <p>是否固化。0 不固化，1 固化。默认不固化。</p>
     * @param string $ExpireTime <p>剪辑固化后的视频存储过期时间。格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。仅 IsPersistence 为 1 时有效，默认剪辑固化的视频永不过期。</p>
     * @param string $Procedure <p>剪辑固化后的视频点播任务流处理，详见<a href="https://cloud.tencent.com/document/product/266/9759">上传指定任务流</a>。仅 IsPersistence 为 1 时有效。</p>
     * @param integer $ClassId <p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/31772">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>仅 IsPersistence 为 1 时有效。
     * @param string $SourceContext <p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。仅 IsPersistence 为 1 时有效。</p>
     * @param string $SessionContext <p>会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，<a href="/document/product/266/9636">任务流状态变更回调</a> 将返回该字段值，最长 1000 个字符。仅 IsPersistence 为 1 时有效。</p>
     * @param string $Precision <p>该字段已废弃。</p>
     * @param string $OutputMediaType <p>输出视频类型，取值有：<li>hls: 输出 hls 文件。</li>默认取值 hls。</p>
     * @param string $ExtInfo <p>保留字段，特殊用途时使用。 示例值：&quot;&quot;</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
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

        if (array_key_exists("IsPersistence",$param) and $param["IsPersistence"] !== null) {
            $this->IsPersistence = $param["IsPersistence"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("OutputMediaType",$param) and $param["OutputMediaType"] !== null) {
            $this->OutputMediaType = $param["OutputMediaType"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
