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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本续写结果
 *
 * @method string getTargetText() 获取续写的文本。
 * @method void setTargetText(string $TargetText) 设置续写的文本。
 * @method string getPrefixText() 获取续写的前缀。
 * @method void setPrefixText(string $PrefixText) 设置续写的前缀。
 */
class Writing extends AbstractModel
{
    /**
     * @var string 续写的文本。
     */
    public $TargetText;

    /**
     * @var string 续写的前缀。
     */
    public $PrefixText;

    /**
     * @param string $TargetText 续写的文本。
     * @param string $PrefixText 续写的前缀。
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
        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }

        if (array_key_exists("PrefixText",$param) and $param["PrefixText"] !== null) {
            $this->PrefixText = $param["PrefixText"];
        }
    }
}
