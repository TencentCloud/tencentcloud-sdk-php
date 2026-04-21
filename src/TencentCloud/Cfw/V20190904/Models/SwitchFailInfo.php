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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 开关开启错误码数据
 *
 * @method integer getId() 获取自增唯一ID
 * @method void setId(integer $Id) 设置自增唯一ID
 * @method string getName() 获取开关名称
 * @method void setName(string $Name) 设置开关名称
 * @method integer getStatus() 获取防火墙开关变动状态，小于0
 * @method void setStatus(integer $Status) 设置防火墙开关变动状态，小于0
 */
class SwitchFailInfo extends AbstractModel
{
    /**
     * @var integer 自增唯一ID
     */
    public $Id;

    /**
     * @var string 开关名称
     */
    public $Name;

    /**
     * @var integer 防火墙开关变动状态，小于0
     */
    public $Status;

    /**
     * @param integer $Id 自增唯一ID
     * @param string $Name 开关名称
     * @param integer $Status 防火墙开关变动状态，小于0
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
