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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号信息
 *
 * @method string getUserLevel() 获取<p>用户等级</p>
 * @method void setUserLevel(string $UserLevel) 设置<p>用户等级</p>
 * @method CreditPoint getUserPoint() 获取<p>用户积分</p>
 * @method void setUserPoint(CreditPoint $UserPoint) 设置<p>用户积分</p>
 * @method string getUserType() 获取<p>用户类型</p>
 * @method void setUserType(string $UserType) 设置<p>用户类型</p>
 */
class User extends AbstractModel
{
    /**
     * @var string <p>用户等级</p>
     */
    public $UserLevel;

    /**
     * @var CreditPoint <p>用户积分</p>
     */
    public $UserPoint;

    /**
     * @var string <p>用户类型</p>
     */
    public $UserType;

    /**
     * @param string $UserLevel <p>用户等级</p>
     * @param CreditPoint $UserPoint <p>用户积分</p>
     * @param string $UserType <p>用户类型</p>
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
        if (array_key_exists("UserLevel",$param) and $param["UserLevel"] !== null) {
            $this->UserLevel = $param["UserLevel"];
        }

        if (array_key_exists("UserPoint",$param) and $param["UserPoint"] !== null) {
            $this->UserPoint = new CreditPoint();
            $this->UserPoint->deserialize($param["UserPoint"]);
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
