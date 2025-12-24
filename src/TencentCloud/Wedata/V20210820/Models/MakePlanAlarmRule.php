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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 补录计划告警规则
 *
 * @method integer getAlarmLevel() 获取告警的级别
1 -- 普通
2 -- 重要
3 -- 紧急
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警的级别
1 -- 普通
2 -- 重要
3 -- 紧急
 * @method array getAlarmTypes() 获取告警的类型，补录计划支持：
start：启动告警
failure：失败告警
success：成功告警
overtime：超过配置时间告警

 * @method void setAlarmTypes(array $AlarmTypes) 设置告警的类型，补录计划支持：
start：启动告警
failure：失败告警
success：成功告警
overtime：超过配置时间告警

 * @method string getExtInfo() 获取告警超时时间
 * @method void setExtInfo(string $ExtInfo) 设置告警超时时间
 * @method array getAlarmGroup() 获取告警接受人 升级人配置信息
 * @method void setAlarmGroup(array $AlarmGroup) 设置告警接受人 升级人配置信息
 */
class MakePlanAlarmRule extends AbstractModel
{
    /**
     * @var integer 告警的级别
1 -- 普通
2 -- 重要
3 -- 紧急
     */
    public $AlarmLevel;

    /**
     * @var array 告警的类型，补录计划支持：
start：启动告警
failure：失败告警
success：成功告警
overtime：超过配置时间告警

     */
    public $AlarmTypes;

    /**
     * @var string 告警超时时间
     */
    public $ExtInfo;

    /**
     * @var array 告警接受人 升级人配置信息
     */
    public $AlarmGroup;

    /**
     * @param integer $AlarmLevel 告警的级别
1 -- 普通
2 -- 重要
3 -- 紧急
     * @param array $AlarmTypes 告警的类型，补录计划支持：
start：启动告警
failure：失败告警
success：成功告警
overtime：超过配置时间告警

     * @param string $ExtInfo 告警超时时间
     * @param array $AlarmGroup 告警接受人 升级人配置信息
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
        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmTypes",$param) and $param["AlarmTypes"] !== null) {
            $this->AlarmTypes = $param["AlarmTypes"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("AlarmGroup",$param) and $param["AlarmGroup"] !== null) {
            $this->AlarmGroup = [];
            foreach ($param["AlarmGroup"] as $key => $value){
                $obj = new AlarmGroup();
                $obj->deserialize($value);
                array_push($this->AlarmGroup, $obj);
            }
        }
    }
}
