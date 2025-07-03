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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群巡检诊断的默认目录类型
 *
 * @method string getCatalogueLevel() 获取目录级别，支持参数：
first：一级目录
second：二级目录
 * @method void setCatalogueLevel(string $CatalogueLevel) 设置目录级别，支持参数：
first：一级目录
second：二级目录
 * @method string getCatalogueName() 获取目录名
 * @method void setCatalogueName(string $CatalogueName) 设置目录名
 */
class KubeJarvisStateCatalogue extends AbstractModel
{
    /**
     * @var string 目录级别，支持参数：
first：一级目录
second：二级目录
     */
    public $CatalogueLevel;

    /**
     * @var string 目录名
     */
    public $CatalogueName;

    /**
     * @param string $CatalogueLevel 目录级别，支持参数：
first：一级目录
second：二级目录
     * @param string $CatalogueName 目录名
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
        if (array_key_exists("CatalogueLevel",$param) and $param["CatalogueLevel"] !== null) {
            $this->CatalogueLevel = $param["CatalogueLevel"];
        }

        if (array_key_exists("CatalogueName",$param) and $param["CatalogueName"] !== null) {
            $this->CatalogueName = $param["CatalogueName"];
        }
    }
}
