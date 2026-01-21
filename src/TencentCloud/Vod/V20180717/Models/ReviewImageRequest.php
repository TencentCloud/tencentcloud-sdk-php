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
 * ReviewImage请求参数结构体
 *
 * @method integer getDefinition() 获取图片审核模板 ID，取值范围：
<li>10：预置模板，支持检测的违规标签包括色情（Porn）、暴力（Terror）和不适宜的信息（Polity）。</li>
 * @method void setDefinition(integer $Definition) 设置图片审核模板 ID，取值范围：
<li>10：预置模板，支持检测的违规标签包括色情（Porn）、暴力（Terror）和不适宜的信息（Polity）。</li>
 * @method string getFileId() 获取媒体文件 ID，即该文件在云点播上的全局唯一标识符。本接口要求媒体文件必须是图片格式。
FileId和MediaStoragePath必须提供其中一个。
 * @method void setFileId(string $FileId) 设置媒体文件 ID，即该文件在云点播上的全局唯一标识符。本接口要求媒体文件必须是图片格式。
FileId和MediaStoragePath必须提供其中一个。
 * @method string getMediaStoragePath() 获取媒体的存储路径。
FileId和MediaStoragePath必须提供其中一个。
 * @method void setMediaStoragePath(string $MediaStoragePath) 设置媒体的存储路径。
FileId和MediaStoragePath必须提供其中一个。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 */
class ReviewImageRequest extends AbstractModel
{
    /**
     * @var integer 图片审核模板 ID，取值范围：
<li>10：预置模板，支持检测的违规标签包括色情（Porn）、暴力（Terror）和不适宜的信息（Polity）。</li>
     */
    public $Definition;

    /**
     * @var string 媒体文件 ID，即该文件在云点播上的全局唯一标识符。本接口要求媒体文件必须是图片格式。
FileId和MediaStoragePath必须提供其中一个。
     */
    public $FileId;

    /**
     * @var string 媒体的存储路径。
FileId和MediaStoragePath必须提供其中一个。
     */
    public $MediaStoragePath;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @param integer $Definition 图片审核模板 ID，取值范围：
<li>10：预置模板，支持检测的违规标签包括色情（Porn）、暴力（Terror）和不适宜的信息（Polity）。</li>
     * @param string $FileId 媒体文件 ID，即该文件在云点播上的全局唯一标识符。本接口要求媒体文件必须是图片格式。
FileId和MediaStoragePath必须提供其中一个。
     * @param string $MediaStoragePath 媒体的存储路径。
FileId和MediaStoragePath必须提供其中一个。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
