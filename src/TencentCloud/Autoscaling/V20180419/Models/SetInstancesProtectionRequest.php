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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetInstancesProtection请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取<p>伸缩组ID。可以通过如下方式获取可用的伸缩组ID:<li>通过登录 <a href="https://console.cloud.tencent.com/autoscaling/group">控制台</a> 查询伸缩组ID。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/377/20438">DescribeAutoScalingGroups</a> ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li></p>
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置<p>伸缩组ID。可以通过如下方式获取可用的伸缩组ID:<li>通过登录 <a href="https://console.cloud.tencent.com/autoscaling/group">控制台</a> 查询伸缩组ID。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/377/20438">DescribeAutoScalingGroups</a> ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li></p>
 * @method array getInstanceIds() 获取<p>实例ID。可以通过以下方式获取可用的实例ID：<li>通过登录<a href="https://console.cloud.tencent.com/cvm/index">控制台</a>查询实例ID。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> ，取返回信息中的 <code>InstanceId</code> 获取实例ID。</li></p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例ID。可以通过以下方式获取可用的实例ID：<li>通过登录<a href="https://console.cloud.tencent.com/cvm/index">控制台</a>查询实例ID。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> ，取返回信息中的 <code>InstanceId</code> 获取实例ID。</li></p>
 * @method boolean getProtectedFromScaleIn() 获取<p>实例是否需要设置保护。</p>
 * @method void setProtectedFromScaleIn(boolean $ProtectedFromScaleIn) 设置<p>实例是否需要设置保护。</p>
 */
class SetInstancesProtectionRequest extends AbstractModel
{
    /**
     * @var string <p>伸缩组ID。可以通过如下方式获取可用的伸缩组ID:<li>通过登录 <a href="https://console.cloud.tencent.com/autoscaling/group">控制台</a> 查询伸缩组ID。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/377/20438">DescribeAutoScalingGroups</a> ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li></p>
     */
    public $AutoScalingGroupId;

    /**
     * @var array <p>实例ID。可以通过以下方式获取可用的实例ID：<li>通过登录<a href="https://console.cloud.tencent.com/cvm/index">控制台</a>查询实例ID。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> ，取返回信息中的 <code>InstanceId</code> 获取实例ID。</li></p>
     */
    public $InstanceIds;

    /**
     * @var boolean <p>实例是否需要设置保护。</p>
     */
    public $ProtectedFromScaleIn;

    /**
     * @param string $AutoScalingGroupId <p>伸缩组ID。可以通过如下方式获取可用的伸缩组ID:<li>通过登录 <a href="https://console.cloud.tencent.com/autoscaling/group">控制台</a> 查询伸缩组ID。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/377/20438">DescribeAutoScalingGroups</a> ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li></p>
     * @param array $InstanceIds <p>实例ID。可以通过以下方式获取可用的实例ID：<li>通过登录<a href="https://console.cloud.tencent.com/cvm/index">控制台</a>查询实例ID。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> ，取返回信息中的 <code>InstanceId</code> 获取实例ID。</li></p>
     * @param boolean $ProtectedFromScaleIn <p>实例是否需要设置保护。</p>
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ProtectedFromScaleIn",$param) and $param["ProtectedFromScaleIn"] !== null) {
            $this->ProtectedFromScaleIn = $param["ProtectedFromScaleIn"];
        }
    }
}
