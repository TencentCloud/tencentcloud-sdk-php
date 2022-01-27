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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分类删除事件。
 *
 * @method Entity getOwner() 获取删除的分类归属。
 * @method void setOwner(Entity $Owner) 设置删除的分类归属。
 * @method array getClassPathSet() 获取删除的分类路径列表。
 * @method void setClassPathSet(array $ClassPathSet) 设置删除的分类路径列表。
 */
class ClassDeletedEvent extends AbstractModel
{
    /**
     * @var Entity 删除的分类归属。
     */
    public $Owner;

    /**
     * @var array 删除的分类路径列表。
     */
    public $ClassPathSet;

    /**
     * @param Entity $Owner 删除的分类归属。
     * @param array $ClassPathSet 删除的分类路径列表。
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
        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("ClassPathSet",$param) and $param["ClassPathSet"] !== null) {
            $this->ClassPathSet = $param["ClassPathSet"];
        }
    }
}
