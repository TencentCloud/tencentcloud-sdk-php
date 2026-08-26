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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAIWorkbenchAgents请求参数结构体
 *
 * @method integer getPerPage() 获取<p>每页数量</p>
 * @method void setPerPage(integer $PerPage) 设置<p>每页数量</p>
 * @method integer getPageNo() 获取<p>页码</p>
 * @method void setPageNo(integer $PageNo) 设置<p>页码</p>
 * @method string getStatus() 获取<p>状态筛选</p>
 * @method void setStatus(string $Status) 设置<p>状态筛选</p>
 * @method string getCategory() 获取<p>分类筛选</p>
 * @method void setCategory(string $Category) 设置<p>分类筛选</p>
 * @method string getKeyword() 获取<p>搜索关键词</p>
 * @method void setKeyword(string $Keyword) 设置<p>搜索关键词</p>
 * @method string getSource() 获取<p>来源筛选</p>
 * @method void setSource(string $Source) 设置<p>来源筛选</p>
 * @method array getAgentIds() 获取<p>Agent ID 列表筛选</p>
 * @method void setAgentIds(array $AgentIds) 设置<p>Agent ID 列表筛选</p>
 */
class ListAIWorkbenchAgentsRequest extends AbstractModel
{
    /**
     * @var integer <p>每页数量</p>
     */
    public $PerPage;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNo;

    /**
     * @var string <p>状态筛选</p>
     */
    public $Status;

    /**
     * @var string <p>分类筛选</p>
     */
    public $Category;

    /**
     * @var string <p>搜索关键词</p>
     */
    public $Keyword;

    /**
     * @var string <p>来源筛选</p>
     */
    public $Source;

    /**
     * @var array <p>Agent ID 列表筛选</p>
     */
    public $AgentIds;

    /**
     * @param integer $PerPage <p>每页数量</p>
     * @param integer $PageNo <p>页码</p>
     * @param string $Status <p>状态筛选</p>
     * @param string $Category <p>分类筛选</p>
     * @param string $Keyword <p>搜索关键词</p>
     * @param string $Source <p>来源筛选</p>
     * @param array $AgentIds <p>Agent ID 列表筛选</p>
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
        if (array_key_exists("PerPage",$param) and $param["PerPage"] !== null) {
            $this->PerPage = $param["PerPage"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("AgentIds",$param) and $param["AgentIds"] !== null) {
            $this->AgentIds = $param["AgentIds"];
        }
    }
}
