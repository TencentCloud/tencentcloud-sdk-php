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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIAnalysisHistory请求参数结构体
 *
 * @method Filter getFilter() 获取<p>过滤器</p>
 * @method void setFilter(Filter $Filter) 设置<p>过滤器</p>
 * @method string getSessionID() 获取<p>sessionID，用于游标分页</p>
 * @method void setSessionID(string $SessionID) 设置<p>sessionID，用于游标分页</p>
 */
class DescribeAIAnalysisHistoryRequest extends AbstractModel
{
    /**
     * @var Filter <p>过滤器</p>
     */
    public $Filter;

    /**
     * @var string <p>sessionID，用于游标分页</p>
     */
    public $SessionID;

    /**
     * @param Filter $Filter <p>过滤器</p>
     * @param string $SessionID <p>sessionID，用于游标分页</p>
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }
    }
}
