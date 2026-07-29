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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeReplicaToMaster请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method integer getGroupId() 获取<p>副本节点组 ID，请通过接口<a href="https://cloud.tencent.com/document/product/239/50312">DescribeInstanceZoneInfo</a>获取多 AZ备节点组的 ID 信息。单 AZ，则无需配置该参数。</p>
 * @method void setGroupId(integer $GroupId) 设置<p>副本节点组 ID，请通过接口<a href="https://cloud.tencent.com/document/product/239/50312">DescribeInstanceZoneInfo</a>获取多 AZ备节点组的 ID 信息。单 AZ，则无需配置该参数。</p>
 * @method boolean getEmergency() 获取<p>紧急模式。</p><p>枚举值：</p><ul><li>false： 标准模式（安全推荐）</li><li>true： 极速模式：（高危加速）跳过校验、极速提主。高位操作，极易在异常情况下产生单主节点。</li></ul><p>默认值：false</p>
 * @method void setEmergency(boolean $Emergency) 设置<p>紧急模式。</p><p>枚举值：</p><ul><li>false： 标准模式（安全推荐）</li><li>true： 极速模式：（高危加速）跳过校验、极速提主。高位操作，极易在异常情况下产生单主节点。</li></ul><p>默认值：false</p>
 */
class ChangeReplicaToMasterRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>副本节点组 ID，请通过接口<a href="https://cloud.tencent.com/document/product/239/50312">DescribeInstanceZoneInfo</a>获取多 AZ备节点组的 ID 信息。单 AZ，则无需配置该参数。</p>
     */
    public $GroupId;

    /**
     * @var boolean <p>紧急模式。</p><p>枚举值：</p><ul><li>false： 标准模式（安全推荐）</li><li>true： 极速模式：（高危加速）跳过校验、极速提主。高位操作，极易在异常情况下产生单主节点。</li></ul><p>默认值：false</p>
     */
    public $Emergency;

    /**
     * @param string $InstanceId <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param integer $GroupId <p>副本节点组 ID，请通过接口<a href="https://cloud.tencent.com/document/product/239/50312">DescribeInstanceZoneInfo</a>获取多 AZ备节点组的 ID 信息。单 AZ，则无需配置该参数。</p>
     * @param boolean $Emergency <p>紧急模式。</p><p>枚举值：</p><ul><li>false： 标准模式（安全推荐）</li><li>true： 极速模式：（高危加速）跳过校验、极速提主。高位操作，极易在异常情况下产生单主节点。</li></ul><p>默认值：false</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Emergency",$param) and $param["Emergency"] !== null) {
            $this->Emergency = $param["Emergency"];
        }
    }
}
