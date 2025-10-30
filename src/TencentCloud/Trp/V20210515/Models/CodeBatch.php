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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批次
 *
 * @method string getBatchId() 获取批次号
 * @method void setBatchId(string $BatchId) 设置批次号
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method string getBatchCode() 获取批次编码(未使用)
 * @method void setBatchCode(string $BatchCode) 设置批次编码(未使用)
 * @method integer getCodeCnt() 获取码数量
 * @method void setCodeCnt(integer $CodeCnt) 设置码数量
 * @method string getMerchantId() 获取所属商户ID
 * @method void setMerchantId(string $MerchantId) 设置所属商户ID
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getBatchType() 获取批次类型
 * @method void setBatchType(integer $BatchType) 设置批次类型
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getMpTpl() 获取微信模板
 * @method void setMpTpl(string $MpTpl) 设置微信模板
 * @method integer getStatus() 获取批次状态 0: 未激活 1: 已激活 -1: 已冻结
 * @method void setStatus(integer $Status) 设置批次状态 0: 未激活 1: 已激活 -1: 已冻结
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 * @method string getMerchantName() 获取所属商户名称
 * @method void setMerchantName(string $MerchantName) 设置所属商户名称
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method Ext getExt() 获取未使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExt(Ext $Ext) 设置未使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTplName() 获取模板名称
 * @method void setTplName(string $TplName) 设置模板名称
 * @method Job getJob() 获取调度任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJob(Job $Job) 设置调度任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductionDate() 获取生产日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductionDate(string $ProductionDate) 设置生产日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidDate() 获取有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidDate(string $ValidDate) 设置有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAttrs() 获取扩展属性
 * @method void setAttrs(array $Attrs) 设置扩展属性
 */
class CodeBatch extends AbstractModel
{
    /**
     * @var string 批次号
     */
    public $BatchId;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var string 批次编码(未使用)
     */
    public $BatchCode;

    /**
     * @var integer 码数量
     */
    public $CodeCnt;

    /**
     * @var string 所属商户ID
     */
    public $MerchantId;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 批次类型
     */
    public $BatchType;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 微信模板
     */
    public $MpTpl;

    /**
     * @var integer 批次状态 0: 未激活 1: 已激活 -1: 已冻结
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @var string 所属商户名称
     */
    public $MerchantName;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var Ext 未使用
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Ext;

    /**
     * @var string 模板名称
     */
    public $TplName;

    /**
     * @var Job 调度任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Job;

    /**
     * @var string 生产日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductionDate;

    /**
     * @var string 有效期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidDate;

    /**
     * @var array 扩展属性
     */
    public $Attrs;

    /**
     * @param string $BatchId 批次号
     * @param integer $CorpId 企业ID
     * @param string $BatchCode 批次编码(未使用)
     * @param integer $CodeCnt 码数量
     * @param string $MerchantId 所属商户ID
     * @param string $ProductId 产品ID
     * @param integer $BatchType 批次类型
     * @param string $Remark 备注
     * @param string $MpTpl 微信模板
     * @param integer $Status 批次状态 0: 未激活 1: 已激活 -1: 已冻结
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
     * @param string $MerchantName 所属商户名称
     * @param string $ProductName 产品名称
     * @param Ext $Ext 未使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TplName 模板名称
     * @param Job $Job 调度任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductionDate 生产日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidDate 有效期
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Attrs 扩展属性
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

        if (array_key_exists("ProductionDate",$param) and $param["ProductionDate"] !== null) {
            $this->ProductionDate = $param["ProductionDate"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("Attrs",$param) and $param["Attrs"] !== null) {
            $this->Attrs = [];
            foreach ($param["Attrs"] as $key => $value){
                $obj = new AttrItem();
                $obj->deserialize($value);
                array_push($this->Attrs, $obj);
            }
        }
    }
}
