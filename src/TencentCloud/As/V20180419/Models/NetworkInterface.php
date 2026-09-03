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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 启动配置中的弹性网卡配置。
 *
 * @method string getInterfaceType() 获取<p>网卡类型。本字段在每个网卡项的请求中必填。</p><p>枚举值：</p><ul><li>PRIMARY： 主网卡</li><li>SECONDARY： 辅助网卡</li></ul><p>配置上层 NetworkInterfaces 时，数组必须显式包含且只能包含一个 PRIMARY，AS 不自动补齐主网卡。</p>
 * @method void setInterfaceType(string $InterfaceType) 设置<p>网卡类型。本字段在每个网卡项的请求中必填。</p><p>枚举值：</p><ul><li>PRIMARY： 主网卡</li><li>SECONDARY： 辅助网卡</li></ul><p>配置上层 NetworkInterfaces 时，数组必须显式包含且只能包含一个 PRIMARY，AS 不自动补齐主网卡。</p>
 * @method integer getPrivateIpv4AddressCount() 获取<p>网卡请求分配的内网 IPv4 地址总数，包含主 IP。</p><p>取值范围：[1, 40]</p><p>SECONDARY 网卡请求时必填；PRIMARY 网卡请求时可选，未填写时仅在实际扩容构造 CVM 请求副本时按 1 处理，不写回启动配置。显式传入的值由 AS 透传给 CVM，最终由 CVM/VPC 校验。</p>
 * @method void setPrivateIpv4AddressCount(integer $PrivateIpv4AddressCount) 设置<p>网卡请求分配的内网 IPv4 地址总数，包含主 IP。</p><p>取值范围：[1, 40]</p><p>SECONDARY 网卡请求时必填；PRIMARY 网卡请求时可选，未填写时仅在实际扩容构造 CVM 请求副本时按 1 处理，不写回启动配置。显式传入的值由 AS 透传给 CVM，最终由 CVM/VPC 校验。</p>
 * @method array getSecurityGroupIds() 获取<p>弹性网卡绑定的安全组 ID 列表。</p><p>入参限制：最多 10 个。</p><p>对于 PRIMARY，网卡中显式配置的非空列表优先于启动配置中的 SecurityGroupIds 参数；网卡中未配置时使用启动配置中的 SecurityGroupIds 参数，两处均未配置时 AS 不指定安全组，继续按 CVM 缺省规则处理。对于 SECONDARY，仅透传网卡中显式配置的非空列表，不继承启动配置中的 SecurityGroupIds 参数。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>弹性网卡绑定的安全组 ID 列表。</p><p>入参限制：最多 10 个。</p><p>对于 PRIMARY，网卡中显式配置的非空列表优先于启动配置中的 SecurityGroupIds 参数；网卡中未配置时使用启动配置中的 SecurityGroupIds 参数，两处均未配置时 AS 不指定安全组，继续按 CVM 缺省规则处理。对于 SECONDARY，仅透传网卡中显式配置的非空列表，不继承启动配置中的 SecurityGroupIds 参数。</p>
 * @method boolean getIsKeepENI() 获取<p>实例销毁时是否保留辅助网卡，仅对 SECONDARY 有效。</p><p>枚举值：</p><ul><li>false： 不保留辅助网卡，辅助网卡随实例销毁</li><li>true： 保留辅助网卡</li></ul><p>默认值：false</p><p>PRIMARY 不允许配置 true。</p>
 * @method void setIsKeepENI(boolean $IsKeepENI) 设置<p>实例销毁时是否保留辅助网卡，仅对 SECONDARY 有效。</p><p>枚举值：</p><ul><li>false： 不保留辅助网卡，辅助网卡随实例销毁</li><li>true： 保留辅助网卡</li></ul><p>默认值：false</p><p>PRIMARY 不允许配置 true。</p>
 */
