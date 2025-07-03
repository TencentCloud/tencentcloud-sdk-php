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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例变配检查条目
 *
 * @method string getCheckName() 获取检查项目名称，CK_CPU-变配后CPU风险检查；CK_MASTER_STORAGE-只读副本变配下，只读副本磁盘空间不小于主实例空间检查；CK_MEMORY-变配后内存风险检查；CK_STORAGE-变配后磁盘空间风险检查；CK_UPGRATE-变配是否需要迁移检查；
 * @method void setCheckName(string $CheckName) 设置检查项目名称，CK_CPU-变配后CPU风险检查；CK_MASTER_STORAGE-只读副本变配下，只读副本磁盘空间不小于主实例空间检查；CK_MEMORY-变配后内存风险检查；CK_STORAGE-变配后磁盘空间风险检查；CK_UPGRATE-变配是否需要迁移检查；
 * @method string getCurrentValue() 获取检查项目返回值，CK_CPU-当前CPU近7天最大的使用率(%) ；CK_MASTER_STORAGE-主实例的磁盘空间(GB)；CK_MEMORY-当前内存近7天最大的使用值（GB)；
CK_STORAGE-当前磁盘近7天最大的使用值（GB)；CK_UPGRATE- 当前变配检查是否需要迁移，MIGRATE需要迁移变配，LOCAL本地变配；
 * @method void setCurrentValue(string $CurrentValue) 设置检查项目返回值，CK_CPU-当前CPU近7天最大的使用率(%) ；CK_MASTER_STORAGE-主实例的磁盘空间(GB)；CK_MEMORY-当前内存近7天最大的使用值（GB)；
CK_STORAGE-当前磁盘近7天最大的使用值（GB)；CK_UPGRATE- 当前变配检查是否需要迁移，MIGRATE需要迁移变配，LOCAL本地变配；
 * @method integer getPassed() 获取检查条目是否通过 0-不通过，不能变配； 1-通过，可以变配
 * @method void setPassed(integer $Passed) 设置检查条目是否通过 0-不通过，不能变配； 1-通过，可以变配
 * @method integer getIsAffect() 获取本条目变配是否对实例有影响 0-没有影响 1-有影响
 * @method void setIsAffect(integer $IsAffect) 设置本条目变配是否对实例有影响 0-没有影响 1-有影响
 * @method string getMsg() 获取有影响或者不通过的情况下的必要描述
 * @method void setMsg(string $Msg) 设置有影响或者不通过的情况下的必要描述
 * @method integer getMsgCode() 获取描述对应的代码
 * @method void setMsgCode(integer $MsgCode) 设置描述对应的代码
 */
class CheckItem extends AbstractModel
{
    /**
     * @var string 检查项目名称，CK_CPU-变配后CPU风险检查；CK_MASTER_STORAGE-只读副本变配下，只读副本磁盘空间不小于主实例空间检查；CK_MEMORY-变配后内存风险检查；CK_STORAGE-变配后磁盘空间风险检查；CK_UPGRATE-变配是否需要迁移检查；
     */
    public $CheckName;

    /**
     * @var string 检查项目返回值，CK_CPU-当前CPU近7天最大的使用率(%) ；CK_MASTER_STORAGE-主实例的磁盘空间(GB)；CK_MEMORY-当前内存近7天最大的使用值（GB)；
CK_STORAGE-当前磁盘近7天最大的使用值（GB)；CK_UPGRATE- 当前变配检查是否需要迁移，MIGRATE需要迁移变配，LOCAL本地变配；
     */
    public $CurrentValue;

    /**
     * @var integer 检查条目是否通过 0-不通过，不能变配； 1-通过，可以变配
     */
    public $Passed;

    /**
     * @var integer 本条目变配是否对实例有影响 0-没有影响 1-有影响
     */
    public $IsAffect;

    /**
     * @var string 有影响或者不通过的情况下的必要描述
     */
    public $Msg;

    /**
     * @var integer 描述对应的代码
     */
    public $MsgCode;

    /**
     * @param string $CheckName 检查项目名称，CK_CPU-变配后CPU风险检查；CK_MASTER_STORAGE-只读副本变配下，只读副本磁盘空间不小于主实例空间检查；CK_MEMORY-变配后内存风险检查；CK_STORAGE-变配后磁盘空间风险检查；CK_UPGRATE-变配是否需要迁移检查；
     * @param string $CurrentValue 检查项目返回值，CK_CPU-当前CPU近7天最大的使用率(%) ；CK_MASTER_STORAGE-主实例的磁盘空间(GB)；CK_MEMORY-当前内存近7天最大的使用值（GB)；
CK_STORAGE-当前磁盘近7天最大的使用值（GB)；CK_UPGRATE- 当前变配检查是否需要迁移，MIGRATE需要迁移变配，LOCAL本地变配；
     * @param integer $Passed 检查条目是否通过 0-不通过，不能变配； 1-通过，可以变配
     * @param integer $IsAffect 本条目变配是否对实例有影响 0-没有影响 1-有影响
     * @param string $Msg 有影响或者不通过的情况下的必要描述
     * @param integer $MsgCode 描述对应的代码
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
        if (array_key_exists("CheckName",$param) and $param["CheckName"] !== null) {
            $this->CheckName = $param["CheckName"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Passed",$param) and $param["Passed"] !== null) {
            $this->Passed = $param["Passed"];
        }

        if (array_key_exists("IsAffect",$param) and $param["IsAffect"] !== null) {
            $this->IsAffect = $param["IsAffect"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("MsgCode",$param) and $param["MsgCode"] !== null) {
            $this->MsgCode = $param["MsgCode"];
        }
    }
}
