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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用列表其它字段
 *
 * @method integer getInstanceCount() 获取总实例个数
 * @method void setInstanceCount(integer $InstanceCount) 设置总实例个数
 * @method integer getRunInstanceCount() 获取运行实例个数
 * @method void setRunInstanceCount(integer $RunInstanceCount) 设置运行实例个数
 * @method integer getGroupCount() 获取应用下部署组个数
 * @method void setGroupCount(integer $GroupCount) 设置应用下部署组个数
 * @method string getRunningGroupCount() 获取运行中部署组个数
 * @method void setRunningGroupCount(string $RunningGroupCount) 设置运行中部署组个数
 * @method string getAbnormalCount() 获取异常部署组个数
 * @method void setAbnormalCount(string $AbnormalCount) 设置异常部署组个数
 */
class ApplicationAttribute extends AbstractModel
{
    /**
     * @var integer 总实例个数
     */
    public $InstanceCount;

    /**
     * @var integer 运行实例个数
     */
    public $RunInstanceCount;

    /**
     * @var integer 应用下部署组个数
     */
    public $GroupCount;

    /**
     * @var string 运行中部署组个数
     */
    public $RunningGroupCount;

    /**
     * @var string 异常部署组个数
     */
    public $AbnormalCount;

    /**
     * @param integer $InstanceCount 总实例个数
     * @param integer $RunInstanceCount 运行实例个数
     * @param integer $GroupCount 应用下部署组个数
     * @param string $RunningGroupCount 运行中部署组个数
     * @param string $AbnormalCount 异常部署组个数
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
        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("RunInstanceCount",$param) and $param["RunInstanceCount"] !== null) {
            $this->RunInstanceCount = $param["RunInstanceCount"];
        }

        if (array_key_exists("GroupCount",$param) and $param["GroupCount"] !== null) {
            $this->GroupCount = $param["GroupCount"];
        }

        if (array_key_exists("RunningGroupCount",$param) and $param["RunningGroupCount"] !== null) {
            $this->RunningGroupCount = $param["RunningGroupCount"];
        }

        if (array_key_exists("AbnormalCount",$param) and $param["AbnormalCount"] !== null) {
            $this->AbnormalCount = $param["AbnormalCount"];
        }
    }
}
