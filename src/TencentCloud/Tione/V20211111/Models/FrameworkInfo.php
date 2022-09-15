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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 框架信息列表
 *
 * @method string getName() 获取框架名称
 * @method void setName(string $Name) 设置框架名称
 * @method array getVersionInfos() 获取框架版本以及对应的训练模式
 * @method void setVersionInfos(array $VersionInfos) 设置框架版本以及对应的训练模式
 */
class FrameworkInfo extends AbstractModel
{
    /**
     * @var string 框架名称
     */
    public $Name;

    /**
     * @var array 框架版本以及对应的训练模式
     */
    public $VersionInfos;

    /**
     * @param string $Name 框架名称
     * @param array $VersionInfos 框架版本以及对应的训练模式
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

        if (array_key_exists("VersionInfos",$param) and $param["VersionInfos"] !== null) {
            $this->VersionInfos = [];
            foreach ($param["VersionInfos"] as $key => $value){
                $obj = new FrameworkVersion();
                $obj->deserialize($value);
                array_push($this->VersionInfos, $obj);
            }
        }
    }
}
