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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名增值服务用量
 *
 * @method string getName() 获取增值服务名称
 * @method void setName(string $Name) 设置增值服务名称
 * @method string getKey() 获取增值服务标识
 * @method void setKey(string $Key) 设置增值服务标识
 * @method integer getLimitCount() 获取增值服务最大用量
 * @method void setLimitCount(integer $LimitCount) 设置增值服务最大用量
 * @method integer getUseCount() 获取增值服务已使用的用量
 * @method void setUseCount(integer $UseCount) 设置增值服务已使用的用量
 */
class VASStatisticItem extends AbstractModel
{
    /**
     * @var string 增值服务名称
     */
    public $Name;

    /**
     * @var string 增值服务标识
     */
    public $Key;

    /**
     * @var integer 增值服务最大用量
     */
    public $LimitCount;

    /**
     * @var integer 增值服务已使用的用量
     */
    public $UseCount;

    /**
     * @param string $Name 增值服务名称
     * @param string $Key 增值服务标识
     * @param integer $LimitCount 增值服务最大用量
     * @param integer $UseCount 增值服务已使用的用量
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("LimitCount",$param) and $param["LimitCount"] !== null) {
            $this->LimitCount = $param["LimitCount"];
        }

        if (array_key_exists("UseCount",$param) and $param["UseCount"] !== null) {
            $this->UseCount = $param["UseCount"];
        }
    }
}
