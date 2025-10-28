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
 * @method integer getJumpEventType() 获取跳转事件枚举，
* 1 - 企业收录。
* 2 - 超管授权书审核。
* 3 - 认证完成。
 * @method void setJumpEventType(integer $JumpEventType) 设置跳转事件枚举，
* 1 - 企业收录。
* 2 - 超管授权书审核。
* 3 - 认证完成。
 * @method string getJumpUrl() 获取为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。
Endpoint如果是APP 类型，请传递<font color="red">"true"</font>
如果 Endpoint 是 H5 类型，请参考文档[跳转电子签H5](https://qian.tencent.com/developers/company/openqianh5/)

p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
 * @method void setJumpUrl(string $JumpUrl) 设置为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。
Endpoint如果是APP 类型，请传递<font color="red">"true"</font>
如果 Endpoint 是 H5 类型，请参考文档[跳转电子签H5](https://qian.tencent.com/developers/company/openqianh5/)

p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
 */
class JumpEvent extends AbstractModel
{
    /**
     * @var integer 跳转事件枚举，
* 1 - 企业收录。
* 2 - 超管授权书审核。
* 3 - 认证完成。
     */
    public $JumpEventType;

    /**
     * @var string 为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。
Endpoint如果是APP 类型，请传递<font color="red">"true"</font>
如果 Endpoint 是 H5 类型，请参考文档[跳转电子签H5](https://qian.tencent.com/developers/company/openqianh5/)

p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
     */
    public $JumpUrl;

    /**
     * @param integer $JumpEventType 跳转事件枚举，
* 1 - 企业收录。
* 2 - 超管授权书审核。
* 3 - 认证完成。
     * @param string $JumpUrl 为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。
Endpoint如果是APP 类型，请传递<font color="red">"true"</font>
如果 Endpoint 是 H5 类型，请参考文档[跳转电子签H5](https://qian.tencent.com/developers/company/openqianh5/)

p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
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
