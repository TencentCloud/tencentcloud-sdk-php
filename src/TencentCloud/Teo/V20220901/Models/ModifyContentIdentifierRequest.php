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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyContentIdentifier请求参数结构体
 *
 * @method string getContentId() 获取内容标识符 ID。
 * @method void setContentId(string $ContentId) 设置内容标识符 ID。
 * @method string getDescription() 获取内容标识符描述，长度限制不超过 20 个字符。
 * @method void setDescription(string $Description) 设置内容标识符描述，长度限制不超过 20 个字符。
 */
class ModifyContentIdentifierRequest extends AbstractModel
{
    /**
     * @var string 内容标识符 ID。
     */
    public $ContentId;

    /**
     * @var string 内容标识符描述，长度限制不超过 20 个字符。
     */
    public $Description;

    /**
     * @param string $ContentId 内容标识符 ID。
     * @param string $Description 内容标识符描述，长度限制不超过 20 个字符。
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
        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
