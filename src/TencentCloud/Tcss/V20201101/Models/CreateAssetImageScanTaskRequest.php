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
 * CreateAssetImageScanTask请求参数结构体
 *
 * @method boolean getAll() 获取是否扫描全部镜像
 * @method void setAll(boolean $All) 设置是否扫描全部镜像
 * @method array getImages() 获取需要扫描的镜像列表
 * @method void setImages(array $Images) 设置需要扫描的镜像列表
 * @method boolean getScanVul() 获取扫描漏洞
 * @method void setScanVul(boolean $ScanVul) 设置扫描漏洞
 * @method boolean getScanVirus() 获取扫描木马
 * @method void setScanVirus(boolean $ScanVirus) 设置扫描木马
 * @method boolean getScanRisk() 获取扫描风险
 * @method void setScanRisk(boolean $ScanRisk) 设置扫描风险
 */
class CreateAssetImageScanTaskRequest extends AbstractModel
{
    /**
     * @var boolean 是否扫描全部镜像
     */
    public $All;

    /**
     * @var array 需要扫描的镜像列表
     */
    public $Images;

    /**
     * @var boolean 扫描漏洞
     */
    public $ScanVul;

    /**
     * @var boolean 扫描木马
     */
    public $ScanVirus;

    /**
     * @var boolean 扫描风险
     */
    public $ScanRisk;

    /**
     * @param boolean $All 是否扫描全部镜像
     * @param array $Images 需要扫描的镜像列表
     * @param boolean $ScanVul 扫描漏洞
     * @param boolean $ScanVirus 扫描木马
     * @param boolean $ScanRisk 扫描风险
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("ScanVul",$param) and $param["ScanVul"] !== null) {
            $this->ScanVul = $param["ScanVul"];
        }

        if (array_key_exists("ScanVirus",$param) and $param["ScanVirus"] !== null) {
            $this->ScanVirus = $param["ScanVirus"];
        }

        if (array_key_exists("ScanRisk",$param) and $param["ScanRisk"] !== null) {
            $this->ScanRisk = $param["ScanRisk"];
        }
    }
}
