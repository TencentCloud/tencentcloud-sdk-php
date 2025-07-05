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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBashEvents请求参数结构体
 *
 * @method array getIds() 获取ID数组，最大1000条。
 * @method void setIds(array $Ids) 设置ID数组，最大1000条。
 * @method boolean getAll() 获取是否删除全部
 * @method void setAll(boolean $All) 设置是否删除全部
 */
class DeleteBashEventsRequest extends AbstractModel
{
    /**
     * @var array ID数组，最大1000条。
     */
    public $Ids;

    /**
     * @var boolean 是否删除全部
     */
    public $All;

    /**
     * @param array $Ids ID数组，最大1000条。
     * @param boolean $All 是否删除全部
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }
    }
}
