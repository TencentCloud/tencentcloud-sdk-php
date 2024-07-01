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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 值班表列表
 *
 * @method integer getId() 获取值班表Id
 * @method void setId(integer $Id) 设置值班表Id
 * @method string getName() 获取值班表名称
 * @method void setName(string $Name) 设置值班表名称
 * @method string getCreator() 获取创建人
 * @method void setCreator(string $Creator) 设置创建人
 */
class DutyScheduleData extends AbstractModel
{
    /**
     * @var integer 值班表Id
     */
    public $Id;

    /**
     * @var string 值班表名称
     */
    public $Name;

    /**
     * @var string 创建人
     */
    public $Creator;

    /**
     * @param integer $Id 值班表Id
     * @param string $Name 值班表名称
     * @param string $Creator 创建人
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

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
