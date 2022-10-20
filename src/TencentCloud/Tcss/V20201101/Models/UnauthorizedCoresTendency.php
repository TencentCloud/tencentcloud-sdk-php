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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 未授权核数趋势
 *
 * @method string getDateTime() 获取日期
 * @method void setDateTime(string $DateTime) 设置日期
 * @method integer getCoresCount() 获取未授权的核数
 * @method void setCoresCount(integer $CoresCount) 设置未授权的核数
 */
class UnauthorizedCoresTendency extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $DateTime;

    /**
     * @var integer 未授权的核数
     */
    public $CoresCount;

    /**
     * @param string $DateTime 日期
     * @param integer $CoresCount 未授权的核数
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
        if (array_key_exists("DateTime",$param) and $param["DateTime"] !== null) {
            $this->DateTime = $param["DateTime"];
        }

        if (array_key_exists("CoresCount",$param) and $param["CoresCount"] !== null) {
            $this->CoresCount = $param["CoresCount"];
        }
    }
}
