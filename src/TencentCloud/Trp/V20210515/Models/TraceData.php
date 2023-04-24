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
 * 溯源数据
 *
 * @method string getTraceId() 获取溯源ID
 * @method void setTraceId(string $TraceId) 设置溯源ID
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method integer getType() 获取码类型 0: 批次, 1: 码, 2: 生产任务
 * @method void setType(integer $Type) 设置码类型 0: 批次, 1: 码, 2: 生产任务
 * @method string getCode() 获取码值，跟码类型一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置码值，跟码类型一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRank() 获取排序，在Phase相同情况下，值越小排名靠前
 * @method void setRank(integer $Rank) 设置排序，在Phase相同情况下，值越小排名靠前
 * @method integer getPhase() 获取溯源阶段 0:商品 1:通用 2:生产溯源 3:销售溯源
 * @method void setPhase(integer $Phase) 设置溯源阶段 0:商品 1:通用 2:生产溯源 3:销售溯源
 * @method string getPhaseName() 获取溯源环节名称
 * @method void setPhaseName(string $PhaseName) 设置溯源环节名称
 * @method string getTraceTime() 获取溯源时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTraceTime(string $TraceTime) 设置溯源时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTraceItems() 获取无
 * @method void setTraceItems(array $TraceItems) 设置无
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChainStatus() 获取上链状态 0: 未上链 1: 上链中 2: 已上链 -1: 异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChainStatus(integer $ChainStatus) 设置上链状态 0: 未上链 1: 上链中 2: 已上链 -1: 异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChainTime() 获取上链时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChainTime(string $ChainTime) 设置上链时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChainData getChainData() 获取上链数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChainData(ChainData $ChainData) 设置上链数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method PhaseData getPhaseData() 获取溯源阶段配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhaseData(PhaseData $PhaseData) 设置溯源阶段配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取溯源阶段状态 0: 无效, 1: 有效
 * @method void setStatus(integer $Status) 设置溯源阶段状态 0: 无效, 1: 有效
 */
class TraceData extends AbstractModel
{
    /**
     * @var string 溯源ID
     */
    public $TraceId;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var integer 码类型 0: 批次, 1: 码, 2: 生产任务
     */
    public $Type;

    /**
     * @var string 码值，跟码类型一一对应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var integer 排序，在Phase相同情况下，值越小排名靠前
     */
    public $Rank;

    /**
     * @var integer 溯源阶段 0:商品 1:通用 2:生产溯源 3:销售溯源
     */
    public $Phase;

    /**
     * @var string 溯源环节名称
     */
    public $PhaseName;

    /**
     * @var string 溯源时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TraceTime;

    /**
     * @var array 无
     */
    public $TraceItems;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 上链状态 0: 未上链 1: 上链中 2: 已上链 -1: 异常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChainStatus;

    /**
     * @var string 上链时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChainTime;

    /**
     * @var ChainData 上链数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChainData;

    /**
     * @var PhaseData 溯源阶段配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhaseData;

    /**
     * @var integer 溯源阶段状态 0: 无效, 1: 有效
     */
    public $Status;

    /**
     * @param string $TraceId 溯源ID
     * @param integer $CorpId 企业ID
     * @param integer $Type 码类型 0: 批次, 1: 码, 2: 生产任务
     * @param string $Code 码值，跟码类型一一对应
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Rank 排序，在Phase相同情况下，值越小排名靠前
     * @param integer $Phase 溯源阶段 0:商品 1:通用 2:生产溯源 3:销售溯源
     * @param string $PhaseName 溯源环节名称
     * @param string $TraceTime 溯源时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TraceItems 无
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChainStatus 上链状态 0: 未上链 1: 上链中 2: 已上链 -1: 异常
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChainTime 上链时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChainData $ChainData 上链数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param PhaseData $PhaseData 溯源阶段配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 溯源阶段状态 0: 无效, 1: 有效
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

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
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

        if (array_key_exists("PhaseName",$param) and $param["PhaseName"] !== null) {
            $this->PhaseName = $param["PhaseName"];
        }

        if (array_key_exists("TraceTime",$param) and $param["TraceTime"] !== null) {
            $this->TraceTime = $param["TraceTime"];
        }

        if (array_key_exists("TraceItems",$param) and $param["TraceItems"] !== null) {
            $this->TraceItems = [];
            foreach ($param["TraceItems"] as $key => $value){
                $obj = new TraceItem();
                $obj->deserialize($value);
                array_push($this->TraceItems, $obj);
            }
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

        if (array_key_exists("PhaseData",$param) and $param["PhaseData"] !== null) {
            $this->PhaseData = new PhaseData();
            $this->PhaseData->deserialize($param["PhaseData"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
