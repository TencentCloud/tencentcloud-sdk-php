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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * opa策略开关
 *
 * @method string getEnforcementAction() 获取策略运行模式：dryrun空跑不生效，deny拦截生效
 * @method void setEnforcementAction(string $EnforcementAction) 设置策略运行模式：dryrun空跑不生效，deny拦截生效
 * @method string getName() 获取策略英文名称
 * @method void setName(string $Name) 设置策略英文名称
 * @method string getKind() 获取策略模版类型
 * @method void setKind(string $Kind) 设置策略模版类型
 * @method string getEnabledStatus() 获取策略开关状态：open打开，close关闭
 * @method void setEnabledStatus(string $EnabledStatus) 设置策略开关状态：open打开，close关闭
 * @method array getOpenConstraintInfoList() 获取策略关联的实例列表
 * @method void setOpenConstraintInfoList(array $OpenConstraintInfoList) 设置策略关联的实例列表
 */
class OpenPolicySwitch extends AbstractModel
{
    /**
     * @var string 策略运行模式：dryrun空跑不生效，deny拦截生效
     */
    public $EnforcementAction;

    /**
     * @var string 策略英文名称
     */
    public $Name;

    /**
     * @var string 策略模版类型
     */
    public $Kind;

    /**
     * @var string 策略开关状态：open打开，close关闭
     */
    public $EnabledStatus;

    /**
     * @var array 策略关联的实例列表
     */
    public $OpenConstraintInfoList;

    /**
     * @param string $EnforcementAction 策略运行模式：dryrun空跑不生效，deny拦截生效
     * @param string $Name 策略英文名称
     * @param string $Kind 策略模版类型
     * @param string $EnabledStatus 策略开关状态：open打开，close关闭
     * @param array $OpenConstraintInfoList 策略关联的实例列表
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
        if (array_key_exists("EnforcementAction",$param) and $param["EnforcementAction"] !== null) {
            $this->EnforcementAction = $param["EnforcementAction"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("EnabledStatus",$param) and $param["EnabledStatus"] !== null) {
            $this->EnabledStatus = $param["EnabledStatus"];
        }

        if (array_key_exists("OpenConstraintInfoList",$param) and $param["OpenConstraintInfoList"] !== null) {
            $this->OpenConstraintInfoList = [];
            foreach ($param["OpenConstraintInfoList"] as $key => $value){
                $obj = new OpenConstraintInfo();
                $obj->deserialize($value);
                array_push($this->OpenConstraintInfoList, $obj);
            }
        }
    }
}
