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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportMedia请求参数结构体
 *
 * @method string getURL() 获取<p>待分析视频的URL，目前只支持<em>不带签名的</em>COS地址，字段输入内容最大为1KB</p>
 * @method void setURL(string $URL) 设置<p>待分析视频的URL，目前只支持<em>不带签名的</em>COS地址，字段输入内容最大为1KB</p>
 * @method string getMD5() 获取<p>待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32</p>
 * @method void setMD5(string $MD5) 设置<p>待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32</p>
 * @method string getName() 获取<p>待分析视频的名称，指定后可支持筛选，视频名称的大小长度不能超过64</p>
 * @method void setName(string $Name) 设置<p>待分析视频的名称，指定后可支持筛选，视频名称的大小长度不能超过64</p>
 * @method string getWriteBackCosPath() 获取<p>当非本人外部视频地址导入时，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。推荐采用本主账号COS桶，如果使用其他账号COS桶，请确保COS桶可写，否则可导致分析失败</p>
 * @method void setWriteBackCosPath(string $WriteBackCosPath) 设置<p>当非本人外部视频地址导入时，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。推荐采用本主账号COS桶，如果使用其他账号COS桶，请确保COS桶可写，否则可导致分析失败</p>
 * @method string getLabel() 获取<p>自定义标签，可用于查询</p>
 * @method void setLabel(string $Label) 设置<p>自定义标签，可用于查询</p>
 * @method string getCallbackURL() 获取<p>媒资导入完成的回调地址，该设置优先级高于控制台全局的设置；</p>
 * @method void setCallbackURL(string $CallbackURL) 设置<p>媒资导入完成的回调地址，该设置优先级高于控制台全局的设置；</p>
 * @method integer getMediaType() 获取<p>媒资文件类型，详细定义参见<a href="https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo">MediaPreknownInfo.MediaType</a><br>默认为2(视频)</p>
 * @method void setMediaType(integer $MediaType) 设置<p>媒资文件类型，详细定义参见<a href="https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo">MediaPreknownInfo.MediaType</a><br>默认为2(视频)</p>
 */
class ImportMediaRequest extends AbstractModel
{
    /**
     * @var string <p>待分析视频的URL，目前只支持<em>不带签名的</em>COS地址，字段输入内容最大为1KB</p>
     */
    public $URL;

    /**
     * @var string <p>待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32</p>
     */
    public $MD5;

    /**
     * @var string <p>待分析视频的名称，指定后可支持筛选，视频名称的大小长度不能超过64</p>
     */
    public $Name;

    /**
     * @var string <p>当非本人外部视频地址导入时，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。推荐采用本主账号COS桶，如果使用其他账号COS桶，请确保COS桶可写，否则可导致分析失败</p>
     */
    public $WriteBackCosPath;

    /**
     * @var string <p>自定义标签，可用于查询</p>
     */
    public $Label;

    /**
     * @var string <p>媒资导入完成的回调地址，该设置优先级高于控制台全局的设置；</p>
     */
    public $CallbackURL;

    /**
     * @var integer <p>媒资文件类型，详细定义参见<a href="https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo">MediaPreknownInfo.MediaType</a><br>默认为2(视频)</p>
     */
    public $MediaType;

    /**
     * @param string $URL <p>待分析视频的URL，目前只支持<em>不带签名的</em>COS地址，字段输入内容最大为1KB</p>
     * @param string $MD5 <p>待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32</p>
     * @param string $Name <p>待分析视频的名称，指定后可支持筛选，视频名称的大小长度不能超过64</p>
     * @param string $WriteBackCosPath <p>当非本人外部视频地址导入时，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。推荐采用本主账号COS桶，如果使用其他账号COS桶，请确保COS桶可写，否则可导致分析失败</p>
     * @param string $Label <p>自定义标签，可用于查询</p>
     * @param string $CallbackURL <p>媒资导入完成的回调地址，该设置优先级高于控制台全局的设置；</p>
     * @param integer $MediaType <p>媒资文件类型，详细定义参见<a href="https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo">MediaPreknownInfo.MediaType</a><br>默认为2(视频)</p>
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("WriteBackCosPath",$param) and $param["WriteBackCosPath"] !== null) {
            $this->WriteBackCosPath = $param["WriteBackCosPath"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("CallbackURL",$param) and $param["CallbackURL"] !== null) {
            $this->CallbackURL = $param["CallbackURL"];
        }

        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }
    }
}
