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
 * DescribeTraceCodes请求参数结构体
 *
 * @method string getKeyword() 获取搜索关键字 码标识，或者批次ID
 * @method void setKeyword(string $Keyword) 设置搜索关键字 码标识，或者批次ID
 * @method integer getPageNumber() 获取条数
 * @method void setPageNumber(integer $PageNumber) 设置条数
 * @method integer getPageSize() 获取页码
 * @method void setPageSize(integer $PageSize) 设置页码
 * @method string getBatchId() 获取批次ID，弃用
 * @method void setBatchId(string $BatchId) 设置批次ID，弃用
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 */
class DescribeTraceCodesRequest extends AbstractModel
{
    /**
     * @var string 搜索关键字 码标识，或者批次ID
     */
    public $Keyword;

    /**
     * @var integer 条数
     */
    public $PageNumber;

    /**
     * @var integer 页码
     */
    public $PageSize;

    /**
     * @var string 批次ID，弃用
     */
    public $BatchId;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @param string $Keyword 搜索关键字 码标识，或者批次ID
     * @param integer $PageNumber 条数
     * @param integer $PageSize 页码
     * @param string $BatchId 批次ID，弃用
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }
    }
}
