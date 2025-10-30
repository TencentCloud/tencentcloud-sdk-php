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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 翻译术语
 *
 * @method string getSource() 获取源术语
 * @method void setSource(string $Source) 设置源术语
 * @method string getTarget() 获取目标术语翻译结果
 * @method void setTarget(string $Target) 设置目标术语翻译结果
 */
class Terminology extends AbstractModel
{
    /**
     * @var string 源术语
     */
    public $Source;

    /**
     * @var string 目标术语翻译结果
     */
    public $Target;

    /**
     * @param string $Source 源术语
     * @param string $Target 目标术语翻译结果
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }
    }
}
