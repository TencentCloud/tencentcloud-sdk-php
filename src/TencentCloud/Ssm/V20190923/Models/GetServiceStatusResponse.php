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
 * @method boolean getServiceEnabled() 获取<p>true表示服务已开通，false 表示服务尚未开通。</p>
 * @method void setServiceEnabled(boolean $ServiceEnabled) 设置<p>true表示服务已开通，false 表示服务尚未开通。</p>
 * @method integer getInvalidType() 获取<p>服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。</p>
 * @method void setInvalidType(integer $InvalidType) 设置<p>服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。</p>
 * @method boolean getAccessKeyEscrowEnabled() 获取<p>true表示用户已经可以使用密钥安全托管功能，<br>false表示用户暂时不能使用密钥安全托管功能。</p>
 * @method void setAccessKeyEscrowEnabled(boolean $AccessKeyEscrowEnabled) 设置<p>true表示用户已经可以使用密钥安全托管功能，<br>false表示用户暂时不能使用密钥安全托管功能。</p>
 * @method string getExpireTime() 获取<p>过期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间</p>
 * @method integer getQPSLimit() 获取<p>计算性能限制</p>
 * @method void setQPSLimit(integer $QPSLimit) 设置<p>计算性能限制</p>
 * @method integer getSecretLimit() 获取<p>凭据个数限制</p>
 * @method void setSecretLimit(integer $SecretLimit) 设置<p>凭据个数限制</p>
 * @method string getPayModel() 获取<p>付费模式</p>
 * @method void setPayModel(string $PayModel) 设置<p>付费模式</p>
 * @method integer getRenewFlag() 获取<p>自动续费标识，0:手动续费 1:自动续费 2:到期不续</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>自动续费标识，0:手动续费 1:自动续费 2:到期不续</p>
 * @method string getResourceId() 获取<p>资源id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源id</p>
 * @method integer getTotalCount() 获取<p>已托管凭据个数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>已托管凭据个数</p>
 * @method integer getResourceRegion() 获取<p>预付费购买 SSM 资源的地域 ID</p>
 * @method void setResourceRegion(integer $ResourceRegion) 设置<p>预付费购买 SSM 资源的地域 ID</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetServiceStatusResponse extends AbstractModel
{
    /**
     * @var boolean <p>true表示服务已开通，false 表示服务尚未开通。</p>
     */
    public $ServiceEnabled;

    /**
     * @var integer <p>服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。</p>
     */
    public $InvalidType;

    /**
     * @var boolean <p>true表示用户已经可以使用密钥安全托管功能，<br>false表示用户暂时不能使用密钥安全托管功能。</p>
     */
    public $AccessKeyEscrowEnabled;

    /**
     * @var string <p>过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>计算性能限制</p>
     */
    public $QPSLimit;

    /**
     * @var integer <p>凭据个数限制</p>
     */
    public $SecretLimit;

    /**
     * @var string <p>付费模式</p>
     */
    public $PayModel;

    /**
     * @var integer <p>自动续费标识，0:手动续费 1:自动续费 2:到期不续</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>资源id</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>已托管凭据个数</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>预付费购买 SSM 资源的地域 ID</p>
     */
    public $ResourceRegion;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $ServiceEnabled <p>true表示服务已开通，false 表示服务尚未开通。</p>
     * @param integer $InvalidType <p>服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。</p>
     * @param boolean $AccessKeyEscrowEnabled <p>true表示用户已经可以使用密钥安全托管功能，<br>false表示用户暂时不能使用密钥安全托管功能。</p>
     * @param string $ExpireTime <p>过期时间</p>
     * @param integer $QPSLimit <p>计算性能限制</p>
     * @param integer $SecretLimit <p>凭据个数限制</p>
     * @param string $PayModel <p>付费模式</p>
     * @param integer $RenewFlag <p>自动续费标识，0:手动续费 1:自动续费 2:到期不续</p>
     * @param string $ResourceId <p>资源id</p>
     * @param integer $TotalCount <p>已托管凭据个数</p>
     * @param integer $ResourceRegion <p>预付费购买 SSM 资源的地域 ID</p>
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

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
