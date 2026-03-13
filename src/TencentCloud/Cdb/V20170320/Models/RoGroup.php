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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 只读组参数
 *
 * @method string getRoGroupMode() 获取<p>只读组模式，可选值为：alone-系统自动分配只读组；allinone-新建只读组；join-使用现有只读组。</p>
 * @method void setRoGroupMode(string $RoGroupMode) 设置<p>只读组模式，可选值为：alone-系统自动分配只读组；allinone-新建只读组；join-使用现有只读组。</p>
 * @method string getRoGroupId() 获取<p>只读组 ID。<br>说明：若此数据结构在购买实例操作中被使用，则当只读组模式选择 join 时，此项为必填。</p>
 * @method void setRoGroupId(string $RoGroupId) 设置<p>只读组 ID。<br>说明：若此数据结构在购买实例操作中被使用，则当只读组模式选择 join 时，此项为必填。</p>
 * @method string getRoGroupName() 获取<p>只读组名称。</p>
 * @method void setRoGroupName(string $RoGroupName) 设置<p>只读组名称。</p>
 * @method integer getRoOfflineDelay() 获取<p>是否启用延迟超限剔除功能，启用该功能后，只读实例与主实例的延迟超过延迟阈值，只读实例将被隔离。可选值：1-启用；0-不启用。</p>
 * @method void setRoOfflineDelay(integer $RoOfflineDelay) 设置<p>是否启用延迟超限剔除功能，启用该功能后，只读实例与主实例的延迟超过延迟阈值，只读实例将被隔离。可选值：1-启用；0-不启用。</p>
 * @method integer getRoMaxDelayTime() 获取<p>延迟阈值。单位：秒。值范围：1-10000，整数。</p>
 * @method void setRoMaxDelayTime(integer $RoMaxDelayTime) 设置<p>延迟阈值。单位：秒。值范围：1-10000，整数。</p>
 * @method integer getMinRoInGroup() 获取<p>最少实例保留个数，若购买只读实例数量小于设置数量将不做剔除。</p>
 * @method void setMinRoInGroup(integer $MinRoInGroup) 设置<p>最少实例保留个数，若购买只读实例数量小于设置数量将不做剔除。</p>
 * @method string getWeightMode() 获取<p>读写权重分配模式，可选值：system-系统自动分配；custom-自定义。</p>
 * @method void setWeightMode(string $WeightMode) 设置<p>读写权重分配模式，可选值：system-系统自动分配；custom-自定义。</p>
 * @method integer getWeight() 获取<p>该字段已经废弃，无意义。查看只读实例的权重，请查看 RoInstances 字段里的 Weight 值。</p>
 * @method void setWeight(integer $Weight) 设置<p>该字段已经废弃，无意义。查看只读实例的权重，请查看 RoInstances 字段里的 Weight 值。</p>
 * @method array getRoInstances() 获取<p>只读组中的只读实例详情。</p>
 * @method void setRoInstances(array $RoInstances) 设置<p>只读组中的只读实例详情。</p>
 * @method string getVip() 获取<p>只读组的内网 IP。</p>
 * @method void setVip(string $Vip) 设置<p>只读组的内网 IP。</p>
 * @method integer getVport() 获取<p>只读组的内网端口号。</p>
 * @method void setVport(integer $Vport) 设置<p>只读组的内网端口号。</p>
 * @method string getUniqVpcId() 获取<p>私有网络 ID。</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>私有网络 ID。</p>
 * @method string getUniqSubnetId() 获取<p>子网 ID。</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>子网 ID。</p>
 * @method string getRoGroupRegion() 获取<p>只读组所在的地域。</p>
 * @method void setRoGroupRegion(string $RoGroupRegion) 设置<p>只读组所在的地域。</p>
 * @method string getRoGroupZone() 获取<p>只读组所在的可用区。</p>
 * @method void setRoGroupZone(string $RoGroupZone) 设置<p>只读组所在的可用区。</p>
 * @method integer getDelayReplicationTime() 获取<p>延迟复制时间。单位：秒。值范围：1-259200，整数。</p>
 * @method void setDelayReplicationTime(integer $DelayReplicationTime) 设置<p>延迟复制时间。单位：秒。值范围：1-259200，整数。</p>
 */
class RoGroup extends AbstractModel
{
    /**
     * @var string <p>只读组模式，可选值为：alone-系统自动分配只读组；allinone-新建只读组；join-使用现有只读组。</p>
     */
    public $RoGroupMode;

    /**
     * @var string <p>只读组 ID。<br>说明：若此数据结构在购买实例操作中被使用，则当只读组模式选择 join 时，此项为必填。</p>
     */
    public $RoGroupId;

    /**
     * @var string <p>只读组名称。</p>
     */
    public $RoGroupName;

    /**
     * @var integer <p>是否启用延迟超限剔除功能，启用该功能后，只读实例与主实例的延迟超过延迟阈值，只读实例将被隔离。可选值：1-启用；0-不启用。</p>
     */
    public $RoOfflineDelay;

