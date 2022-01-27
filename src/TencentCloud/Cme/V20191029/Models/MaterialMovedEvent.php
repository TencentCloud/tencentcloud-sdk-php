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
 * 媒体移动事件
 *
 * @method array getMaterialIdSet() 获取要移动的媒体 Id 列表。
 * @method void setMaterialIdSet(array $MaterialIdSet) 设置要移动的媒体 Id 列表。
 * @method Entity getSourceOwner() 获取源媒体归属。
 * @method void setSourceOwner(Entity $SourceOwner) 设置源媒体归属。
 * @method string getSourceClassPath() 获取源媒体分类路径。
 * @method void setSourceClassPath(string $SourceClassPath) 设置源媒体分类路径。
 * @method Entity getDestinationOwner() 获取目标媒体分类归属。
 * @method void setDestinationOwner(Entity $DestinationOwner) 设置目标媒体分类归属。
 * @method string getDestinationClassPath() 获取目标媒体分类路径。
 * @method void setDestinationClassPath(string $DestinationClassPath) 设置目标媒体分类路径。
 */
class MaterialMovedEvent extends AbstractModel
{
    /**
     * @var array 要移动的媒体 Id 列表。
     */
    public $MaterialIdSet;

    /**
     * @var Entity 源媒体归属。
     */
    public $SourceOwner;

    /**
     * @var string 源媒体分类路径。
     */
    public $SourceClassPath;

    /**
     * @var Entity 目标媒体分类归属。
     */
    public $DestinationOwner;

    /**
     * @var string 目标媒体分类路径。
     */
    public $DestinationClassPath;

    /**
     * @param array $MaterialIdSet 要移动的媒体 Id 列表。
     * @param Entity $SourceOwner 源媒体归属。
     * @param string $SourceClassPath 源媒体分类路径。
     * @param Entity $DestinationOwner 目标媒体分类归属。
     * @param string $DestinationClassPath 目标媒体分类路径。
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

        if (array_key_exists("SourceOwner",$param) and $param["SourceOwner"] !== null) {
            $this->SourceOwner = new Entity();
            $this->SourceOwner->deserialize($param["SourceOwner"]);
        }

        if (array_key_exists("SourceClassPath",$param) and $param["SourceClassPath"] !== null) {
            $this->SourceClassPath = $param["SourceClassPath"];
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
