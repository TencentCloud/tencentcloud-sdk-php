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
 * RenewImageAuthorizeState请求参数结构体
 *
 * @method boolean getAllImages() 获取是否全部未授权镜像
 * @method void setAllImages(boolean $AllImages) 设置是否全部未授权镜像
 * @method array getImageIds() 获取镜像ids
 * @method void setImageIds(array $ImageIds) 设置镜像ids
 * @method boolean getNeedScan() 获取是否授权后自动扫描
 * @method void setNeedScan(boolean $NeedScan) 设置是否授权后自动扫描
 * @method array getScanType() 获取扫描类型
 * @method void setScanType(array $ScanType) 设置扫描类型
 */
class RenewImageAuthorizeStateRequest extends AbstractModel
{
    /**
     * @var boolean 是否全部未授权镜像
     */
    public $AllImages;

    /**
     * @var array 镜像ids
     */
    public $ImageIds;

    /**
     * @var boolean 是否授权后自动扫描
     */
    public $NeedScan;

    /**
     * @var array 扫描类型
     */
    public $ScanType;

    /**
     * @param boolean $AllImages 是否全部未授权镜像
     * @param array $ImageIds 镜像ids
     * @param boolean $NeedScan 是否授权后自动扫描
     * @param array $ScanType 扫描类型
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
        if (array_key_exists("AllImages",$param) and $param["AllImages"] !== null) {
            $this->AllImages = $param["AllImages"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("NeedScan",$param) and $param["NeedScan"] !== null) {
            $this->NeedScan = $param["NeedScan"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }
    }
}
