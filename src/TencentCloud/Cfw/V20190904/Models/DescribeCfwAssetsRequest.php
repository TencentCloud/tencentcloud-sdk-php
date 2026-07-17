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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwAssets请求参数结构体
 *
 * @method integer getLimit() 获取最大返回资产数。可选，默认 100；取值 1 至 1000。
 * @method void setLimit(integer $Limit) 设置最大返回资产数。可选，默认 100；取值 1 至 1000。
 */
class DescribeCfwAssetsRequest extends AbstractModel
{
    /**
     * @var integer 最大返回资产数。可选，默认 100；取值 1 至 1000。
     */
    public $Limit;

    /**
     * @param integer $Limit 最大返回资产数。可选，默认 100；取值 1 至 1000。
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
