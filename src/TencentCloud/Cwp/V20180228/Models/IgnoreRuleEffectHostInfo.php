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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 忽略检测项影响主机信息
 *
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method integer getLevel() 获取危害等级：1-低位，2-中危，3-高危，4-严重
 * @method void setLevel(integer $Level) 设置危害等级：1-低位，2-中危，3-高危，4-严重
 * @method array getTagList() 获取主机标签数组
 * @method void setTagList(array $TagList) 设置主机标签数组
 * @method integer getStatus() 获取状态：0-未通过，1-忽略，3-已通过，5-检测中
 * @method void setStatus(integer $Status) 设置状态：0-未通过，1-忽略，3-已通过，5-检测中
 * @method string getLastScanTime() 获取最后检测时间
 * @method void setLastScanTime(string $LastScanTime) 设置最后检测时间
 * @method integer getEventId() 获取事件id
 * @method void setEventId(integer $EventId) 设置事件id
 * @method string getQuuid() 获取主机quuid
 * @method void setQuuid(string $Quuid) 设置主机quuid
 */
class IgnoreRuleEffectHostInfo extends AbstractModel
{
    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var integer 危害等级：1-低位，2-中危，3-高危，4-严重
     */
    public $Level;

    /**
     * @var array 主机标签数组
     */
    public $TagList;

    /**
     * @var integer 状态：0-未通过，1-忽略，3-已通过，5-检测中
     */
    public $Status;

    /**
     * @var string 最后检测时间
     */
    public $LastScanTime;

    /**
     * @var integer 事件id
     */
    public $EventId;

    /**
     * @var string 主机quuid
     */
    public $Quuid;

    /**
     * @param string $HostName 主机名称
     * @param integer $Level 危害等级：1-低位，2-中危，3-高危，4-严重
     * @param array $TagList 主机标签数组
     * @param integer $Status 状态：0-未通过，1-忽略，3-已通过，5-检测中
     * @param string $LastScanTime 最后检测时间
     * @param integer $EventId 事件id
     * @param string $Quuid 主机quuid
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
