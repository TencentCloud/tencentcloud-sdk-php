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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组信息
 *
 * @method string getTargetGroupId() 获取目标组ID
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组ID
 * @method string getVpcId() 获取目标组的vpcid
 * @method void setVpcId(string $VpcId) 设置目标组的vpcid
 * @method string getTargetGroupName() 获取目标组的名字
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组的名字
 * @method integer getPort() 获取目标组的默认端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置目标组的默认端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取目标组的创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置目标组的创建时间
 * @method string getUpdatedTime() 获取目标组的修改时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置目标组的修改时间
 * @method array getAssociatedRule() 获取关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedRule(array $AssociatedRule) 设置关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取网关负载均衡目标组协议。
- tencent_geneve ：GENEVE 标准协议
- aws_geneve：GENEVE 兼容协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置网关负载均衡目标组协议。
- tencent_geneve ：GENEVE 标准协议
- aws_geneve：GENEVE 兼容协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleAlgorithm() 获取均衡算法。
- ip_hash_3_elastic：弹性哈希
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) 设置均衡算法。
- ip_hash_3_elastic：弹性哈希
注意：此字段可能返回 null，表示取不到有效值。
 * @method TargetGroupHealthCheck getHealthCheck() 获取健康检查详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) 设置健康检查详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAllDeadToAlive() 获取是否支持全死全活。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllDeadToAlive(boolean $AllDeadToAlive) 设置是否支持全死全活。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssociatedRuleCount() 获取目标组已关联的规则数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedRuleCount(integer $AssociatedRuleCount) 设置目标组已关联的规则数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegisteredInstancesCount() 获取目标组内的实例数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisteredInstancesCount(integer $RegisteredInstancesCount) 设置目标组内的实例数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTag() 获取目标组的标签。
 * @method void setTag(array $Tag) 设置目标组的标签。
 */
class TargetGroupInfo extends AbstractModel
{
    /**
     * @var string 目标组ID
     */
    public $TargetGroupId;

    /**
     * @var string 目标组的vpcid
     */
    public $VpcId;

    /**
     * @var string 目标组的名字
     */
    public $TargetGroupName;

    /**
     * @var integer 目标组的默认端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 目标组的创建时间
     */
    public $CreatedTime;

    /**
     * @var string 目标组的修改时间
     */
    public $UpdatedTime;

    /**
     * @var array 关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedRule;

    /**
     * @var string 网关负载均衡目标组协议。
- tencent_geneve ：GENEVE 标准协议
- aws_geneve：GENEVE 兼容协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 均衡算法。
- ip_hash_3_elastic：弹性哈希
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleAlgorithm;

    /**
     * @var TargetGroupHealthCheck 健康检查详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheck;

    /**
     * @var boolean 是否支持全死全活。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllDeadToAlive;

    /**
     * @var integer 目标组已关联的规则数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedRuleCount;

    /**
     * @var integer 目标组内的实例数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisteredInstancesCount;

    /**
     * @var array 目标组的标签。
     */
    public $Tag;

    /**
     * @param string $TargetGroupId 目标组ID
     * @param string $VpcId 目标组的vpcid
     * @param string $TargetGroupName 目标组的名字
     * @param integer $Port 目标组的默认端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 目标组的创建时间
     * @param string $UpdatedTime 目标组的修改时间
     * @param array $AssociatedRule 关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 网关负载均衡目标组协议。
- tencent_geneve ：GENEVE 标准协议
- aws_geneve：GENEVE 兼容协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleAlgorithm 均衡算法。
- ip_hash_3_elastic：弹性哈希
注意：此字段可能返回 null，表示取不到有效值。
     * @param TargetGroupHealthCheck $HealthCheck 健康检查详情。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AllDeadToAlive 是否支持全死全活。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssociatedRuleCount 目标组已关联的规则数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegisteredInstancesCount 目标组内的实例数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tag 目标组的标签。
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("AssociatedRule",$param) and $param["AssociatedRule"] !== null) {
            $this->AssociatedRule = [];
            foreach ($param["AssociatedRule"] as $key => $value){
                $obj = new AssociationItem();
                $obj->deserialize($value);
                array_push($this->AssociatedRule, $obj);
            }
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ScheduleAlgorithm",$param) and $param["ScheduleAlgorithm"] !== null) {
            $this->ScheduleAlgorithm = $param["ScheduleAlgorithm"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("AllDeadToAlive",$param) and $param["AllDeadToAlive"] !== null) {
            $this->AllDeadToAlive = $param["AllDeadToAlive"];
        }

        if (array_key_exists("AssociatedRuleCount",$param) and $param["AssociatedRuleCount"] !== null) {
            $this->AssociatedRuleCount = $param["AssociatedRuleCount"];
        }

        if (array_key_exists("RegisteredInstancesCount",$param) and $param["RegisteredInstancesCount"] !== null) {
            $this->RegisteredInstancesCount = $param["RegisteredInstancesCount"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }
    }
}
