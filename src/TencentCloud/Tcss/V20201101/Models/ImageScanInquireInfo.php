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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像扫描计费信息
 *
 * @method string getInquireKey() 获取计费项
 * @method void setInquireKey(string $InquireKey) 设置计费项
 * @method integer getCapcity() 获取容量
 * @method void setCapcity(integer $Capcity) 设置容量
 * @method integer getUseage() 获取已使用量
 * @method void setUseage(integer $Useage) 设置已使用量
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取截止时间
 * @method void setEndTime(string $EndTime) 设置截止时间
 * @method string getPurchaseStatus() 获取计费状态
(Pending:待购)
(Normal:正常)
(Isolate:隔离)
 * @method void setPurchaseStatus(string $PurchaseStatus) 设置计费状态
(Pending:待购)
(Normal:正常)
(Isolate:隔离)
 * @method string getResourceID() 获取资源ID
 * @method void setResourceID(string $ResourceID) 设置资源ID
 */
class ImageScanInquireInfo extends AbstractModel
{
    /**
     * @var string 计费项
     */
    public $InquireKey;

    /**
     * @var integer 容量
     */
    public $Capcity;

    /**
     * @var integer 已使用量
     */
    public $Useage;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 截止时间
     */
    public $EndTime;

    /**
     * @var string 计费状态
(Pending:待购)
(Normal:正常)
(Isolate:隔离)
     */
    public $PurchaseStatus;

    /**
     * @var string 资源ID
     */
    public $ResourceID;

    /**
     * @param string $InquireKey 计费项
     * @param integer $Capcity 容量
     * @param integer $Useage 已使用量
     * @param string $StartTime 起始时间
     * @param string $EndTime 截止时间
     * @param string $PurchaseStatus 计费状态
(Pending:待购)
(Normal:正常)
(Isolate:隔离)
     * @param string $ResourceID 资源ID
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
        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("Capcity",$param) and $param["Capcity"] !== null) {
            $this->Capcity = $param["Capcity"];
        }

        if (array_key_exists("Useage",$param) and $param["Useage"] !== null) {
            $this->Useage = $param["Useage"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PurchaseStatus",$param) and $param["PurchaseStatus"] !== null) {
            $this->PurchaseStatus = $param["PurchaseStatus"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }
    }
}
