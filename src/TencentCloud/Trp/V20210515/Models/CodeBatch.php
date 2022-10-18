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
 * 批次
 *
 * @method string getBatchId() 获取批次号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchId(string $BatchId) 设置批次号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCorpId() 获取企业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpId(integer $CorpId) 设置企业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchCode() 获取批次编码(未使用)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchCode(string $BatchCode) 设置批次编码(未使用)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCodeCnt() 获取码数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeCnt(integer $CodeCnt) 设置码数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantId() 获取所属商户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantId(string $MerchantId) 设置所属商户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductId() 获取产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBatchType() 获取批次类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchType(integer $BatchType) 设置批次类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMpTpl() 获取微信模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMpTpl(string $MpTpl) 设置微信模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取批次状态 0: 未激活 1: 已激活 -1: 已冻结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置批次状态 0: 未激活 1: 已激活 -1: 已冻结
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantName() 获取所属商户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantName(string $MerchantName) 设置所属商户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method Ext getExt() 获取未使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExt(Ext $Ext) 设置未使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTplName() 获取模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTplName(string $TplName) 设置模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method Job getJob() 获取调度任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJob(Job $Job) 设置调度任务
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeBatch extends AbstractModel
{
    /**
     * @var string 批次号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchId;

    /**
     * @var integer 企业ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpId;

    /**
     * @var string 批次编码(未使用)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchCode;

    /**
     * @var integer 码数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeCnt;

    /**
     * @var string 所属商户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantId;

    /**
     * @var string 产品ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var integer 批次类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchType;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 微信模板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MpTpl;

    /**
     * @var integer 批次状态 0: 未激活 1: 已激活 -1: 已冻结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 所属商户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantName;

    /**
     * @var string 产品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var Ext 未使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ext;

    /**
     * @var string 模板名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TplName;

    /**
     * @var Job 调度任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Job;

    /**
     * @param string $BatchId 批次号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CorpId 企业ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchCode 批次编码(未使用)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CodeCnt 码数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantId 所属商户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductId 产品ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BatchType 批次类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MpTpl 微信模板
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 批次状态 0: 未激活 1: 已激活 -1: 已冻结
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantName 所属商户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 产品名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param Ext $Ext 未使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TplName 模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param Job $Job 调度任务
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("BatchCode",$param) and $param["BatchCode"] !== null) {
            $this->BatchCode = $param["BatchCode"];
        }

        if (array_key_exists("CodeCnt",$param) and $param["CodeCnt"] !== null) {
            $this->CodeCnt = $param["CodeCnt"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("BatchType",$param) and $param["BatchType"] !== null) {
            $this->BatchType = $param["BatchType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MpTpl",$param) and $param["MpTpl"] !== null) {
            $this->MpTpl = $param["MpTpl"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = new Ext();
            $this->Ext->deserialize($param["Ext"]);
        }

        if (array_key_exists("TplName",$param) and $param["TplName"] !== null) {
            $this->TplName = $param["TplName"];
        }

        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = new Job();
            $this->Job->deserialize($param["Job"]);
        }
    }
}
