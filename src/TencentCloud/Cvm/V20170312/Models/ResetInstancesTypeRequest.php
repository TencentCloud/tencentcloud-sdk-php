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
 * ResetInstancesType请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>一个或多个待操作的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。本接口目前仅支持每次操作1个实例。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>一个或多个待操作的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。本接口目前仅支持每次操作1个实例。</p>
 * @method string getInstanceType() 获取<p>调整后的实例机型。不同实例机型指定了不同的资源规格，具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749"> DescribeInstanceTypeConfigs </a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例类型</a>描述。</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>调整后的实例机型。不同实例机型指定了不同的资源规格，具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749"> DescribeInstanceTypeConfigs </a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例类型</a>描述。</p>
 * @method boolean getForceStop() 获取<p>是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机。取值范围：<br><li>true：表示在正常关机失败后进行强制关机</li><br><li>false：表示在正常关机失败后不进行强制关机</li><br><br>默认取值：false。<br><br>强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。</p>
 * @method void setForceStop(boolean $ForceStop) 设置<p>是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机。取值范围：<br><li>true：表示在正常关机失败后进行强制关机</li><br><li>false：表示在正常关机失败后不进行强制关机</li><br><br>默认取值：false。<br><br>强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。</p>
 */
class ResetInstancesTypeRequest extends AbstractModel
{
    /**
     * @var array <p>一个或多个待操作的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。本接口目前仅支持每次操作1个实例。</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>调整后的实例机型。不同实例机型指定了不同的资源规格，具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749"> DescribeInstanceTypeConfigs </a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例类型</a>描述。</p>
     */
    public $InstanceType;

    /**
     * @var boolean <p>是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机。取值范围：<br><li>true：表示在正常关机失败后进行强制关机</li><br><li>false：表示在正常关机失败后不进行强制关机</li><br><br>默认取值：false。<br><br>强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。</p>
     */
    public $ForceStop;

    /**
     * @param array $InstanceIds <p>一个或多个待操作的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。本接口目前仅支持每次操作1个实例。</p>
     * @param string $InstanceType <p>调整后的实例机型。不同实例机型指定了不同的资源规格，具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749"> DescribeInstanceTypeConfigs </a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例类型</a>描述。</p>
     * @param boolean $ForceStop <p>是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机。取值范围：<br><li>true：表示在正常关机失败后进行强制关机</li><br><li>false：表示在正常关机失败后不进行强制关机</li><br><br>默认取值：false。<br><br>强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。</p>
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }
    }
}
