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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTraceData请求参数结构体
 *
 * @method string getTraceId() 获取溯源ID
 * @method void setTraceId(string $TraceId) 设置溯源ID
 * @method string getBatchId() 获取批次ID
 * @method void setBatchId(string $BatchId) 设置批次ID
 * @method string getTaskId() 获取生产溯源任务ID
 * @method void setTaskId(string $TaskId) 设置生产溯源任务ID
 * @method array getTraceItems() 获取溯源信息
 * @method void setTraceItems(array $TraceItems) 设置溯源信息
 * @method string getPhaseName() 获取溯源阶段名称
 * @method void setPhaseName(string $PhaseName) 设置溯源阶段名称
 * @method integer getType() 获取[无效] 类型
 * @method void setType(integer $Type) 设置[无效] 类型
 * @method string getCode() 获取[无效] 溯源码
 * @method void setCode(string $Code) 设置[无效] 溯源码
 * @method integer getRank() 获取[无效] 排序
 * @method void setRank(integer $Rank) 设置[无效] 排序
 * @method integer getPhase() 获取[无效] 溯源阶段 0:商品 1:通用 2:生产溯源 3:销售溯源
 * @method void setPhase(integer $Phase) 设置[无效] 溯源阶段 0:商品 1:通用 2:生产溯源 3:销售溯源
 * @method string getTraceTime() 获取[无效] 溯源时间
 * @method void setTraceTime(string $TraceTime) 设置[无效] 溯源时间
 * @method string getCreateTime() 获取[无效] 创建时间
 * @method void setCreateTime(string $CreateTime) 设置[无效] 创建时间
 * @method integer getChainStatus() 获取[无效] 上链状态
 * @method void setChainStatus(integer $ChainStatus) 设置[无效] 上链状态
 * @method string getChainTime() 获取[无效] 上链时间
 * @method void setChainTime(string $ChainTime) 设置[无效] 上链时间
 * @method ChainData getChainData() 获取[无效] 上链数据
 * @method void setChainData(ChainData $ChainData) 设置[无效] 上链数据
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method integer getStatus() 获取溯源状态 0: 无效, 1: 有效
 * @method void setStatus(integer $Status) 设置溯源状态 0: 无效, 1: 有效
 * @method PhaseData getPhaseData() 获取环节数据
 * @method void setPhaseData(PhaseData $PhaseData) 设置环节数据
 */
class ModifyTraceDataRequest extends AbstractModel
{
    /**
     * @var string 溯源ID
     */
    public $TraceId;

    /**
     * @var string 批次ID
     */
    public $BatchId;

    /**
     * @var string 生产溯源任务ID
     */
    public $TaskId;

    /**
     * @var array 溯源信息
     */
    public $TraceItems;

    /**
     * @var string 溯源阶段名称
     */
    public $PhaseName;

    /**
     * @var integer [无效] 类型
     */
    public $Type;

    /**
     * @var string [无效] 溯源码
     */
    public $Code;

    /**
     * @var integer [无效] 排序
     */
    public $Rank;

    /**
     * @var integer [无效] 溯源阶段 0:商品 1:通用 2:生产溯源 3:销售溯源
     */
    public $Phase;

    /**
     * @var string [无效] 溯源时间
     */
    public $TraceTime;

    /**
     * @var string [无效] 创建时间
     */
    public $CreateTime;

    /**
     * @var integer [无效] 上链状态
     */
    public $ChainStatus;

    /**
     * @var string [无效] 上链时间
     */
    public $ChainTime;

    /**
     * @var ChainData [无效] 上链数据
     */
    public $ChainData;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var integer 溯源状态 0: 无效, 1: 有效
     */
    public $Status;

    /**
     * @var PhaseData 环节数据
     */
    public $PhaseData;

    /**
     * @param string $TraceId 溯源ID
     * @param string $BatchId 批次ID
     * @param string $TaskId 生产溯源任务ID
     * @param array $TraceItems 溯源信息
     * @param string $PhaseName 溯源阶段名称
     * @param integer $Type [无效] 类型
     * @param string $Code [无效] 溯源码
     * @param integer $Rank [无效] 排序
     * @param integer $Phase [无效] 溯源阶段 0:商品 1:通用 2:生产溯源 3:销售溯源
     * @param string $TraceTime [无效] 溯源时间
     * @param string $CreateTime [无效] 创建时间
     * @param integer $ChainStatus [无效] 上链状态
     * @param string $ChainTime [无效] 上链时间
     * @param ChainData $ChainData [无效] 上链数据
     * @param integer $CorpId 企业ID
     * @param integer $Status 溯源状态 0: 无效, 1: 有效
     * @param PhaseData $PhaseData 环节数据
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
        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TraceItems",$param) and $param["TraceItems"] !== null) {
            $this->TraceItems = [];
            foreach ($param["TraceItems"] as $key => $value){
                $obj = new TraceItem();
                $obj->deserialize($value);
                array_push($this->TraceItems, $obj);
            }
        }

        if (array_key_exists("PhaseName",$param) and $param["PhaseName"] !== null) {
            $this->PhaseName = $param["PhaseName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Rank",$param) and $param["Rank"] !== null) {
            $this->Rank = $param["Rank"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("TraceTime",$param) and $param["TraceTime"] !== null) {
            $this->TraceTime = $param["TraceTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ChainStatus",$param) and $param["ChainStatus"] !== null) {
            $this->ChainStatus = $param["ChainStatus"];
        }

        if (array_key_exists("ChainTime",$param) and $param["ChainTime"] !== null) {
            $this->ChainTime = $param["ChainTime"];
        }

        if (array_key_exists("ChainData",$param) and $param["ChainData"] !== null) {
            $this->ChainData = new ChainData();
            $this->ChainData->deserialize($param["ChainData"]);
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PhaseData",$param) and $param["PhaseData"] !== null) {
            $this->PhaseData = new PhaseData();
            $this->PhaseData->deserialize($param["PhaseData"]);
        }
    }
}
