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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回档进度详情
 *
 * @method boolean getIsVipSwitchable() 获取是否可以交换vip
 * @method void setIsVipSwitchable(boolean $IsVipSwitchable) 设置是否可以交换vip
 * @method string getVipSwitchableTime() 获取vip可交换时间
 * @method void setVipSwitchableTime(string $VipSwitchableTime) 设置vip可交换时间
 * @method array getExchangeInstanceInfoList() 获取交换实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExchangeInstanceInfoList(array $ExchangeInstanceInfoList) 设置交换实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExchangeRoGroupInfoList() 获取交换RO组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExchangeRoGroupInfoList(array $ExchangeRoGroupInfoList) 设置交换RO组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrentStep() 获取当前步骤
 * @method void setCurrentStep(string $CurrentStep) 设置当前步骤
 * @method integer getCurrentStepProgress() 获取当前步骤进度
 * @method void setCurrentStepProgress(integer $CurrentStepProgress) 设置当前步骤进度
 * @method string getCurrentStepRemainingTime() 获取当前步骤剩余时间
 * @method void setCurrentStepRemainingTime(string $CurrentStepRemainingTime) 设置当前步骤剩余时间
 */
class RollbackProcessInfo extends AbstractModel
{
    /**
     * @var boolean 是否可以交换vip
     */
    public $IsVipSwitchable;

    /**
     * @var string vip可交换时间
     */
    public $VipSwitchableTime;

    /**
     * @var array 交换实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExchangeInstanceInfoList;

    /**
     * @var array 交换RO组列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExchangeRoGroupInfoList;

    /**
     * @var string 当前步骤
     */
    public $CurrentStep;

    /**
     * @var integer 当前步骤进度
     */
    public $CurrentStepProgress;

    /**
     * @var string 当前步骤剩余时间
     */
    public $CurrentStepRemainingTime;

    /**
     * @param boolean $IsVipSwitchable 是否可以交换vip
     * @param string $VipSwitchableTime vip可交换时间
     * @param array $ExchangeInstanceInfoList 交换实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExchangeRoGroupInfoList 交换RO组列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrentStep 当前步骤
     * @param integer $CurrentStepProgress 当前步骤进度
     * @param string $CurrentStepRemainingTime 当前步骤剩余时间
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
        if (array_key_exists("IsVipSwitchable",$param) and $param["IsVipSwitchable"] !== null) {
            $this->IsVipSwitchable = $param["IsVipSwitchable"];
        }

        if (array_key_exists("VipSwitchableTime",$param) and $param["VipSwitchableTime"] !== null) {
            $this->VipSwitchableTime = $param["VipSwitchableTime"];
        }

        if (array_key_exists("ExchangeInstanceInfoList",$param) and $param["ExchangeInstanceInfoList"] !== null) {
            $this->ExchangeInstanceInfoList = [];
            foreach ($param["ExchangeInstanceInfoList"] as $key => $value){
                $obj = new ExchangeInstanceInfo();
                $obj->deserialize($value);
                array_push($this->ExchangeInstanceInfoList, $obj);
            }
        }

        if (array_key_exists("ExchangeRoGroupInfoList",$param) and $param["ExchangeRoGroupInfoList"] !== null) {
            $this->ExchangeRoGroupInfoList = [];
            foreach ($param["ExchangeRoGroupInfoList"] as $key => $value){
                $obj = new ExchangeRoGroupInfo();
                $obj->deserialize($value);
                array_push($this->ExchangeRoGroupInfoList, $obj);
            }
        }

        if (array_key_exists("CurrentStep",$param) and $param["CurrentStep"] !== null) {
            $this->CurrentStep = $param["CurrentStep"];
        }

        if (array_key_exists("CurrentStepProgress",$param) and $param["CurrentStepProgress"] !== null) {
            $this->CurrentStepProgress = $param["CurrentStepProgress"];
        }

        if (array_key_exists("CurrentStepRemainingTime",$param) and $param["CurrentStepRemainingTime"] !== null) {
            $this->CurrentStepRemainingTime = $param["CurrentStepRemainingTime"];
        }
    }
}
