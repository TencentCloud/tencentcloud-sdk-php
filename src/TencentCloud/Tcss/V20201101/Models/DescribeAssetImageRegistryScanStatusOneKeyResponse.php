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
 * DescribeAssetImageRegistryScanStatusOneKey返回参数结构体
 *
 * @method integer getImageTotal() 获取镜像个数
 * @method void setImageTotal(integer $ImageTotal) 设置镜像个数
 * @method integer getImageScanCnt() 获取扫描镜像个数
 * @method void setImageScanCnt(integer $ImageScanCnt) 设置扫描镜像个数
 * @method array getImageStatus() 获取扫描进度列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageStatus(array $ImageStatus) 设置扫描进度列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessCount() 获取安全个数
 * @method void setSuccessCount(integer $SuccessCount) 设置安全个数
 * @method integer getRiskCount() 获取风险个数
 * @method void setRiskCount(integer $RiskCount) 设置风险个数
 * @method integer getSchedule() 获取总的扫描进度
 * @method void setSchedule(integer $Schedule) 设置总的扫描进度
 * @method string getStatus() 获取总的扫描状态
 * @method void setStatus(string $Status) 设置总的扫描状态
 * @method integer getScanRemainTime() 获取扫描剩余时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanRemainTime(integer $ScanRemainTime) 设置扫描剩余时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetImageRegistryScanStatusOneKeyResponse extends AbstractModel
{
    /**
     * @var integer 镜像个数
     */
    public $ImageTotal;

    /**
     * @var integer 扫描镜像个数
     */
    public $ImageScanCnt;

    /**
     * @var array 扫描进度列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageStatus;

    /**
     * @var integer 安全个数
     */
    public $SuccessCount;

    /**
     * @var integer 风险个数
     */
    public $RiskCount;

    /**
     * @var integer 总的扫描进度
     */
    public $Schedule;

    /**
     * @var string 总的扫描状态
     */
    public $Status;

    /**
     * @var integer 扫描剩余时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanRemainTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ImageTotal 镜像个数
     * @param integer $ImageScanCnt 扫描镜像个数
     * @param array $ImageStatus 扫描进度列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessCount 安全个数
     * @param integer $RiskCount 风险个数
     * @param integer $Schedule 总的扫描进度
     * @param string $Status 总的扫描状态
     * @param integer $ScanRemainTime 扫描剩余时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ImageTotal",$param) and $param["ImageTotal"] !== null) {
            $this->ImageTotal = $param["ImageTotal"];
        }

        if (array_key_exists("ImageScanCnt",$param) and $param["ImageScanCnt"] !== null) {
            $this->ImageScanCnt = $param["ImageScanCnt"];
        }

        if (array_key_exists("ImageStatus",$param) and $param["ImageStatus"] !== null) {
            $this->ImageStatus = [];
            foreach ($param["ImageStatus"] as $key => $value){
                $obj = new ImageProgress();
                $obj->deserialize($value);
                array_push($this->ImageStatus, $obj);
            }
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScanRemainTime",$param) and $param["ScanRemainTime"] !== null) {
            $this->ScanRemainTime = $param["ScanRemainTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
