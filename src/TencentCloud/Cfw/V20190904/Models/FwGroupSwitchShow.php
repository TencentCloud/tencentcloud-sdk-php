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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC防火墙(组)四种开关展示
 *
 * @method string getSwitchId() 获取防火墙开关ID
 * @method void setSwitchId(string $SwitchId) 设置防火墙开关ID
 * @method string getSwitchName() 获取防火墙开关NAME
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitchName(string $SwitchName) 设置防火墙开关NAME
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSwitchMode() 获取互通模式
 * @method void setSwitchMode(integer $SwitchMode) 设置互通模式
 * @method integer getConnectType() 获取开关边连接类型 0：对等连接， 1：云连网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectType(integer $ConnectType) 设置开关边连接类型 0：对等连接， 1：云连网
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectId() 获取连接ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectId(string $ConnectId) 设置连接ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectName() 获取连接名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectName(string $ConnectName) 设置连接名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSrcInstancesInfo() 获取源实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcInstancesInfo(array $SrcInstancesInfo) 设置源实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDstInstancesInfo() 获取目的实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstInstancesInfo(array $DstInstancesInfo) 设置目的实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFwGroupId() 获取防火墙(组)数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwGroupId(string $FwGroupId) 设置防火墙(组)数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFwGroupName() 获取防火墙(组)名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwGroupName(string $FwGroupName) 设置防火墙(组)名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnable() 获取开关状态 0：关 ， 1：开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置开关状态 0：关 ， 1：开
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取开关的状态 0：正常， 1：转换中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置开关的状态 0：正常， 1：转换中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttachWithEdge() 获取0-非sase实例，忽略，1-未绑定状态，2-已绑定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachWithEdge(integer $AttachWithEdge) 设置0-非sase实例，忽略，1-未绑定状态，2-已绑定
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCrossEdgeStatus() 获取对等防火墙和开关状态 0：正常， 1：对等未创建防火墙，2：对等已创建防火墙，未打开开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossEdgeStatus(integer $CrossEdgeStatus) 设置对等防火墙和开关状态 0：正常， 1：对等未创建防火墙，2：对等已创建防火墙，未打开开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFwInsRegion() 获取网络经过VPC防火墙CVM所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwInsRegion(array $FwInsRegion) 设置网络经过VPC防火墙CVM所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIpsAction() 获取0 观察 1 拦截 2 严格 3 关闭 4 不支持ips 前端展示tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpsAction(integer $IpsAction) 设置0 观察 1 拦截 2 严格 3 关闭 4 不支持ips 前端展示tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFwInsLst() 获取开关关联的防火墙实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwInsLst(array $FwInsLst) 设置开关关联的防火墙实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBypassStatus() 获取开关是否处于bypass状态
0：正常状态
1：bypass状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBypassStatus(integer $BypassStatus) 设置开关是否处于bypass状态
0：正常状态
1：bypass状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class FwGroupSwitchShow extends AbstractModel
{
    /**
     * @var string 防火墙开关ID
     */
    public $SwitchId;

    /**
     * @var string 防火墙开关NAME
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SwitchName;

    /**
     * @var integer 互通模式
     */
    public $SwitchMode;

    /**
     * @var integer 开关边连接类型 0：对等连接， 1：云连网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectType;

    /**
     * @var string 连接ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectId;

    /**
     * @var string 连接名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectName;

    /**
     * @var array 源实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcInstancesInfo;

    /**
     * @var array 目的实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstInstancesInfo;

    /**
     * @var string 防火墙(组)数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwGroupId;

    /**
     * @var string 防火墙(组)名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwGroupName;

    /**
     * @var integer 开关状态 0：关 ， 1：开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer 开关的状态 0：正常， 1：转换中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 0-非sase实例，忽略，1-未绑定状态，2-已绑定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachWithEdge;

    /**
     * @var integer 对等防火墙和开关状态 0：正常， 1：对等未创建防火墙，2：对等已创建防火墙，未打开开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossEdgeStatus;

    /**
     * @var array 网络经过VPC防火墙CVM所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwInsRegion;

    /**
     * @var integer 0 观察 1 拦截 2 严格 3 关闭 4 不支持ips 前端展示tag
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpsAction;

    /**
     * @var array 开关关联的防火墙实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwInsLst;

    /**
     * @var integer 开关是否处于bypass状态
0：正常状态
1：bypass状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BypassStatus;

    /**
     * @param string $SwitchId 防火墙开关ID
     * @param string $SwitchName 防火墙开关NAME
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SwitchMode 互通模式
     * @param integer $ConnectType 开关边连接类型 0：对等连接， 1：云连网
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectId 连接ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectName 连接名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SrcInstancesInfo 源实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DstInstancesInfo 目的实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FwGroupId 防火墙(组)数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FwGroupName 防火墙(组)名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Enable 开关状态 0：关 ， 1：开
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 开关的状态 0：正常， 1：转换中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttachWithEdge 0-非sase实例，忽略，1-未绑定状态，2-已绑定
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CrossEdgeStatus 对等防火墙和开关状态 0：正常， 1：对等未创建防火墙，2：对等已创建防火墙，未打开开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FwInsRegion 网络经过VPC防火墙CVM所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IpsAction 0 观察 1 拦截 2 严格 3 关闭 4 不支持ips 前端展示tag
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FwInsLst 开关关联的防火墙实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BypassStatus 开关是否处于bypass状态
0：正常状态
1：bypass状态
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
        if (array_key_exists("SwitchId",$param) and $param["SwitchId"] !== null) {
            $this->SwitchId = $param["SwitchId"];
        }

        if (array_key_exists("SwitchName",$param) and $param["SwitchName"] !== null) {
            $this->SwitchName = $param["SwitchName"];
        }

        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }

        if (array_key_exists("ConnectType",$param) and $param["ConnectType"] !== null) {
            $this->ConnectType = $param["ConnectType"];
        }

        if (array_key_exists("ConnectId",$param) and $param["ConnectId"] !== null) {
            $this->ConnectId = $param["ConnectId"];
        }

        if (array_key_exists("ConnectName",$param) and $param["ConnectName"] !== null) {
            $this->ConnectName = $param["ConnectName"];
        }

        if (array_key_exists("SrcInstancesInfo",$param) and $param["SrcInstancesInfo"] !== null) {
            $this->SrcInstancesInfo = [];
            foreach ($param["SrcInstancesInfo"] as $key => $value){
                $obj = new NetInstancesInfo();
                $obj->deserialize($value);
                array_push($this->SrcInstancesInfo, $obj);
            }
        }

        if (array_key_exists("DstInstancesInfo",$param) and $param["DstInstancesInfo"] !== null) {
            $this->DstInstancesInfo = [];
            foreach ($param["DstInstancesInfo"] as $key => $value){
                $obj = new NetInstancesInfo();
                $obj->deserialize($value);
                array_push($this->DstInstancesInfo, $obj);
            }
        }

        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("FwGroupName",$param) and $param["FwGroupName"] !== null) {
            $this->FwGroupName = $param["FwGroupName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AttachWithEdge",$param) and $param["AttachWithEdge"] !== null) {
            $this->AttachWithEdge = $param["AttachWithEdge"];
        }

        if (array_key_exists("CrossEdgeStatus",$param) and $param["CrossEdgeStatus"] !== null) {
            $this->CrossEdgeStatus = $param["CrossEdgeStatus"];
        }

        if (array_key_exists("FwInsRegion",$param) and $param["FwInsRegion"] !== null) {
            $this->FwInsRegion = $param["FwInsRegion"];
        }

        if (array_key_exists("IpsAction",$param) and $param["IpsAction"] !== null) {
            $this->IpsAction = $param["IpsAction"];
        }

        if (array_key_exists("FwInsLst",$param) and $param["FwInsLst"] !== null) {
            $this->FwInsLst = [];
            foreach ($param["FwInsLst"] as $key => $value){
                $obj = new VpcFwInstanceShow();
                $obj->deserialize($value);
                array_push($this->FwInsLst, $obj);
            }
        }

        if (array_key_exists("BypassStatus",$param) and $param["BypassStatus"] !== null) {
            $this->BypassStatus = $param["BypassStatus"];
        }
    }
}
