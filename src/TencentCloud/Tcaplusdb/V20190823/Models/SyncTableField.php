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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 缓写表字段名称的映射
 *
 * @method string getSourceName() 获取TcaplusDB表字段名称
 * @method void setSourceName(string $SourceName) 设置TcaplusDB表字段名称
 * @method string getTargetName() 获取目标缓写表的字段名称
 * @method void setTargetName(string $TargetName) 设置目标缓写表的字段名称
 */
class SyncTableField extends AbstractModel
{
    /**
     * @var string TcaplusDB表字段名称
     */
    public $SourceName;

    /**
     * @var string 目标缓写表的字段名称
     */
    public $TargetName;

    /**
     * @param string $SourceName TcaplusDB表字段名称
     * @param string $TargetName 目标缓写表的字段名称
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
        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }
    }
}
