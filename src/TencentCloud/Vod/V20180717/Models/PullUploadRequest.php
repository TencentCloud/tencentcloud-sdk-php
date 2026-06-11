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
 * PullUpload请求参数结构体
 *
 * @method string getMediaUrl() 获取<p>要拉取的媒体 URL，暂不支持拉取 Dash 格式（可以支持 HLS）。<br>支持的扩展名详见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">媒体类型</a>。请确保媒体 URL 可以访问。</p>
 * @method void setMediaUrl(string $MediaUrl) 设置<p>要拉取的媒体 URL，暂不支持拉取 Dash 格式（可以支持 HLS）。<br>支持的扩展名详见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">媒体类型</a>。请确保媒体 URL 可以访问。</p>
 * @method string getMediaType() 获取<p>媒体文件类型（扩展名），支持的类型详见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">媒体类型</a>。<br>如果 MediaType 不填或取值为空字符串，将根据 MediaUrl 自动获取文件类型。</p>
 * @method void setMediaType(string $MediaType) 设置<p>媒体文件类型（扩展名），支持的类型详见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">媒体类型</a>。<br>如果 MediaType 不填或取值为空字符串，将根据 MediaUrl 自动获取文件类型。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getMediaName() 获取<p>媒体名称。</p>
 * @method void setMediaName(string $MediaName) 设置<p>媒体名称。</p>
 * @method string getCoverUrl() 获取<p>要拉取的视频封面 URL。支持的文件格式：gif、jpeg（jpg）、png。</p>
 * @method void setCoverUrl(string $CoverUrl) 设置<p>要拉取的视频封面 URL。支持的文件格式：gif、jpeg（jpg）、png。</p>
 * @method string getProcedure() 获取<p>媒体后续任务操作，详见<a href="https://cloud.tencent.com/document/product/266/9759">上传指定任务流</a>。</p>
 * @method void setProcedure(string $Procedure) 设置<p>媒体后续任务操作，详见<a href="https://cloud.tencent.com/document/product/266/9759">上传指定任务流</a>。</p>
 * @method string getExpireTime() 获取<p>媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method string getStorageRegion() 获取<p>指定上传园区，仅适用于对上传地域有特殊需求的用户：</p><li>不填默认上传至您的[默认地域](https://cloud.tencent.com/document/product/266/14059?from=11329#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4)。</li><li>若指定上传园区，请先确认[上传存储设置](https://cloud.tencent.com/document/product/266/14059?from=11329#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4)已经开启相应的存储地域。</li>
 * @method void setStorageRegion(string $StorageRegion) 设置<p>指定上传园区，仅适用于对上传地域有特殊需求的用户：</p><li>不填默认上传至您的[默认地域](https://cloud.tencent.com/document/product/266/14059?from=11329#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4)。</li><li>若指定上传园区，请先确认[上传存储设置](https://cloud.tencent.com/document/product/266/14059?from=11329#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4)已经开启相应的存储地域。</li>
 * @method integer getClassId() 获取<p>分类ID，用于对媒体进行分类管理，可通过<a href="https://cloud.tencent.com/document/product/266/31772">创建分类</a>接口，创建分类，获得分类 ID。</p>
 * @method void setClassId(integer $ClassId) 设置<p>分类ID，用于对媒体进行分类管理，可通过<a href="https://cloud.tencent.com/document/product/266/31772">创建分类</a>接口，创建分类，获得分类 ID。</p>
 * @method integer getTasksPriority() 获取<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，当指定 Procedure 任务后，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，当指定 Procedure 任务后，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getExtInfo() 获取<p>保留字段，特殊用途时使用。</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>保留字段，特殊用途时使用。</p>
 * @method string getSourceContext() 获取<p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。</p>
 * @method void setSourceContext(string $SourceContext) 设置<p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。</p>
 * @method string getMediaStoragePath() 获取<p>媒体存储路径，以/开头。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以指定存储路径。</p>
 * @method void setMediaStoragePath(string $MediaStoragePath) 设置<p>媒体存储路径，以/开头。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以指定存储路径。</p>
 */
class PullUploadRequest extends AbstractModel
{
    /**
     * @var string <p>要拉取的媒体 URL，暂不支持拉取 Dash 格式（可以支持 HLS）。<br>支持的扩展名详见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">媒体类型</a>。请确保媒体 URL 可以访问。</p>
     */
    public $MediaUrl;

    /**
     * @var string <p>媒体文件类型（扩展名），支持的类型详见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">媒体类型</a>。<br>如果 MediaType 不填或取值为空字符串，将根据 MediaUrl 自动获取文件类型。</p>
     */
    public $MediaType;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>媒体名称。</p>
     */
    public $MediaName;

    /**
     * @var string <p>要拉取的视频封面 URL。支持的文件格式：gif、jpeg（jpg）、png。</p>
     */
    public $CoverUrl;

    /**
     * @var string <p>媒体后续任务操作，详见<a href="https://cloud.tencent.com/document/product/266/9759">上传指定任务流</a>。</p>
     */
    public $Procedure;

    /**
     * @var string <p>媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>指定上传园区，仅适用于对上传地域有特殊需求的用户：</p><li>不填默认上传至您的[默认地域](https://cloud.tencent.com/document/product/266/14059?from=11329#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4)。</li><li>若指定上传园区，请先确认[上传存储设置](https://cloud.tencent.com/document/product/266/14059?from=11329#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4)已经开启相应的存储地域。</li>
     */
    public $StorageRegion;

    /**
     * @var integer <p>分类ID，用于对媒体进行分类管理，可通过<a href="https://cloud.tencent.com/document/product/266/31772">创建分类</a>接口，创建分类，获得分类 ID。</p>
     */
    public $ClassId;

    /**
     * @var integer <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，当指定 Procedure 任务后，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>保留字段，特殊用途时使用。</p>
     */
    public $ExtInfo;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。</p>
     */
    public $SourceContext;

    /**
     * @var string <p>媒体存储路径，以/开头。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以指定存储路径。</p>
     */
    public $MediaStoragePath;

    /**
     * @param string $MediaUrl <p>要拉取的媒体 URL，暂不支持拉取 Dash 格式（可以支持 HLS）。<br>支持的扩展名详见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">媒体类型</a>。请确保媒体 URL 可以访问。</p>
     * @param string $MediaType <p>媒体文件类型（扩展名），支持的类型详见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.AA.92.E4.BD.93.E7.B1.BB.E5.9E.8B">媒体类型</a>。<br>如果 MediaType 不填或取值为空字符串，将根据 MediaUrl 自动获取文件类型。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $MediaName <p>媒体名称。</p>
     * @param string $CoverUrl <p>要拉取的视频封面 URL。支持的文件格式：gif、jpeg（jpg）、png。</p>
     * @param string $Procedure <p>媒体后续任务操作，详见<a href="https://cloud.tencent.com/document/product/266/9759">上传指定任务流</a>。</p>
     * @param string $ExpireTime <p>媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     * @param string $StorageRegion <p>指定上传园区，仅适用于对上传地域有特殊需求的用户：</p><li>不填默认上传至您的[默认地域](https://cloud.tencent.com/document/product/266/14059?from=11329#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4)。</li><li>若指定上传园区，请先确认[上传存储设置](https://cloud.tencent.com/document/product/266/14059?from=11329#.E5.AD.98.E5.82.A8.E5.9C.B0.E5.9F.9F.E6.AD.A5.E9.AA.A4)已经开启相应的存储地域。</li>
     * @param integer $ClassId <p>分类ID，用于对媒体进行分类管理，可通过<a href="https://cloud.tencent.com/document/product/266/31772">创建分类</a>接口，创建分类，获得分类 ID。</p>
     * @param integer $TasksPriority <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，当指定 Procedure 任务后，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $ExtInfo <p>保留字段，特殊用途时使用。</p>
     * @param string $SourceContext <p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。</p>
     * @param string $MediaStoragePath <p>媒体存储路径，以/开头。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以指定存储路径。</p>
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
        if (array_key_exists("MediaUrl",$param) and $param["MediaUrl"] !== null) {
            $this->MediaUrl = $param["MediaUrl"];
        }

        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }
    }
}
