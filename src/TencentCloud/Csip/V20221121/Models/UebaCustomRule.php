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
 * 用户行为分析  自定义策略结构体
 *
 * @method string getRuleName() 获取策略名称
 * @method void setRuleName(string $RuleName) 设置策略名称
 * @method integer getUserType() 获取1: 云账号
2: 自定义用户
 * @method void setUserType(integer $UserType) 设置1: 云账号
2: 自定义用户
 * @method integer getTimeInterval() 获取发生时间
1：10分钟
2：1小时
3：一天
4：一周
5：一个月
 * @method void setTimeInterval(integer $TimeInterval) 设置发生时间
1：10分钟
2：1小时
3：一天
4：一周
5：一个月
 * @method UebaEventContent getEventContent() 获取发生事件
 * @method void setEventContent(UebaEventContent $EventContent) 设置发生事件
 * @method string getAlertName() 获取告警名称
 * @method void setAlertName(string $AlertName) 设置告警名称
 * @method integer getAlterLevel() 获取告警类型
0:  提示
1:  低危
2:  中危
3:  高危
4:  严重
 * @method void setAlterLevel(integer $AlterLevel) 设置告警类型
0:  提示
1:  低危
2:  中危
3:  高危
4:  严重
 * @method array getOperator() 获取操作者
 * @method void setOperator(array $Operator) 设置操作者
 * @method array getOperateObject() 获取操作对象
 * @method void setOperateObject(array $OperateObject) 设置操作对象
 * @method array getOperateMethod() 获取操作方式
 * @method void setOperateMethod(array $OperateMethod) 设置操作方式
 * @method string getLogType() 获取日志类型
 * @method void setLogType(string $LogType) 设置日志类型
 * @method string getLogTypeStr() 获取日志中文名
 * @method void setLogTypeStr(string $LogTypeStr) 设置日志中文名
 */
class UebaCustomRule extends AbstractModel
{
    /**
     * @var string 策略名称
     */
    public $RuleName;

    /**
     * @var integer 1: 云账号
2: 自定义用户
     */
    public $UserType;

    /**
     * @var integer 发生时间
1：10分钟
2：1小时
3：一天
4：一周
5：一个月
     */
    public $TimeInterval;

    /**
     * @var UebaEventContent 发生事件
     */
    public $EventContent;

    /**
     * @var string 告警名称
     */
    public $AlertName;

    /**
     * @var integer 告警类型
0:  提示
1:  低危
2:  中危
3:  高危
4:  严重
     */
    public $AlterLevel;

    /**
     * @var array 操作者
     */
    public $Operator;

    /**
     * @var array 操作对象
     */
    public $OperateObject;

    /**
     * @var array 操作方式
     */
    public $OperateMethod;

    /**
     * @var string 日志类型
     */
    public $LogType;

    /**
     * @var string 日志中文名
     */
    public $LogTypeStr;

    /**
     * @param string $RuleName 策略名称
     * @param integer $UserType 1: 云账号
2: 自定义用户
     * @param integer $TimeInterval 发生时间
1：10分钟
2：1小时
3：一天
4：一周
5：一个月
     * @param UebaEventContent $EventContent 发生事件
     * @param string $AlertName 告警名称
     * @param integer $AlterLevel 告警类型
0:  提示
1:  低危
2:  中危
3:  高危
4:  严重
     * @param array $Operator 操作者
     * @param array $OperateObject 操作对象
     * @param array $OperateMethod 操作方式
     * @param string $LogType 日志类型
     * @param string $LogTypeStr 日志中文名
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("TimeInterval",$param) and $param["TimeInterval"] !== null) {
            $this->TimeInterval = $param["TimeInterval"];
        }

        if (array_key_exists("EventContent",$param) and $param["EventContent"] !== null) {
            $this->EventContent = new UebaEventContent();
            $this->EventContent->deserialize($param["EventContent"]);
        }

        if (array_key_exists("AlertName",$param) and $param["AlertName"] !== null) {
            $this->AlertName = $param["AlertName"];
        }

        if (array_key_exists("AlterLevel",$param) and $param["AlterLevel"] !== null) {
            $this->AlterLevel = $param["AlterLevel"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("OperateObject",$param) and $param["OperateObject"] !== null) {
            $this->OperateObject = $param["OperateObject"];
        }

        if (array_key_exists("OperateMethod",$param) and $param["OperateMethod"] !== null) {
            $this->OperateMethod = $param["OperateMethod"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogTypeStr",$param) and $param["LogTypeStr"] !== null) {
            $this->LogTypeStr = $param["LogTypeStr"];
        }
    }
}
