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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输入框配置
 *
 * @method array getInputBoxButtons() 获取输入框按钮，1：上传图片、2：上传文档，3：腾讯文档，4：联网搜索
 * @method void setInputBoxButtons(array $InputBoxButtons) 设置输入框按钮，1：上传图片、2：上传文档，3：腾讯文档，4：联网搜索
 */
class InputBoxConfig extends AbstractModel
{
    /**
     * @var array 输入框按钮，1：上传图片、2：上传文档，3：腾讯文档，4：联网搜索
     */
    public $InputBoxButtons;

    /**
     * @param array $InputBoxButtons 输入框按钮，1：上传图片、2：上传文档，3：腾讯文档，4：联网搜索
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
        if (array_key_exists("InputBoxButtons",$param) and $param["InputBoxButtons"] !== null) {
            $this->InputBoxButtons = $param["InputBoxButtons"];
        }
    }
}
