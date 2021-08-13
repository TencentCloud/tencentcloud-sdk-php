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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAssetScan请求参数结构体
 *
 * @method integer getScanRange() 获取扫描范围：1端口, 2端口+漏扫
 * @method void setScanRange(integer $ScanRange) 设置扫描范围：1端口, 2端口+漏扫
 * @method string getScanDeep() 获取扫描深度：'heavy', 'medium', 'light'
 * @method void setScanDeep(string $ScanDeep) 设置扫描深度：'heavy', 'medium', 'light'
 * @method integer getRangeType() 获取扫描类型：1立即扫描 2 周期任务
 * @method void setRangeType(integer $RangeType) 设置扫描类型：1立即扫描 2 周期任务
 * @method string getScanPeriod() 获取RangeType为2 是必须添加，定时任务时间
 * @method void setScanPeriod(string $ScanPeriod) 设置RangeType为2 是必须添加，定时任务时间
 * @method array getScanFilterIp() 获取立即扫描这个字段传过滤的扫描集合
 * @method void setScanFilterIp(array $ScanFilterIp) 设置立即扫描这个字段传过滤的扫描集合
 * @method integer getScanType() 获取1全量2单个
 * @method void setScanType(integer $ScanType) 设置1全量2单个
 */
class ModifyAssetScanRequest extends AbstractModel
{
    /**
     * @var integer 扫描范围：1端口, 2端口+漏扫
     */
    public $ScanRange;

    /**
     * @var string 扫描深度：'heavy', 'medium', 'light'
     */
    public $ScanDeep;

    /**
     * @var integer 扫描类型：1立即扫描 2 周期任务
     */
    public $RangeType;

    /**
     * @var string RangeType为2 是必须添加，定时任务时间
     */
    public $ScanPeriod;

    /**
     * @var array 立即扫描这个字段传过滤的扫描集合
     */
    public $ScanFilterIp;

    /**
     * @var integer 1全量2单个
     */
    public $ScanType;

    /**
     * @param integer $ScanRange 扫描范围：1端口, 2端口+漏扫
     * @param string $ScanDeep 扫描深度：'heavy', 'medium', 'light'
     * @param integer $RangeType 扫描类型：1立即扫描 2 周期任务
     * @param string $ScanPeriod RangeType为2 是必须添加，定时任务时间
     * @param array $ScanFilterIp 立即扫描这个字段传过滤的扫描集合
     * @param integer $ScanType 1全量2单个
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
        if (array_key_exists("ScanRange",$param) and $param["ScanRange"] !== null) {
            $this->ScanRange = $param["ScanRange"];
        }

        if (array_key_exists("ScanDeep",$param) and $param["ScanDeep"] !== null) {
            $this->ScanDeep = $param["ScanDeep"];
        }

        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("ScanPeriod",$param) and $param["ScanPeriod"] !== null) {
            $this->ScanPeriod = $param["ScanPeriod"];
        }

        if (array_key_exists("ScanFilterIp",$param) and $param["ScanFilterIp"] !== null) {
            $this->ScanFilterIp = $param["ScanFilterIp"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }
    }
}
