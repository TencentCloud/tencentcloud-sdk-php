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
 * LiveRealTimeClip请求参数结构体
 *
 * @method string getStreamId() 获取<p>推流直播码。</p>
 * @method void setStreamId(string $StreamId) 设置<p>推流直播码。</p>
 * @method string getStartTime() 获取<p>流剪辑的开始时间，格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method void setStartTime(string $StartTime) 设置<p>流剪辑的开始时间，格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method string getEndTime() 获取<p>流剪辑的结束时间，格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method void setEndTime(string $EndTime) 设置<p>流剪辑的结束时间，格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
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
 * @method integer getMetaDataRequired() 获取<p>是否需要返回剪辑后的视频元信息。0 不需要，1 需要。默认不需要。</p>
 * @method void setMetaDataRequired(integer $MetaDataRequired) 设置<p>是否需要返回剪辑后的视频元信息。0 不需要，1 需要。默认不需要。</p>
 * @method string getHost() 获取<p>云点播中添加的用于时移播放的域名，必须在云直播已经<a href="https://cloud.tencent.com/document/product/266/52220#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E">关联录制模板和开通时移服务</a>。<strong>如果本接口的首次调用时间在 2021-01-01T00:00:00Z 之后，则此字段为必选字段。</strong></p>
 * @method void setHost(string $Host) 设置<p>云点播中添加的用于时移播放的域名，必须在云直播已经<a href="https://cloud.tencent.com/document/product/266/52220#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E">关联录制模板和开通时移服务</a>。<strong>如果本接口的首次调用时间在 2021-01-01T00:00:00Z 之后，则此字段为必选字段。</strong></p>
 * @method LiveRealTimeClipStreamInfo getStreamInfo() 获取<p>剪辑的直播流信息：</p><li>默认剪辑直播原始流。</li><li>当StreamInfo中指定的Type为Transcoding，则剪辑TemplateId对应的直播转码流。</li>
 * @method void setStreamInfo(LiveRealTimeClipStreamInfo $StreamInfo) 设置<p>剪辑的直播流信息：</p><li>默认剪辑直播原始流。</li><li>当StreamInfo中指定的Type为Transcoding，则剪辑TemplateId对应的直播转码流。</li>
 * @method string getExtInfo() 获取<p>系统保留字段，请勿填写。</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>系统保留字段，请勿填写。</p>
 */
class LiveRealTimeClipRequest extends AbstractModel
{
    /**
     * @var string <p>推流直播码。</p>
     */
    public $StreamId;

    /**
     * @var string <p>流剪辑的开始时间，格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     */
    public $StartTime;

    /**
     * @var string <p>流剪辑的结束时间，格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     */
    public $EndTime;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

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
     * @var integer <p>是否需要返回剪辑后的视频元信息。0 不需要，1 需要。默认不需要。</p>
     */
    public $MetaDataRequired;

    /**
     * @var string <p>云点播中添加的用于时移播放的域名，必须在云直播已经<a href="https://cloud.tencent.com/document/product/266/52220#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E">关联录制模板和开通时移服务</a>。<strong>如果本接口的首次调用时间在 2021-01-01T00:00:00Z 之后，则此字段为必选字段。</strong></p>
     */
    public $Host;

    /**
     * @var LiveRealTimeClipStreamInfo <p>剪辑的直播流信息：</p><li>默认剪辑直播原始流。</li><li>当StreamInfo中指定的Type为Transcoding，则剪辑TemplateId对应的直播转码流。</li>
     */
    public $StreamInfo;

    /**
     * @var string <p>系统保留字段，请勿填写。</p>
     */
    public $ExtInfo;

    /**
     * @param string $StreamId <p>推流直播码。</p>
     * @param string $StartTime <p>流剪辑的开始时间，格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     * @param string $EndTime <p>流剪辑的结束时间，格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param integer $IsPersistence <p>是否固化。0 不固化，1 固化。默认不固化。</p>
     * @param string $ExpireTime <p>剪辑固化后的视频存储过期时间。格式参照 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。仅 IsPersistence 为 1 时有效，默认剪辑固化的视频永不过期。</p>
     * @param string $Procedure <p>剪辑固化后的视频点播任务流处理，详见<a href="https://cloud.tencent.com/document/product/266/9759">上传指定任务流</a>。仅 IsPersistence 为 1 时有效。</p>
     * @param integer $ClassId <p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/31772">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>仅 IsPersistence 为 1 时有效。
     * @param string $SourceContext <p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。仅 IsPersistence 为 1 时有效。</p>
     * @param string $SessionContext <p>会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，<a href="/document/product/266/9636">任务流状态变更回调</a> 将返回该字段值，最长 1000 个字符。仅 IsPersistence 为 1 时有效。</p>
     * @param integer $MetaDataRequired <p>是否需要返回剪辑后的视频元信息。0 不需要，1 需要。默认不需要。</p>
     * @param string $Host <p>云点播中添加的用于时移播放的域名，必须在云直播已经<a href="https://cloud.tencent.com/document/product/266/52220#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E">关联录制模板和开通时移服务</a>。<strong>如果本接口的首次调用时间在 2021-01-01T00:00:00Z 之后，则此字段为必选字段。</strong></p>
     * @param LiveRealTimeClipStreamInfo $StreamInfo <p>剪辑的直播流信息：</p><li>默认剪辑直播原始流。</li><li>当StreamInfo中指定的Type为Transcoding，则剪辑TemplateId对应的直播转码流。</li>
     * @param string $ExtInfo <p>系统保留字段，请勿填写。</p>
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
        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("MetaDataRequired",$param) and $param["MetaDataRequired"] !== null) {
            $this->MetaDataRequired = $param["MetaDataRequired"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("StreamInfo",$param) and $param["StreamInfo"] !== null) {
            $this->StreamInfo = new LiveRealTimeClipStreamInfo();
            $this->StreamInfo->deserialize($param["StreamInfo"]);
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
