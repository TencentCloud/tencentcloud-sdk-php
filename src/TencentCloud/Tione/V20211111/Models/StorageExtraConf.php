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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储额外配置
 *
 * @method string getCFSStorageType() 获取<p>cfs的存储类型<br>  // HP:通用性能型<br>  // SD:通用标准型<br>  // TP:turbo性能型<br>  // TB:turbo标准型<br>  // THP:吞吐型</p>
 * @method void setCFSStorageType(string $CFSStorageType) 设置<p>cfs的存储类型<br>  // HP:通用性能型<br>  // SD:通用标准型<br>  // TP:turbo性能型<br>  // TB:turbo标准型<br>  // THP:吞吐型</p>
 * @method string getCFSProtocol() 获取<p>cfs的协议</p>
 * @method void setCFSProtocol(string $CFSProtocol) 设置<p>cfs的协议</p>
 */
class StorageExtraConf extends AbstractModel
{
    /**
     * @var string <p>cfs的存储类型<br>  // HP:通用性能型<br>  // SD:通用标准型<br>  // TP:turbo性能型<br>  // TB:turbo标准型<br>  // THP:吞吐型</p>
     */
    public $CFSStorageType;

    /**
     * @var string <p>cfs的协议</p>
     */
    public $CFSProtocol;

    /**
     * @param string $CFSStorageType <p>cfs的存储类型<br>  // HP:通用性能型<br>  // SD:通用标准型<br>  // TP:turbo性能型<br>  // TB:turbo标准型<br>  // THP:吞吐型</p>
     * @param string $CFSProtocol <p>cfs的协议</p>
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
        if (array_key_exists("CFSStorageType",$param) and $param["CFSStorageType"] !== null) {
            $this->CFSStorageType = $param["CFSStorageType"];
        }

        if (array_key_exists("CFSProtocol",$param) and $param["CFSProtocol"] !== null) {
            $this->CFSProtocol = $param["CFSProtocol"];
        }
    }
}
