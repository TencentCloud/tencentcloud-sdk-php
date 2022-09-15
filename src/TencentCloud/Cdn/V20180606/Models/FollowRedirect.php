<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回源 301/302 状态码自动跟随配置，默认为关闭状态
 *
 * @method string getSwitch() 获取回源跟随开关
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置回源跟随开关
on：开启
off：关闭
 * @method RedirectConfig getRedirectConfig() 获取自定义回源302 follow请求host配置，该功能为白名单功能，需要开启请联系腾讯云工程师。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectConfig(RedirectConfig $RedirectConfig) 设置自定义回源302 follow请求host配置，该功能为白名单功能，需要开启请联系腾讯云工程师。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FollowRedirect extends AbstractModel
{
    /**
     * @var string 回源跟随开关
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var RedirectConfig 自定义回源302 follow请求host配置，该功能为白名单功能，需要开启请联系腾讯云工程师。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectConfig;

    /**
     * @param string $Switch 回源跟随开关
on：开启
off：关闭
     * @param RedirectConfig $RedirectConfig 自定义回源302 follow请求host配置，该功能为白名单功能，需要开启请联系腾讯云工程师。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("RedirectConfig",$param) and $param["RedirectConfig"] !== null) {
            $this->RedirectConfig = new RedirectConfig();
            $this->RedirectConfig->deserialize($param["RedirectConfig"]);
        }
    }
}
