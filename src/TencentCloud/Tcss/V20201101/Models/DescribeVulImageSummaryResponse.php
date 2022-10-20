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
 * DescribeVulImageSummary返回参数结构体
 *
 * @method integer getSeriousVulImageCount() 获取受严重或高危漏洞影响的镜像数
 * @method void setSeriousVulImageCount(integer $SeriousVulImageCount) 设置受严重或高危漏洞影响的镜像数
 * @method integer getScannedImageCount() 获取已扫描的镜像数
 * @method void setScannedImageCount(integer $ScannedImageCount) 设置已扫描的镜像数
 * @method integer getVulTotalCount() 获取漏洞总数量
 * @method void setVulTotalCount(integer $VulTotalCount) 设置漏洞总数量
 * @method integer getSysTemVulCount() 获取系统漏洞数
 * @method void setSysTemVulCount(integer $SysTemVulCount) 设置系统漏洞数
 * @method integer getWebVulCount() 获取web应用漏洞数
 * @method void setWebVulCount(integer $WebVulCount) 设置web应用漏洞数
 * @method integer getAllAuthorizedImageCount() 获取已授权镜像数
 * @method void setAllAuthorizedImageCount(integer $AllAuthorizedImageCount) 设置已授权镜像数
 * @method integer getEmergencyVulCount() 获取应急漏洞数
 * @method void setEmergencyVulCount(integer $EmergencyVulCount) 设置应急漏洞数
 * @method integer getSupportVulTotalCount() 获取支持扫描的漏洞总数量
 * @method void setSupportVulTotalCount(integer $SupportVulTotalCount) 设置支持扫描的漏洞总数量
 * @method string getVulLibraryUpdateTime() 获取漏洞库更新时间
 * @method void setVulLibraryUpdateTime(string $VulLibraryUpdateTime) 设置漏洞库更新时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulImageSummaryResponse extends AbstractModel
{
    /**
     * @var integer 受严重或高危漏洞影响的镜像数
     */
    public $SeriousVulImageCount;

    /**
     * @var integer 已扫描的镜像数
     */
    public $ScannedImageCount;

    /**
     * @var integer 漏洞总数量
     */
    public $VulTotalCount;

    /**
     * @var integer 系统漏洞数
     */
    public $SysTemVulCount;

    /**
     * @var integer web应用漏洞数
     */
    public $WebVulCount;

    /**
     * @var integer 已授权镜像数
     */
    public $AllAuthorizedImageCount;

    /**
     * @var integer 应急漏洞数
     */
    public $EmergencyVulCount;

    /**
     * @var integer 支持扫描的漏洞总数量
     */
    public $SupportVulTotalCount;

    /**
     * @var string 漏洞库更新时间
     */
    public $VulLibraryUpdateTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SeriousVulImageCount 受严重或高危漏洞影响的镜像数
     * @param integer $ScannedImageCount 已扫描的镜像数
     * @param integer $VulTotalCount 漏洞总数量
     * @param integer $SysTemVulCount 系统漏洞数
     * @param integer $WebVulCount web应用漏洞数
     * @param integer $AllAuthorizedImageCount 已授权镜像数
     * @param integer $EmergencyVulCount 应急漏洞数
     * @param integer $SupportVulTotalCount 支持扫描的漏洞总数量
     * @param string $VulLibraryUpdateTime 漏洞库更新时间
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
        if (array_key_exists("SeriousVulImageCount",$param) and $param["SeriousVulImageCount"] !== null) {
            $this->SeriousVulImageCount = $param["SeriousVulImageCount"];
        }

        if (array_key_exists("ScannedImageCount",$param) and $param["ScannedImageCount"] !== null) {
            $this->ScannedImageCount = $param["ScannedImageCount"];
        }

        if (array_key_exists("VulTotalCount",$param) and $param["VulTotalCount"] !== null) {
            $this->VulTotalCount = $param["VulTotalCount"];
        }

        if (array_key_exists("SysTemVulCount",$param) and $param["SysTemVulCount"] !== null) {
            $this->SysTemVulCount = $param["SysTemVulCount"];
        }

        if (array_key_exists("WebVulCount",$param) and $param["WebVulCount"] !== null) {
            $this->WebVulCount = $param["WebVulCount"];
        }

        if (array_key_exists("AllAuthorizedImageCount",$param) and $param["AllAuthorizedImageCount"] !== null) {
            $this->AllAuthorizedImageCount = $param["AllAuthorizedImageCount"];
        }

        if (array_key_exists("EmergencyVulCount",$param) and $param["EmergencyVulCount"] !== null) {
            $this->EmergencyVulCount = $param["EmergencyVulCount"];
        }

        if (array_key_exists("SupportVulTotalCount",$param) and $param["SupportVulTotalCount"] !== null) {
            $this->SupportVulTotalCount = $param["SupportVulTotalCount"];
        }

        if (array_key_exists("VulLibraryUpdateTime",$param) and $param["VulLibraryUpdateTime"] !== null) {
            $this->VulLibraryUpdateTime = $param["VulLibraryUpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
