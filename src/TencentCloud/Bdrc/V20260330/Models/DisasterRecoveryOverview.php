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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容灾总览数据
 *
 * @method string getRegion() 获取地域 ID
 * @method void setRegion(string $Region) 设置地域 ID
 * @method integer getSitePairCount() 获取站点对总数
 * @method void setSitePairCount(integer $SitePairCount) 设置站点对总数
 * @method integer getSitePairCrossRegionCount() 获取跨地域站点对数
 * @method void setSitePairCrossRegionCount(integer $SitePairCrossRegionCount) 设置跨地域站点对数
 * @method integer getSitePairCrossZoneCount() 获取跨可用区站点对数
 * @method void setSitePairCrossZoneCount(integer $SitePairCrossZoneCount) 设置跨可用区站点对数
 * @method integer getSitePairCrossCloudCount() 获取跨云站点对数
 * @method void setSitePairCrossCloudCount(integer $SitePairCrossCloudCount) 设置跨云站点对数
 * @method integer getProtectGroupCount() 获取保护组总数
 * @method void setProtectGroupCount(integer $ProtectGroupCount) 设置保护组总数
 * @method integer getProtectGroupCrossRegionCount() 获取跨地域保护组数
 * @method void setProtectGroupCrossRegionCount(integer $ProtectGroupCrossRegionCount) 设置跨地域保护组数
 * @method integer getProtectGroupCrossZoneCount() 获取跨可用区保护组数
 * @method void setProtectGroupCrossZoneCount(integer $ProtectGroupCrossZoneCount) 设置跨可用区保护组数
 * @method integer getProtectGroupCrossCloudCount() 获取跨云保护组数
 * @method void setProtectGroupCrossCloudCount(integer $ProtectGroupCrossCloudCount) 设置跨云保护组数
 * @method integer getCopyPairCount() 获取复制对总数
 * @method void setCopyPairCount(integer $CopyPairCount) 设置复制对总数
 * @method integer getCopyPairSuccessRPOCount() 获取RPO 正常的复制对数
 * @method void setCopyPairSuccessRPOCount(integer $CopyPairSuccessRPOCount) 设置RPO 正常的复制对数
 * @method integer getCopyPairErrorRPOCount() 获取RPO 异常的复制对数
 * @method void setCopyPairErrorRPOCount(integer $CopyPairErrorRPOCount) 设置RPO 异常的复制对数
 * @method integer getDrillPairCount() 获取演练对总数
 * @method void setDrillPairCount(integer $DrillPairCount) 设置演练对总数
 * @method integer getDrillPairDrillingCount() 获取演练中
 * @method void setDrillPairDrillingCount(integer $DrillPairDrillingCount) 设置演练中
 * @method integer getDrillPairFailedCount() 获取演练失败
 * @method void setDrillPairFailedCount(integer $DrillPairFailedCount) 设置演练失败
 * @method integer getDrillPairSuccessCount() 获取演练成功
 * @method void setDrillPairSuccessCount(integer $DrillPairSuccessCount) 设置演练成功
 * @method integer getProtectedResourceCount() 获取受保护资源总数
 * @method void setProtectedResourceCount(integer $ProtectedResourceCount) 设置受保护资源总数
 * @method integer getProtectedResourceCopyingCount() 获取受保护资源-复制中
 * @method void setProtectedResourceCopyingCount(integer $ProtectedResourceCopyingCount) 设置受保护资源-复制中
 * @method integer getProtectedResourceStoppedCount() 获取受保护资源-已停止/初始化
 * @method void setProtectedResourceStoppedCount(integer $ProtectedResourceStoppedCount) 设置受保护资源-已停止/初始化
 * @method integer getFailoverFailedCount() 获取切换失败
 * @method void setFailoverFailedCount(integer $FailoverFailedCount) 设置切换失败
 */
class DisasterRecoveryOverview extends AbstractModel
{
    /**
     * @var string 地域 ID
     */
    public $Region;

    /**
     * @var integer 站点对总数
     */
    public $SitePairCount;

    /**
     * @var integer 跨地域站点对数
     */
    public $SitePairCrossRegionCount;

    /**
     * @var integer 跨可用区站点对数
     */
    public $SitePairCrossZoneCount;

    /**
     * @var integer 跨云站点对数
     */
    public $SitePairCrossCloudCount;

    /**
     * @var integer 保护组总数
     */
    public $ProtectGroupCount;

    /**
     * @var integer 跨地域保护组数
     */
    public $ProtectGroupCrossRegionCount;

    /**
     * @var integer 跨可用区保护组数
     */
    public $ProtectGroupCrossZoneCount;

    /**
     * @var integer 跨云保护组数
     */
    public $ProtectGroupCrossCloudCount;

    /**
     * @var integer 复制对总数
     */
    public $CopyPairCount;

    /**
     * @var integer RPO 正常的复制对数
     */
    public $CopyPairSuccessRPOCount;

    /**
     * @var integer RPO 异常的复制对数
     */
    public $CopyPairErrorRPOCount;

    /**
     * @var integer 演练对总数
     */
    public $DrillPairCount;

    /**
     * @var integer 演练中
     */
    public $DrillPairDrillingCount;

    /**
     * @var integer 演练失败
     */
    public $DrillPairFailedCount;

    /**
     * @var integer 演练成功
     */
    public $DrillPairSuccessCount;

    /**
     * @var integer 受保护资源总数
     */
    public $ProtectedResourceCount;

    /**
     * @var integer 受保护资源-复制中
     */
    public $ProtectedResourceCopyingCount;

