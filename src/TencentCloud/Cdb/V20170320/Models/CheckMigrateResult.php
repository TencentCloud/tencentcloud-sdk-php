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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移集群版校验结果
 *
 * @method string getName() 获取校验名称
 * @method void setName(string $Name) 设置校验名称
 * @method string getStatus() 获取校验结果，通过为pass，失败为fail
 * @method void setStatus(string $Status) 设置校验结果，通过为pass，失败为fail
 * @method string getDesc() 获取校验结果描述
 * @method void setDesc(string $Desc) 设置校验结果描述
 */
class CheckMigrateResult extends AbstractModel
{
    /**
     * @var string 校验名称
     */
    public $Name;

    /**
     * @var string 校验结果，通过为pass，失败为fail
     */
    public $Status;

    /**
     * @var string 校验结果描述
     */
    public $Desc;

    /**
     * @param string $Name 校验名称
     * @param string $Status 校验结果，通过为pass，失败为fail
     * @param string $Desc 校验结果描述
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
