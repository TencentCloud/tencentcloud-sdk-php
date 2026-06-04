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
 * 联网搜索配置(国际版使用)
 *
 * @method string getApiKey() 获取API密钥
 * @method void setApiKey(string $ApiKey) 设置API密钥
 * @method boolean getEnabled() 获取是否开启
 * @method void setEnabled(boolean $Enabled) 设置是否开启
 * @method string getProvider() 获取服务提供商
 * @method void setProvider(string $Provider) 设置服务提供商
 * @method integer getTopN() 获取返回结果数量
 * @method void setTopN(integer $TopN) 设置返回结果数量
 */
class AppWebSearchConfig extends AbstractModel
{
    /**
     * @var string API密钥
     */
    public $ApiKey;

    /**
     * @var boolean 是否开启
     */
    public $Enabled;

    /**
     * @var string 服务提供商
     */
    public $Provider;

    /**
     * @var integer 返回结果数量
     */
    public $TopN;

    /**
     * @param string $ApiKey API密钥
     * @param boolean $Enabled 是否开启
     * @param string $Provider 服务提供商
     * @param integer $TopN 返回结果数量
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
        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("TopN",$param) and $param["TopN"] !== null) {
            $this->TopN = $param["TopN"];
        }
    }
}
