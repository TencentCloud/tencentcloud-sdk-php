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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组信息
 *
 * @method string getTargetGroupId() 获取<p>目标组ID</p>
 * @method void setTargetGroupId(string $TargetGroupId) 设置<p>目标组ID</p>
 * @method string getVpcId() 获取<p>目标组的vpcid</p>
 * @method void setVpcId(string $VpcId) 设置<p>目标组的vpcid</p>
 * @method string getTargetGroupName() 获取<p>目标组的名字</p>
 * @method void setTargetGroupName(string $TargetGroupName) 设置<p>目标组的名字</p>
 * @method integer getPort() 获取<p>目标组的默认端口，全监听目标组此字段返回0，表示无效端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置<p>目标组的默认端口，全监听目标组此字段返回0，表示无效端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取<p>目标组的创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>目标组的创建时间</p>
 * @method string getUpdatedTime() 获取<p>目标组的修改时间</p>
 * @method void setUpdatedTime(string $UpdatedTime) 设置<p>目标组的修改时间</p>
 * @method array getAssociatedRule() 获取<p>关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedRule(array $AssociatedRule) 设置<p>关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取<p>目标组后端转发协议, 仅v2新版目标组返回有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置<p>目标组后端转发协议, 仅v2新版目标组返回有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleAlgorithm() 获取<p>调度算法，仅后端转发协议为(HTTP、HTTPS、GRPC)的目标组返回有效值， 可选值：<br><ur></p><li>WRR:按权重轮询。</li><li>LEAST_CONN:最小连接数。</li><li>IP_HASH:按IP哈希。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) 设置<p>调度算法，仅后端转发协议为(HTTP、HTTPS、GRPC)的目标组返回有效值， 可选值：<br><ur></p><li>WRR:按权重轮询。</li><li>LEAST_CONN:最小连接数。</li><li>IP_HASH:按IP哈希。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TargetGroupHealthCheck getHealthCheck() 获取<p>健康检查详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) 设置<p>健康检查详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetGroupType() 获取<p>目标组类型，当前支持v1(旧版目标组), v2(新版目标组)。默认为v1旧版目标组。</p>
 * @method void setTargetGroupType(string $TargetGroupType) 设置<p>目标组类型，当前支持v1(旧版目标组), v2(新版目标组)。默认为v1旧版目标组。</p>
 * @method integer getAssociatedRuleCount() 获取<p>目标组已关联的规则数。</p>
 * @method void setAssociatedRuleCount(integer $AssociatedRuleCount) 设置<p>目标组已关联的规则数。</p>
 * @method integer getRegisteredInstancesCount() 获取<p>目标组内的实例数量。</p>
 * @method void setRegisteredInstancesCount(integer $RegisteredInstancesCount) 设置<p>目标组内的实例数量。</p>
 * @method array getTag() 获取<p>标签。</p>
 * @method void setTag(array $Tag) 设置<p>标签。</p>
 * @method integer getWeight() 获取<p>默认权重。只有v2类型目标组返回该字段。当返回为NULL时， 表示未设置默认权重。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置<p>默认权重。只有v2类型目标组返回该字段。当返回为NULL时， 表示未设置默认权重。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getFullListenSwitch() 获取<p>是否全监听目标组。</p>
 * @method void setFullListenSwitch(boolean $FullListenSwitch) 设置<p>是否全监听目标组。</p>
 * @method boolean getKeepaliveEnable() 获取<p>是否开启长连接,  仅后端转发协议为HTTP/HTTPS/GRPC目标组返回有效值。</p>
 * @method void setKeepaliveEnable(boolean $KeepaliveEnable) 设置<p>是否开启长连接,  仅后端转发协议为HTTP/HTTPS/GRPC目标组返回有效值。</p>
 * @method integer getSessionExpireTime() 获取<p>会话保持时间，仅后端转发协议为HTTP/HTTPS/GRPC目标组返回有效值。</p>
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置<p>会话保持时间，仅后端转发协议为HTTP/HTTPS/GRPC目标组返回有效值。</p>
 * @method string getIpVersion() 获取<p>IP版本。</p>
 * @method void setIpVersion(string $IpVersion) 设置<p>IP版本。</p>
 */
