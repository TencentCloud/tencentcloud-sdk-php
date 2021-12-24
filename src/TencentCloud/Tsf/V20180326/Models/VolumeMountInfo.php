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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器卷挂载点信息
 *
 * @method string getVolumeMountName() 获取挂载数据卷名称
 * @method void setVolumeMountName(string $VolumeMountName) 设置挂载数据卷名称
 * @method string getVolumeMountPath() 获取挂载路径
 * @method void setVolumeMountPath(string $VolumeMountPath) 设置挂载路径
 * @method string getVolumeMountSubPath() 获取挂载子路径
 * @method void setVolumeMountSubPath(string $VolumeMountSubPath) 设置挂载子路径
 * @method string getReadOrWrite() 获取读写，1：读 2：读写
 * @method void setReadOrWrite(string $ReadOrWrite) 设置读写，1：读 2：读写
 */
class VolumeMountInfo extends AbstractModel
{
    /**
     * @var string 挂载数据卷名称
     */
    public $VolumeMountName;

    /**
     * @var string 挂载路径
     */
    public $VolumeMountPath;

    /**
     * @var string 挂载子路径
     */
    public $VolumeMountSubPath;

    /**
     * @var string 读写，1：读 2：读写
     */
    public $ReadOrWrite;

    /**
     * @param string $VolumeMountName 挂载数据卷名称
     * @param string $VolumeMountPath 挂载路径
     * @param string $VolumeMountSubPath 挂载子路径
     * @param string $ReadOrWrite 读写，1：读 2：读写
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
        if (array_key_exists("VolumeMountName",$param) and $param["VolumeMountName"] !== null) {
            $this->VolumeMountName = $param["VolumeMountName"];
        }

        if (array_key_exists("VolumeMountPath",$param) and $param["VolumeMountPath"] !== null) {
            $this->VolumeMountPath = $param["VolumeMountPath"];
        }

        if (array_key_exists("VolumeMountSubPath",$param) and $param["VolumeMountSubPath"] !== null) {
            $this->VolumeMountSubPath = $param["VolumeMountSubPath"];
        }

        if (array_key_exists("ReadOrWrite",$param) and $param["ReadOrWrite"] !== null) {
            $this->ReadOrWrite = $param["ReadOrWrite"];
        }
    }
}