    /**
     * @var integer 受保护资源-已停止/初始化
     */
    public $ProtectedResourceStoppedCount;

    /**
     * @var integer 切换失败
     */
    public $FailoverFailedCount;

    /**
     * @param string $Region 地域 ID
     * @param integer $SitePairCount 站点对总数
     * @param integer $SitePairCrossRegionCount 跨地域站点对数
     * @param integer $SitePairCrossZoneCount 跨可用区站点对数
     * @param integer $SitePairCrossCloudCount 跨云站点对数
     * @param integer $ProtectGroupCount 保护组总数
     * @param integer $ProtectGroupCrossRegionCount 跨地域保护组数
     * @param integer $ProtectGroupCrossZoneCount 跨可用区保护组数
     * @param integer $ProtectGroupCrossCloudCount 跨云保护组数
     * @param integer $CopyPairCount 复制对总数
     * @param integer $CopyPairSuccessRPOCount RPO 正常的复制对数
     * @param integer $CopyPairErrorRPOCount RPO 异常的复制对数
     * @param integer $DrillPairCount 演练对总数
     * @param integer $DrillPairDrillingCount 演练中
     * @param integer $DrillPairFailedCount 演练失败
     * @param integer $DrillPairSuccessCount 演练成功
     * @param integer $ProtectedResourceCount 受保护资源总数
     * @param integer $ProtectedResourceCopyingCount 受保护资源-复制中
     * @param integer $ProtectedResourceStoppedCount 受保护资源-已停止/初始化
     * @param integer $FailoverFailedCount 切换失败
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SitePairCount",$param) and $param["SitePairCount"] !== null) {
            $this->SitePairCount = $param["SitePairCount"];
        }

        if (array_key_exists("SitePairCrossRegionCount",$param) and $param["SitePairCrossRegionCount"] !== null) {
            $this->SitePairCrossRegionCount = $param["SitePairCrossRegionCount"];
        }

        if (array_key_exists("SitePairCrossZoneCount",$param) and $param["SitePairCrossZoneCount"] !== null) {
            $this->SitePairCrossZoneCount = $param["SitePairCrossZoneCount"];
        }

        if (array_key_exists("SitePairCrossCloudCount",$param) and $param["SitePairCrossCloudCount"] !== null) {
            $this->SitePairCrossCloudCount = $param["SitePairCrossCloudCount"];
        }

        if (array_key_exists("ProtectGroupCount",$param) and $param["ProtectGroupCount"] !== null) {
            $this->ProtectGroupCount = $param["ProtectGroupCount"];
        }

        if (array_key_exists("ProtectGroupCrossRegionCount",$param) and $param["ProtectGroupCrossRegionCount"] !== null) {
            $this->ProtectGroupCrossRegionCount = $param["ProtectGroupCrossRegionCount"];
        }

        if (array_key_exists("ProtectGroupCrossZoneCount",$param) and $param["ProtectGroupCrossZoneCount"] !== null) {
            $this->ProtectGroupCrossZoneCount = $param["ProtectGroupCrossZoneCount"];
        }

        if (array_key_exists("ProtectGroupCrossCloudCount",$param) and $param["ProtectGroupCrossCloudCount"] !== null) {
            $this->ProtectGroupCrossCloudCount = $param["ProtectGroupCrossCloudCount"];
        }

        if (array_key_exists("CopyPairCount",$param) and $param["CopyPairCount"] !== null) {
            $this->CopyPairCount = $param["CopyPairCount"];
        }

        if (array_key_exists("CopyPairSuccessRPOCount",$param) and $param["CopyPairSuccessRPOCount"] !== null) {
            $this->CopyPairSuccessRPOCount = $param["CopyPairSuccessRPOCount"];
        }

        if (array_key_exists("CopyPairErrorRPOCount",$param) and $param["CopyPairErrorRPOCount"] !== null) {
            $this->CopyPairErrorRPOCount = $param["CopyPairErrorRPOCount"];
        }

        if (array_key_exists("DrillPairCount",$param) and $param["DrillPairCount"] !== null) {
            $this->DrillPairCount = $param["DrillPairCount"];
        }

        if (array_key_exists("DrillPairDrillingCount",$param) and $param["DrillPairDrillingCount"] !== null) {
            $this->DrillPairDrillingCount = $param["DrillPairDrillingCount"];
        }

        if (array_key_exists("DrillPairFailedCount",$param) and $param["DrillPairFailedCount"] !== null) {
            $this->DrillPairFailedCount = $param["DrillPairFailedCount"];
        }

        if (array_key_exists("DrillPairSuccessCount",$param) and $param["DrillPairSuccessCount"] !== null) {
            $this->DrillPairSuccessCount = $param["DrillPairSuccessCount"];
        }

        if (array_key_exists("ProtectedResourceCount",$param) and $param["ProtectedResourceCount"] !== null) {
            $this->ProtectedResourceCount = $param["ProtectedResourceCount"];
        }

        if (array_key_exists("ProtectedResourceCopyingCount",$param) and $param["ProtectedResourceCopyingCount"] !== null) {
            $this->ProtectedResourceCopyingCount = $param["ProtectedResourceCopyingCount"];
        }

        if (array_key_exists("ProtectedResourceStoppedCount",$param) and $param["ProtectedResourceStoppedCount"] !== null) {
            $this->ProtectedResourceStoppedCount = $param["ProtectedResourceStoppedCount"];
        }

        if (array_key_exists("FailoverFailedCount",$param) and $param["FailoverFailedCount"] !== null) {
            $this->FailoverFailedCount = $param["FailoverFailedCount"];
        }
    }
}
