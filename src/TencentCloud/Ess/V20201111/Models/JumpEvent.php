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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跳转事件的结构体，其中包括认证期间收录，授权书审核，企业认证的回跳事件。
 *
 * @method integer getJumpEventType() 获取<p>跳转事件枚举</p><p>枚举值：</p><ul><li>1： 企业收录</li><li>2： 超管授权书审核</li><li>3： 企业认证完成</li></ul>
 * @method void setJumpEventType(integer $JumpEventType) 设置<p>跳转事件枚举</p><p>枚举值：</p><ul><li>1： 企业收录</li><li>2： 超管授权书审核</li><li>3： 企业认证完成</li></ul>
 * @method string getJumpUrl() 获取<p>为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。<br>Endpoint如果是APP 类型，请传递<font color="red">&quot;true&quot;</font><br>如果 Endpoint 是 H5 类型，请参考文档<a href="https://qian.tencent.com/developers/company/openqianh5/">跳转电子签H5</a></p><p>p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。</p>
 * @method void setJumpUrl(string $JumpUrl) 设置<p>为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。<br>Endpoint如果是APP 类型，请传递<font color="red">&quot;true&quot;</font><br>如果 Endpoint 是 H5 类型，请参考文档<a href="https://qian.tencent.com/developers/company/openqianh5/">跳转电子签H5</a></p><p>p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。</p>
 */
class JumpEvent extends AbstractModel
{
    /**
     * @var integer <p>跳转事件枚举</p><p>枚举值：</p><ul><li>1： 企业收录</li><li>2： 超管授权书审核</li><li>3： 企业认证完成</li></ul>
     */
    public $JumpEventType;

    /**
     * @var string <p>为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。<br>Endpoint如果是APP 类型，请传递<font color="red">&quot;true&quot;</font><br>如果 Endpoint 是 H5 类型，请参考文档<a href="https://qian.tencent.com/developers/company/openqianh5/">跳转电子签H5</a></p><p>p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。</p>
     */
    public $JumpUrl;

    /**
     * @param integer $JumpEventType <p>跳转事件枚举</p><p>枚举值：</p><ul><li>1： 企业收录</li><li>2： 超管授权书审核</li><li>3： 企业认证完成</li></ul>
     * @param string $JumpUrl <p>为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。<br>Endpoint如果是APP 类型，请传递<font color="red">&quot;true&quot;</font><br>如果 Endpoint 是 H5 类型，请参考文档<a href="https://qian.tencent.com/developers/company/openqianh5/">跳转电子签H5</a></p><p>p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。</p>
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
        if (array_key_exists("JumpEventType",$param) and $param["JumpEventType"] !== null) {
            $this->JumpEventType = $param["JumpEventType"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }
    }
}
