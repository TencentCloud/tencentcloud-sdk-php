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
 * CreateAigcSubject请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getSubjectName() 获取<p>主体名称。</p>
 * @method void setSubjectName(string $SubjectName) 设置<p>主体名称。</p>
 * @method array getSubjectImages() 获取<p>主体图片，至少上传 1 张主体图片。</p><ul><li>注1：支持传入图片 Base64 编码或图片URL（确保可访问）；</li><li>注2：最多支持输入 3 张图；</li><li>注3：图片支持 png、jpeg、jpg、webp格式；</li><li>注4：图片比例需要小于 1:4 或者 4:1 ；</li><li>注5：图片大小不超过 50 MB；</li></ul>
 * @method void setSubjectImages(array $SubjectImages) 设置<p>主体图片，至少上传 1 张主体图片。</p><ul><li>注1：支持传入图片 Base64 编码或图片URL（确保可访问）；</li><li>注2：最多支持输入 3 张图；</li><li>注3：图片支持 png、jpeg、jpg、webp格式；</li><li>注4：图片比例需要小于 1:4 或者 4:1 ；</li><li>注5：图片大小不超过 50 MB；</li></ul>
 * @method array getSubjectVideos() 获取<p>视频参考支持上传 1 个主体视频</p><ul><li>注1：仅参考生viduq2-pro模型支持使用视频主体</li><li>注2：最多支持上传 1个5秒 的视频</li><li>注3：视频支持 mp4、avi、mov格式</li><li>注4：视频像素不能小于 128*128，且比例需要小于1:4或者4:1，且大小不超过100M。</li></ul>
 * @method void setSubjectVideos(array $SubjectVideos) 设置<p>视频参考支持上传 1 个主体视频</p><ul><li>注1：仅参考生viduq2-pro模型支持使用视频主体</li><li>注2：最多支持上传 1个5秒 的视频</li><li>注3：视频支持 mp4、avi、mov格式</li><li>注4：视频像素不能小于 128*128，且比例需要小于1:4或者4:1，且大小不超过100M。</li></ul>
 * @method string getVoiceId() 获取<p>主体音色Id，该信息仅在创建音视频直出任务时使用</p><ul><li>注1：不传音色id 生成音视频直出任务时，系统会自动推荐音色</li><li>注2：q2-pro不支持使用音色id</li></ul>
 * @method void setVoiceId(string $VoiceId) 设置<p>主体音色Id，该信息仅在创建音视频直出任务时使用</p><ul><li>注1：不传音色id 生成音视频直出任务时，系统会自动推荐音色</li><li>注2：q2-pro不支持使用音色id</li></ul>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method integer getTasksPriority() 获取<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 */
class CreateAigcSubjectRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>主体名称。</p>
     */
    public $SubjectName;

    /**
     * @var array <p>主体图片，至少上传 1 张主体图片。</p><ul><li>注1：支持传入图片 Base64 编码或图片URL（确保可访问）；</li><li>注2：最多支持输入 3 张图；</li><li>注3：图片支持 png、jpeg、jpg、webp格式；</li><li>注4：图片比例需要小于 1:4 或者 4:1 ；</li><li>注5：图片大小不超过 50 MB；</li></ul>
     */
    public $SubjectImages;

    /**
     * @var array <p>视频参考支持上传 1 个主体视频</p><ul><li>注1：仅参考生viduq2-pro模型支持使用视频主体</li><li>注2：最多支持上传 1个5秒 的视频</li><li>注3：视频支持 mp4、avi、mov格式</li><li>注4：视频像素不能小于 128*128，且比例需要小于1:4或者4:1，且大小不超过100M。</li></ul>
     */
    public $SubjectVideos;

    /**
     * @var string <p>主体音色Id，该信息仅在创建音视频直出任务时使用</p><ul><li>注1：不传音色id 生成音视频直出任务时，系统会自动推荐音色</li><li>注2：q2-pro不支持使用音色id</li></ul>
     */
    public $VoiceId;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId <p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $SubjectName <p>主体名称。</p>
     * @param array $SubjectImages <p>主体图片，至少上传 1 张主体图片。</p><ul><li>注1：支持传入图片 Base64 编码或图片URL（确保可访问）；</li><li>注2：最多支持输入 3 张图；</li><li>注3：图片支持 png、jpeg、jpg、webp格式；</li><li>注4：图片比例需要小于 1:4 或者 4:1 ；</li><li>注5：图片大小不超过 50 MB；</li></ul>
     * @param array $SubjectVideos <p>视频参考支持上传 1 个主体视频</p><ul><li>注1：仅参考生viduq2-pro模型支持使用视频主体</li><li>注2：最多支持上传 1个5秒 的视频</li><li>注3：视频支持 mp4、avi、mov格式</li><li>注4：视频像素不能小于 128*128，且比例需要小于1:4或者4:1，且大小不超过100M。</li></ul>
     * @param string $VoiceId <p>主体音色Id，该信息仅在创建音视频直出任务时使用</p><ul><li>注1：不传音色id 生成音视频直出任务时，系统会自动推荐音色</li><li>注2：q2-pro不支持使用音色id</li></ul>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
     * @param integer $TasksPriority <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
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

        if (array_key_exists("SubjectName",$param) and $param["SubjectName"] !== null) {
            $this->SubjectName = $param["SubjectName"];
        }

        if (array_key_exists("SubjectImages",$param) and $param["SubjectImages"] !== null) {
            $this->SubjectImages = $param["SubjectImages"];
        }

        if (array_key_exists("SubjectVideos",$param) and $param["SubjectVideos"] !== null) {
            $this->SubjectVideos = $param["SubjectVideos"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
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
    }
}
