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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TCB环境
 *
 * @method string getID() 获取唯一ID
 * @method void setID(string $ID) 设置唯一ID
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 */
class TCBEnvironment extends AbstractModel
{
    /**
     * @var string 唯一ID
     */
    public $ID;

    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @param string $ID 唯一ID
     * @param string $Source 来源
     * @param string $Name 名称
     * @param string $Status 状态
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
