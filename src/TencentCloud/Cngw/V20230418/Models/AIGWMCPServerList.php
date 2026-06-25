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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP Server 列表
 *
 * @method integer getTotalCount() 获取<p>总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总数</p>
 * @method array getDataList() 获取<p>mcp server 数据列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataList(array $DataList) 设置<p>mcp server 数据列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AIGWMCPServerList extends AbstractModel
{
    /**
     * @var integer <p>总数</p>
     */
    public $TotalCount;

    /**
     * @var array <p>mcp server 数据列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataList;

    /**
     * @param integer $TotalCount <p>总数</p>
     * @param array $DataList <p>mcp server 数据列表</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new AIGWMCPServer();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
