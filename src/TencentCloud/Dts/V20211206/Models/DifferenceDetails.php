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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 校验得出的不一致详情
 *
 * @method string getResult() 获取校验结果
 * @method void setResult(string $Result) 设置校验结果
 * @method string getSrcGtidSets() 获取源库gtid set
 * @method void setSrcGtidSets(string $SrcGtidSets) 设置源库gtid set
 * @method string getDstGtidSets() 获取目标库gtid set
 * @method void setDstGtidSets(string $DstGtidSets) 设置目标库gtid set
 * @method string getDiffSrc() 获取源库差异的gtid set
 * @method void setDiffSrc(string $DiffSrc) 设置源库差异的gtid set
 * @method array getDiffSrcTables() 获取源库中不一致的表
 * @method void setDiffSrcTables(array $DiffSrcTables) 设置源库中不一致的表
 * @method string getDiffDst() 获取目标库差异的gtid set
 * @method void setDiffDst(string $DiffDst) 设置目标库差异的gtid set
 * @method string getCompareTimestamp() 获取校验结束时间
 * @method void setCompareTimestamp(string $CompareTimestamp) 设置校验结束时间
 * @method array getDiffSrcTablesNeedSync() 获取同步范围内的不一致表
 * @method void setDiffSrcTablesNeedSync(array $DiffSrcTablesNeedSync) 设置同步范围内的不一致表
 * @method boolean getDiffSrcIsNeedSync() 获取同步范围内是否存在不一致的表
 * @method void setDiffSrcIsNeedSync(boolean $DiffSrcIsNeedSync) 设置同步范围内是否存在不一致的表
 */
class DifferenceDetails extends AbstractModel
{
    /**
     * @var string 校验结果
     */
    public $Result;

    /**
     * @var string 源库gtid set
     */
    public $SrcGtidSets;

    /**
     * @var string 目标库gtid set
     */
    public $DstGtidSets;

    /**
     * @var string 源库差异的gtid set
     */
    public $DiffSrc;

    /**
     * @var array 源库中不一致的表
     */
    public $DiffSrcTables;

    /**
     * @var string 目标库差异的gtid set
     */
    public $DiffDst;

    /**
     * @var string 校验结束时间
     */
    public $CompareTimestamp;

    /**
     * @var array 同步范围内的不一致表
     */
    public $DiffSrcTablesNeedSync;

    /**
     * @var boolean 同步范围内是否存在不一致的表
     */
    public $DiffSrcIsNeedSync;

    /**
     * @param string $Result 校验结果
     * @param string $SrcGtidSets 源库gtid set
     * @param string $DstGtidSets 目标库gtid set
     * @param string $DiffSrc 源库差异的gtid set
     * @param array $DiffSrcTables 源库中不一致的表
     * @param string $DiffDst 目标库差异的gtid set
     * @param string $CompareTimestamp 校验结束时间
     * @param array $DiffSrcTablesNeedSync 同步范围内的不一致表
     * @param boolean $DiffSrcIsNeedSync 同步范围内是否存在不一致的表
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("SrcGtidSets",$param) and $param["SrcGtidSets"] !== null) {
            $this->SrcGtidSets = $param["SrcGtidSets"];
        }

        if (array_key_exists("DstGtidSets",$param) and $param["DstGtidSets"] !== null) {
            $this->DstGtidSets = $param["DstGtidSets"];
        }

        if (array_key_exists("DiffSrc",$param) and $param["DiffSrc"] !== null) {
            $this->DiffSrc = $param["DiffSrc"];
        }

        if (array_key_exists("DiffSrcTables",$param) and $param["DiffSrcTables"] !== null) {
            $this->DiffSrcTables = $param["DiffSrcTables"];
        }

        if (array_key_exists("DiffDst",$param) and $param["DiffDst"] !== null) {
            $this->DiffDst = $param["DiffDst"];
        }

        if (array_key_exists("CompareTimestamp",$param) and $param["CompareTimestamp"] !== null) {
            $this->CompareTimestamp = $param["CompareTimestamp"];
        }

        if (array_key_exists("DiffSrcTablesNeedSync",$param) and $param["DiffSrcTablesNeedSync"] !== null) {
            $this->DiffSrcTablesNeedSync = $param["DiffSrcTablesNeedSync"];
        }

        if (array_key_exists("DiffSrcIsNeedSync",$param) and $param["DiffSrcIsNeedSync"] !== null) {
            $this->DiffSrcIsNeedSync = $param["DiffSrcIsNeedSync"];
        }
    }
}
