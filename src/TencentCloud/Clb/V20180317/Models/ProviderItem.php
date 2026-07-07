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
 * Provider 信息
 *
 * @method string getProvider() 获取<p>Provider 标识（如 openai）</p>
 * @method void setProvider(string $Provider) 设置<p>Provider 标识（如 openai）</p>
 * @method string getDisplayName() 获取<p>显示名称（如 OpenAI）</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>显示名称（如 OpenAI）</p>
 * @method array getProtocols() 获取<p>模型协议列表</p>
 * @method void setProtocols(array $Protocols) 设置<p>模型协议列表</p>
 * @method string getEnglishDisplayName() 获取<p>英文显示名称</p>
 * @method void setEnglishDisplayName(string $EnglishDisplayName) 设置<p>英文显示名称</p>
 */
class ProviderItem extends AbstractModel
{
    /**
     * @var string <p>Provider 标识（如 openai）</p>
     */
    public $Provider;

    /**
     * @var string <p>显示名称（如 OpenAI）</p>
     */
    public $DisplayName;

    /**
     * @var array <p>模型协议列表</p>
     */
    public $Protocols;

    /**
     * @var string <p>英文显示名称</p>
     */
    public $EnglishDisplayName;

    /**
     * @param string $Provider <p>Provider 标识（如 openai）</p>
     * @param string $DisplayName <p>显示名称（如 OpenAI）</p>
     * @param array $Protocols <p>模型协议列表</p>
     * @param string $EnglishDisplayName <p>英文显示名称</p>
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = $param["Protocols"];
        }

        if (array_key_exists("EnglishDisplayName",$param) and $param["EnglishDisplayName"] !== null) {
            $this->EnglishDisplayName = $param["EnglishDisplayName"];
        }
    }
}
