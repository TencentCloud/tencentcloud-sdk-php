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
 * DescribeVirusMonitorSetting返回参数结构体
 *
 * @method boolean getEnableScan() 获取是否开启实时监控
 * @method void setEnableScan(boolean $EnableScan) 设置是否开启实时监控
 * @method boolean getScanPathAll() 获取扫描全部路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanPathAll(boolean $ScanPathAll) 设置扫描全部路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanPathType() 获取当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanPathType(integer $ScanPathType) 设置当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getScanPath() 获取自选排除或扫描的地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanPath(array $ScanPath) 设置自选排除或扫描的地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanPathMode() 获取扫描路径模式：
SCAN_PATH_ALL：全部路径
SCAN_PATH_DEFAULT：默认路径
SCAN_PATH_USER_DEFINE：用户自定义路径

 * @method void setScanPathMode(string $ScanPathMode) 设置扫描路径模式：
SCAN_PATH_ALL：全部路径
SCAN_PATH_DEFAULT：默认路径
SCAN_PATH_USER_DEFINE：用户自定义路径

 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVirusMonitorSettingResponse extends AbstractModel
{
    /**
     * @var boolean 是否开启实时监控
     */
    public $EnableScan;

    /**
     * @var boolean 扫描全部路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanPathAll;

    /**
     * @var integer 当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanPathType;

    /**
     * @var array 自选排除或扫描的地址
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $EnableScan 是否开启实时监控
     * @param boolean $ScanPathAll 扫描全部路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanPathType 当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ScanPath 自选排除或扫描的地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanPathMode 扫描路径模式：
SCAN_PATH_ALL：全部路径
SCAN_PATH_DEFAULT：默认路径
SCAN_PATH_USER_DEFINE：用户自定义路径

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

        if (array_key_exists("ScanPathAll",$param) and $param["ScanPathAll"] !== null) {
            $this->ScanPathAll = $param["ScanPathAll"];
        }

        if (array_key_exists("ScanPathType",$param) and $param["ScanPathType"] !== null) {
            $this->ScanPathType = $param["ScanPathType"];
        }

        if (array_key_exists("ScanPath",$param) and $param["ScanPath"] !== null) {
            $this->ScanPath = $param["ScanPath"];
        }

        if (array_key_exists("ScanPathMode",$param) and $param["ScanPathMode"] !== null) {
            $this->ScanPathMode = $param["ScanPathMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
