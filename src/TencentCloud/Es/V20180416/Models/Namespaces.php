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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TKE命名空间
 *
 * @method array getInclude() 获取包含的命名空间的列表，单个命名空间支持小写字母、数字、连接符-、下划线_，最多支持63个字符
 * @method void setInclude(array $Include) 设置包含的命名空间的列表，单个命名空间支持小写字母、数字、连接符-、下划线_，最多支持63个字符
 * @method array getExclude() 获取不包含的命名空间列表，单个命名空间支持小写字母、数字、连接符-、下划线_，最多支持63个字符
 * @method void setExclude(array $Exclude) 设置不包含的命名空间列表，单个命名空间支持小写字母、数字、连接符-、下划线_，最多支持63个字符
 */
class Namespaces extends AbstractModel
{
    /**
     * @var array 包含的命名空间的列表，单个命名空间支持小写字母、数字、连接符-、下划线_，最多支持63个字符
     */
    public $Include;

    /**
     * @var array 不包含的命名空间列表，单个命名空间支持小写字母、数字、连接符-、下划线_，最多支持63个字符
     */
    public $Exclude;

    /**
     * @param array $Include 包含的命名空间的列表，单个命名空间支持小写字母、数字、连接符-、下划线_，最多支持63个字符
     * @param array $Exclude 不包含的命名空间列表，单个命名空间支持小写字母、数字、连接符-、下划线_，最多支持63个字符
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
        if (array_key_exists("Include",$param) and $param["Include"] !== null) {
            $this->Include = $param["Include"];
        }

        if (array_key_exists("Exclude",$param) and $param["Exclude"] !== null) {
            $this->Exclude = $param["Exclude"];
        }
    }
}
