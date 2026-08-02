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
 * ModifyMediaInfo请求参数结构体
 *
 * @method string getFileId() 获取<p>媒体文件唯一标识。</p>
 * @method void setFileId(string $FileId) 设置<p>媒体文件唯一标识。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getName() 获取<p>媒体文件名称，最长 64 个字符。</p>
 * @method void setName(string $Name) 设置<p>媒体文件名称，最长 64 个字符。</p>
 * @method string getDescription() 获取<p>媒体文件描述，最长 128 个字符。</p>
 * @method void setDescription(string $Description) 设置<p>媒体文件描述，最长 128 个字符。</p>
 * @method integer getClassId() 获取<p>媒体文件分类 ID。</p>
 * @method void setClassId(integer $ClassId) 设置<p>媒体文件分类 ID。</p>
 * @method string getExpireTime() 获取<p>媒体文件过期时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>媒体文件过期时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。</p>
 * @method string getCoverData() 获取<p>视频封面图片文件（如 jpeg, png 等）进行 <a href="https://tools.ietf.org/html/rfc4648">Base64</a> 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式。</p>
 * @method void setCoverData(string $CoverData) 设置<p>视频封面图片文件（如 jpeg, png 等）进行 <a href="https://tools.ietf.org/html/rfc4648">Base64</a> 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式。</p>
 * @method array getAddKeyFrameDescs() 获取<p>新增的一组视频打点信息，如果某个偏移时间已存在打点，则会进行覆盖操作，单个媒体文件最多 100 个打点信息。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。</p>
 * @method void setAddKeyFrameDescs(array $AddKeyFrameDescs) 设置<p>新增的一组视频打点信息，如果某个偏移时间已存在打点，则会进行覆盖操作，单个媒体文件最多 100 个打点信息。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。</p>
 * @method array getDeleteKeyFrameDescs() 获取<p>要删除的一组视频打点信息的时间偏移，单位：秒。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。</p>
 * @method void setDeleteKeyFrameDescs(array $DeleteKeyFrameDescs) 设置<p>要删除的一组视频打点信息的时间偏移，单位：秒。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。</p>
 * @method integer getClearKeyFrameDescs() 获取<p>取值 1 表示清空视频打点信息，其他值无意义。<br>同一个请求里，ClearKeyFrameDescs 与 AddKeyFrameDescs 不能同时出现。</p>
 * @method void setClearKeyFrameDescs(integer $ClearKeyFrameDescs) 设置<p>取值 1 表示清空视频打点信息，其他值无意义。<br>同一个请求里，ClearKeyFrameDescs 与 AddKeyFrameDescs 不能同时出现。</p>
 * @method array getAddTags() 获取<p>新增的一组标签，单个媒体文件最多 16 个标签，单个标签最多 32 个字符。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。</p>
 * @method void setAddTags(array $AddTags) 设置<p>新增的一组标签，单个媒体文件最多 16 个标签，单个标签最多 32 个字符。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。</p>
 * @method array getDeleteTags() 获取<p>要删除的一组标签。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。</p>
 * @method void setDeleteTags(array $DeleteTags) 设置<p>要删除的一组标签。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。</p>
 * @method integer getClearTags() 获取<p>取值 1 表示清空媒体文件所有标签，其他值无意义。<br>同一个请求里，ClearTags 与 AddTags 不能同时出现。</p>
 * @method void setClearTags(integer $ClearTags) 设置<p>取值 1 表示清空媒体文件所有标签，其他值无意义。<br>同一个请求里，ClearTags 与 AddTags 不能同时出现。</p>
 * @method array getAddSubtitles() 获取<p>新增一组字幕。单个媒体文件最多 16 个字幕。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。</p>
 * @method void setAddSubtitles(array $AddSubtitles) 设置<p>新增一组字幕。单个媒体文件最多 16 个字幕。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。</p>
 * @method array getDeleteSubtitleIds() 获取<p>待删除字幕的唯一标识。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。</p>
 * @method void setDeleteSubtitleIds(array $DeleteSubtitleIds) 设置<p>待删除字幕的唯一标识。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。</p>
 * @method integer getClearSubtitles() 获取<p>取值 1 表示清空媒体文件所有的字幕信息，其他值无意义。<br>同一个请求里，ClearSubtitles 与 AddSubtitles不能同时出现。</p>
 * @method void setClearSubtitles(integer $ClearSubtitles) 设置<p>取值 1 表示清空媒体文件所有的字幕信息，其他值无意义。<br>同一个请求里，ClearSubtitles 与 AddSubtitles不能同时出现。</p>
 * @method array getDeleteKnowledgeBases() 获取<p>待出库的知识库ID。</p>
 * @method void setDeleteKnowledgeBases(array $DeleteKnowledgeBases) 设置<p>待出库的知识库ID。</p>
 * @method integer getClearKnowledgeBases() 获取<p>取值 1 表示从所有知识库中移除此媒体文件，其他值无意义。</p><p><br>同一个请求里，ClearKnowledgeBases 与 DeleteKnowledgeBases 不能同时出现。<p></p></p>
 * @method void setClearKnowledgeBases(integer $ClearKnowledgeBases) 设置<p>取值 1 表示从所有知识库中移除此媒体文件，其他值无意义。</p><p><br>同一个请求里，ClearKnowledgeBases 与 DeleteKnowledgeBases 不能同时出现。<p></p></p>
 */
