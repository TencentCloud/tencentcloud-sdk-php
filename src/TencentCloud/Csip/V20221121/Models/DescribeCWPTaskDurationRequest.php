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
 * DescribeCWPTaskDuration请求参数结构体
 *
 * @method integer getUuidCnt() 获取需要执行任务的主机数
 * @method void setUuidCnt(integer $UuidCnt) 设置需要执行任务的主机数
 * @method boolean getTimingScan() 获取是否定时扫描
 * @method void setTimingScan(boolean $TimingScan) 设置是否定时扫描
 */
class DescribeCWPTaskDurationRequest extends AbstractModel
{
    /**
     * @var integer 需要执行任务的主机数
     */
    public $UuidCnt;

    /**
     * @var boolean 是否定时扫描
     */
    public $TimingScan;

    /**
     * @param integer $UuidCnt 需要执行任务的主机数
     * @param boolean $TimingScan 是否定时扫描
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
        if (array_key_exists("UuidCnt",$param) and $param["UuidCnt"] !== null) {
            $this->UuidCnt = $param["UuidCnt"];
        }

        if (array_key_exists("TimingScan",$param) and $param["TimingScan"] !== null) {
            $this->TimingScan = $param["TimingScan"];
        }
    }
}
