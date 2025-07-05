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
 * 基线影响服务器列表数据
 *
 * @method array getEventLevelList() 获取事件等级与次数列表
 * @method void setEventLevelList(array $EventLevelList) 设置事件等级与次数列表
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method integer getScore() 获取计算权重的分数
 * @method void setScore(integer $Score) 设置计算权重的分数
 */
class BaselineHostTopList extends AbstractModel
{
    /**
     * @var array 事件等级与次数列表
     */
    public $EventLevelList;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var integer 计算权重的分数
     */
    public $Score;

    /**
     * @param array $EventLevelList 事件等级与次数列表
     * @param string $HostName 主机名称
     * @param string $Quuid 主机Quuid
     * @param integer $Score 计算权重的分数
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
        if (array_key_exists("EventLevelList",$param) and $param["EventLevelList"] !== null) {
            $this->EventLevelList = [];
            foreach ($param["EventLevelList"] as $key => $value){
                $obj = new BaselineEventLevelInfo();
                $obj->deserialize($value);
                array_push($this->EventLevelList, $obj);
            }
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
