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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据卷主机路径，取值参考: https://kubernetes.io/docs/concepts/storage/volumes#hostpath
 *
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 */
class VolumeHostPath extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 路径
     */
    public $Path;

    /**
     * @param string $Type 类型
     * @param string $Path 路径
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
