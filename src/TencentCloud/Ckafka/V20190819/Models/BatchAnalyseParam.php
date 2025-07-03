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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量解析
 *
 * @method string getFormat() 获取ONE_BY_ONE单条输出，MERGE合并输出
 * @method void setFormat(string $Format) 设置ONE_BY_ONE单条输出，MERGE合并输出
 */
class BatchAnalyseParam extends AbstractModel
{
    /**
     * @var string ONE_BY_ONE单条输出，MERGE合并输出
     */
    public $Format;

    /**
     * @param string $Format ONE_BY_ONE单条输出，MERGE合并输出
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
