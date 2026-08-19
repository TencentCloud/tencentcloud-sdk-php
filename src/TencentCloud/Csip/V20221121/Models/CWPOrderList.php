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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单列表对象成员
 *
 * @method string getProductCode() 获取<p>所属产品 p_</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCode(string $ProductCode) 设置<p>所属产品 p_</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductCode() 获取<p>子产品 sp_</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProductCode(string $SubProductCode) 设置<p>子产品 sp_</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInquireKey() 获取<p>计费项四层 sv_</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInquireKey(string $InquireKey) 设置<p>计费项四层 sv_</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInquireNum() 获取<p>资源购买量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInquireNum(integer $InquireNum) 设置<p>资源购买量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsedNum() 获取<p>资源用量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedNum(integer $UsedNum) 设置<p>资源用量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取<p>云标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置<p>云标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>订单状态 1 正常 2隔离 3销毁</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>订单状态 1 正常 2隔离 3销毁</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginTime() 获取<p>订单的开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(string $BeginTime) 设置<p>订单的开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>订单的结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>订单的结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectID() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectID(integer $ProjectID) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取<p>资源别名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置<p>资源别名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取<p>资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取<p>自动续费标签 0 默认不自动续费(大客户特权会自动续费的) 1 自动续费 2 手动设置不自动续费(大客户特权不会自动续费)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标签 0 默认不自动续费(大客户特权会自动续费的) 1 自动续费 2 手动设置不自动续费(大客户特权不会自动续费)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceType() 获取<p>资源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceType(integer $SourceType) 设置<p>资源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取<p>计费模式 0 后付费 1 预付费(包年包月)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置<p>计费模式 0 后付费 1 预付费(包年包月)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionID() 获取<p>地域ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionID(integer $RegionID) 设置<p>地域ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneID() 获取<p>可用区ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneID(integer $ZoneID) 设置<p>可用区ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDealName() 获取<p>当前子订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealName(string $DealName) 设置<p>当前子订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CWPOrderExtraParam getExtraParam() 获取<p>订单额外参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraParam(CWPOrderExtraParam $ExtraParam) 设置<p>订单额外参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CWPOrderList extends AbstractModel
{
    /**
     * @var string <p>所属产品 p_</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCode;

    /**
     * @var string <p>子产品 sp_</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProductCode;

    /**
     * @var string <p>计费项四层 sv_</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InquireKey;

    /**
     * @var integer <p>资源购买量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InquireNum;

    /**
     * @var integer <p>资源用量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedNum;

    /**
     * @var array <p>云标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @var integer <p>订单状态 1 正常 2隔离 3销毁</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>订单的开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string <p>订单的结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectID;

    /**
     * @var string <p>资源别名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var string <p>资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var integer <p>自动续费标签 0 默认不自动续费(大客户特权会自动续费的) 1 自动续费 2 手动设置不自动续费(大客户特权不会自动续费)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>资源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceType;

    /**
     * @var integer <p>计费模式 0 后付费 1 预付费(包年包月)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var integer <p>地域ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionID;

    /**
     * @var integer <p>可用区ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneID;

    /**
     * @var string <p>当前子订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealName;

    /**
     * @var CWPOrderExtraParam <p>订单额外参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraParam;

    /**
     * @param string $ProductCode <p>所属产品 p_</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductCode <p>子产品 sp_</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InquireKey <p>计费项四层 sv_</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InquireNum <p>资源购买量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UsedNum <p>资源用量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList <p>云标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>订单状态 1 正常 2隔离 3销毁</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginTime <p>订单的开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>订单的结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectID <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias <p>资源别名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId <p>资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag <p>自动续费标签 0 默认不自动续费(大客户特权会自动续费的) 1 自动续费 2 手动设置不自动续费(大客户特权不会自动续费)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceType <p>资源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode <p>计费模式 0 后付费 1 预付费(包年包月)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionID <p>地域ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneID <p>可用区ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DealName <p>当前子订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CWPOrderExtraParam $ExtraParam <p>订单额外参数</p>
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
        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }

        if (array_key_exists("ZoneID",$param) and $param["ZoneID"] !== null) {
            $this->ZoneID = $param["ZoneID"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = new CWPOrderExtraParam();
            $this->ExtraParam->deserialize($param["ExtraParam"]);
        }
    }
}
