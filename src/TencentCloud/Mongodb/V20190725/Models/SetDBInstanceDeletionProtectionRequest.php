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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetDBInstanceDeletionProtection请求参数结构体
 *
 * @method array getInstanceIds() 获取实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
 * @method integer getEnableDeletionProtection() 获取实例销毁保护选项，取值范围：0-关闭销毁保护，1-开启销毁保护
 * @method void setEnableDeletionProtection(integer $EnableDeletionProtection) 设置实例销毁保护选项，取值范围：0-关闭销毁保护，1-开启销毁保护
 */
class SetDBInstanceDeletionProtectionRequest extends AbstractModel
{
    /**
     * @var array 实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
     */
    public $InstanceIds;

    /**
     * @var integer 实例销毁保护选项，取值范围：0-关闭销毁保护，1-开启销毁保护
     */
    public $EnableDeletionProtection;

    /**
     * @param array $InstanceIds 实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
     * @param integer $EnableDeletionProtection 实例销毁保护选项，取值范围：0-关闭销毁保护，1-开启销毁保护
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }
    }
}
