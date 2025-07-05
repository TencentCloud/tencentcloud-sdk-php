<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线详情
 *
 * @method string getDescription() 获取基线描述
 * @method void setDescription(string $Description) 设置基线描述
 * @method integer getLevel() 获取危害等级
 * @method void setLevel(integer $Level) 设置危害等级
 * @method string getPackageName() 获取package名
 * @method void setPackageName(string $PackageName) 设置package名
 * @method integer getParentId() 获取父级id
 * @method void setParentId(integer $ParentId) 设置父级id
 * @method string getName() 获取基线名
 * @method void setName(string $Name) 设置基线名
 */
class BaselineDetail extends AbstractModel
{
    /**
     * @var string 基线描述
     */
    public $Description;

    /**
     * @var integer 危害等级
     */
    public $Level;

    /**
     * @var string package名
     */
    public $PackageName;

    /**
     * @var integer 父级id
     */
    public $ParentId;

    /**
     * @var string 基线名
     */
    public $Name;

    /**
     * @param string $Description 基线描述
     * @param integer $Level 危害等级
     * @param string $PackageName package名
     * @param integer $ParentId 父级id
     * @param string $Name 基线名
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
