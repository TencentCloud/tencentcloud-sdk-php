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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateChatCompletion请求参数结构体
 *
 * @method boolean getIsHidden() 获取是否隐藏
 * @method void setIsHidden(boolean $IsHidden) 设置是否隐藏
 */
class CreateChatCompletionRequest extends AbstractModel
{
    /**
     * @var boolean 是否隐藏
     */
    public $IsHidden;

    /**
     * @param boolean $IsHidden 是否隐藏
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
        if (array_key_exists("IsHidden",$param) and $param["IsHidden"] !== null) {
            $this->IsHidden = $param["IsHidden"];
        }
    }
}