    /**
     * @var integer <p>延迟阈值。单位：秒。值范围：1-10000，整数。</p>
     */
    public $RoMaxDelayTime;

    /**
     * @var integer <p>最少实例保留个数，若购买只读实例数量小于设置数量将不做剔除。</p>
     */
    public $MinRoInGroup;

    /**
     * @var string <p>读写权重分配模式，可选值：system-系统自动分配；custom-自定义。</p>
     */
    public $WeightMode;

    /**
     * @var integer <p>该字段已经废弃，无意义。查看只读实例的权重，请查看 RoInstances 字段里的 Weight 值。</p>
     */
    public $Weight;

    /**
     * @var array <p>只读组中的只读实例详情。</p>
     */
    public $RoInstances;

    /**
     * @var string <p>只读组的内网 IP。</p>
     */
    public $Vip;

    /**
     * @var integer <p>只读组的内网端口号。</p>
     */
    public $Vport;

    /**
     * @var string <p>私有网络 ID。</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>子网 ID。</p>
     */
    public $UniqSubnetId;

    /**
     * @var string <p>只读组所在的地域。</p>
     */
    public $RoGroupRegion;

    /**
     * @var string <p>只读组所在的可用区。</p>
     */
    public $RoGroupZone;

    /**
     * @var integer <p>延迟复制时间。单位：秒。值范围：1-259200，整数。</p>
     */
    public $DelayReplicationTime;

    /**
     * @param string $RoGroupMode <p>只读组模式，可选值为：alone-系统自动分配只读组；allinone-新建只读组；join-使用现有只读组。</p>
     * @param string $RoGroupId <p>只读组 ID。<br>说明：若此数据结构在购买实例操作中被使用，则当只读组模式选择 join 时，此项为必填。</p>
     * @param string $RoGroupName <p>只读组名称。</p>
     * @param integer $RoOfflineDelay <p>是否启用延迟超限剔除功能，启用该功能后，只读实例与主实例的延迟超过延迟阈值，只读实例将被隔离。可选值：1-启用；0-不启用。</p>
     * @param integer $RoMaxDelayTime <p>延迟阈值。单位：秒。值范围：1-10000，整数。</p>
     * @param integer $MinRoInGroup <p>最少实例保留个数，若购买只读实例数量小于设置数量将不做剔除。</p>
     * @param string $WeightMode <p>读写权重分配模式，可选值：system-系统自动分配；custom-自定义。</p>
     * @param integer $Weight <p>该字段已经废弃，无意义。查看只读实例的权重，请查看 RoInstances 字段里的 Weight 值。</p>
     * @param array $RoInstances <p>只读组中的只读实例详情。</p>
     * @param string $Vip <p>只读组的内网 IP。</p>
     * @param integer $Vport <p>只读组的内网端口号。</p>
     * @param string $UniqVpcId <p>私有网络 ID。</p>
     * @param string $UniqSubnetId <p>子网 ID。</p>
     * @param string $RoGroupRegion <p>只读组所在的地域。</p>
     * @param string $RoGroupZone <p>只读组所在的可用区。</p>
     * @param integer $DelayReplicationTime <p>延迟复制时间。单位：秒。值范围：1-259200，整数。</p>
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
        if (array_key_exists("RoGroupMode",$param) and $param["RoGroupMode"] !== null) {
            $this->RoGroupMode = $param["RoGroupMode"];
        }

        if (array_key_exists("RoGroupId",$param) and $param["RoGroupId"] !== null) {
            $this->RoGroupId = $param["RoGroupId"];
        }

        if (array_key_exists("RoGroupName",$param) and $param["RoGroupName"] !== null) {
            $this->RoGroupName = $param["RoGroupName"];
        }

        if (array_key_exists("RoOfflineDelay",$param) and $param["RoOfflineDelay"] !== null) {
            $this->RoOfflineDelay = $param["RoOfflineDelay"];
        }

        if (array_key_exists("RoMaxDelayTime",$param) and $param["RoMaxDelayTime"] !== null) {
            $this->RoMaxDelayTime = $param["RoMaxDelayTime"];
        }

        if (array_key_exists("MinRoInGroup",$param) and $param["MinRoInGroup"] !== null) {
            $this->MinRoInGroup = $param["MinRoInGroup"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("RoInstances",$param) and $param["RoInstances"] !== null) {
            $this->RoInstances = [];
            foreach ($param["RoInstances"] as $key => $value){
                $obj = new RoInstanceInfo();
                $obj->deserialize($value);
                array_push($this->RoInstances, $obj);
            }
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("RoGroupRegion",$param) and $param["RoGroupRegion"] !== null) {
            $this->RoGroupRegion = $param["RoGroupRegion"];
        }

        if (array_key_exists("RoGroupZone",$param) and $param["RoGroupZone"] !== null) {
            $this->RoGroupZone = $param["RoGroupZone"];
        }

        if (array_key_exists("DelayReplicationTime",$param) and $param["DelayReplicationTime"] !== null) {
            $this->DelayReplicationTime = $param["DelayReplicationTime"];
        }
    }
}
