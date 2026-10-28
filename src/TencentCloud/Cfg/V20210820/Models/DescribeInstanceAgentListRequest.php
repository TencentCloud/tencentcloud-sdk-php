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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceAgentList请求参数结构体
 *
 * @method integer getInstanceType() 获取<p>1:CVM<br>2.TKE</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>1:CVM<br>2.TKE</p>
 * @method array getFilters() 获取<p>筛选条件</p>
 * @method void setFilters(array $Filters) 设置<p>筛选条件</p>
 * @method integer getPage() 获取<p>页数</p>
 * @method void setPage(integer $Page) 设置<p>页数</p>
 * @method integer getPageSize() 获取<p>每页大小</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小</p>
 * @method integer getAgentScene() 获取<p>查询探针场景</p>
 * @method void setAgentScene(integer $AgentScene) 设置<p>查询探针场景</p>
 */
class DescribeInstanceAgentListRequest extends AbstractModel
{
    /**
     * @var integer <p>1:CVM<br>2.TKE</p>
     */
    public $InstanceType;

    /**
     * @var array <p>筛选条件</p>
     */
    public $Filters;

    /**
     * @var integer <p>页数</p>
     */
    public $Page;

    /**
     * @var integer <p>每页大小</p>
     */
    public $PageSize;

    /**
     * @var integer <p>查询探针场景</p>
     */
    public $AgentScene;

    /**
     * @param integer $InstanceType <p>1:CVM<br>2.TKE</p>
     * @param array $Filters <p>筛选条件</p>
     * @param integer $Page <p>页数</p>
     * @param integer $PageSize <p>每页大小</p>
     * @param integer $AgentScene <p>查询探针场景</p>
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AgentFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("AgentScene",$param) and $param["AgentScene"] !== null) {
            $this->AgentScene = $param["AgentScene"];
        }
    }
}
