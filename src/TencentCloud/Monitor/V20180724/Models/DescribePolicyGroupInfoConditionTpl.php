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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getGroupId() 获取策略组id
 * @method void setGroupId(integer $GroupId) 设置策略组id
 * @method string getGroupName() 获取策略组名称
 * @method void setGroupName(string $GroupName) 设置策略组名称
 * @method string getViewName() 获取策略类型
 * @method void setViewName(string $ViewName) 设置策略类型
 * @method string getRemark() 获取策略组说明
 * @method void setRemark(string $Remark) 设置策略组说明
 * @method string getLastEditUin() 获取最后编辑的用户uin
 * @method void setLastEditUin(string $LastEditUin) 设置最后编辑的用户uin
 */

/**
 *查询策略输出的模板策略组信息
 */
class DescribePolicyGroupInfoConditionTpl extends AbstractModel
{
    /**
     * @var integer 策略组id
     */
    public $GroupId;

    /**
     * @var string 策略组名称
     */
    public $GroupName;

    /**
     * @var string 策略类型
     */
    public $ViewName;

    /**
     * @var string 策略组说明
     */
    public $Remark;

    /**
     * @var string 最后编辑的用户uin
     */
    public $LastEditUin;
    /**
     * @param integer $GroupId 策略组id
     * @param string $GroupName 策略组名称
     * @param string $ViewName 策略类型
     * @param string $Remark 策略组说明
     * @param string $LastEditUin 最后编辑的用户uin
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }
    }
}
