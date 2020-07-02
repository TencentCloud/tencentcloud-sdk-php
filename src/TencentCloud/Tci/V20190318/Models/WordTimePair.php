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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单词出现的那个句子的起始时间和结束时间信息
 *
 * @method integer getMbtm() 获取单词出现的那个句子的起始时间
 * @method void setMbtm(integer $Mbtm) 设置单词出现的那个句子的起始时间
 * @method integer getMetm() 获取	单词出现的那个句子的结束时间
 * @method void setMetm(integer $Metm) 设置	单词出现的那个句子的结束时间
 */
class WordTimePair extends AbstractModel
{
    /**
     * @var integer 单词出现的那个句子的起始时间
     */
    public $Mbtm;

    /**
     * @var integer 	单词出现的那个句子的结束时间
     */
    public $Metm;

    /**
     * @param integer $Mbtm 单词出现的那个句子的起始时间
     * @param integer $Metm 	单词出现的那个句子的结束时间
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
        if (array_key_exists('Mbtm',$param) and $param['Mbtm'] !== null) {
            $this->Mbtm = $param['Mbtm'];
        }

        if (array_key_exists('Metm',$param) and $param['Metm'] !== null) {
            $this->Metm = $param['Metm'];
        }
    }
}
