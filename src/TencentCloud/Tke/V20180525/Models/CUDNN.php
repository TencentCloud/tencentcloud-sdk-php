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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cuDNN的版本信息
 *
 * @method string getVersion() 获取cuDNN的版本
 * @method void setVersion(string $Version) 设置cuDNN的版本
 * @method string getName() 获取cuDNN的名字
 * @method void setName(string $Name) 设置cuDNN的名字
 * @method string getDocName() 获取cuDNN的Doc名字
 * @method void setDocName(string $DocName) 设置cuDNN的Doc名字
 * @method string getDevName() 获取cuDNN的Dev名字
 * @method void setDevName(string $DevName) 设置cuDNN的Dev名字
 */
class CUDNN extends AbstractModel
{
    /**
     * @var string cuDNN的版本
     */
    public $Version;

    /**
     * @var string cuDNN的名字
     */
    public $Name;

    /**
     * @var string cuDNN的Doc名字
     */
    public $DocName;

    /**
     * @var string cuDNN的Dev名字
     */
    public $DevName;

    /**
     * @param string $Version cuDNN的版本
     * @param string $Name cuDNN的名字
     * @param string $DocName cuDNN的Doc名字
     * @param string $DevName cuDNN的Dev名字
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("DevName",$param) and $param["DevName"] !== null) {
            $this->DevName = $param["DevName"];
        }
    }
}
