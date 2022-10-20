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
 * DescribeVirusManualScanEstimateTimeout请求参数结构体
 *
 * @method integer getScanRangeType() 获取扫描范围0容器1主机节点
 * @method void setScanRangeType(integer $ScanRangeType) 设置扫描范围0容器1主机节点
 * @method boolean getScanRangeAll() 获取true 全选，false 自选
 * @method void setScanRangeAll(boolean $ScanRangeAll) 设置true 全选，false 自选
 * @method array getScanIds() 获取自选扫描范围的容器id或者主机id 根据ScanRangeType决定
 * @method void setScanIds(array $ScanIds) 设置自选扫描范围的容器id或者主机id 根据ScanRangeType决定
 */
class DescribeVirusManualScanEstimateTimeoutRequest extends AbstractModel
{
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
     * @param integer $ScanRangeType 扫描范围0容器1主机节点
     * @param boolean $ScanRangeAll true 全选，false 自选
     * @param array $ScanIds 自选扫描范围的容器id或者主机id 根据ScanRangeType决定
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
        if (array_key_exists("ScanRangeType",$param) and $param["ScanRangeType"] !== null) {
            $this->ScanRangeType = $param["ScanRangeType"];
        }

        if (array_key_exists("ScanRangeAll",$param) and $param["ScanRangeAll"] !== null) {
            $this->ScanRangeAll = $param["ScanRangeAll"];
        }

        if (array_key_exists("ScanIds",$param) and $param["ScanIds"] !== null) {
            $this->ScanIds = $param["ScanIds"];
        }
    }
}
