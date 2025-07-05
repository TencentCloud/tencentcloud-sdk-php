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
 * 基线基础信息
 *
 * @method string getName() 获取基线名称
 * @method void setName(string $Name) 设置基线名称
 * @method integer getBaselineId() 获取基线id
 * @method void setBaselineId(integer $BaselineId) 设置基线id
 * @method integer getParentId() 获取父级id
 * @method void setParentId(integer $ParentId) 设置父级id
 */
class BaselineBasicInfo extends AbstractModel
{
    /**
     * @var string 基线名称
     */
    public $Name;

    /**
     * @var integer 基线id
     */
    public $BaselineId;

    /**
     * @var integer 父级id
     */
    public $ParentId;

    /**
     * @param string $Name 基线名称
     * @param integer $BaselineId 基线id
     * @param integer $ParentId 父级id
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }
    }
}
