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
 * ModifyProcessImageAsyncTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取图片异步处理模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置图片异步处理模板唯一标识。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getName() 获取图片异步处理模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置图片异步处理模板名称，长度限制：64 个字符。
 * @method string getComment() 获取图片异步处理模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置图片异步处理模板描述信息，长度限制：256 个字符。
 * @method ProcessImageAsyncTask getProcessImageConfigure() 获取图片异步处理配置。
 * @method void setProcessImageConfigure(ProcessImageAsyncTask $ProcessImageConfigure) 设置图片异步处理配置。
 */
class ModifyProcessImageAsyncTemplateRequest extends AbstractModel
{
    /**
     * @var integer 图片异步处理模板唯一标识。
     */
    public $Definition;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 图片异步处理模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 图片异步处理模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var ProcessImageAsyncTask 图片异步处理配置。
     */
    public $ProcessImageConfigure;

    /**
     * @param integer $Definition 图片异步处理模板唯一标识。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Name 图片异步处理模板名称，长度限制：64 个字符。
     * @param string $Comment 图片异步处理模板描述信息，长度限制：256 个字符。
     * @param ProcessImageAsyncTask $ProcessImageConfigure 图片异步处理配置。
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ProcessImageConfigure",$param) and $param["ProcessImageConfigure"] !== null) {
            $this->ProcessImageConfigure = new ProcessImageAsyncTask();
            $this->ProcessImageConfigure->deserialize($param["ProcessImageConfigure"]);
        }
    }
}
