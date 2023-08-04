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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时上云计划基础信息
 *
 * @method string getPlanId() 获取上云计划ID
 * @method void setPlanId(string $PlanId) 设置上云计划ID
 * @method string getPlanName() 获取上云计划名称
 * @method void setPlanName(string $PlanName) 设置上云计划名称
 * @method string getTemplateId() 获取上云模板ID
 * @method void setTemplateId(string $TemplateId) 设置上云模板ID
 * @method string getDescribe() 获取上云计划描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribe(string $Describe) 设置上云计划描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStreamType() 获取码流类型，default:设备默认码流类型，main:主码流，sub:子码流，其他根据设备能力集自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamType(string $StreamType) 设置码流类型，default:设备默认码流类型，main:主码流，sub:子码流，其他根据设备能力集自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method LifeCycleData getLifeCycle() 获取云文件生命周期
 * @method void setLifeCycle(LifeCycleData $LifeCycle) 设置云文件生命周期
 * @method integer getStatus() 获取录像计划状态，1:正常使用中，0:删除中，无法使用
 * @method void setStatus(integer $Status) 设置录像计划状态，1:正常使用中，0:删除中，无法使用
 * @method integer getChannelCount() 获取通道总数
 * @method void setChannelCount(integer $ChannelCount) 设置通道总数
 */
class RecordPlanBaseInfo extends AbstractModel
{
    /**
     * @var string 上云计划ID
     */
    public $PlanId;

    /**
     * @var string 上云计划名称
     */
    public $PlanName;

    /**
     * @var string 上云模板ID
     */
    public $TemplateId;

    /**
     * @var string 上云计划描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Describe;

    /**
     * @var string 码流类型，default:设备默认码流类型，main:主码流，sub:子码流，其他根据设备能力集自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamType;

    /**
     * @var LifeCycleData 云文件生命周期
     */
    public $LifeCycle;

    /**
     * @var integer 录像计划状态，1:正常使用中，0:删除中，无法使用
     */
    public $Status;

    /**
     * @var integer 通道总数
     */
    public $ChannelCount;

    /**
     * @param string $PlanId 上云计划ID
     * @param string $PlanName 上云计划名称
     * @param string $TemplateId 上云模板ID
     * @param string $Describe 上云计划描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StreamType 码流类型，default:设备默认码流类型，main:主码流，sub:子码流，其他根据设备能力集自定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param LifeCycleData $LifeCycle 云文件生命周期
     * @param integer $Status 录像计划状态，1:正常使用中，0:删除中，无法使用
     * @param integer $ChannelCount 通道总数
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("LifeCycle",$param) and $param["LifeCycle"] !== null) {
            $this->LifeCycle = new LifeCycleData();
            $this->LifeCycle->deserialize($param["LifeCycle"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ChannelCount",$param) and $param["ChannelCount"] !== null) {
            $this->ChannelCount = $param["ChannelCount"];
        }
    }
}
