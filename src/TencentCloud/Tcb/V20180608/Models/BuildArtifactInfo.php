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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构建产物信息
 *
 * @method string getType() 获取<p>产物类型</p>
 * @method void setType(string $Type) 设置<p>产物类型</p>
 * @method string getName() 获取<p>产物名称</p>
 * @method void setName(string $Name) 设置<p>产物名称</p>
 * @method string getStatus() 获取<p>产物状态</p>
 * @method void setStatus(string $Status) 设置<p>产物状态</p>
 * @method string getContentJson() 获取<p>扩展详情 Json</p>
 * @method void setContentJson(string $ContentJson) 设置<p>扩展详情 Json</p>
 */
class BuildArtifactInfo extends AbstractModel
{
    /**
     * @var string <p>产物类型</p>
     */
    public $Type;

    /**
     * @var string <p>产物名称</p>
     */
    public $Name;

    /**
     * @var string <p>产物状态</p>
     */
    public $Status;

    /**
     * @var string <p>扩展详情 Json</p>
     */
    public $ContentJson;

    /**
     * @param string $Type <p>产物类型</p>
     * @param string $Name <p>产物名称</p>
     * @param string $Status <p>产物状态</p>
     * @param string $ContentJson <p>扩展详情 Json</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ContentJson",$param) and $param["ContentJson"] !== null) {
            $this->ContentJson = $param["ContentJson"];
        }
    }
}
