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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 截图结果的回调地址配置
 *
 * @method string getUrl() 获取<p>图片回调地址</p>
 * @method void setUrl(string $Url) 设置<p>图片回调地址</p>
 * @method string getToken() 获取<p>Token</p>
 * @method void setToken(string $Token) 设置<p>Token</p>
 * @method boolean getEnable() 获取<p>是否开启</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否开启</p>
 */
class CallbackURL extends AbstractModel
{
    /**
     * @var string <p>图片回调地址</p>
     */
    public $Url;

    /**
     * @var string <p>Token</p>
     */
    public $Token;

    /**
     * @var boolean <p>是否开启</p>
     */
    public $Enable;

    /**
     * @param string $Url <p>图片回调地址</p>
     * @param string $Token <p>Token</p>
     * @param boolean $Enable <p>是否开启</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
