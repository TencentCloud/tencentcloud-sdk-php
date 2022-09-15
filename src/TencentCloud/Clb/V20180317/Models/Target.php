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
 * 转发目标，即绑定在负载均衡上的后端服务
 *
 * @method integer getPort() 获取后端服务的监听端口。
注意：绑定CVM（云服务器）或ENI（弹性网卡）时必传此参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置后端服务的监听端口。
注意：绑定CVM（云服务器）或ENI（弹性网卡）时必传此参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取后端服务的类型，可取：CVM（云服务器）、ENI（弹性网卡）；作为入参时，目前本参数暂不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置后端服务的类型，可取：CVM（云服务器）、ENI（弹性网卡）；作为入参时，目前本参数暂不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取绑定CVM时需要传入此参数，代表CVM的唯一 ID，可通过 DescribeInstances 接口返回字段中的 InstanceId 字段获取。表示绑定主网卡主IP。
注意：参数 InstanceId、EniIp 有且只能传入其中一个参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置绑定CVM时需要传入此参数，代表CVM的唯一 ID，可通过 DescribeInstances 接口返回字段中的 InstanceId 字段获取。表示绑定主网卡主IP。
注意：参数 InstanceId、EniIp 有且只能传入其中一个参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取后端服务修改后的转发权重，取值范围：[0, 100]，默认为 10。此参数的优先级高于[RsWeightRule](https://cloud.tencent.com/document/api/214/30694#RsWeightRule)中的Weight参数，即最终的权重值以此Weight参数值为准，仅当此Weight参数为空时，才以RsWeightRule中的Weight参数为准。
 * @method void setWeight(integer $Weight) 设置后端服务修改后的转发权重，取值范围：[0, 100]，默认为 10。此参数的优先级高于[RsWeightRule](https://cloud.tencent.com/document/api/214/30694#RsWeightRule)中的Weight参数，即最终的权重值以此Weight参数值为准，仅当此Weight参数为空时，才以RsWeightRule中的Weight参数为准。
 * @method string getEniIp() 获取绑定IP时需要传入此参数，支持弹性网卡的IP和其他内网IP，如果是弹性网卡则必须先绑定至CVM，然后才能绑定到负载均衡实例。
注意：参数 InstanceId、EniIp 有且只能传入其中一个参数。如果绑定双栈IPV6子机，则必须传该参数。如果是跨地域绑定，则必须传该参数，不支持传InstanceId参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEniIp(string $EniIp) 设置绑定IP时需要传入此参数，支持弹性网卡的IP和其他内网IP，如果是弹性网卡则必须先绑定至CVM，然后才能绑定到负载均衡实例。
注意：参数 InstanceId、EniIp 有且只能传入其中一个参数。如果绑定双栈IPV6子机，则必须传该参数。如果是跨地域绑定，则必须传该参数，不支持传InstanceId参数。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Target extends AbstractModel
{
    /**
     * @var integer 后端服务的监听端口。
注意：绑定CVM（云服务器）或ENI（弹性网卡）时必传此参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 后端服务的类型，可取：CVM（云服务器）、ENI（弹性网卡）；作为入参时，目前本参数暂不生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 绑定CVM时需要传入此参数，代表CVM的唯一 ID，可通过 DescribeInstances 接口返回字段中的 InstanceId 字段获取。表示绑定主网卡主IP。
注意：参数 InstanceId、EniIp 有且只能传入其中一个参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer 后端服务修改后的转发权重，取值范围：[0, 100]，默认为 10。此参数的优先级高于[RsWeightRule](https://cloud.tencent.com/document/api/214/30694#RsWeightRule)中的Weight参数，即最终的权重值以此Weight参数值为准，仅当此Weight参数为空时，才以RsWeightRule中的Weight参数为准。
     */
    public $Weight;

    /**
     * @var string 绑定IP时需要传入此参数，支持弹性网卡的IP和其他内网IP，如果是弹性网卡则必须先绑定至CVM，然后才能绑定到负载均衡实例。
注意：参数 InstanceId、EniIp 有且只能传入其中一个参数。如果绑定双栈IPV6子机，则必须传该参数。如果是跨地域绑定，则必须传该参数，不支持传InstanceId参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EniIp;

    /**
     * @param integer $Port 后端服务的监听端口。
注意：绑定CVM（云服务器）或ENI（弹性网卡）时必传此参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 后端服务的类型，可取：CVM（云服务器）、ENI（弹性网卡）；作为入参时，目前本参数暂不生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 绑定CVM时需要传入此参数，代表CVM的唯一 ID，可通过 DescribeInstances 接口返回字段中的 InstanceId 字段获取。表示绑定主网卡主IP。
注意：参数 InstanceId、EniIp 有且只能传入其中一个参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 后端服务修改后的转发权重，取值范围：[0, 100]，默认为 10。此参数的优先级高于[RsWeightRule](https://cloud.tencent.com/document/api/214/30694#RsWeightRule)中的Weight参数，即最终的权重值以此Weight参数值为准，仅当此Weight参数为空时，才以RsWeightRule中的Weight参数为准。
     * @param string $EniIp 绑定IP时需要传入此参数，支持弹性网卡的IP和其他内网IP，如果是弹性网卡则必须先绑定至CVM，然后才能绑定到负载均衡实例。
注意：参数 InstanceId、EniIp 有且只能传入其中一个参数。如果绑定双栈IPV6子机，则必须传该参数。如果是跨地域绑定，则必须传该参数，不支持传InstanceId参数。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("EniIp",$param) and $param["EniIp"] !== null) {
            $this->EniIp = $param["EniIp"];
        }
    }
}
