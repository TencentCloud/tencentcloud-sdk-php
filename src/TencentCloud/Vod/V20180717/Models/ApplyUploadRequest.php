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
 * ApplyUpload请求参数结构体
 *
 * @method string getMediaType() 获取<p>媒体类型，可选值请参考 <a href="/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">上传能力综述</a>。</p>
 * @method void setMediaType(string $MediaType) 设置<p>媒体类型，可选值请参考 <a href="/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">上传能力综述</a>。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getMediaName() 获取<p>媒体名称。</p>
 * @method void setMediaName(string $MediaName) 设置<p>媒体名称。</p>
 * @method string getCoverType() 获取<p>封面类型，可选值请参考 <a href="/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">上传能力综述</a>。</p>
 * @method void setCoverType(string $CoverType) 设置<p>封面类型，可选值请参考 <a href="/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">上传能力综述</a>。</p>
 * @method string getProcedure() 获取<p>媒体后续任务处理操作，即完成媒体上传后，可自动发起任务流操作。参数值为任务流模板名，云点播支持 <a href="/document/product/266/33819">创建任务流模板</a> 并为模板命名。</p>
 * @method void setProcedure(string $Procedure) 设置<p>媒体后续任务处理操作，即完成媒体上传后，可自动发起任务流操作。参数值为任务流模板名，云点播支持 <a href="/document/product/266/33819">创建任务流模板</a> 并为模板命名。</p>
 * @method string getExpireTime() 获取<p>媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 <a href="/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F">ISO 日期格式说明</a>。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 <a href="/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F">ISO 日期格式说明</a>。</p>
 * @method string getStorageRegion() 获取<p>指定上传园区，仅适用于对上传地域有特殊需求的用户。</p>
 * @method void setStorageRegion(string $StorageRegion) 设置<p>指定上传园区，仅适用于对上传地域有特殊需求的用户。</p>
 * @method integer getClassId() 获取<p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
 * @method void setClassId(integer $ClassId) 设置<p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
 * @method string getSourceContext() 获取<p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。</p>
 * @method void setSourceContext(string $SourceContext) 设置<p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。</p>
 * @method string getSessionContext() 获取<p>会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，<a href="/document/product/266/9636">任务流状态变更回调</a> 将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，<a href="/document/product/266/9636">任务流状态变更回调</a> 将返回该字段值，最长 1000 个字符。</p>
 * @method string getExtInfo() 获取<p>保留字段，特殊用途时使用。</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>保留字段，特殊用途时使用。</p>
 * @method string getMediaStoragePath() 获取<p>媒体存储路径，以/开头。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以指定存储路径。</p>
 * @method void setMediaStoragePath(string $MediaStoragePath) 设置<p>媒体存储路径，以/开头。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以指定存储路径。</p>
 */
class ApplyUploadRequest extends AbstractModel
{
    /**
     * @var string <p>媒体类型，可选值请参考 <a href="/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">上传能力综述</a>。</p>
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
     * @var string <p>封面类型，可选值请参考 <a href="/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">上传能力综述</a>。</p>
     */
    public $CoverType;

    /**
     * @var string <p>媒体后续任务处理操作，即完成媒体上传后，可自动发起任务流操作。参数值为任务流模板名，云点播支持 <a href="/document/product/266/33819">创建任务流模板</a> 并为模板命名。</p>
     */
    public $Procedure;

    /**
     * @var string <p>媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 <a href="/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F">ISO 日期格式说明</a>。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>指定上传园区，仅适用于对上传地域有特殊需求的用户。</p>
     */
    public $StorageRegion;

    /**
     * @var integer <p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
     */
    public $ClassId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。</p>
     */
    public $SourceContext;

    /**
     * @var string <p>会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，<a href="/document/product/266/9636">任务流状态变更回调</a> 将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>保留字段，特殊用途时使用。</p>
     */
    public $ExtInfo;

    /**
     * @var string <p>媒体存储路径，以/开头。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以指定存储路径。</p>
     */
    public $MediaStoragePath;

    /**
     * @param string $MediaType <p>媒体类型，可选值请参考 <a href="/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">上传能力综述</a>。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $MediaName <p>媒体名称。</p>
     * @param string $CoverType <p>封面类型，可选值请参考 <a href="/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B">上传能力综述</a>。</p>
     * @param string $Procedure <p>媒体后续任务处理操作，即完成媒体上传后，可自动发起任务流操作。参数值为任务流模板名，云点播支持 <a href="/document/product/266/33819">创建任务流模板</a> 并为模板命名。</p>
     * @param string $ExpireTime <p>媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 <a href="/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F">ISO 日期格式说明</a>。</p>
     * @param string $StorageRegion <p>指定上传园区，仅适用于对上传地域有特殊需求的用户。</p>
     * @param integer $ClassId <p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
     * @param string $SourceContext <p>来源上下文，用于透传用户请求信息，<a href="/document/product/266/7830">上传完成回调</a> 将返回该字段值，最长 250 个字符。</p>
     * @param string $SessionContext <p>会话上下文，用于透传用户请求信息，当指定 Procedure 参数后，<a href="/document/product/266/9636">任务流状态变更回调</a> 将返回该字段值，最长 1000 个字符。</p>
     * @param string $ExtInfo <p>保留字段，特殊用途时使用。</p>
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
        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("CoverType",$param) and $param["CoverType"] !== null) {
            $this->CoverType = $param["CoverType"];
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

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }
    }
}
