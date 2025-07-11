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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排序条件
 *
 * @method string getBy() 获取排序字段，默认为CreateTime
 * @method void setBy(string $By) 设置排序字段，默认为CreateTime
 * @method boolean getDescend() 获取true表示降序，false表示升序
 * @method void setDescend(boolean $Descend) 设置true表示降序，false表示升序
 */
class SortBy extends AbstractModel
{
    /**
     * @var string 排序字段，默认为CreateTime
     */
    public $By;

    /**
     * @var boolean true表示降序，false表示升序
     */
    public $Descend;

    /**
     * @param string $By 排序字段，默认为CreateTime
     * @param boolean $Descend true表示降序，false表示升序
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
        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Descend",$param) and $param["Descend"] !== null) {
            $this->Descend = $param["Descend"];
        }
    }
}
