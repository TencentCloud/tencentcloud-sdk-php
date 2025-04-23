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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重保防护资源信息
 *
 * @method string getResourceIds() 获取资源id
 * @method void setResourceIds(string $ResourceIds) 设置资源id
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method integer getRegion() 获取地域
 * @method void setRegion(integer $Region) 设置地域
 * @method string getBeginTime() 获取开始时间
 * @method void setBeginTime(string $BeginTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getInquireNum() 获取申请数量
 * @method void setInquireNum(integer $InquireNum) 设置申请数量
 * @method integer getUsedNum() 获取使用数量
 * @method void setUsedNum(integer $UsedNum) 设置使用数量
 * @method integer getRenewFlag() 获取续费标志
 * @method void setRenewFlag(integer $RenewFlag) 设置续费标志
 * @method string getBillingItem() 获取计费项
 * @method void setBillingItem(string $BillingItem) 设置计费项
 */
class MajorEventsProPkg extends AbstractModel
{
    /**
     * @var string 资源id
     */
    public $ResourceIds;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var integer 地域
     */
    public $Region;

    /**
     * @var string 开始时间
     */
    public $BeginTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 申请数量
     */
    public $InquireNum;

    /**
     * @var integer 使用数量
     */
    public $UsedNum;

    /**
     * @var integer 续费标志
     */
    public $RenewFlag;

    /**
     * @var string 计费项
     */
    public $BillingItem;

    /**
     * @param string $ResourceIds 资源id
     * @param integer $Status 状态
     * @param integer $Region 地域
     * @param string $BeginTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $InquireNum 申请数量
     * @param integer $UsedNum 使用数量
     * @param integer $RenewFlag 续费标志
     * @param string $BillingItem 计费项
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }
    }
}
