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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRoGroupMode() 获取只读组模式，可选值为：alone-系统自动分配只读组；allinone-新建只读组；join-使用现有只读组
 * @method void setRoGroupMode(string $RoGroupMode) 设置只读组模式，可选值为：alone-系统自动分配只读组；allinone-新建只读组；join-使用现有只读组
 * @method string getRoGroupId() 获取只读组ID
 * @method void setRoGroupId(string $RoGroupId) 设置只读组ID
 * @method string getRoGroupName() 获取只读组名称
 * @method void setRoGroupName(string $RoGroupName) 设置只读组名称
 * @method integer getRoOfflineDelay() 获取是否启用延迟超限剔除功能，启用该功能后，只读实例与主实例的延迟超过延迟阈值，只读实例将被隔离。可选值：1-启用；0-不启用
 * @method void setRoOfflineDelay(integer $RoOfflineDelay) 设置是否启用延迟超限剔除功能，启用该功能后，只读实例与主实例的延迟超过延迟阈值，只读实例将被隔离。可选值：1-启用；0-不启用
 * @method integer getRoMaxDelayTime() 获取延迟阈值
 * @method void setRoMaxDelayTime(integer $RoMaxDelayTime) 设置延迟阈值
 * @method integer getMinRoInGroup() 获取最少实例保留个数，若购买只读实例数量小于设置数量将不做剔除
 * @method void setMinRoInGroup(integer $MinRoInGroup) 设置最少实例保留个数，若购买只读实例数量小于设置数量将不做剔除
 * @method string getWeightMode() 获取读写权重分配模式，可选值：system-系统自动分配；custom-自定义
 * @method void setWeightMode(string $WeightMode) 设置读写权重分配模式，可选值：system-系统自动分配；custom-自定义
 * @method integer getWeight() 获取权重值
 * @method void setWeight(integer $Weight) 设置权重值
 * @method array getRoInstances() 获取只读组中的只读实例详情
 * @method void setRoInstances(array $RoInstances) 设置只读组中的只读实例详情
 * @method string getVip() 获取只读组的内网IP
 * @method void setVip(string $Vip) 设置只读组的内网IP
 * @method integer getVport() 获取只读组的内网端口号
 * @method void setVport(integer $Vport) 设置只读组的内网端口号
 */

/**
 *只读组参数
 */
class RoGroup extends AbstractModel
{
    /**
     * @var string 只读组模式，可选值为：alone-系统自动分配只读组；allinone-新建只读组；join-使用现有只读组
     */
    public $RoGroupMode;

    /**
     * @var string 只读组ID
     */
    public $RoGroupId;

    /**
     * @var string 只读组名称
     */
    public $RoGroupName;

    /**
     * @var integer 是否启用延迟超限剔除功能，启用该功能后，只读实例与主实例的延迟超过延迟阈值，只读实例将被隔离。可选值：1-启用；0-不启用
     */
    public $RoOfflineDelay;

    /**
     * @var integer 延迟阈值
     */
    public $RoMaxDelayTime;

    /**
     * @var integer 最少实例保留个数，若购买只读实例数量小于设置数量将不做剔除
     */
    public $MinRoInGroup;

    /**
     * @var string 读写权重分配模式，可选值：system-系统自动分配；custom-自定义
     */
    public $WeightMode;

    /**
     * @var integer 权重值
     */
    public $Weight;

    /**
     * @var array 只读组中的只读实例详情
     */
    public $RoInstances;

    /**
     * @var string 只读组的内网IP
     */
    public $Vip;

    /**
     * @var integer 只读组的内网端口号
     */
    public $Vport;
    /**
     * @param string $RoGroupMode 只读组模式，可选值为：alone-系统自动分配只读组；allinone-新建只读组；join-使用现有只读组
     * @param string $RoGroupId 只读组ID
     * @param string $RoGroupName 只读组名称
     * @param integer $RoOfflineDelay 是否启用延迟超限剔除功能，启用该功能后，只读实例与主实例的延迟超过延迟阈值，只读实例将被隔离。可选值：1-启用；0-不启用
     * @param integer $RoMaxDelayTime 延迟阈值
     * @param integer $MinRoInGroup 最少实例保留个数，若购买只读实例数量小于设置数量将不做剔除
     * @param string $WeightMode 读写权重分配模式，可选值：system-系统自动分配；custom-自定义
     * @param integer $Weight 权重值
     * @param array $RoInstances 只读组中的只读实例详情
     * @param string $Vip 只读组的内网IP
     * @param integer $Vport 只读组的内网端口号
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
    }
}
