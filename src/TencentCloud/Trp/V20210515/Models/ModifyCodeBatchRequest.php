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
 * ModifyCodeBatch请求参数结构体
 *
 * @method string getBatchId() 获取批次ID
 * @method void setBatchId(string $BatchId) 设置批次ID
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method integer getStatus() 获取状态 0: 未激活 1: 已激活 -1: 已冻结
 * @method void setStatus(integer $Status) 设置状态 0: 未激活 1: 已激活 -1: 已冻结
 * @method string getMpTpl() 获取模板ID，或者活动ID
 * @method void setMpTpl(string $MpTpl) 设置模板ID，或者活动ID
 * @method string getMerchantId() 获取商户ID
 * @method void setMerchantId(string $MerchantId) 设置商户ID
 * @method string getProductId() 获取商品ID
 * @method void setProductId(string $ProductId) 设置商品ID
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getBatchCode() 获取批次编码，业务字段不判断唯一性
 * @method void setBatchCode(string $BatchCode) 设置批次编码，业务字段不判断唯一性
 * @method string getValidDate() 获取有效期
 * @method void setValidDate(string $ValidDate) 设置有效期
 * @method string getProductionDate() 获取生产日期
 * @method void setProductionDate(string $ProductionDate) 设置生产日期
 */
class ModifyCodeBatchRequest extends AbstractModel
{
    /**
     * @var string 批次ID
     */
    public $BatchId;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var integer 状态 0: 未激活 1: 已激活 -1: 已冻结
     */
    public $Status;

    /**
     * @var string 模板ID，或者活动ID
     */
    public $MpTpl;

    /**
     * @var string 商户ID
     */
    public $MerchantId;

    /**
     * @var string 商品ID
     */
    public $ProductId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 批次编码，业务字段不判断唯一性
     */
    public $BatchCode;

    /**
     * @var string 有效期
     */
    public $ValidDate;

    /**
     * @var string 生产日期
     */
    public $ProductionDate;

    /**
     * @param string $BatchId 批次ID
     * @param integer $CorpId 企业ID
     * @param integer $Status 状态 0: 未激活 1: 已激活 -1: 已冻结
     * @param string $MpTpl 模板ID，或者活动ID
     * @param string $MerchantId 商户ID
     * @param string $ProductId 商品ID
     * @param string $Remark 备注
     * @param string $BatchCode 批次编码，业务字段不判断唯一性
     * @param string $ValidDate 有效期
     * @param string $ProductionDate 生产日期
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MpTpl",$param) and $param["MpTpl"] !== null) {
            $this->MpTpl = $param["MpTpl"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("BatchCode",$param) and $param["BatchCode"] !== null) {
            $this->BatchCode = $param["BatchCode"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("ProductionDate",$param) and $param["ProductionDate"] !== null) {
            $this->ProductionDate = $param["ProductionDate"];
        }
    }
}
