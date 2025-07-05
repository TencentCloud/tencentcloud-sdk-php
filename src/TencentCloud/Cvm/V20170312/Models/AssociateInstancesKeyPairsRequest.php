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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateInstancesKeyPairs请求参数结构体
 *
 * @method array getInstanceIds() 获取一个或多个待操作的实例ID，每次请求批量实例的上限为100。可以通过以下方式获取可用的实例ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/index)查询实例ID。</li>
<li>通过调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的`InstanceId`获取实例ID。</li>
 * @method void setInstanceIds(array $InstanceIds) 设置一个或多个待操作的实例ID，每次请求批量实例的上限为100。可以通过以下方式获取可用的实例ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/index)查询实例ID。</li>
<li>通过调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的`InstanceId`获取实例ID。</li>
 * @method array getKeyIds() 获取一个或多个待操作的密钥对ID，每次请求批量密钥对的上限为100。可以通过以下方式获取可用的密钥ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/sshkey)查询密钥ID。</li>
<li>通过调用接口 [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) ，取返回信息中的`KeyId`获取密钥对ID。</li>
 * @method void setKeyIds(array $KeyIds) 设置一个或多个待操作的密钥对ID，每次请求批量密钥对的上限为100。可以通过以下方式获取可用的密钥ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/sshkey)查询密钥ID。</li>
<li>通过调用接口 [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) ，取返回信息中的`KeyId`获取密钥对ID。</li>
 * @method boolean getForceStop() 获取是否强制关机，默认值为 false。常规场景下，建议手动关机后绑定密钥。取值范围：
<li>true：先执行强制关机，再绑定密钥。</li>
<li>false：不执行强制关机，仅支持对已关机状态实例进行绑定操作。</li>
 * @method void setForceStop(boolean $ForceStop) 设置是否强制关机，默认值为 false。常规场景下，建议手动关机后绑定密钥。取值范围：
<li>true：先执行强制关机，再绑定密钥。</li>
<li>false：不执行强制关机，仅支持对已关机状态实例进行绑定操作。</li>
 */
class AssociateInstancesKeyPairsRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的实例ID，每次请求批量实例的上限为100。可以通过以下方式获取可用的实例ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/index)查询实例ID。</li>
<li>通过调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的`InstanceId`获取实例ID。</li>
     */
    public $InstanceIds;

    /**
     * @var array 一个或多个待操作的密钥对ID，每次请求批量密钥对的上限为100。可以通过以下方式获取可用的密钥ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/sshkey)查询密钥ID。</li>
<li>通过调用接口 [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) ，取返回信息中的`KeyId`获取密钥对ID。</li>
     */
    public $KeyIds;

    /**
     * @var boolean 是否强制关机，默认值为 false。常规场景下，建议手动关机后绑定密钥。取值范围：
<li>true：先执行强制关机，再绑定密钥。</li>
<li>false：不执行强制关机，仅支持对已关机状态实例进行绑定操作。</li>
     */
    public $ForceStop;

    /**
     * @param array $InstanceIds 一个或多个待操作的实例ID，每次请求批量实例的上限为100。可以通过以下方式获取可用的实例ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/index)查询实例ID。</li>
<li>通过调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的`InstanceId`获取实例ID。</li>
     * @param array $KeyIds 一个或多个待操作的密钥对ID，每次请求批量密钥对的上限为100。可以通过以下方式获取可用的密钥ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/sshkey)查询密钥ID。</li>
<li>通过调用接口 [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) ，取返回信息中的`KeyId`获取密钥对ID。</li>
     * @param boolean $ForceStop 是否强制关机，默认值为 false。常规场景下，建议手动关机后绑定密钥。取值范围：
<li>true：先执行强制关机，再绑定密钥。</li>
<li>false：不执行强制关机，仅支持对已关机状态实例进行绑定操作。</li>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }
    }
}
