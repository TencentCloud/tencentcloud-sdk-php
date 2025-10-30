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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分组信息实体类
 *
 * @method integer getId() 获取分组
 * @method void setId(integer $Id) 设置分组
 * @method string getName() 获取设备分组名称
 * @method void setName(string $Name) 设置设备分组名称
 * @method string getDescription() 获取分组描述
 * @method void setDescription(string $Description) 设置分组描述
 * @method integer getParentId() 获取分组父级ID
 * @method void setParentId(integer $ParentId) 设置分组父级ID
 */
class DescribeGroupInfo extends AbstractModel
{
    /**
     * @var integer 分组
     */
    public $Id;

    /**
     * @var string 设备分组名称
     */
    public $Name;

    /**
     * @var string 分组描述
     */
    public $Description;

    /**
     * @var integer 分组父级ID
     */
    public $ParentId;

    /**
     * @param integer $Id 分组
     * @param string $Name 设备分组名称
     * @param string $Description 分组描述
     * @param integer $ParentId 分组父级ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }
    }
}
