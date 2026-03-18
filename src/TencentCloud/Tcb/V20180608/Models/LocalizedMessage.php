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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可以为每种语言配置一个字符串。比如：name，中文展示为：名字，英文展示为 name，韩文展示为：이름
 *
 * @method string getMessage() 获取默认展示的文本
 * @method void setMessage(string $Message) 设置默认展示的文本
 * @method array getLocalized() 获取针对每种语言展示的文字
 * @method void setLocalized(array $Localized) 设置针对每种语言展示的文字
 */
class LocalizedMessage extends AbstractModel
{
    /**
     * @var string 默认展示的文本
     */
    public $Message;

    /**
     * @var array 针对每种语言展示的文字
     */
    public $Localized;

    /**
     * @param string $Message 默认展示的文本
     * @param array $Localized 针对每种语言展示的文字
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Localized",$param) and $param["Localized"] !== null) {
            $this->Localized = [];
            foreach ($param["Localized"] as $key => $value){
                $obj = new MessageLocalized();
                $obj->deserialize($value);
                array_push($this->Localized, $obj);
            }
        }
    }
}
