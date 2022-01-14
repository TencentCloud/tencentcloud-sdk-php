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
 * DescribeVirusScanSetting返回参数结构体
 *
 * @method boolean getEnableScan() 获取是否开启定期扫描
 * @method void setEnableScan(boolean $EnableScan) 设置是否开启定期扫描
 * @method integer getCycle() 获取检测周期每隔多少天
 * @method void setCycle(integer $Cycle) 设置检测周期每隔多少天
 * @method string getBeginScanAt() 获取扫描开始时间
 * @method void setBeginScanAt(string $BeginScanAt) 设置扫描开始时间
 * @method boolean getScanPathAll() 获取扫描全部路径
 * @method void setScanPathAll(boolean $ScanPathAll) 设置扫描全部路径
 * @method integer getScanPathType() 获取当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径
 * @method void setScanPathType(integer $ScanPathType) 设置当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径
 * @method integer getTimeout() 获取超时时长，单位小时
 * @method void setTimeout(integer $Timeout) 设置超时时长，单位小时
 * @method integer getScanRangeType() 获取扫描范围0容器1主机节点
 * @method void setScanRangeType(integer $ScanRangeType) 设置扫描范围0容器1主机节点
 * @method boolean getScanRangeAll() 获取true 全选，false 自选
 * @method void setScanRangeAll(boolean $ScanRangeAll) 设置true 全选，false 自选
 * @method array getScanIds() 获取自选扫描范围的容器id或者主机id 根据ScanRangeType决定
 * @method void setScanIds(array $ScanIds) 设置自选扫描范围的容器id或者主机id 根据ScanRangeType决定
 * @method array getScanPath() 获取自选排除或扫描的地址
 * @method void setScanPath(array $ScanPath) 设置自选排除或扫描的地址
 * @method integer getClickTimeout() 获取一键检测的超时设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClickTimeout(integer $ClickTimeout) 设置一键检测的超时设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVirusScanSettingResponse extends AbstractModel
{
    /**
     * @var boolean 是否开启定期扫描
     */
    public $EnableScan;

    /**
     * @var integer 检测周期每隔多少天
     */
    public $Cycle;

    /**
     * @var string 扫描开始时间
     */
    public $BeginScanAt;

    /**
     * @var boolean 扫描全部路径
     */
    public $ScanPathAll;

    /**
     * @var integer 当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径
     */
    public $ScanPathType;

    /**
     * @var integer 超时时长，单位小时
     */
    public $Timeout;

    /**
     * @var integer 扫描范围0容器1主机节点
     */
    public $ScanRangeType;

    /**
     * @var boolean true 全选，false 自选
     */
    public $ScanRangeAll;

    /**
     * @var array 自选扫描范围的容器id或者主机id 根据ScanRangeType决定
     */
    public $ScanIds;

    /**
     * @var array 自选排除或扫描的地址
     */
    public $ScanPath;

    /**
     * @var integer 一键检测的超时设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClickTimeout;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $EnableScan 是否开启定期扫描
     * @param integer $Cycle 检测周期每隔多少天
     * @param string $BeginScanAt 扫描开始时间
     * @param boolean $ScanPathAll 扫描全部路径
     * @param integer $ScanPathType 当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径
     * @param integer $Timeout 超时时长，单位小时
     * @param integer $ScanRangeType 扫描范围0容器1主机节点
     * @param boolean $ScanRangeAll true 全选，false 自选
     * @param array $ScanIds 自选扫描范围的容器id或者主机id 根据ScanRangeType决定
     * @param array $ScanPath 自选排除或扫描的地址
     * @param integer $ClickTimeout 一键检测的超时设置
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
        if (array_key_exists("EnableScan",$param) and $param["EnableScan"] !== null) {
            $this->EnableScan = $param["EnableScan"];
        }

        if (array_key_exists("Cycle",$param) and $param["Cycle"] !== null) {
            $this->Cycle = $param["Cycle"];
        }

        if (array_key_exists("BeginScanAt",$param) and $param["BeginScanAt"] !== null) {
            $this->BeginScanAt = $param["BeginScanAt"];
        }

        if (array_key_exists("ScanPathAll",$param) and $param["ScanPathAll"] !== null) {
            $this->ScanPathAll = $param["ScanPathAll"];
        }

        if (array_key_exists("ScanPathType",$param) and $param["ScanPathType"] !== null) {
            $this->ScanPathType = $param["ScanPathType"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("ScanRangeType",$param) and $param["ScanRangeType"] !== null) {
            $this->ScanRangeType = $param["ScanRangeType"];
        }

        if (array_key_exists("ScanRangeAll",$param) and $param["ScanRangeAll"] !== null) {
            $this->ScanRangeAll = $param["ScanRangeAll"];
        }

        if (array_key_exists("ScanIds",$param) and $param["ScanIds"] !== null) {
            $this->ScanIds = $param["ScanIds"];
        }

        if (array_key_exists("ScanPath",$param) and $param["ScanPath"] !== null) {
            $this->ScanPath = $param["ScanPath"];
        }

        if (array_key_exists("ClickTimeout",$param) and $param["ClickTimeout"] !== null) {
            $this->ClickTimeout = $param["ClickTimeout"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
