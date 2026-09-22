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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageEventList请求参数结构体
 *
 * @method string getSessionId() 获取<p>Session ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>Session ID</p>
 * @method string getAgentId() 获取<p>Agent ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent ID</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>返回数量，默认 100，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认 100，最大 100</p>
 * @method array getFilters() 获取<p>过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系</p>
 */
class DescribeMessageEventListRequest extends AbstractModel
{
    /**
     * @var string <p>Session ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>Agent ID</p>
     */
    public $AgentId;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认 100，最大 100</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系</p>
     */
    public $Filters;

    /**
     * @param string $SessionId <p>Session ID</p>
     * @param string $AgentId <p>Agent ID</p>
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>返回数量，默认 100，最大 100</p>
     * @param array $Filters <p>过滤条件数组，多个 Filter 之间为 AND 关系，同一 Filter 内多个 Values 为 OR 关系</p>
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
