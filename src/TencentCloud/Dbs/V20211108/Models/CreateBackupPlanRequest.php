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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackupPlan请求参数结构体
 *
 * @method string getDatabaseType() 获取源端数据库类型。当前支持值为: ["mysql","cynosdbmysql","percona","mariadb","tdsqlmysql"]。
 * @method void setDatabaseType(string $DatabaseType) 设置源端数据库类型。当前支持值为: ["mysql","cynosdbmysql","percona","mariadb","tdsqlmysql"]。
 * @method string getBackupMethod() 获取备份方式。当前仅支持"logical"，即逻辑备份。
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式。当前仅支持"logical"，即逻辑备份。
 * @method string getInstanceClass() 获取规格。当前支持值为: ["micro","small","medium","large","xlarge"]。默认为"small"。
 * @method void setInstanceClass(string $InstanceClass) 设置规格。当前支持值为: ["micro","small","medium","large","xlarge"]。默认为"small"。
 * @method integer getPeriod() 获取购买时长，单位为月，默认值为1。
 * @method void setPeriod(integer $Period) 设置购买时长，单位为月，默认值为1。
 * @method string getPayType() 获取计费模式。当前仅支持"prepay"，即包年包月。
 * @method void setPayType(string $PayType) 设置计费模式。当前仅支持"prepay"，即包年包月。
 * @method integer getCount() 获取购买数量。取值范围为[1, 10]，默认值为1。
 * @method void setCount(integer $Count) 设置购买数量。取值范围为[1, 10]，默认值为1。
 * @method integer getAutoRenew() 获取自动续费标识。1 - 开启自动续费；0 - 不开启自动续费。
 * @method void setAutoRenew(integer $AutoRenew) 设置自动续费标识。1 - 开启自动续费；0 - 不开启自动续费。
 * @method array getTags() 获取标签值。
 * @method void setTags(array $Tags) 设置标签值。
 */
class CreateBackupPlanRequest extends AbstractModel
{
    /**
     * @var string 源端数据库类型。当前支持值为: ["mysql","cynosdbmysql","percona","mariadb","tdsqlmysql"]。
     */
    public $DatabaseType;

    /**
     * @var string 备份方式。当前仅支持"logical"，即逻辑备份。
     */
    public $BackupMethod;

    /**
     * @var string 规格。当前支持值为: ["micro","small","medium","large","xlarge"]。默认为"small"。
     */
    public $InstanceClass;

    /**
     * @var integer 购买时长，单位为月，默认值为1。
     */
    public $Period;

    /**
     * @var string 计费模式。当前仅支持"prepay"，即包年包月。
     */
    public $PayType;

    /**
     * @var integer 购买数量。取值范围为[1, 10]，默认值为1。
     */
    public $Count;

    /**
     * @var integer 自动续费标识。1 - 开启自动续费；0 - 不开启自动续费。
     */
    public $AutoRenew;

    /**
     * @var array 标签值。
     */
    public $Tags;

    /**
     * @param string $DatabaseType 源端数据库类型。当前支持值为: ["mysql","cynosdbmysql","percona","mariadb","tdsqlmysql"]。
     * @param string $BackupMethod 备份方式。当前仅支持"logical"，即逻辑备份。
     * @param string $InstanceClass 规格。当前支持值为: ["micro","small","medium","large","xlarge"]。默认为"small"。
     * @param integer $Period 购买时长，单位为月，默认值为1。
     * @param string $PayType 计费模式。当前仅支持"prepay"，即包年包月。
     * @param integer $Count 购买数量。取值范围为[1, 10]，默认值为1。
     * @param integer $AutoRenew 自动续费标识。1 - 开启自动续费；0 - 不开启自动续费。
     * @param array $Tags 标签值。
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
        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
