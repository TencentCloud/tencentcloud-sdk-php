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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FavoritePromptTemplate请求参数结构体
 *
 * @method string getSpaceId() 获取<p>空间ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间ID</p>
 * @method string getPromptTemplateId() 获取<p>提示词模板ID</p>
 * @method void setPromptTemplateId(string $PromptTemplateId) 设置<p>提示词模板ID</p>
 */
class FavoritePromptTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>空间ID</p>
     */
    public $SpaceId;

    /**
     * @var string <p>提示词模板ID</p>
     */
    public $PromptTemplateId;

    /**
     * @param string $SpaceId <p>空间ID</p>
     * @param string $PromptTemplateId <p>提示词模板ID</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("PromptTemplateId",$param) and $param["PromptTemplateId"] !== null) {
            $this->PromptTemplateId = $param["PromptTemplateId"];
        }
    }
}
