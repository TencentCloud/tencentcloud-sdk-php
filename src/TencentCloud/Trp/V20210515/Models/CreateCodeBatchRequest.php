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
 * CreateCodeBatch请求参数结构体
 *
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method string getMerchantId() 获取商户ID
 * @method void setMerchantId(string $MerchantId) 设置商户ID
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getBatchType() 获取批次类型 0:溯源 1:营销
 * @method void setBatchType(integer $BatchType) 设置批次类型 0:溯源 1:营销
 * @method string getBatchId() 获取批次ID，留空时系统自动生成
 * @method void setBatchId(string $BatchId) 设置批次ID，留空时系统自动生成
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getMpTpl() 获取模版ID，或者活动ID
 * @method void setMpTpl(string $MpTpl) 设置模版ID，或者活动ID
 * @method string getCloneId() 获取克隆批次ID，同时会复制溯源信息
 * @method void setCloneId(string $CloneId) 设置克隆批次ID，同时会复制溯源信息
 * @method string getBatchCode() 获取批次编号，业务字段不判断唯一性
 * @method void setBatchCode(string $BatchCode) 设置批次编号，业务字段不判断唯一性
 */
class CreateCodeBatchRequest extends AbstractModel
{
    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var string 商户ID
     */
    public $MerchantId;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 批次类型 0:溯源 1:营销
     */
    public $BatchType;

    /**
     * @var string 批次ID，留空时系统自动生成
     */
    public $BatchId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 模版ID，或者活动ID
     */
    public $MpTpl;

    /**
     * @var string 克隆批次ID，同时会复制溯源信息
     */
    public $CloneId;

    /**
     * @var string 批次编号，业务字段不判断唯一性
     */
    public $BatchCode;

    /**
     * @param integer $CorpId 企业ID
     * @param string $MerchantId 商户ID
     * @param string $ProductId 产品ID
     * @param integer $BatchType 批次类型 0:溯源 1:营销
     * @param string $BatchId 批次ID，留空时系统自动生成
     * @param string $Remark 备注
     * @param string $MpTpl 模版ID，或者活动ID
     * @param string $CloneId 克隆批次ID，同时会复制溯源信息
     * @param string $BatchCode 批次编号，业务字段不判断唯一性
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

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("BatchType",$param) and $param["BatchType"] !== null) {
            $this->BatchType = $param["BatchType"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MpTpl",$param) and $param["MpTpl"] !== null) {
            $this->MpTpl = $param["MpTpl"];
        }

        if (array_key_exists("CloneId",$param) and $param["CloneId"] !== null) {
            $this->CloneId = $param["CloneId"];
        }

        if (array_key_exists("BatchCode",$param) and $param["BatchCode"] !== null) {
            $this->BatchCode = $param["BatchCode"];
        }
    }
}
