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
 * 分类移动事件。
 *
 * @method Entity getSourceOwner() 获取源分类归属。
 * @method void setSourceOwner(Entity $SourceOwner) 设置源分类归属。
 * @method array getSourceClassPathSet() 获取源分类路径列表。
 * @method void setSourceClassPathSet(array $SourceClassPathSet) 设置源分类路径列表。
 * @method Entity getDestinationOwner() 获取目标分类归属。
 * @method void setDestinationOwner(Entity $DestinationOwner) 设置目标分类归属。
 * @method string getDestinationClassPath() 获取目标分类归属。
 * @method void setDestinationClassPath(string $DestinationClassPath) 设置目标分类归属。
 */
class ClassMovedEvent extends AbstractModel
{
    /**
     * @var Entity 源分类归属。
     */
    public $SourceOwner;

    /**
     * @var array 源分类路径列表。
     */
    public $SourceClassPathSet;

    /**
     * @var Entity 目标分类归属。
     */
    public $DestinationOwner;

    /**
     * @var string 目标分类归属。
     */
    public $DestinationClassPath;

    /**
     * @param Entity $SourceOwner 源分类归属。
     * @param array $SourceClassPathSet 源分类路径列表。
     * @param Entity $DestinationOwner 目标分类归属。
     * @param string $DestinationClassPath 目标分类归属。
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
        if (array_key_exists("SourceOwner",$param) and $param["SourceOwner"] !== null) {
            $this->SourceOwner = new Entity();
            $this->SourceOwner->deserialize($param["SourceOwner"]);
        }

        if (array_key_exists("SourceClassPathSet",$param) and $param["SourceClassPathSet"] !== null) {
            $this->SourceClassPathSet = $param["SourceClassPathSet"];
        }

        if (array_key_exists("DestinationOwner",$param) and $param["DestinationOwner"] !== null) {
            $this->DestinationOwner = new Entity();
            $this->DestinationOwner->deserialize($param["DestinationOwner"]);
        }

        if (array_key_exists("DestinationClassPath",$param) and $param["DestinationClassPath"] !== null) {
            $this->DestinationClassPath = $param["DestinationClassPath"];
        }
    }
}
