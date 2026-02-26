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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 术语库
 *
 * @method string getGlossaryId() 获取术语库唯一 ID
 * @method void setGlossaryId(string $GlossaryId) 设置术语库唯一 ID
 * @method string getName() 获取术语库名称
 * @method void setName(string $Name) 设置术语库名称
 * @method string getDescription() 获取术语库描述
 * @method void setDescription(string $Description) 设置术语库描述
 * @method string getSource() 获取源语言代码
 * @method void setSource(string $Source) 设置源语言代码
 * @method string getTarget() 获取目标语言代码
 * @method void setTarget(string $Target) 设置目标语言代码
 */
class Glossary extends AbstractModel
{
    /**
     * @var string 术语库唯一 ID
     */
    public $GlossaryId;

    /**
     * @var string 术语库名称
     */
    public $Name;

    /**
     * @var string 术语库描述
     */
    public $Description;

    /**
     * @var string 源语言代码
     */
    public $Source;

    /**
     * @var string 目标语言代码
     */
    public $Target;

    /**
     * @param string $GlossaryId 术语库唯一 ID
     * @param string $Name 术语库名称
     * @param string $Description 术语库描述
     * @param string $Source 源语言代码
     * @param string $Target 目标语言代码
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
        if (array_key_exists("GlossaryId",$param) and $param["GlossaryId"] !== null) {
            $this->GlossaryId = $param["GlossaryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }
    }
}
