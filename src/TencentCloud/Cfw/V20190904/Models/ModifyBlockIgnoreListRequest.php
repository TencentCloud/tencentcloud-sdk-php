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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBlockIgnoreList请求参数结构体
 *
 * @method integer getRuleType() 获取<p>1封禁列表 2 放通列表</p>
 * @method void setRuleType(integer $RuleType) 设置<p>1封禁列表 2 放通列表</p>
 * @method array getIOC() 获取<p>IP、Domain二选一（注：封禁列表，只能填写IP），不能同时为空</p>
 * @method void setIOC(array $IOC) 设置<p>IP、Domain二选一（注：封禁列表，只能填写IP），不能同时为空</p>
 * @method string getIocAction() 获取<p>可选值：delete（删除）、edit（编辑）、add（添加）  其他值无效</p>
 * @method void setIocAction(string $IocAction) 设置<p>可选值：delete（删除）、edit（编辑）、add（添加）  其他值无效</p>
 * @method string getStartTime() 获取<p>时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填</p>
 * @method void setStartTime(string $StartTime) 设置<p>时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填</p>
 * @method string getEndTime() 获取<p>时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填，必须大于当前时间且大于StartTime</p>
 * @method void setEndTime(string $EndTime) 设置<p>时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填，必须大于当前时间且大于StartTime</p>
 * @method integer getIsFromWeChat() 获取<p>是否来自微信</p><p>取值范围：[0, 1]</p>
 * @method void setIsFromWeChat(integer $IsFromWeChat) 设置<p>是否来自微信</p><p>取值范围：[0, 1]</p>
 */
class ModifyBlockIgnoreListRequest extends AbstractModel
{
    /**
     * @var integer <p>1封禁列表 2 放通列表</p>
     */
    public $RuleType;

    /**
     * @var array <p>IP、Domain二选一（注：封禁列表，只能填写IP），不能同时为空</p>
     */
    public $IOC;

    /**
     * @var string <p>可选值：delete（删除）、edit（编辑）、add（添加）  其他值无效</p>
     */
    public $IocAction;

    /**
     * @var string <p>时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填</p>
     */
    public $StartTime;

    /**
     * @var string <p>时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填，必须大于当前时间且大于StartTime</p>
     */
    public $EndTime;

    /**
     * @var integer <p>是否来自微信</p><p>取值范围：[0, 1]</p>
     */
    public $IsFromWeChat;

    /**
     * @param integer $RuleType <p>1封禁列表 2 放通列表</p>
     * @param array $IOC <p>IP、Domain二选一（注：封禁列表，只能填写IP），不能同时为空</p>
     * @param string $IocAction <p>可选值：delete（删除）、edit（编辑）、add（添加）  其他值无效</p>
     * @param string $StartTime <p>时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填</p>
     * @param string $EndTime <p>时间格式：yyyy-MM-dd HH:mm:ss，IocAction 为edit或add时必填，必须大于当前时间且大于StartTime</p>
     * @param integer $IsFromWeChat <p>是否来自微信</p><p>取值范围：[0, 1]</p>
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

        if (array_key_exists("IsFromWeChat",$param) and $param["IsFromWeChat"] !== null) {
            $this->IsFromWeChat = $param["IsFromWeChat"];
        }
    }
}
