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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列血缘对
 *
 * @method array getSources() 获取列血缘来源方
 * @method void setSources(array $Sources) 设置列血缘来源方
 * @method ColumnLineage getTarget() 获取列血缘目标方
 * @method void setTarget(ColumnLineage $Target) 设置列血缘目标方
 */
class ColumnLineagePair extends AbstractModel
{
    /**
     * @var array 列血缘来源方
     */
    public $Sources;

    /**
     * @var ColumnLineage 列血缘目标方
     */
    public $Target;

    /**
     * @param array $Sources 列血缘来源方
     * @param ColumnLineage $Target 列血缘目标方
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
        if (array_key_exists("Sources",$param) and $param["Sources"] !== null) {
            $this->Sources = [];
            foreach ($param["Sources"] as $key => $value){
                $obj = new ColumnLineage();
                $obj->deserialize($value);
                array_push($this->Sources, $obj);
            }
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new ColumnLineage();
            $this->Target->deserialize($param["Target"]);
        }
    }
}
