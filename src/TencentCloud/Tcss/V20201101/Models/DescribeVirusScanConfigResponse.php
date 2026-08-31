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
 * @method boolean getEnableScan() 获取<p>是否开启定期扫描</p>
 * @method void setEnableScan(boolean $EnableScan) 设置<p>是否开启定期扫描</p>
 * @method integer getCycle() 获取<p>检测周期每隔多少天</p>
 * @method void setCycle(integer $Cycle) 设置<p>检测周期每隔多少天</p>
 * @method string getBeginScanAt() 获取<p>扫描开始时间</p>
 * @method void setBeginScanAt(string $BeginScanAt) 设置<p>扫描开始时间</p>
 * @method integer getTimeout() 获取<p>超时时长，单位小时</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时长，单位小时</p>
 * @method string getScanRangeType() 获取<p>SCAN_NODE:扫描节点<br>SCAN_CONTAINER:扫描容器</p>
 * @method void setScanRangeType(string $ScanRangeType) 设置<p>SCAN_NODE:扫描节点<br>SCAN_CONTAINER:扫描容器</p>
 * @method array getScanIDs() 获取<p>自选扫描范围的容器id或者节点id</p>
 * @method void setScanIDs(array $ScanIDs) 设置<p>自选扫描范围的容器id或者节点id</p>
 * @method array getScanPath() 获取<p>自选排除或扫描的地址</p>
 * @method void setScanPath(array $ScanPath) 设置<p>自选排除或扫描的地址</p>
 * @method string getScanPathMode() 获取<p>扫描路径模式：<br>SCAN_PATH_ALL：全部路径<br>SCAN_PATH_DEFAULT：默认路径<br>SCAN_PATH_USER_DEFINE：用户自定义路径</p>
 * @method void setScanPathMode(string $ScanPathMode) 设置<p>扫描路径模式：<br>SCAN_PATH_ALL：全部路径<br>SCAN_PATH_DEFAULT：默认路径<br>SCAN_PATH_USER_DEFINE：用户自定义路径</p>
 * @method boolean getIsIncludePath() 获取<p>true:包含路径<br>false:排除路径</p>
 * @method void setIsIncludePath(boolean $IsIncludePath) 设置<p>true:包含路径<br>false:排除路径</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVirusScanConfigResponse extends AbstractModel
{
    /**
     * @var boolean <p>是否开启定期扫描</p>
     */
    public $EnableScan;

    /**
     * @var integer <p>检测周期每隔多少天</p>
     */
    public $Cycle;

    /**
     * @var string <p>扫描开始时间</p>
     */
    public $BeginScanAt;

    /**
     * @var integer <p>超时时长，单位小时</p>
     */
    public $Timeout;

    /**
     * @var string <p>SCAN_NODE:扫描节点<br>SCAN_CONTAINER:扫描容器</p>
     */
    public $ScanRangeType;

    /**
     * @var array <p>自选扫描范围的容器id或者节点id</p>
     */
    public $ScanIDs;

    /**
     * @var array <p>自选排除或扫描的地址</p>
     */
    public $ScanPath;

    /**
     * @var string <p>扫描路径模式：<br>SCAN_PATH_ALL：全部路径<br>SCAN_PATH_DEFAULT：默认路径<br>SCAN_PATH_USER_DEFINE：用户自定义路径</p>
     */
    public $ScanPathMode;

    /**
     * @var boolean <p>true:包含路径<br>false:排除路径</p>
     */
    public $IsIncludePath;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $EnableScan <p>是否开启定期扫描</p>
     * @param integer $Cycle <p>检测周期每隔多少天</p>
     * @param string $BeginScanAt <p>扫描开始时间</p>
     * @param integer $Timeout <p>超时时长，单位小时</p>
     * @param string $ScanRangeType <p>SCAN_NODE:扫描节点<br>SCAN_CONTAINER:扫描容器</p>
     * @param array $ScanIDs <p>自选扫描范围的容器id或者节点id</p>
     * @param array $ScanPath <p>自选排除或扫描的地址</p>
     * @param string $ScanPathMode <p>扫描路径模式：<br>SCAN_PATH_ALL：全部路径<br>SCAN_PATH_DEFAULT：默认路径<br>SCAN_PATH_USER_DEFINE：用户自定义路径</p>
     * @param boolean $IsIncludePath <p>true:包含路径<br>false:排除路径</p>
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
