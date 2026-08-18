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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPR解释卡片中的单个标签项
 *
 * @method string getKey() 获取<p>标签</p>
 * @method void setKey(string $Key) 设置<p>标签</p>
 * @method string getName() 获取<p>标签名称</p>
 * @method void setName(string $Name) 设置<p>标签名称</p>
 * @method string getRemark() 获取<p>标签描述</p>
 * @method void setRemark(string $Remark) 设置<p>标签描述</p>
 */
class VPRExplainDimensionItem extends AbstractModel
{
    /**
     * @var string <p>标签</p>
     */
    public $Key;

    /**
     * @var string <p>标签名称</p>
     */
    public $Name;

    /**
     * @var string <p>标签描述</p>
     */
    public $Remark;

    /**
     * @param string $Key <p>标签</p>
     * @param string $Name <p>标签名称</p>
     * @param string $Remark <p>标签描述</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
