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
 * TerminateInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>一个或多个待操作的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。每次请求批量实例的上限为100。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>一个或多个待操作的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。每次请求批量实例的上限为100。</p>
 * @method boolean getReleaseAddress() 获取<p>释放弹性IP。EIP2.0下，仅提供主网卡下首个EIP，EIP类型限定在HighQualityEIP、AntiDDoSEIP、EIPv6、HighQualityEIPv6这几种类型。默认行为不释放。</p><p>默认值：false</p>
 * @method void setReleaseAddress(boolean $ReleaseAddress) 设置<p>释放弹性IP。EIP2.0下，仅提供主网卡下首个EIP，EIP类型限定在HighQualityEIP、AntiDDoSEIP、EIPv6、HighQualityEIPv6这几种类型。默认行为不释放。</p><p>默认值：false</p>
 * @method boolean getReleasePrepaidDataDisks() 获取<p>释放实例挂载的包年包月数据盘。true表示销毁实例同时释放包年包月数据盘，false表示只销毁实例。<br>默认值：false</p>
 * @method void setReleasePrepaidDataDisks(boolean $ReleasePrepaidDataDisks) 设置<p>释放实例挂载的包年包月数据盘。true表示销毁实例同时释放包年包月数据盘，false表示只销毁实例。<br>默认值：false</p>
 */
class TerminateInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>一个或多个待操作的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。每次请求批量实例的上限为100。</p>
     */
    public $InstanceIds;

    /**
     * @var boolean <p>释放弹性IP。EIP2.0下，仅提供主网卡下首个EIP，EIP类型限定在HighQualityEIP、AntiDDoSEIP、EIPv6、HighQualityEIPv6这几种类型。默认行为不释放。</p><p>默认值：false</p>
     */
    public $ReleaseAddress;

    /**
     * @var boolean <p>释放实例挂载的包年包月数据盘。true表示销毁实例同时释放包年包月数据盘，false表示只销毁实例。<br>默认值：false</p>
     */
    public $ReleasePrepaidDataDisks;

    /**
     * @param array $InstanceIds <p>一个或多个待操作的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。每次请求批量实例的上限为100。</p>
     * @param boolean $ReleaseAddress <p>释放弹性IP。EIP2.0下，仅提供主网卡下首个EIP，EIP类型限定在HighQualityEIP、AntiDDoSEIP、EIPv6、HighQualityEIPv6这几种类型。默认行为不释放。</p><p>默认值：false</p>
     * @param boolean $ReleasePrepaidDataDisks <p>释放实例挂载的包年包月数据盘。true表示销毁实例同时释放包年包月数据盘，false表示只销毁实例。<br>默认值：false</p>
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

        if (array_key_exists("ReleaseAddress",$param) and $param["ReleaseAddress"] !== null) {
            $this->ReleaseAddress = $param["ReleaseAddress"];
        }

        if (array_key_exists("ReleasePrepaidDataDisks",$param) and $param["ReleasePrepaidDataDisks"] !== null) {
            $this->ReleasePrepaidDataDisks = $param["ReleasePrepaidDataDisks"];
        }
    }
}
