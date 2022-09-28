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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高级回源配置
 *
 * @method array getOriginGroupConditions() 获取高级回源配置的匹配条件。其中相同的Target只能出现一次。
 * @method void setOriginGroupConditions(array $OriginGroupConditions) 设置高级回源配置的匹配条件。其中相同的Target只能出现一次。
 * @method string getOriginGroupId() 获取主源站组ID。
 * @method void setOriginGroupId(string $OriginGroupId) 设置主源站组ID。
 * @method string getBackupOriginGroupId() 获取备用源站组ID。
 * @method void setBackupOriginGroupId(string $BackupOriginGroupId) 设置备用源站组ID。
 */
class AdvancedOriginGroup extends AbstractModel
{
    /**
     * @var array 高级回源配置的匹配条件。其中相同的Target只能出现一次。
     */
    public $OriginGroupConditions;

    /**
     * @var string 主源站组ID。
     */
    public $OriginGroupId;

    /**
     * @var string 备用源站组ID。
     */
    public $BackupOriginGroupId;

    /**
     * @param array $OriginGroupConditions 高级回源配置的匹配条件。其中相同的Target只能出现一次。
     * @param string $OriginGroupId 主源站组ID。
     * @param string $BackupOriginGroupId 备用源站组ID。
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
        if (array_key_exists("OriginGroupConditions",$param) and $param["OriginGroupConditions"] !== null) {
            $this->OriginGroupConditions = [];
            foreach ($param["OriginGroupConditions"] as $key => $value){
                $obj = new OriginGroupCondition();
                $obj->deserialize($value);
                array_push($this->OriginGroupConditions, $obj);
            }
        }

        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }

        if (array_key_exists("BackupOriginGroupId",$param) and $param["BackupOriginGroupId"] !== null) {
            $this->BackupOriginGroupId = $param["BackupOriginGroupId"];
        }
    }
}
