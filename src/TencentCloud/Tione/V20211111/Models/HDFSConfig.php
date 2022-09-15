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
 * HDFS的参数配置
 *
 * @method string getId() 获取集群实例ID,实例ID形如: emr-xxxxxxxx
 * @method void setId(string $Id) 设置集群实例ID,实例ID形如: emr-xxxxxxxx
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 */
class HDFSConfig extends AbstractModel
{
    /**
     * @var string 集群实例ID,实例ID形如: emr-xxxxxxxx
     */
    public $Id;

    /**
     * @var string 路径
     */
    public $Path;

    /**
     * @param string $Id 集群实例ID,实例ID形如: emr-xxxxxxxx
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
