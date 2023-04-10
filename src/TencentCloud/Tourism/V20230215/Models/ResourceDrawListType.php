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
namespace TencentCloud\Tourism\V20230215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输出用户的资源数据
 *
 * @method integer getId() 获取记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlowId() 获取资源记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowId(integer $FlowId) 设置资源记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexId() 获取本订单资源序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexId(string $IndexId) 设置本订单资源序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取客户的uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置客户的uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBigDealId() 获取大订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBigDealId(string $BigDealId) 设置大订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSmallOrderId() 获取小订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmallOrderId(string $SmallOrderId) 设置小订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceNewStartTime() 获取资源创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceNewStartTime(string $ResourceNewStartTime) 设置资源创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceNewEndTime() 获取资源到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceNewEndTime(string $ResourceNewEndTime) 设置资源到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceStatus() 获取资源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceStatus(integer $ResourceStatus) 设置资源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取本记录状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置本记录状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceType() 获取项目类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(integer $ResourceType) 设置项目类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceDrawListType extends AbstractModel
{
    /**
     * @var integer 记录id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 资源记录id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowId;

    /**
     * @var string 资源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string 本订单资源序列号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexId;

    /**
     * @var string 客户的uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 大订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BigDealId;

    /**
     * @var string 小订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmallOrderId;

    /**
     * @var string 资源创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceNewStartTime;

    /**
     * @var string 资源到期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceNewEndTime;

    /**
     * @var integer 资源状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceStatus;

    /**
     * @var integer 本记录状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 项目类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @param integer $Id 记录id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FlowId 资源记录id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 资源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexId 本订单资源序列号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 客户的uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BigDealId 大订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SmallOrderId 小订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceNewStartTime 资源创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceNewEndTime 资源到期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceStatus 资源状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 本记录状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceType 项目类型
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("IndexId",$param) and $param["IndexId"] !== null) {
            $this->IndexId = $param["IndexId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("SmallOrderId",$param) and $param["SmallOrderId"] !== null) {
            $this->SmallOrderId = $param["SmallOrderId"];
        }

        if (array_key_exists("ResourceNewStartTime",$param) and $param["ResourceNewStartTime"] !== null) {
            $this->ResourceNewStartTime = $param["ResourceNewStartTime"];
        }

        if (array_key_exists("ResourceNewEndTime",$param) and $param["ResourceNewEndTime"] !== null) {
            $this->ResourceNewEndTime = $param["ResourceNewEndTime"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
