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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组织学等级
 *
 * @method string getGrade() 获取等级
 * @method void setGrade(string $Grade) 设置等级
 * @method array getIndex() 获取原文位置
 * @method void setIndex(array $Index) 设置原文位置
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 */
class HistologyLevel extends AbstractModel
{
    /**
     * @var string 等级
     */
    public $Grade;

    /**
     * @var array 原文位置
     */
    public $Index;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @param string $Grade 等级
     * @param array $Index 原文位置
     * @param string $Src 原文
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
        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }
    }
}
