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
 * 查询App mcpServer绑定列表响应
 *
 * @method integer getTotal() 获取条目总数
 * @method void setTotal(integer $Total) 设置条目总数
 * @method array getItems() 获取具体条目
 * @method void setItems(array $Items) 设置具体条目
 */
class DescribeAgentAppMcpServersResp extends AbstractModel
{
    /**
     * @var integer 条目总数
     */
    public $Total;

    /**
     * @var array 具体条目
     */
    public $Items;

    /**
     * @param integer $Total 条目总数
     * @param array $Items 具体条目
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
                $obj = new AgentAppMcpServerVO();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
