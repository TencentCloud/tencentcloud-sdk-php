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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置下发参数
 *
 * @method string getFileName() 获取配置文件名字
 * @method void setFileName(string $FileName) 设置配置文件名字
 * @method string getParams() 获取配置文件参数,需要转为base64
 * @method void setParams(string $Params) 设置配置文件参数,需要转为base64
 */
class ConfSubContext extends AbstractModel
{
    /**
     * @var string 配置文件名字
     */
    public $FileName;

    /**
     * @var string 配置文件参数,需要转为base64
     */
    public $Params;

    /**
     * @param string $FileName 配置文件名字
     * @param string $Params 配置文件参数,需要转为base64
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
