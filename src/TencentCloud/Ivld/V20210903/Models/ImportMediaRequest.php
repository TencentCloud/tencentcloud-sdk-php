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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportMedia请求参数结构体
 *
 * @method string getURL() 获取待分析视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
 * @method void setURL(string $URL) 设置待分析视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
 * @method string getMD5() 获取待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32B
 * @method void setMD5(string $MD5) 设置待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32B
 * @method string getName() 获取待分析视频的名称，指定后可支持筛选，最多64B
 * @method void setName(string $Name) 设置待分析视频的名称，指定后可支持筛选，最多64B
 * @method string getWriteBackCosPath() 获取当非本人外部视频地址导入时，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。
推荐采用本主帐号COS桶，如果使用其他帐号COS桶，请确保COS桶可写，否则可导致分析失败
 * @method void setWriteBackCosPath(string $WriteBackCosPath) 设置当非本人外部视频地址导入时，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。
推荐采用本主帐号COS桶，如果使用其他帐号COS桶，请确保COS桶可写，否则可导致分析失败
 * @method string getLabel() 获取自定义标签，可用于查询
 * @method void setLabel(string $Label) 设置自定义标签，可用于查询
 * @method string getCallbackURL() 获取媒资导入完成的回调地址，该设置优先级高于控制台全局的设置；
 * @method void setCallbackURL(string $CallbackURL) 设置媒资导入完成的回调地址，该设置优先级高于控制台全局的设置；
 * @method integer getMediaType() 获取媒资文件类型，详细定义参见[MediaPreknownInfo.MediaType](https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo)
默认为2(视频)
 * @method void setMediaType(integer $MediaType) 设置媒资文件类型，详细定义参见[MediaPreknownInfo.MediaType](https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo)
默认为2(视频)
 */
class ImportMediaRequest extends AbstractModel
{
    /**
     * @var string 待分析视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
     */
    public $URL;

    /**
     * @var string 待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32B
     */
    public $MD5;

    /**
     * @var string 待分析视频的名称，指定后可支持筛选，最多64B
     */
    public $Name;

    /**
     * @var string 当非本人外部视频地址导入时，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。
推荐采用本主帐号COS桶，如果使用其他帐号COS桶，请确保COS桶可写，否则可导致分析失败
     */
    public $WriteBackCosPath;

    /**
     * @var string 自定义标签，可用于查询
     */
    public $Label;

    /**
     * @var string 媒资导入完成的回调地址，该设置优先级高于控制台全局的设置；
     */
    public $CallbackURL;

    /**
     * @var integer 媒资文件类型，详细定义参见[MediaPreknownInfo.MediaType](https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo)
默认为2(视频)
     */
    public $MediaType;

    /**
     * @param string $URL 待分析视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
     * @param string $MD5 待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32B
     * @param string $Name 待分析视频的名称，指定后可支持筛选，最多64B
     * @param string $WriteBackCosPath 当非本人外部视频地址导入时，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。
推荐采用本主帐号COS桶，如果使用其他帐号COS桶，请确保COS桶可写，否则可导致分析失败
     * @param string $Label 自定义标签，可用于查询
     * @param string $CallbackURL 媒资导入完成的回调地址，该设置优先级高于控制台全局的设置；
     * @param integer $MediaType 媒资文件类型，详细定义参见[MediaPreknownInfo.MediaType](https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo)
默认为2(视频)
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
