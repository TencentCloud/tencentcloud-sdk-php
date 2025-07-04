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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPASupportedMetas请求参数结构体
 *
 * @method array getMetaTypes() 获取元数据类型
 * @method void setMetaTypes(array $MetaTypes) 设置元数据类型
 */
class DescribeDSPASupportedMetasRequest extends AbstractModel
{
    /**
     * @var array 元数据类型
     */
    public $MetaTypes;

    /**
     * @param array $MetaTypes 元数据类型
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
        if (array_key_exists("MetaTypes",$param) and $param["MetaTypes"] !== null) {
            $this->MetaTypes = $param["MetaTypes"];
        }
    }
}
