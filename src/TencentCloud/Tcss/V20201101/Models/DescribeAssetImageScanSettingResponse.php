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
 * DescribeAssetImageScanSetting返回参数结构体
 *
 * @method boolean getEnable() 获取开关
 * @method void setEnable(boolean $Enable) 设置开关
 * @method string getScanTime() 获取扫描时刻(完整时间;后端按0时区解析时分秒)
 * @method void setScanTime(string $ScanTime) 设置扫描时刻(完整时间;后端按0时区解析时分秒)
 * @method integer getScanPeriod() 获取扫描间隔
 * @method void setScanPeriod(integer $ScanPeriod) 设置扫描间隔
 * @method boolean getScanVirus() 获取扫描木马
 * @method void setScanVirus(boolean $ScanVirus) 设置扫描木马
 * @method boolean getScanRisk() 获取扫描敏感信息
 * @method void setScanRisk(boolean $ScanRisk) 设置扫描敏感信息
 * @method boolean getScanVul() 获取扫描漏洞
 * @method void setScanVul(boolean $ScanVul) 设置扫描漏洞
 * @method boolean getAll() 获取扫描全部镜像
 * @method void setAll(boolean $All) 设置扫描全部镜像
 * @method array getImages() 获取自定义扫描镜像
 * @method void setImages(array $Images) 设置自定义扫描镜像
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetImageScanSettingResponse extends AbstractModel
{
    /**
     * @var boolean 开关
     */
    public $Enable;

    /**
     * @var string 扫描时刻(完整时间;后端按0时区解析时分秒)
     */
    public $ScanTime;

    /**
     * @var integer 扫描间隔
     */
    public $ScanPeriod;

    /**
     * @var boolean 扫描木马
     */
    public $ScanVirus;

    /**
     * @var boolean 扫描敏感信息
     */
    public $ScanRisk;

    /**
     * @var boolean 扫描漏洞
     */
    public $ScanVul;

    /**
     * @var boolean 扫描全部镜像
     */
    public $All;

    /**
     * @var array 自定义扫描镜像
     */
    public $Images;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Enable 开关
     * @param string $ScanTime 扫描时刻(完整时间;后端按0时区解析时分秒)
     * @param integer $ScanPeriod 扫描间隔
     * @param boolean $ScanVirus 扫描木马
     * @param boolean $ScanRisk 扫描敏感信息
     * @param boolean $ScanVul 扫描漏洞
     * @param boolean $All 扫描全部镜像
     * @param array $Images 自定义扫描镜像
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("ScanPeriod",$param) and $param["ScanPeriod"] !== null) {
            $this->ScanPeriod = $param["ScanPeriod"];
        }

        if (array_key_exists("ScanVirus",$param) and $param["ScanVirus"] !== null) {
            $this->ScanVirus = $param["ScanVirus"];
        }

        if (array_key_exists("ScanRisk",$param) and $param["ScanRisk"] !== null) {
            $this->ScanRisk = $param["ScanRisk"];
        }

        if (array_key_exists("ScanVul",$param) and $param["ScanVul"] !== null) {
            $this->ScanVul = $param["ScanVul"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
