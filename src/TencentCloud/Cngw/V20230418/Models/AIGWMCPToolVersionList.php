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
 * 分页查询返回的mcp tool version列表
 *
 * @method array getMCPToolVersions() 获取<p>mcp. tool 版本详情</p>
 * @method void setMCPToolVersions(array $MCPToolVersions) 设置<p>mcp. tool 版本详情</p>
 * @method integer getTotalCount() 获取<p>总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总数</p>
 */
class AIGWMCPToolVersionList extends AbstractModel
{
    /**
     * @var array <p>mcp. tool 版本详情</p>
     */
    public $MCPToolVersions;

    /**
     * @var integer <p>总数</p>
     */
    public $TotalCount;

    /**
     * @param array $MCPToolVersions <p>mcp. tool 版本详情</p>
     * @param integer $TotalCount <p>总数</p>
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
        if (array_key_exists("MCPToolVersions",$param) and $param["MCPToolVersions"] !== null) {
            $this->MCPToolVersions = [];
            foreach ($param["MCPToolVersions"] as $key => $value){
                $obj = new AIGWMCPToolVersion();
                $obj->deserialize($value);
                array_push($this->MCPToolVersions, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
