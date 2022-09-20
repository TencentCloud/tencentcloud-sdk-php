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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TopN数据Entry
 *
 * @method string getName() 获取排序实体名。
 * @method void setName(string $Name) 设置排序实体名。
 * @method integer getCount() 获取排序实体数量。
 * @method void setCount(integer $Count) 设置排序实体数量。
 */
class TopEntryValue extends AbstractModel
{
    /**
     * @var string 排序实体名。
     */
    public $Name;

    /**
     * @var integer 排序实体数量。
     */
    public $Count;

    /**
     * @param string $Name 排序实体名。
     * @param integer $Count 排序实体数量。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
