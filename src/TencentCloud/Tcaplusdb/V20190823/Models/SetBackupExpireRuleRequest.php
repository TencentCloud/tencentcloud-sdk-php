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
 * SetBackupExpireRule请求参数结构体
 *
 * @method string getClusterId() 获取表所属集群实例ID
 * @method void setClusterId(string $ClusterId) 设置表所属集群实例ID
 * @method array getBackupExpireRules() 获取淘汰策略数组
 * @method void setBackupExpireRules(array $BackupExpireRules) 设置淘汰策略数组
 */
class SetBackupExpireRuleRequest extends AbstractModel
{
    /**
     * @var string 表所属集群实例ID
     */
    public $ClusterId;

    /**
     * @var array 淘汰策略数组
     */
    public $BackupExpireRules;

    /**
     * @param string $ClusterId 表所属集群实例ID
     * @param array $BackupExpireRules 淘汰策略数组
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BackupExpireRules",$param) and $param["BackupExpireRules"] !== null) {
            $this->BackupExpireRules = [];
            foreach ($param["BackupExpireRules"] as $key => $value){
                $obj = new BackupExpireRuleInfo();
                $obj->deserialize($value);
                array_push($this->BackupExpireRules, $obj);
            }
        }
    }
}
