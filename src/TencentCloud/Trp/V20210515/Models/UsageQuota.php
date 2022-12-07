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
 * 付费信息使用量
 *
 * @method integer getCorpId() 获取企业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpId(integer $CorpId) 设置企业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFactoryCnt() 获取商户配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFactoryCnt(integer $FactoryCnt) 设置商户配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getItemCnt() 获取商品数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemCnt(integer $ItemCnt) 设置商品数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTrackCnt() 获取溯源码量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrackCnt(integer $TrackCnt) 设置溯源码量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSaleCnt() 获取营销码额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSaleCnt(integer $SaleCnt) 设置营销码额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChainCnt() 获取区块链上链次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChainCnt(integer $ChainCnt) 设置区块链上链次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskCnt() 获取营销风控次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCnt(integer $RiskCnt) 设置营销风控次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsageQuota extends AbstractModel
{
    /**
     * @var integer 企业ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpId;

    /**
     * @var integer 商户配额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FactoryCnt;

    /**
     * @var integer 商品数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemCnt;

    /**
     * @var integer 溯源码量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrackCnt;

    /**
     * @var integer 营销码额度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SaleCnt;

    /**
     * @var integer 区块链上链次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChainCnt;

    /**
     * @var integer 营销风控次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCnt;

    /**
     * @var string 时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $CorpId 企业ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FactoryCnt 商户配额
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ItemCnt 商品数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TrackCnt 溯源码量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SaleCnt 营销码额度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChainCnt 区块链上链次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskCnt 营销风控次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("FactoryCnt",$param) and $param["FactoryCnt"] !== null) {
            $this->FactoryCnt = $param["FactoryCnt"];
        }

        if (array_key_exists("ItemCnt",$param) and $param["ItemCnt"] !== null) {
            $this->ItemCnt = $param["ItemCnt"];
        }

        if (array_key_exists("TrackCnt",$param) and $param["TrackCnt"] !== null) {
            $this->TrackCnt = $param["TrackCnt"];
        }

        if (array_key_exists("SaleCnt",$param) and $param["SaleCnt"] !== null) {
            $this->SaleCnt = $param["SaleCnt"];
        }

        if (array_key_exists("ChainCnt",$param) and $param["ChainCnt"] !== null) {
            $this->ChainCnt = $param["ChainCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
