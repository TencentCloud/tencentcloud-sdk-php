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
 * 用于返回实例存在的未回收的ip数量
 *
 * @method string getVip() 获取未回收的旧ip
 * @method void setVip(string $Vip) 设置未回收的旧ip
 * @method string getRecycleTime() 获取ip回收时间
 * @method void setRecycleTime(string $RecycleTime) 设置ip回收时间
 * @method integer getOldIpRetainTime() 获取旧IP保留时间小时数
 * @method void setOldIpRetainTime(integer $OldIpRetainTime) 设置旧IP保留时间小时数
 */
class OldVip extends AbstractModel
{
    /**
     * @var string 未回收的旧ip
     */
    public $Vip;

    /**
     * @var string ip回收时间
     */
    public $RecycleTime;

    /**
     * @var integer 旧IP保留时间小时数
     */
    public $OldIpRetainTime;

    /**
     * @param string $Vip 未回收的旧ip
     * @param string $RecycleTime ip回收时间
     * @param integer $OldIpRetainTime 旧IP保留时间小时数
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("RecycleTime",$param) and $param["RecycleTime"] !== null) {
            $this->RecycleTime = $param["RecycleTime"];
        }

        if (array_key_exists("OldIpRetainTime",$param) and $param["OldIpRetainTime"] !== null) {
            $this->OldIpRetainTime = $param["OldIpRetainTime"];
        }
    }
}
