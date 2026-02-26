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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCcnPolicyBasedRoutingNextHop请求参数结构体
 *
 * @method string getCcnId() 获取云联网 ID
 * @method void setCcnId(string $CcnId) 设置云联网 ID
 * @method string getOffset() 获取偏移量
 * @method void setOffset(string $Offset) 设置偏移量
 * @method string getLimit() 获取返回数量
 * @method void setLimit(string $Limit) 设置返回数量
 */
class DescribeCcnPolicyBasedRoutingNextHopRequest extends AbstractModel
{
    /**
     * @var string 云联网 ID
     */
    public $CcnId;

    /**
     * @var string 偏移量
     */
    public $Offset;

    /**
     * @var string 返回数量
     */
    public $Limit;

    /**
     * @param string $CcnId 云联网 ID
     * @param string $Offset 偏移量
     * @param string $Limit 返回数量
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
