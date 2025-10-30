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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义线路分组详细信息
 *
 * @method integer getId() 获取自定义线路分组ID
 * @method void setId(integer $Id) 设置自定义线路分组ID
 * @method string getName() 获取自定线路分组名称
 * @method void setName(string $Name) 设置自定线路分组名称
 * @method array getLines() 获取自定义线路分组包含的线路列表
 * @method void setLines(array $Lines) 设置自定义线路分组包含的线路列表
 */
class LineGroupDetail extends AbstractModel
{
    /**
     * @var integer 自定义线路分组ID
     */
    public $Id;

    /**
     * @var string 自定线路分组名称
     */
    public $Name;

    /**
     * @var array 自定义线路分组包含的线路列表
     */
    public $Lines;

    /**
     * @param integer $Id 自定义线路分组ID
     * @param string $Name 自定线路分组名称
     * @param array $Lines 自定义线路分组包含的线路列表
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

        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = $param["Lines"];
        }
    }
}
