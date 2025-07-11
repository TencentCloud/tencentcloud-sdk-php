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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份快照保留策略
 *
 * @method integer getType() 获取0-不主动删除；1-超过指定时间周期自动删除；2-保留指定数据快照
 * @method void setType(integer $Type) 设置0-不主动删除；1-超过指定时间周期自动删除；2-保留指定数据快照
 * @method integer getRemainDays() 获取保留快照的时间
 * @method void setRemainDays(integer $RemainDays) 设置保留快照的时间
 * @method integer getRemainLatestNum() 获取保留最新快照的数量
 * @method void setRemainLatestNum(integer $RemainLatestNum) 设置保留最新快照的数量
 */
class SnapshotRemainPolicy extends AbstractModel
{
    /**
     * @var integer 0-不主动删除；1-超过指定时间周期自动删除；2-保留指定数据快照
     */
    public $Type;

    /**
     * @var integer 保留快照的时间
     */
    public $RemainDays;

    /**
     * @var integer 保留最新快照的数量
     */
    public $RemainLatestNum;

    /**
     * @param integer $Type 0-不主动删除；1-超过指定时间周期自动删除；2-保留指定数据快照
     * @param integer $RemainDays 保留快照的时间
     * @param integer $RemainLatestNum 保留最新快照的数量
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RemainDays",$param) and $param["RemainDays"] !== null) {
            $this->RemainDays = $param["RemainDays"];
        }

        if (array_key_exists("RemainLatestNum",$param) and $param["RemainLatestNum"] !== null) {
            $this->RemainLatestNum = $param["RemainLatestNum"];
        }
    }
}
