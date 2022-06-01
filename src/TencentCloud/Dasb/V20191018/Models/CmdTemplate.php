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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高危命令模板
 *
 * @method integer getId() 获取高危命令模板ID
 * @method void setId(integer $Id) 设置高危命令模板ID
 * @method string getName() 获取高危命令模板名称
 * @method void setName(string $Name) 设置高危命令模板名称
 * @method string getCmdList() 获取命令列表，命令之间用换行符（"\n"）分隔
 * @method void setCmdList(string $CmdList) 设置命令列表，命令之间用换行符（"\n"）分隔
 */
class CmdTemplate extends AbstractModel
{
    /**
     * @var integer 高危命令模板ID
     */
    public $Id;

    /**
     * @var string 高危命令模板名称
     */
    public $Name;

    /**
     * @var string 命令列表，命令之间用换行符（"\n"）分隔
     */
    public $CmdList;

    /**
     * @param integer $Id 高危命令模板ID
     * @param string $Name 高危命令模板名称
     * @param string $CmdList 命令列表，命令之间用换行符（"\n"）分隔
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

        if (array_key_exists("CmdList",$param) and $param["CmdList"] !== null) {
            $this->CmdList = $param["CmdList"];
        }
    }
}
