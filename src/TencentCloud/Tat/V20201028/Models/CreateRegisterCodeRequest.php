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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRegisterCode请求参数结构体
 *
 * @method string getDescription() 获取注册码描述。最大长度为 128 字符。
 * @method void setDescription(string $Description) 设置注册码描述。最大长度为 128 字符。
 * @method string getInstanceNamePrefix() 获取注册实例名称前缀。最大长度为 32 字符。
 * @method void setInstanceNamePrefix(string $InstanceNamePrefix) 设置注册实例名称前缀。最大长度为 32 字符。
 * @method integer getRegisterLimit() 获取该注册码允许注册的实例数目。默认值为 10，最小值为 1，最大值为 10000。
 * @method void setRegisterLimit(integer $RegisterLimit) 设置该注册码允许注册的实例数目。默认值为 10，最小值为 1，最大值为 10000。
 * @method integer getEffectiveTime() 获取该注册码的有效时间，单位为小时。默认值为 4。

- 若传入值小于等于 99999，则以小时为单位设置有效时间。
- 若传入值大于 99999，则设置为长期有效。
 * @method void setEffectiveTime(integer $EffectiveTime) 设置该注册码的有效时间，单位为小时。默认值为 4。

- 若传入值小于等于 99999，则以小时为单位设置有效时间。
- 若传入值大于 99999，则设置为长期有效。
 * @method string getIpAddressRange() 获取限制注册码只能从 IpAddressRange 所描述公网出口进行注册。

默认为空，即无任何限制。

取值应为标准 IPv4 或 CIDRv4 格式。例如 192.168.1.1 或 192.168.0.0/16。
 * @method void setIpAddressRange(string $IpAddressRange) 设置限制注册码只能从 IpAddressRange 所描述公网出口进行注册。

默认为空，即无任何限制。

取值应为标准 IPv4 或 CIDRv4 格式。例如 192.168.1.1 或 192.168.0.0/16。
 */
class CreateRegisterCodeRequest extends AbstractModel
{
    /**
     * @var string 注册码描述。最大长度为 128 字符。
     */
    public $Description;

    /**
     * @var string 注册实例名称前缀。最大长度为 32 字符。
     */
    public $InstanceNamePrefix;

    /**
     * @var integer 该注册码允许注册的实例数目。默认值为 10，最小值为 1，最大值为 10000。
     */
    public $RegisterLimit;

    /**
     * @var integer 该注册码的有效时间，单位为小时。默认值为 4。

- 若传入值小于等于 99999，则以小时为单位设置有效时间。
- 若传入值大于 99999，则设置为长期有效。
     */
    public $EffectiveTime;

    /**
     * @var string 限制注册码只能从 IpAddressRange 所描述公网出口进行注册。

默认为空，即无任何限制。

取值应为标准 IPv4 或 CIDRv4 格式。例如 192.168.1.1 或 192.168.0.0/16。
     */
    public $IpAddressRange;

    /**
     * @param string $Description 注册码描述。最大长度为 128 字符。
     * @param string $InstanceNamePrefix 注册实例名称前缀。最大长度为 32 字符。
     * @param integer $RegisterLimit 该注册码允许注册的实例数目。默认值为 10，最小值为 1，最大值为 10000。
     * @param integer $EffectiveTime 该注册码的有效时间，单位为小时。默认值为 4。

- 若传入值小于等于 99999，则以小时为单位设置有效时间。
- 若传入值大于 99999，则设置为长期有效。
     * @param string $IpAddressRange 限制注册码只能从 IpAddressRange 所描述公网出口进行注册。

默认为空，即无任何限制。

取值应为标准 IPv4 或 CIDRv4 格式。例如 192.168.1.1 或 192.168.0.0/16。
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InstanceNamePrefix",$param) and $param["InstanceNamePrefix"] !== null) {
            $this->InstanceNamePrefix = $param["InstanceNamePrefix"];
        }

        if (array_key_exists("RegisterLimit",$param) and $param["RegisterLimit"] !== null) {
            $this->RegisterLimit = $param["RegisterLimit"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("IpAddressRange",$param) and $param["IpAddressRange"] !== null) {
            $this->IpAddressRange = $param["IpAddressRange"];
        }
    }
}
