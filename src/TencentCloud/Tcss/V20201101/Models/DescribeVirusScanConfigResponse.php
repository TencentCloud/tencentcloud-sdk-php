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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVirusScanConfig返回参数结构体
 *
 * @method boolean getEnableScan() 获取是否开启定期扫描
 * @method void setEnableScan(boolean $EnableScan) 设置是否开启定期扫描
 * @method integer getCycle() 获取检测周期每隔多少天
 * @method void setCycle(integer $Cycle) 设置检测周期每隔多少天
 * @method string getBeginScanAt() 获取扫描开始时间
 * @method void setBeginScanAt(string $BeginScanAt) 设置扫描开始时间
 * @method integer getTimeout() 获取超时时长，单位小时
 * @method void setTimeout(integer $Timeout) 设置超时时长，单位小时
 * @method string getScanRangeType() 获取SCAN_NODE:扫描节点
SCAN_CONTAINER:扫描容器
 * @method void setScanRangeType(string $ScanRangeType) 设置SCAN_NODE:扫描节点
SCAN_CONTAINER:扫描容器
 * @method array getScanIDs() 获取自选扫描范围的容器id或者节点id 
 * @method void setScanIDs(array $ScanIDs) 设置自选扫描范围的容器id或者节点id 
 * @method array getScanPath() 获取自选排除或扫描的地址
 * @method void setScanPath(array $ScanPath) 设置自选排除或扫描的地址
 * @method string getScanPathMode() 获取扫描路径模式：
SCAN_PATH_ALL：全部路径
SCAN_PATH_DEFAULT：默认路径
SCAN_PATH_USER_DEFINE：用户自定义路径

 * @method void setScanPathMode(string $ScanPathMode) 设置扫描路径模式：
SCAN_PATH_ALL：全部路径
SCAN_PATH_DEFAULT：默认路径
SCAN_PATH_USER_DEFINE：用户自定义路径

 * @method boolean getIsIncludePath() 获取true:包含路径
false:排除路径
 * @method void setIsIncludePath(boolean $IsIncludePath) 设置true:包含路径
false:排除路径
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVirusScanConfigResponse extends AbstractModel
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
     * @var integer 超时时长，单位小时
     */
    public $Timeout;

    /**
     * @var string SCAN_NODE:扫描节点
SCAN_CONTAINER:扫描容器
     */
    public $ScanRangeType;

    /**
     * @var array 自选扫描范围的容器id或者节点id 
     */
    public $ScanIDs;

    /**
     * @var array 自选排除或扫描的地址
     */
    public $ScanPath;

    /**
     * @var string 扫描路径模式：
SCAN_PATH_ALL：全部路径
SCAN_PATH_DEFAULT：默认路径
SCAN_PATH_USER_DEFINE：用户自定义路径

     */
    public $ScanPathMode;

    /**
     * @var boolean true:包含路径
false:排除路径
     */
    public $IsIncludePath;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $EnableScan 是否开启定期扫描
     * @param integer $Cycle 检测周期每隔多少天
     * @param string $BeginScanAt 扫描开始时间
     * @param integer $Timeout 超时时长，单位小时
     * @param string $ScanRangeType SCAN_NODE:扫描节点
SCAN_CONTAINER:扫描容器
     * @param array $ScanIDs 自选扫描范围的容器id或者节点id 
     * @param array $ScanPath 自选排除或扫描的地址
     * @param string $ScanPathMode 扫描路径模式：
SCAN_PATH_ALL：全部路径
SCAN_PATH_DEFAULT：默认路径
SCAN_PATH_USER_DEFINE：用户自定义路径

     * @param boolean $IsIncludePath true:包含路径
false:排除路径
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
        if (array_key_exists("EnableScan",$param) and $param["EnableScan"] !== null) {
            $this->EnableScan = $param["EnableScan"];
        }

        if (array_key_exists("Cycle",$param) and $param["Cycle"] !== null) {
            $this->Cycle = $param["Cycle"];
        }

        if (array_key_exists("BeginScanAt",$param) and $param["BeginScanAt"] !== null) {
            $this->BeginScanAt = $param["BeginScanAt"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("ScanRangeType",$param) and $param["ScanRangeType"] !== null) {
            $this->ScanRangeType = $param["ScanRangeType"];
        }

        if (array_key_exists("ScanIDs",$param) and $param["ScanIDs"] !== null) {
            $this->ScanIDs = [];
            foreach ($param["ScanIDs"] as $key => $value){
                $obj = new ScanRangeInfo();
                $obj->deserialize($value);
                array_push($this->ScanIDs, $obj);
            }
        }

        if (array_key_exists("ScanPath",$param) and $param["ScanPath"] !== null) {
            $this->ScanPath = $param["ScanPath"];
        }

        if (array_key_exists("ScanPathMode",$param) and $param["ScanPathMode"] !== null) {
            $this->ScanPathMode = $param["ScanPathMode"];
        }

        if (array_key_exists("IsIncludePath",$param) and $param["IsIncludePath"] !== null) {
            $this->IsIncludePath = $param["IsIncludePath"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
