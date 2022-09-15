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
 * CFS存储的配置
 *
 * @method string getId() 获取cfs的实例的ID
 * @method void setId(string $Id) 设置cfs的实例的ID
 * @method string getPath() 获取存储的路径
 * @method void setPath(string $Path) 设置存储的路径
 */
class CFSConfig extends AbstractModel
{
    /**
     * @var string cfs的实例的ID
     */
    public $Id;

    /**
     * @var string 存储的路径
     */
    public $Path;

    /**
     * @param string $Id cfs的实例的ID
     * @param string $Path 存储的路径
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
