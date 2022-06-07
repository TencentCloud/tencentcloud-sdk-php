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
 * DescribeCodeBatchs请求参数结构体
 *
 * @method string getMerchantId() 获取查询商户ID
 * @method void setMerchantId(string $MerchantId) 设置查询商户ID
 * @method string getProductId() 获取查询商品ID
 * @method void setProductId(string $ProductId) 设置查询商品ID
 * @method string getKeyword() 获取查询关键字
 * @method void setKeyword(string $Keyword) 设置查询关键字
 * @method integer getPageSize() 获取条数
 * @method void setPageSize(integer $PageSize) 设置条数
 * @method integer getPageNumber() 获取页数
 * @method void setPageNumber(integer $PageNumber) 设置页数
 * @method string getBatchType() 获取批次类型 0:溯源 1:营销
 * @method void setBatchType(string $BatchType) 设置批次类型 0:溯源 1:营销
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 */
class DescribeCodeBatchsRequest extends AbstractModel
{
    /**
     * @var string 查询商户ID
     */
    public $MerchantId;

    /**
     * @var string 查询商品ID
     */
    public $ProductId;

    /**
     * @var string 查询关键字
     */
    public $Keyword;

    /**
     * @var integer 条数
     */
    public $PageSize;

    /**
     * @var integer 页数
     */
    public $PageNumber;

    /**
     * @var string 批次类型 0:溯源 1:营销
     */
    public $BatchType;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @param string $MerchantId 查询商户ID
     * @param string $ProductId 查询商品ID
     * @param string $Keyword 查询关键字
     * @param integer $PageSize 条数
     * @param integer $PageNumber 页数
     * @param string $BatchType 批次类型 0:溯源 1:营销
     * @param integer $CorpId 企业ID
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("BatchType",$param) and $param["BatchType"] !== null) {
            $this->BatchType = $param["BatchType"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }
    }
}
