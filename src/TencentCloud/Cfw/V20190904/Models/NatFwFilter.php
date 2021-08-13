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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * nat fw 实例展示的过滤列表
 *
 * @method string getFilterType() 获取过滤的类型，例如实例id
 * @method void setFilterType(string $FilterType) 设置过滤的类型，例如实例id
 * @method string getFilterContent() 获取过滤的内容，以',' 分隔
 * @method void setFilterContent(string $FilterContent) 设置过滤的内容，以',' 分隔
 */
class NatFwFilter extends AbstractModel
{
    /**
     * @var string 过滤的类型，例如实例id
     */
    public $FilterType;

    /**
     * @var string 过滤的内容，以',' 分隔
     */
    public $FilterContent;

    /**
     * @param string $FilterType 过滤的类型，例如实例id
     * @param string $FilterContent 过滤的内容，以',' 分隔
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
        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("FilterContent",$param) and $param["FilterContent"] !== null) {
            $this->FilterContent = $param["FilterContent"];
        }
    }
}
