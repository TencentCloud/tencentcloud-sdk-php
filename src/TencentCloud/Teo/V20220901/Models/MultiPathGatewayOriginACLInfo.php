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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多通道网关示例实例与回源 IP 网段的绑定关系，以及回源 IP 网段详情。
 *
 * @method MultiPathGatewayCurrentOriginACL getMultiPathGatewayCurrentOriginACL() 获取当前生效的回源 IP 网段。
 * @method void setMultiPathGatewayCurrentOriginACL(MultiPathGatewayCurrentOriginACL $MultiPathGatewayCurrentOriginACL) 设置当前生效的回源 IP 网段。
 * @method MultiPathGatewayNextOriginACL getMultiPathGatewayNextOriginACL() 获取当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新时该字段为空。
 * @method void setMultiPathGatewayNextOriginACL(MultiPathGatewayNextOriginACL $MultiPathGatewayNextOriginACL) 设置当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新时该字段为空。
 */
class MultiPathGatewayOriginACLInfo extends AbstractModel
{
    /**
     * @var MultiPathGatewayCurrentOriginACL 当前生效的回源 IP 网段。
     */
    public $MultiPathGatewayCurrentOriginACL;

    /**
     * @var MultiPathGatewayNextOriginACL 当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新时该字段为空。
     */
    public $MultiPathGatewayNextOriginACL;

    /**
     * @param MultiPathGatewayCurrentOriginACL $MultiPathGatewayCurrentOriginACL 当前生效的回源 IP 网段。
     * @param MultiPathGatewayNextOriginACL $MultiPathGatewayNextOriginACL 当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新时该字段为空。
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
        if (array_key_exists("MultiPathGatewayCurrentOriginACL",$param) and $param["MultiPathGatewayCurrentOriginACL"] !== null) {
            $this->MultiPathGatewayCurrentOriginACL = new MultiPathGatewayCurrentOriginACL();
            $this->MultiPathGatewayCurrentOriginACL->deserialize($param["MultiPathGatewayCurrentOriginACL"]);
        }

        if (array_key_exists("MultiPathGatewayNextOriginACL",$param) and $param["MultiPathGatewayNextOriginACL"] !== null) {
            $this->MultiPathGatewayNextOriginACL = new MultiPathGatewayNextOriginACL();
            $this->MultiPathGatewayNextOriginACL->deserialize($param["MultiPathGatewayNextOriginACL"]);
        }
    }
}
