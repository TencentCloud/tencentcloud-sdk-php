<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取云服务器的唯一 ID，可通过 DescribeInstances 接口返回字段中的 unInstanceId 字段获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置云服务器的唯一 ID，可通过 DescribeInstances 接口返回字段中的 unInstanceId 字段获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取后端云服务器监听端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置后端云服务器监听端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取转发目标的类型，目前仅可取值为 CVM
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置转发目标的类型，目前仅可取值为 CVM
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取后端云服务器的转发权重，取值范围：0~100，默认为 10。
 * @method void setWeight(integer $Weight) 设置后端云服务器的转发权重，取值范围：0~100，默认为 10。
 */

/**
 *转发目标，即绑定在负载均衡上的后端机器
 */
class Target extends AbstractModel
{
    /**
     * @var string 云服务器的唯一 ID，可通过 DescribeInstances 接口返回字段中的 unInstanceId 字段获取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer 后端云服务器监听端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 转发目标的类型，目前仅可取值为 CVM
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 后端云服务器的转发权重，取值范围：0~100，默认为 10。
     */
    public $Weight;
    /**
     * @param string $InstanceId 云服务器的唯一 ID，可通过 DescribeInstances 接口返回字段中的 unInstanceId 字段获取
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 后端云服务器监听端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 转发目标的类型，目前仅可取值为 CVM
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 后端云服务器的转发权重，取值范围：0~100，默认为 10。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
