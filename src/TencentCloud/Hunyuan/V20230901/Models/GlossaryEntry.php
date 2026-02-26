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
 * 术语条目
 *
 * @method string getSourceTerm() 获取源语言术语，限制1000字符

 * @method void setSourceTerm(string $SourceTerm) 设置源语言术语，限制1000字符

 * @method string getTargetTerm() 获取目标语言术语，限制1000字符

 * @method void setTargetTerm(string $TargetTerm) 设置目标语言术语，限制1000字符

 * @method string getEntryId() 获取术语条目 ID
 * @method void setEntryId(string $EntryId) 设置术语条目 ID
 */
class GlossaryEntry extends AbstractModel
{
    /**
     * @var string 源语言术语，限制1000字符

     */
    public $SourceTerm;

    /**
     * @var string 目标语言术语，限制1000字符

     */
    public $TargetTerm;

    /**
     * @var string 术语条目 ID
     */
    public $EntryId;

    /**
     * @param string $SourceTerm 源语言术语，限制1000字符

     * @param string $TargetTerm 目标语言术语，限制1000字符

     * @param string $EntryId 术语条目 ID
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
        if (array_key_exists("SourceTerm",$param) and $param["SourceTerm"] !== null) {
            $this->SourceTerm = $param["SourceTerm"];
        }

        if (array_key_exists("TargetTerm",$param) and $param["TargetTerm"] !== null) {
            $this->TargetTerm = $param["TargetTerm"];
        }

        if (array_key_exists("EntryId",$param) and $param["EntryId"] !== null) {
            $this->EntryId = $param["EntryId"];
        }
    }
}
