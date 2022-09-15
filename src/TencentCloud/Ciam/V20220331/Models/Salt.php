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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 密码盐
 *
 * @method string getSaltValue() 获取盐值
 * @method void setSaltValue(string $SaltValue) 设置盐值
 * @method SaltLocation getSaltLocation() 获取盐值位置
 * @method void setSaltLocation(SaltLocation $SaltLocation) 设置盐值位置
 */
class Salt extends AbstractModel
{
    /**
     * @var string 盐值
     */
    public $SaltValue;

    /**
     * @var SaltLocation 盐值位置
     */
    public $SaltLocation;

    /**
     * @param string $SaltValue 盐值
     * @param SaltLocation $SaltLocation 盐值位置
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
        if (array_key_exists("SaltValue",$param) and $param["SaltValue"] !== null) {
            $this->SaltValue = $param["SaltValue"];
        }

        if (array_key_exists("SaltLocation",$param) and $param["SaltLocation"] !== null) {
            $this->SaltLocation = new SaltLocation();
            $this->SaltLocation->deserialize($param["SaltLocation"]);
        }
    }
}
