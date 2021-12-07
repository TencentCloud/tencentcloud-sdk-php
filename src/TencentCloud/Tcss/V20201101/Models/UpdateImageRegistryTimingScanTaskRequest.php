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
 * UpdateImageRegistryTimingScanTask请求参数结构体
 *
 * @method integer getScanPeriod() 获取定时扫描周期
 * @method void setScanPeriod(integer $ScanPeriod) 设置定时扫描周期
 * @method boolean getEnable() 获取定时扫描开关
 * @method void setEnable(boolean $Enable) 设置定时扫描开关
 * @method string getScanTime() 获取定时扫描的时间
 * @method void setScanTime(string $ScanTime) 设置定时扫描的时间
 * @method array getScanType() 获取扫描木马类型数组
 * @method void setScanType(array $ScanType) 设置扫描木马类型数组
 * @method array getImages() 获取扫描镜像
 * @method void setImages(array $Images) 设置扫描镜像
 * @method boolean getAll() 获取是否扫描所有
 * @method void setAll(boolean $All) 设置是否扫描所有
 * @method array getId() 获取扫描镜像Id
 * @method void setId(array $Id) 设置扫描镜像Id
 */
class UpdateImageRegistryTimingScanTaskRequest extends AbstractModel
{
    /**
     * @var integer 定时扫描周期
     */
    public $ScanPeriod;

    /**
     * @var boolean 定时扫描开关
     */
    public $Enable;

    /**
     * @var string 定时扫描的时间
     */
    public $ScanTime;

    /**
     * @var array 扫描木马类型数组
     */
    public $ScanType;

    /**
     * @var array 扫描镜像
     */
    public $Images;

    /**
     * @var boolean 是否扫描所有
     */
    public $All;

    /**
     * @var array 扫描镜像Id
     */
    public $Id;

    /**
     * @param integer $ScanPeriod 定时扫描周期
     * @param boolean $Enable 定时扫描开关
     * @param string $ScanTime 定时扫描的时间
     * @param array $ScanType 扫描木马类型数组
     * @param array $Images 扫描镜像
     * @param boolean $All 是否扫描所有
     * @param array $Id 扫描镜像Id
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
        if (array_key_exists("ScanPeriod",$param) and $param["ScanPeriod"] !== null) {
            $this->ScanPeriod = $param["ScanPeriod"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
