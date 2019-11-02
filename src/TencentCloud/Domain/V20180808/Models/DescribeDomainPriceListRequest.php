<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getTldList() 获取查询价格的后缀列表。默认则为全部后缀
 * @method void setTldList(array $TldList) 设置查询价格的后缀列表。默认则为全部后缀
 */

/**
 *DescribeDomainPriceList请求参数结构体
 */
class DescribeDomainPriceListRequest extends AbstractModel
{
    /**
     * @var array 查询价格的后缀列表。默认则为全部后缀
     */
    public $TldList;
    /**
     * @param array $TldList 查询价格的后缀列表。默认则为全部后缀
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TldList",$param) and $param["TldList"] !== null) {
            $this->TldList = $param["TldList"];
        }
    }
}
