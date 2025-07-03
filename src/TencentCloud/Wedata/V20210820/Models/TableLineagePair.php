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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表血缘关系对
 *
 * @method array getSources() 获取血缘数据来源表
 * @method void setSources(array $Sources) 设置血缘数据来源表
 * @method TableLineage getTarget() 获取血缘数据目标表
 * @method void setTarget(TableLineage $Target) 设置血缘数据目标表
 */
class TableLineagePair extends AbstractModel
{
    /**
     * @var array 血缘数据来源表
     */
    public $Sources;

    /**
     * @var TableLineage 血缘数据目标表
     */
    public $Target;

    /**
     * @param array $Sources 血缘数据来源表
     * @param TableLineage $Target 血缘数据目标表
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
                $obj = new TableLineage();
                $obj->deserialize($value);
                array_push($this->Sources, $obj);
            }
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new TableLineage();
            $this->Target->deserialize($param["Target"]);
        }
    }
}
