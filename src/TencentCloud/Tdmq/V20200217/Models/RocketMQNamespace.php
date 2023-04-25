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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RocketMQ命名空间信息
 *
 * @method string getNamespaceId() 获取命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method integer getTtl() 获取已废弃，未消费消息的保留时间，以毫秒单位，范围60秒到15天
 * @method void setTtl(integer $Ttl) 设置已废弃，未消费消息的保留时间，以毫秒单位，范围60秒到15天
 * @method integer getRetentionTime() 获取消息持久化后保留的时间，以毫秒单位
 * @method void setRetentionTime(integer $RetentionTime) 设置消息持久化后保留的时间，以毫秒单位
 * @method string getRemark() 获取说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicEndpoint() 获取公网接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicEndpoint(string $PublicEndpoint) 设置公网接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcEndpoint() 获取VPC接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcEndpoint(string $VpcEndpoint) 设置VPC接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternalEndpoint() 获取内部接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalEndpoint(string $InternalEndpoint) 设置内部接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQNamespace extends AbstractModel
{
    /**
     * @var string 命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
     */
    public $NamespaceId;

    /**
     * @var integer 已废弃，未消费消息的保留时间，以毫秒单位，范围60秒到15天
     */
    public $Ttl;

    /**
     * @var integer 消息持久化后保留的时间，以毫秒单位
     */
    public $RetentionTime;

    /**
     * @var string 说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 公网接入点地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicEndpoint;

    /**
     * @var string VPC接入点地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcEndpoint;

    /**
     * @var string 内部接入点地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalEndpoint;

    /**
     * @param string $NamespaceId 命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
     * @param integer $Ttl 已废弃，未消费消息的保留时间，以毫秒单位，范围60秒到15天
     * @param integer $RetentionTime 消息持久化后保留的时间，以毫秒单位
     * @param string $Remark 说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicEndpoint 公网接入点地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcEndpoint VPC接入点地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternalEndpoint 内部接入点地址
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("RetentionTime",$param) and $param["RetentionTime"] !== null) {
            $this->RetentionTime = $param["RetentionTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PublicEndpoint",$param) and $param["PublicEndpoint"] !== null) {
            $this->PublicEndpoint = $param["PublicEndpoint"];
        }

        if (array_key_exists("VpcEndpoint",$param) and $param["VpcEndpoint"] !== null) {
            $this->VpcEndpoint = $param["VpcEndpoint"];
        }

        if (array_key_exists("InternalEndpoint",$param) and $param["InternalEndpoint"] !== null) {
            $this->InternalEndpoint = $param["InternalEndpoint"];
        }
    }
}
