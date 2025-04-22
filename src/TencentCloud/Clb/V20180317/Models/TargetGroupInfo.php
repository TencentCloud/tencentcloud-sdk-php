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
 * 目标组信息
 *
 * @method string getTargetGroupId() 获取目标组ID
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组ID
 * @method string getVpcId() 获取目标组的vpcid
 * @method void setVpcId(string $VpcId) 设置目标组的vpcid
 * @method string getTargetGroupName() 获取目标组的名字
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组的名字
 * @method integer getPort() 获取目标组的默认端口，全监听目标组此字段返回0，表示无效端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置目标组的默认端口，全监听目标组此字段返回0，表示无效端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取目标组的创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置目标组的创建时间
 * @method string getUpdatedTime() 获取目标组的修改时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置目标组的修改时间
 * @method array getAssociatedRule() 获取关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedRule(array $AssociatedRule) 设置关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取后端转发协议类型，支持类型TCP， UDP。仅V2新版目标组支持返回该参数。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置后端转发协议类型，支持类型TCP， UDP。仅V2新版目标组支持返回该参数。

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetGroupType() 获取目标组类型，当前支持v1(旧版目标组), v2(新版目标组), gwlb(全局负载均衡目标组)。
 * @method void setTargetGroupType(string $TargetGroupType) 设置目标组类型，当前支持v1(旧版目标组), v2(新版目标组), gwlb(全局负载均衡目标组)。
 * @method integer getAssociatedRuleCount() 获取目标组已关联的规则数。
 * @method void setAssociatedRuleCount(integer $AssociatedRuleCount) 设置目标组已关联的规则数。
 * @method integer getRegisteredInstancesCount() 获取目标组内的实例数量。
 * @method void setRegisteredInstancesCount(integer $RegisteredInstancesCount) 设置目标组内的实例数量。
 * @method array getTag() 获取标签。
 * @method void setTag(array $Tag) 设置标签。
 * @method integer getWeight() 获取默认权重。只有v2类型目标组返回该字段。当返回为NULL时， 表示未设置默认权重。
 * @method void setWeight(integer $Weight) 设置默认权重。只有v2类型目标组返回该字段。当返回为NULL时， 表示未设置默认权重。
 * @method boolean getFullListenSwitch() 获取是否全监听目标组
 * @method void setFullListenSwitch(boolean $FullListenSwitch) 设置是否全监听目标组
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
     * @var integer 目标组的默认端口，全监听目标组此字段返回0，表示无效端口。
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
     * @var string 后端转发协议类型，支持类型TCP， UDP。仅V2新版目标组支持返回该参数。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 目标组类型，当前支持v1(旧版目标组), v2(新版目标组), gwlb(全局负载均衡目标组)。
     */
    public $TargetGroupType;

    /**
     * @var integer 目标组已关联的规则数。
     */
    public $AssociatedRuleCount;

    /**
     * @var integer 目标组内的实例数量。
     */
    public $RegisteredInstancesCount;

    /**
     * @var array 标签。
     */
    public $Tag;

    /**
     * @var integer 默认权重。只有v2类型目标组返回该字段。当返回为NULL时， 表示未设置默认权重。
     */
    public $Weight;

    /**
     * @var boolean 是否全监听目标组
     */
    public $FullListenSwitch;

    /**
     * @param string $TargetGroupId 目标组ID
     * @param string $VpcId 目标组的vpcid
     * @param string $TargetGroupName 目标组的名字
     * @param integer $Port 目标组的默认端口，全监听目标组此字段返回0，表示无效端口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 目标组的创建时间
     * @param string $UpdatedTime 目标组的修改时间
     * @param array $AssociatedRule 关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 后端转发协议类型，支持类型TCP， UDP。仅V2新版目标组支持返回该参数。

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetGroupType 目标组类型，当前支持v1(旧版目标组), v2(新版目标组), gwlb(全局负载均衡目标组)。
     * @param integer $AssociatedRuleCount 目标组已关联的规则数。
     * @param integer $RegisteredInstancesCount 目标组内的实例数量。
     * @param array $Tag 标签。
     * @param integer $Weight 默认权重。只有v2类型目标组返回该字段。当返回为NULL时， 表示未设置默认权重。
     * @param boolean $FullListenSwitch 是否全监听目标组
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

        if (array_key_exists("TargetGroupType",$param) and $param["TargetGroupType"] !== null) {
            $this->TargetGroupType = $param["TargetGroupType"];
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

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("FullListenSwitch",$param) and $param["FullListenSwitch"] !== null) {
            $this->FullListenSwitch = $param["FullListenSwitch"];
        }
    }
}
