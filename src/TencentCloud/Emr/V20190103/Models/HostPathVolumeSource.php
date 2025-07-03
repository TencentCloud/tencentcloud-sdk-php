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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机路径
 *
 * @method string getPath() 获取主机路径
 * @method void setPath(string $Path) 设置主机路径
 * @method string getType() 获取主机路径类型，当前默认DirectoryOrCreate
 * @method void setType(string $Type) 设置主机路径类型，当前默认DirectoryOrCreate
 */
class HostPathVolumeSource extends AbstractModel
{
    /**
     * @var string 主机路径
     */
    public $Path;

    /**
     * @var string 主机路径类型，当前默认DirectoryOrCreate
     */
    public $Type;

    /**
     * @param string $Path 主机路径
     * @param string $Type 主机路径类型，当前默认DirectoryOrCreate
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
