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
 * 溯源码
 *
 * @method string getCode() 获取二维码
 * @method void setCode(string $Code) 设置二维码
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method string getPackId() 获取码包ID
 * @method void setPackId(string $PackId) 设置码包ID
 * @method string getBatchId() 获取批次ID
 * @method void setBatchId(string $BatchId) 设置批次ID
 * @method string getMerchantId() 获取所属商户ID
 * @method void setMerchantId(string $MerchantId) 设置所属商户ID
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getStatus() 获取码状态 0: 冻结 1: 激活
 * @method void setStatus(integer $Status) 设置码状态 0: 冻结 1: 激活
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 * @method string getMerchantName() 获取商户名称
 * @method void setMerchantName(string $MerchantName) 设置商户名称
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method integer getAgentId() 获取渠道商ID
 * @method void setAgentId(integer $AgentId) 设置渠道商ID
 * @method integer getLevel() 获取码层级 0: 最小级, 1: 一级, 2: 二级
 * @method void setLevel(integer $Level) 设置码层级 0: 最小级, 1: 一级, 2: 二级
 */
class TraceCode extends AbstractModel
{
    /**
     * @var string 二维码
     */
    public $Code;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var string 码包ID
     */
    public $PackId;

    /**
     * @var string 批次ID
     */
    public $BatchId;

    /**
     * @var string 所属商户ID
     */
    public $MerchantId;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 码状态 0: 冻结 1: 激活
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
     * @var string 商户名称
     */
    public $MerchantName;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var integer 渠道商ID
     */
    public $AgentId;

    /**
     * @var integer 码层级 0: 最小级, 1: 一级, 2: 二级
     */
    public $Level;

    /**
     * @param string $Code 二维码
     * @param integer $CorpId 企业ID
     * @param string $PackId 码包ID
     * @param string $BatchId 批次ID
     * @param string $MerchantId 所属商户ID
     * @param string $ProductId 产品ID
     * @param integer $Status 码状态 0: 冻结 1: 激活
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
     * @param string $MerchantName 商户名称
     * @param string $ProductName 产品名称
     * @param integer $AgentId 渠道商ID
     * @param integer $Level 码层级 0: 最小级, 1: 一级, 2: 二级
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("PackId",$param) and $param["PackId"] !== null) {
            $this->PackId = $param["PackId"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
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

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
