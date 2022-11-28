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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBlockIgnoreList请求参数结构体
 *
 * @method integer getRuleType() 获取1封禁列表 2 放通列表
 * @method void setRuleType(integer $RuleType) 设置1封禁列表 2 放通列表
 * @method array getIOC() 获取IP、Domain二选一，不能同时为空
 * @method void setIOC(array $IOC) 设置IP、Domain二选一，不能同时为空
 * @method string getIocAction() 获取可选值：delete（删除）、edit（编辑）、add（添加）  其他值无效
 * @method void setIocAction(string $IocAction) 设置可选值：delete（删除）、edit（编辑）、add（添加）  其他值无效
 * @method string getStartTime() 获取时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填
 * @method void setStartTime(string $StartTime) 设置时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填
 * @method string getEndTime() 获取时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填，必须大于当前时间且大于StartTime
 * @method void setEndTime(string $EndTime) 设置时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填，必须大于当前时间且大于StartTime
 */
class ModifyBlockIgnoreListRequest extends AbstractModel
{
    /**
     * @var integer 1封禁列表 2 放通列表
     */
    public $RuleType;

    /**
     * @var array IP、Domain二选一，不能同时为空
     */
    public $IOC;

    /**
     * @var string 可选值：delete（删除）、edit（编辑）、add（添加）  其他值无效
     */
    public $IocAction;

    /**
     * @var string 时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填
     */
    public $StartTime;

    /**
     * @var string 时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填，必须大于当前时间且大于StartTime
     */
    public $EndTime;

    /**
     * @param integer $RuleType 1封禁列表 2 放通列表
     * @param array $IOC IP、Domain二选一，不能同时为空
     * @param string $IocAction 可选值：delete（删除）、edit（编辑）、add（添加）  其他值无效
     * @param string $StartTime 时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填
     * @param string $EndTime 时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填，必须大于当前时间且大于StartTime
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("IOC",$param) and $param["IOC"] !== null) {
            $this->IOC = [];
            foreach ($param["IOC"] as $key => $value){
                $obj = new IocListData();
                $obj->deserialize($value);
                array_push($this->IOC, $obj);
            }
        }

        if (array_key_exists("IocAction",$param) and $param["IocAction"] !== null) {
            $this->IocAction = $param["IocAction"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
