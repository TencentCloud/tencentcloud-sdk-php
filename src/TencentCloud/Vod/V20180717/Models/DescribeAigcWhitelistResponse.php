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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAigcWhitelist返回参数结构体
 *
 * @method string getAigcType() 获取<p>AIGC任务类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li></ul>
 * @method void setAigcType(string $AigcType) 设置<p>AIGC任务类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li></ul>
 * @method string getModelWhitelistSwitch() 获取<p>模型白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只有允许调用ModelWhitelist中列出的模型</li><li>OFF： 关闭，允许调用所有模型</li></ul>
 * @method void setModelWhitelistSwitch(string $ModelWhitelistSwitch) 设置<p>模型白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只有允许调用ModelWhitelist中列出的模型</li><li>OFF： 关闭，允许调用所有模型</li></ul>
 * @method array getModelWhitelist() 获取<p>模型白名单列表</p>
 * @method void setModelWhitelist(array $ModelWhitelist) 设置<p>模型白名单列表</p>
 * @method string getIpWhitelistSwitch() 获取<p>IP白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只允许IpWhitelist中列出的IP段进行调用</li><li>OFF： 关闭，允许所有IP进行调用</li></ul>
 * @method void setIpWhitelistSwitch(string $IpWhitelistSwitch) 设置<p>IP白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只允许IpWhitelist中列出的IP段进行调用</li><li>OFF： 关闭，允许所有IP进行调用</li></ul>
 * @method array getIpWhitelist() 获取<p>IP白名单的CIDR列表</p>
 * @method void setIpWhitelist(array $IpWhitelist) 设置<p>IP白名单的CIDR列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAigcWhitelistResponse extends AbstractModel
{
    /**
     * @var string <p>AIGC任务类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li></ul>
     */
    public $AigcType;

    /**
     * @var string <p>模型白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只有允许调用ModelWhitelist中列出的模型</li><li>OFF： 关闭，允许调用所有模型</li></ul>
     */
    public $ModelWhitelistSwitch;

    /**
     * @var array <p>模型白名单列表</p>
     */
    public $ModelWhitelist;

    /**
     * @var string <p>IP白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只允许IpWhitelist中列出的IP段进行调用</li><li>OFF： 关闭，允许所有IP进行调用</li></ul>
     */
    public $IpWhitelistSwitch;

    /**
     * @var array <p>IP白名单的CIDR列表</p>
     */
    public $IpWhitelist;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AigcType <p>AIGC任务类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li></ul>
     * @param string $ModelWhitelistSwitch <p>模型白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只有允许调用ModelWhitelist中列出的模型</li><li>OFF： 关闭，允许调用所有模型</li></ul>
     * @param array $ModelWhitelist <p>模型白名单列表</p>
     * @param string $IpWhitelistSwitch <p>IP白名单开关</p><p>枚举值：</p><ul><li>ON： 打开，只允许IpWhitelist中列出的IP段进行调用</li><li>OFF： 关闭，允许所有IP进行调用</li></ul>
     * @param array $IpWhitelist <p>IP白名单的CIDR列表</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AigcType",$param) and $param["AigcType"] !== null) {
            $this->AigcType = $param["AigcType"];
        }

        if (array_key_exists("ModelWhitelistSwitch",$param) and $param["ModelWhitelistSwitch"] !== null) {
            $this->ModelWhitelistSwitch = $param["ModelWhitelistSwitch"];
        }

        if (array_key_exists("ModelWhitelist",$param) and $param["ModelWhitelist"] !== null) {
            $this->ModelWhitelist = [];
            foreach ($param["ModelWhitelist"] as $key => $value){
                $obj = new AigcWhitelistModel();
                $obj->deserialize($value);
                array_push($this->ModelWhitelist, $obj);
            }
        }

        if (array_key_exists("IpWhitelistSwitch",$param) and $param["IpWhitelistSwitch"] !== null) {
            $this->IpWhitelistSwitch = $param["IpWhitelistSwitch"];
        }

        if (array_key_exists("IpWhitelist",$param) and $param["IpWhitelist"] !== null) {
            $this->IpWhitelist = $param["IpWhitelist"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
