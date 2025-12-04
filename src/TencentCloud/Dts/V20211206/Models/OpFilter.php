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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDL/DML 过滤规则
 *
 * @method array getOpTypes() 获取DML 白名单
 * @method void setOpTypes(array $OpTypes) 设置DML 白名单
 * @method array getDdlOptions() 获取DDL 白名单
 * @method void setDdlOptions(array $DdlOptions) 设置DDL 白名单
 */
class OpFilter extends AbstractModel
{
    /**
     * @var array DML 白名单
     */
    public $OpTypes;

    /**
     * @var array DDL 白名单
     */
    public $DdlOptions;

    /**
     * @param array $OpTypes DML 白名单
     * @param array $DdlOptions DDL 白名单
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
        if (array_key_exists("OpTypes",$param) and $param["OpTypes"] !== null) {
            $this->OpTypes = $param["OpTypes"];
        }

        if (array_key_exists("DdlOptions",$param) and $param["DdlOptions"] !== null) {
            $this->DdlOptions = [];
            foreach ($param["DdlOptions"] as $key => $value){
                $obj = new DdlOption();
                $obj->deserialize($value);
                array_push($this->DdlOptions, $obj);
            }
        }
    }
}
