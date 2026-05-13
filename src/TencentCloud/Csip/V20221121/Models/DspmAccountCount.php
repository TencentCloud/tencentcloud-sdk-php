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
 * Dspm 账号统计数
 *
 * @method integer getUinAccountCount() 获取云账号个数
 * @method void setUinAccountCount(integer $UinAccountCount) 设置云账号个数
 * @method integer getPersonCount() 获取访客账号个数
 * @method void setPersonCount(integer $PersonCount) 设置访客账号个数
 * @method integer getUncontrolledAccountCount() 获取未管控账号个数
 * @method void setUncontrolledAccountCount(integer $UncontrolledAccountCount) 设置未管控账号个数
 * @method integer getTotalAccountCount() 获取总账号个数
 * @method void setTotalAccountCount(integer $TotalAccountCount) 设置总账号个数
 */
class DspmAccountCount extends AbstractModel
{
    /**
     * @var integer 云账号个数
     */
    public $UinAccountCount;

    /**
     * @var integer 访客账号个数
     */
    public $PersonCount;

    /**
     * @var integer 未管控账号个数
     */
    public $UncontrolledAccountCount;

    /**
     * @var integer 总账号个数
     */
    public $TotalAccountCount;

    /**
     * @param integer $UinAccountCount 云账号个数
     * @param integer $PersonCount 访客账号个数
     * @param integer $UncontrolledAccountCount 未管控账号个数
     * @param integer $TotalAccountCount 总账号个数
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
        if (array_key_exists("UinAccountCount",$param) and $param["UinAccountCount"] !== null) {
            $this->UinAccountCount = $param["UinAccountCount"];
        }

        if (array_key_exists("PersonCount",$param) and $param["PersonCount"] !== null) {
            $this->PersonCount = $param["PersonCount"];
        }

        if (array_key_exists("UncontrolledAccountCount",$param) and $param["UncontrolledAccountCount"] !== null) {
            $this->UncontrolledAccountCount = $param["UncontrolledAccountCount"];
        }

        if (array_key_exists("TotalAccountCount",$param) and $param["TotalAccountCount"] !== null) {
            $this->TotalAccountCount = $param["TotalAccountCount"];
        }
    }
}
