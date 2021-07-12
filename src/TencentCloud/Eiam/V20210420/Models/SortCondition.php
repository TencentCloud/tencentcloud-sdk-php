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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排序条件。
 *
 * @method string getSortKey() 获取排序属性。
 * @method void setSortKey(string $SortKey) 设置排序属性。
 * @method string getSortOrder() 获取排序顺序，ASC为正向排序，DESC为反向排序。
 * @method void setSortOrder(string $SortOrder) 设置排序顺序，ASC为正向排序，DESC为反向排序。
 */
class SortCondition extends AbstractModel
{
    /**
     * @var string 排序属性。
     */
    public $SortKey;

    /**
     * @var string 排序顺序，ASC为正向排序，DESC为反向排序。
     */
    public $SortOrder;

    /**
     * @param string $SortKey 排序属性。
     * @param string $SortOrder 排序顺序，ASC为正向排序，DESC为反向排序。
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
        if (array_key_exists("SortKey",$param) and $param["SortKey"] !== null) {
            $this->SortKey = $param["SortKey"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
