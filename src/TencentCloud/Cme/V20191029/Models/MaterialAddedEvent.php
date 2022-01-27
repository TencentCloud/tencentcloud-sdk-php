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
 * 媒体添加事件。
 *
 * @method array getMaterialIdSet() 获取添加的媒体 Id 列表。
 * @method void setMaterialIdSet(array $MaterialIdSet) 设置添加的媒体 Id 列表。
 * @method Entity getOwner() 获取添加的媒体归属。
 * @method void setOwner(Entity $Owner) 设置添加的媒体归属。
 * @method string getClassPath() 获取添加的媒体分类路径。
 * @method void setClassPath(string $ClassPath) 设置添加的媒体分类路径。
 */
class MaterialAddedEvent extends AbstractModel
{
    /**
     * @var array 添加的媒体 Id 列表。
     */
    public $MaterialIdSet;

    /**
     * @var Entity 添加的媒体归属。
     */
    public $Owner;

    /**
     * @var string 添加的媒体分类路径。
     */
    public $ClassPath;

    /**
     * @param array $MaterialIdSet 添加的媒体 Id 列表。
     * @param Entity $Owner 添加的媒体归属。
     * @param string $ClassPath 添加的媒体分类路径。
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
        if (array_key_exists("MaterialIdSet",$param) and $param["MaterialIdSet"] !== null) {
            $this->MaterialIdSet = $param["MaterialIdSet"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("ClassPath",$param) and $param["ClassPath"] !== null) {
            $this->ClassPath = $param["ClassPath"];
        }
    }
}
