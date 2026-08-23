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
 * DescribeImageRegistryAssetOverview返回参数结构体
 *
 * @method integer getImageCnt() 获取<p>镜像总数</p>
 * @method void setImageCnt(integer $ImageCnt) 设置<p>镜像总数</p>
 * @method integer getImageScannedCnt() 获取<p>已扫描镜像数</p>
 * @method void setImageScannedCnt(integer $ImageScannedCnt) 设置<p>已扫描镜像数</p>
 * @method integer getComponentCnt() 获取<p>组件数</p>
 * @method void setComponentCnt(integer $ComponentCnt) 设置<p>组件数</p>
 * @method integer getVulCnt() 获取<p>漏洞数</p>
 * @method void setVulCnt(integer $VulCnt) 设置<p>漏洞数</p>
 * @method integer getVirusCnt() 获取<p>木马数</p>
 * @method void setVirusCnt(integer $VirusCnt) 设置<p>木马数</p>
 * @method integer getSensitiveCnt() 获取<p>敏感信息数</p>
 * @method void setSensitiveCnt(integer $SensitiveCnt) 设置<p>敏感信息数</p>
 * @method integer getTimedScanTaskConfigCnt() 获取<p>定时扫描配置数</p>
 * @method void setTimedScanTaskConfigCnt(integer $TimedScanTaskConfigCnt) 设置<p>定时扫描配置数</p>
 * @method integer getTotalQuota() 获取<p>总配额</p>
 * @method void setTotalQuota(integer $TotalQuota) 设置<p>总配额</p>
 * @method integer getUsedQuota() 获取<p>已使用配额</p>
 * @method void setUsedQuota(integer $UsedQuota) 设置<p>已使用配额</p>
 * @method integer getRemainingQuota() 获取<p>剩余配额</p>
 * @method void setRemainingQuota(integer $RemainingQuota) 设置<p>剩余配额</p>
 * @method integer getTrialQuota() 获取<p>试用配额</p>
 * @method void setTrialQuota(integer $TrialQuota) 设置<p>试用配额</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageRegistryAssetOverviewResponse extends AbstractModel
{
    /**
     * @var integer <p>镜像总数</p>
     */
    public $ImageCnt;

    /**
     * @var integer <p>已扫描镜像数</p>
     */
    public $ImageScannedCnt;

    /**
     * @var integer <p>组件数</p>
     */
    public $ComponentCnt;

    /**
     * @var integer <p>漏洞数</p>
     */
    public $VulCnt;

    /**
     * @var integer <p>木马数</p>
     */
    public $VirusCnt;

    /**
     * @var integer <p>敏感信息数</p>
     */
    public $SensitiveCnt;

    /**
     * @var integer <p>定时扫描配置数</p>
     */
    public $TimedScanTaskConfigCnt;

    /**
     * @var integer <p>总配额</p>
     */
    public $TotalQuota;

    /**
     * @var integer <p>已使用配额</p>
     */
    public $UsedQuota;

    /**
     * @var integer <p>剩余配额</p>
     */
    public $RemainingQuota;

    /**
     * @var integer <p>试用配额</p>
     */
    public $TrialQuota;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ImageCnt <p>镜像总数</p>
     * @param integer $ImageScannedCnt <p>已扫描镜像数</p>
     * @param integer $ComponentCnt <p>组件数</p>
     * @param integer $VulCnt <p>漏洞数</p>
     * @param integer $VirusCnt <p>木马数</p>
     * @param integer $SensitiveCnt <p>敏感信息数</p>
     * @param integer $TimedScanTaskConfigCnt <p>定时扫描配置数</p>
     * @param integer $TotalQuota <p>总配额</p>
     * @param integer $UsedQuota <p>已使用配额</p>
     * @param integer $RemainingQuota <p>剩余配额</p>
     * @param integer $TrialQuota <p>试用配额</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("ImageScannedCnt",$param) and $param["ImageScannedCnt"] !== null) {
            $this->ImageScannedCnt = $param["ImageScannedCnt"];
        }

        if (array_key_exists("ComponentCnt",$param) and $param["ComponentCnt"] !== null) {
            $this->ComponentCnt = $param["ComponentCnt"];
        }

        if (array_key_exists("VulCnt",$param) and $param["VulCnt"] !== null) {
            $this->VulCnt = $param["VulCnt"];
        }

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("SensitiveCnt",$param) and $param["SensitiveCnt"] !== null) {
            $this->SensitiveCnt = $param["SensitiveCnt"];
        }

        if (array_key_exists("TimedScanTaskConfigCnt",$param) and $param["TimedScanTaskConfigCnt"] !== null) {
            $this->TimedScanTaskConfigCnt = $param["TimedScanTaskConfigCnt"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("UsedQuota",$param) and $param["UsedQuota"] !== null) {
            $this->UsedQuota = $param["UsedQuota"];
        }

        if (array_key_exists("RemainingQuota",$param) and $param["RemainingQuota"] !== null) {
            $this->RemainingQuota = $param["RemainingQuota"];
        }

        if (array_key_exists("TrialQuota",$param) and $param["TrialQuota"] !== null) {
            $this->TrialQuota = $param["TrialQuota"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
