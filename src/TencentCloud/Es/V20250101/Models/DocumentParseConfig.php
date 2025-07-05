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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档解析配置
 *
 * @method integer getImageResponseType() 获取0:图片以链接形式返回
1:返回图片中提取的文本内容
 * @method void setImageResponseType(integer $ImageResponseType) 设置0:图片以链接形式返回
1:返回图片中提取的文本内容
 */
class DocumentParseConfig extends AbstractModel
{
    /**
     * @var integer 0:图片以链接形式返回
1:返回图片中提取的文本内容
     */
    public $ImageResponseType;

    /**
     * @param integer $ImageResponseType 0:图片以链接形式返回
1:返回图片中提取的文本内容
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
        if (array_key_exists("ImageResponseType",$param) and $param["ImageResponseType"] !== null) {
            $this->ImageResponseType = $param["ImageResponseType"];
        }
    }
}
