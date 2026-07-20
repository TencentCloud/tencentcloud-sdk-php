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
 * DeletePlugin请求参数结构体
 *
 * @method string getPluginId() 获取<p>插件id</p>
 * @method void setPluginId(string $PluginId) 设置<p>插件id</p>
 * @method string getLoginUin() 获取<p>登录用户主账号(集成商模式必填)</p>
 * @method void setLoginUin(string $LoginUin) 设置<p>登录用户主账号(集成商模式必填)</p>
 * @method string getLoginSubAccountUin() 获取<p>登录用户子账号(集成商模式必填)</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置<p>登录用户子账号(集成商模式必填)</p>
 */
class DeletePluginRequest extends AbstractModel
{
    /**
     * @var string <p>插件id</p>
     */
    public $PluginId;

    /**
     * @var string <p>登录用户主账号(集成商模式必填)</p>
     */
    public $LoginUin;

    /**
     * @var string <p>登录用户子账号(集成商模式必填)</p>
     */
    public $LoginSubAccountUin;

    /**
     * @param string $PluginId <p>插件id</p>
     * @param string $LoginUin <p>登录用户主账号(集成商模式必填)</p>
     * @param string $LoginSubAccountUin <p>登录用户子账号(集成商模式必填)</p>
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
