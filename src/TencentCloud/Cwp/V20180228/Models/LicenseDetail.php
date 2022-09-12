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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 授权订单列表对象
 *
 * @method integer getLicenseId() 获取授权ID
 * @method void setLicenseId(integer $LicenseId) 设置授权ID
 * @method integer getLicenseType() 获取授权类型,0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
 * @method void setLicenseType(integer $LicenseType) 设置授权类型,0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
 * @method integer getLicenseStatus() 获取授权状态 0 未使用,1 部分使用, 2 已用完, 3 不可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseStatus(integer $LicenseStatus) 设置授权状态 0 未使用,1 部分使用, 2 已用完, 3 不可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLicenseCnt() 获取总授权数
 * @method void setLicenseCnt(integer $LicenseCnt) 设置总授权数
 * @method integer getUsedLicenseCnt() 获取已使用授权数
 * @method void setUsedLicenseCnt(integer $UsedLicenseCnt) 设置已使用授权数
 * @method integer getOrderStatus() 获取订单状态 1 正常 2隔离, 3销毁
 * @method void setOrderStatus(integer $OrderStatus) 设置订单状态 1 正常 2隔离, 3销毁
 * @method string getDeadline() 获取截止日期
 * @method void setDeadline(string $Deadline) 设置截止日期
 * @method string getResourceId() 获取订单资源ID
 * @method void setResourceId(string $ResourceId) 设置订单资源ID
 * @method integer getAutoRenewFlag() 获取0 初始化,1 自动续费,2 不自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置0 初始化,1 自动续费,2 不自动续费
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getTaskId() 获取任务ID ,默认0 ,查询绑定进度用
 * @method void setTaskId(integer $TaskId) 设置任务ID ,默认0 ,查询绑定进度用
 * @method string getBuyTime() 获取购买时间
 * @method void setBuyTime(string $BuyTime) 设置购买时间
 * @method integer getSourceType() 获取是否试用订单.
 * @method void setSourceType(integer $SourceType) 设置是否试用订单.
 * @method string getAlias() 获取资源别名
 * @method void setAlias(string $Alias) 设置资源别名
 * @method array getTags() 获取平台标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置平台标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class LicenseDetail extends AbstractModel
{
    /**
     * @var integer 授权ID
     */
    public $LicenseId;

    /**
     * @var integer 授权类型,0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
     */
    public $LicenseType;

    /**
     * @var integer 授权状态 0 未使用,1 部分使用, 2 已用完, 3 不可用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseStatus;

    /**
     * @var integer 总授权数
     */
    public $LicenseCnt;

    /**
     * @var integer 已使用授权数
     */
    public $UsedLicenseCnt;

    /**
     * @var integer 订单状态 1 正常 2隔离, 3销毁
     */
    public $OrderStatus;

    /**
     * @var string 截止日期
     */
    public $Deadline;

    /**
     * @var string 订单资源ID
     */
    public $ResourceId;

    /**
     * @var integer 0 初始化,1 自动续费,2 不自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 任务ID ,默认0 ,查询绑定进度用
     */
    public $TaskId;

    /**
     * @var string 购买时间
     */
    public $BuyTime;

    /**
     * @var integer 是否试用订单.
     */
    public $SourceType;

    /**
     * @var string 资源别名
     */
    public $Alias;

    /**
     * @var array 平台标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param integer $LicenseId 授权ID
     * @param integer $LicenseType 授权类型,0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
     * @param integer $LicenseStatus 授权状态 0 未使用,1 部分使用, 2 已用完, 3 不可用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LicenseCnt 总授权数
     * @param integer $UsedLicenseCnt 已使用授权数
     * @param integer $OrderStatus 订单状态 1 正常 2隔离, 3销毁
     * @param string $Deadline 截止日期
     * @param string $ResourceId 订单资源ID
     * @param integer $AutoRenewFlag 0 初始化,1 自动续费,2 不自动续费
     * @param integer $ProjectId 项目ID
     * @param integer $TaskId 任务ID ,默认0 ,查询绑定进度用
     * @param string $BuyTime 购买时间
     * @param integer $SourceType 是否试用订单.
     * @param string $Alias 资源别名
     * @param array $Tags 平台标签
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
        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("LicenseStatus",$param) and $param["LicenseStatus"] !== null) {
            $this->LicenseStatus = $param["LicenseStatus"];
        }

        if (array_key_exists("LicenseCnt",$param) and $param["LicenseCnt"] !== null) {
            $this->LicenseCnt = $param["LicenseCnt"];
        }

        if (array_key_exists("UsedLicenseCnt",$param) and $param["UsedLicenseCnt"] !== null) {
            $this->UsedLicenseCnt = $param["UsedLicenseCnt"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
