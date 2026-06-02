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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用服务查询
 *
 * @method integer getTotal() 获取<p>总数</p>
 * @method void setTotal(integer $Total) 设置<p>总数</p>
 * @method array getItems() 获取<p>数据列表</p>
 * @method void setItems(array $Items) 设置<p>数据列表</p>
 */
class DescribeAgentAppServicesVO extends AbstractModel
{
    /**
     * @var integer <p>总数</p>
     */
    public $Total;

    /**
     * @var array <p>数据列表</p>
     */
    public $Items;

    /**
     * @param integer $Total <p>总数</p>
     * @param array $Items <p>数据列表</p>
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new AgentAppServiceVO();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
