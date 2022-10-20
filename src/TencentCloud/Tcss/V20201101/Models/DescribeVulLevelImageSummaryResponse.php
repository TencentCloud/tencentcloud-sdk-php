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
 * DescribeVulLevelImageSummary返回参数结构体
 *
 * @method float getHighLevelVulLocalImagePercent() 获取高危漏洞最新本地镜像占比
 * @method void setHighLevelVulLocalImagePercent(float $HighLevelVulLocalImagePercent) 设置高危漏洞最新本地镜像占比
 * @method float getMediumLevelVulLocalImagePercent() 获取中危漏洞最新本地镜像占比
 * @method void setMediumLevelVulLocalImagePercent(float $MediumLevelVulLocalImagePercent) 设置中危漏洞最新本地镜像占比
 * @method float getLowLevelVulLocalImagePercent() 获取低危漏洞最新本地镜像占比
 * @method void setLowLevelVulLocalImagePercent(float $LowLevelVulLocalImagePercent) 设置低危漏洞最新本地镜像占比
 * @method float getCriticalLevelVulLocalImagePercent() 获取严重漏洞最新本地镜像占比
 * @method void setCriticalLevelVulLocalImagePercent(float $CriticalLevelVulLocalImagePercent) 设置严重漏洞最新本地镜像占比
 * @method integer getLocalNewestImageCount() 获取影响的最新版本本地镜像数
 * @method void setLocalNewestImageCount(integer $LocalNewestImageCount) 设置影响的最新版本本地镜像数
 * @method integer getRegistryNewestImageCount() 获取影响的最新版本仓库镜像数
 * @method void setRegistryNewestImageCount(integer $RegistryNewestImageCount) 设置影响的最新版本仓库镜像数
 * @method float getHighLevelVulRegistryImagePercent() 获取高危漏洞最新仓库镜像占比
 * @method void setHighLevelVulRegistryImagePercent(float $HighLevelVulRegistryImagePercent) 设置高危漏洞最新仓库镜像占比
 * @method float getMediumLevelVulRegistryImagePercent() 获取中危漏洞最新仓库镜像占比
 * @method void setMediumLevelVulRegistryImagePercent(float $MediumLevelVulRegistryImagePercent) 设置中危漏洞最新仓库镜像占比
 * @method float getLowLevelVulRegistryImagePercent() 获取低危漏洞最新仓库镜像占比
 * @method void setLowLevelVulRegistryImagePercent(float $LowLevelVulRegistryImagePercent) 设置低危漏洞最新仓库镜像占比
 * @method float getCriticalLevelVulRegistryImagePercent() 获取严重漏洞最新仓库镜像占比
 * @method void setCriticalLevelVulRegistryImagePercent(float $CriticalLevelVulRegistryImagePercent) 设置严重漏洞最新仓库镜像占比
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulLevelImageSummaryResponse extends AbstractModel
{
    /**
     * @var float 高危漏洞最新本地镜像占比
     */
    public $HighLevelVulLocalImagePercent;

    /**
     * @var float 中危漏洞最新本地镜像占比
     */
    public $MediumLevelVulLocalImagePercent;

    /**
     * @var float 低危漏洞最新本地镜像占比
     */
    public $LowLevelVulLocalImagePercent;

    /**
     * @var float 严重漏洞最新本地镜像占比
     */
    public $CriticalLevelVulLocalImagePercent;

    /**
     * @var integer 影响的最新版本本地镜像数
     */
    public $LocalNewestImageCount;

    /**
     * @var integer 影响的最新版本仓库镜像数
     */
    public $RegistryNewestImageCount;

    /**
     * @var float 高危漏洞最新仓库镜像占比
     */
    public $HighLevelVulRegistryImagePercent;

    /**
     * @var float 中危漏洞最新仓库镜像占比
     */
    public $MediumLevelVulRegistryImagePercent;

    /**
     * @var float 低危漏洞最新仓库镜像占比
     */
    public $LowLevelVulRegistryImagePercent;

    /**
     * @var float 严重漏洞最新仓库镜像占比
     */
    public $CriticalLevelVulRegistryImagePercent;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $HighLevelVulLocalImagePercent 高危漏洞最新本地镜像占比
     * @param float $MediumLevelVulLocalImagePercent 中危漏洞最新本地镜像占比
     * @param float $LowLevelVulLocalImagePercent 低危漏洞最新本地镜像占比
     * @param float $CriticalLevelVulLocalImagePercent 严重漏洞最新本地镜像占比
     * @param integer $LocalNewestImageCount 影响的最新版本本地镜像数
     * @param integer $RegistryNewestImageCount 影响的最新版本仓库镜像数
     * @param float $HighLevelVulRegistryImagePercent 高危漏洞最新仓库镜像占比
     * @param float $MediumLevelVulRegistryImagePercent 中危漏洞最新仓库镜像占比
     * @param float $LowLevelVulRegistryImagePercent 低危漏洞最新仓库镜像占比
     * @param float $CriticalLevelVulRegistryImagePercent 严重漏洞最新仓库镜像占比
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
        if (array_key_exists("HighLevelVulLocalImagePercent",$param) and $param["HighLevelVulLocalImagePercent"] !== null) {
            $this->HighLevelVulLocalImagePercent = $param["HighLevelVulLocalImagePercent"];
        }

        if (array_key_exists("MediumLevelVulLocalImagePercent",$param) and $param["MediumLevelVulLocalImagePercent"] !== null) {
            $this->MediumLevelVulLocalImagePercent = $param["MediumLevelVulLocalImagePercent"];
        }

        if (array_key_exists("LowLevelVulLocalImagePercent",$param) and $param["LowLevelVulLocalImagePercent"] !== null) {
            $this->LowLevelVulLocalImagePercent = $param["LowLevelVulLocalImagePercent"];
        }

        if (array_key_exists("CriticalLevelVulLocalImagePercent",$param) and $param["CriticalLevelVulLocalImagePercent"] !== null) {
            $this->CriticalLevelVulLocalImagePercent = $param["CriticalLevelVulLocalImagePercent"];
        }

        if (array_key_exists("LocalNewestImageCount",$param) and $param["LocalNewestImageCount"] !== null) {
            $this->LocalNewestImageCount = $param["LocalNewestImageCount"];
        }

        if (array_key_exists("RegistryNewestImageCount",$param) and $param["RegistryNewestImageCount"] !== null) {
            $this->RegistryNewestImageCount = $param["RegistryNewestImageCount"];
        }

        if (array_key_exists("HighLevelVulRegistryImagePercent",$param) and $param["HighLevelVulRegistryImagePercent"] !== null) {
            $this->HighLevelVulRegistryImagePercent = $param["HighLevelVulRegistryImagePercent"];
        }

        if (array_key_exists("MediumLevelVulRegistryImagePercent",$param) and $param["MediumLevelVulRegistryImagePercent"] !== null) {
            $this->MediumLevelVulRegistryImagePercent = $param["MediumLevelVulRegistryImagePercent"];
        }

        if (array_key_exists("LowLevelVulRegistryImagePercent",$param) and $param["LowLevelVulRegistryImagePercent"] !== null) {
            $this->LowLevelVulRegistryImagePercent = $param["LowLevelVulRegistryImagePercent"];
        }

        if (array_key_exists("CriticalLevelVulRegistryImagePercent",$param) and $param["CriticalLevelVulRegistryImagePercent"] !== null) {
            $this->CriticalLevelVulRegistryImagePercent = $param["CriticalLevelVulRegistryImagePercent"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
