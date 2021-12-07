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
 * 运行时趋势信息
 *
 * @method string getCurTime() 获取当天时间
 * @method void setCurTime(string $CurTime) 设置当天时间
 * @method integer getCnt() 获取当前数量
 * @method void setCnt(integer $Cnt) 设置当前数量
 */
class RunTimeTendencyInfo extends AbstractModel
{
    /**
     * @var string 当天时间
     */
    public $CurTime;

    /**
     * @var integer 当前数量
     */
    public $Cnt;

    /**
     * @param string $CurTime 当天时间
     * @param integer $Cnt 当前数量
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
        if (array_key_exists("CurTime",$param) and $param["CurTime"] !== null) {
            $this->CurTime = $param["CurTime"];
        }

        if (array_key_exists("Cnt",$param) and $param["Cnt"] !== null) {
            $this->Cnt = $param["Cnt"];
        }
    }
}