class TargetGroupInfo extends AbstractModel
{
    /**
     * @var string <p>目标组ID</p>
     */
    public $TargetGroupId;

    /**
     * @var string <p>目标组的vpcid</p>
     */
    public $VpcId;

    /**
     * @var string <p>目标组的名字</p>
     */
    public $TargetGroupName;

    /**
     * @var integer <p>目标组的默认端口，全监听目标组此字段返回0，表示无效端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string <p>目标组的创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>目标组的修改时间</p>
     */
    public $UpdatedTime;

    /**
     * @var array <p>关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedRule;

    /**
     * @var string <p>目标组后端转发协议, 仅v2新版目标组返回有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string <p>调度算法，仅后端转发协议为(HTTP、HTTPS、GRPC)的目标组返回有效值， 可选值：<br><ur></p><li>WRR:按权重轮询。</li><li>LEAST_CONN:最小连接数。</li><li>IP_HASH:按IP哈希。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleAlgorithm;

    /**
     * @var TargetGroupHealthCheck <p>健康检查详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheck;

    /**
     * @var string <p>目标组类型，当前支持v1(旧版目标组), v2(新版目标组)。默认为v1旧版目标组。</p>
     */
    public $TargetGroupType;

    /**
     * @var integer <p>目标组已关联的规则数。</p>
     */
    public $AssociatedRuleCount;

    /**
     * @var integer <p>目标组内的实例数量。</p>
     */
    public $RegisteredInstancesCount;

    /**
     * @var array <p>标签。</p>
     */
    public $Tag;

    /**
     * @var integer <p>默认权重。只有v2类型目标组返回该字段。当返回为NULL时， 表示未设置默认权重。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var boolean <p>是否全监听目标组。</p>
     */
    public $FullListenSwitch;

    /**
     * @var boolean <p>是否开启长连接,  仅后端转发协议为HTTP/HTTPS/GRPC目标组返回有效值。</p>
     */
    public $KeepaliveEnable;

    /**
     * @var integer <p>会话保持时间，仅后端转发协议为HTTP/HTTPS/GRPC目标组返回有效值。</p>
     */
    public $SessionExpireTime;

    /**
     * @var string <p>IP版本。</p>
     */
    public $IpVersion;

    /**
     * @param string $TargetGroupId <p>目标组ID</p>
     * @param string $VpcId <p>目标组的vpcid</p>
     * @param string $TargetGroupName <p>目标组的名字</p>
     * @param integer $Port <p>目标组的默认端口，全监听目标组此字段返回0，表示无效端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime <p>目标组的创建时间</p>
     * @param string $UpdatedTime <p>目标组的修改时间</p>
     * @param array $AssociatedRule <p>关联到的规则数组。在DescribeTargetGroupList接口调用时无法获取到该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol <p>目标组后端转发协议, 仅v2新版目标组返回有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleAlgorithm <p>调度算法，仅后端转发协议为(HTTP、HTTPS、GRPC)的目标组返回有效值， 可选值：<br><ur></p><li>WRR:按权重轮询。</li><li>LEAST_CONN:最小连接数。</li><li>IP_HASH:按IP哈希。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TargetGroupHealthCheck $HealthCheck <p>健康检查详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetGroupType <p>目标组类型，当前支持v1(旧版目标组), v2(新版目标组)。默认为v1旧版目标组。</p>
     * @param integer $AssociatedRuleCount <p>目标组已关联的规则数。</p>
     * @param integer $RegisteredInstancesCount <p>目标组内的实例数量。</p>
     * @param array $Tag <p>标签。</p>
     * @param integer $Weight <p>默认权重。只有v2类型目标组返回该字段。当返回为NULL时， 表示未设置默认权重。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $FullListenSwitch <p>是否全监听目标组。</p>
     * @param boolean $KeepaliveEnable <p>是否开启长连接,  仅后端转发协议为HTTP/HTTPS/GRPC目标组返回有效值。</p>
     * @param integer $SessionExpireTime <p>会话保持时间，仅后端转发协议为HTTP/HTTPS/GRPC目标组返回有效值。</p>
     * @param string $IpVersion <p>IP版本。</p>
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

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}
