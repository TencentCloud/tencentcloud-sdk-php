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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CIC的权限策略
 *
 * @method integer getRolePolicyId() 获取策略ID。
 * @method void setRolePolicyId(integer $RolePolicyId) 设置策略ID。
 * @method string getRolePolicyName() 获取权限策略名称
 * @method void setRolePolicyName(string $RolePolicyName) 设置权限策略名称
 * @method string getRolePolicyType() 获取权限策略类型
 * @method void setRolePolicyType(string $RolePolicyType) 设置权限策略类型
 * @method string getRolePolicyDocument() 获取自定义策略内容。仅自定义策略返回该参数。
 * @method void setRolePolicyDocument(string $RolePolicyDocument) 设置自定义策略内容。仅自定义策略返回该参数。
 * @method string getAddTime() 获取权限策略被添加到权限配置的时间。
 * @method void setAddTime(string $AddTime) 设置权限策略被添加到权限配置的时间。
 */
class RolePolicie extends AbstractModel
{
    /**
     * @var integer 策略ID。
     */
    public $RolePolicyId;

    /**
     * @var string 权限策略名称
     */
    public $RolePolicyName;

    /**
     * @var string 权限策略类型
     */
    public $RolePolicyType;

    /**
     * @var string 自定义策略内容。仅自定义策略返回该参数。
     */
    public $RolePolicyDocument;

    /**
     * @var string 权限策略被添加到权限配置的时间。
     */
    public $AddTime;

    /**
     * @param integer $RolePolicyId 策略ID。
     * @param string $RolePolicyName 权限策略名称
     * @param string $RolePolicyType 权限策略类型
     * @param string $RolePolicyDocument 自定义策略内容。仅自定义策略返回该参数。
     * @param string $AddTime 权限策略被添加到权限配置的时间。
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
        if (array_key_exists("RolePolicyId",$param) and $param["RolePolicyId"] !== null) {
            $this->RolePolicyId = $param["RolePolicyId"];
        }

        if (array_key_exists("RolePolicyName",$param) and $param["RolePolicyName"] !== null) {
            $this->RolePolicyName = $param["RolePolicyName"];
        }

        if (array_key_exists("RolePolicyType",$param) and $param["RolePolicyType"] !== null) {
            $this->RolePolicyType = $param["RolePolicyType"];
        }

        if (array_key_exists("RolePolicyDocument",$param) and $param["RolePolicyDocument"] !== null) {
            $this->RolePolicyDocument = $param["RolePolicyDocument"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }
    }
}
