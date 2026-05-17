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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos风险识别桶访问规则
 *
 * @method string getAccessType() 获取可访问方式：
specify 指定用户
anonymous 可匿名访问
 * @method void setAccessType(string $AccessType) 设置可访问方式：
specify 指定用户
anonymous 可匿名访问
 * @method integer getAccessUserCount() 获取用户数
 * @method void setAccessUserCount(integer $AccessUserCount) 设置用户数
 * @method integer getAccessAkCount() 获取ak数
 * @method void setAccessAkCount(integer $AccessAkCount) 设置ak数
 * @method integer getAccessRoleCount() 获取角色数
 * @method void setAccessRoleCount(integer $AccessRoleCount) 设置角色数
 */
class CosBucketAccessWay extends AbstractModel
{
    /**
     * @var string 可访问方式：
specify 指定用户
anonymous 可匿名访问
     */
    public $AccessType;

    /**
     * @var integer 用户数
     */
    public $AccessUserCount;

    /**
     * @var integer ak数
     */
    public $AccessAkCount;

    /**
     * @var integer 角色数
     */
    public $AccessRoleCount;

    /**
     * @param string $AccessType 可访问方式：
specify 指定用户
anonymous 可匿名访问
     * @param integer $AccessUserCount 用户数
     * @param integer $AccessAkCount ak数
     * @param integer $AccessRoleCount 角色数
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccessUserCount",$param) and $param["AccessUserCount"] !== null) {
            $this->AccessUserCount = $param["AccessUserCount"];
        }

        if (array_key_exists("AccessAkCount",$param) and $param["AccessAkCount"] !== null) {
            $this->AccessAkCount = $param["AccessAkCount"];
        }

        if (array_key_exists("AccessRoleCount",$param) and $param["AccessRoleCount"] !== null) {
            $this->AccessRoleCount = $param["AccessRoleCount"];
        }
    }
}
