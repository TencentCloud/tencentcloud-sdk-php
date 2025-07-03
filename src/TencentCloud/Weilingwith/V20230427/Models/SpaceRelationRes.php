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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 空间层级关系响应体
 *
 * @method SpaceRelation getSpaceRelation() 获取空间层级关系
 * @method void setSpaceRelation(SpaceRelation $SpaceRelation) 设置空间层级关系
 */
class SpaceRelationRes extends AbstractModel
{
    /**
     * @var SpaceRelation 空间层级关系
     */
    public $SpaceRelation;

    /**
     * @param SpaceRelation $SpaceRelation 空间层级关系
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
        if (array_key_exists("SpaceRelation",$param) and $param["SpaceRelation"] !== null) {
            $this->SpaceRelation = new SpaceRelation();
            $this->SpaceRelation->deserialize($param["SpaceRelation"]);
        }
    }
}
