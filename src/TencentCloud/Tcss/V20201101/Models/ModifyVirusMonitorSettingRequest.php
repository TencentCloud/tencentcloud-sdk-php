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
 * ModifyVirusMonitorSetting请求参数结构体
 *
 * @method boolean getEnableScan() 获取是否开启定期扫描
 * @method void setEnableScan(boolean $EnableScan) 设置是否开启定期扫描
 * @method boolean getScanPathAll() 获取扫描全部路径
 * @method void setScanPathAll(boolean $ScanPathAll) 设置扫描全部路径
 * @method integer getScanPathType() 获取当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径(扫描范围只能小于等于1)
 * @method void setScanPathType(integer $ScanPathType) 设置当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径(扫描范围只能小于等于1)
 * @method array getScanPath() 获取自选排除或扫描的地址
 * @method void setScanPath(array $ScanPath) 设置自选排除或扫描的地址
 */
class ModifyVirusMonitorSettingRequest extends AbstractModel
{
    /**
     * @var boolean 是否开启定期扫描
     */
    public $EnableScan;

    /**
     * @var boolean 扫描全部路径
     */
    public $ScanPathAll;

    /**
     * @var integer 当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径(扫描范围只能小于等于1)
     */
    public $ScanPathType;

    /**
     * @var array 自选排除或扫描的地址
     */
    public $ScanPath;

    /**
     * @param boolean $EnableScan 是否开启定期扫描
     * @param boolean $ScanPathAll 扫描全部路径
     * @param integer $ScanPathType 当ScanPathAll为true 生效 0扫描以下路径 1、扫描除以下路径(扫描范围只能小于等于1)
     * @param array $ScanPath 自选排除或扫描的地址
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
    }
}