class ModifyMediaInfoRequest extends AbstractModel
{
    /**
     * @var string <p>媒体文件唯一标识。</p>
     */
    public $FileId;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>媒体文件名称，最长 64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>媒体文件描述，最长 128 个字符。</p>
     */
    public $Description;

    /**
     * @var integer <p>媒体文件分类 ID。</p>
     */
    public $ClassId;

    /**
     * @var string <p>媒体文件过期时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>视频封面图片文件（如 jpeg, png 等）进行 <a href="https://tools.ietf.org/html/rfc4648">Base64</a> 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式。</p>
     */
    public $CoverData;

    /**
     * @var array <p>新增的一组视频打点信息，如果某个偏移时间已存在打点，则会进行覆盖操作，单个媒体文件最多 100 个打点信息。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。</p>
     */
    public $AddKeyFrameDescs;

    /**
     * @var array <p>要删除的一组视频打点信息的时间偏移，单位：秒。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。</p>
     */
    public $DeleteKeyFrameDescs;

    /**
     * @var integer <p>取值 1 表示清空视频打点信息，其他值无意义。<br>同一个请求里，ClearKeyFrameDescs 与 AddKeyFrameDescs 不能同时出现。</p>
     */
    public $ClearKeyFrameDescs;

    /**
     * @var array <p>新增的一组标签，单个媒体文件最多 16 个标签，单个标签最多 32 个字符。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。</p>
     */
    public $AddTags;

    /**
     * @var array <p>要删除的一组标签。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。</p>
     */
    public $DeleteTags;

    /**
     * @var integer <p>取值 1 表示清空媒体文件所有标签，其他值无意义。<br>同一个请求里，ClearTags 与 AddTags 不能同时出现。</p>
     */
    public $ClearTags;

    /**
     * @var array <p>新增一组字幕。单个媒体文件最多 16 个字幕。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。</p>
     */
    public $AddSubtitles;

    /**
     * @var array <p>待删除字幕的唯一标识。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。</p>
     */
    public $DeleteSubtitleIds;

    /**
     * @var integer <p>取值 1 表示清空媒体文件所有的字幕信息，其他值无意义。<br>同一个请求里，ClearSubtitles 与 AddSubtitles不能同时出现。</p>
     */
    public $ClearSubtitles;

    /**
     * @var array <p>待出库的知识库ID。</p>
     */
    public $DeleteKnowledgeBases;

    /**
     * @var integer <p>取值 1 表示从所有知识库中移除此媒体文件，其他值无意义。</p><p><br>同一个请求里，ClearKnowledgeBases 与 DeleteKnowledgeBases 不能同时出现。<p></p></p>
     */
    public $ClearKnowledgeBases;

