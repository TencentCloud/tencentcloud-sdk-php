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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量创建失败项
 *
 * @method integer getIndex() 获取失败项的序号（从 1 开始，对应后缀编号）。
 * @method void setIndex(integer $Index) 设置失败项的序号（从 1 开始，对应后缀编号）。
 * @method string getName() 获取失败项的名称。
 * @method void setName(string $Name) 设置失败项的名称。
 * @method string getReason() 获取失败原因。
 * @method void setReason(string $Reason) 设置失败原因。
 */
class BatchCreateFailedItem extends AbstractModel
{
    /**
     * @var integer 失败项的序号（从 1 开始，对应后缀编号）。
     */
    public $Index;

    /**
     * @var string 失败项的名称。
     */
    public $Name;

    /**
     * @var string 失败原因。
     */
    public $Reason;

    /**
     * @param integer $Index 失败项的序号（从 1 开始，对应后缀编号）。
     * @param string $Name 失败项的名称。
     * @param string $Reason 失败原因。
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
