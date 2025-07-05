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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOperationTask请求参数结构体
 *
 * @method string getName() 获取运维任务名称
 * @method void setName(string $Name) 设置运维任务名称
 * @method integer getType() 获取运维任务类型,1 - 手工执行, 2 - 周期性自动执行
 * @method void setType(integer $Type) 设置运维任务类型,1 - 手工执行, 2 - 周期性自动执行
 * @method string getAccount() 获取执行账号
 * @method void setAccount(string $Account) 设置执行账号
 * @method integer getTimeout() 获取超时时间,单位秒
 * @method void setTimeout(integer $Timeout) 设置超时时间,单位秒
 * @method string getScript() 获取执行脚本内容
 * @method void setScript(string $Script) 设置执行脚本内容
 * @method array getDeviceIdSet() 获取执行主机集合，满足条件以下三个条件：1. 资产绑定可用的专业版或国密版堡垒机服务；2、资产类型为linux资产；3、用户具有资产权限，且资产添加了指定执行账号
 * @method void setDeviceIdSet(array $DeviceIdSet) 设置执行主机集合，满足条件以下三个条件：1. 资产绑定可用的专业版或国密版堡垒机服务；2、资产类型为linux资产；3、用户具有资产权限，且资产添加了指定执行账号
 * @method integer getPeriod() 获取执行间隔，单位天. 手工执行时无需传入
 * @method void setPeriod(integer $Period) 设置执行间隔，单位天. 手工执行时无需传入
 * @method string getFirstTime() 获取首次执行日期 默认1970-01-01T08:00:01+08:00,手工执行时无需传入
 * @method void setFirstTime(string $FirstTime) 设置首次执行日期 默认1970-01-01T08:00:01+08:00,手工执行时无需传入
 * @method integer getEncoding() 获取Script参数是否需要进行base64编码后传递，1-需要进行base64编码后传递，非1值-不需要进行base64编码后传递
 * @method void setEncoding(integer $Encoding) 设置Script参数是否需要进行base64编码后传递，1-需要进行base64编码后传递，非1值-不需要进行base64编码后传递
 */
class CreateOperationTaskRequest extends AbstractModel
{
    /**
     * @var string 运维任务名称
     */
    public $Name;

    /**
     * @var integer 运维任务类型,1 - 手工执行, 2 - 周期性自动执行
     */
    public $Type;

    /**
     * @var string 执行账号
     */
    public $Account;

    /**
     * @var integer 超时时间,单位秒
     */
    public $Timeout;

    /**
     * @var string 执行脚本内容
     */
    public $Script;

    /**
     * @var array 执行主机集合，满足条件以下三个条件：1. 资产绑定可用的专业版或国密版堡垒机服务；2、资产类型为linux资产；3、用户具有资产权限，且资产添加了指定执行账号
     */
    public $DeviceIdSet;

    /**
     * @var integer 执行间隔，单位天. 手工执行时无需传入
     */
    public $Period;

    /**
     * @var string 首次执行日期 默认1970-01-01T08:00:01+08:00,手工执行时无需传入
     */
    public $FirstTime;

    /**
     * @var integer Script参数是否需要进行base64编码后传递，1-需要进行base64编码后传递，非1值-不需要进行base64编码后传递
     */
    public $Encoding;

    /**
     * @param string $Name 运维任务名称
     * @param integer $Type 运维任务类型,1 - 手工执行, 2 - 周期性自动执行
     * @param string $Account 执行账号
     * @param integer $Timeout 超时时间,单位秒
     * @param string $Script 执行脚本内容
     * @param array $DeviceIdSet 执行主机集合，满足条件以下三个条件：1. 资产绑定可用的专业版或国密版堡垒机服务；2、资产类型为linux资产；3、用户具有资产权限，且资产添加了指定执行账号
     * @param integer $Period 执行间隔，单位天. 手工执行时无需传入
     * @param string $FirstTime 首次执行日期 默认1970-01-01T08:00:01+08:00,手工执行时无需传入
     * @param integer $Encoding Script参数是否需要进行base64编码后传递，1-需要进行base64编码后传递，非1值-不需要进行base64编码后传递
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Script",$param) and $param["Script"] !== null) {
            $this->Script = $param["Script"];
        }

        if (array_key_exists("DeviceIdSet",$param) and $param["DeviceIdSet"] !== null) {
            $this->DeviceIdSet = $param["DeviceIdSet"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }
    }
}