    /**
     * @param string $FileId <p>媒体文件唯一标识。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Name <p>媒体文件名称，最长 64 个字符。</p>
     * @param string $Description <p>媒体文件描述，最长 128 个字符。</p>
     * @param integer $ClassId <p>媒体文件分类 ID。</p>
     * @param string $ExpireTime <p>媒体文件过期时间，采用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。</p>
     * @param string $CoverData <p>视频封面图片文件（如 jpeg, png 等）进行 <a href="https://tools.ietf.org/html/rfc4648">Base64</a> 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式。</p>
     * @param array $AddKeyFrameDescs <p>新增的一组视频打点信息，如果某个偏移时间已存在打点，则会进行覆盖操作，单个媒体文件最多 100 个打点信息。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。</p>
     * @param array $DeleteKeyFrameDescs <p>要删除的一组视频打点信息的时间偏移，单位：秒。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。</p>
     * @param integer $ClearKeyFrameDescs <p>取值 1 表示清空视频打点信息，其他值无意义。<br>同一个请求里，ClearKeyFrameDescs 与 AddKeyFrameDescs 不能同时出现。</p>
     * @param array $AddTags <p>新增的一组标签，单个媒体文件最多 16 个标签，单个标签最多 32 个字符。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。</p>
     * @param array $DeleteTags <p>要删除的一组标签。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。</p>
     * @param integer $ClearTags <p>取值 1 表示清空媒体文件所有标签，其他值无意义。<br>同一个请求里，ClearTags 与 AddTags 不能同时出现。</p>
     * @param array $AddSubtitles <p>新增一组字幕。单个媒体文件最多 16 个字幕。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。</p>
     * @param array $DeleteSubtitleIds <p>待删除字幕的唯一标识。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。</p>
     * @param integer $ClearSubtitles <p>取值 1 表示清空媒体文件所有的字幕信息，其他值无意义。<br>同一个请求里，ClearSubtitles 与 AddSubtitles不能同时出现。</p>
     * @param array $DeleteKnowledgeBases <p>待出库的知识库ID。</p>
     * @param integer $ClearKnowledgeBases <p>取值 1 表示从所有知识库中移除此媒体文件，其他值无意义。</p><p><br>同一个请求里，ClearKnowledgeBases 与 DeleteKnowledgeBases 不能同时出现。<p></p></p>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CoverData",$param) and $param["CoverData"] !== null) {
            $this->CoverData = $param["CoverData"];
        }

        if (array_key_exists("AddKeyFrameDescs",$param) and $param["AddKeyFrameDescs"] !== null) {
            $this->AddKeyFrameDescs = [];
            foreach ($param["AddKeyFrameDescs"] as $key => $value){
                $obj = new MediaKeyFrameDescItem();
                $obj->deserialize($value);
                array_push($this->AddKeyFrameDescs, $obj);
            }
        }

        if (array_key_exists("DeleteKeyFrameDescs",$param) and $param["DeleteKeyFrameDescs"] !== null) {
            $this->DeleteKeyFrameDescs = $param["DeleteKeyFrameDescs"];
        }

        if (array_key_exists("ClearKeyFrameDescs",$param) and $param["ClearKeyFrameDescs"] !== null) {
            $this->ClearKeyFrameDescs = $param["ClearKeyFrameDescs"];
        }

        if (array_key_exists("AddTags",$param) and $param["AddTags"] !== null) {
            $this->AddTags = $param["AddTags"];
        }

        if (array_key_exists("DeleteTags",$param) and $param["DeleteTags"] !== null) {
            $this->DeleteTags = $param["DeleteTags"];
        }

        if (array_key_exists("ClearTags",$param) and $param["ClearTags"] !== null) {
            $this->ClearTags = $param["ClearTags"];
        }

        if (array_key_exists("AddSubtitles",$param) and $param["AddSubtitles"] !== null) {
            $this->AddSubtitles = [];
            foreach ($param["AddSubtitles"] as $key => $value){
                $obj = new MediaSubtitleInput();
                $obj->deserialize($value);
                array_push($this->AddSubtitles, $obj);
            }
        }

        if (array_key_exists("DeleteSubtitleIds",$param) and $param["DeleteSubtitleIds"] !== null) {
            $this->DeleteSubtitleIds = $param["DeleteSubtitleIds"];
        }

        if (array_key_exists("ClearSubtitles",$param) and $param["ClearSubtitles"] !== null) {
            $this->ClearSubtitles = $param["ClearSubtitles"];
        }

        if (array_key_exists("DeleteKnowledgeBases",$param) and $param["DeleteKnowledgeBases"] !== null) {
            $this->DeleteKnowledgeBases = $param["DeleteKnowledgeBases"];
        }

        if (array_key_exists("ClearKnowledgeBases",$param) and $param["ClearKnowledgeBases"] !== null) {
            $this->ClearKnowledgeBases = $param["ClearKnowledgeBases"];
        }
    }
}
