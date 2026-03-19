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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubtitleEmbedTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取<p>字幕压制模板唯一标识</p>
 * @method void setDefinition(integer $Definition) 设置<p>字幕压制模板唯一标识</p>
 * @method string getName() 获取<p>字幕压制名称<br>长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>字幕压制名称<br>长度限制：64 个字符。</p>
 * @method string getComment() 获取<p>字幕压制模板描述信息<br>长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>字幕压制模板描述信息<br>长度限制：256 个字符。</p>
 * @method SubtitleEmbedConfig getSubtitleEmbedConfig() 获取<p>字幕压制相关配置</p>
 * @method void setSubtitleEmbedConfig(SubtitleEmbedConfig $SubtitleEmbedConfig) 设置<p>字幕压制相关配置</p>
 */
class ModifySubtitleEmbedTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>字幕压制模板唯一标识</p>
     */
    public $Definition;

    /**
     * @var string <p>字幕压制名称<br>长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>字幕压制模板描述信息<br>长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var SubtitleEmbedConfig <p>字幕压制相关配置</p>
     */
    public $SubtitleEmbedConfig;

    /**
     * @param integer $Definition <p>字幕压制模板唯一标识</p>
     * @param string $Name <p>字幕压制名称<br>长度限制：64 个字符。</p>
     * @param string $Comment <p>字幕压制模板描述信息<br>长度限制：256 个字符。</p>
     * @param SubtitleEmbedConfig $SubtitleEmbedConfig <p>字幕压制相关配置</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("SubtitleEmbedConfig",$param) and $param["SubtitleEmbedConfig"] !== null) {
            $this->SubtitleEmbedConfig = new SubtitleEmbedConfig();
            $this->SubtitleEmbedConfig->deserialize($param["SubtitleEmbedConfig"]);
        }
    }
}
