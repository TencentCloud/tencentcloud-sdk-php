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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 聊天测试接口多模态附件
 *
 * @method string getData() 获取<p>base64 url编码的文件内容</p>
 * @method void setData(string $Data) 设置<p>base64 url编码的文件内容</p>
 * @method string getType() 获取<p>附件类型</p><p>枚举值：</p><ul><li>image： 图像</li><li>pdf： pdf（文件）</li></ul>
 * @method void setType(string $Type) 设置<p>附件类型</p><p>枚举值：</p><ul><li>image： 图像</li><li>pdf： pdf（文件）</li></ul>
 */
class MultiModalityAttachments extends AbstractModel
{
    /**
     * @var string <p>base64 url编码的文件内容</p>
     */
    public $Data;

    /**
     * @var string <p>附件类型</p><p>枚举值：</p><ul><li>image： 图像</li><li>pdf： pdf（文件）</li></ul>
     */
    public $Type;

    /**
     * @param string $Data <p>base64 url编码的文件内容</p>
     * @param string $Type <p>附件类型</p><p>枚举值：</p><ul><li>image： 图像</li><li>pdf： pdf（文件）</li></ul>
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
