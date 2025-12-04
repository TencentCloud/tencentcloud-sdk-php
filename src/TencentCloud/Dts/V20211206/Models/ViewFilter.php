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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视图级 DDL/DML 过滤信息
 *
 * @method string getViewName() 获取规则生效的视图名
 * @method void setViewName(string $ViewName) 设置规则生效的视图名
 * @method OpFilter getOpFilter() 获取视图级 DDL/DML 过滤规则
 * @method void setOpFilter(OpFilter $OpFilter) 设置视图级 DDL/DML 过滤规则
 */
class ViewFilter extends AbstractModel
{
    /**
     * @var string 规则生效的视图名
     */
    public $ViewName;

    /**
     * @var OpFilter 视图级 DDL/DML 过滤规则
     */
    public $OpFilter;

    /**
     * @param string $ViewName 规则生效的视图名
     * @param OpFilter $OpFilter 视图级 DDL/DML 过滤规则
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
        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("OpFilter",$param) and $param["OpFilter"] !== null) {
            $this->OpFilter = new OpFilter();
            $this->OpFilter->deserialize($param["OpFilter"]);
        }
    }
}
