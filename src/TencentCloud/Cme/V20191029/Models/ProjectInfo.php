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
 * @method string getProjectId() 获取项目 Id。
 * @method void setProjectId(string $ProjectId) 设置项目 Id。
 * @method string getName() 获取项目名称。
 * @method void setName(string $Name) 设置项目名称。
 * @method string getAspectRatio() 获取画布宽高比。
 * @method void setAspectRatio(string $AspectRatio) 设置画布宽高比。
 * @method string getCategory() 获取项目类别。
 * @method void setCategory(string $Category) 设置项目类别。
 * @method Entity getOwner() 获取归属者。
 * @method void setOwner(Entity $Owner) 设置归属者。
 */

/**
 *项目信息。
 */
class ProjectInfo extends AbstractModel
{
    /**
     * @var string 项目 Id。
     */
    public $ProjectId;

    /**
     * @var string 项目名称。
     */
    public $Name;

    /**
     * @var string 画布宽高比。
     */
    public $AspectRatio;

    /**
     * @var string 项目类别。
     */
    public $Category;

    /**
     * @var Entity 归属者。
     */
    public $Owner;
    /**
     * @param string $ProjectId 项目 Id。
     * @param string $Name 项目名称。
     * @param string $AspectRatio 画布宽高比。
     * @param string $Category 项目类别。
     * @param Entity $Owner 归属者。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }
    }
}
