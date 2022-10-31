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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询迁移实例列表的实例对象
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getVip() 获取实例Vip
 * @method void setVip(string $Vip) 设置实例Vip
 * @method integer getVport() 获取实例Vport
 * @method void setVport(integer $Vport) 设置实例Vport
 * @method integer getUsable() 获取是否可以作为迁移对象，1-可以，0-不可以
 * @method void setUsable(integer $Usable) 设置是否可以作为迁移对象，1-可以，0-不可以
 * @method string getHint() 获取不可以作为迁移对象的原因
 * @method void setHint(string $Hint) 设置不可以作为迁移对象的原因
 */
class MigrateDBItem extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例Vip
     */
    public $Vip;

    /**
     * @var integer 实例Vport
     */
    public $Vport;

    /**
     * @var integer 是否可以作为迁移对象，1-可以，0-不可以
     */
    public $Usable;

    /**
     * @var string 不可以作为迁移对象的原因
     */
    public $Hint;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $Vip 实例Vip
     * @param integer $Vport 实例Vport
     * @param integer $Usable 是否可以作为迁移对象，1-可以，0-不可以
     * @param string $Hint 不可以作为迁移对象的原因
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Usable",$param) and $param["Usable"] !== null) {
            $this->Usable = $param["Usable"];
        }

        if (array_key_exists("Hint",$param) and $param["Hint"] !== null) {
            $this->Hint = $param["Hint"];
        }
    }
}
