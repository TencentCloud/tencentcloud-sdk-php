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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 型号以及版本号
 *
 * @method string getDevModel() 获取型号名称
 * @method void setDevModel(string $DevModel) 设置型号名称
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 */
class ModelVersion extends AbstractModel
{
    /**
     * @var string 型号名称
     */
    public $DevModel;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @param string $DevModel 型号名称
     * @param string $Version 版本
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
        if (array_key_exists("DevModel",$param) and $param["DevModel"] !== null) {
            $this->DevModel = $param["DevModel"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
