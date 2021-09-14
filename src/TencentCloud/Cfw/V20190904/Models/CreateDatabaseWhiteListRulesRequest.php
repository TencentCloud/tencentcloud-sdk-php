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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDatabaseWhiteListRules请求参数结构体
 *
 * @method array getDatabaseWhiteListRuleData() 获取创建白名单数据
 * @method void setDatabaseWhiteListRuleData(array $DatabaseWhiteListRuleData) 设置创建白名单数据
 */
class CreateDatabaseWhiteListRulesRequest extends AbstractModel
{
    /**
     * @var array 创建白名单数据
     */
    public $DatabaseWhiteListRuleData;

    /**
     * @param array $DatabaseWhiteListRuleData 创建白名单数据
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
        if (array_key_exists("DatabaseWhiteListRuleData",$param) and $param["DatabaseWhiteListRuleData"] !== null) {
            $this->DatabaseWhiteListRuleData = [];
            foreach ($param["DatabaseWhiteListRuleData"] as $key => $value){
                $obj = new DatabaseWhiteListRuleData();
                $obj->deserialize($value);
                array_push($this->DatabaseWhiteListRuleData, $obj);
            }
        }
    }
}
