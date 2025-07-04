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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例分类列表
 *
 * @method string getInstanceCategory() 获取实例类型名
 * @method void setInstanceCategory(string $InstanceCategory) 设置实例类型名
 * @method array getInstanceFamilySet() 获取实例族列表
 * @method void setInstanceFamilySet(array $InstanceFamilySet) 设置实例族列表
 */
class InstanceCategoryItem extends AbstractModel
{
    /**
     * @var string 实例类型名
     */
    public $InstanceCategory;

    /**
     * @var array 实例族列表
     */
    public $InstanceFamilySet;

    /**
     * @param string $InstanceCategory 实例类型名
     * @param array $InstanceFamilySet 实例族列表
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
        if (array_key_exists("InstanceCategory",$param) and $param["InstanceCategory"] !== null) {
            $this->InstanceCategory = $param["InstanceCategory"];
        }

        if (array_key_exists("InstanceFamilySet",$param) and $param["InstanceFamilySet"] !== null) {
            $this->InstanceFamilySet = $param["InstanceFamilySet"];
        }
    }
}
