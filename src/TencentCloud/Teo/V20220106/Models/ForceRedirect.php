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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问协议强制https跳转配置
 *
 * @method string getSwitch() 获取访问强制跳转配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置访问强制跳转配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method integer getRedirectStatusCode() 获取重定向状态码，取值有：
<li>301：301跳转；</li>
<li>302：302跳转。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) 设置重定向状态码，取值有：
<li>301：301跳转；</li>
<li>302：302跳转。</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ForceRedirect extends AbstractModel
{
    /**
     * @var string 访问强制跳转配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var integer 重定向状态码，取值有：
<li>301：301跳转；</li>
<li>302：302跳转。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectStatusCode;

    /**
     * @param string $Switch 访问强制跳转配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param integer $RedirectStatusCode 重定向状态码，取值有：
<li>301：301跳转；</li>
<li>302：302跳转。</li>
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

        if (array_key_exists("RedirectStatusCode",$param) and $param["RedirectStatusCode"] !== null) {
            $this->RedirectStatusCode = $param["RedirectStatusCode"];
        }
    }
}
