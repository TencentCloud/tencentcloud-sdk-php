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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SaDivulgeScanRuleMutate请求参数结构体
 *
 * @method string getId() 获取Id
 * @method void setId(string $Id) 设置Id
 * @method string getDivulgeSoure() 获取DivulgeSoure
 * @method void setDivulgeSoure(string $DivulgeSoure) 设置DivulgeSoure
 * @method string getDivulgeSoureUrl() 获取DivulgeSoureUrl
 * @method void setDivulgeSoureUrl(string $DivulgeSoureUrl) 设置DivulgeSoureUrl
 * @method string getRuleName() 获取RuleName
 * @method void setRuleName(string $RuleName) 设置RuleName
 * @method string getRuleWord() 获取RuleWord
 * @method void setRuleWord(string $RuleWord) 设置RuleWord
 * @method string getScanStatus() 获取ScanStatus
 * @method void setScanStatus(string $ScanStatus) 设置ScanStatus
 * @method string getDivulgeType() 获取DivulgeType
 * @method void setDivulgeType(string $DivulgeType) 设置DivulgeType
 * @method string getRepairAdvice() 获取RepairAdvice
 * @method void setRepairAdvice(string $RepairAdvice) 设置RepairAdvice
 */
class SaDivulgeScanRuleMutateRequest extends AbstractModel
{
    /**
     * @var string Id
     */
    public $Id;

    /**
     * @var string DivulgeSoure
     */
    public $DivulgeSoure;

    /**
     * @var string DivulgeSoureUrl
     */
    public $DivulgeSoureUrl;

    /**
     * @var string RuleName
     */
    public $RuleName;

    /**
     * @var string RuleWord
     */
    public $RuleWord;

    /**
     * @var string ScanStatus
     */
    public $ScanStatus;

    /**
     * @var string DivulgeType
     */
    public $DivulgeType;

    /**
     * @var string RepairAdvice
     */
    public $RepairAdvice;

    /**
     * @param string $Id Id
     * @param string $DivulgeSoure DivulgeSoure
     * @param string $DivulgeSoureUrl DivulgeSoureUrl
     * @param string $RuleName RuleName
     * @param string $RuleWord RuleWord
     * @param string $ScanStatus ScanStatus
     * @param string $DivulgeType DivulgeType
     * @param string $RepairAdvice RepairAdvice
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DivulgeSoure",$param) and $param["DivulgeSoure"] !== null) {
            $this->DivulgeSoure = $param["DivulgeSoure"];
        }

        if (array_key_exists("DivulgeSoureUrl",$param) and $param["DivulgeSoureUrl"] !== null) {
            $this->DivulgeSoureUrl = $param["DivulgeSoureUrl"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleWord",$param) and $param["RuleWord"] !== null) {
            $this->RuleWord = $param["RuleWord"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("DivulgeType",$param) and $param["DivulgeType"] !== null) {
            $this->DivulgeType = $param["DivulgeType"];
        }

        if (array_key_exists("RepairAdvice",$param) and $param["RepairAdvice"] !== null) {
            $this->RepairAdvice = $param["RepairAdvice"];
        }
    }
}
