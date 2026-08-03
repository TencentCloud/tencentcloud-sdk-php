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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyJobSpec请求参数结构体
 *
 * @method string getSpecId() 获取<p>原配置ID</p>
 * @method void setSpecId(string $SpecId) 设置<p>原配置ID</p>
 * @method string getNewName() 获取<p>新配置名称（可选，留空则自动命名为 &#39;原名-copy&#39;）</p>
 * @method void setNewName(string $NewName) 设置<p>新配置名称（可选，留空则自动命名为 &#39;原名-copy&#39;）</p>
 */
class CopyJobSpecRequest extends AbstractModel
{
    /**
     * @var string <p>原配置ID</p>
     */
    public $SpecId;

    /**
     * @var string <p>新配置名称（可选，留空则自动命名为 &#39;原名-copy&#39;）</p>
     */
    public $NewName;

    /**
     * @param string $SpecId <p>原配置ID</p>
     * @param string $NewName <p>新配置名称（可选，留空则自动命名为 &#39;原名-copy&#39;）</p>
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
        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }
    }
}
