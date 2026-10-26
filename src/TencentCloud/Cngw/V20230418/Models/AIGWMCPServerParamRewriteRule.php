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
 * AI 网关 MCP Server 参数改写规则
 *
 * @method string getOperate() 获取<p>操作方式</p>
 * @method void setOperate(string $Operate) 设置<p>操作方式</p>
 * @method string getKey() 获取<p>键</p>
 * @method void setKey(string $Key) 设置<p>键</p>
 * @method string getValue() 获取<p>值</p>
 * @method void setValue(string $Value) 设置<p>值</p>
 */
class AIGWMCPServerParamRewriteRule extends AbstractModel
{
    /**
     * @var string <p>操作方式</p>
     */
    public $Operate;

    /**
     * @var string <p>键</p>
     */
    public $Key;

    /**
     * @var string <p>值</p>
     */
    public $Value;

    /**
     * @param string $Operate <p>操作方式</p>
     * @param string $Key <p>键</p>
     * @param string $Value <p>值</p>
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
        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