class NetworkInterface extends AbstractModel
{
    /**
     * @var string <p>网卡类型。本字段在每个网卡项的请求中必填。</p><p>枚举值：</p><ul><li>PRIMARY： 主网卡</li><li>SECONDARY： 辅助网卡</li></ul><p>配置上层 NetworkInterfaces 时，数组必须显式包含且只能包含一个 PRIMARY，AS 不自动补齐主网卡。</p>
     */
    public $InterfaceType;

    /**
     * @var integer <p>网卡请求分配的内网 IPv4 地址总数，包含主 IP。</p><p>取值范围：[1, 40]</p><p>SECONDARY 网卡请求时必填；PRIMARY 网卡请求时可选，未填写时仅在实际扩容构造 CVM 请求副本时按 1 处理，不写回启动配置。显式传入的值由 AS 透传给 CVM，最终由 CVM/VPC 校验。</p>
     */
    public $PrivateIpv4AddressCount;

    /**
     * @var array <p>弹性网卡绑定的安全组 ID 列表。</p><p>入参限制：最多 10 个。</p><p>对于 PRIMARY，网卡中显式配置的非空列表优先于启动配置中的 SecurityGroupIds 参数；网卡中未配置时使用启动配置中的 SecurityGroupIds 参数，两处均未配置时 AS 不指定安全组，继续按 CVM 缺省规则处理。对于 SECONDARY，仅透传网卡中显式配置的非空列表，不继承启动配置中的 SecurityGroupIds 参数。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var boolean <p>实例销毁时是否保留辅助网卡，仅对 SECONDARY 有效。</p><p>枚举值：</p><ul><li>false： 不保留辅助网卡，辅助网卡随实例销毁</li><li>true： 保留辅助网卡</li></ul><p>默认值：false</p><p>PRIMARY 不允许配置 true。</p>
     */
    public $IsKeepENI;

    /**
     * @param string $InterfaceType <p>网卡类型。本字段在每个网卡项的请求中必填。</p><p>枚举值：</p><ul><li>PRIMARY： 主网卡</li><li>SECONDARY： 辅助网卡</li></ul><p>配置上层 NetworkInterfaces 时，数组必须显式包含且只能包含一个 PRIMARY，AS 不自动补齐主网卡。</p>
     * @param integer $PrivateIpv4AddressCount <p>网卡请求分配的内网 IPv4 地址总数，包含主 IP。</p><p>取值范围：[1, 40]</p><p>SECONDARY 网卡请求时必填；PRIMARY 网卡请求时可选，未填写时仅在实际扩容构造 CVM 请求副本时按 1 处理，不写回启动配置。显式传入的值由 AS 透传给 CVM，最终由 CVM/VPC 校验。</p>
     * @param array $SecurityGroupIds <p>弹性网卡绑定的安全组 ID 列表。</p><p>入参限制：最多 10 个。</p><p>对于 PRIMARY，网卡中显式配置的非空列表优先于启动配置中的 SecurityGroupIds 参数；网卡中未配置时使用启动配置中的 SecurityGroupIds 参数，两处均未配置时 AS 不指定安全组，继续按 CVM 缺省规则处理。对于 SECONDARY，仅透传网卡中显式配置的非空列表，不继承启动配置中的 SecurityGroupIds 参数。</p>
     * @param boolean $IsKeepENI <p>实例销毁时是否保留辅助网卡，仅对 SECONDARY 有效。</p><p>枚举值：</p><ul><li>false： 不保留辅助网卡，辅助网卡随实例销毁</li><li>true： 保留辅助网卡</li></ul><p>默认值：false</p><p>PRIMARY 不允许配置 true。</p>
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
        if (array_key_exists("InterfaceType",$param) and $param["InterfaceType"] !== null) {
            $this->InterfaceType = $param["InterfaceType"];
        }

        if (array_key_exists("PrivateIpv4AddressCount",$param) and $param["PrivateIpv4AddressCount"] !== null) {
            $this->PrivateIpv4AddressCount = $param["PrivateIpv4AddressCount"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("IsKeepENI",$param) and $param["IsKeepENI"] !== null) {
            $this->IsKeepENI = $param["IsKeepENI"];
        }
    }
}
