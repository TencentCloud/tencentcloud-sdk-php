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
 * 多模态理解媒体文件输入
 *
 * @method string getType() 获取<p>输入类型</p><p>枚举值：</p><ul><li>URL： Url输入</li><li>DATA： Base64输入</li></ul>
 * @method void setType(string $Type) 设置<p>输入类型</p><p>枚举值：</p><ul><li>URL： Url输入</li><li>DATA： Base64输入</li></ul>
 * @method ModelChatUrlInputInfo getUrlInputInfo() 获取<p>URL输入配置</p>
 * @method void setUrlInputInfo(ModelChatUrlInputInfo $UrlInputInfo) 设置<p>URL输入配置</p>
 * @method ModelChatDataInputInfo getDataInputInfo() 获取<p>Base64输入配置</p>
 * @method void setDataInputInfo(ModelChatDataInputInfo $DataInputInfo) 设置<p>Base64输入配置</p>
 */
class ModelChatMediaInputInfo extends AbstractModel
{
    /**
     * @var string <p>输入类型</p><p>枚举值：</p><ul><li>URL： Url输入</li><li>DATA： Base64输入</li></ul>
     */
    public $Type;

    /**
     * @var ModelChatUrlInputInfo <p>URL输入配置</p>
     */
    public $UrlInputInfo;

    /**
     * @var ModelChatDataInputInfo <p>Base64输入配置</p>
     */
    public $DataInputInfo;

    /**
     * @param string $Type <p>输入类型</p><p>枚举值：</p><ul><li>URL： Url输入</li><li>DATA： Base64输入</li></ul>
     * @param ModelChatUrlInputInfo $UrlInputInfo <p>URL输入配置</p>
     * @param ModelChatDataInputInfo $DataInputInfo <p>Base64输入配置</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UrlInputInfo",$param) and $param["UrlInputInfo"] !== null) {
            $this->UrlInputInfo = new ModelChatUrlInputInfo();
            $this->UrlInputInfo->deserialize($param["UrlInputInfo"]);
        }

        if (array_key_exists("DataInputInfo",$param) and $param["DataInputInfo"] !== null) {
            $this->DataInputInfo = new ModelChatDataInputInfo();
            $this->DataInputInfo->deserialize($param["DataInputInfo"]);
        }
    }
}
