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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCPT请求参数结构体
 *
 * @method integer getDAPId() 获取DID应用id
 * @method void setDAPId(integer $DAPId) 设置DID应用id
 * @method integer getCPTId() 获取凭证模板id
 * @method void setCPTId(integer $CPTId) 设置凭证模板id
 */
class QueryCPTRequest extends AbstractModel
{
    /**
     * @var integer DID应用id
     */
    public $DAPId;

    /**
     * @var integer 凭证模板id
     */
    public $CPTId;

    /**
     * @param integer $DAPId DID应用id
     * @param integer $CPTId 凭证模板id
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
        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }

        if (array_key_exists("CPTId",$param) and $param["CPTId"] !== null) {
            $this->CPTId = $param["CPTId"];
        }
    }
}
