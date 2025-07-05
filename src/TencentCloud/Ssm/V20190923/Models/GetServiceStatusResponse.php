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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServiceStatus返回参数结构体
 *
 * @method boolean getServiceEnabled() 获取true表示服务已开通，false 表示服务尚未开通。
 * @method void setServiceEnabled(boolean $ServiceEnabled) 设置true表示服务已开通，false 表示服务尚未开通。
 * @method integer getInvalidType() 获取服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。
 * @method void setInvalidType(integer $InvalidType) 设置服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。
 * @method boolean getAccessKeyEscrowEnabled() 获取true表示用户已经可以使用密钥安全托管功能，
false表示用户暂时不能使用密钥安全托管功能。
 * @method void setAccessKeyEscrowEnabled(boolean $AccessKeyEscrowEnabled) 设置true表示用户已经可以使用密钥安全托管功能，
false表示用户暂时不能使用密钥安全托管功能。
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method integer getQPSLimit() 获取计算性能限制
 * @method void setQPSLimit(integer $QPSLimit) 设置计算性能限制
 * @method integer getSecretLimit() 获取凭据个数限制
 * @method void setSecretLimit(integer $SecretLimit) 设置凭据个数限制
 * @method string getPayModel() 获取付费模式
 * @method void setPayModel(string $PayModel) 设置付费模式
 * @method integer getRenewFlag() 获取自动续费标识，0:手动续费 1:自动续费 2:到期不续
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费标识，0:手动续费 1:自动续费 2:到期不续
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method integer getTotalCount() 获取已托管凭据个数
 * @method void setTotalCount(integer $TotalCount) 设置已托管凭据个数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetServiceStatusResponse extends AbstractModel
{
    /**
     * @var boolean true表示服务已开通，false 表示服务尚未开通。
     */
    public $ServiceEnabled;

    /**
     * @var integer 服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。
     */
    public $InvalidType;

    /**
     * @var boolean true表示用户已经可以使用密钥安全托管功能，
false表示用户暂时不能使用密钥安全托管功能。
     */
    public $AccessKeyEscrowEnabled;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 计算性能限制
     */
    public $QPSLimit;

    /**
     * @var integer 凭据个数限制
     */
    public $SecretLimit;

    /**
     * @var string 付费模式
     */
    public $PayModel;

    /**
     * @var integer 自动续费标识，0:手动续费 1:自动续费 2:到期不续
     */
    public $RenewFlag;

    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var integer 已托管凭据个数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $ServiceEnabled true表示服务已开通，false 表示服务尚未开通。
     * @param integer $InvalidType 服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。
     * @param boolean $AccessKeyEscrowEnabled true表示用户已经可以使用密钥安全托管功能，
false表示用户暂时不能使用密钥安全托管功能。
     * @param string $ExpireTime 过期时间
     * @param integer $QPSLimit 计算性能限制
     * @param integer $SecretLimit 凭据个数限制
     * @param string $PayModel 付费模式
     * @param integer $RenewFlag 自动续费标识，0:手动续费 1:自动续费 2:到期不续
     * @param string $ResourceId 资源id
     * @param integer $TotalCount 已托管凭据个数
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
        if (array_key_exists("ServiceEnabled",$param) and $param["ServiceEnabled"] !== null) {
            $this->ServiceEnabled = $param["ServiceEnabled"];
        }

        if (array_key_exists("InvalidType",$param) and $param["InvalidType"] !== null) {
            $this->InvalidType = $param["InvalidType"];
        }

        if (array_key_exists("AccessKeyEscrowEnabled",$param) and $param["AccessKeyEscrowEnabled"] !== null) {
            $this->AccessKeyEscrowEnabled = $param["AccessKeyEscrowEnabled"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("QPSLimit",$param) and $param["QPSLimit"] !== null) {
            $this->QPSLimit = $param["QPSLimit"];
        }

        if (array_key_exists("SecretLimit",$param) and $param["SecretLimit"] !== null) {
            $this->SecretLimit = $param["SecretLimit"];
        }

        if (array_key_exists("PayModel",$param) and $param["PayModel"] !== null) {
            $this->PayModel = $param["PayModel"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
