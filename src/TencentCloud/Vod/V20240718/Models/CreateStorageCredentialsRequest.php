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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStorageCredentials请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method string getPolicy() 获取按照下方语法组装好策略后，先序列化为字符串，再做 urlencode，结果作为 Policy 字段入参。服务端会对该字段做 urldecode，并按解析后的策略授予临时访问凭证权限，请按规范传入参数。
注意： 
1.策略语法参照[访问管理策略](/document/product/598/10603)。
2.策略中不能包含 principal 元素。
3.策略的 action 元素仅支持：<li>name/vod:PutObject;</li><li>name/vod:ListParts;</li><li>name/vod:PostObject;</li><li>name/vod:InitiateMultipartUpload;</li><li>name/vod:UploadPart;</li><li>name/vod:CompleteMultipartUpload;</li><li>name/vod:AbortMultipartUpload;</li><li>name/vod:ListMultipartUploads;</li>4.策略的 resource 元素填写格式为：qcs::vod::uid/[账号AppID]:prefix//[子应用ID]/[存储桶ID]/[存储路径]，其中账号AppID、子应用ID、存储桶ID和存储路径要按需填写，其他内容不允许改动，例：qcs::vod::uid/1:prefix//1/1/path。

 * @method void setPolicy(string $Policy) 设置按照下方语法组装好策略后，先序列化为字符串，再做 urlencode，结果作为 Policy 字段入参。服务端会对该字段做 urldecode，并按解析后的策略授予临时访问凭证权限，请按规范传入参数。
注意： 
1.策略语法参照[访问管理策略](/document/product/598/10603)。
2.策略中不能包含 principal 元素。
3.策略的 action 元素仅支持：<li>name/vod:PutObject;</li><li>name/vod:ListParts;</li><li>name/vod:PostObject;</li><li>name/vod:InitiateMultipartUpload;</li><li>name/vod:UploadPart;</li><li>name/vod:CompleteMultipartUpload;</li><li>name/vod:AbortMultipartUpload;</li><li>name/vod:ListMultipartUploads;</li>4.策略的 resource 元素填写格式为：qcs::vod::uid/[账号AppID]:prefix//[子应用ID]/[存储桶ID]/[存储路径]，其中账号AppID、子应用ID、存储桶ID和存储路径要按需填写，其他内容不允许改动，例：qcs::vod::uid/1:prefix//1/1/path。

 * @method integer getDurationSeconds() 获取指定临时证书的有效期，单位：秒。
默认 1800 秒，最大 129600 秒。
 * @method void setDurationSeconds(integer $DurationSeconds) 设置指定临时证书的有效期，单位：秒。
默认 1800 秒，最大 129600 秒。
 */
class CreateStorageCredentialsRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 按照下方语法组装好策略后，先序列化为字符串，再做 urlencode，结果作为 Policy 字段入参。服务端会对该字段做 urldecode，并按解析后的策略授予临时访问凭证权限，请按规范传入参数。
注意： 
1.策略语法参照[访问管理策略](/document/product/598/10603)。
2.策略中不能包含 principal 元素。
3.策略的 action 元素仅支持：<li>name/vod:PutObject;</li><li>name/vod:ListParts;</li><li>name/vod:PostObject;</li><li>name/vod:InitiateMultipartUpload;</li><li>name/vod:UploadPart;</li><li>name/vod:CompleteMultipartUpload;</li><li>name/vod:AbortMultipartUpload;</li><li>name/vod:ListMultipartUploads;</li>4.策略的 resource 元素填写格式为：qcs::vod::uid/[账号AppID]:prefix//[子应用ID]/[存储桶ID]/[存储路径]，其中账号AppID、子应用ID、存储桶ID和存储路径要按需填写，其他内容不允许改动，例：qcs::vod::uid/1:prefix//1/1/path。

     */
    public $Policy;

    /**
     * @var integer 指定临时证书的有效期，单位：秒。
默认 1800 秒，最大 129600 秒。
     */
    public $DurationSeconds;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。</b>
     * @param string $Policy 按照下方语法组装好策略后，先序列化为字符串，再做 urlencode，结果作为 Policy 字段入参。服务端会对该字段做 urldecode，并按解析后的策略授予临时访问凭证权限，请按规范传入参数。
注意： 
1.策略语法参照[访问管理策略](/document/product/598/10603)。
2.策略中不能包含 principal 元素。
3.策略的 action 元素仅支持：<li>name/vod:PutObject;</li><li>name/vod:ListParts;</li><li>name/vod:PostObject;</li><li>name/vod:InitiateMultipartUpload;</li><li>name/vod:UploadPart;</li><li>name/vod:CompleteMultipartUpload;</li><li>name/vod:AbortMultipartUpload;</li><li>name/vod:ListMultipartUploads;</li>4.策略的 resource 元素填写格式为：qcs::vod::uid/[账号AppID]:prefix//[子应用ID]/[存储桶ID]/[存储路径]，其中账号AppID、子应用ID、存储桶ID和存储路径要按需填写，其他内容不允许改动，例：qcs::vod::uid/1:prefix//1/1/path。

     * @param integer $DurationSeconds 指定临时证书的有效期，单位：秒。
默认 1800 秒，最大 129600 秒。
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

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }
    }
}
