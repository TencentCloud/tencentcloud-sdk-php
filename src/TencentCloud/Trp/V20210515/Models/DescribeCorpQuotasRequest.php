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
 * DescribeCorpQuotas请求参数结构体
 *
 * @method integer getAgentId() 获取渠道商ID，不要传
 * @method void setAgentId(integer $AgentId) 设置渠道商ID，不要传
 * @method integer getPageNumber() 获取页数
 * @method void setPageNumber(integer $PageNumber) 设置页数
 * @method integer getPageSize() 获取每页数量
 * @method void setPageSize(integer $PageSize) 设置每页数量
 * @method string getKeyword() 获取搜索企业ID
 * @method void setKeyword(string $Keyword) 设置搜索企业ID
 */
class DescribeCorpQuotasRequest extends AbstractModel
{
    /**
     * @var integer 渠道商ID，不要传
     */
    public $AgentId;

    /**
     * @var integer 页数
     */
    public $PageNumber;

    /**
     * @var integer 每页数量
     */
    public $PageSize;

    /**
     * @var string 搜索企业ID
     */
    public $Keyword;

    /**
     * @param integer $AgentId 渠道商ID，不要传
     * @param integer $PageNumber 页数
     * @param integer $PageSize 每页数量
     * @param string $Keyword 搜索企业ID
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
