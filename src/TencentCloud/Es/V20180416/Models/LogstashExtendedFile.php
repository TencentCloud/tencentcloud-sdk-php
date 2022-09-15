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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logstash扩展文件信息
 *
 * @method string getName() 获取扩展文件名称
 * @method void setName(string $Name) 设置扩展文件名称
 * @method integer getSize() 获取扩展文件大小，单位B
 * @method void setSize(integer $Size) 设置扩展文件大小，单位B
 */
class LogstashExtendedFile extends AbstractModel
{
    /**
     * @var string 扩展文件名称
     */
    public $Name;

    /**
     * @var integer 扩展文件大小，单位B
     */
    public $Size;

    /**
     * @param string $Name 扩展文件名称
     * @param integer $Size 扩展文件大小，单位B
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
