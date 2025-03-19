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
 * 空间分类
 *
 * @method string getSpaceTypeCode() 获取空间分类编码
 * @method void setSpaceTypeCode(string $SpaceTypeCode) 设置空间分类编码
 * @method string getSpaceTypeName() 获取空间分类名称
 * @method void setSpaceTypeName(string $SpaceTypeName) 设置空间分类名称
 */
class SpaceType extends AbstractModel
{
    /**
     * @var string 空间分类编码
     */
    public $SpaceTypeCode;

    /**
     * @var string 空间分类名称
     */
    public $SpaceTypeName;

    /**
     * @param string $SpaceTypeCode 空间分类编码
     * @param string $SpaceTypeName 空间分类名称
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
        if (array_key_exists("SpaceTypeCode",$param) and $param["SpaceTypeCode"] !== null) {
            $this->SpaceTypeCode = $param["SpaceTypeCode"];
        }

        if (array_key_exists("SpaceTypeName",$param) and $param["SpaceTypeName"] !== null) {
            $this->SpaceTypeName = $param["SpaceTypeName"];
        }
    }
}
