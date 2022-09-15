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
 * LiveRealTimeClip请求参数结构体
 *
 * @method string getStreamId() 获取推流直播码。
 * @method void setStreamId(string $StreamId) 设置推流直播码。
 * @method string getStartTime() 获取流剪辑的开始时间，格式参照 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setStartTime(string $StartTime) 设置流剪辑的开始时间，格式参照 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getEndTime() 获取流剪辑的结束时间，格式参照 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setEndTime(string $EndTime) 设置流剪辑的结束时间，格式参照 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method integer getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method integer getIsPersistence() 获取是否固化。0 不固化，1 固化。默认不固化。
 * @method void setIsPersistence(integer $IsPersistence) 设置是否固化。0 不固化，1 固化。默认不固化。
 * @method string getExpireTime() 获取剪辑固化后的视频存储过期时间。格式参照 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。仅 IsPersistence 为 1 时有效，默认剪辑固化的视频永不过期。
 * @method void setExpireTime(string $ExpireTime) 设置剪辑固化后的视频存储过期时间。格式参照 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。仅 IsPersistence 为 1 时有效，默认剪辑固化的视频永不过期。
 * @method string getProcedure() 获取剪辑固化后的视频点播任务流处理，详见[上传指定任务流](https://cloud.tencent.com/document/product/266/9759)。仅 IsPersistence 为 1 时有效。
 * @method void setProcedure(string $Procedure) 设置剪辑固化后的视频点播任务流处理，详见[上传指定任务流](https://cloud.tencent.com/document/product/266/9759)。仅 IsPersistence 为 1 时有效。
 * @method integer getClassId() 获取分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
仅 IsPersistence 为 1 时有效。
 * @method void setClassId(integer $ClassId) 设置分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
仅 IsPersistence 为 1 时有效。
 * @method string getSourceContext() 获取来源上下文，用于透传用户请求信息，[上传完成回调](/document/product/266/7830) 将返回该字段值，最长 250 个字符。仅 IsPersistence 为 1 时有效。
 * @method void setSourceContext(string $SourceContext) 设置来源上下文，用于透传用户请求信息，[上传完成回调](/document/product/266/7830) 将返回该字段值，最长 250 个字符。仅 IsPersistence 为 1 时有效。
 * @method string getSessionContext() 获取会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，[任务流状态变更回调](/document/product/266/9636) 将返回该字段值，最长 1000 个字符。仅 IsPersistence 为 1 时有效。
 * @method void setSessionContext(string $SessionContext) 设置会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，[任务流状态变更回调](/document/product/266/9636) 将返回该字段值，最长 1000 个字符。仅 IsPersistence 为 1 时有效。
 * @method integer getMetaDataRequired() 获取是否需要返回剪辑后的视频元信息。0 不需要，1 需要。默认不需要。
 * @method void setMetaDataRequired(integer $MetaDataRequired) 设置是否需要返回剪辑后的视频元信息。0 不需要，1 需要。默认不需要。
 * @method string getHost() 获取云点播中添加的用于时移播放的域名，必须在云直播已经[关联录制模板和开通时移服务](https://cloud.tencent.com/document/product/266/52220#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E)。**如果本接口的首次调用时间在 2021-01-01T00:00:00Z 之后，则此字段为必选字段。**
 * @method void setHost(string $Host) 设置云点播中添加的用于时移播放的域名，必须在云直播已经[关联录制模板和开通时移服务](https://cloud.tencent.com/document/product/266/52220#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E)。**如果本接口的首次调用时间在 2021-01-01T00:00:00Z 之后，则此字段为必选字段。**
 * @method LiveRealTimeClipStreamInfo getStreamInfo() 获取剪辑的直播流信息：
<li>默认剪辑直播原始流。</li>
<li>当StreamInfo中指定的Type为Transcoding，则剪辑TemplateId对应的直播转码流。</li>
 * @method void setStreamInfo(LiveRealTimeClipStreamInfo $StreamInfo) 设置剪辑的直播流信息：
<li>默认剪辑直播原始流。</li>
<li>当StreamInfo中指定的Type为Transcoding，则剪辑TemplateId对应的直播转码流。</li>
 * @method string getExtInfo() 获取系统保留字段，请勿填写。
 * @method void setExtInfo(string $ExtInfo) 设置系统保留字段，请勿填写。
 */
class LiveRealTimeClipRequest extends AbstractModel
{
    /**
     * @var string 推流直播码。
     */
    public $StreamId;

    /**
     * @var string 流剪辑的开始时间，格式参照 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $StartTime;

    /**
     * @var string 流剪辑的结束时间，格式参照 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $EndTime;

    /**
     * @var integer <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var integer 是否固化。0 不固化，1 固化。默认不固化。
     */
    public $IsPersistence;

    /**
     * @var string 剪辑固化后的视频存储过期时间。格式参照 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。仅 IsPersistence 为 1 时有效，默认剪辑固化的视频永不过期。
     */
    public $ExpireTime;

    /**
     * @var string 剪辑固化后的视频点播任务流处理，详见[上传指定任务流](https://cloud.tencent.com/document/product/266/9759)。仅 IsPersistence 为 1 时有效。
     */
    public $Procedure;

    /**
     * @var integer 分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
仅 IsPersistence 为 1 时有效。
     */
    public $ClassId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，[上传完成回调](/document/product/266/7830) 将返回该字段值，最长 250 个字符。仅 IsPersistence 为 1 时有效。
     */
    public $SourceContext;

    /**
     * @var string 会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，[任务流状态变更回调](/document/product/266/9636) 将返回该字段值，最长 1000 个字符。仅 IsPersistence 为 1 时有效。
     */
    public $SessionContext;

    /**
     * @var integer 是否需要返回剪辑后的视频元信息。0 不需要，1 需要。默认不需要。
     */
    public $MetaDataRequired;

    /**
     * @var string 云点播中添加的用于时移播放的域名，必须在云直播已经[关联录制模板和开通时移服务](https://cloud.tencent.com/document/product/266/52220#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E)。**如果本接口的首次调用时间在 2021-01-01T00:00:00Z 之后，则此字段为必选字段。**
     */
    public $Host;

    /**
     * @var LiveRealTimeClipStreamInfo 剪辑的直播流信息：
<li>默认剪辑直播原始流。</li>
<li>当StreamInfo中指定的Type为Transcoding，则剪辑TemplateId对应的直播转码流。</li>
     */
    public $StreamInfo;

    /**
     * @var string 系统保留字段，请勿填写。
     */
    public $ExtInfo;

    /**
     * @param string $StreamId 推流直播码。
     * @param string $StartTime 流剪辑的开始时间，格式参照 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $EndTime 流剪辑的结束时间，格式参照 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param integer $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param integer $IsPersistence 是否固化。0 不固化，1 固化。默认不固化。
     * @param string $ExpireTime 剪辑固化后的视频存储过期时间。格式参照 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。仅 IsPersistence 为 1 时有效，默认剪辑固化的视频永不过期。
     * @param string $Procedure 剪辑固化后的视频点播任务流处理，详见[上传指定任务流](https://cloud.tencent.com/document/product/266/9759)。仅 IsPersistence 为 1 时有效。
     * @param integer $ClassId 分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
仅 IsPersistence 为 1 时有效。
     * @param string $SourceContext 来源上下文，用于透传用户请求信息，[上传完成回调](/document/product/266/7830) 将返回该字段值，最长 250 个字符。仅 IsPersistence 为 1 时有效。
     * @param string $SessionContext 会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，[任务流状态变更回调](/document/product/266/9636) 将返回该字段值，最长 1000 个字符。仅 IsPersistence 为 1 时有效。
     * @param integer $MetaDataRequired 是否需要返回剪辑后的视频元信息。0 不需要，1 需要。默认不需要。
     * @param string $Host 云点播中添加的用于时移播放的域名，必须在云直播已经[关联录制模板和开通时移服务](https://cloud.tencent.com/document/product/266/52220#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E)。**如果本接口的首次调用时间在 2021-01-01T00:00:00Z 之后，则此字段为必选字段。**
     * @param LiveRealTimeClipStreamInfo $StreamInfo 剪辑的直播流信息：
<li>默认剪辑直播原始流。</li>
<li>当StreamInfo中指定的Type为Transcoding，则剪辑TemplateId对应的直播转码流。</li>
     * @param string $ExtInfo 系统保留字段，请勿填写。
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
